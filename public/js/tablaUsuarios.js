
let usuarios = new Array();

usuarios[0] =
{
    usuario: 'asdasd',
    nombre: 'aaaaa',
    apellido: 'aaaaaa',
    email: 'aaaaa',
    rolSolicitado: 'juez',
    tieneRol: false,
    rolObtenido: ''
}
usuarios[1] =
{
    usuario: 'bbbbb',
    nombre: 'bbbbb',
    apellido: 'bbbbb',
    email: 'bbbbb',
    rolSolicitado: 'competidor',
    tieneRol: false,
    rolObtenido: ''
}

usuarios[2] =
{
    usuario: 'cccccc',
    nombre: 'ccccccc',
    apellido: 'ccccc',
    email: 'ccccccc',
    rolSolicitado: 'competidor',
    tieneRol: false,
    rolObtenido: ''
}

usuarios[3] =
{
    usuario: 'ddddddd',
    nombre: 'dddddd',
    apellido: 'ddddd',
    email: 'ddddd',
    rolSolicitado: 'competidor',
    tieneRol: false,
    rolObtenido: ''
}

usuarios[4] =
{
    usuario: 'eeeee',
    nombre: 'eeeee',
    apellido: 'eeeee',
    email: 'eeee',
    rolSolicitado: 'juez',
    tieneRol: false,
    rolObtenido: ''
}

usuarios[5] =
{
    usuario: 'ffffff',
    nombre: 'ffffff',
    apellido: 'ffffff',
    email: 'ffffff',
    rolSolicitado: 'competidor',
    tieneRol: false,
    rolObtenido: ''
}

usuarios[6] =
{
    usuario: 'gggggg',
    nombre: 'ggggg',
    apellido: 'gggggg',
    email: 'gggggg',
    rolSolicitado: 'competidor',
    tieneRol: false,
    rolObtenido: ''
}

usuarios[7] =
{
    usuario: 'hhhhhh',
    nombre: 'hhhhhh',
    apellido: 'hhhhhh',
    email: 'hhhhh',
    rolSolicitado: 'competidor',
    tieneRol: false,
    rolObtenido: ''
}

usuarios[8] =
{
    usuario: 'iiiiii',
    nombre: 'iiiiii',
    apellido: 'iiiii',
    email: 'iiii',
    rolSolicitado: 'juez',
    tieneRol: false,
    rolObtenido: ''
}

usuarios[9] =
{
    usuario: 'jjjjjj',
    nombre: 'jjjjjj',
    apellido: 'jjjjjj',
    email: 'jjjjj',
    rolSolicitado: 'competidor',
    tieneRol: false,
    rolObtenido: ''
}

usuarios[10] =
{
    usuario: 'kkkkkkk',
    nombre: 'kkkkkk',
    apellido: 'kkkkkk',
    email: 'kkkkk',
    rolSolicitado: 'competidor',
    tieneRol: false,
    rolObtenido: ''
}

window.addEventListener('load', function(){
    tablaUsuarios(usuarios)
})


const tabla = document.querySelector('#tabla-usuarios')

function tablaUsuarios(usuarios) {
    $('#table-body').pagination({
      dataSource: usuarios,
      pageSize: 5,
      callback: function(data) {
        $('#table-body').empty();
        $.each(data, function(index, usuario) {
          var row = '<tr class="table-row">' +
            '<td class="table-column">' + usuario.usuario + '</td>' +
            '<td class="table-column">' + usuario.nombre + '</td>' +
            '<td class="table-column">' + usuario.apellido + '</td>' +
            '<td class="table-column">' + usuario.email + '</td>' +
            '<td class="table-column">' + usuario.rolSolicitado + '</td>' +
            '<td class="table-column">&nbsp;</td>' +
            '</tr>';
          $('#table-body').append(row);
        });
      }
    });
  }
// export {tablaUsuarios}