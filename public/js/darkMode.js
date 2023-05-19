/* DARK MODE */
const btnSwitch = document.getElementById( 'darkBtn' );
const icon = document.getElementById( 'icon' );
btnSwitch.addEventListener( 'click', () => {
  if( document.body.getAttribute('data-bs-theme') == 'light' ){
    document.body.setAttribute( 'data-bs-theme', 'dark' );
  } else {
    document.body.setAttribute( 'data-bs-theme', 'light' );
  }
  icon.classList.toggle( 'bi' );
  icon.classList.toggle( 'bi-sun-fill' );

  const bodyAttribute = document.body.attributes.getNamedItem( 'data-bs-theme' );
  if( bodyAttribute.value == 'dark' ){
    localStorage.setItem( 'dark-mode', true );
  } else {
    localStorage.setItem( 'dark-mode', false );
  }
});

// Obtenemos el modo actual.
if( localStorage.getItem('dark-mode') === 'true' ){
  document.body.setAttribute( 'data-bs-theme', 'dark' );
} else {
  document.body.setAttribute( 'data-bs-theme', 'light' );
}

