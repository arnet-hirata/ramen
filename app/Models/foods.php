<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class foods extends Model
{
    //
        public function categories(){
        //ラーメン一つに対してカテゴリーは一つ
        return $this->belongsTo(categories::class);
    }

}
