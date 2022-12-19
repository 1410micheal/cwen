<?php
namespace App\Services;

/**
 * 
 */
class DummyBankService implements IBankContract
{
	
	 /**
     * Checks customer account details at bank
     */

    public function checkAccountDetails($account_no,$institution_id){

         /**
         * TODO: Call bank api to validate customer account
         */

        $account_details = (Object) [
            "out_account_number"=> "99860934",
            "out_account_title"=> "Douglas O'Reilly",
            "out_currency"=> "UGX",
            "out_acount_product"=> "Investment Account"
        ];

        $response= array(
            "request_time"  => "2022-01-31 16:26:53",
            "response_time" => "2022-01-31 16:26:57",
            "status"        => "success",
            "status_code"   => 200,
            "message"       => "Customer Bank Details",
            "data"          => $account_details 
            );

        return (Object) $response;

    }

    /**
     * Checks debit oirder status at bank
     */

	public function checkDebitStatus(){

        $debit_details = array(
            "transaction_date"  => "2022-01-31 16:26:53",
            "institution_id"    => "1",
            "request_reference" => "REQ0002",
            "bank_transaction_reference"        => "CENT434435",
            "in_external_transaction_reference" => "9876543",
            "narration"                         => "9876543",
            "out_account_title"   => "Gerard Kovacek",
            "customer_acc_number" => "71645487",
            "amount"           => 100000,
            "out_currency"     => "UGX",
            "recipient_acount" => "3100057779",
            "policy_number"    => "UI201800281642",
            "policy_holder"    => "Neal Bergnaum",
            "memo"             => "standing order schedule",
            "status"           => "success",
            "response_message" => "success"
        );

        $response = array(
            "request_time"  => "2022-01-31 16:26:53",
            "response_time" => "2022-01-31 16:26:57",
            "status"        => "success",
            "status_code"   => 200,
            "message"       => "Debit Successful",
            "data"          => $debit_details  
            );

        return (Object) $response;

    }

    /**
     * Forwards debit order to bank system
     */
	public function effectDebitOrder(){

        /**
         * TODO: Call bank api to debit customer account
         */

        //dummy response

        $debit_details = array(
            "transaction_date"  => "2022-01-31 16:26:53",
            "institution_id"    => "1",
            "request_reference" => "REQ0002",
            "bank_transaction_reference"        => "CENT434435",
            "in_external_transaction_reference" => "9876543",
            "narration"                         => "9876543",
            "out_account_title"   => "Gerard Kovacek",
            "customer_acc_number" => "71645487",
            "amount"           => 100000,
            "out_currency"     => "UGX",
            "recipient_acount" => "3100057779",
            "policy_number"    => "UI201800281642",
            "policy_holder"    => "Neal Bergnaum",
            "memo"             => "standing order schedule",
            "status"           => "success",
            "response_message" => "success"
        );

        $response = array(
            "request_time"  => "2022-01-31 16:26:53",
            "response_time" => "2022-01-31 16:26:57",
            "status"        => "success",
            "status_code"   => 200,
            "message"       => "Debit Successful",
            "data"          => $debit_details  
            );

        return (Object) $response;
        
    }



}