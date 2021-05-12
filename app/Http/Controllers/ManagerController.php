<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

        return view('manager.register');
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
            $managers = new User;
            $managers->name = $request->input('name');
            $managers->position= $request->input('position');
            $managers->address= $request->input('address');
            $managers->mobile= $request->input('mobile');
            $managers->email= $request->input('email');
            $managers->password = \Hash::make($request['password']);
            $managers->privilege_id = 1;
            $managers->save();
            return back()->with("success", "managers has been successfully created");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
