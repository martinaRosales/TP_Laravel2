
let usuarios = new Array();

usuarios[0] =
{
    username: 'asdasd',
    nombre: 'aaaaa',
    apellido: 'aaaaaa',
    email: 'aaaaa',
    rolSolicitado: 'juez',
    tieneRol: false,
    rolActual: 'usuario'
}
usuarios[1] =
{
    username: 'bbbbb',
    nombre: 'bbbbb',
    apellido: 'bbbbb',
    email: 'bbbbb',
    rolSolicitado: 'competidor',
    tieneRol: true,
    rolActual: 'usuario'
}

usuarios[2] =
{
    username: 'cccccc',
    nombre: 'ccccccc',
    apellido: 'ccccc',
    email: 'ccccccc',
    rolSolicitado: 'competidor',
    tieneRol: false,
    rolActual: 'usuario'
}

usuarios[3] =
{
    username: 'ddddddd',
    nombre: 'dddddd',
    apellido: 'ddddd',
    email: 'ddddd',
    rolSolicitado: 'competidor',
    tieneRol: false,
    rolActual: 'usuario'
}

usuarios[4] =
{
    username: 'eeeee',
    nombre: 'eeeee',
    apellido: 'eeeee',
    email: 'eeee',
    rolSolicitado: 'juez',
    tieneRol: false,
    rolActual: 'usuario'
}

usuarios[5] =
{
    username: 'ffffff',
    nombre: 'ffffff',
    apellido: 'ffffff',
    email: 'ffffff',
    rolSolicitado: 'competidor',
    tieneRol: false,
    rolActual: 'usuario'
}

usuarios[6] =
{
    username: 'gggggg',
    nombre: 'ggggg',
    apellido: 'gggggg',
    email: 'gggggg',
    rolSolicitado: 'competidor',
    tieneRol: true,
    rolActual: 'usuario'
}

usuarios[7] =
{
    username: 'hhhhhh',
    nombre: 'hhhhhh',
    apellido: 'hhhhhh',
    email: 'hhhhh',
    rolSolicitado: 'competidor',
    tieneRol: false,
    rolActual: 'usuario'
}

usuarios[8] =
{
    username: 'iiiiii',
    nombre: 'iiiiii',
    apellido: 'iiiii',
    email: 'iiii',
    rolSolicitado: 'juez',
    tieneRol: false,
    rolActual: 'usuario'
}

usuarios[9] =
{
    username: 'jjjjjj',
    nombre: 'jjjjjj',
    apellido: 'jjjjjj',
    email: 'jjjjj',
    rolSolicitado: 'competidor',
    tieneRol: false,
    rolActual: 'usuario'
}

usuarios[10] =
{
    username: 'kkkkkkk',
    nombre: 'kkkkkk',
    apellido: 'kkkkkk',
    email: 'kkkkk',
    rolSolicitado: 'competidor',
    tieneRol: false,
    rolActual: 'usuario'
}


window.addEventListener('load', function () {

    let usuariosArray = new Array();
    usuarios.forEach(usuario => {
        if(!usuario.tieneRol){
            usuariosArray.push(usuario)
        }
    });
    tablaUsuarios(usuariosArray)
    console.log(tabla)
})

const tabla = document.querySelectorAll('.tabla-usuarios');


    botonesRol.forEach(boton => {
        boton.addEventListener('click',function(){
            console.log(boton)
        })
    });

function asignarRol(){
    // usuario = usuariosArray[index]
    usuario.rolActual = rolSolicitado;
    usuario.tieneRol = true;
}


function tablaUsuarios(usuarios){
    $('#tabla-usuarios').pagination({
      dataSource: usuarios,
      pageSize: 5,
      showSizeChanger: true,
      callback: function(data, pagination) {
        $('#table-body').html("");
        let arrayRows = [];
        $.each(data, function(index, usuario){
          let row = "<tr class='table-row'>"+
          "<td class='table-column'>"+usuario.username+"</td>"+
          "<td class='table-column'>"+usuario.nombre+"</td>"+
          "<td class='table-column'>"+ usuario.apellido+"</td>"+
          "<td class='table-column'>"+ usuario.email+"</td>"+
          "<td class='table-column'>"+usuario.rolSolicitado+"</td>"+
          "<td class='table-column'><button type='button' class='btn btn-primary asignarRol'>Conceder rol</button></td>"
          +"</tr>";
          arrayRows.push(row);
        })
        let table = document.getElementById("table-body")
        table.innerHTML = arrayRows
      }
    })
    
  }
  