@extends('layout.layout')

@section('title')
Home
@endsection

@section('contenido')
<!-- Fila del video presentacion -->
<div class="row justify-content-center mt-5">
  <div class="d-flex justify-content-center my-2">
    <!-- Visible solo en pantallas md/lg -->
    <iframe width="100%" height="315" src="https://www.youtube.com/embed/IBtz0mmUpc4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="d-none d-md-block"></iframe>
  </div>
</div>
<!-- Fila del secciones Invitacion - Flyer -->
<div class="row mt-5 justify-content-evenly">
  <!-- Columna contenedora de la seccion Invitacion-->
  <div class="col-lg-5 col-12 p-md-5 p-3 m-3 m-lg-0 border border-solid rounded border-warning">
    <div>
      <h4>Invitacion</h4>
      <!-- div que contiene el texto de la seccion-->
      <div class="mt-3">
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe accusantium hic dolore. Aperiam animi, deleniti soluta autem recusandae quaerat obcaecati consectetur laborum accusantium accusamus aliquid beatae voluptates, consequuntur facilis dolores. Quia accusamus illo, fuga hic veritatis molestias dolores minima consectetur maiores nesciunt debitis illum voluptatibus nam repellendus corrupti totam omnis, quis dolorum nemo. Possimus neque sit dolores ex iste voluptas nobis perspiciatis non dicta aliquid blanditiis quas eveniet ipsum, necessitatibus sed laboriosam voluptatum. Quos pariatur dignissimos possimus id maiores sequi ab, suscipit ratione voluptates ullam sed animi itaque expedita cumque quisquam ipsum. Quisquam atque voluptatibus repellat non dolorem nobis ex!
        </p>
      </div>
      <!-- Boton que redirige al formulario de carga competidor -->
      <div class="w-100 text-end">
        <button class="btn btn-dark"><a class="text-white" href="./cargarComp"> Inscripcion </a></button>
      </div>
    </div>
  </div>
  <!-- Columna contenedora de la seccion Flyer--> <!-- La imagen esta aplicada desde el css como background -->
  <div class="col-lg-5 col-12 p-md-5 p-3 m-3 m-lg-0 border border-solid rounded border-success" style="min-height:250px;background-position: center center;background-image:url('https://taekwondowt.org.ar/images/portadas/portada_torneo_nacional_22.png');background-size:cover; background-repeat: no-repeat;">
    <div class="">
      <h5>Flyer</h5>
      <!-- Contenedor vacio -->
      <div class="mt-3">
        <!-- <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo quos facilis nisi ullam? Deserunt neque corporis nostrum suscipit dolorem libero accusantium nemo. Reprehenderit optio, voluptates ipsum veniam corrupti accusantium rerum omnis quod velit dolore distinctio ex debitis accusamus laborum delectus?
        </p> -->
      </div>
    </div>
  </div>
</div>
<!-- Fila del secciones Base y Condiciones  -->
<div class=" mt-3 mt-lg-5">
  <div class="border border-solid rounded p-md-5 p-3 border-info">
    <div class=" text-center">
      <h5>Bases y Condiciones</h5>
    </div>
    <!-- Son botones que activan un modal con los datos referentes -->
    <div class="row mt-5 w-100 d-flex flex-wrap justify-content-evenly">
      <div class="col-lg-3 text-center col-md-6 col-12">
        <button type="button" class="btn btn-outline-dark m-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
          REQUISITOS DE PARTICIPACIÓN
        </button>
      </div>
      <div class="col-lg-3 text-center col-md-6 col-12">
        <button type="button" class="btn btn-outline-dark m-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
          REGLAMENTO DE COMPETENCIA
        </button>
      </div>
      <div class="col-lg-3 text-center col-md-6 col-12">
        <button type="button" class="btn btn-outline-dark m-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
          INSCRIPCIONES Y FECHAS LÍMITES
        </button>
      </div>
      <div class="col-lg-3 text-center col-md-6 col-12">
        <button type="button" class="btn btn-outline-dark m-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
          EQUIPAMIENTO DEPORTIVO
        </button>
      </div>
      <div class="col-lg-3 text-center col-md-6 col-12">
        <button type="button" class="btn btn-outline-dark m-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
          EQUIPO DE PROTECCIÓN
        </button>
      </div>
      <div class="col-lg-3 text-center col-md-6 col-12">
        <button type="button" class="btn btn-outline-dark m-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
          CATEGORÍAS POOMSAE PROMOCIONAL
        </button>
      </div>
      <div class="col-lg-3 text-center col-md-6 col-12">
        <button type="button" class="btn btn-outline-dark m-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
          CATEGORÍAS POOMSAE ELITE
        </button>
      </div>
      <div class="col-lg-3 text-center col-md-6 col-12">
        <button type="button" class="btn btn-outline-dark m-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
          CRONOGRAMA TENTATIVO
        </button>
      </div>
    </div>
  </div>
</div>
<div class="row justify-content-center mt-5">
  <div class="d-flex justify-content-center my-2">
    <!-- Visible solo en pantallas mobile -->
    <a type="button" class="btn btn-warning d-flex justify-content-center d-sm-block d-md-none" href="https://www.youtube.com/watch?v=IBtz0mmUpc4" target="_blank">Ver Presentación</a>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea facilis beatae nisi, at quae atque laboriosam a adipisci minima! Neque recusandae non praesentium, quasi nam exercitationem explicabo incidunt nisi voluptas, consequuntur, quia ipsum eligendi magnam eius ad quos expedita? Eligendi odio eos aperiam et perferendis maiores voluptatem veniam quo, temporibus soluta voluptate aliquam corrupti vero! Facilis provident consectetur dolorum? Cupiditate, sapiente quibusdam tempore esse possimus neque. Inventore, earum placeat. Ex suscipit earum iusto quod natus delectus! Aut iusto, temporibus magnam maiores voluptas adipisci modi totam nulla asperiores pariatur voluptates ipsum expedita quibusdam minus quasi unde porro reprehenderit tempora consequatur in voluptatem sapiente tenetur dolorem? Recusandae earum fugit culpa quam repudiandae? Adipisci aliquid aspernatur labore, ad omnis doloribus ipsum nesciunt quod ratione dolorem dignissimos! Modi delectus magnam natus earum eos cum, soluta qui magni omnis repellat aperiam ratione beatae enim. Eius officia quis praesentium eaque consectetur, amet rem facere minima deleniti!
      </div>
    </div>
  </div>
</div>


@endsection