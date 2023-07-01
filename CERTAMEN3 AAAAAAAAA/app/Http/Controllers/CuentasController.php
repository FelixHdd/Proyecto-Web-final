<?php

namespace App\Http\Controllers;

use App\Models\Cuenta;
use App\Models\Perfil;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UsuariosRequest;
use Gate;

class CuentasController extends Controller
{
    #gestiones = listar, agregar editar.. y borrar.
    public function __construct(){
        $this->middleware('auth')->except(['autentificar','logout']);
    }

    public function autentificar(Request $request){
        $user = $request->user;
        $password = $request->password;

        if(Auth::attempt(['user'=>$user,'password'=>$password])){
            return redirect()->route('home.index');
        }
        return back()->withErrors([
            'user' => 'Credenciales Incorrectas',
        ])->onlyInput('user');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home.login');
    }

    // #LISTAR 
    // public function index()
    // {
    //     if(Gate::denies('cuentas-listar')){
    //         return redirect()->route('home.index');
    //     }

    //     $perfiles = Perfil::orderBy('nombre')->get();
    //     $cuentas = Cuenta::orderBy('nombre')->get();
    //     return view('cuentas.index',compact(['cuentas','perfiles']));
    // }




    // #EDITAR
    // public function cambiarEstado(Cuenta $cuenta){
    //     if($usuario!=Auth::user()){
    //         $usuario->cambiarEstado();
    //     }
    //     return redirect()->route('cuentas.index');
    // }

    // public function cambiarContrasena(){
    //     return view('cuentas.contrasena');
    // }

    // public function aplicarCambiarContrasena(CambiarContrasenaRequest $request){
    //     $cuenta = Auth::user();
    //     $cuenta->password = Hash::make($request->password1);
    //     $cuenta->save();
    //     return redirect()->route('cuentas.index');
    // }


}
