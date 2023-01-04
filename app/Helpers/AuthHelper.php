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

if(!function_exists('log_trail')){
	function log_trail($action,$userId,$old_data=[],$new_data=[])
	{

	// $trail = new AuditTrail();
	// $trail->user_id  = $userId;
	// $trail->action   = $action;
	// $trail->old_data = json_encode($old_data);
	// $trail->new_data = json_encode($new_data);
	// $trail->from = 'WEB';
	// $trail->save();

	}
}
