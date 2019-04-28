<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Member;
use Faker\Generator as Faker;

// Fakerによるレコード定義
$factory->define(Member::class, function (Faker $faker) {
    return [
        'name' => $faker->name
    ];
});


// 任意の定義レコード
$factory->define(Member::class, function (Faker $faker) {
    return [
        'name' => 'member_sub_001'
    ];
}, 'member_sub_1');


$factory->define(Member::class, function (Faker $faker) {
    return [
        'name' => 'member_sub_002'
    ];
}, 'member_sub_2');


$factory->define(Member::class, function (Faker $faker) {
    return [
        'name' => 'member_sub_003'
    ];
}, 'member_sub_3');

