<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Http\Requests\loginLogin;

class LoginController extends Controller
{
    public function showLogin(){
        return view('login.index');
    }

    public function showLandin(){
        return view('h/basic-free-lite/index');
    }

    public function login(loginLogin $request){

        $number =  $request->input('number');
        $clave =  $request->input('clave');

        //query
        $user = Usuario::
        where('NumeroIdentificacion','=',$number)
        ->where('Contraseña','=',$clave)
        ->get();  //return array ,NOT MODIFY


        //si existe = recoga los datos -> use la funcion rol() -> segun su rol, envielo
        if (count($user) != 0) {
            foreach($user as $u){
                $roles= $u->rol()->get();
                foreach($roles as $r){
                    $rol = $r->tipoRol;
                }//end foreach
            }//end foreach

            return redirect('login/'.$rol)
            ->with('rol', $rol);

        }else{
            return redirect('login')->with('msg', "Usuario no encontrado, intentelo de nuevo");
        }

        /*
        1000000000
        12345
        */

    }


}
