<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberDistributionChannel extends Model
{
    use HasFactory;

    public function channel(){
        return $this->belongsTo(DistributionChannel::class,"distribution_channel_id","id");
    }

    public function member(){
        return $this->belongsTo(Member::class);
    }
}
