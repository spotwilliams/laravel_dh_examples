@extends('layouts.default')

@section('titulo_1', 'Agregar una')
@section('titulo_2', 'pelicula')

@section('contenido')


    @include('estaticos.mensajes')

    <form method="post"
          action="{{route('peliculas.store')}}"
          class="form-horizontal" enctype="multipart/form-data">
        {{csrf_field()}}


        <div class="form-group row">
            <label class="col-md-4">Nombre de la peli</label>
            {{--<input class="col-md-8 form-control"--}}
            {{--                   value="{{ old('title')?old('title') : (isset($pelicula) ? $pelicula->title : '')}}" name="title">--}}
            <input class="col-md-8 form-control"
                   value="{{ old('title')?? ($pelicula->title ?? '') }}" name="title">
        </div>

        <div class="form-group row">
            <label class="col-md-4">Tipo de peli</label>

            <select name="genre_id" class="col-md-8 form-control">
                <option value="-1">Seleccione un pleasee</option>
                @foreach($lista_generos  as $genero)
                    <option value="{{$genero->id}}" {{ old('genre_id') == $genero->id ? 'selected' : (isset($pelicula->genre_id) &&   $pelicula->genre_id === $genero->id? 'selected' : '')}}>{{$genero->name}}</option>
                @endforeach
            </select>
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
            <label class="col-md-4">Poster</label>
            <input class="col-md-8 form-control" type="file" name="poster">
        </div>

        <div class="form-group row">
            <button type="submit" class="btn btn-primary">Guardar!</button>
        </div>
    </form>

@endsection