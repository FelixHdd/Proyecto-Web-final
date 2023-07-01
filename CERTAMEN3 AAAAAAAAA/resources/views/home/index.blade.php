@extends('templates.master') 
@section('contenidoPrincipal')

<div class="container p-5"> 
        <div class="row">
            <div class="col-12 col-md-4 d-flex  mb-3">
                <div class="card">
                <h1 class="card-header bg-primary text-white" href="">Administrador</h1>
                    <div class="card-body d-flex flex-column">
                        <p class="card-text flex-fill ">  
                        Gestionar Admin
                        </p>
                        <div class="row d-flex align-items-center">
                            <div class="col " >
                                <a href="{{route('admin.index')}}" class="btn btn-secondary">
                                    Opciones Administrador
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 d-flex  mb-3">
                <div class="card">
                    <h1 class="card-header bg-primary text-white">Artista</h1>
                    <div class="card-body d-flex flex-column">
                        <p class="card-text flex-fill">
                        Acceso Artista
                        </p>
                        <div class="row d-flex align-items-center text-center">
                            <div class="col" >
                                <a href="" class=" btn btn-secondary">
                                    Gestionar Artistas
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-12 col-md-4 d-flex mb-3">
                <div class="card">
                    <h1 class="card-header bg-primary text-white">Publico</h1>
                    <div class="card-body d-flex flex-column">
                        <p class="card-text flex-fill">
                            Acceso Publico
                        </p>
                        <div class="row d-flex align-items-center text-center">
                            <div class="col" >
                                <a href="" class="btn btn-secondary">
                                    Gestionar Publico
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
