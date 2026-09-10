//BOTONES DE LOS FILTROS DEL MÓDULO MOVIMIENTOS
const botones = document.querySelectorAll('.btn-filtros');

botones.forEach(boton =>{
    boton.addEventListener('click',() => {
        botones.forEach(btn => btn.classList.remove('active-btn'));
        boton.classList.add('active-btn')
    });
});


//ACCIÓN DE MARCAR ALERTA COMO RESUELTA
const boton = document.getElementById('resol-alert');
const texto = document.getElementById('alert-resuelta');
const fila = document.getElementById('fila-alert');

boton.addEventListener('click', function(){
    
    let confirmar = confirm("¿Marcar esta alerta como resuelta?");

    if(confirmar){
        boton.classList.add('oculto');
        texto.classList.remove('oculto');
       // fila.classList.add('oculto');
    }

});