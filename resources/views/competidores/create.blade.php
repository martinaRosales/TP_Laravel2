@extends('layout.layout')

@section('title', 'Cargar competidor')

@section('contenido')
 
  <form id="formulario" action="{{ route('competidores.store') }}" method="POST" class="border m-2 p-3 fs-5">
  <h1>Inscribir Competidor</h1>
  @csrf

    <!-- Nombre competidor -->
    <div class="row mb-3">
      <label for="nombre" class="col-sm-4 col-form-label">Nombre</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="nombre" name="nombre" />
      </div>
    </div>

    <!-- Apellido Competidor -->
    <div class="row mb-3">
      <label for="apellido" class="col-sm-4 col-form-label">Apellido</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="apellido" name="apellido" />
      </div>
    </div>

    <!-- DNI  -->
    <div class="row mb-3">
      <label for="du" class="col-sm-4 col-form-label">DU</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="du" name="du" />
      </div>
    </div>

    <!-- Nacimiento -->
    <div class="row mb-3">
      <label for="fecha-nacimiento" class="col-sm-4 col-form-label">Fecha de nacimiento</label>
      <div class="col-sm-8">
        <input type="date" class="form-control" id="fecha-nacimiento" name="fecha-nacimiento" min="1960-01-01" />
      </div>
    </div>

    <!-- Pais -->
    <div class="row mb-3">
      <label for="pais" class="col-sm-4 col-form-label">País de origen</label>
      <div class="col-sm-8">
        <input class="form-control" id="pais" name="pais" />
        <div id="autocomplete-suggestions" class="autocomplete-suggestions"></div>
      </div>
    </div>

    <!-- Email -->
    <div class="row mb-3">
      <label for="email" class="col-sm-4 col-form-label">Email de contacto</label>
      <div class="col-sm-8">
        <input type="email" class="form-control" id="email" name="email" />
      </div>
    </div>

    <!-- Genero -->
    <div class="row mb-3">
      <label for="genero" class="col-sm-4 col-form-label">Género</label>
      <div class="col-sm-8">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="genero" id="femenino" value="Femenino" />
          <label class="form-check-label" for="femenino">
            Femenino
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="genero" id="masculino" value="Masculino" />
          <label class="form-check-label" for="masculino">
            Masculino
          </label>
        </div>
      </div>
    </div>

    <!-- Gal: Primary Key -->
    <div class="row mb-3">
      <label for="gal" class="col-sm-4 col-form-label">GAL</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="gal" name="gal" placeholder="Ej: ABC1234567" />
      </div>
    </div>

    <!-- Graduacion -->
    <div class="row mb-3">
      <label for="graduacion" class="col-sm-4 col-form-label">Graduación</label>
      <div class="col-sm-8">
        <select class="form-select" id="graduacion" name="graduacion">
          <option value="">Seleccione una graduación</option>
          <option value="1ro GUP">1ro GUP</option>
          <option value="2do GUP">2do GUP</option>
          <option value="3ro GUP">3ro GUP</option>
          <option value="4to GUP">4to GUP</option>
          <option value="5to GUP">5to GUP</option>
          <option value="6to GUP">6to GUP</option>
          <option value="7mo GUP">7mo GUP</option>
          <option value="8vo GUP">8vo GUP</option>
          <option value="9no GUP">9no GUP</option>
          <option value="10mo GUP">10mo GUP</option>
          <option value="1er DAN">1er DAN</option>
          <option value="2do DAN">2do DAN</option>
          <option value="3er DAN">3er DAN</option>
          <option value="4to DAN">4to DAN</option>
          <option value="5to DAN">5to DAN</option>
          <option value="6to DAN">6to DAN</option>
          <option value="7mo DAN">7mo DAN</option>
          <option value="8vo DAN">8vo DAN</option>
          <option value="9no DAN">9no DAN</option>
        </select>
      </div>
    </div>

    <!-- Clasificacion en el ranking -->
    <div class="row mb-3">
      <label for="clasificacion" class="col-sm-4 col-form-label">Clasificación general del ranking nacional</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="clasificacion" name="clasificacion" placeholder="Ingrese su posición en el ranking nacional" pattern="^\S+$" required />
      </div>
    </div>
  
   <!-- <button id='enviarBtn' type="submit" class="btn btn-success">Enviar</button> -->
   <div class="row mb-3">
      <div class="col-sm-8">
        <input type="submit" value="Registrar" class="btn btn-success">
      </div>
    </div>
    
</form>
<!-- Mensajes de Error de js-->
<div id="envio" class="alert alert-danger mt-3" style="display:none;" role="alert"></div>

<!-- Mensajes de error de la bd -->
@include('layout.partials.mensajes')
@endsection

<script src="../js/validarForm2.js" type="module"></script>