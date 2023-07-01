@extends('templates.master')
@section('contenidoPrincipal')
<div class="container-flex p-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h2>Eliminar Foto</h2>
            </div>
            <div class="card-body">
                <form action="{{route('profesores.destroy')}}">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <label for="" class="form-label">Artista</label>
                            <input class="form-control" type="text"  value="{{$profesor->nombre}} {{$profesor->apellido}}" aria-label="" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <label for="exampleFormControlTextarea1" class="form-label">Foto</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" readonly>{{$propuestaCom->comentario}}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mt-3"><button class="btn btn-primary" style="float: left;" type="submit">
                            Eliminar Foto
                            </button></div>
                    </div>
                <form>
            <div>
@endSection