@extends('layout.layout')

@section('title')
Home
@endsection

@section('contenido')
<div class="element-background">
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/carrusel 1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/carrusel 2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/carrusel 3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

<br>
<hr>
<!-- info -->
<h2 class=" fs-3 p-2"> Teoria Trabajo Practico </h2>
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        <strong>Paginas</strong>
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <ul style="list-style: none;">
          <li><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="/cargarComp">Cargar Competidor</a></li>
          <li><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="/timer">Timer</a></li>
          <li><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="/video">Video</a></li>
          <li><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="/tablaPaginada">Tabla Paginada</a></li>
          <li><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="/bancoImagenes">Banco de Imagenes</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <strong>Ejercicio 1.1</strong>
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Patrón de arquitectura Model-View-Controller</strong> <br>
        El patrón MVC se utiliza para la separación de preocupaciones (separation of concerns), o SoC para abreviar.
        El patrón MVC te ayuda a dividir el código frontend y backend en componentes separados. De esta manera, es mucho más fácil administrar y hacer cambios a cualquiera de los lados sin que interfieran entre sí.
        Pero esto es más fácil decirlo que hacerlo, especialmente cuando varios desarrolladores necesitan actualizar, modificar o depurar una aplicación completada simultáneamente.
        <br> <strong>
          Modelo </strong><br>
        En esta sección integramos los elementos necesarios de la Base de Datos , por ejemplo si tenemos una tabla postres la debes llamar en el modelo junto con sus columnas precio, stock, nombre, imagen, etc. En el Modelo crear una clase que será utilizada en el controlador.
        <br> <strong>
          Vista </strong><br>
        Tal como su nombre lo indica es la parte en donde mostramos o renderizamos el contenido de la Base de Datos, por ejemplo si abres en el Navegador para ver los postres que fueron procesados por métodos en el Controlador y enviados a la Vista para que el usuario final o el público final los puedan ver.
        <br> <strong>
          Controlador </strong> <br>
        Son un conjunto de funciones o métodos que realizan una determinada acción en la Vista, por ejemplo imprimir solo 3 o todos los postres que hay en la Base de Datos, también puedes colocar un botón en la Vista que diga eliminar o editar y crear un método en el controlador para eliminar o editar un postre de la Base de Datos.
        Puedes crear muchas funcionalidades en el Controlador es la parte en donde hay más dinámica de un proyecto.
      </div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        <strong>Ejercicio 1.2</strong>
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong> Creación del patrón, bajo qué paradigma, quién y cuándo ocurre este hecho</strong> <br>
        Este patrón tiene varios años en el medio y fue utilizado por primera vez con el lenguaje de Programación Smalltalk por Trygve Reenskaug en los años de 1970 en adelante, luego en el año de 1988 MVC pasa a ser un concepto general para los ingenieros de software. Se propuso como una forma de desarrollar el GUI (interfaces de usuarios) de aplicaciones de escritorio.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCuatro" aria-expanded="false" aria-controls="collapseCuatro">
        <strong>Ejercicio 1.3</strong>
      </button>
    </h2>
    <div id="collapseCuatro" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong> Model-View-Presenter (MVP):</strong> El patrón MVP es similar al patrón MVC, pero con una mayor separación de las responsabilidades entre la vista y el controlador. En el patrón MVP, el presentador actúa como un intermediario entre la vista y el modelo, manejando la lógica de presentación y las interacciones de la vista, mientras que la vista solo se encarga de la presentación. Esto hace que la vista sea más fácil de probar y mantener, ya que no tiene lógica de negocio. El modelo es responsable de la lógica de negocio y los datos. <br>
        <strong>Hierarchical Model-View-Controller (HMVC):</strong> El patrón HMVC se utiliza para aplicaciones web complejas en las que las vistas y controladores pueden tener estructuras jerárquicas. En el patrón HMVC, los controladores se dividen en niveles jerárquicos, donde cada nivel se encarga de un conjunto específico de vistas y controladores. El modelo se encarga de la lógica de negocio y los datos. <br>
        <strong>Model-View-ViewModel (MVVM):</strong> El patrón MVVM se utiliza comúnmente en el desarrollo de aplicaciones de interfaz de usuario (UI) de Windows y permite la separación de la lógica de la vista y el modelo utilizando un modelo de vista. El modelo de vista actúa como un intermediario entre la vista y el modelo y se encarga de convertir los datos del modelo en una forma que pueda ser presentada por la vista. El modelo es responsable de la lógica de negocio y los datos. <br>
        <strong>Model-View-Adapter (MVA):</strong> El patrón MVA es similar al patrón MVP, pero en lugar de tener un presentador, la vista se comunica directamente con el modelo utilizando un adaptador. El adaptador se encarga de traducir las solicitudes de la vista en acciones para el modelo. El modelo es responsable de la lógica de negocio y los datos.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCinco" aria-expanded="false" aria-controls="collapseCinco">
        <strong>Ejercicio 2</strong>
      </button>
    </h2>
    <div id="collapseCinco" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong> Laravel</strong> <br>
        Laravel es un framework PHP gratis y de código abierto que brinda un conjunto de herramientas y recursos para crear aplicaciones modernas. Posee un ecosistema integral que combina funciones integradas y una variedad de paquetes y extensiones compatibles.
        “Laravel" es un marco de aplicación web con una sintaxis expresiva y elegante. Ya sentamos las bases, liberándome para crear sin preocuparte por las cosas pequeñas”.
        <br>
        <strong>a. ¿Qué puede decir de estas características de Laravel?</strong> <br>
        i. Open Source: Se trata de un framework código abierto, creado dentro de la comunidad open source y que cualquiera puede tener acceso a su código. Sea para utilizarlo, modificarlo y distribuirlo
        <br>
        ii. Aplicaciones Web Full-stack: Laravel fue diseñado casi exclusivamente para facilitar las tareas habituales en proyectos de desarrollo web. Algunas de ellas son el enrutamiento, renderizar la interfaz a través de plantillas Blade o una tecnología híbrida de aplicación de una sola página como Inertia
        <br>
        iii. “progressive”: Con eso se quiere decir que Laravel crece contigo, ayudando con herramientas de todo tipo a las personas que quieren aprender este framework.
        <br>
        <strong>b. ¿Cuál es la herramienta de Laravel que resuelve el mapeo objeto relacional?</strong> <br>
        El ORM “Eloquent” de Laravel proporciona la mejor abstracción de bases de datos. Consulta y actualiza los datos sin esfuerzo. Eloquent se combina perfectamente con MySQL, Postgres, SQLite y SQL Server.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeis" aria-expanded="false" aria-controls="collapseSeis">
        <strong>Ejercicio 4</strong>
      </button>
    </h2>
    <div id="collapseSeis" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>¿Qué es Composer?</strong>
        Composer es un manejador de paquetes para PHP que proporciona un estándar para administrar, descargar e instalar dependencias y librerías. Composer es la solución ideal cuando trabajamos en proyectos complejos que dependen de múltiples fuentes de instalación. En lugar de tener que descargar cada dependencia de forma manual, Composer hace esto de forma automática por nosotros.
        <br>
        <strong>¿Por qué Laravel necesita Composer?</strong><br>
        Laravel necesita Composer para gestionar de manera eficiente las dependencias de tu proyecto, facilitar la autocarga de clases y mantener actualizadas las bibliotecas y paquetes de terceros.
        <br>
        <strong>¿Para qué usaste Composer durante la instalación?</strong> <br>
        Al crear un nuevo proyecto laravel o instalarlo, Composer empezará a descargar las librerías necesarias para nuestro proyecto, esto ayuda a ahorrar tiempo al hacer las descargar por nosotros mismos
        <br>
        <strong>Lista los comandos que utilizaste para instalar y describirlos brevemente.</strong> <br>
        -composer create-project laravel/laravel nombreProyecto <br>
        Estos comandos generan una carpeta nombreProyecto que tendrá la instalación básica del framework.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSiete" aria-expanded="false" aria-controls="collapseSiete">
        <strong>Ejercicio 5.1</strong>
      </button>
    </h2>
    <div id="collapseSiete" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Qué son las rutas en Laravel</strong> <br>
        Laravel utiliza un sistema de rutas que se encargan de manejar el flujo de solicitudes y respuestas, desde y hacia el cliente (como hacia el navegador, por ejemplo). Definen la dirección URL y el método por el cual se puede ingresar a dicha ruta (GET, POST, etc.)
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOcho" aria-expanded="false" aria-controls="collapseOcho">
        <strong>Ejercicio 5.2</strong>
      </button>
    </h2>
    <div id="collapseOcho" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Directorios donde se definen las rutas en laravel</strong> <br>
        Laravel utiliza un sistema de rutas que se encargan de manejar el flujo de solicitudes y respuestas, desde y hacia el cliente (como hacia el navegador, por ejemplo). Definen la dirección URL y el método por el cual se puede ingresar a dicha ruta (GET, POST, etc.)
        <br>
        routes/api.php: En este archivo se definen todas las rutas de las APIs que puede llegar a tener nuestra aplicación. <br>
        routes/channels.php: Aquí definimos los canales de transmisión de eventos. Por ejemplo, cuando realizamos notificaciones en tiempo real. <br>
        routes/console.php: En el archivo de rutas console.php definimos comandos de consola que pueden interactuar con el usuario u otro sistema. <br>
        routes/web.php: En este archivo de rutas es donde definimos todas las rutas de nuestra aplicación web que pueden ser ingresadas por la barra de direcciones del navegador.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNueve" aria-expanded="false" aria-controls="collapseOcho">
        <strong>Ejercicio 5.3</strong>
      </button>
    </h2>
    <div id="collapseNueve" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <ul style="list-style: none;">
          <li><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="/materia">Vista JSON</a></li>
          <li>
            <ul>
              <li><strong>Ejercicio 5.4 </strong></li>
              <li>
                <p>
                  Vemos que nos retorna los datos en JSON.
                </p>
              </li>
            </ul>

          </li>
          <li><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="/materia_">Vista Trabajada</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection