<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Page;
use Faker\Generator as Faker;

$factory->define(Page::class, function (Faker $faker) {

    $title = rtrim($faker->realText($faker->numberBetween(15,45)),".");
    return [
        'title' => $title,
        'small_text' => $faker->realText(rand(100, 200)),
        'text' => $faker->realText(rand(300, 500)),
        'img' => $faker->imageUrl(750, 375),
        'img_small' => $faker->imageUrl(80, 80),
        'slug' => Str::slug($title),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
 //       'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
