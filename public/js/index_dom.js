// import {Competidor} from './Competidor.js';
// import {competidores} from './competidores.js';
// import { verCompetidor, cargarCompetidores } from './competidores.js';
// import {validation} from './validation.js';
// import { INPUT_VALIDADOS } from './script.js';
// import { inputs } from './script.js';
// import {errores} from "./errores.js";
// import { cargarTabla } from './cargarTabla.js';
// import {mostrarPais} from './selectPais.js';
import './darkMode.js'
import './tablaPaginada.js';
import './pagination.js'
import './validarForm2.js'
import './menu.js'
import './timer2.js'

function visualizarComp() {
  let genero = '';
  if (inputs[0].masculino.checked == 1) {
    genero = 'Masculino';
  } else if (inputs[0].femenino.checked == 1) {
    genero = 'Femenino';
  }
  const dataComp = new Competidor(
    inputs[0].nombre.value,
    inputs[0].apellido.value,
    inputs[0].dni.value,
    inputs[0].gal.value,
    inputs[0].fchNac.value,
    inputs[0].nacionalidad.value,
    inputs[0].graduacion.value,
    inputs[0].ranking.value,
    inputs[0].email.value,
    genero);
  return dataComp;
}


/* Nos conectamos con el servidor para guardar competidor con fetch */
const avisoForm = document.querySelector('#aviso')
const btn = document.getElementById("enviar");
btn.addEventListener( "click", function (e) {
  e.preventDefault();
  // console.log(formValidado());
  if (!formValidado()) {
    avisoForm.classList.remove("alert-success");
    avisoForm.classList.add("alert-danger");
    avisoForm.innerHTML = errores[0].formNoOk;
  } else {
    fetch( './acciones/competidor/alta.php', {
      method: 'POST',
      body: new FormData(form)
    })
      .then( res => res.json() )
      .then( json => {
        if (json == true) {
          avisoForm.classList.remove("alert-danger");
          avisoForm.classList.add("alert-success");
          avisoForm.innerHTML = errores[0].formOk;
          let tabla = document.getElementById('contenidoComps')
          cargarTabla( 5, null, tabla );
          form.reset();
        }
      });
  }
});

// Revisamos que todos los inputs del formularios estan bien, si es asi retornamos true. Caso contrario False.
function formValidado() {
  let todoOk = true;
  for (let item in INPUT_VALIDADOS) {
    if (!INPUT_VALIDADOS[item]) {
      todoOk = false;
      break;
    }
  }
  return todoOk;
}



/* TIMER */
const segundos = document.getElementById('segundos');
const inicia = document.getElementById('inicia');
const termina = document.getElementById('termina');
const final = document.getElementById('final');
const res = document.getElementById('resultado');
const timerInicial = 90;
const overtime = {
  1: document.getElementById('on-time'),
  2: document.getElementById('over-time')
};
let overtimeInterval = '';

document.addEventListener( 'DOMContentLoaded', () => {
  // Click 'Inicia'
  inicia.addEventListener( 'click', (e) => {
    e.preventDefault();
    segundos.innerHTML = timerInicial;
    overtime[1].classList.remove('d-none');
    overtime[2].classList.add('d-none');
    final.classList.remove('bg-success');
    final.classList.remove('bg-danger');
    final.classList.remove('bg-warning');
    final.innerHTML = '';
    termina.disabled = false;
    segundos.style.color = 'black';
    comenzar();
  });
  // Click 'Termina'
  termina.addEventListener( 'click', (e) => {
    e.preventDefault();
    inicia.classList.remove('disabled');
    termina.classList.add('disabled');
    clearInterval(overtimeInterval);
    let segs = segundos.innerHTML;
    segs = Number(timerInicial - 0.1 - segs).toFixed(1);
    final.innerHTML = segs;
    if (final < timerInicial) {
      final.classList.add('bg-success');
    } else {
      final.classList.add('bg-danger');
    }
    res.classList.remove('d-none');
  })
})

