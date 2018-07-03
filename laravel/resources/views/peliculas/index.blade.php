@extends('layouts.default')


@section('contenido')

@section('titulo_1', 'Listado de ')
@section('titulo_2', 'peliculas')

    <a href="/peliculas/add" class="btn btn-primary">Nueva!</a>
    <ul>

        @foreach($peliculas as $peli)
            <li>
                <img src="/storage/{{$peli->poster}}" class="img-circle">
                <a href="/peliculas/edit/{{$peli->id}}">{{$peli->title}}</a> ({{$peli->genero->name}})
            </li>
        @endforeach
    </ul>
@endsection