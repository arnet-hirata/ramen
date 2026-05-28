<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //店舗情報テスト登録
        DB::table('stores')->insert(
            [

                ['store_name' => '太一商店 宗方店', 'store_place' => '大分県大分市上宗方636-1' ,'places_id' =>1,'store_image' =>'taichi-munakata.jpg', 'categories_id' =>5 ],
                ['store_name' => 'ふくやラーメン工房 アミュプラザ大分店', 'store_place' => '大分県大分市要町1-40' ,'places_id' =>1,'store_image' => 'hukuya-ooitaeki.jpg', 'categories_id' =>1],
                ['store_name' => '味噌乃家', 'store_place' => '大分県大分市中央町1丁目4-22' ,'places_id' =>1,'store_image' => 'misonoya-tyuoumachi.jpg', 'categories_id' =>4],
                ['store_name' => 'ふらり(魚介)', 'store_place' => '大分県別府市北鉄輪6組' ,'places_id' =>2,'store_image' => 'hurari-beppu.jpg', 'categories_id' =>5],
                ['store_name' => '壱丁目ラーメン 本店', 'store_place' => '大分県別府市北浜1-3-31' ,'places_id' =>2,'store_image' => 'ityoume-honten.jpg', 'categories_id' =>3],
                ['store_name' => 'なかつ宝来軒 別府店', 'store_place' => '大分県別府市南的ヶ浜町5-19' ,'places_id' =>2,'store_image' => 'houraiken-beppu.jpg', 'categories_id' =>2],
                ['store_name' => '一輝亭', 'store_place' => '大分県宇佐市住吉町1-32' ,'places_id' =>3,'store_image' => 'ikkitei-usa.jpg', 'categories_id' =>1],
                ['store_name' => '一骨家 宇佐店', 'store_place' => '大分県宇佐市石田210-5' ,'places_id' =>3,'store_image' => 'ikkotsuya-usa.jpg', 'categories_id' =>1],
                ['store_name' => 'よっちゃんラーメン', 'store_place' => '大分県宇佐市大字南宇佐2127-3' ,'places_id' =>3,'store_image' => 'yochan-usa.jpg', 'categories_id' =>1],
                ['store_name' => '長浜らーめん 中津店', 'store_place' => '大分県中津市大字島田217-3' ,'places_id' =>4,'store_image' =>'nagahama-nakatsu.jpg', 'categories_id' =>1],
                ['store_name' => '宝来軒 本店', 'store_place' => '大分県中津市日ノ出町2' ,'places_id' =>4,'store_image' => 'horaiken-honten.jpg', 'categories_id' =>2],
                ['store_name' => '麺屋こころ', 'store_place' => '大分県中津市是則741-1' ,'places_id' =>4,'store_image' => 'kokoro-nakatsu.jpg', 'categories_id' =>1],
                ['store_name' => '麺屋 一角', 'store_place' => '大分県日田市元町18-11' ,'places_id' =>5,'store_image' =>'ikkaku-hita.jpg', 'categories_id' =>2],
                ['store_name' => '銀馬ラーメン', 'store_place' => '大分県日田市三芳小渕町56' ,'places_id' =>5,'store_image' => 'ginba-hita.jpg', 'categories_id' =>1],
                ['store_name' => 'ラーメン ごくまる 日田店', 'store_place' => '大分県日田市南友田814' ,'places_id' =>5,'store_image' => 'gokumaru-hita.jpg', 'categories_id' =>1],
            ]
        );
    }
}
