<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Tag::class, function (Faker $faker) {
    return [
        //
        'tag'=>'a',
        'title'=>'a',
        'subtitle'=>'a',
        'page_image' =>'a',
        'meta_description'=> 'a',
        'layout'=> 'blog.layouts.index',
        'reverse_direction'=>0
    ];
});
