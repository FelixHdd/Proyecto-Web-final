<div class="row mt-2">
    <div class="col-8">
        <h3>Editar Foto</h3>
    </div>
</div>

{{-- <div class="row">
    <div class="col-8">
        <div class="card">
            <div class="card-header bg-dark text-white">Editar Cuenta {{$cuentas->nombre}}</div>
            <div class="card-body">
                <form method="POST" action="{{route('equipos.update')}}">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" value="{{$cuentas->nombre}}">
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" id="apellido" name="apellido" class="form-control" value="{{$cuentas->apellido}}">
                    </div>
                    <div class="mb-3 d-grid gap-2 d-lg-block">
                        <button class="btn btn-warning" type="reset">Cancelar</button>
                        <button class="btn btn-success" type="submit">Editar Cuenta</button>
                    </div>
                    <div class="mb-3">
                        <form method="POST" action="{{route('administrador.AdminBorrarC')}}">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger">
                                <span class="material-icons">Eliminar</span>
                            </button>
                        </form>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div> --}}
@endsection