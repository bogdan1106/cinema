<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Actor extends Model
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
        return $this->belongsToMany(Picture::class);
    }

    public static function add($fields)
    {
        $actor = new static();
        $actor->fill($fields);
        $actor->save();
        return $actor;
    }

    public  function edit($fields)
    {

        $this->fill($fields);
        $this->save();
        return $this;
    }
}
