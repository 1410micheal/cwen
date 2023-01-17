<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    public function category(){

        return $this->belongsTo(MemberCategory::class,"member_category_id","id");
    }

    public function business(){
        return $this->hasOne(BusinessProfile::class,"member_id","id");
    }

    public function visits(){
        return $this->hasMany(FollowupLog::class);
    }

    public function products(){

        return $this->hasMany(ProductDetail::class);
    }

    public function offences(){

        return $this->hasMany(OffenceReport::class);
    }

    public function village(){

        return $this->belongsTo(Village::class);
    }
}
