//Esta es la función de validación de bootstrap, intenté modificarla para usarla pero no salió
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')
  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        //acá cambié !form.checkValidity() por la función de la línea 138
        if (!formularioValido) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()


//acá recupero todos los input del formulario
const formulario = document.querySelectorAll('.needs-validation')
const inputUsuario = document.querySelector('#usuario')
const inputNombre = document.querySelector('#nombre')
const inputApellido = document.querySelector('#apellido')
const inputEmail = document.querySelector('#email')
const inputContrasenia = document.querySelector('#password')
const inputContraseniaConfirmada = document.querySelector('#password_confirmacion')
const inputFeedback = document.querySelector('.input-feedback')
const botonSubmit = document.querySelector('.boton-submit')

let usuarioValido = false;
let nombreValido = false;
let apellidoValido = false;
let emailValido = false;

//esto está para los console log, no es importante
window.addEventListener('load', function () {

  console.log(camposValidados)
})


//los blur no me los saquen, que son los que hacen que se verifique en seguida si es válido el campo
inputUsuario.addEventListener('blur', function () {
  usuarioValido = validarCampo(inputUsuario)
})

inputNombre.addEventListener('blur', function () {
  campoCompleto = validarCampo(inputNombre)
  if (campoCompleto) {
    nombreValido =  validarString(inputNombre)
  }
})

inputApellido.addEventListener('blur', function () {
  campoCompleto = validarCampo(inputApellido)
  if (campoCompleto) {
    apellidoValido = validarString(inputApellido)
    console.log(camposValidados)
  }
})

inputEmail.addEventListener('blur', function () {
  campoCompleto = validarCampo(inputEmail)
  if (campoCompleto) {
    emailValido = validarEmail(inputEmail)
  }
})

//acá intenté que no se envien los datos del formulario si no son válidos todos los campos... no salió D:
formulario.addEventListener('submit', function(event){
 if( usuarioValido && nombreValido && apellidoValido && emailValido){
 } else {
  event.preventDefault()
  event.stopPropagation()
  console.log('funca el submit event')
 }
})

// inputContrasenia.addEventListener('blur', function(){
//   validarCampo(inputContrasenia)
//   console.log(inputContrasenia)
// })

// inputContraseniaConfirmada.addEventListener('blur', function(){
//   validarCampo(inputContraseniaConfirmada)
// })


//funcion que comprueba que el campo no esté vacío
function validarCampo(input) {
  if (input.value.trim() === "") {
    input.style.borderColor = 'red';
    return false;
  } else {
    input.style.borderColor = 'green';
    return true
  }
}


//funcion que valida que el valor ingresado sea string
function validarString(input) {
  string = input.value
  console.log('entra a validarString')
  if (isNaN(string)) {
    if (string.length > 100) {
      e
      input.style.borderColor = "red";
    }
    else {
      input.style.borderColor = "green";
      return true
    }
  } else {
    console.log('SON NUMEROS')
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
function formularioValido(){
formValido = false;
if (usuarioValido){
  if(nombreValido){
    if(apellidoValido){
      if(emailValido){
        formValido = true;
      }
    }
  }
}
return formValido
}