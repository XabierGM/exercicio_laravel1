<?php

/*@var \Illuminate\Database\Eloquent\Factories\Factory;*/

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->sentence;
    return [
        'title'=> $this->faker->sentence(),
        'slug'=> $this->faker->slug(),
        'body'=> $this->faker->paragraph(50),
    ];
});

