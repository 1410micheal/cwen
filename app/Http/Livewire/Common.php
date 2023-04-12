<?php

namespace App\Http\Livewire;

use App\Repositories\CommonRepository;
use App\Repositories\ProductsRepository;
use Illuminate\Http\Request;
use Livewire\Component;

class Common extends Component
{
   
    public function methods(Request $request,CommonRepository $commonRepo)
    {
        
        $data['heading'] = "Product Categories";
        $data['methods'] = $commonRepo->get_processing_methods();
        return view('common.processing_methods')->with($data);
    }

    public function trainings(Request $request,CommonRepository $commonRepo)
    {
        $data['heading'] = "Trainings";
        $data['trainings'] = $commonRepo->get_trainings();

        return view('common.trainings')->with($data);
    }

    public function dsitribution_channels(Request $request,CommonRepository $commonRepo)
    {
        $data['heading'] = "Distribution Channels";
        $data['channels'] = $commonRepo->get_channels();

        return view('common.distribution_channels')->with($data);
    }


    public function info_channels(Request $request,CommonRepository $commonRepo)
    {
        $data['heading'] = "About Us Channels";
        $data['infochannels'] = $commonRepo->get_info_channels();

        return view('common.infochannels')->with($data);
    }

    public function businesstypes(Request $request,CommonRepository $commonRepo)
    {
        $data['heading'] = "Business Types";
        $data['types'] = $commonRepo->get_businesstypes();

        return view('common.business_types')->with($data);
    }

    public function save_businesstype(Request $request,CommonRepository $commonRepo){

        $member = $commonRepo->save_business_type($request);

        $msg = (!$member)?"Operation failed, try again":"Type  saved successfuly";
        $data["message"] = $msg;
       
        $alert_class = ($member)?'success':'danger';
        $alert = ['alert-'.$alert_class=>$msg];

        return back()->with($alert);
    }


    
    public function services(Request $request,CommonRepository $commonRepo)
    {
        $data['heading'] = "Services";
        $data['services'] = $commonRepo->get_services();

        return view('common.services')->with($data);
    }

    public function save_service(Request $request,CommonRepository $commonRepo){

        $member = $commonRepo->save_service($request);

        $msg = (!$member)?"Operation failed, try again":"Service  saved successfuly";
        $data["message"] = $msg;
       
        $alert_class = ($member)?'success':'danger';
        $alert = ['alert-'.$alert_class=>$msg];

        return back()->with($alert);
    }

    public function save_method(Request $request,CommonRepository $commonRepo){

        $member = $commonRepo->save_method($request);

        $msg = (!$member)?"Operation failed, try again":"Method  saved successfuly";
        $data["message"] = $msg;
       
        $alert_class = ($member)?'success':'danger';
        $alert = ['alert-'.$alert_class=>$msg];

        return back()->with($alert);
    }

    public function save_training(Request $request,CommonRepository $commonRepo){

        $member = $commonRepo->save_training($request);

        $msg = (!$member)?"Operation failed, try again":"Training  saved successfuly";
        $data["message"] = $msg;
       
        $alert_class = ($member)?'success':'danger';
        $alert = ['alert-'.$alert_class=>$msg];

        return back()->with($alert);
    }

    public function save_infochannel(Request $request,CommonRepository $commonRepo){

        $member = $commonRepo->save_info_channel($request);

        $msg = (!$member)?"Operation failed, try again":"Record  saved successfuly";
        $data["message"] = $msg;
       
        $alert_class = ($member)?'success':'danger';
        $alert = ['alert-'.$alert_class=>$msg];

        return back()->with($alert);
    }

    public function save_distchannel(Request $request,CommonRepository $commonRepo){

        $member = $commonRepo->save_channel($request);

        $msg = (!$member)?"Operation failed, try again":"Record  saved successfuly";
        $data["message"] = $msg;
       
        $alert_class = ($member)?'success':'danger';
        $alert = ['alert-'.$alert_class=>$msg];

        return back()->with($alert);
    }



    
}
