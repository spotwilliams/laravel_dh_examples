@extends('layouts.default')

@section('titulo_1', 'Listado de ')
@section('titulo_2', 'series')

@section('contenido')

    <ol class="lista-series">

        @foreach($series as $serie)
            <li>{{$serie->title}}
                <ul class="lista-temporadas">
                    @foreach( $serie->temporadas as $temporada)
                        <li>T ({{$temporada->number}}): {{$temporada->title}}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ol>
@endsection