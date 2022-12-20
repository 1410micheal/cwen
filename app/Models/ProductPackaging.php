<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPackaging extends Model
{
    use HasFactory;

    public function type(){

        return $this->belongsTo(PackagingType::class,"pakckaging_type_id","id");
    }
}
