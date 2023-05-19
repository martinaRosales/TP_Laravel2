let arrayCompetidores = new Array()
arrayCompetidores[0] =
{
    gal: "ABS1234567",
    apellido: "Perez",
    nombre: "Roberto",
    du: "32556987",
    fechaNac: "1990-12-02",
    pais: "Argentina",
    graduacion: "1er DAN",
    clasificacionGenNac: 200,
    email: "perez.roberto@gmail.com",
    genero: "masculino"
};
arrayCompetidores[1] =
{
    gal: "AFG5566894",
    apellido: "Ramirez",
    nombre: "Noelia",
    du: "16558974",
    fechaNac: "1968-09-17",
    pais: "Argentina",
    graduacion: "4to GUP",
    clasificacionGenNac: 825,
    email: "noeliaramirez22@gmail.com",
    genero: "femenino"
};
arrayCompetidores[2] =
{
    gal: "ADF2356941",
    apellido: "Gonzales",
    nombre: "Mariana",
    du: "46558712",
    fechaNac: "2005-12-02",
    pais: "Argentina",
    graduacion: "1ro GUP",
    clasificacionGenNac: 315,
    email: "marii.gon@gmail.com",
    genero: "femenino"
};
arrayCompetidores[3] =
{
    gal: "ADF2356941",
    apellido: "Drake",
    nombre: "Hanna",
    du: "46558712",
    fechaNac: "2005-12-02",
    pais: "Ucrania",
    graduacion: "1ro GUP",
    clasificacionGenNac: 315,
    email: "marii.gon@gmail.com",
    genero: "femenino"
};
arrayCompetidores[4] =
{
    gal: "ADF2356941",
    apellido: "Steedman",
    nombre: "Robin",
    du: "46558712",
    fechaNac: "2005-12-02",
    pais: "Perú",
    graduacion: "1ro GUP",
    clasificacionGenNac: 315,
    email: "marii.gon@gmail.com",
    genero: "masculino"
};
arrayCompetidores[5] =
{
    gal: "ADF2356941",
    apellido: "Walbrook",
    nombre: "Ardelis",
    du: "46558712",
    fechaNac: "2005-12-02",
    pais: "Estados Unidos",
    graduacion: "1ro GUP",
    clasificacionGenNac: 315,
    email: "marii.gon@gmail.com",
    genero: "femenino"
};
arrayCompetidores[6] =
{
    gal: "ADF2356941",
    apellido: "Dunckley",
    nombre: "Bambi",
    du: "46558712",
    fechaNac: "2005-12-02",
    pais: "Canada",
    graduacion: "1ro GUP",
    clasificacionGenNac: 315,
    email: "marii.gon@gmail.com",
    genero: "femenino"
};
arrayCompetidores[7] =
{
    gal: "ADF2356941",
    apellido: "Gonzales",
    nombre: "Pablo",
    du: "46558712",
    fechaNac: "2005-12-02",
    pais: "Argentina",
    graduacion: "1ro GUP",
    clasificacionGenNac: 315,
    email: "marii.gon@gmail.com",
    genero: "masculino"
};
arrayCompetidores[8] =
{
    gal: "ADF2356941",
    apellido: "Ramirez",
    nombre: "Mariana",
    du: "46558712",
    fechaNac: "2005-12-02",
    pais: "Argentina",
    graduacion: "1ro GUP",
    clasificacionGenNac: 315,
    email: "marii.gon@gmail.com",
    genero: "femenino"
};
arrayCompetidores[9] =
{
    gal: "ADF2356941",
    apellido: "Gonzales",
    nombre: "Pedro",
    du: "46558712",
    fechaNac: "2005-12-02",
    pais: "Argentina",
    graduacion: "1ro GUP",
    clasificacionGenNac: 315,
    email: "marii.gon@gmail.com",
    genero: "masculino"
};
arrayCompetidores[10] =
{
    gal: "ADF2356941",
    apellido: "Perez",
    nombre: "Mariana",
    du: "46558712",
    fechaNac: "2005-12-02",
    pais: "Argentina",
    graduacion: "1ro GUP",
    clasificacionGenNac: 315,
    email: "marii.gon@gmail.com",
    genero: "femenino"
};
arrayCompetidores[11] =
{
    gal: "ADF2356941",
    apellido: "Maderos",
    nombre: "Sofía",
    du: "46558712",
    fechaNac: "2005-12-02",
    pais: "Colombia",
    graduacion: "1ro GUP",
    clasificacionGenNac: 315,
    email: "marii.gon@gmail.com",
    genero: "femenino"
};
arrayCompetidores[12] =
{
    gal: "ADF2356941",
    apellido: "Puentes",
    nombre: "Lorenzo",
    du: "46558712",
    fechaNac: "2005-12-02",
    pais: "Ecuador",
    graduacion: "1ro GUP",
    clasificacionGenNac: 315,
    email: "marii.gon@gmail.com",
    genero: "masculino"
};
arrayCompetidores[13] =
{
    gal: "ADF2356941",
    apellido: "Marques",
    nombre: "Heber",
    du: "46558712",
    fechaNac: "2005-12-02",
    pais: "Venezuela",
    graduacion: "1ro GUP",
    clasificacionGenNac: 315,
    email: "marii.gon@gmail.com",
    genero: "masculino"
};
arrayCompetidores[14] =
{
    gal: "ADF2356941",
    apellido: "Gomez",
    nombre: "Laura",
    du: "46558712",
    fechaNac: "2005-12-02",
    pais: "Paraguay",
    graduacion: "1ro GUP",
    clasificacionGenNac: 315,
    email: "marii.gon@gmail.com",
    genero: "femenino"
};

window.addEventListener('load', function () {
    //Se llama a la funcion que imprime los datos de los competidores en pantalla
    console.log('entra al js')
    tablaCompetidores(arrayCompetidores)
});


const botonSelect = document.getElementById("boton-select")


botonSelect.addEventListener('click', () => {
    let arrayCompetidoresFiltrados = new Array()
    arrayCompetidoresFiltrados = filterByParameter(arrayCompetidores);
    tablaCompetidores(arrayCompetidoresFiltrados)

});


function tablaCompetidores(competidores) {
    $('#tabla-competidores').pagination({
        dataSource: competidores,
        pageSize: 5,
        showSizeChanger: true,
        callback: function (data, pagination) {
            console.log(competidores)
            $('#table-body').html("");
            let arrayRows = [];
            $.each(data, function (index, competidor) {
                let row = "<tr class='table-row'>" +
                    "<td class='table-column'>" + competidor.nombre + "</td>" +
                    "<td class='table-column'>" + competidor.apellido + "</td>" +
                    "<td class='table-column'>" + competidor.genero + "</td>" +
                    "<td class='table-column'>" + competidor.pais + "</td>" +
                    "<td class='table-column'>" + competidor.graduacion + "</td>" +
                    "<td class='table-column'>" + competidor.clasificacionGenNac + "</td>" +
                    "<td class='table-column'>" + competidor.gal + "</td>"
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



export { tablaCompetidores, filterByParameter }