@extends('layouts.default')

@section('titulo_1', 'Listado de')
@section('titulo_2', 'actores')



@section('contenido')
    <label>Actores con Rating mayor a 7 (mas carolos)</label>
    <ul class="listado-actores-caros">
        @foreach($actores->get('caro') as $actor)
            <li>{{$actor->first_name}}, {{$actor->last_name}}</li>
        @endforeach
    </ul>

    <label>Actores con Rating menor a 7 (mas baratos)</label>
    <ul class="listado-actores-baratos">
        @foreach($actores->get('barato') as $actor)
            <li>{{$actor->first_name}}, {{$actor->last_name}}</li>
        @endforeach
    </ul>
    {{--<nav aria-label="Page navigation example">--}}
{{----}}
        {{--{{$actores->links()}}--}}
    {{--</nav>--}}
@endsection