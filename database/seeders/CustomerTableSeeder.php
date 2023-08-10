<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run()
    // {
    //     // Create the Author
    //     $genres = factory(App\Customer::class, 150)->create();

    //     $this->command->info('Customers Created!');
    // }
    public function run()
    {
         \App\Models\Customer::factory(150)->create();

        //  \App\Models\Customer::factory()->create([
        //      'name' => 'Test User',
        //      'email' => 'test@example.com',
        //  ]);
    }
}
