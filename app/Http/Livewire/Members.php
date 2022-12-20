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
        $member = $membersRepo->find_by_ref($request->ref);

        $data['member']          = $member;
        $data['visits_count']    =  count($member->visits);
        $data['products_count']  =  count($member->products);
        $data['offences_count']  =  count($member->offences);
        $data['business']        =  $member->business;
        

        return view('members.details',$data);
    }
}
