<?php
namespace App\View\Composers;

use App\Models\Service;
use Illuminate\View\View;

class ServicesViewComposer{

    public function compose(View $view){

    	$services = Service::all();
        $view->with('services',$services);
    }
}