<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessProfile extends Model
{
    use HasFactory;

    protected $appends = ['premise_ownership','business_ownership','regulator_names'];

    public function biz_type(){

        return $this->belongsTo(BusinessType::class,"business_type_id","id");
    }

    public function regulator(){

        return $this->belongsTo(Regulator::class,"regulator_id","id");
    }

    public  function getPremiseOwnershipAttribute(){

        return ($this->is_premise_owner==1)?"Owned": (($this->is_premise_owner==2)?"Jointly Owned":"Not Owner");
    }

    public function getBusinessOwnershipAttribute(){

        return ($this->is_biz_owner==1)?"Owned": (($this->is_biz_owner==2)?"Jointly Owned":"Not Owner");
        
    }

    public function getRegulatorNamesAttribute(){

        $regulators = BusinessRegulator::with('regulator')
        ->where('business_profile_id',$this->id)
        ->orWhere("regulator_id ='$this->regulator_id' AND business_profile_id='$this->id'")
        ->get();

        $names = '';

        foreach($regulators as $row):

            $names.=" ".$row->regulator->regulator_name;

        endforeach;

        return $names;
    }


    public function getRegulatorIdsAttribute(){

        $regulators = BusinessRegulator::with('regulator')
        ->where('business_profile_id',$this->id)
        ->orWhere("regulator_id ='$this->regulator_id' AND business_profile_id='$this->id'")
        ->get();
        
        $ids =[];

        foreach($regulators as $row):

            $ids[]=$row->regulator->id;

        endforeach;

        return $ids;
    }
    
    
}
