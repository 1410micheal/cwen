<?php

function session_institution(){

 $value = session('institution_id');

	 if(!$value || $value == 0){

	 	$inst = (Object) ['inst_name'=>'All Institutions','id'=>0];
	 }
	 else{

	 	$inst = get_institution($value);
	 }

 return $inst;

}