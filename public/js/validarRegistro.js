// //Esta es la función de validación de bootstrap, intenté modificarla para usarla pero no salió
// (function () {
//   'use strict'

//   // Fetch all the forms we want to apply custom Bootstrap validation styles to
//   var forms = document.querySelectorAll('.needs-validation')
//   // Loop over them and prevent submission
//   Array.prototype.slice.call(forms)
//     .forEach(function (form) {
//       form.addEventListener('submit', function (event) {
//         //acá cambié !form.checkValidity() por la función de la línea 138
//         if (!formularioValido) {
//           event.preventDefault()
//           event.stopPropagation()
//         }

//         form.classList.add('was-validated')
//       }, false)
//     })
// })()


//PARA RESOLVER:
//1. Que el formulario no se envíe si no son válidos todos los campos (lo estoy intentando manejar con booleanos)
//2. Validar los input de las contraseñas, que estén completos y que sean iguales HECHO
//3. Agregar mensajes breves y descriptivos sobre el error en el campo (si está incompleto o los datos no son válidos)

//acá recupero todos los input del formulario
const formulario = document.querySelectorAll('#formularioRegistro')
const inputUsuario = document.querySelector('#usuario')
const inputNombre = document.querySelector('#nombre')
const inputApellido = document.querySelector('#apellido')
const inputEmail = document.querySelector('#email')
const inputContrasenia = document.querySelector('#contrasenia')
const inputContraseniaConfirmada = document.querySelector('#repiteContrasenia')
const inputFeedback = document.querySelector('.input-feedback')
const botonSubmit = document.querySelector('.boton-submit')
const checkRolCompetidor = document.querySelector('#competidor')
const checkRolJuez = document.querySelector('#juez')


let usuarioValido = false;
let nombreValido = false;
let apellidoValido = false;
let emailValido = false;
let contraseniasValidas = false;
// let formularioValido = false;

//esto está para los console log, no es importante
window.addEventListener('load', function () {
})


//los blur no me los saquen, que son los que hacen que se verifique en seguida si es válido el campo
inputUsuario.addEventListener('blur', function () {
  usuarioValido = validarCampo(inputUsuario)
})

inputNombre.addEventListener('blur', function () {
  campoCompleto = validarCampo(inputNombre)
  if (campoCompleto) {
    nombreValido = validarString(inputNombre)
  }
})

inputApellido.addEventListener('blur', function () {
  campoCompleto = validarCampo(inputApellido)
  if (campoCompleto) {
    apellidoValido = validarString(inputApellido)
  }
})

inputEmail.addEventListener('blur', function () {
  campoCompleto = validarCampo(inputEmail)
  if (campoCompleto) {
    emailValido = validarEmail(inputEmail)
  }
})

inputContrasenia.addEventListener('blur', function () {
  campoCompleto = validarCampo(inputContrasenia)
  if (campoCompleto) {
    if (validarLongitud(inputContrasenia, 'contrasenia')) {
      //esto validarlo cuando se envíe el formulario
      //  contraseniasIguales(inputContrasenia, inputContraseniaConfirmada);
    }
  }
})

inputContraseniaConfirmada.addEventListener('blur', function () {
  campoCompleto = validarCampo(inputContraseniaConfirmada)
  if (campoCompleto) {
    if (validarLongitud(inputContraseniaConfirmada, 'contrasenia')) {
      // contraseniasIguales(inputContrasenia, inputContraseniaConfirmada);
    }
  }
})

botonSubmit.addEventListener('click', function(){
  validarChecks(checkRolCompetidor, checkRolJuez)
})

//acá intenté que no se envien los datos del formulario si no son válidos todos los campos... no salió D:
formulario.addEventListener('submit', function (event) {
  event.preventDefault()

  console.log('funca el submit event')
  formularioValido = validarFormulario()
  if (formularioValido) {
    formulario.submit()
  }
}, true)

function validarFormulario() {
  formularioValido = false;
  if (usuarioValido) {
    if (nombreValido) {
      if (apellidoValido) {
        if (emailValido) {
          contraseniasValidas = contraseniasIguales(inputContrasenia, inputContraseniaConfirmada)
          if (contraseniasValidas){
            if(validarChecks(checkRolCompetidor, checkRolJuez))
            formularioValido = true
          }
        }
      }
    }
  }
  console.log(formularioValido, 'ENTRA A VALIDAR FORMULARIO')
  return formularioValido
}

function validarChecks(checkRolCompetidor, checkRolJuez){
  checkValidado = false;
  if(checkRolCompetidor.checked){
    console.log('competidor')
    checkValidado = true;
  }else if(checkRolJuez.checked){
    console.log('juez')
    checkValidado = true;
  }
  return checkValidado;
}

//funcion que comprueba que el campo no esté vacío
function validarCampo(input) {
  if (input.value === "") {
    input.style.borderColor = 'red';
    return false;
  } else {
    input.style.borderColor = 'green';
    return true
  }
}


function validarLongitud(input, type) {
  longitudValidada = false
  if (type === 'contrasenia') {
    if (input.value.length >= 8) {
      input.style.borderColor = "green";
      longitudValidada = true
    }
    else {
      input.style.borderColor = "red";
      console.log('entra al else')
    }
  } else {
    if (input.value.length > 100) {
      input.style.borderColor = "red";
    }
    else {
      input.style.borderColor = "green";
      longitudValidada = true
    }
  }
  return longitudValidada
}

function contraseniasIguales(contrasenia, contraseniaRepetida) {
  if (contrasenia.value === contraseniaRepetida.value) {
    contrasenia.style.borderColor = "green";
    contraseniaRepetida.style.borderColor = "green";
    return true
  } else {
    contrasenia.style.borderColor = "red";
    contraseniaRepetida.style.borderColor = "red";
  }
}


//funcion que valida que el valor ingresado sea string
function validarString(input) {
  string = input.value
  if (isNaN(string)) {
    validarLongitud(input, 'otro')
  } else {
    input.style.borderColor = "red";
  }
  return false
}

//función que comprueba que el mail tenga un @ entre strings
function validarEmail(email) {
  const regexEmail = /^\S+@\S+\.\S+$/;
  if (!regexEmail.test(email.value)) {
    email.style.borderColor = "red";
    return false;
  } else {
    email.style.borderColor = "green";
    return true;
  }
}

//acá intenté asegurarme de que todos los valores sean true
// function formularioValido(){
// formValido = false;
// if (usuarioValido){
//   if(nombreValido){
//     if(apellidoValido){
//       if(emailValido){
//         formValido = true;
//       }
//     }
//   }
// }
// return formValido
// }

