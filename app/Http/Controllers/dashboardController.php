<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function index(){
        $role=Auth::user()->role;
        if ($role=='admin') {
            return view('Admin.dashboard');
        }
        elseif($role=='user'){
            return view('User.dashboard');
        }
        elseif($role=='teacher'){
            return view('Teacher.dashboard');
        }
    }
}
