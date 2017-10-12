<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 30.09.2017
 * Time: 1:26
 */

$factory->define(App\Employee::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});