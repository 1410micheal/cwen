<?php
namespace App\View\Composers;

use App\Models\OffenceType;
use Illuminate\View\View;

class OffenceTypeViewComposer{

    public function compose(View $view){

    	$types = OffenceType::all();
        $view->with('types',$types);
    }
}