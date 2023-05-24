<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 1; $i <= 18; $i++){
            $title = $faker->words(3, true);
            DB::table('books')->insert([
                'id' => $i,
                'image' => $i,
                'title' => $title,
                'author' => $faker->name(),
                'synopsis' => $faker->paragraph(1),
                'year' => $faker->numberBetween(2000, 2023),
                'publisherid' => $faker->numberBetween(1,10)
            ]);
        }
    }
}
