<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PackageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Package::factory(150)->create();


        // $this->command->info('Packages Created!');
    }
}


