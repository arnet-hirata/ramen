<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InitializeFoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert(
[
['food_name' => '味噌', 'category_id' => 1],
['food_name' => '醤油', 'category_id' => 2],
['food_name' => '豚骨', 'category_id' => 3],
['food_name' => '塩', 'category_id' => 4],
['food_name' => 'まぜそば', 'category_id' => 5],
]
);
    }
}
