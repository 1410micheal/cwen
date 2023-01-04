<?php
use Illuminate\Support\Facades\DB;


function get_role($userId){
    return DB::table("user_roles")->where('model_id',$userId)
	->join('roles','roles.id','user_roles.role_id')
	->first();
}



