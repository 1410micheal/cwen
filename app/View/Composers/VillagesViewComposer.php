<?php
namespace App\View\Composers;

use App\Models\Village;
use Illuminate\View\View;

class VillagesViewComposer{

    public function compose(View $view){

    	$villages = Village::all();
        $view->with('villages',$villages);
    }
}