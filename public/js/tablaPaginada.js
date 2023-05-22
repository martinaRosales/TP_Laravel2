window.addEventListener('load', function () {
    //Se llama a la funcion que imprime los datos de los competidores en pantalla
    const competidoresObtenidos = generarArrayCompetidores()
    tablaCompetidores(competidoresObtenidos)
});



const botonSelect = document.getElementById("boton-select")


botonSelect.addEventListener('click', () => {
    let arrayCompetidoresFiltrados = new Array()
    arrayCompetidoresFiltrados = filterByParameter(competidoresObtenidos);
    tablaCompetidores(arrayCompetidoresFiltrados)

});


function generarArrayCompetidores() {
    var competidoresObtenidos;
    $.ajax({
      url: 'http://localhost:8000/obtenerDatos',
      dataType: 'json',
      async: false, // Hacer la solicitud AJAX de manera síncrona
      success: function (response) {
        console.log(response)
        competidoresObtenidos = response;
      }
    });
    return competidoresObtenidos;
  }
  

function tablaCompetidores(competidores) {
    $('#tabla-competidores').pagination({
        dataSource: competidores,
        pageSize: 5,
        showSizeChanger: true,
        callback: function (data, pagination) {
            $('#table-body').html("");
            let arrayRows = [];
            $.each(data, function (index, competidor) {
                let row = "<tr class='table-row'>" +
                    "<td class='table-column'>" + competidor.nombre + "</td>" +
                    "<td class='table-column'>" + competidor.apellido + "</td>" +
                    "<td class='table-column'>" + competidor.genero + "</td>" +
                    "<td class='table-column'>" + competidor.pais + "</td>" +
                    "<td class='table-column'>" + competidor.graduacion + "</td>" +
                    "<td class='table-column'>" + competidor.clasificacion + "</td>" +
                    "<td class='table-column'>" + competidor.legajo + "</td>"
                    + "</tr>";
                arrayRows.push(row);
            })
            let table = document.getElementById("table-body")
            table.innerHTML = arrayRows
        }
    })

}

function filterByParameter(competidores) {
    let filtro = {
        tipo: document.getElementById("filtro-select").value,
        valor: document.getElementById("filtro-busqueda").value
    }
    let competidoresFiltrados = []
    competidores.forEach(competidor => {
        switch (filtro.tipo) {
            case "default":
                competidoresFiltrados.push(competidor);
                break;
            case "nombre":
                if (competidor.nombre === filtro.valor) {
                    competidoresFiltrados.push(competidor);
                } else {
                    //aca deberia meter un mensaje de que no se encontraron competidores
                }
                break;
            case "apellido":
                if (competidor.apellido === filtro.valor) {
                    competidoresFiltrados.push(competidor);
                } else {
                    //aca deberia meter un mensaje de que no se encontraron competidores
                }
                break;
            case "pais":
                if (competidor.pais === filtro.valor) {
                    competidoresFiltrados.push(competidor);
                } else {
                    //aca deberia meter un mensaje de que no se encontraron competidores
                }
                break;
        }
    });
    return competidoresFiltrados;
}

