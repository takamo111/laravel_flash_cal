<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ranking;
use Faker\Generator as Faker;

//モデルの指定
$factory->define(Ranking::class, function (Faker $faker) {
    return [
        'user_id' => function () {
        return factory(App\User::class)->create()->id;
        },
        'percentage_correct_answer' => rand(0, 10) * 10,
    ];
});
