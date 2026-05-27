<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// 追記：データベースへのレコード追加のために、DBファサードを利用
use Illuminate\Support\Facades\DB;

class EvaluateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('evaluates')->insert(
            [
                ['review' => 3, 'comment' => '美味しかった',],
                ['review' => 5, 'comment' => '美味しかった',],
                ['review' => 4, 'comment' => '美味しかった',],
                ['review' => 2, 'comment' => '美味しくなかった',],
            ]
        );
    }
}
