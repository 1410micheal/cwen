<?php

namespace App\Http\Livewire;

use App\Repositories\FollowupRepository;
use Livewire\Component;
use App\Repositories\MembersRepository;
use App\Repositories\OffenceRepository;
use App\Repositories\ProductsRepository;
use Illuminate\Http\Request;
use PDF;

class Reports extends Component
{
    public function followups(Request $request,FollowupRepository $followupRepo)
    {
        $from_date = ($request->start_date)?$request->start_date:date('Y-m-01');
        $to_date   = ($request->end_date)?$request->end_date:date('Y-m-d');

        $request['from_date'] = date('Y/m/d',strtotime($from_date));
        $request['to_date']   = date('Y/m/d',strtotime($to_date));

        if($request->export_pdf == 1)
         $request['rows'] = 1000;

        $data['followups'] = $followupRepo->get($request);

        $request['from'] = date('m/d/Y',strtotime($from_date));
        $request['to']   = date('m/d/Y',strtotime($to_date));

        $data['search']  = (Object) $request->all();


        if($request->export_pdf == 1):

            $exportdata['followups'] = $data['followups'] ;
            $exportdata['title']  = "Member Followup Records";
            $exportdata['search'] =  (Object) $request->all();

            $pdf = PDF::loadView('reports.followups-pdf',$exportdata)->setPaper('a4', 'landscape');;
           return $pdf->download("member-followups-".time().'.pdf');
           
        endif;

        return view('reports.followups',$data);

    }


    public function membership(Request $request, MembersRepository $membersRepo)
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
            $exportdata['title']  = "Member members list";
            $exportdata['search'] =  (Object) $request->all();

            $pdf = PDF::loadView('members.members-pdf',$exportdata)->setPaper('a4', 'landscape');;
           return $pdf->download("member-members-report-".time().'.pdf');
        endif;

        return view('members.index',$data);
    }


    public function offences(Request $request, OffenceRepository $offenceRepo, MembersRepository $membersRepo)
    {
        $from_date = ($request->start_date)?$request->start_date:date('Y-m-01');
        $to_date   = ($request->end_date)?$request->end_date:date('Y-m-d');

        $request['from'] = $from_date;
        $request['to']   = $to_date;

        if($request->export_pdf == 1)
         $request['rows'] = 1000;

         $search = $request->all();
         $data['search']   = (object) $search;;

         $search['from'] = date('m/d/Y',strtotime($from_date));
         $search['to']   =  date('m/d/Y',strtotime($to_date));
        
        $data['offences'] = $offenceRepo->get($request);

        if($request->export_pdf == 1):

            $exportdata['offences'] = $data['offences'] ;
            $exportdata['title']  = "Member offences Reports";
            $exportdata['search'] =  (Object) $request->all();

            $pdf = PDF::loadView('reports.offences-pdf',$exportdata)->setPaper('a4', 'landscape');;
           return $pdf->download("member-offences-report-".time().'.pdf');
        endif;

        $data['members'] = $membersRepo->get();

        return view('reports.offences',$data);
    }

    public function products(Request $request, ProductsRepository $productsRepo)
    {
        $from_date = ($request->start_date)?$request->start_date:date('Y-m-01');
        $to_date   = ($request->end_date)?$request->end_date:date('Y-m-d');

        $request['from'] = $from_date;
        $request['to']   = $to_date;

        if($request->export_pdf == 1)
         $request['rows'] = 1000;
         
         $search = $request->all();

         $search['from'] = date('m/d/Y',strtotime($from_date));
         $search['to']   =  date('m/d/Y',strtotime($to_date));
 
         $data['products'] = $productsRepo->get($request);
         $data['search']   = (object) $search;
        
        if($request->export_pdf == 1):

            $exportdata['products'] = $data['products'] ;
            $exportdata['title']  = "Member Products Records";
            $exportdata['search'] =  (Object) $request->all();

            $pdf = PDF::loadView('reports.products-pdf',$exportdata)->setPaper('a4', 'landscape');;
            return $pdf->download("member-products-".time().'.pdf');
            
        endif;

        //dd($data['products']);

        return view('reports.products',$data);
    }

    
   
}
