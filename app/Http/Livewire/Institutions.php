<?php

namespace App\Http\Livewire;

use App\Repositories\InstitutionsRepository;
use Illuminate\Http\Request;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Institutions extends Component
{
    use LivewireAlert;

    public $heading = "Institutions";

    public function render(InstitutionsRepository $institutionsRepo)
    {
        $data['institutions'] = $institutionsRepo->get();
        $data['heading']      = $this->heading;

        return view('institutions.institutions',$data);
    }

    public function save(Request $request,InstitutionsRepository $institutionsRepo){

        $validator = $request->validate([
            'name' => 'required|min:6',
            'email' => 'required',
        ]);

        $saved = $institutionsRepo->save($request);

        $msg = (!$saved)?"Operation failed, try again":"Institution saved successfuly";
        $data["message"] = $msg;
       
        $alert_class = ($saved)?'success':'danger';
        $alert = ['alert-'.$alert_class=>$msg];

        return redirect('institutions')->with($alert);
    }

   public function toggle(Request $request, InstitutionsRepository $institutionsRepo){

        if($request->institution_id == 0){
            $id = 0;
            $name = "All Institutions";
        }
        else{

            $institution = $institutionsRepo->find($request->institution_id);
            $id          = $institution->id;
            $name        = $institution->inst_name;
        }
       
        session(['institution_id' => $id]);
        
        $alert = ['alert-success'=>"You have now switched to $name"];

        return back()->with($alert);;
   }
}
