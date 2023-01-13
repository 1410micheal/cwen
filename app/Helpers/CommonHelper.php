<?php
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\URL;

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

function get_age($dob){
	$date1 = new DateTime($dob);
	$date2 = new DateTime(date("Y-m-d"));
	return $date2->diff($date1)->format("%d");
}


if(!function_exists('current_url')){
	function current_url(){

	$current = URL::full();
	$appendable = (strpos($current,'?')>-1)?"&":"?";
	
	return $current.$appendable ;
	}
}

function export_excel($records) {
	$heading = false;
		if(!empty($records))
		  foreach($records as $row) {
			if(!$heading) {
			  // display field/column names as a first row
			  echo implode("\t", array_keys($row)) . "\n";
			  $heading = true;
			}
			echo implode("\t", array_values($row)) . "\n";
		}
	exit;
}