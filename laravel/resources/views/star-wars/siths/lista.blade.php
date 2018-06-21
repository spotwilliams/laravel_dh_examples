@extends('layouts.default')

@section('contenido')
    <div class="my-auto">
        <h1 class="mb-0">Todos los
            <span class="text-primary">Sith</span>
        </h1>
        <ul>

            @foreach($siths as $sith)
                <li>{{$sith}}</li>
            @endforeach
        </ul>
    </div>
@endsection
