// Cambio de tamaño de pantalla
window.addEventListener( 'resize', function (e) {
    let ventana = e.target;
    //console.log( ventana.innerWidth );
    if( ventana.innerWidth < 780 ){
      document.getElementById( 'nav' ).classList.add( 'fixed-bottom' );
      document.getElementById( 'nav' ).classList.remove( 'fixed-top' )
    } else {
      document.getElementById( 'nav' ).classList.add( 'fixed-top' )
      document.getElementById( 'nav' ).classList.remove( 'fixed-bottom' )
    }
  })
  
  
  //Activacion de menu hamburguesa por medio del ALT y la tecla m
  const modificarDom = function (dom) {
    let bool = false;
    if( dom.className.indexOf('show') !== -1 ){
      bool = true;
    }
    return bool;
  }
  
  const detectaAltC = document.addEventListener( "keydown", function (e) {
    if (e.altKey) {
      if( (e.key) === "m" ){
        let navbar = document.getElementById('navbarResponsive')
        if( modificarDom(navbar) ){
          navbar.classList.remove('show');
        } else {
          navbar.classList.add('show');
        }
      }
    } else {
      //console.log("no anda");
    }
  });
  
  
  const navButtons = document.querySelectorAll( '.buttonNav' );
  let section = document.querySelectorAll( '.section' );
  navButtons.forEach( button => {
    button.addEventListener( 'click' , (e) => {
      e.preventDefault();
      let name = e.target.getAttribute('name');
      section.forEach( seccion => {
        if( seccion.getAttribute('name') !== name ){
          seccion.classList.add('d-none');
        } else {
          seccion.classList.remove('d-none');
        }
      });
    })
  });
  
  
  