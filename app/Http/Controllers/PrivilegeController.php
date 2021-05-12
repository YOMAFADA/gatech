<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivilegeController extends Controller
{
    
    public function privilegegetedit(){
        return view('admin.privilege.edit');
    }
    public function privilegepostedit(){
        return view('admin.privilege.edit');
    }
    public function privilegegetcreate(){
        return view('admin.privilege.create');
    }
    
    public function store(Request $request)
            {
                $this->validate($request,[
                    'name' => 'required',

                ]);
            
            #save new user details to the database
            $privilege = new Privilege;
            $privilege->name = $request->input('name');
            $privilege->save();
            return\Redirect::to('admin/privilege/create');
        }


}
