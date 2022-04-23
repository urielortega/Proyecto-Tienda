<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\User;

class ConexController extends Controller
{
    public function getLogin(){
        return view('auten.login');
    }
    public function getRegistro(){
        return view('auten.registro');
    }
    public function postRegistro(Request $request){
        
        $reglas = [
            'nombre' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'correo' => 'required|email|unique:App\#', //se anexa la tabla de usuario
            'contraseña' => 'required|min:8',
            'conf_contraseña' => 'required|same:password'
        ];

        $mensajes = [
          'nombre.required' => 'Es necesario añadir un nombre',
          'apellido_paterno.required' => 'Es necesario añadir un apellido paterno',
          'apellido_materno.required' => 'Es necesario añadir un apellido materno',
          'correo.required' => 'Su correo electrónico es requerido',
          'correo.correo' => 'El formato de su correo electrónico es invalido',
          'email.unique' => 'Ya se encuentra registrado este correo electrónico',
          'contraseña.required' => 'Es necesario añadir una contraseña',
          'contraseña.min' => 'La contraseña debe de tener 8 caracteres',
          'conf_contraseña.required' => 'Es necesario confirmar la contraseña',
          'conf_contraseña.min' => 'La confirmación de la contraseña debe de ter 8 caracteres',
          'conf_contraseña,same' => 'Las contraseñas no coinciden '
        ];

        $validacion = Validator::make($request -> all(), $reglas, $mensajes);
        if($validacion->fails()):
            return back()->withErrors($validacion)->with('message', 'Se ha producido un error') -> with('typealert','danger');
        else:
            
        endif;
    }
}
