<?php
use Predis\Client;

if(!function_exists('redis_client')){
	function redis_client(){
		return  new Predis\Client();
	}
}

if(!function_exists('set_cache')){

	function set_cache($key,$value,$object=true){
		$data = ($object)?json_encode($value):$value;
		redis_client()->set($key,$data);
	}
}

if(!function_exists('get_cache')){
	function get_cache($key,$object=true){
		$value = redis_client()->get($key);
		$data = ($object)?json_decode($value,true):$value;
		return $data;
	}
}

if(!function_exists('flush_cache')){
	function flush_cache(){
		redis_client()->flushDb();
	}
}

?>