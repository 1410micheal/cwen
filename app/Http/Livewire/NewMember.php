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
        $data['business_types']    = $businessRepo->get();
        $data['regulators']        = $businessRepo->regulators();

        return view('members.new-member',$data);
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
            'address'        => 'required'
        ]);


        $member = $membersRepo->save($request);

        $msg = (!$member)?"Operation failed, try again":"Member saved successfuly";
        $data["message"] = $msg;
       
        $alert_class = ($member)?'success':'danger';
        $alert = ['alert-'.$alert_class=>$msg];

        return redirect('member-details?ref='.$member->unique_id)->with($alert);

    }
}
