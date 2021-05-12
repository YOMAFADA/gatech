<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AccountantController extends Controller
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
        return view('accountant.register');
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
            $accountants = new User;
            $accountants->name = $request->input('name');
            $accountants->position= $request->input('position');
            $accountants->address= $request->input('address');
            $accountants->mobile= $request->input('mobile');
            $accountants->email= $request->input('email');
            $accountants->password = \Hash::make($request['password']);
            $accountants->privilege_id = 2;
            $accountants->save();
            return redirect('dashbaord')->with("success", "accountants has been successfully created");
    }
}
