<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Sale;
use App\Models\Customer;
use App\Models\Package;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
         Customer::factory(200)->create();
         Sale::factory(500)->create();
        //  Package::create([
        //     'name' => 'Basic',
        //     'price' => '19.99',
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s')
        // ]);

        // Package::create([
        //     'name' => 'Professional',
        //     'price' => '39.99',
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s')
        // ]);

        // Package::create([
        //     'name' => 'Business',
        //     'price' => '59.99',
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s')
        // ]);
        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }

    // public function run()
    // {
    //     // \App\Models\User::factory(10)->create();
    //     $this->call([
    //         CustomerTableSeeder::class

    //     ]);
    // }


}
