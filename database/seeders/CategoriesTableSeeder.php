<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //カテゴリーデータ挿入
        DB::table('categories')->insert(
            [
                ['category_name' => '豚骨'],
                ['category_name' => '醤油'],
                ['category_name' => '塩'],
                ['category_name' => '味噌'],
                ['category_name' => '魚介'],
                ['category_name' => 'まぜそば'],
            ]

        );
    }
}
