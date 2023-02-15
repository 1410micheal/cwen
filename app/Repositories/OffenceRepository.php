<?php
namespace App\Repositories;
use App\Models\OffenceReport;
use App\Models\OffenceService;
use App\Models\OffenceType;
use App\Models\Regulator;
use App\Models\Service;
use Illuminate\Http\Request;

class OffenceRepository{

    public function __construct(){

    }

    //Get all followup
    public function get(Request $request){

        $query = OffenceReport::orderBy('id','desc')->with("type","services","member");
        $row_count  = ($request->rows)?$request->rows:20;

        if($request->from_date)
        $query->where(DB::raw('DATE(occurence_date)'),'>=',$request->from_date);

        if($request->to_date)
        $query->where(DB::raw('DATE(occurence_date)'),'<=',$request->to_date);

        if($request->type_id)
        $query->where('offence_type_id',$request->type_id);

        if($request->member_id)
        $query->where('member_id',$request->member_id);
      
        if($request->excel_export)
          $this->excel_export($query);
        
        $records = $query->paginate($row_count);
        return $records;
    }

    private function excel_export($results){

        $export_file = 'offences-list-'.time().'.xls';
        $export_data = [];

        $results->chunk(100, function($rows) use(&$export_data) {

            foreach ($rows as $row){

                $services = "";
                foreach($row->services as $service):
                 $services = $service->service_name."";
                endforeach;

               $data_row = [
                   "DATE"              => $row->occurence_date,
                   'MEMBER'            => $row->member->last_name." ".$row->member->first_name,
                   "TYPE"              => $row->type->offence_type_name,
                   "NATURE"            => $row->offence_nature,
                   "STATUS"            => $row->case_type,
                   "SERVICES"          => $services,
                   "EFFECTS"           => $row->effects_on_biz,
               ];

               array_push($export_data,$data_row);
            }

        });

       set_time_limit(0);

        $filename =  $export_file;      
        header("Content-Type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=\"$filename\"");

       export_excel($export_data);
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

   public function save_offence_type(Request $request){

    $type = new OffenceType();
    $type->offence_type_name = $request->offence_type;
    $type->offence_type_desc = $request->description;

    $type->save();

    return $type;

   }

   public function get_regulators(){

    $regulators = Regulator::all();
    return $regulators;
  }

   public function  save_regulator(Request $request){

    $regulator = new Regulator();
    $regulator->regulator_name = $request->name;
    $regulator->regulator_desc = $request->description;

    $regulator->save();

    return $regulator;

   }


}