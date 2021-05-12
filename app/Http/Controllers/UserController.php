<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    // public function __construct(){
    //     $this->middleware('auth');
    // }
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index()
    {
        //
        $users = User::all();
        return view('User.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('User.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'name' => 'required',
            'position' => 'required',
            'address'=>'required',
            'mobile'=>'required',
            'email'=> 'required',
            'password'=>'required',
            
        ]);
        $user = User::find($id);
        $user->name = $request->get('name' );
        $user->position = $request->get('position');
        $user->email = $request->get('email');
        $user->mobile=$request->get('mobile');
        $user->address=$request->get('address');
        $user->password = $request->get('password');
        $user->save();
        return redirect('/user');
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
        $users = User::find($id);
        return view('user.show')->with('users', $users);
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
        $users = User::find($id);
        return view('user.edit')->with('users', $users);
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
        $this->validate($request,[
            'name' => 'required',
            'position' => 'required',
            'address'=>'required',
            'mobile'=>'required',
            'email'=> 'required',
            'password'=>'required',
            
        ]);
        $user = User::find($id);
        $user->name = $request->get('name' );
        $user->position = $request->get('position');
        $user->email = $request->get('email');
        $user->mobile=$request->get('mobile');
        $user->address=$request->get('address');
        $user->password = $request->get('password');
        $user->save();
        return redirect('/user');
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
        $users =User::find($id);
        $users->delete();
        return redirect('user');
    }
}

