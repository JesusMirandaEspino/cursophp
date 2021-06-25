const btn = document.querySelector('#btn_cargar_usuarios');
const loader = document.querySelector('#loader');



btn.addEventListener( 'click', () => {
    const peticion = new XMLHttpRequest(); 
    peticion.open( 'GET', 'http://www.json-generator.com/api/json/get/cfdXeSRPfS?indent=2' );

    loader.classList.add('active');


    peticion.onreadystatechange = () => {
        if( peticion.readyState == 4 && peticion.status == 200){
            loader.classList.remove('active');
        }   
    }

    peticion.send();


} );