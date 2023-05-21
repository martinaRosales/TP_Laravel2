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
                        <th>Solicitud</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody id="table-body">

                </tbody>
            </table>
        </div>

        <script src="js/tablaUsuarios.js"></script>
@endsection