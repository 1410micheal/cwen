<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Repositories\CustomersRepository;
use App\Repositories\StandingOrdersRepository;


class OrderApproval extends Component
{
    public function render(Request $request, StandingOrdersRepository $orderRepo, CustomersRepository $customerRepo)
    { 
        $data['order'] = $orderRepo->find_by_ref($request->ref);

        return view('orders.order-approval',$data);
    }

    public function approve(Request $request,StandingOrdersRepository $orderRepo){

       $approved = $orderRepo->approve_internal($request);

       $msg = (!$approved)?"Operation failed, try again":"Order #$approved->order_ref approved successfully";
       $data["message"] = $msg;
      
       $alert_class = ($approved)?'success':'danger';
       $alert = ['alert-'.$alert_class=>$msg];

       return redirect('pendingorders')->with($alert);
    }

    public function bank_approval(Request $request,StandingOrdersRepository $orderRepo){

        $approved = $orderRepo->approve_at_bank($request);
 
        $msg = (!$approved)?"Operation failed, try again":"Order #$approved->order_ref approved and scheduled successfully";
        $data["message"] = $msg;
       
        $alert_class = ($approved)?'success':'danger';
        $alert = ['alert-'.$alert_class=>$msg];
 
        return redirect('pendingorders')->with($alert);
     }

    
}
