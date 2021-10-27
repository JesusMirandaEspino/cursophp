'use strict';
    const iniciar = document.getElementById('btn');

const cargarArchivo = () => {

    if (window.XMLHttpRequest) {
        let xmlhttp = new XMLHttpRequest();
        console.log(xmlhttp);
    } else {
        console.log('No lo soporta');
    }
};



iniciar.addEventListener('click', cargarArchivo);