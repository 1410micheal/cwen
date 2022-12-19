<?php
namespace App\Http\View\Composers;

use Illuminate\View\View;

class InstitutionsComposer{

    public function compose(View $view){

    	$institutions = [];

        $view->with('institutions',$institutions);
    }
}