//BOTONES DE LOS FILTROS DEL MÓDULO MOVIMIENTOS
const botones = document.querySelectorAll('.btn-filtros');

botones.forEach(boton =>{
    boton.addEventListener('click',() => {
        botones.forEach(btn => btn.classList.remove('active-btn'));
        boton.classList.add('active-btn')
    });
});