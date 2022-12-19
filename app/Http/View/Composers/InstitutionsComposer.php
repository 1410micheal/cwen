<?php
namespace App\Http\View\Composers;

use Illuminate\View\View;

class InstitutionsComposer extends View{

    public function compose($view){
        $view->with('institutions',['Institution One','Institution Two']);
    }
}