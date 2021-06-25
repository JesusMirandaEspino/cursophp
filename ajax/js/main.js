const btn = document.querySelector('#btn_cargar_usuarios');
const loader = document.querySelector('#loader');



btn.addEventListener( 'click', () => {
    const peticion = new XMLHttpRequest(); 
    peticion.open( 'GET', 'http://www.json-generator.com/api/json/get/cfdXeSRPfS?indent=2' );

    loader.classList.add('active');

    peticion.onload = () => {
        const datos = JSON.parse( peticion.response );

        datos.forEach( persona  => {
            const elemento = document.createElement('tr');
            elemento.innerHTML += '<td>' +  persona.id + '</td>' ;
            elemento.innerHTML += '<td>' +  persona.nombre + '</td>' ;
            elemento.innerHTML += '<td>' +  persona.edad + '</td>' ;
            elemento.innerHTML += '<td>' +  persona.pais + '</td>' ;
            elemento.innerHTML += '<td>' +  persona.correo + '</td>' ;
            document.querySelector('#tabla').appendChild(elemento);

        } )
        
    }


    peticion.onreadystatechange = () => {
        if( peticion.readyState == 4 && peticion.status == 200){
            loader.classList.remove('active');
        }   
    }

    peticion.send();


} );