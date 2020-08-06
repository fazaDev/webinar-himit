<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Illuminate\Support\Str;
use Faker\Generator as Faker;


$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->sentence;
    $slug = Str::slug($title);
    return [
        'title' => $title,
        'slug' => $slug,
        'content' => $faker->text(400),
        'image' => 'https://picsum.photos/200',
        'status' => $faker->numberBetween($min = 0, $max = 1),
        'author_id' => factory(App\User::class)->create()->id,
    ];
});
