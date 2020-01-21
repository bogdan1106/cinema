<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{

    protected $fillable = ['name', 'birth_date'];

    use Sluggable;

     public function sluggable()
     {
         return [
             'slug' => [
                 'source' => 'name'
             ]
         ];
     }

     public function pictures()
     {
         return $this->hasMany(Picture::class);
     }

    public static function add($fields)
    {
        $director = new static();
        $director->fill($fields);
        $director->save();
        return $director;
    }

    public  function edit($fields)
    {
        $this->fill($fields);
        $this->save();
        return $this;
    }
}
