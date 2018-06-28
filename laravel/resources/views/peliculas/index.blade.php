@extends('layouts.default')


@section('contenido')

@section('titulo_1', 'Listado de ')
@section('titulo_2', 'peliculas')

    {{$mensaje}}
    <ul>

        @foreach($peliculas as $peli)
            <li>{{$peli->title}}</li>
        @endforeach
    </ul>
@endsection