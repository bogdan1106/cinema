<?php

namespace App;

use App\Traits\UploadImage;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Picture extends Model
{

   protected const IMAGE_STORAGE_NAME = 'posters';

    protected $fillable = ['title_ru', 'title_eng',
        'budget', 'year', 'description', 'kinopoisk_picture_id', 'picture_rating'];

    use Sluggable;
    use UploadImage;

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
        $picture->views = rand(1250, 5550);
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

    public function comments()
    {
        return $this->HasMany(Comment::class);
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

//    public function uploadImage($image)
//    {
//        if ($image == null) return ;
//
//        $this->deleteOldPoster();
//
//        // save the  picture  file
//        $imageName = Storage::disk(self::IMAGE_STORAGE_NAME)->put('', $image);
//        $this->resizePoster($imageName);
//
//        // save the image file name in db
//        $this->image = $imageName;
//        $this->save();
//
//        }
//
//
//    public function resizePoster($imageName)
//    {
//        //resize poster and change quality
//        $imagePath = Storage::disk('posters')->path($imageName);
//        $img = Image::make($imagePath)->resize(250, 300)
//            ->save($imagePath, 90);
//    }
//
//
//    public function deleteOldPoster()
//    {
//        // Check the old image file on disk and delete if it exist
//        if ($this->image != null && Storage::disk('posters')->exists( $this->image))
//        {
//            Storage::disk('posters')->delete($this->image);
//        }
//    }


//    public function getImage()
//    {
//        if(Storage::disk('posters')->exists($this->poster))
//        {
//            return Storage::disk('posters')->url($this->poster);
//        }
//    }


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
        return self::select('id', 'title_eng', 'slug',  'image', 'picture_rating', 'year', 'is_new')
            ->orderBy('id', 'DESC')->take(8)->get();
    }

    public static function getNewPictures()
    {
       return self::select('id', 'title_eng' , 'slug', 'image', 'picture_rating', 'year', 'is_new')
            ->where('year', '=' ,  date('Y'))->take(8)->get();
    }


    public static function getPopularPictures()
    {
      return  self::select('id', 'title_eng' , 'slug', 'image', 'picture_rating', 'year', 'views', 'is_new')
          ->orderBy('picture_rating', 'DESC')->take(8)->get();
    }

    public static function getBestCartoons()
    {
         return self::select('id', 'title_eng', 'slug' , 'image', 'picture_rating', 'year', 'is_new')
             ->where('category_id', 2)
             ->take(12)->get();
    }

    public static function getResentMovies()
    {
        return self::select('id', 'title_eng', 'slug' , 'image', 'picture_rating', 'year', 'is_new')
            ->where('category_id', 1)
            ->take(12)->get();
    }

    //get all genres by 1 string
    public function getGenresInString()
    {
        if (!$this->genres->isEmpty())
        {

            return $genres = implode(', ', $this->genres()->pluck('title')->all());

        }
    }


    //get all actors by 1 string
    public function getActorsInString()
    {
        if(!$this->actors->isEmpty())
        {
            return $actors = implode(', ', $this->actors()->pluck('name')->all());
        }
    }

    public function getAdminComments()
    {
       return $this->comments()->where('is_admin', 1)->get();
    }

    public function getComments()
    {
        return $this->comments()->where('is_admin', 0)
            ->where('is_clear', 1)->orderBy('id', 'desc')
                ->get();
    }

    public static function getRandomPicture()
    {
        return Picture::orderByRaw("RAND()")->first();
    }

    public function getVideoFrame()
    {
        return '<iframe width="689" height="388" src="https://www.youtube.com/embed/' .$this->video_code .'" frameborder="0"  allowfullscreen></iframe>';
    }

    public function getShortDescription()
    {
        if(strlen($this->description) > 440)
        return substr($this->description, 0, 440) . '...';
        else return $this->description;
    }

    public static function search($search)
    { $search = strtolower($search);
        if (preg_match("/^[а-я]/i", $search))
        {
            return self::where('title_ru', 'LIKE', '%'. $search .'%')->get();
        }

        return self::where('title_eng', 'LIKE', '%'. $search .'%')->get();
    }




}
