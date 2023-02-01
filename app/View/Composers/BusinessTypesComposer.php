<?php
namespace App\View\Composers;

use App\Models\BusinessType;

class BusinessTypesComposer{

    public function compose($view){
    	$accounts = BusinessType::all();
        $view->with('business_types',$accounts);
    }
}