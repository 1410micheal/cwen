<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FollowupLog extends Model
{
    use HasFactory;

    public function followup_services(){
        return $this->hasMany(FollowupService::class);
    }
}
