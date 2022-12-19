<?php
namespace App\Http\Traits;

use Illuminate\Support\Facades\Http;
use SoapClient;
/*
   Created by Henry Nkuke on 2020/09/12
   Contact:+256705596470, henricsanyu@gmail.com
*/
trait HttpUtils{
	//sends all http request, payload is an empty array by default

 function soapPost( $ap_param,$endpoint,$wsdl){
      try {
        $this->logData("REQ  OUT",$ap_param);
        $soapClient = new SoapClient($wsdl);
        // Prepare SoapHeader parameters
        $sh_param = array();
       // $headers = new SoapHeader($wsdl, 'Request', $sh_param);
        $soapClient->__setSoapHeaders(array());
        $error = 0;
        
          $response = $soapClient->__call($endpoint, array($ap_param));
        }
        catch (SoapFault $fault){
            unset($soapClient);
            $error = 1;
            $this->logData("REQ  OUT",$fault);
            return $this->failureResponse(908);
            //return json_encode($fault);
        }
        if ($error == 0) {
            unset($soapClient);
            $this->logData("REQ  OUT",$response);
            return $response;
        }
    }

public function sendRequest($url,$headers,$method,$body=[]){

      $this->logData('URL out: ',$url);
      $this->logData('URL headers: ',$headers);

 
      $ch = curl_init($url);
       //post values
      curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($body));
      // Option to Return the Result, rather than just true/false
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      // Set Request Headers
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      //time to wait while waiting for connection...indefinite
      curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);

      if($method=="POST")
      curl_setopt($ch,CURLOPT_POST,1);

      //set curl time..processing time out
      curl_setopt($ch, CURLOPT_TIMEOUT, 6000);
      // Perform the request, and save content to $result
      ini_set("max_execution_time",200);

      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

      $result = curl_exec($ch);

      $this->logData('RECEIVED : ',$result);

        //curl error handling
        $curl_errno = curl_errno($ch);
        $curl_error = curl_error($ch);
          if ($curl_errno > 0) {
                 curl_close($ch);
                return  "CURL Error ($curl_errno): $curl_error\n";
              }

 		 $info = curl_getinfo($ch);
		 $this->logData("\n REQUEST FULL ",$info);

     curl_close($ch);

     $decodedResponse = json_decode($result);
      $this->logData("\n RESSS ",$decodedResponse);

     return (object) $decodedResponse;
 }

 public function sendCurl($url,$payload=null){

      $ch = curl_init();

      curl_setopt($ch, CURLOPT_URL,$url);

      if($payload){
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($payload));
      }

      // Receive server response ...
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     //curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
      $server_output = curl_exec($ch);
      curl_close ($ch);

     return $server_output;

    }

}

?>