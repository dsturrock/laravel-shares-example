<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\StockShares\StockShare::class, function (Faker $faker) {
    return [
        'company_name' => $faker->name,
        'share_instrument_name' => 'A',
        'quantity' => 1,
        'price' => 100.0055,
        'total_investment' => 200,
        'certificate_number' => 1
    ];
});
