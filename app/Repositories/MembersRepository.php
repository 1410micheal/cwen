<?php
namespace App\Repositories;

use App\Models\BusinessProfile;
use App\Models\Cluster;
use App\Models\FollowupLog;
use App\Models\Member;
use App\Models\MemberCategory;
use App\Models\MemberDistributionChannel;
use App\Models\MemberGroup;
use App\Models\MemberTraining;
use App\Models\ProductDetail;
use App\Models\ServiceExpectation;
use App\Models\Village;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MembersRepository{

    public function __construct(){

    }

    public function categories(){

        $categories = MemberCategory::all();
        return $categories;
    }

    public function get(Request $request=null){

        if(!$request)
        return Member::all();

        $query = Member::orderBy('id','desc');
        $row_count  = ($request->rows)?$request->rows:20;

        if($request->from_date)
        $query->where(DB::raw('DATE(date_registered)'),'>=',$request->from_date);

        if($request->to_date)
        $query->where(DB::raw('DATE(date_registered)'),'<=',$request->to_date);

        if($request->gender)
        $query->where('gender',$request->gender);

        if($request->hiv_status)
        $query->where('hiv_status',$request->hiv_status);

        if($request->education)
        $query->where('education_level',$request->education);

        if($request->marital_status)
        $query->where('marital_status',$request->marital_status);

        if($request->group_id)
        $query->where('group_id',$request->group_id);

        if($request->cluster_id)
        $query->where('cluster_id',$request->cluster_id);

        if($request->term){
            $query->where('first_name','like',$request->term.'%');
            $query->orWhere('unique_id','like',$request->term.'%');
            $query->orWhere('last_name','like',$request->term.'%');
            $query->orWhere('email','like',$request->term.'%');
            $query->orWhere('telephone','like',$request->term.'%');
            $query->orWhere('nin','like',$request->term.'%');
            $query->orWhere('phone_no','like',$request->term.'%');
        }
        
      
        if($request->excel_export)
          $this->excel_export($query);
        
        $members = $query->paginate($row_count);
        return $members;
    }

    public function find($id){

        $member = Member::find($id);
        return $member;
    }

    public function get_vilages(Request $request,$all=false){
        $hint     = $request->q;
        
        if($all)
         return Village::paginate(25);

        if(empty($hint))
         return [];
         
        $villages = Village::where('village_name','like', $hint.'%')->groupBy('village_name','district_id');
        return $villages->get();
    }

    public function save_village(Request $request){

        $village = ($request->id)?Village::find($$request->id):new Village();

        $village->village_name   = $request->village_name;
        $village->district_id   = $request->district_id;

        return ($request->id)?$village->update():$village->save();
    }

    public function find_by_ref($ref){

        $member = Member::where('unique_id',$ref)->first();
        return $member;
    }

    public function save(Request $request){

        
        $member = ($request->ref)?$this->find_by_ref($request->ref):new Member();

        $last_member    = Member::whereRaw('id = (select max(`id`) from members)')->first();
        $last_member_id = $last_member->id;
        $prefix = "000";

        if($last_member_id > 10){
            $prefix = "00";
        }
        else if($last_member_id > 100){
            $prefix = "00";
        }else if($last_member_id > 1000){
            $prefix = "0";
        }else if($last_member_id > 10000){
            $prefix = "";
        };

        //current_user()->id
        if(!$request->ref)
        $member->unique_id   = $prefix.$last_member_id;

        $member->first_name       = $request->first_name;
        $member->date_registered  = date('Y/m/d',strtotime($request->date_registered));
        $member->last_name   = $request->last_name;
        $member->middle_name = $request->middle_name;
        $member->email       = $request->email;
        $member->telephone   = $request->phone_no;
        $member->phone_no    = $request->phone_no;
        $member->member_category_id  = $request->member_category_id;
        $member->dob             = date('Y/m/d',strtotime($request->dob));
        $member->gender          = $request->gender;
        $member->marital_status  = $request->marital_status;
        $member->hiv_status      = $request->hiv_status;
        $member->education_level = $request->education;
        $member->village_id      = $request->village_id;
        $member->group_id        = $request->group_id;
        $member->cluster_id      = $request->cluster_id;
        $member->nin             = $request->nin;
        $member->is_group        = ($request->is_group)?$request->is_group:0;
        $member->info_channel    = $request->infochannel_id;

        $saved = ($request->ref)?$member->update():$member->save();
        
        $business_id =($request->ref)?@$member->business->id:null;

        $request['member_id'] = $member->id;
        $request['business_id'] = $member->business_id;

        $this->save_biz_profile($request,$business_id);
        $this->save_expected_services($request);
        $this->save_channels($request);
        $this->save_member_training($request);

        return $member;
    }

    private function save_member_training(Request $request){

        foreach($request->trainings as $key=>$value){

            $training = new MemberTraining();
            $training->member_id = $request->member_id;
            $training->training_id     = $value;
            $training->save();
        }

        return true;
    }


    public function save_biz_profile(Request $request,$business_id=null){

        $profile = ($business_id)?BusinessProfile::find($business_id):new BusinessProfile();

        $profile->business_name    = $request->business_name;
        $profile->has_biz_skills   = (count($request->trainings)>0)?1:0;
        $profile->business_type_id = $request->business_type;
        $profile->member_id        = $request->member_id;
        $profile->no_of_employees  = $request->employee_count;
        $profile->regulator_id     = $request->regulator;
        $profile->is_biz_owner     = $request->biz_ownership;
        $profile->is_premise_owner = $request->prem_ownership;
        $profile->address_detail   = $request->address;
        $profile->is_licenced      = $request->is_licenced;
        $profile->village_id       = 1;

        $saved = ($request->ref)?$profile->update():$profile->save();

    }

    public function save_expected_services(Request $request){

        foreach($request->services_expected as $key=>$value){
            
            $expectation = ServiceExpectation::where('member_id',$request->member_id)->where('service_id',$value)->first();
            
            if(!$expectation):
                $expectation = new ServiceExpectation();
                $expectation->member_id = $request->member_id;
                $expectation->service_id = $value;
                $expectation->save();
           endif;
        }

      }

      public function save_channels(Request $request){

        foreach($request->distribution_channels as $key=>$value){
            
            $channel = MemberDistributionChannel::where('member_id',$request->member_id)->where('distribution_channel_id',$value)->first();
            
            if(!$channel):
                $channel = new MemberDistributionChannel();
                $channel->member_id = $request->member_id;
                $channel->distribution_channel_id = $value;
                $channel->save();
           endif;
        }

      }

    private function excel_export($results){

        $export_file = 'member-list-'.time().'.xls';
        $export_data = [];

        $results->chunk(100, function($rows) use(&$export_data) {

            foreach ($rows as $row){

               $data_row = [
                   "UNIQUE ID"         => $row->unique_id,
                   "FIRST NAME"        => $row->first_name,
                   "LAST NAME"         => $row->last_name,
                   "DATE REGISTERED"   => $row->date_registered,
                   "AGE"               => get_age($row->dob),
                   "DOB"               => $row->dob,
                   "GENDER"            => $row->gender,
                   "PHONE"             => $row->telephone,
                   "HIV STAUS"         => $row->hiv_status,
                   "EDUCATION"         => $row->education_level,
                   "MARITAL STATUS"    => $row->marital_status,
                   "CATEGORY"          => $row->category->category_name,
                   "CLUSTER"          => ($row->cluster)?$row->cluster->cluster_name:'',
                   "GROUP"          => ($row->group)?$row->group->group_name:'',
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

    public function get_clusters(){

        $clusters = Cluster::all();
        return $clusters;
    }

    public function save_cluster(Request $request){

        $cluster = ($request->id)?Cluster::find($$request->id):new Cluster();

        $cluster->cluster_name   = $request->cluster_name;
        $cluster->cluster_desc   = $request->description;

        return ($request->id)?$cluster->update():$cluster->save();
    }

    
    public function get_groups(){

        $groups = MemberGroup::paginate(15);
        return $groups;
    }

    public function save_group(Request $request){

        $group = ($request->id>0)?MemberGroup::find($request->id):new MemberGroup();

        $group->group_name    = $request->group_name;
        $group->group_email   = $request->group_email;
        $group->group_phone   = $request->group_phone;
        $group->village_id    = $request->village_id;

        return ($request->id)?$group->update():$group->save();
    }

    public function get_widgets(){
        
        $members  = Member::all();
        $products = ProductDetail::all();
        $followups = FollowupLog::groupBy('member_id')->get();

        $data['member_count']    = count($members);
        $data['product_count']   = count($products);
        $data['followup_count']  = count($followups);
        $data['membership']      = $this->get_member_summary();
        $data['products']        = $this->get_product_summary();

        return (object) $data;
    }

    public function get_product_summary(){

        $data = DB::select(DB::raw("SELECT count(pd.id) as count,pt.type_name from product_details pd JOIN product_types pt ON pd.product_type_id=pt.id group by pd.product_type_id"));

        return $data;
    }

    
    public function get_member_summary(){

        $data = DB::select(DB::raw("SELECT count(m.id) as count,r.region_name from members m 
        RIGHT JOIN villages v ON m.village_id=v.id
        RIGHT JOIN districts d ON v.district_id=d.id
        RIGHT JOIN regions r ON d.region_id=r.id
         group by r.id"));
         
        return $data;
    }


}