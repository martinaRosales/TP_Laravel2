export {
  validarApellido,
  validarCampo,
  validarClasificacion,
  validarDu,
  validarEdad,
  validarEmail,
  validarGal,
  validarGenero,
  validarNombre,
  validarPais
}
const form = document.getElementById("formulario");
const envio = document.getElementById("envio");

//Mensajes que se imprimen en pantalla en caso de error
const messages = {
  gal: "Ingrese un gal válido (3 letras (MAYUS) seguidas de 7 números)",
  apellido: "El apellido ingresado es demasiado largo",
  nombre: "El nombre ingresado es demasiado largo",
  esnumero: "Por favor, ingrese caracteres dentro del abecedario (a-z) en su nombre y apellido",
  fechaNacimiento: "Ingrese una fecha valida, debe tener minimo 6 años de edad",
  paisOrigen: "El país ingresado no está en los países registrados",
  graduacion: "Seleccione su grado de educación",
  clasificacion: "Ingrese un dato valido (Enteros o Decimales unicamente ente 1 y 900), sin espacio en blanco y con un punto en caso de ser decimal",
  email: "Ingrese un correo electrónico válido",
  genero: "Seleccione su género",
  du: "Ingrese los 8 dígitos de su DNI"
};

//funcion que comprueb que el campo no esté vacío
function validarCampo(valor, campo) {
  if (valor.trim() === "") {
    envio.textContent = `El campo ${campo} es requerido`;
    envio.style.display = "block";
    return false;
  } else {
    envio.style.display = 'none';
  }
  return true;
}

//función que comprueba que el Gal tenga 3 letras y 7 números, respectivamente
function validarGal(gal) {
  const regexGal = /^[A-Z]{3}\d{7}$/;
  const galInput = document.querySelector("#gal");
  console.log(gal);
  if (!regexGal.test(gal)) {
    envio.textContent = messages.gal;
    envio.style.display = "block";
    envio.classList.add("is-invalid");
    galInput.style.borderColor = "red";
    galInput.style.boxShadow = '2px 2px 4px rgba(0, 0, 0, 0.4)';
    return false;
  } else {
    galInput.style.borderColor = "green";
    galInput.style.boxShadow = '2px 2px 4px rgba(0, 0, 0, 0.4)';
    return true;
  }

}

//función que comprueba que el mail tenga un @ entre strings
function validarEmail(email) {
  const regexEmail = /^\S+@\S+\.\S+$/;
  const emailInput = document.querySelector("input[type='email']");
  if (!regexEmail.test(email)) {
    envio.textContent = messages.email;
    envio.style.display = "block";
    envio.classList.add("is-invalid");
    emailInput.style.borderColor = "red";
    emailInput.style.boxShadow = '2px 2px 4px rgba(0, 0, 0, 0.4)';
    return false;
  } else {
    emailInput.style.borderColor = "green";
    emailInput.style.boxShadow = '2px 2px 4px rgba(0, 0, 0, 0.4)';
    return true;
  }
}

//funcion que compara el país ingresado con un json de países permitidos
function validarPais(pais) {
  let paisValidated = false;
  const paisInput = document.querySelector("#pais");
  paisesPermitidos.forEach(jsonPais => {
    if (jsonPais.paisPermitido === pais.toLowerCase()) {
      envio.style.display = 'none';
      paisInput.style.borderColor = "green";
      paisInput.style.boxShadow = '2px 2px 4px rgba(0, 0, 0, 0.4)';
      paisValidated = true;
    }
  });
  if (!paisValidated) {
    envio.textContent = messages.paisOrigen;
    envio.style.display = 'block';
    envio.classList.add("is-invalid");
    paisInput.style.borderColor = "red";
    paisInput.style.boxShadow = '2px 2px 4px rgba(0, 0, 0, 0.4)';
  }
  return paisValidated;
}

// La edad del competidor debe ser de 6 años o más.
function validarEdad(fecha) {
  const fechaNac = new Date(fecha); //se crea la clase de fecha con el valor pasado por parametro 
  const anioNac = fechaNac.getFullYear(); //se obtiene el año de la fecha pasada por parametro
  const fechaActual = new Date(); //se obtiene la clase date para saber el año actual
  const anioActual = fechaActual.getFullYear(); // devuelve el año actual  
  const edad = anioActual - anioNac;
  const edadInput = document.querySelector("#fecha-nacimiento");
  if (edad < 6) {
    envio.textContent = messages.fechaNacimiento;
    envio.style.display = "block";
    envio.classList.add("is-invalid");
    edadInput.style.borderColor = "red";
    edadInput.style.boxShadow = '2px 2px 4px rgba(0, 0, 0, 0.4)';
    return false;
  } else if (edad > 6) {
    envio.style.display = 'none';
    edadInput.style.borderColor = "green";
    edadInput.style.boxShadow = '2px 2px 4px rgba(0, 0, 0, 0.4)';
    return true;
  } else {
    envio.textContent = messages.fechaNacimiento;
    envio.style.display = "block";
    envio.classList.add("is-invalid");
    edadInput.style.borderColor = "red";
    edadInput.style.boxShadow = '2px 2px 4px rgba(0, 0, 0, 0.4)';
    return false;
  }
}

