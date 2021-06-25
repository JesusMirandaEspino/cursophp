const btn = document.querySelector('#btn_cargar_usuarios');
const loader = document.querySelector('#loader');



btn.addEventListener( 'click', () => {
    const peticion = new XMLHttpRequest(); 
    peticion.open( 'GET', '../php/usuarios.php' );

    loader.classList.add('active');

    peticion.onload = () => {
        const datos = JSON.parse( peticion.response );


        for( let i = 0;  i < 10; i++){

            const elemento = document.createElement('tr');
            elemento.innerHTML += '<td>' +  datos[i].id + '</td>' ;
            elemento.innerHTML += '<td>' +  datos[i].nombre + '</td>' ;
            elemento.innerHTML += '<td>' +  datos[i].edad + '</td>' ;
            elemento.innerHTML += '<td>' +  datos[i].pais + '</td>' ;
            elemento.innerHTML += '<td>' +  datos[i].correo + '</td>' ;
            document.querySelector('#tabla').appendChild(elemento);

        }


        /* 

        datos.forEach( persona  => {
            const elemento = document.createElement('tr');
            elemento.innerHTML += '<td>' +  persona.id + '</td>' ;
            elemento.innerHTML += '<td>' +  persona.nombre + '</td>' ;
            elemento.innerHTML += '<td>' +  persona.edad + '</td>' ;
            elemento.innerHTML += '<td>' +  persona.pais + '</td>' ;
            elemento.innerHTML += '<td>' +  persona.correo + '</td>' ;
            document.querySelector('#tabla').appendChild(elemento);

        } )*/
        
    }


    peticion.onreadystatechange = () => {
        if( peticion.readyState == 4 && peticion.status == 200){
            loader.classList.remove('active');
        }   
    }

    peticion.send();


} );