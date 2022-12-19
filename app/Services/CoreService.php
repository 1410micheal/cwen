<?php
namespace App\Services;

use App\Http\Traits\HttpUtils;

/**
 * 
 */
class CoreService implements ICoreContract
{
    use HttpUtils;

    private $core_base_url ="https://cfe5b824-2401-4f86-b9eb-f5187f1390d5.mock.pstmn.io/";

	public function validatePolicy($policy_number){
        
        $url = $this->core_base_url."validate-policy?policy_number=$policy_number";
        $response = $this->sendCurl($url);

        return ($response)?json_decode($response):null;
    }

}