// Obtenemos los elementos desde el HTML
let timerElement = document.getElementById("timer");
let timerRestanteElement = document.querySelector('.card-title');
let btnIniciar = document.getElementById("btnIniciar");
let btnDetener = document.getElementById("btnDetener");
let contador = document.getElementById("contador");
let btnReiniciar = document.getElementById("btnReiniciar");

// Seteamos el timer con una duracion de 90 segundos
let tiempo = 90;
let temporizador;
let tiempoTotal = 0;

const actualizarContador = () => {  
  tiempo--;
 
  if (tiempo <= 0) {
    if (tiempo === 0) {

      timerElement.style.color = 'red';
      timerElement.innerHTML = `${Math.abs(tiempo)} seg de OVERTIME`;
     
    } 
    else {
      timerElement.innerHTML = `${Math.abs(tiempo)} seg de OVERTIME`;
    
    }
  } else {
    timerElement.innerHTML = `${tiempo}` + 'seg';
  

  }
    tiempoTotal = 90 - tiempo;

};

btnIniciar.addEventListener('click', () => {
  temporizador = setInterval(actualizarContador, 1000);
  btnIniciar.classList.add('disabled')
  btnDetener.classList.remove('disabled')
  contador.style.display = 'none'
  
});


btnDetener.addEventListener('click', () => {
  clearInterval(temporizador);
  btnDetener.classList.add('disabled')
  btnIniciar.classList.remove('disabled')
  contador.style.display = 'block'

  if (tiempoTotal > 90) {
    contador.style.color = 'red'
    contador.innerHTML = `Tiempo Total: ${tiempoTotal} seg`;
    
  }
  else{
    contador.style.color = 'black'
    contador.innerHTML = `Tiempo Total: ${tiempoTotal} seg`;
  }

});

btnReiniciar.addEventListener('click', () => {
  window.location.reload()
  
});