<?php
namespace App\Services;

/**
 * 
 */
class BarclaysBankService implements IBankContract
{
	
	 /**
     * Checks customer account details at bank
     */

    public function checkAccountDetails($account_no,$institution_id){

    }

    /**
     * Checks debit oirder status at bank
     */

	public function checkDebitStatus(){

    }

    /**
     * Forwards debit order to bank system
     */
	public function effectDebitOrder(){

        dd("Effected successfully");
        
    }



}