const comenzar = () => {
  inicia.classList.add('disabled');
  inicia.innerHTML = 'Reiniciar';
  termina.classList.remove('disabled');
  res.classList.add('d-none');
  overtimeInterval = setInterval(() => {
    let value = segundos.innerHTML;
    value = Number(value).toFixed(1);
    value -= 0.1;
    value = Number(value).toFixed(1);
    if (value > 0) {
      segundos.style.color = 'green';
      segundos.innerHTML = value;
      overtime[1].classList.remove('d-none');
    } else {
      segundos.style.color = 'red';
      segundos.innerHTML = value;
      overtime[1].classList.add('d-none');
      overtime[2].classList.remove('d-none');
    }
  }, 100);
}


/* CARGAR COMP */
window.addEventListener( "load", function () {
  let tabla = this.document.getElementById( "contenidoComps" );
  cargarTabla( 5, null, tabla );
  let btnPag = this.document.querySelectorAll( '.pag' );
  btnPag.forEach( btn => {
    btn.addEventListener( 'click', function () {
      // console.log( this.getAttribute('name') );
      let name = this.getAttribute( 'name' );
      let limit = document.getElementById( 'limit' ).value;
      if( name === "sig" ){
        let tr = tabla.querySelectorAll( 'tr' );
        let ultimaTupla = tr[tr.length - 1].children[0].innerHTML;
        cargarTabla( limit, ultimaTupla, tabla )
      } else {
        let tr = tabla.querySelectorAll( 'tr' );
        let primerTupla = tr[0].children[0].innerHTML;
        let x = primerTupla - ( parseInt(limit) + 1 );
        cargarTabla( limit, x, tabla )
      }
    })
  });
});

document.getElementById( 'limit' ).addEventListener( 'change', function () {
  let tabla = document.getElementById('contenidoComps');
  let limit = (this.value !== '0') ? this.value : null;
  // console.log( limit );
  cargarTabla( limit, null, tabla );
})


/* SELECT PAIS */
const inputPais = document.getElementById( "nacionalidad" );

inputPais.addEventListener( "keyup", (e) => {
  mostrarPais(e.target.value);
});

inputPais.addEventListener( "blur", (e) => {
  document.querySelector( ".toast" ).classList.remove( "show" );
  document.querySelector( ".toast" ).children[0].innerHTML = "";
});

inputPais.addEventListener( "change", (e) => {
  let xml = new XMLHttpRequest();
  xml.open(
    "GET",
    `./acciones/pais/verificarPais.php?paisnombre=${e.target.value}`
  );
  xml.onload = () => {
    if( xml.readyState === 4 && xml.status === 200 ){
      let resp = JSON.parse( xml.responseText );
      if( resp !== null ){
        e.target.classList.remove("error");
        e.target.classList.add("correcto");
      } else {
        if( e.target.value.length > 0 ){
          e.target.classList.remove( "correcto" );
          e.target.classList.add( "error" );
        } else {
          e.target.classList.remove( "error" );
          e.target.classList.remove( "correcto" );
        }
      }
    }
  };
  xml.send();
});


/* INPUT DE FILTRADO NOMBRE, PAIS Y APELLIDO */
// jQuery
$("#inputfilter input").on("keyup", function () {
  const datos = $("#contenidoComps").find("tr");
  var letra = $(this).val();
  //console.log(datos);
  var cantLetra = letra.length;
  var option = $("#selectFilter");
  var indiceLetra = 0;

  $.each(datos, function (i, tupla) {
    var columna = tupla.children[option.val()].innerHTML;
    var matricula = columna.substring(indiceLetra, cantLetra);
    //console.log(matricula);

    if (
      letra.length <= columna.length &&
      letra.length != 0 &&
      columna.length != 0
    ) {
      if (letra.toLowerCase() === matricula.toLowerCase()) {
        tupla.classList.remove("d-none");
      } else {
        tupla.classList.add("d-none");
      }
    }
  });

  if (cantLetra == 0) {
    var escondidos = document.getElementById('contenidoComps').children
    //console.log(escondidos);
    $.each(escondidos, function (i, element) {
      element.classList.remove("d-none");
    });
  }
});

$("#selectFilter").on("change", function (e) {
  //$("#inputfilter input").val("");
  var escondidos = document.getElementById('contenidoComps').children
  $.each(escondidos, function (i, element) {
    element.classList.remove("d-none");
  });
});




