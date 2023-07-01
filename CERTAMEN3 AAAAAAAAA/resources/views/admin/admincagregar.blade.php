@extends('templates.master') 
@section('contenidoPrincipal')

<div class="container">
        <div class="row pt-4">
            <div class="col">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h2>Agregar Usuario</h2>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('admin.admincagregar')}}">
                            @csrf
                            <div class="mb-3">
                                <label for="user" class="form-label">User</label>
                                <input type="text" id="user" name="user" class="form-control" value="{{ old('user') }}">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" id="password" name="password" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input class="form-control" name="nombre" type="text" value="{{ old('nombre') }}" aria-label="readonly input example">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Apellido</label>
                                <input type="text" id="apellido" name="apellido" class="form-control" value="{{ old('apellido') }}">
                            </div>
                            <div class="mb-3">
                                <label for="rol" class="form-label">Rol</label>
                                <select name="rol" id="rol" class="form-control">
                                    @foreach($perfiles as $perfil)
                                    <option value="{{$perfil->id}}">{{$perfil->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-sm btn-danger">
                                <span class="material-icons">Agregar</span>
                            </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection