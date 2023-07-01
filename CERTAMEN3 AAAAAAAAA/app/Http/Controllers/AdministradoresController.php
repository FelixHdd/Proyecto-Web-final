<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfil;
use App\Models\Cuenta;
use Illuminate\Support\Facades\Hash;

class AdministradoresController extends Controller
{
    public function adminbase(){ // LISTA LOS PERFILES 
        $perfiles = Perfil::All();
        return view('admin.adminbase',compact('perfiles'));
    }
    public function index(){ // PAGINA PARA ELEGIR QUE HACER
        return view('admin.index');
    }
    
    public function admincuenta(){ // LISTA LOS cuentas 
        $cuentas = Cuenta::All();
        return view('admin.admincuenta',compact('cuentas'));
    }
    
    public function admincuentaag(Request $request){ // Agrega cuentas 
        $cuenta = new Cuenta();
        $cuenta->user = $request->user;
        $cuenta->password = Hash::make($request->password);
        $cuenta->nombre = $requst->nombre;
        $cuenta->apellido = $request->apellido;
        $cuenta->perfil_id = $request->id;
        return view('admin.admincagregar',compact('cuentas'));
    }

    public function admincuentaed(Request $request, Cuenta $cuenta){
        $cuenta->nombre = $request->nombre;
        $cuenta->apellido = $request->apellido;
        $cuenta->save();
        return view('admin.index');
    }
    public function admincuentabr(){
        if($cuenta!=Auth::user()){
            $cuenta->delete();
        }
        
        return redirect()->route('admin.index');
    }
}
