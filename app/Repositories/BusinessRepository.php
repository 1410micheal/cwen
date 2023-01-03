<?php
namespace App\Repositories;

use App\Models\BusinessType;
use App\Models\Regulator;
use Illuminate\Http\Request;
class BusinessRepository{

    public function __construct(){

    }

    //Get all busines types
    public function get(){

        $types = BusinessType::all();
        return $types;
    }

    //Get all regulators
    public function regulators(){

        $regulators = Regulator::all();
        return $regulators;
    }


}