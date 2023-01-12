<?php

namespace App\Http\Livewire;

use App\Repositories\FollowupRepository;
use Livewire\Component;
use App\Repositories\MembersRepository;
use App\Repositories\OffenceRepository;
use App\Repositories\ProductsRepository;
use Illuminate\Http\Request;

class Reports extends Component
{
    public function followups(Request $request,FollowupRepository $followupRepo)
    {
        $from_date = ($request->start_date)?$request->start_date:date('Y-m-01');
        $to_date   = ($request->end_date)?$request->end_date:date('Y-m-d');

        $request['from'] = $from_date;
        $request['to']   = $to_date;

        if($request->export_pdf == 1)
         $request['rows'] = 1000;

        $data['search'] = (Object) array(
            'from' => date('m/d/Y',strtotime($from_date)),
            'to'   => date('m/d/Y',strtotime($to_date))
        );
        
        $data['followups'] = $followupRepo->get($request);
        return view('reports.followups',$data);

    }


    public function membership(Request $request, MembersRepository $membersRepo)
    {
        $from_date = ($request->start_date)?$request->start_date:date('Y-m-01');
        $to_date   = ($request->end_date)?$request->end_date:date('Y-m-d');

        $request['from'] = $from_date;
        $request['to']   = $to_date;

        if($request->export_pdf == 1)
         $request['rows'] = 1000;

        $data['search'] = (Object) array(
            'from' => date('m/d/Y',strtotime($from_date)),
            'to'   => date('m/d/Y',strtotime($to_date))
        );
        
        $data['members'] = $membersRepo->get($request);
        return view('members.index',$data);
    }


    public function offences(Request $request, OffenceRepository $offenceRepo)
    {
        $from_date = ($request->start_date)?$request->start_date:date('Y-m-01');
        $to_date   = ($request->end_date)?$request->end_date:date('Y-m-d');

        $request['from'] = $from_date;
        $request['to']   = $to_date;

        if($request->export_pdf == 1)
         $request['rows'] = 1000;

        $data['search'] = (Object) array(
            'from' => date('m/d/Y',strtotime($from_date)),
            'to'   => date('m/d/Y',strtotime($to_date))
        );
        
        $data['offences'] = $offenceRepo->get($request);
        return view('reports.offences',$data);
    }
}
