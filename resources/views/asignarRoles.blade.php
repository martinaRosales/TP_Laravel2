@extends('layout.layout')

@section('title', 'Asignar roles')

@section('contenido')
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<div class="table-responsive">
            <table class="table table-hover" id="tabla-usuarios">
                <thead>
                    <tr class="table-header">
                        <th>Usuario</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>Solicitud de rol</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody id="table-body">

                </tbody>
            </table>
        </div>


<!-- Modal de asignación de roles-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Asignar rol</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" id="rolJuez" class="btn btn-secondary" data-bs-dismiss="modal" value="juez">Juez</button>
        <button type="button" id="rolCompetidor" class="btn btn-primary" data-bs-dismiss="modal" value="competidor">Competidor</button>
      </div>
    </div>
  </div>
</div>

        <script src="js/tablaUsuarios.js"></script>
@endsection