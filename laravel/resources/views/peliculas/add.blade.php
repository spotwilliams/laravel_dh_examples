@extends('layouts.default')

@section('titulo_1', 'Agregar una')
@section('titulo_2', 'pelicula')

@section('contenido')


    @include('estaticos.mensajes')

    <form method="post" action="/peliculas/add" class="form-horizontal">
        {{csrf_field()}}


        <div class="form-group row">
            <label class="col-md-4">Nombre de la peli</label>
            <input class="col-md-8 form-control" value="{{old('title')}}" name="title">
        </div>

        <div class="form-group row">
            <label class="col-md-4">Premios</label>
            <input class="col-md-8 form-control" value="{{old('awards')}}" name="awards">
        </div>

        <div class="form-group row">
            <label class="col-md-4">Rating</label>
            <input class="col-md-8 form-control" value="{{old('rating')}}" name="rating">
        </div>

        <div class="form-group row">
            <label class="col-md-4">Fecha de lanzamiento</label>
            <input class="col-md-8 form-control" value="{{old('release_date')}}" name="release_date" type="date">
        </div>

        <div class="form-group row">
            <button type="submit" class="btn btn-primary">Guardar!</button>
        </div>
    </form>

@endsection