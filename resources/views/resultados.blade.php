@extends('layout.layout')

@section('title')
Resultados
@endsection

@section('contenido')

<section class="carrusel">
    <div class="my-5">
        <div id="carouselExampleControls" class="carousel slide w-100 h-100" data-bs-ride="carousel">
            <div class="carousel-inner" id="contenedorCarrusel">
                
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-success" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-success" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
<section class="ganador">

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-8 col-12">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-12 col-lg-4">
                            <img src="https://www.clker.com/cliparts/T/d/j/M/D/A/silueta-negra-hi.png" class="img-fluid " alt="card-horizontal-image">
                        </div>
                        <div class="col-12 col-lg-8">
                            <div class="float-end">
                                <i class="bi bi-1-circle fs-4 mx-3 text-success"> Puesto</i>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title text-center">Facundo</h3>
                                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum iusto quod veniam nulla. Deserunt natus ex, cupiditate sunt dolorem molestiae expedita iste, minus accusamus eligendi repudiandae rem aut consequatur dolor?</p>
                                <p class="card-text"><small class="text-muted"> Es un proceso lento, pero abandonar no lo acelerará</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr class="m-5">
<section class="mx-5">
    <div class="container">
        <div class="row justify-content-center align-items-center">

            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-12 col-lg-4">
                            <img src="https://www.clker.com/cliparts/T/d/j/M/D/A/silueta-negra-hi.png" class="img-fluid w-100" alt="card-horizontal-image">
                        </div>
                        <div class="col-12 col-lg-8">
                            <div class="float-end">
                                <i class="bi bi-2-circle fs-4 mx-2 text-info"> Puesto</i>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title text-center">Antonella</h4>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-6 col-12 mt-md-0 mt-5">
                <div class="card">
                    <div class="row g-0 flex-wrap">
                        <div class="col-12 col-lg-4">
                            <img src="https://www.clker.com/cliparts/T/d/j/M/D/A/silueta-negra-hi.png" class="img-fluid w-100" alt="card-horizontal-image">
                        </div>
                        <div class="col-12 col-lg-8">
                            <div class="float-end">
                                <i class="bi bi-3-circle fs-4 mx-2 text-warning"> Puesto</i>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title text-center">Carlos</h4>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="tablaResultado mt-5">
    <div class="text-center">
        <button type="button" class="btn btn-outline-dark w-75" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Ver Resultados
        </button>
    </div>
</section>

<section>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="container-fluid bg-white">
                <div class="text-end p-3">
                    <i class="bi bi-x-lg"></i>
                </div>
                <div class="p-3">

                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">Puesto</th>
                                <th scope="col">Pais</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Calificacion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td> Puesto</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{ asset('js/carrusel.js') }}" type="module"></script>

@endsection