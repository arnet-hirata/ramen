<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Hash; 

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //ユーザ情報を登録
        DB::table('users')->insert(
            [
                ['name' => '田中'],
                ['name' => '佐藤'],
                ['name' => '本田'],
                ['name' => '谷本'],
                ['name' => '木元'],
            ]
        );

    }
}
