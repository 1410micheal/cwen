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

        if($request->from)
        $query->where(DB::raw('DATE(followup_date)'),'>=',$request->from);

        if($request->to)
        $query->where(DB::raw('DATE(followup_date)'),'<=',$request->to);

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


}