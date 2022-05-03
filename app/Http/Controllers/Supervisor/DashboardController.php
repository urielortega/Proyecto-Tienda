<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Activar cuando se tenga la bd
    // public function __Construct(){
    //     $this->middleware('auth');
    //     $this->middleware('MiAdmin');
    // }

    public function getDashboard(){
        return view('supervisor.dashboard');
    }
}
