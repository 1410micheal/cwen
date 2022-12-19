<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\StandingOrder;
use App\Repositories\StandingOrdersRepository;

class StandingOrders extends Component
{
    public function render(StandingOrdersRepository $ordersRepo)
    {
        $data['orders'] = $ordersRepo->get();

        return view('orders.standing-orders',$data);
    }
}
