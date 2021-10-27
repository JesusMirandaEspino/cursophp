'use strict';
    let xmlhttp = new XMLHttpRequest();
    const iniciar = document.getElementById('btn');

const cargarArchivo = () => {

    if (window.XMLHttpRequest) {
        let xmlhttp = new XMLHttpRequest();
        console.log(xmlhttp);
    } else {
        console.log('No lo soporta');
    }
};


// GET o POST, url, true asincrono, false sincrono
xmlhttp.open('GET', 'ajax.txt', true);

// Ejecutemos la lectura
xmlhttp.send();

iniciar.addEventListener('click', cargarArchivo);