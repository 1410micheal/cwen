<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;

class ProfileController extends Controller
{
    
    use Traits\Utils;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user_id=false)
    {   
        if(!$user_id):
         $user = Auth::user();
        else:
         $useId = $this->revealValue($user_id);
         $user  = User::find($useId);
        endif;
        $data['user'] = $user;
        $data['title'] ="User profile | $user->firstname's";

        return view('profile.profile')->with($data);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {


        $request->validate([
            "firstname"=>"required|min:3",
            "lastname"=>"required|min:3",
            "email"=>"required|min:6",
            "mobile"=>"required|min:10",
            "nin"=>"required|min:10",
        ]);

       $editor = Auth::user();

       $secure_id = $request->id;
       $useId = $this->revealValue($secure_id);
       $user  = User::find($useId);

       $user->firstname =  $request->firstname;
       $user->lastname  =  $request->lastname;
       $user->email     =  $request->email;
       $user->nin       =  $request->nin;
       $user->mobile    =  $request->mobile;

       $saved = $user->update();

       if($saved):
            $message  = " $user->firstname's details updated successfully";
            $class  = "success";
        else:
            $message  = "Operation failed";
            $class  = "danger";
        endif;

        $toUser = ($editor->id == $useId)?false:$secure_id;

        $alert = ["alert-$class"=>$message];
        return redirect()->route('profile',$toUser)->with($alert);

    }

    /**
     * Update the specified user's password in db.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function changePass(Request $request)
    {

        
        $request->validate([
            "pass1"=>"required|min:6",
            "pass2"=>"required|min:6",
        ]);


       $editor = Auth::user();
       $secure_id = $request->id;
       $useId = $this->revealValue($secure_id);
       

        if($request->pass1 == $request->pass2){

           $user  = User::find($useId);
           $user->password = Hash::make($request->pass1);
           $saved = $user->update();

           if($saved):
                $message  = " $user->firstname's password updated successfully";
                $class  = "success";
            else:
                $message  = "Operation failed";
                $class  = "danger";
            endif;

        }else{

            $message  = "Passwords do not match, change failed";
            $class  = "danger";
        }

        $toUser = ($editor->id == $useId)?false:$secure_id;
        $alert = ["alert-$class"=>$message];
        return redirect()->route('profile',$toUser)->with($alert);

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
