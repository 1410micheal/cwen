<?php

namespace App\Http\Livewire;

use App\Repositories\BusinessRepository;
use Livewire\Component;
use Illuminate\Http\Request;
use App\Repositories\MembersRepository;

class NewMember extends Component
{
    public function render(Request $request, MembersRepository $membersRepo, BusinessRepository $businessRepo)
    {
        return view('members.new-member');
    }

    public function edit(Request $request, MembersRepository $membersRepo, BusinessRepository $businessRepo)
    {
        $member            = $membersRepo->find_by_ref($request->ref);
        $data['member']    = $member;
        $data['business']  = $member->business;
       
        return view('members.edit-member',$data);
    }


    public function save(Request $request, MembersRepository $membersRepo)
    {
        
        $request->validate([
            'first_name'     => 'required|max:50|min:3',
            'last_name'      => 'required|max:50|min:3',
            'gender'         => 'required',
            'hiv_status'     => 'required',
            'business_name'  => 'required|max:100',
            'business_type'  => 'required',
            'employee_count' => 'required',
            'biz_ownership'  => 'required',
            'prem_ownership' => 'required',
            'has_biz_skills' => 'required',
            'is_licenced'    => 'required',
            'regulator'      => 'required',
            'address'        => 'required',
            'village_id'     => 'required'
        ]);

        $member = $membersRepo->save($request);

        $action = ($request->ref)?"updated":"saved";

        $msg = (!$member)?"Operation failed, try again":"Member $action successfuly";
        $data["message"] = $msg;
       
        $alert_class = ($member)?'success':'danger';
        $alert = ['alert-'.$alert_class=>$msg];

        return redirect('member-details?ref='.$member->unique_id)->with($alert);

    }
}
