@extends('layouts.default')

@section('titulo_1', 'Listado de ')
@section('titulo_2', 'series')

@section('contenido')

    <ol>

    @foreach($series as $serie)
        <li>{{$serie->title}}</li>
    @endforeach
    </ol>
@endsection