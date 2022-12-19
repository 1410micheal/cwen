<?php
namespace App\Http\Traits;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt;
use Auth;
use App\Models\AuditTrail;
use AfricasTalking\SDK\AfricasTalking;

use Notification;
use App\Notifications\SendPushNotification;
use Illuminate\Foundation\Bus\Dispatchable;

use App\Jobs\LoggerJob;

/*
   Created by Henry Nkuke
   Contact:+256705596470, henricsanyu@gmail.com
   Description: Contains commonly used utility methods
*/

trait Utils{


function assignRefNo(){
	return env('AGENT_PREFIX').mt_rand(10000,90000);
}

function generateBatchNo(){
	return $this->currentUser()->id.time();
}

//logs to file
public function logData($key,$message){

      LoggerJob::dispatch($key,$message)->delay(20);

}

//checks forempty data
public function isEmpty($data){
   return($data == null || $data == "" || $data == " ")?true :false;
}


//object to array conversion
public function toArray($obj){
    return json_decode(json_encode($obj), true);
}


 //encrypt value
 public static function secureValue($parameter){
    return Crypt::encrypt($parameter);
 }

//decrypt value
 public static function revealValue($parameter){
    return Crypt::decrypt($parameter);
 }


public function generatePin($length=4,$numberOnly=true){
    // Available alpha caracters
    $characters = ($numberOnly)?"0123456789":"0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    // generate a pin based on 2 * 7 digits + a random character
    $pin = mt_rand(1000000, 9999999)
        . mt_rand(1000000, 9999999)
        . $characters[rand(0, strlen($characters) - 1)];
    // shuffle the result
    return substr(str_shuffle($pin), 0,$length);
}

public function sendOTPSMS($phone){
    $otp = $this->generatePin();
    $sms = "Your Confirmation code is: $otp enter it to continue, CASHAWO";
    $this->sendSMS($sms,$phone);
    return $otp;
}


 public function sendSMS($message,$receivers){


  $receivers = $this->standardPhone($receivers,'UG');
    
    // Set your app credentials
	$username   = env('SMS_HOST_URL');
	

	try {
    $result = "";
    $this->logData("SMS response ",$result);
    
	 } catch (Exception $e) {
       $this->logData("SMS error ",$e->getMessage());
	 }finally{
      return true;
    }
 
    return true;

 }

 function standardPhone($phoneNumber, $country) {

  $countryCodes = array(
        'UG' => '256'
    );


   if(is_array($phoneNumber)){

     $allnumbers = "";
     $count = 0;

      foreach ($phoneNumber as $number) {

        $number = preg_replace('/[^0-9+]/', '',
           preg_replace('/^0/', $countryCodes[$country], $number));

        $allnumbers  .= ($count < count($phoneNumber))?$number.',':$number;

        $count++;

      }

      return $allnumbers;

   }

    
    return preg_replace('/[^0-9+]/', '',
           preg_replace('/^0/', $countryCodes[$country], $phoneNumber));
}


  public function logTrail($action,$userId,$old_data=[],$new_data=[])
  {

    $trail = new AuditTrail();
    $trail->user_id  = $userId;
    $trail->action   = $action;
    $trail->old_data = json_encode($old_data);
    $trail->new_data = json_encode($new_data);
    $trail->from = 'WEB';
    $trail->save();

  }


  public function isAdmin($userId=false){

    $adminInstitution = 1;

    $userInst = current_user()->institution_id;
     return ($userInst == $adminInstitution)?true:false;
 }


 public function tranTypes(){
     return  config('constants.tran_types'); 
  }


  public function gen_uuid() {

    return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
    // 32 bits for "time_low"
    mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),

    // 16 bits for "time_mid"
    mt_rand( 0, 0xffff ),

    // 16 bits for "time_hi_and_version",
    // four most significant bits holds version number 4
    mt_rand( 0, 0x0fff ) | 0x4000,

    // 16 bits, 8 bits for "clk_seq_hi_res",
    // 8 bits for "clk_seq_low",
    // two most significant bits holds zero and one for variant DCE1.1
    mt_rand( 0, 0x3fff ) | 0x8000,

    // 48 bits for "node"
    mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
    );
  }



}

?>