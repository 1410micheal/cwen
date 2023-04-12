<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessRegulator extends Model
{
    use HasFactory;

    public function regulator(){
        return $this->belongsTo(Regulator::class);
    }
}
