<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stores extends Model
{
    public function Places(){
        //カテゴリー一つに対してラーメンは複数存在する
        return $this->belongsTo(Places::class);
    }
    // StoreとUserは多対多
    public function user()
    {

        // 中間テーブル(player_positionテーブル)が持っているレコードで関連付けする
        // $this->belongsToMany(<連携先クラス名>::class)
        return $this->belongsToMany(User::class,'store_user','user_id','store_id')->withPivot('review');
    }
}
