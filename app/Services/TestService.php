<?php
namespace App\Services;

/**
 * 
 */
class TestService 
{
	
	
	function testNow(){
		file_put_contents('test.txt', time());
	}

}