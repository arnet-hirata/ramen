<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class InitializeFoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert(
[
['food_name' => '味噌', 'price' => 1000, 'category_id' => 1, 'image' => 'abc' , 'store_id' => 1],
['food_name' => '醤油', 'price' => 1000, 'category_id' => 2, 'image' => 'abc' , 'store_id' => 2],
['food_name' => '豚骨', 'price' => 1000, 'category_id' => 3, 'image' => 'abc' , 'store_id' => 3],
['food_name' => '塩', 'price' => 1000, 'category_id' => 4, 'image' => 'abc' , 'store_id' => 4],
['food_name' => 'まぜそば', 'price' => 1000, 'category_id' => 5, 'image' => 'abc' , 'store_id' => 5],
]
);
    }
}
