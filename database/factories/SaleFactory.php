<?php

namespace Database\Factories;

use App\Models\Package;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

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
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'package_id' => function(){
                return Package::inRandomOrder()->first()->id;
            },
            'customer_id' => function(){
                    return Customer::inRandomOrder()->first()->id;
            },
            'created_at' => $this->faker->dateTimeBetween('-3 years'),
        ];
    }
}


// $factory->define(App\Sale::class, function (Faker $faker) {
//     return [
//         'package_id' => function(){
//             return App\Package::inRandomOrder()->first()->id;
//         },
//         'customer_id' => function(){
//             return App\Customer::inRandomOrder()->first()->id;
//         },
//         'created_at' => $faker->dateTimeBetween('-1 years')
//     ];
// });
