<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;

    public function type(){

        return $this->belongsTo(ProductType::class,"product_type_id","id");
    }

    public function packagings(){

        return $this->hasMany(ProductPackaging::class,"product_id","id");
    }
}
