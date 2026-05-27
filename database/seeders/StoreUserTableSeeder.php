<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class StoreUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('store_user')->insert(
            [
                ['user_id' => 1, 'store_id' => 1, 'review' => 1, 'comment' => 'まず'],
                ['user_id' => 2, 'store_id' => 1, 'review' => 2, 'comment' => 'まず'],
                ['user_id' => 2, 'store_id' => 2, 'review' => 3, 'comment' => 'ふつう'],
                ['user_id' => 3, 'store_id' => 2, 'review' => 4, 'comment' => 'うま'],
                ['user_id' => 3, 'store_id' => 3, 'review' => 5, 'comment' => 'うま'],
                ['user_id' => 4, 'store_id' => 3, 'review' => 5, 'comment' => 'うま'],
                ['user_id' => 4, 'store_id' => 4, 'review' => 4, 'comment' => 'うま'],
                ['user_id' => 5, 'store_id' => 4, 'review' => 3, 'comment' => 'ふつう'],
            ]
        );
    }
}
