@extends('layouts.default')

@section('titulo_1', 'Listado de ')
@section('titulo_2', 'generos')


@section('contenido')

    <ul class="listado-generos">

        @foreach($generos as $genero)

            <li><label>{{$genero->name}}</label>

                <ul class="listado-peliculas">

                    @foreach($genero->peliculas as $pelicula)
                        <li>
                            {{$pelicula->title}}

                            <ul class="listado-actores">

                                @foreach($pelicula->actores as $actor)
                                    <li>{{$actor->first_name}}, {{$actor->last_name}}
                                        <p> Peliculas en las que trabajo
                                            @foreach($actor->peliculas as $actorPelicula)
                                                {{$actorPelicula->title}},
                                            @endforeach
                                        </p>
                                    </li>
                                @endforeach

                            </ul>

                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>

@endsection