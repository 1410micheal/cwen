<?php
namespace App\View\Composers;

use App\Models\ProductType;
use App\Models\Village;
use Illuminate\View\View;

class ProductTypeViewComposer{

    public function compose(View $view){

    	$types = ProductType::all();
        $view->with('types',$types);
    }
}