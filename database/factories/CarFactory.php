<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'brand' => $this->faker->name,
        'model' => $this->faker->name,
        'year' => $this->faker->randomFloat(0, 2000, 2021),
        'max_speed' => $this->faker->randomFloat(0, 180, 400),
        'is_automatic' => $this->faker->boolean(),
        'engine' => $this->faker->name,
        'number_of_doors' => $this->faker->randomFloat(0, 3, 5),
    ];
});
