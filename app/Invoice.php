<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public function Customer(){
        return $this->belongsTo('\App\Customer');
    }
    public function Product(){
        return $this->hasMany('\App\Invoice_Product');
    }
}
