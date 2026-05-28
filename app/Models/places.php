<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Places extends Model
{
    public function Stores(){
        // teams テーブル自身が持つ外部キーcoach_idで自動関連付けする
        // $this->belongsTo(<連携先クラス名>::class)
        return $this->hasMany(Stores::class);
    }
}
