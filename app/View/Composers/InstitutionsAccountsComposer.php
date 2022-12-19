<?php
namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\InstitutionAccount;

class InstitutionsAccountsComposer{

    public function compose(View $view){

    	$accounts = InstitutionAccount::all();

        $view->with('accounts',$accounts);
    }
}