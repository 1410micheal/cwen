<?php
namespace App\Repositories;
use App\Models\FollowupLog;
use App\Models\FollowupService;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class FollowupRepository{

    public function __construct(){

    }

    //Get all followup
    public function get(Request $request){

        
        $query = FollowupLog::orderBy('id','desc');
        $row_count  = ($request->rows)?$request->rows:20;

        if($request->from_date)
        $query->where(DB::raw('DATE(followup_date)'),'>=',$request->from_date);

        if($request->to_date)
        $query->where(DB::raw('DATE(followup_date)'),'<=',$request->to_date);

        if($request->excel_export)
          $this->excel_export($query);

        $followups = $query->paginate($row_count);
        return $followups;
    }

    public function get_services(){

        $services = Service::all();
        return $services;
    }

     //Find a single followup
    public function find($id){

        $followup = FollowupLog::find($id);
        return $followup;
    }

    //saves followup

    public function save(Request $request){

        $followup = new FollowupLog();

        $followup->followup_date   = date('Y-m-d',strtotime($request->date));
        $followup->member_id       = $request->member_id;
        $record = $followup->save();

        $request['followup_log_id'] = $followup->id;

        $this->save_followup_services($request);

       return $record;
    }


    private function save_followup_services(Request $request){

        foreach($request->services as $key=>$value){

            $service = new FollowupService();
            $service->followup_log_id = $request->followup_log_id;
            $service->service_id      = $value;
            $service->save();
        }

        return true;
    }

    private function excel_export($results){

        $export_file = 'member-list-'.time().'.xls';
        $export_data = [];

        $results->chunk(100, function($rows) use(&$export_data) {

            foreach ($rows as $row):

                $services = "";

                foreach($row->followup_services as $service){
                    $services .= "\n".$service->service->service_name;
                }

               $data_row = [
                   "DATE"             => $row->followup_date,
                   "MEMBER"           => $row->member->first_name." ".$row->member->last_name,
                   "SERVICES OFFERED" => $services
               ];

               array_push($export_data,$data_row);

            endforeach;

        });

       set_time_limit(0);

        $filename =  $export_file;      
        header("Content-Type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=\"$filename\"");

       export_excel($export_data);
    }

}