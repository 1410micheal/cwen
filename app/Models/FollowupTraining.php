<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FollowupTraining extends Model
{
    use HasFactory;

    public function training(){
        return $this->belongsTo(Training::class);
    }

    public function followup(){
        return $this->belongsTo(FollowupLog::class);
    }

}
