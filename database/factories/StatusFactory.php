<?php

use Faker\Generator as Faker;
use App\User;

$factory->define(App\Status::class, function (Faker $faker) {
   return [
      'user_id' => $faker->numberBetween(1, User::count()),
      'body' => $faker->realText(100, 2)
   ];
});
