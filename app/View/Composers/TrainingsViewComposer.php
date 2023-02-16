<?php
namespace App\View\Composers;

use App\Models\Training;
use Illuminate\View\View;

class TrainingsViewComposer{

    public function compose(View $view){

    	$trainings = Training::all();
        $view->with('trainings',$trainings);
    }
}