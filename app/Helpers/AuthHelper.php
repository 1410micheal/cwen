<?php

use Illuminate\Support\Facades\Auth;

if(!function_exists('current_user')){
	function current_user(){

	        $user = Auth::user(); 
	        return $user;
	}
}

if(!function_exists('has_permission')){

 function has_permission($permission){
     return Auth::user()->can($permission); 
  }

}
