<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Repositories\MembersRepository;

class NewMember extends Component
{
    public function render()
    {
        return view('members.new-member');
    }


    public function save(Request $request, MembersRepository $membersRepo)
    {
        
        $request->validate([
            'account_name'   => 'required|max:50',
            'institution_id' => 'required',
            'account_no'     => 'required',
            'execution_date' => 'required',
            'policy_number'  => 'required'
        ]);


         $customer = $membersRepo->save($request->all());

        $request['customer_id'] = $customer->id;

        $saved    = $membersRepo->save($request);

        $msg = (!$saved)?"Operation failed, try again":"Order saved successfuly";
        $data["message"] = $msg;
       
        $alert_class = ($saved)?'success':'danger';
        $alert = ['alert-'.$alert_class=>$msg];

        return redirect('pendingorders')->with($alert);

    }
}
