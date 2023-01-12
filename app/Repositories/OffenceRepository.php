<?php
namespace App\Repositories;
use App\Models\OffenceReport;
use App\Models\OffenceService;
use App\Models\OffenceType;
use App\Models\Service;
use Illuminate\Http\Request;

class OffenceRepository{

    public function __construct(){

    }

    //Get all followup
    public function get(Request $request){

        $report = OffenceReport::paginate(20);
        return $report;
    }

    public function get_types(){

        $types = OffenceType::all();
        return $types;
    }

     //Find a single followup
    public function find($member_id){

        $reports = OffenceReport::where('member_id',$member_id);
        return $reports;
    }

    //saves followup

    public function save(Request $request){

        $report = new OffenceReport();

        //$report->occurence_date  = date('Y-m-d H:i:s',strtotime($request->date));
        $report->member_id       = $request->member_id;
        $report->offence_nature  = $request->offence_nature;
        $report->offence_type_id = $request->offence_type;
        $report->case_type       = $request->case_type;
        $report->perpecurator    = $request->perpecurator;
        $report->effects_on_biz  = $request->effects_on_biz;

        $record = $report->save();

        $request['offence_report_id'] = $report->id;

        $this->save_report_services($request);

       return $record;
    }


    private function save_report_services(Request $request){

        foreach($request->services as $key=>$value){

            $service = new OffenceService();
            $service->offence_report_id = $request->offence_report_id;
            $service->service_id      = $value;
            $service->save();
        }

        return true;
    }


}