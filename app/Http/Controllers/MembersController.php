<?php

namespace App\Http\Controllers;

use App\Repositories\MemberRepository;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $membersRepo;

    public function __construct(MemberRepository $membersRepo)
    {
        $this->middleware('auth');

        $this->membersRepo = $membersRepo;
    }

    /**
     * Show a list of members.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index(Request $request)
    {
        $data['members'] = $this->membersRepo->get();
        return view('home',$data);
    }
}
