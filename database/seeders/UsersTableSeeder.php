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
                ['name' => '田中','email' => 'test@example.com','password' => Hash::make('password'),],
                ['name' => '佐藤','email' => 'test1@example.com','password' => Hash::make('password'),],
                ['name' => '本田','email' => 'test2@example.com','password' => Hash::make('password'),],
                ['name' => '谷本','email' => 'test3@example.com','password' => Hash::make('password'),],
                ['name' => '木元','email' => 'test4@example.com','password' => Hash::make('password'),],
            ]
        );

    }
}
