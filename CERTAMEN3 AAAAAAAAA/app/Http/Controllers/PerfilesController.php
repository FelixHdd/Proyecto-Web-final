<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfil;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PerfilesRequest;

class PerfilesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $perfiles = Perfil::orderBy('nombre')->get();
        return view('perfil.index',compact('perfiles'));
    }

    

}
