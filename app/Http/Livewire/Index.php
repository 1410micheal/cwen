<?php

namespace App\Http\Livewire;

use App\Repositories\MembersRepository;
use Livewire\Component;

class Index extends Component
{
    public function render(MembersRepository $membersRepo)
    {
        $data['widget'] = $membersRepo->get_widgets();

       // dd($data['widget'] );

        return view('livewire.index',$data);
    }
}