// Validar que el ranking sea un número entre 0 y 900 pudiendo ser decimal de una posición
function validarClasificacion(clasificacion) {
  const clasificacionInput = document.querySelector("#clasificacion");
  if (isNaN(clasificacion) || clasificacion < 1 || clasificacion > 900) {
    envio.textContent = messages.clasificacion;
    envio.style.display = "block";
    envio.classList.add("is-invalid");
    clasificacionInput.style.borderColor = "red";
    clasificacionInput.style.boxShadow = '2px 2px 4px rgba(0, 0, 0, 0.4)';
    return false;
  }
  else {
    clasificacionInput.style.borderColor = "green";
    clasificacionInput.style.boxShadow = '2px 2px 4px rgba(0, 0, 0, 0.4)';
    return true;
  }

}

//Validar que el apellido tenga menos de 100 caracteres
function validarApellido(string) {
  let apellidoValidated = true;
  const apellidoInput = document.querySelector("#apellido");
  if (isNaN(string)) {
    if (string.length > 100) {
      envio.textContent = messages.apellido;
      envio.style.display = 'block';
      envio.classList.add("is-invalid");
      apellidoValidated = false
      apellidoInput.style.borderColor = "red";
      apellidoInput.style.boxShadow = '2px 2px 4px rgba(0, 0, 0, 0.4)';
    }
    else {
      envio.style.display = 'none';
      apellidoInput.style.borderColor = "green";
      apellidoInput.style.boxShadow = '2px 2px 4px rgba(0, 0, 0, 0.4)';
    }
  } else {
    envio.textContent = messages.esnumero;
    envio.style.display = 'block';
    envio.classList.add("is-invalid");
    apellidoValidated = false
    apellidoInput.style.borderColor = "red";
    apellidoInput.style.boxShadow = '2px 2px 4px rgba(0, 0, 0, 0.4)';
  }
  return apellidoValidated
}

//Validar que el nombre tenga menos de 100 caracteres
function validarNombre(string) {
  let nombreValidated = true;
  const nombreInput = document.querySelector("#nombre");
  if (isNaN(string)) {
    if (string.length > 100) {
      envio.textContent = messages.nombre;
      envio.style.display = 'block';
      envio.classList.add("is-invalid");
      nombreInput.style.borderColor = "red";
      nombreInput.style.boxShadow = '2px 2px 4px rgba(0, 0, 0, 0.4)';
      nombreValidated = false
    }
    else {
      envio.style.display = 'none';
      nombreInput.style.borderColor = "green";
      nombreInput.style.boxShadow = '2px 2px 4px rgba(0, 0, 0, 0.4)';
    }
  } else {
    envio.textContent = messages.esnumero;
    envio.style.display = 'block';
    envio.classList.add("is-invalid");
    nombreInput.style.borderColor = "red";
    nombreInput.style.boxShadow = '2px 2px 4px rgba(0, 0, 0, 0.4)';
    nombreValidated = false
  }
  return nombreValidated
}

//Validar que el du sea un número y tenga 8 dígitos
function validarDu(du) {
  let duValidated = true;
  const duInput = document.querySelector("#du");
  if (isNaN(du) || du.length != 8) {
    envio.textContent = messages.du;
    envio.style.display = 'block';
    envio.classList.add("is-invalid");
    duInput.style.borderColor = "red";
    duInput.style.boxShadow = '2px 2px 4px rgba(0, 0, 0, 0.4)';
    duValidated = false
  }
  else {
    envio.style.display = 'none';
    duInput.style.borderColor = "green";
    duInput.style.boxShadow = '2px 2px 4px rgba(0, 0, 0, 0.4)';
  }

  return duValidated
}

//Validar que el genero no este vacio 
function validarGenero(genero) {
  let generoValidated = true;
  if (!genero) {
    envio.textContent = messages.genero;
    envio.style.display = 'block';
    envio.classList.add("is-invalid");
    generoValidated = false
  } else {
    envio.style.display = 'none';
  }
  return generoValidated
}

