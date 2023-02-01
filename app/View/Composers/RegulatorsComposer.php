<?php
namespace App\View\Composers;

use App\Models\Regulator;

class RegulatorsComposer{

    public function compose($view){
    	$regulators = Regulator::all();
        $view->with('regulators',$regulators);
    }
}