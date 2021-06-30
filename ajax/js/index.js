const   btn     = document.querySelector('#btn_cargar_usuarios'),
        error   = document.querySelector('#error_box'),
        tabla   = document.querySelector('#tabla'),
        loader  = document.querySelector('#loader');

let usuario_nombre,
    usuario_edad,
    usuario_pais,
    usuario_correo;


const cargarUsuarios = () => {

    tabla.innerHTML = `<tr><th>ID</th><th>Nombre</th><th>Edad</th><th>Pais</th><th>Correo</th></tr>`;

    const peticion = new XMLHttpRequest(); 
    peticion.open( 'GET', './php/leerDatos.php' );

    loader.classList.add('active');


    peticion.onload = () => {
        let datos = JSON.parse( peticion.responseText );


        if( datos.error ){
            error.classList.add('active');
        }else{
            
            for( let i = 0;  i < 10; i++){

                const elemento = document.createElement('tr');
                elemento.innerHTML += '<td>' +  datos[i].id + '</td>' ;
                elemento.innerHTML += '<td>' +  datos[i].nombre + '</td>' ;
                elemento.innerHTML += '<td>' +  datos[i].edad + '</td>' ;
                elemento.innerHTML += '<td>' +  datos[i].pais + '</td>' ;
                elemento.innerHTML += '<td>' +  datos[i].correo + '</td>' ;
                tabla.appendChild(elemento);

            }
        }

    }


    peticion.onreadystatechange = () => {
        if( peticion.readyState == 4 && peticion.status == 200){
            loader.classList.remove('active');
        }   
    }

    peticion.send();




}


btn.addEventListener( 'click', cargarUsuarios );



