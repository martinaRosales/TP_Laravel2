@extends('layout.layout')

@section('title', 'Login')

@section('contenido')

<link rel="stylesheet" href="{{ asset('css/login.css') }}" />

<!-- <section class="vh-100"> -->
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="img/pruebinha_login1.jpg" class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                <form action="/login" method="POST">
                    @csrf
                    
                    <div class="divider d-flex align-items-center my-4">
                        <p class="text-center fw-bold mx-3 mb-0">LOGIN</p>
                    </div>
                    @include('layout.partials.mensajes')
                    <!-- Usuario input -->
                    <div class="form-outline mb-4">
                        <input id="form3Example3" class="form-control form-control-lg" placeholder="Ingrese su usuario" name="usuario" />
                        <label class="form-label" for="usuario">Usuario</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <input type="password" id="form3Example4" class="form-control form-control-lg" placeholder="Ingrese su contraseña" name="password" />
                        <label class="form-label" for="form3Example4">Contraseña</label>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Checkbox -->
                        <div class="form-check mb-0">
                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                            <label class="form-check-label" for="form2Example3">
                                Recordarme
                            </label>
                        </div>
                        <div class="links">
                        <a href="#!" class="text-body">Olvidaste tu contraseña?</a>
                        <a href="/registro" class="text-primary">Registrate aquí</a>
                        </div>
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
<!-- </section> -->
@endsection