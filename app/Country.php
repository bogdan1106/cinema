<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Country extends Model
{
    protected $fillable = ['title'];

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
                'source' => 'title'
            ]
        ];
    }

    public static function add($fields)
    {
        $country = new self();
        $country->fill($fields);
        return $country->save();
    }

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }


    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }
}
