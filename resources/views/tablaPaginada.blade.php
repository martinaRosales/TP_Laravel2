@extends('layout.layout')

@section('title')
    Tabla paginada
@endsection

@section('contenido')
<div class="filtros-tabla col-lg-3 mb-3">
            <!-- Filtro de busqueda para la tabla -->
            <div class="col-sm-12">
                <select id="filtro-select" class="form-select" aria-label="Default select example">
                    <option selected value="default">Buscar según</option>
                    <option value="nombre">Nombre</option>
                    <option value="apellido">Apellido</option>
                    <option value="pais">País</option>
                </select>
            </div>
            <div class="col-sm-6">
                <input type="text" class="form-control ms-2" id="filtro-busqueda" name="filtro-busqueda" />
            </div>
            <div class="col-sm-6">
                <button type="submit" class="btn ms-2" id="boton-select">Buscar</button>
            </div>

        </div>
<div class="table-responsive">
            <table class="table table-hover" id="tabla-competidores">
                <thead>
                    <tr class="table-header">
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Género</th>
                        <th>País</th>
                        <th>Graduación</th>
                        <th>Clasificación</th>
                        <th>GAL</th>
                    </tr>
                </thead>
                <tbody id="table-body">

                </tbody>
            </table>
        </div>
@endsection
