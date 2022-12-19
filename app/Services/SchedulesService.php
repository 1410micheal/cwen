<?php
namespace App\Services;

use App\Repositories\StandingOrdersRepository;
use App\Jobs\LoggerJob;
/**
 * Monitors orders and performs debits
 */
class SchedulesService 
{
	
	
	public function triggerDueDebits(StandingOrdersRepository $ordersRepo,DummyBankService $bankService){
		
        //get due order schedules
        $due_debits = $ordersRepo->get_due_schedules();

        foreach($due_debits as $debit):

            LoggerJob::dispatch('Debit initiated',$debit);
            
            //fire debit one by one
            $debit_response = $bankService->effectDebitOrder();
            
            LoggerJob::dispatch('Debit Response', $debit_response);

        endforeach;

	}

}