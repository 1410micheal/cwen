<?php
namespace App\View\Composers;

use App\Models\MemberGroup;
use Illuminate\View\View;

class GroupsViewComposer{

    public function compose(View $view){

    	$groups = MemberGroup::all();
        $view->with('groups',$groups);
    }
}