<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Str;

use App\Models\Contact;
use App\Models\PhoneType;
use App\Models\User;
use App\Models\Sector;
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
$fakerBR = FakerFactory::create('pt_BR');
$factory->define(Contact::class, function (Faker $faker) use($fakerBR){
    return [
        'ddd' => $fakerBR->areaCode,
        'number' => $fakerBR->phone,
        'phone_types_id' => PhoneType::all()->random()->id,
        'user_id' => User::all()->random()->id,
        'sector_id' => Sector::all()->random()->id
    ];
});
