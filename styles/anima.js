const icono = document.querySelector('#menu1'),
    menu2 = document.querySelector('#indice');

icono.addEventListener('click', (e) => {


    menu2.classList.toggle('active');
    document.body.classList.toggle('opacity');

    const ruta = e.target.getAttribute('src');


    if (ruta == 'assets/hamburguesa2.png'){
        e.target.setAttribute('src', 'assets/hamburguesa2.png')
    }else{
        e.target.setAttribute('src', 'assets/hamburguesa.png')
    }

});


