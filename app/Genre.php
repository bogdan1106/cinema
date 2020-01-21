<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Genre extends Model

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

    public function pictures()
    {
        return $this->belongsToMany(Picture::class);
    }

    public static function add($fields)
    {
        $genre = new self();
        $genre->fill($fields);
        $genre->save();
    }

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }

}
