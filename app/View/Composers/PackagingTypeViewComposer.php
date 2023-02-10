<?php
namespace App\View\Composers;

use App\Models\ProductPackaging;
use Illuminate\View\View;

class PackagingTypeViewComposer{

    public function compose(View $view){

    	$packagings = ProductPackaging::all();
        $view->with('packagings',$packagings);
    }
}