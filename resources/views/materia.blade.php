@extends('layout.layout')

@section('title','materia y tema')

@section('contenido')

<div class="card text-center">

    <div class="card-body">
        <h4 class="card-title">Materia Y Temas</h4>
        <ul class="card-text">
            @foreach ($materiaYTema as $valor )
            <li>{{$valor}}</li>
            @endforeach
        </ul>
    </div>
</div>


@endsection