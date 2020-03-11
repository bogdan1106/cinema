<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'text' => $faker->sentence,
        'user_id' => 4,
        'picture_id' => 21,
        'is_admin' => 0,
        'is_clear' => 1,
    ];
});
