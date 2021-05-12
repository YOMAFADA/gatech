<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CentraldashboardController extends Controller
{
     //
     public function index(){
        $privilege_id = Auth::User()->privilege_id;
        if($privilege_id == 1){
            return view('Dashboard.manager');
        }
        elseif($privilege_id == 2){
            return view('Dashboard.accountants');

        }
        elseif($privilege_id == 3){
            return view('Dashboard.staff');
}
     }
    }