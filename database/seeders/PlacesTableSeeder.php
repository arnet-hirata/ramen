<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //大分県の地区別
        DB::table('places')->insert(
            [
                ['place_name' => '大分市'],
                ['place_name' => '別府市'],
                ['place_name' => '宇佐市'],
                ['place_name' => '中津市'],
                ['place_name' => '日田市'],
            ]

        );

    }
}
