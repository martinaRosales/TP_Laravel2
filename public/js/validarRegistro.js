// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')
  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
const inputUsuario = document.querySelector('#usuario')
const inputNombre = document.querySelector('#nombre')
const inputApellido = document.querySelector('#apellido')
const inputEmail = document.querySelector('#email')
const inputContrasenia = document.querySelector('#password')
const inputContraseniaConfirmada = document.querySelector('#password_confirmacion')
const inputFeedback = document.querySelector('.input-feedback')

window.addEventListener('load', function () {
  var formulario = document.querySelectorAll('.needs-validation')
  console.log(inputFeedback)
})

inputUsuario.addEventListener('blur', function () {
  validarCampo(inputUsuario)
})

inputNombre.addEventListener('blur', function () {
  campoCompleto = validarCampo(inputNombre)
  if (campoCompleto) {
    validarString(inputNombre)
  }
})

inputApellido.addEventListener('blur', function () {
  campoCompleto = validarCampo(inputApellido)
  if (campoCompleto) {
    validarString(inputApellido)
  }
})

inputEmail.addEventListener('blur', function () {
  campoCompleto = validarCampo(inputEmail)
  if (campoCompleto) {
    validarEmail(inputEmail)
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
    }
  } else {
    console.log('SON NUMEROS')
    input.style.borderColor = "red";
  }
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
