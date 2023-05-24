<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PublishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 1; $i <= 10; $i++){
            DB::table('publishers')->insert([
                'id' => $i,
                'logo' => $i,
                'name' => $faker->name(),
                'address' => $faker->address(),
                'phone' => $faker->phoneNumber(),
                'email' => $faker->email()
            ]);
        }
    }
}