//Funcion que comprueba que todos los campos estén completos y con los datos correctos
let nombreValido = false;
let apellidoValido = false;
let duValido = false;
let edadValida = false;

const nombre = document.getElementById("nombre");
const apellido = document.getElementById("apellido");
const du = document.getElementById("du");
const fechaNac = document.getElementById("fecha-nacimiento");

let valueNombre;
nombre.addEventListener('blur', function () {
  const value = this.value;
  valueNombre = value;
  nombreValido = validarNombre(value);
  validarCampos();
});

let valueApellido;
apellido.addEventListener('blur', function () {
  const value = this.value;
  valueApellido = value;
  apellidoValido = validarApellido(value);
  validarCampos();
});

let valueDu;
du.addEventListener('blur', function () {
  const value = this.value;
  valueDu = value;
  duValido = validarDu(value);
  validarCampos();
});

let valueFecha;
fechaNac.addEventListener('blur', function () {
  const value = this.value;
  valueFecha = value;
  edadValida = validarEdad(value);
  validarCampos();
});


let paisValido = false;
let emailValido = false;
let generoValido = true;

const paisOrigen = document.getElementById("pais");
const email = document.getElementById("email");
const generoInput = document.querySelector('input[name="genero"]:checked');

let valuePais;
paisOrigen.addEventListener('blur', function () {
  const value = this.value;
  valuePais = value;
  paisValido = validarPais(value);
  validarCampos();
});

let valueEmail;
email.addEventListener('blur', function () {
  const value = this.value;
  valueEmail = value;
  emailValido = validarEmail(value);
  validarCampos();
});

/* let valueGenero;
let genero = document.querySelector('input[name="genero"]:checked');
if (genero !== null) {
  valueGenero = genero;
} else {
  valueGenero = '';
} */
let generoSeleccionado = null;
let generoRadios = document.getElementsByName('genero');

for (let i = 0; i < generoRadios.length; i++) {
  generoRadios[i].addEventListener('change', function () {
    generoSeleccionado = this.value;
  });
}

// A continuación puedes realizar alguna acción con el valor de "generoSeleccionado" después de que se haya seleccionado una opción.



let galValido = false;
let graduacionValido = false;
let clasificacionValido = false;

const gal = document.getElementById("gal");
const graduacion = document.getElementById("graduacion");
const clasificacion = document.getElementById("clasificacion");

let valueGal;
gal.addEventListener('blur', function () {
  const value = this.value;
  valueGal = value;
  // Realiza la validación aquí y muestra un mensaje si es necesario
  galValido = validarGal(value);
  validarCampos();
});

let valueGraduacion;
graduacion.addEventListener('blur', function () {
  const value = this.value;
  valueGraduacion = value;
  // Realiza la validación aquí y muestra un mensaje si es necesario
  graduacionValido = validarCampo(value, 'grado de educacion');
  validarCampos();
});



let valueClasificacion;
clasificacion.addEventListener('blur', function () {
  const value = this.value;
  valueClasificacion = value;
  // Realiza la validación aquí y muestra un mensaje si es necesario
  clasificacionValido = validarClasificacion(value);
  validarCampos();
});

//se crea un objeto conpetidor con los datos del formulario


function validarCampos() {
  const btn = document.getElementById('enviarBtn');
  if (nombreValido && apellidoValido && duValido && edadValida && emailValido && generoValido && galValido && graduacionValido && clasificacionValido) {
    btn.style.display = 'block';
    btn.style.background = 'green';
    btn.style.width = 'auto';
    agregarCompetidor();
  } else {
    btn.style.display = 'none';
  }
}


function agregarCompetidor() {
  const btn = document.getElementById('enviarBtn');
  btn.addEventListener('click', () => {
    let newCompetidor = { gal: valueGal, apellido: valueApellido, nombre: valueNombre, du: valueDu, fechaNac: valueFecha, pais: valuePais, graduacion: valueGraduacion, clasificacionGenNac: valueClasificacion, email: valueEmail, genero: generoSeleccionado };
    console.log(newCompetidor);
    //Se obtiene el array de objetos competidores y se pushea el objeto nuevo
    let array = localStorage.getItem('competidores');
    let competidores = JSON.parse(array);
    competidores.push(newCompetidor);
    localStorage.setItem('competidores', JSON.stringify(competidores));
    //se llama a la funcion que imprime competidores para actualizar la lista
    darCompetidores(competidores)
    tablaCompetidores(competidores)
  })

}