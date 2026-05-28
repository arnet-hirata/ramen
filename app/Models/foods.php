<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Foods extends Model
{
    //
        public function categories(){
        //ラーメン一つに対してカテゴリーは一つ
        return $this->belongsTo(categories::class);
    }
        public function stores(){
        //ラーメン一つに対して店ーは一つ
        return $this->belongsTo(Stores::class);
    }
}
