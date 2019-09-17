<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Tag::class, function (Faker $faker) {
    return [
        //
        'tag'=>$faker->words,
        'title'=>$faker->sentence(mt_rand(3,10)),
        'subtitle'=>$faker->sentence(mt_rand(3,10)),
        'page_image' =>$faker->words,
        'meta_description'=> $faker->sentences,
        'reverse_direction'=>0
    ];
});
