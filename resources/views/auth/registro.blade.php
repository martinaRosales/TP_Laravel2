@extends('layout.layout')

@section('title', 'Registro')

@section('contenido')

<link rel="stylesheet" href="{{ asset('css/login.css') }}" />

<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form class="needs-validation">
                    @csrf
                    <div class="divider d-flex align-items-center my-4">
                        <p class="text-center fw-bold mx-3 mb-0">REGISTRO</p>
                    </div>

                    <!-- Nombre -->
                    <div class="form-outline mb-4">
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" required>
                        <label for="nombre" class="form-label">Nombre</label>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <!-- Apellido -->
                    <div class="form-outline mb-4">
                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese su apellido" required>
                        <label for="apellido" class="form-label">Apellido</label>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <!-- Teléfono -->
                    <div class=" form-outline mb-4">
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="numeroTelefono">+</span>
                            <input type="text" class="form-control" id="numeroTelefono" aria-describedby="inputGroupPrepend" name="numeroTelefono" placeholder="Ingrese su número de teléfono" required>
                        </div>
                        <label for="validationCustomUsername" class="form-label">Número de teléfono</label>
                    </div>
                    <!-- Email -->
                    <div class="form-outline mb-4">
                        <input type="email" id="email" class="form-control form-control-lg" placeholder="Ingrese un email válido" name="email" required />
                        <label class="form-label" for="email">Dirección email</label>
                    </div>

                    <!-- Contraseña -->
                    <div class="form-outline0 mb-3">
                        <input type="password" id="contraseña" class="form-control form-control-lg" placeholder="Ingrese contraseña" name="contraseña" required />
                        <label class="form-label" for="contraseña">Contraseña</label>
                    </div>

                    <!-- Contraseña  -->
                    <div class="form-outline0 mb-3">
                        <input type="password" id="repiteContraseña" class="form-control form-control-lg" placeholder="Ingrese contraseña nuevamente" required />
                        <label class="form-label" for="repiteContraseña">Repita su contraseña</label>
                    </div>

                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Aceptar términos y condiciones
                            </label>
                            <div class="invalid-feedback">
                                Debe aceptar para finalizar el registro
                            </div>
                        </div>
                    </div>
                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Registrarme</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
@endsection