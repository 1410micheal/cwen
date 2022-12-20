<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessProfile extends Model
{
    use HasFactory;

    public function biz_type(){

        return $this->belongsTo(BusinessType::class,"business_type_id","id");
    }

    public function regulator(){

        return $this->belongsTo(Regulator::class,"regulator_id","id");
    }
    
    
}
