<?php
namespace App\Services;

interface IBankContract{

	public function checkAccountDetails($account_no,$institution_id);
	public function checkDebitStatus();
	public function effectDebitOrder();

}

