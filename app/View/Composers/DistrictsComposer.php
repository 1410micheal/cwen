<?php
namespace App\View\Composers;

use App\Models\District;

class DistrictsComposer{

    public function compose($view){
    	$districts = District::all();
        $view->with('districts',$districts);
    }
}