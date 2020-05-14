<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Illuminate\Support\Str;

use App\Models\User;
use App\Models\Sector;
use App\Models\Graduation;
use App\Models\IP;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
| Consult database/factories/Faker.md to see the available fakers 
|
*/
$factory->define(User::class, function (Faker $faker) {
    $baseIp = '10.147.214.';
    return [
        'name' => $faker->name,
        'sector_id' => Sector::all()->random()->id,
        'graduation_id' => Graduation::all()->random()->id,
        'ip' => $baseIp.$faker->numberBetween(0, 255),
        'created_at' => date('Y-m-d H:i:s')
    ];
});
