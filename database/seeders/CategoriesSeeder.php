<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 1; $i <= 6; $i++){
            $categoryname = $faker->randomElement(['Fiction', 'Novel', 'Fantasy', 'Thriller', 'History', 'Self Development']);
            $cat = Category::where('categoryname', '=', $categoryname)->first();
            while($cat != null){
                $cat = Category::where('categoryname', '=', $categoryname)->first();
                $categoryname = $faker->randomElement(['Fiction', 'Novel', 'Fantasy', 'Thriller', 'History', 'Self Development']);
            }
            DB::table('categories')->insert([
                'id' => $i,
                'categoryname' => $categoryname,
            ]);
        }
    }
}
