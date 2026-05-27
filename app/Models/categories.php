<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    //
    public function foods(){
        //カテゴリー一つに対してラーメンは複数存在する
        return $this->hasMany(foods::class);
    }
}
