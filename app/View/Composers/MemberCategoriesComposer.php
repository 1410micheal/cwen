<?php
namespace App\View\Composers;

use App\Models\MemberCategory;
use Illuminate\View\View;

class MemberCategoriesComposer{

    public function compose(View $view){

    	$categories = MemberCategory::all();

        $view->with('categories',$categories);
    }
}