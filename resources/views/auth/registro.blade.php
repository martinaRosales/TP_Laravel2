@extends('layout.layout')

@section('title', 'Registro')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/login.css') }}" />
<!-- <section class="vh-100"> -->
<div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-8 col-lg-6 col-xl-6 offset-xl-1">
            <form id="formularioRegistro" action="/registro" method="POST">
                @csrf
                <div class="divider d-flex align-items-center my-4">
                    <p class="text-center fw-bold mx-3 mb-0">REGISTRO</p>
                </div>
                @include('layout.partials.mensajes')
                <!-- Nombre de Usuario -->
                <div class="form-outline mb-2">
                    <div class="input-feedback" id="usuarioFeedback" for="usuario">&nbsp;</div>
                    <input type="text" class="form-control  form-control-lg" id="usuario" name="usuario" placeholder="Ingrese su nombre de usuario" required>
                    <label for="usuario" class="form-label">Nombre de usuario</label>

                </div>

                <!-- Nombre -->
                <div class="form-outline mb-2">
                    <div class="input-feedback" id="nombreFeedback" for="nombre">&nbsp;</div>
                    <input type="text" class="form-control  form-control-lg" id="nombre" name="nombre" placeholder="Ingrese su nombre" required>
                    <label for="nombre" class="form-label">Nombre</label>

                </div>

                <!-- Apellido -->
                <div class="form-outline mb-2">
                    <div class="input-feedback" id="apellidoFeedback" for="apellid">&nbsp;</div>
                    <input type="text" class="form-control  form-control-lg" id="apellido" name="apellido" placeholder="Ingrese su apellido" required>
                    <label for="apellido" class="form-label">Apellido</label>
                </div>

                <!-- Email -->
                <div class="form-outline mb-2">
                    <div class="input-feedback" id="emailFeedback" for="email">&nbsp;</div>
                    <input type="email" id="email" class="form-control form-control-lg" placeholder="Ingrese un email válido" name="email" required />
                    <label class="form-label" for="email">Dirección email</label>
                </div>

                <!-- Contraseña -->
                <div class="form-outline0 mb-2">
                    <div class="input-feedback" id="contraseniaFeedback" for="contrasenia">&nbsp;</div>
                    <input type="password" id="contrasenia" class="form-control form-control-lg" placeholder="Ingrese contraseña" name="password" required />
                    <label class="form-label" for="contraseña">Contraseña</label>
                </div>

                <!-- Contraseña  -->
                <div class="form-outline0 mb-2">
                    <div class="input-feedback" id="repiteContraseniaFeedback" for="repiteContrasenia">&nbsp;</div>
                    <input type="password" id="repiteContrasenia" class="form-control form-control-lg" placeholder="Ingrese contraseña nuevamente" name="password_confirmacion" onblur="validarCampo('#password_confirmacion')" required />
                    <label class="form-label" for="repiteContraseña">Repita su contraseña</label>
                </div>
                <div class="text-center text-lg-start mt-4 pt-2">
                    <button type="submit" class="btn btn-primary btn-lg boton-submit" id="botonSubmit" style="padding-left: 2.5rem; padding-right: 2.5rem;" disabled>Registrarme</button>
                </div>

            </form>
        </div>
    </div>
</div>
<!-- </section> -->
<script src="js/validarRegistroUsuario.js"></script>
@endsection