<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function Property(){
        return $this->hasMany("\App\Property");
    }
    public function Unit(){
        return $this->hasMany("\App\Unit");
    }
    public function Category(){
        return $this->belongsTo("\App\Category");
    }
    public function Brand(){
        return $this->belongsTo("\App\Brand");
    }
    public function Place(){
        return $this->belongsTo("\App\Place");
    }
}
