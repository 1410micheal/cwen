<?php
namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\InstitutionAccount;

class AccountComposer extends View{

    public function compose($view){
    	$accounts = InstitutionAccount::all();
        $view->with('accounts',$accounts);
    }
}