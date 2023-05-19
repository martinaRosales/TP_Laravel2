@extends('layout.layout')

@section('title', 'Timer')

@section('contenido')
<div class="row">
      <div class="timerContainer card col col-sm-10 mx-auto m-4">
        <h5 class="card-header">Cronometro</h5>
        <div class="card-body">   
          <p id="timer" class="ms-3 fs-3"> 90seg </p>
          
          <a id="btnIniciar" href="#" class="btn btn-primary ms-2">Iniciar</a>
          <a id="btnDetener" href="#" class="btn btn-danger disabled">Detener</a>
          <a id="btnReiniciar" href="#" class="btn btn-success">Reiniciar</a>
          <p id="contador" class="ms-2 fs-4"></p>
        </div>
      </div>
</div>
<script src="js/timer2.js"></script>
@endsection