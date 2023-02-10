<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OffenceReport extends Model
{
    use HasFactory;

    public function member(){
        return $this->belongsTo(Member::class,"member_id","id");
    }

    public function type(){

        return $this->belongsTo(OffenceType::class,"offence_type_id","id");
    }

    public function services(){

        return $this->hasMany(OffenceService::class);
    }
}
