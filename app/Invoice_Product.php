<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice_Product extends Model
{
    public function Purchase(){
        return $this->hasMany('\App\Invoice_Purchase','invoice_product_id');
    }
}
