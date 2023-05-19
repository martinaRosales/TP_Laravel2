@extends('layout.layout')

@section('title', 'Timer')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/resultadoEncuentros.css') }}" />

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

<div>
  <div class="divider d-flex align-items-center my-4">
    <p class="text-center fw-bold mx-3 mb-0 fs-2">Resultados</p>
  </div>
  <form>
    <!-- Categoría -->
    <div class="form-outline mb-4">
      <label for="categoria" class="form-label">Categoría</label>
      <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Ingrese la categoría" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    
    <!-- Ganador -->
    <div class="form-outline mb-4">
      <label for="ganador" class="form-label">Ganador</label>
      <input type="text" class="form-control" id="ganador" name="ganador" placeholder="Ingrese al ganador" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <!-- Tiempo que tardaron  y el que se hayan pasado -->
    <div class="form-outline mb-4">
      <label for="tiempo" class="form-label">Tiempo de Competencia</label>
      <input type="text" class="form-control" id="tiempo" name="tiempo" placeholder="Ingrese el tiempo que duro la competencia" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <!-- Tiempo en overtime  -->
    <div class="form-outline mb-4">
      <label for="overtime" class="form-label">Tiempo despues del overtime</label>
      <input type="text" class="form-control" id="overtime" name="overtime" placeholder="Ingrese el tiempo transcurrido en overtime" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="info-competidores">

      <div class="competidor" id="competidorUno">
        <h2>Competidor 1</h2>
        <!-- GAL -->
        <div class="form-outline mb-4">
          <input type="text" class="form-control" id="galCompetidorUno" name="gal" placeholder="Ingrese el GAL" required>
          <label for="galCompetidorUno" class="form-label">GAL</label>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

        <!-- Puntaje -->
        <div class="form-outline mb-4">
          <input type="number" class="form-control" id="puntajeCompetidorUno" name="puntaje" required>
          <label for="puntajeCompetidorUno" class="form-label">Puntaje</label>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

        <!-- Deducciones -->
        <div class="form-outline mb-4">
          <input type="text" class="form-control" id="deduccionesCompetidorUno" name="deducciones" required>
          <label for="deduccionesCompetidorUno" class="form-label">Deducciones</label>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <!-- Infracciones -->
        <div class="form-outline mb-4">
          <input type="text" class="form-control" id="infraccionesCompetidorUno" name="infracciones" required>
          <label for="infraccionesCompetidorUno" class="form-label">Infracciones</label>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

        <!-- Observaciones -->
        <div class="mb-3">
          <label for="observacionesCompetidorUno" class="form-label">Observaciones</label>
          <textarea class="form-control" id="observacionesCompetidorUno" name="observaciones" rows="3"></textarea>
        </div>

      </div>
      <div class="competidor" id="competidorDos">
        <h2>Competidor 2</h2>
        <!-- GAL -->
        <div class="form-outline mb-4">
          <input type="text" class="form-control" id="galCompetidorDos" name="gal" placeholder="Ingrese el GAL" required>
          <label for="galCompetidorDos" class="form-label">GAL</label>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

        <!-- Puntaje -->
        <div class="form-outline mb-4">
          <input type="number" class="form-control" id="puntajeCompetidorDos" name="puntaje" required>
          <label for="puntajeCompetidorDos" class="form-label">Puntaje</label>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

        <!-- Deducciones -->
        <div class="form-outline mb-4">
          <input type="text" class="form-control" id="deduccionesCompetidorUno" name="deducciones" required>
          <label for="deduccionesCompetidorUno" class="form-label">Deducciones</label>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

        <!-- Infracciones -->
        <div class="form-outline mb-4">
          <input type="text" class="form-control" id="infraccionesCompetidorDos" name="infracciones" required>
          <label for="infraccionesCompetidorDos" class="form-label">Infracciones</label>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

        <!-- Observaciones -->
        <div class="mb-3">
          <label for="observacionesCompetidorDos" class="form-label">Observaciones</label>
          <textarea class="form-control" id="observacionesCompetidorDos" name="observaciones" rows="3"></textarea>
        </div>
      </div>

    </div>



</div>
</div>

<div class="text-center text-lg-start mt-4 pt-2">
  <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Guardar</button>
</div>
</form>

</div>
<script src="js/timer2.js"></script>
@endsection