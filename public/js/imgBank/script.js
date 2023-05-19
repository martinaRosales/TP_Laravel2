const url = 'https://jsonplaceholder.typicode.com/photos';

document.addEventListener( 'DOMContentLoaded', () => {
    for( let i = 0; i < 6; i++ ){
        consultarImg( i );
    }
})

const consultarImg = (albumId) => {
    fetch( url + '?albumId=' + albumId + '&_limit=5')
      //.then( res => console.log(res.status) ); recibe 200 piolon
      .then( res => res.json() )
      .then( json => cargarImg(json, albumId) );
}

const cargarImg = (json, albumId) => {
    let divHTML = insertDiv();
    for( let i in json ){
        let data = json[i];
        // console.log( data ); recibe piolon
        let newCard = document.createElement( 'figure' );
        let newImg = document.createElement( 'img' );
        newCard.classList.add( 'figure', 'col-auto' );
        newImg.classList.add( 'figure-img', 'rounded' );
        newImg.src = data.thumbnailUrl;
        newImg.dataset.id = ( 'id', data.id );
        newImg.dataset.title = ( 'title', data.title );
        newImg.dataset.albumId = ( 'album', albumId );
        // console.log( newImg ); se crea piolon
        newImg.addEventListener( 'click', (e) => {
            getInfo(e);
        });
        newCard.appendChild( newImg );
        divHTML.appendChild( newCard );
    }
    let container = document.querySelector( '.img-bank' );
    container.appendChild( divHTML );
}

const insertDiv = () => {
    let newDiv = document.createElement( 'div' );
    newDiv.classList.add( 'row', 'col-12', 'justify-content-evenly', 'my-3' );
    return newDiv;
}

const getInfo = (e) => {
    fetch( url + '?id=' + e.srcElement.dataset.id )
      //.then( res => console.log(res.status) ); recibe 200 piolon
      .then( res => res.json() )
      .then( json => showModal(json) );
}

const showModal = (json) => {
    // console.log(json);
    const { title, albumId, id, url, thumbnailUrl } = json[0];
    Swal.fire({
        icon: 'info',
        title: title,
        showCloseButton: true,
        html: `<p><b>AlbumId:</b> ${albumId}<br>
                  <b>ID:</b> ${id}<br>
                  <b>Titulo:</b> ${title}<br>
                  <b>Url:</b> ${url}<br>
                  <b>Thumbnail url:</b> ${thumbnailUrl}</p>`
    });
}