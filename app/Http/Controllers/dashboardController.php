<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function index(){
        $role=Auth::user()->role;
        if ($role=='admin') {
            return redirect('Admin.dashboard');
        }
        elseif($role=='user'){
            return redirect('User.dashboard');
        }
        elseif($role=='teacher'){
            return redirect('Teacher.dashboard');
        }
    }
}
