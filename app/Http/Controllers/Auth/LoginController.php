<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function authenticate(Request $request)
    {
        dd($request->all());
        
        $credentials = $request->only('email', 'password');
        $credentials2 = ['mobile' => $request->email, 'password' => $request->password];
        $remember = $request('remember');
        //|| Auth::attempt($credentials2,$remember
       
        if (Auth::attempt($credentials,$remember)) {
            // Authentication passed...
            //logout other devices

            $user = User::where($request->email)
                        //->orWhere('mobile',$request->email)
                        ->first();
           
        //     if(in_array($user->status,[1,3])):
        //        Auth::logoutOtherDevices($credentials['password']);
        //    else:
        //      Auth::logout();
        //      redirect()->route('login');
        //     endif;

            //redirect
            return redirect()->intended('index');
        }
    }
}
