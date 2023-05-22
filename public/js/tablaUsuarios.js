
let usuarios = new Array();

usuarios[0] =
{
    id:0,
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
    id:1,
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
    id:2,
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
    id:3,
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
    id:4,
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
    id:5,
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
    id:6,
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
    id:7,
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
    id:8,
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
    id:9,
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
    id:10,
    username: 'kkkkkkk',
    nombre: 'kkkkkk',
    apellido: 'kkkkkk',
    email: 'kkkkk',
    rolSolicitado: 'competidor',
    tieneRol: false,
    rolActual: 'usuario'
}


window.addEventListener('load', function () {

    var usuariosArray = new Array();
    usuarios.forEach(usuario => {
        if(!usuario.tieneRol){
            usuariosArray.push(usuario)
        }
    });
    this.localStorage.setItem('usuarios',JSON.stringify( usuariosArray))
    tablaUsuarios(usuariosArray)
})

function actualizarTabla(){
    console.log('actualizar tabla')
    let usuariosActualizados = new Array();
    array = localStorage.getItem('usuarios')
    usuariosArray = JSON.parse(array)
    console.log(usuariosArray)
    usuariosArray.forEach(usuario => {
        if(!usuario.tieneRol){
            usuariosActualizados.push(usuario)
        }
    });
    tablaUsuarios(usuariosActualizados)
}

const tabla = document.querySelectorAll('#tabla-usuarios');

const cuerpoTabla = tabla.getElementById('#table-body')
    // botonesRol.forEach(boton => {
    //     boton.addEventListener('click',function(){
    //         console.log(boton)
    //     })
    // });


    function asignarRol(boton){
        array = localStorage.getItem('usuarios')
        usuariosArray = JSON.parse(array)
        console.log(boton.value)
       console.log(usuariosArray[boton.value])
        usuariosArray[boton.value].rolActual = usuariosArray[boton.value].rolSolicitado;
        usuariosArray[boton.value].tieneRol = true;
        localStorage.setItem('competidores', JSON.stringify(usuariosArray))
        tablaUsuarios(usuariosArray)
    }


function tablaUsuarios(usuarios){
    usuariosArray = new Array ();
    usuarios.forEach(usuario =>{
        if (!usuario.tieneRol){
            usuariosArray.push(usuario)
        }
    })
    $('#tabla-usuarios').pagination({
      dataSource: usuariosArray,
      pageSize: 5,
      showSizeChanger: true,
      callback: function(data, pagination) {
        $('#table-body').html("");
        let arrayRows = [];
        $.each(data, function(index, usuario){
          let row = "<tr class='table-row'>"+
          "<td class='table-column'>"+usuario.username+"</td>"+
          "<td class='table-column'>"+usuario.nombre+"</td>"+
          "<td class='table-column'>"+usuario.apellido+"</td>"+
          "<td class='table-column'>"+usuario.email+"</td>"+
          "<td class='table-column'>"+usuario.rolSolicitado+"</td>"+
          "<td class='table-column'><button type='button' class='btn btn-primary asignarRol' id='"+usuario.id+"' value='"+usuario.id+"' onclick='asignarRol(this)' >Conceder rol</button></td>"
          +"</tr>";
          arrayRows.push(row);
        })
        let table = document.getElementById("table-body")
        table.innerHTML = arrayRows
      }
    })



  }
  