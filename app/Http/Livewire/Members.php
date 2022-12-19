<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Repositories\MembersRepository;

class Members extends Component
{
    public function render(MembersRepository $membersRepo)
    {
        $data['members'] = $membersRepo->get();
        return view('members.index',$data);
    }
}
