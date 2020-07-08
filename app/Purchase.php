<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    public function Product(){
        return $this->hasMany("\App\Purchase_Product");
    }
    public function Producer(){
        return $this->belongsTo("\App\Producer");
    }
}
