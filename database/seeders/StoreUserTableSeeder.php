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
                ['user_id' => 1, 'store_id' => 1, 'review' => 1.0, 'comment' => 'まず', 'store_image' => 'abc' ],
                ['user_id' => 2, 'store_id' => 1, 'review' => 2.0, 'comment' => 'まず', 'store_image' => 'def' ],
                ['user_id' => 2, 'store_id' => 2, 'review' => 3.0, 'comment' => 'ふつう', 'store_image' => 'ghi' ],
                ['user_id' => 3, 'store_id' => 2, 'review' => 4.0, 'comment' => 'うま', 'store_image' => 'jkl' ],
                ['user_id' => 3, 'store_id' => 3, 'review' => 5.0, 'comment' => 'うま', 'store_image' => 'mlo' ],
                ['user_id' => 4, 'store_id' => 3, 'review' => 5.0, 'comment' => 'うま', 'store_image' => 'pqr' ],
                ['user_id' => 4, 'store_id' => 4, 'review' => 4.0, 'comment' => 'うま', 'store_image' => 'stu' ],
                ['user_id' => 5, 'store_id' => 4, 'review' => 3.0, 'comment' => 'ふつう', 'store_image' => 'vwx' ],
            ]
        );
    }
}
