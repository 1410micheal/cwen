<?php

namespace App\Http\Livewire;

use App\Repositories\FollowupRepository;
use Livewire\Component;
use App\Repositories\MembersRepository;
use App\Repositories\OffenceRepository;
use App\Repositories\ProductsRepository;
use Illuminate\Http\Request;
use PDF;

class Members extends Component
{
    public function index(Request $request,MembersRepository $membersRepo)
    {
        
        $from_date = ($request->start_date)?$request->start_date:date('Y-m-01');
        $to_date   = ($request->end_date)?$request->end_date:date('Y-m-d');

        $request['from_date'] = date('Y/m/d',strtotime($from_date));
        $request['to_date']   = date('Y/m/d',strtotime($to_date));

        if($request->export_pdf == 1)
         $request['rows'] = 1000;

        $data['members'] = $membersRepo->get($request);

        $request['from'] = date('m/d/Y',strtotime($from_date));
        $request['to']   = date('m/d/Y',strtotime($to_date));

        $data['search']  = (Object) $request->all();

        if($request->export_pdf == 1):

            $exportdata['members'] = $data['members'] ;
            $exportdata['title']  = "Member List";
            $exportdata['search'] =  (Object) $request->all();

            $pdf = PDF::loadView('members.members-pdf',$exportdata)->setPaper('a4', 'landscape');;
           return $pdf->download("member-list-".time().'.pdf');
        endif;
        
        return view('members.index',$data);
    }

    public function show(Request $request, MembersRepository $membersRepo,FollowupRepository $followupRepo,ProductsRepository $productsRepo,OffenceRepository $offenceRepo)
    {
        $member = $membersRepo->find_by_ref($request->ref);

        $data['member']          =  $member;
        $data['visits_count']    =  count($member->visits);
        $data['products_count']  =  count($member->products);
        $data['offences_count']  =  count($member->offences);
        $data['businesses']      =  $member->businesses;
        $data['services']        =  $followupRepo->get_services();
        $data['product_types']   =  $productsRepo->get_types();
        $data['packaging_types'] =  $productsRepo->get_packaging_types();
        $data['offence_types']   =  $offenceRepo->get_types();
        
        return view('members.details',$data);
    }

    public function save_followup(Request $request, FollowupRepository $followupRepo)
    {
        $record = $followupRepo->save($request);


        $msg = (!$record)?"Operation failed, try again":"Followup saved successfuly";
        $data["message"] = $msg;
       
        $alert_class = ($record)?'success':'danger';

        $alert = ['alert-'.$alert_class=>$msg];

        return back()->with($alert);
    }

    public function save_product(Request $request, ProductsRepository $productsRepo)
    {
        $record = $productsRepo->save($request);

        $msg = (!$record)?"Operation failed, try again":"Product saved successfuly";
        $data["message"] = $msg;
       
        $alert_class = ($record)?'success':'danger';

        $alert = ['alert-'.$alert_class=>$msg];

        return back()->with($alert);
    }

    public function save_offence(Request $request, OffenceRepository $offenceRepo)
    {
        $record = $offenceRepo->save($request);

        $msg = (!$record)?"Operation failed, try again":"SGBV record saved successfuly";
        $data["message"] = $msg;
       
        $alert_class = ($record)?'success':'danger';

        $alert = ['alert-'.$alert_class=>$msg];

        return back()->with($alert);
    }

    public function  villages(Request $request, MembersRepository $membersRepo){
        $villages = $membersRepo->get_vilages($request);
        return response()->json($villages);
    }

    public function offence_types(Request $request, OffenceRepository $offenceRepo){
       
        $data['offence_types']   =  $offenceRepo->get_types();
        $data['heading']         = "Offence Types";

        return view('common.offence_types',$data);
    }

    public function save_offence_types(Request $request, OffenceRepository $offenceRepo){
       
        $record = $offenceRepo->save_offence_type($request);

        $msg = (!$record)?"Operation failed, try again":"Offence type saved successfuly";
        $data["message"] = $msg;
       
        $alert_class = ($record)?'success':'danger';
        $alert = ['alert-'.$alert_class=>$msg];

        return back()->with($alert);
    }

    public function regulators(Request $request, OffenceRepository $offenceRepo){
       
        $data['regulators']   =  $offenceRepo->get_regulators();
        $data['heading']      = "Regulators";
        return view('common.regulators',$data);
    }

    public function save_regulator(Request $request, OffenceRepository $offenceRepo){
       
        $record = $offenceRepo->save_regulator($request);

        $msg = (!$record)?"Operation failed, try again":"Regulators saved successfuly";
        $data["message"] = $msg;
       
        $alert_class = ($record)?'success':'danger';
        $alert = ['alert-'.$alert_class=>$msg];

        return back()->with($alert);
    }

    public function save_business(Request $request, MembersRepository $membersRepo)
    {
        
        $request->validate([
            'business_name'  => 'required|max:100',
            'business_type'  => 'required',
            'employee_count' => 'required',
            'biz_ownership'  => 'required',
            'prem_ownership' => 'required',
            'has_biz_skills' => 'required',
            'is_licenced'    => 'required',
            'regulator'      => 'required',
            'address'        => 'required',
            'member_id'      => 'required',
        ]);


        $member = $membersRepo->save_biz_profile($request);

        $action = ($request->ref)?"updated":"saved";

        $msg = (!$member)?"Operation failed, try again":"Member $action successfuly";
        $data["message"] = $msg;
       
        $alert_class = ($member)?'success':'danger';
        $alert = ['alert-'.$alert_class=>$msg];

        return back()->with($alert);
    }


}
