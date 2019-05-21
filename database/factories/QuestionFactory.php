<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Question::class, function (Faker $faker) {
    return [
        'title'=> rtrim($faker->sentences(ran(5,10)), "."),
        'body' => $faker->paragraphs(ran(3,7),true),
        'views'=>rand(0,10),
        'votes'=>rand(-3,10),
        'answers'=>rand(0,10)
        //
    ];
});
