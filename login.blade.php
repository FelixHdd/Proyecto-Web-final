<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/scss/colores.scss') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Programacion Orientada a Web</title>
</head>


<body background="images/colors-colorful-abstract-rainbow-background-hd-wallpaper-preview.jpg">
    <div class="container-fluid min-vh-100 d-flex flex-column justify-content-lg-center">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <div class="row bg-white">
                    {{-- formulario --}}
                    <div class="col-12 p-4 bg-dark text-white">
                        <h4>Iniciar Sesión</h4>
                        <p class="text-white mb-2">Ingrese sus datos</p>
                        {{-- mensajes de error --}}
                        {{-- @if ($errors->any())
                        <div class="alert alert-warning">
                            @foreach ($errors->all() as $error)
                            {{ $error }}
                            @endforeach
                        </div>
                        @endif --}}
                        {{-- fin mensajes de error --}}
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{route('cuentas.autentificar')}}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Usuario</label>
                                        <input type="text" id="username" name="username" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Contraseña</label>
                                        <input type="password" id="password" name="password" class="form-control">
                                    </div>
                                    <div class="mb-3 text-end">
                                        <button type="submit" class="btn btn-success">Iniciar Sesión</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</body>
</html>