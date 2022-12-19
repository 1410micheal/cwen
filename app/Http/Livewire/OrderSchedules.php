<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Repositories\StandingOrdersRepository;

class OrderSchedules extends Component
{
    public function render(Request $request,StandingOrdersRepository $orderRepo){

        $order = $orderRepo->find_by_ref($request->ref);

        $schedules = $order->schedules->toArray();

        //failed schedule executions count
         $data['failed'] =  count(array_filter($schedules, function($schedule) {
            return $schedule['status'] == "FAILED";
         }));

         //successful schedule executions count
         $data['successful'] = count(array_filter($schedules, function($schedule) {
            return $schedule['status']  == "SUCCESSFUL";
         }));

         //manually triggered schedule executions count
         $data['manual'] =  count(array_filter($schedules, function($schedule) {
            return $schedule['is_manual_trigger'] == 1;
         }));

         //total order schedules count
         $data['schedules_count'] = count($schedules);
         $data['order'] = $order;

        return view('orders.order-schedules',$data);
    }
}
