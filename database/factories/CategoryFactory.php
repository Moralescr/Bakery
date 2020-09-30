<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    
    $title = $faker->sentence(4);

    return [
        'name' => $title,
        'slug' => Str::slug($title), 
        'body' => $faker->text(500),
    ];
});
