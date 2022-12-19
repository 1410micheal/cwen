<?php
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;

if(!function_exists('storage_link')){

 function storage_link($file_path){
     return url('/').Storage::disk('local')->url($file_path);
  }

}

if(!function_exists('storage_delete')){

 function storage_delete($file_path){
     return Storage::disk('local')->delete($file_path);
  }

}



if(!function_exists('text_to_amount')){

	function text_to_amount($amount_str){
		return str_replace(',','',$amount_str);
	}

}



 //encrypt value
function secure_value($parameter){
  return Crypt::encrypt($parameter);
}

//decrypt value
function reveal_value($parameter){
  return Crypt::decrypt($parameter);
}

function month_day($day_no){

	if($day_no==1 || $day_no==21){
		$post_fix = 'st';
	}
	else if($day_no==2 || $day_no==22){

		$post_fix = 'nd';
	}
	else{

		$post_fix = 'th';
	}

	return $day_no.$post_fix;
}
