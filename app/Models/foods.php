<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Foods extends Model
{
    //
        public function categories(){
        //ラーメン一つに対してカテゴリーは一つ
        return $this->belongsTo(Categories::class);
    }

}
