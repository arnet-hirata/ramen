<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class stores extends Model
{
    public function places(){
        //カテゴリー一つに対してラーメンは複数存在する
        return $this->belongsTo(places::class);
    }
}
