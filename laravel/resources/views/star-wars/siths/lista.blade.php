@extends('layouts.default')

@section('contenido')
    <ul>

        @foreach($siths as $sith)
            <li>{{$sith}}</li>
        @endforeach
    </ul>
@endsection
