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

    public function packaging(){

        return $this->belongsTo(PackagingType::class,"packaging_type","id");
    }

    public function member(){

        return $this->belongsTo(Member::class,"member_id","id");
    }

    public function processing_method(){
        return $this->belongsTo(ProcessingMethod::class,"processing_method","id");
    }
    
}
