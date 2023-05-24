<?php

namespace Database\Seeders;

use App\Models\Tr_Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class Tr_CategoriesSeeder extends Seeder
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
            for($j = 1; $j <= 2; $j++){
                $catid = $faker->numberBetween(1,6);
                $bookid = $i;
                $cat = Tr_Category::where([['categoryid', '=', $catid], ['bookid', '=', $bookid]])->first();
                while($cat != null){
                    $catid = $faker->numberBetween(1,6);
                    $bookid = $i;
                    $cat = Tr_Category::where([['categoryid', '=', $catid], ['bookid', '=', $bookid]])->first();
                }
                DB::table('tr_categories')->insert([
                    'categoryid' => $catid,
                    'bookid' => $bookid
                ]);
            }
        }
    }
}
