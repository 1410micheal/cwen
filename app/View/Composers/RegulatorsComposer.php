<?php
namespace App\View\Composers;

use App\Models\BusinessType;

class RegulatorsComposer{

    public function compose($view){
    	$regulators = BusinessType::all();
        $view->with('regulators',$regulators);
    }
}