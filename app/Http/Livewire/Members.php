<?php

namespace App\Http\Livewire;

use App\Repositories\FollowupRepository;
use Livewire\Component;
use App\Repositories\MembersRepository;
use App\Repositories\OffenceRepository;
use App\Repositories\ProductsRepository;
use Illuminate\Http\Request;

class Members extends Component
{
    public function render(Request $request,MembersRepository $membersRepo)
    {
        
        $from_date = ($request->from)?$request->from:date('Y-m-01');
        $to_date   = ($request->from)?$request->to:date('Y-m-d');

        $request['from'] = $from_date;
        $request['to']   = $to_date;

        $data['search'] = (Object) array(
            'from' => date('m/d/Y',strtotime($from_date)),
            'to'   => date('m/d/Y',strtotime($to_date))
        );
        
        $data['members'] = $membersRepo->get($request);
        return view('members.index',$data);
    }

    public function show(Request $request, MembersRepository $membersRepo,FollowupRepository $followupRepo,ProductsRepository $productsRepo,OffenceRepository $offenceRepo)
    {
        $member = $membersRepo->find_by_ref($request->ref);

        $data['member']          =  $member;
        $data['visits_count']    =  count($member->visits);
        $data['products_count']  =  count($member->products);
        $data['offences_count']  =  count($member->offences);
        $data['business']        =  $member->business;
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


}
