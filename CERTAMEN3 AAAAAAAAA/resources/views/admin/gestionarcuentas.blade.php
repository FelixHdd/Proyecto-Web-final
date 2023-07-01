@extends('templates.master') 
@section('contenidoPrincipal')


<div class="container p-5"> 
        <h1 class="text-center text-white">Gestion de Cuentas</h1>
        <div class="row">
            <div class="col-12 col-md-4 d-flex  mb-3">
                <div class="card">
                    <div class="card-body d-flex flex-column">
                        <p class="card-text flex-fill ">  
                        EN ESTA VISTA PUEDE ACCEDER A LOS PERFILES INGRESADOS
                        </p>
                        <div class="row d-flex align-items-center">
                            <div class="col " >
                                <a href="{{route('admin.admincuenta')}}" class="btn btn-secondary">
                                    LISTAR CUENTAS
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 d-flex  mb-3">
                <div class="card">
                    <div class="card-body d-flex flex-column">
                        <p class="card-text flex-fill">
                        EN ESTA VISTA PUEDE PITEARSE LAS CUENTAS DE LOS OTROS WEONES
                        </p>
                        <div class="row d-flex align-items-center text-center">
                            <div class="col" >
                                <a href="{{route('admin.cagregar')}}" class=" btn btn-secondary">
                                    AGREGAR CUENTAS
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 d-flex mb-3">
                <div class="card">
                    <div class="card-body d-flex flex-column">
                        <p class="card-text flex-fill">
                            HAY QUE PITEARSE A LOS FURROS, YA SABE QUE HACER
                        </p>
                        <div class="row d-flex align-items-center text-center">
                            <div class="col" >
                                <a href="{{route('admin.admincuentaedybr')}}" class="btn btn-secondary">
                                    EDITAR y BORRAR CUENTAS
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
