<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producer extends Model
{
    public function Purchase(){
        return $this->hasMany('\App\Purchase');
    }
}
