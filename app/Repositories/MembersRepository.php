<?php
namespace App\Repositories;
use App\Models\Member;

class MembersRepository{

    public function __construct(){

    }

    public function get(){

        $members = Member::all();
        return $members;
    }

    public function find($id){

        $member = Member::find($id);
        return $member;
    }

    public function find_by_ref($email){

        $member = Member::where('unique_id',$email)->first();
        return $member;
    }

    public function save($data){

        $member = new Member();

        $member->first_name  = $data->first_name;
        $member->last_name   = $data->last_name;
        $member->middle_name = $data->middle_name;
        $member->email       = $data->email;
        $member->telephone   = $data->mobile_phone_number;
        $member->member_category_id  = $data->category_id;
        $member->dob             = $data->dob;
        $member->gender          = $data->sex;
        $member->marital_status  = $data->marital_status;
        $member->hiv_status      = $data->hiv_status;
        $member->education_level = $data->education;

        $member->save();

        return $member;
    }


}