@extends('templates.master') 
@section('contenidoPrincipal')


<div class="container p-5"> 
        <h1 class="text-center text-white">Vista de Administrador</h1>
        <div class="row">
            <div class="col-12 col-md-4 d-flex  mb-3">
                <div class="card">
                <h1 class="card-header bg-primary text-white" href="">Listar Perfiles</h1>
                    <div class="card-body d-flex flex-column">
                        <p class="card-text flex-fill ">  
                        EN ESTA VISTA PUEDE ACCEDER A LOS PERFILES INGRESADOS
                        </p>
                        <div class="row d-flex align-items-center">
                            <div class="col " >
                                <a href="{{route('admin.adminbase')}}" class="btn btn-secondary">//esta esta lista
                                    LISTAR PERFILES
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 d-flex  mb-3">
                <div class="card">
                    <h1 class="card-header bg-primary text-white">Gestionar Cuentas</h1>
                    <div class="card-body d-flex flex-column">
                        <p class="card-text flex-fill">
                        EN ESTA VISTA PUEDE PITEARSE LAS CUENTAS DE LOS OTROS WEONES
                        </p>
                        <div class="row d-flex align-items-center text-center">
                            <div class="col" >
                                <a href="{{route('admin.gestionarcuentas')}}" class=" btn btn-secondary">
                                    GESTIONAR CUENTAS
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 d-flex mb-3">
                <div class="card">
                    <h1 class="card-header bg-primary text-white">Banear Fotos</h1>
                    <div class="card-body d-flex flex-column">
                        <p class="card-text flex-fill">
                            HAY QUE PITEARSE A LOS FURROS, YA SABE QUE HACER
                        </p>
                        <div class="row d-flex align-items-center text-center">
                            <div class="col" >
                                <a href="{{route('admin.banearfotos')}}" class="btn btn-secondary">
                                    BANEAR FOTOS
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
