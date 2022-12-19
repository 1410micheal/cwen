<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Repositories\MembersRepository;
use Illuminate\Http\Request;

class Members extends Component
{
    public function render(MembersRepository $membersRepo)
    {
        $data['members'] = $membersRepo->get();
        return view('members.index',$data);
    }

    public function show(Request $request, MembersRepository $membersRepo)
    {
        $data['member'] = $membersRepo->find_by_ref($request->ref);
        $data['visits_count']=0;
        return view('members.details',$data);
    }
}
