const   btn     = document.querySelector('#btn_cargar_usuarios'),
        error   = document.querySelector('#error_box'),
        tabla   = document.querySelector('#tabla'),
        agregar  = document.querySelector('#agregar'),
        formulario = document.querySelector('form'),
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



const agregarUsuarios = (e) => {
    e.preventDefault();
    const peticion = new XMLHttpRequest(); 
    peticion.open( 'POST', './php/insertarDatos.php' );


    usuario_nombre = formulario.nombre.value.trim();
    usuario_edad = parseInt( formulario.edad.value.trim() );
    usuario_pais = formulario.pais.value.trim();
    usuario_correo = formulario.correo.value.trim();


    if( formularioValido() ){
        error.classList.remove('active');
        const parametros = `nombre=${usuario_nombre}&edad=${usuario_edad}&pais=${usuario_pais}&correo=${usuario_correo}`;

        peticion.setRequestHeader( "Content-Type", "application/x-www-form-urlencoded" );

        loader.classList.remove('active');


        peticion.onload = () => {
            cargarUsuarios();
            formulario.nombre.value = '';
            formulario.edad.value = '';
            formulario.pais.value = '';
            formulario.correo.value = '';
        }


        peticion.onreadystatechange = () => {
            if( peticion.readyState == 4 && peticion.status == 200){
                loader.classList.remove('active');
            }   
        }

        peticion.send( parametros );



    }else{
        error.classList.add('active');
    }

}



const formularioValido = () => {
    if( usuario_nombre == ''  || usuario_pais == '' || usuario_correo == '' || isNaN( usuario_edad ) ){
        return false;
    }

    return true;
}



btn.addEventListener( 'click', cargarUsuarios );

agregar.addEventListener( 'click', (e) => {
    agregarUsuarios(e)
}   );


