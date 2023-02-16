<?php
namespace App\View\Composers;

use App\Models\ProcessingMethod;
use Illuminate\View\View;

class ProcessingMethodsViewComposer{

    public function compose(View $view){

    	$methods = ProcessingMethod::all();
        $view->with('methods',$methods);
    }
}