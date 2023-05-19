// Obtenemos los elementos desde el HTML
let timerElement = document.getElementById("timer");
let timerRestanteElement = document.querySelector('.card-title');
let btnIniciar = document.getElementById("btnIniciar");
let btnDetener = document.getElementById("btnDetener");

// Seteamos el timer con una duracion de 90 segundos
let duration = 3;
let tiempoRestante = duration; // variable ue almacena el tiempo restante
let tiempoTranscurrido = 0;
let tiempoTotal = duration;
let temporizadorFinalizado = false;

function comenzarTimer() {
    // Comienza el timer
    let timer = setInterval(function () {

        // Convert the remaining time to minutes and seconds
        let minutes = Math.floor(tiempoRestante / 60);
        let seconds = tiempoRestante % 60;

        // Chequea si el timer llega a 0
        if (tiempoRestante <= 0 && !temporizadorFinalizado) {
            temporizadorFinalizado = true;
            timerElement.classList.add('overtime');
        }

        /// Mostramos en el elemento del temporizador el tiempo restante o el tiempo transcurrido
        if (!temporizadorFinalizado) {
            timerElement.innerHTML = "Time remaining: " + minutes + " min " + seconds + " sec";
        } else {
            let overtimeSeconds = tiempoTranscurrido;
            timerElement.innerHTML = "OVERTIME: " + overtimeSeconds + " sec";
        }

        // Decrement the remaining time or increment the elapsed time by 1 second
        if (!temporizadorFinalizado) {
            tiempoRestante--;
        } else {
            tiempoTranscurrido++;
        }

    }, 1000);
}

btnIniciar.addEventListener('click', comenzarTimer);

// Agrega el evento de escucha (listener) para el botón "Detener"
btnDetener.addEventListener("click", function () {
    clearInterval(timer); //detenemos el timer
    timerRestanteElement.innerHTML = "Tiempo transcurrido: " + tiempoTranscurrido + " seg";
});
