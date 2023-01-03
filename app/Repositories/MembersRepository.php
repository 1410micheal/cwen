<?php
namespace App\Repositories;

use App\Models\BusinessProfile;
use App\Models\Member;
use App\Models\MemberCategory;
use Illuminate\Http\Request;

class MembersRepository{

    public function __construct(){

    }

    public function categories(){

        $categories = MemberCategory::all();
        return $categories;
    }

    public function get(){

        $members = Member::orderBy('id','desc')->get();
        return $members;
    }

    public function find($id){

        $member = Member::find($id);
        return $member;
    }

    public function find_by_ref($ref){

        $member = Member::where('unique_id',$ref)->first();
        return $member;
    }

    public function save(Request $request){

        $member = new Member();

        $member->unique_id   = mt_rand(1111111,9999999).current_user()->id;

        $member->first_name  = $request->first_name;
        $member->date_registered  = $request->date_registered;
        $member->last_name   = $request->last_name;
        $member->middle_name = $request->middle_name;
        $member->email       = $request->email;
        $member->telephone   = $request->phone_no;
        $member->member_category_id  = $request->member_category_id;
        $member->dob             = $request->dob;
        $member->gender          = $request->gender;
        $member->marital_status  = $request->marital_status;
        $member->hiv_status      = $request->hiv_status;
        $member->education_level = $request->education;
        $member->village_id      = 1;
        $member->nin = $request->nin;

        $member->save();

        $request['member_id'] = $member->id;

        $this->save_biz_profile($request);

        return $member;
    }

    private function save_biz_profile(Request $request){

        $profile = new BusinessProfile();

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
        $profile->village_id      = 1;

        $profile->save();

    }


}