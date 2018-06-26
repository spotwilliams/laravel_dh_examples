@extends('layouts.default')


@section('contenido')

    {{$mensaje}}
    <ul>

        @foreach($peliculas as $peli)
            <li>{{$peli->title}}</li>
        @endforeach
    </ul>
@endsection