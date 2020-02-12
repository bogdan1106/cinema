<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class Picture extends Model
{


    protected $fillable = ['title_ru', 'title_eng',
        'budget', 'year', 'description', 'kinopoisk_picture_id', 'picture_rating'];

    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title_ru'
            ]
        ];
    }


    public static function add($fields)
    {
        $picture = new Picture();
        $picture->fill($fields);
        $picture->save();
        return $picture;
    }


    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }


    public function setCategory($id)
    {
        $this->category_id = $id;
        $this->save();
    }


    public function setCountry($id)
    {
        $this->country_id = $id;
        $this->save();
    }


    public function setDirector($id)
    {
        $this->director_id = $id;
        $this->save();
    }


    public function setGenres($ids)
    {
        if ($ids == null) return ;
        $this->genres()->sync($ids);
    }


    public function setActors($ids)
    {
        if ($ids == null) return ;
        $this->actors()->sync($ids);
    }


    public function category()
    {
       return $this->belongsTo(Category::class);
    }


    public function country()
    {
        return $this->belongsTo(Country::class);
    }


    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }


    public function actors()
    {
        return $this->belongsToMany(Actor::class);
    }


    public function director()
    {
        return $this->belongsTo(Director::class);
    }


    public function getGenres()
    {
        if (!$this->genres->isEmpty())
        {
           return implode(', ', $this->genres()->pluck('title')->all());
        }
        else return 'No genre specify';
    }


    public function getActors()
    {
        if (!$this->actors->isEmpty())
        {
            return implode(', ', $this->actors()->pluck('name')->all());
        }
    }

    public function uploadImage($image)
    {
        if ($image == null) return ;

        $this->deleteOldPoster();

        // save the  picture poster file
        $imageName = Storage::disk('posters')->put('', $image);
        $this->resizePoster($imageName);

        // save the poster file name in db
        $this->poster = $imageName;
        $this->save();

        }


    public function resizePoster($imageName)
    {
        //resize poster and change quality
        $imagePath = Storage::disk('posters')->path($imageName);
        $img = Image::make($imagePath)->resize(250, 300)
            ->save($imagePath, 90);
    }


    public function deleteOldPoster()
    {
        // Check the old image file on disk and delete if it exist
        if ($this->poster != null && Storage::disk('posters')->exists( $this->poster))
        {
            Storage::disk('posters')->delete($this->poster);
        }
    }


    public function getImage()
    {
        if(Storage::disk('posters')->exists($this->poster))
        {
            return Storage::disk('posters')->url($this->poster);
        }
    }


    public function setPictureNew($status)
    {
        //set status is new to our picture
        if($status == 'on')  $this->is_new = 1;
        else $this->is_new = 0;

        $this->save();
    }


    function getRatingKinopoisk()
    {
        $rating = [];
        if (!empty($this->kinopoisk_picture_id)) {
            $xml = simplexml_load_file('https://rating.kinopoisk.ru/' . $this->kinopoisk_picture_id . '.xml');
            $names = ['kp_rating', 'imdb_rating'];
            foreach ($names as $name) {
                $new_name = str_replace('_rating', '', $name);
                $rating[$new_name] = dom_import_simplexml($xml->$name)->nodeValue;
            }
        }
        // выводим рейтинг КиноПоиск
        //echo $rating['kp'];
        return substr($rating['kp'], 0, 3);
    }


        public function getRatingImdb()
    {
        $rating = [];
        if (!empty($this->kinopoisk_picture_id)) {
            $xml = simplexml_load_file('https://rating.kinopoisk.ru/' . $this->kinopoisk_picture_id . '.xml');
            $names = ['kp_rating', 'imdb_rating'];
            foreach ($names as $name) {
                $new_name = str_replace('_rating', '', $name);
                $rating[$new_name] = dom_import_simplexml($xml->$name)->nodeValue;
            }
        }
        // выводим рейтинг КиноПоиск
        //echo $rating['kp'];
        return $rating['imdb'];

    }


    public static function getResentPictures()
    {
        return self::select('id', 'title_eng', 'poster', 'picture_rating', 'year', 'is_new')
            ->orderBy('id', 'DESC')->take(8)->get();
    }

    public static function getNewPictures()
    {
       return self::select('id', 'title_eng', 'poster', 'picture_rating', 'year', 'is_new')
            ->where('year', '=' ,  date('Y'))->take(8)->get();
    }


    public static function getPopularPictures()
    {
      return  self::select('id', 'title_eng', 'poster', 'picture_rating', 'year', 'is_new')
          ->orderBy('picture_rating', 'DESC')->take(8)->get();
    }

    public static function getBestCartoons()
    {
         return self::select('id', 'title_eng', 'poster', 'picture_rating', 'year', 'is_new')
             ->where('category_id', 2)
             ->take(12)->get();
    }

    public static function getResentMovies()
    {
        return self::select('id', 'title_eng', 'poster', 'picture_rating', 'year', 'is_new')
            ->where('category_id', 1)
            ->take(12)->get();
    }
}
