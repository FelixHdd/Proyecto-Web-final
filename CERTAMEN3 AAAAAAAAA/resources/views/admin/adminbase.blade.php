@extends('templates.master') 
@section('contenidoPrincipal')

{{-- printea perfiles --}}
<div class="container">
  <div class="row pt-4">
    <div class="col-10">
      <div class="card">
        <div class="card-header bg-primary text-white">
          <h2>Listado de Perfiles</h2>
        </div>
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
              </tr>
            </thead>
            <tbody>
              @foreach($perfiles as $index => $perfil)
                <tr>
                  <td class="align-middle">{{$index+1}}</td>
                  <td class="align-middle">{{$perfil->nombre}}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    {{-- <div class="col-5">
      <div class="card">
        <div class="card-header bg-primary text-white">
          <h2>Agregar Estudiante</h2>
        </div>
        <div class="card-body">
          <form method="POST" action="{{route('estudiantes.store')}}">
          @csrf
            <div class="row">
              <div class="col-4">
                <div class="mb-3">
                  <label for="rut" class="form-label">Rut</label>
                    <input type="text" class="form-control" id="rut" name="rut" placeholder="xxxxxxxx-x">
                </div>
              </div>
              <div class="col-8">
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="ejemplo@gmail.com">
                </div>
              </div>
            </div>
                  
            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control"  id="nombre" name="nombre" >
                </div>
              </div>
              <div class="col">
                <div class="mb-3">
                  <label for="apellido" class="form-label">Apellido</label>
                      <input type="text" class="form-control"  id="apellido" name="apellido" >
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                <button class="btn btn-primary mb-3" type="submit">
                Agregar Estudiante
              </button>
                </div>
                <div class="col-6">
                <button class="btn btn-primary" type="reset">
                Cancelar
              </button>
                </div>
              </div>
              
              
            </div>
                
          </form>
        </div>
      </div>
    </div> --}}
    </div>
  </div>
</div>

@endsection