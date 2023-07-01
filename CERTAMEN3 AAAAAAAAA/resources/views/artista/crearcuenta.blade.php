@extends('templates.master') 
@section('contenidoPrincipal')

<div class="container">
        <div class="row pt-4">
            <div class="col">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h2>Crear Cuenta Artista</h2>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('')}}">
                                @csrf
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input class="form-control" name="nombre" type="text" value="{{ old('nombre') }}" aria-label="readonly input example">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Apellido</label>
                                    <input type="text" id="apellido" name="apellido" class="form-control" value="{{ old('apellido') }}">
                                </div>
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <span class="material-icons">Agregar Artista </span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection