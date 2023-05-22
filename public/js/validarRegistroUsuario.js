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
//1. Que el formulario no se envíe si no son válidos todos los campos DESHABILITAR EL BOTON SUBMIT SI NO ESTAN VALIDOS TODOS LOS CAMPOS
//2. Validar los input de las contraseñas, que estén completos y que sean iguales HECHO
//3. Agregar mensajes breves y descriptivos sobre el error en el campo (si está incompleto o los datos no son válidos)

//acá recupero todos los input del formulario
const formulario = document.querySelector('#formularioRegistro')
const inputUsuario = document.querySelector('#usuario')
const inputNombre = document.querySelector('#nombre')
const inputApellido = document.querySelector('#apellido')
const inputEmail = document.querySelector('#email')
const inputContrasenia = document.querySelector('#contrasenia')
const inputContraseniaConfirmada = document.querySelector('#repiteContrasenia')
const botonSubmit = document.querySelector('#botonSubmit')
const checkRolCompetidor = document.querySelector('#competidor')
const checkRolJuez = document.querySelector('#juez')
const divChecks = document.querySelector('#checks');


//acá recupero todos los divs donde irán los mensajes de feedback
const usuarioFeedback = document.querySelector('#usuarioFeedback')
const nombreFeedback = document.querySelector('#nombreFeedback')
const apellidoFeedback = document.querySelector('#apellidoFeedback')
const emailFeedback = document.querySelector('#emailFeedback')
const contraseniaFeedback = document.querySelector('#contraseniaFeedback')
const contraseniaConfirmadaFeedback = document.querySelector('#repiteContraseniaFeedback')
const checksFeedback = document.querySelector('#checksFeedback')

let usuarioValido = false;
let nombreValido = false;
let apellidoValido = false;
let emailValido = false;
let contraseniasValidas = false;
// let formularioValido = false;

//esto está para los console log, no es importante
formulario.addEventListener('click', function () {
  formularioValido = validarFormulario()
  if (!formularioValido) {
    botonSubmit.disabled = true;
  } else {
    console.log('entra al else')
    botonSubmit.disabled = false;
  }
})


//los blur no me los saquen, que son los que hacen que se verifique en seguida si es válido el campo
inputUsuario.addEventListener('blur', function () {
  usuarioValido = validarCampo(inputUsuario)
  if (!usuarioValido){
    usuarioFeedback.style.color = 'red'
    usuarioFeedback.innerHTML = 'Complete este campo'
  } else {
    usuarioFeedback.innerHTML = ' &nbsp;'
  }
})

inputNombre.addEventListener('blur', function () {
  campoCompleto = validarCampo(inputNombre)
  if (campoCompleto) {
    nombreValido = validarString(inputNombre)
    if (nombreValido){
      nombreFeedback.innerHTML = ' &nbsp;'
    } else {
      nombreFeedback.style.color = 'red'
      nombreFeedback.innerHTML = 'Ha ingresado números y/o demasiados caracteres'
    }
  } else {
    nombreFeedback.style.color = 'red'
    nombreFeedback.innerHTML = 'Complete este campo'
  }
})

inputApellido.addEventListener('blur', function () {
  campoCompleto = validarCampo(inputApellido)
  if (campoCompleto) {
    apellidoValido = validarString(inputApellido)
    if (apellidoValido){
      apellidoFeedback.innerHTML = ' &nbsp;'
    } else {
      apellidoFeedback.style.color = 'red'
      apellidoFeedback.innerHTML = 'Ha ingresado números y/o demasiados caracteres'
    }
  } else {
    apellidoFeedback.style.color = 'red'
    apellidoFeedback.innerHTML = 'Complete este campo'
  }
})

inputEmail.addEventListener('blur', function () {
  campoCompleto = validarCampo(inputEmail)
  if (campoCompleto) {
    emailValido = validarEmail(inputEmail)
    if (emailValido){
      emailFeedback.innerHTML = ' &nbsp;'
    } else {
      emailFeedback.style.color = 'red'
      emailFeedback.innerHTML = 'El email ingresado no es válido'
    }
  } else {
    emailFeedback.style.color = 'red'
    emailFeedback.innerHTML = 'Complete este campo'
  }
})

inputContrasenia.addEventListener('blur', function () {
  campoCompleto = validarCampo(inputContrasenia)
  if (campoCompleto) {
    if (validarLongitud(inputContrasenia, 'contrasenia')) {
      //esto validarlo cuando se envíe el formulario
      contraseniasValidas = contraseniasIguales(inputContrasenia, inputContraseniaConfirmada);
      if (contraseniasValidas){
        contraseniaFeedback.innerHTML = ' &nbsp;'
        contraseniaConfirmadaFeedback.innerHTML = ' &nbsp;'
      } else {
        contraseniaFeedback.style.color = 'red'
        contraseniaFeedback.innerHTML = 'Las contraseñas no son iguales'
      }
    } else {
      contraseniaFeedback.style.color = 'red'
      contraseniaFeedback.innerHTML = 'La contraseña debe tener un mínimo de 8 caracteres'
    }
  } else {
    contraseniaFeedback.style.color = 'red'
    contraseniaFeedback.innerHTML = 'Complete este campo'
  }
})

inputContraseniaConfirmada.addEventListener('blur', function () {
  campoCompleto = validarCampo(inputContraseniaConfirmada)
  if (campoCompleto) {
    if (validarLongitud(inputContraseniaConfirmada, 'contrasenia')) {
      contraseniasValidas = contraseniasIguales(inputContrasenia, inputContraseniaConfirmada);
      if (contraseniasValidas){
        contraseniaFeedback.innerHTML = ' &nbsp;'
        contraseniaConfirmadaFeedback.innerHTML = ' &nbsp;'
      } else {
        contraseniaConfirmadaFeedback.style.color = 'red'
        contraseniaConfirmadaFeedback.innerHTML = 'Las contraseñas no son iguales'
      }
    } else {
      contraseniaConfirmadaFeedback.style.color = 'red'
      contraseniaConfirmadaFeedback.innerHTML = 'La contraseña debe tener un mínimo de 8 caracteres'
    }
  } else {
    contraseniaConfirmadaFeedback.style.color = 'red'
    contraseniaConfirmadaFeedback.innerHTML = 'Complete este campo'
  }
})

divChecks.addEventListener('click', function () {
  checksValidos=validarChecks(checkRolCompetidor, checkRolJuez)
  if(checksValidos){
    checksFeedback.innerHTML = ' &nbsp;'
  } else {
    checksFeedback.style.color = 'red'
    checksFeedback.innerHTML = 'Seleccione una opción'
  }
})

function validarFormulario() {
  formularioValido = false;
  if (usuarioValido) {
    console.log('1 usuario es valido')
    if (nombreValido) {
      console.log('2 nombre es valido')
      if (apellidoValido) {
        console.log('3 apellido es valido')
        if (emailValido) {
          console.log('4 email es valido')
          if (contraseniasValidas) {
            console.log('5 contrasenias son validas')
            checksValidos=validarChecks(checkRolCompetidor, checkRolJuez)
            if(checksValidos){
              checksFeedback.innerHTML = ' &nbsp;'
              formularioValido = true;
            } else {
              checksFeedback.style.color = 'red'
              checksFeedback.innerHTML = 'Seleccione una opción'
            }
          }
        }
      }
    }
  }
  return formularioValido
}

//funcion que comprueba que el campo no esté vacío
function validarCampo(input) {
  if (input.value === "") {
    input.style.borderColor = 'red';
    input.innerHTML = 'Complete este campo'
    return false;
  } else {
    input.style.borderColor = 'green';
    return true
  }
}

function validarChecks(checkRolCompetidor, checkRolJuez) {
  checkValidado = false;
  if (checkRolCompetidor.checked) {
    checkValidado = true;
  } else if (checkRolJuez.checked) {
    checkValidado = true;
  }
  return checkValidado;
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
  // if (validarCampo(contrasenia) && validarCampo(contraseniaRepetida)) {
    if (contrasenia.value === contraseniaRepetida.value) {
      console.log('entra al if')
      contrasenia.style.borderColor = "green";
      contraseniaRepetida.style.borderColor = "green";
      return true
    } else {
      console.log('entra al else')
      contrasenia.style.borderColor = "red";
      contraseniaRepetida.style.borderColor = "red";
      return false
    }
  // } else {

  // }
}


//funcion que valida que el valor ingresado sea string
function validarString(input) {
  stringValidado = false
  string = input.value
  if (isNaN(string)) {
    stringValidado = validarLongitud(input, 'otro')
  } else {
    input.style.borderColor = "red";
  }
  return stringValidado
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

