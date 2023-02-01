<?php
namespace App\Repositories;

use App\Models\BusinessProfile;
use App\Models\Cluster;
use App\Models\Member;
use App\Models\MemberCategory;
use App\Models\MemberGroup;
use App\Models\Village;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\TextUI\XmlConfiguration\Groups;

class MembersRepository{

    public function __construct(){

    }

    public function categories(){

        $categories = MemberCategory::all();
        return $categories;
    }

    public function get(Request $request){

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

        if(!$request->ref)
        $member->unique_id   = "CWN".time().current_user()->id;

        $member->first_name  = $request->first_name;
        $member->date_registered  = $request->date_registered;
        $member->last_name   = $request->last_name;
        $member->middle_name = $request->middle_name;
        $member->email       = $request->email;
        $member->telephone   = $request->phone_no;
        $member->phone_no    = $request->phone_no;
        $member->member_category_id  = $request->member_category_id;
        $member->dob             = $request->dob;
        $member->gender          = $request->gender;
        $member->marital_status  = $request->marital_status;
        $member->hiv_status      = $request->hiv_status;
        $member->education_level = $request->education;
        $member->village_id      = $request->village_id;
        $member->nin             = $request->nin;
        $member->is_group        = $request->is_group;

        $saved = ($request->ref)?$member->update():$member->save();
        
        $business_id =($request->ref)?$member->business->id:null;

        $request['member_id'] = $member->id;

        $this->save_biz_profile($request,$business_id);

        return $member;
    }

    public function save_biz_profile(Request $request,$business_id=null){

        $profile = ($request->ref)?BusinessProfile::find($business_id):new BusinessProfile();

        $profile->business_name    = $request->business_name;
        $profile->has_biz_skills   = $request->has_biz_skills;
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

    private function excel_export($results){

        $export_file = 'member-list-'.time().'.xls';
        $export_data = [];

        $results->chunk(100, function($rows) use(&$export_data) {

            foreach ($rows as $row){

               $data_row = [
                   "UNIQUE ID"         => $row->unique_id,
                   "FIRST NAME"        => $row->first_name,
                   "LAST NAME"         => $row->last_name,
                   "DOB"               => $row->dob,
                   "AGE"               => get_age($row->dob),
                   "GENDER"            => $row->gender,
                   "PHONE"             => $row->telephone,
                   "HIV STAUS"         => $row->hiv_status,
                   "EDUCATION"         => $row->education_level,
                   "MARITAL STATUS"    => $row->marital_status,
                   "CATEGORY"          => $row->category->category_name,
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

        $group = ($request->id)?MemberGroup::find($$request->id):new MemberGroup();

        $group->group_name    = $request->group_name;
        $group->group_email   = $request->group_email;
        $group->group_phone   = $request->group_phone;
        $group->village_id    = $request->village_id;

        return ($request->id)?$group->update():$group->save();
    }




}