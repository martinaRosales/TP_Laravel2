@extends('layout.layout')

@section('title')
Video
@endsection

@section('contenido')
<div class="row justify-content-center">
    <h3 class="text-center">Video</h3>
    <div class="d-flex justify-content-center my-2">
        <!-- Visible solo en pantallas mobile -->
        <a type="button" class="btn btn-warning d-flex justify-content-center d-sm-block d-md-none" href="https://www.youtube.com/watch?v=IBtz0mmUpc4" target="_blank">Ver aquí</a>
        <!-- Visible solo en pantallas md/lg -->
        <iframe width="560" height="315" src="https://www.youtube.com/embed/IBtz0mmUpc4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="d-none d-md-block"></iframe>
    </div>
</div>
@endsection