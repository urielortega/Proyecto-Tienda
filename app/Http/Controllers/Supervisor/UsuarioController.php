<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class UsuarioController extends Controller
{
    //Activar cuando se tenga la bd
    // public function __Construct(){
    //     $this->middleware('auth');
    //     $this->middleware('MiAdmin');
    // }
    public function getUsuarios(){
        $users = User::orderBy('id')->get();
        return view('supervisor.usuarios.home');
    }
}
