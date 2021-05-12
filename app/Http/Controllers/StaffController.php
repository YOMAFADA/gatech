<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class StaffController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $user=User::all();
        // return view('manager.register')->with('user', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return 666;
        return view('staff.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
                'name' => ['required', 'string', 'max:255'],
                'position' => ['required', 'string', 'max:255'],
                'address' => ['required', 'string', 'max:255'],
                'mobile' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:6', 'confirmed'],
            ]);
            $staffs = new User;
            $staffs->name = $request->input('name');
            $staffs->position= $request->input('position');
            $staffs->address= $request->input('address');
            $staffs->mobile= $request->input('mobile');
            $staffs->email= $request->input('email');
            $staffs->password = \Hash::make($request['password']);
            $staffs->privilege_id = 3;
            $staffs->save();
            return redirect('dashboard')->with("success", "staffs has been successfully created");
    }
}
