<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $cuentas = Cuenta::orderBy('apellido')->orderBy('nombre')->get();
        // return view('jugadores.index',compact('jugadores'));
    }
        
    public function store(JugadoresRequest $request){
        $cuentas = new Cuenta();
        $cuentas->nombre = $request->nombre;
        $cuentas->apellido = $request->apellido;
        $cuentas->save();
        // return redirect()->route('jugadores.index');
    }

    // public function edit(Cuenta $cuentas){
    //     // $equipos = Equipo::orderBy('nombre')->get();
        
    //     // return view('jugadores.edit',compact('jugador'));
    //     // return view('jugadores.edit',compact(['jugador','equipos']));
    // }
    
    public function update(Request $request,Cuenta $cuentas){
        $cuentas->nombre = $request->nombre;
        $cuentas->apellido = $request->apellido;
        $cuentas->save();

        // return redirect()->route('jugadores.index');
    }

    public function destroy(Cuenta $cuentas){
        $cuentas->delete();
        // return redirect()->route('jugadores.index');
    }
}
