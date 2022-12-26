'use strict'
/** selecion de tablas por su ID*/
const tableSolicitud = document.getElementById('tabla-Solicitud');
const tableClientes = document.getElementById('tabla-Clientes');
const tablaFinalizado = document.getElementById('tabla-Finalizado');
/**Selecion de imagenes por su ID */
const imgSolicitudNaranja = document.getElementById("imgSolicitudNaranja");
const imgSolicitudGris = document.getElementById("imgSolicitudGris");
const imgClientesNaranja = document.getElementById("imgClientesNaranja");
const imgClientesGris = document.getElementById("imgClientesGris");
const imgFinalizadoGris =document.getElementById('imgFinalizadoGris');
const imgFinalizadoNaranja = document.getElementById('imgFinalizadoNaranja');
/**selecion de elemento para dar cambiar de seccion por su ID */
const solicitudes = document.getElementById("solicitudes");
const clientes = document.getElementById("clientes");
const finalizado = document.getElementById('finalizado');

solicitudes.addEventListener('click',e => {

  solicitudes.style.color = "#f29100";
  clientes.style.color = "black";
  finalizado.style.color = "black";
  tableSolicitud.style.display = "block";
  tableClientes.style.display = "none";
  tablaFinalizado.style.display = "none";
  imgClientesNaranja.style.display = "none";
  imgClientesGris.style.display = "block";
  imgSolicitudNaranja.style.display = "block";
  imgSolicitudGris.style.display = "none";
  imgFinalizadoNaranja.style.display = "none"
  imgFinalizadoGris.style.display ="block";


  e.preventDefault();

});

clientes.addEventListener('click',e => {

  clientes.style.color = "#f29100";
  solicitudes.style.color = "black";
  finalizado.style.color = "black";
  tableClientes.style.display = "block";
  tableSolicitud.style.display = "none";
  tablaFinalizado.style.display = "none";
  imgClientesNaranja.style.display = "block";
  imgClientesGris.style.display = "none";
  imgSolicitudNaranja.style.display = "none";
  imgSolicitudGris.style.display = "block";
  imgFinalizadoNaranja.style.display = "none"
  imgFinalizadoGris.style.display ="block";


  e.preventDefault();
});


finalizado.addEventListener('click',e=>{

    finalizado.style.color = "#f29100";
    clientes.style.color = "black";
    solicitudes.style.color = "black";
    tablaFinalizado.style.display = "block";
    tableClientes.style.display = "none";
    tableSolicitud.style.display = "none";
    imgFinalizadoNaranja.style.display = "block"
    imgFinalizadoGris.style.display ="none";
    imgClientesNaranja.style.display = "none";
    imgClientesGris.style.display = "block";
    imgSolicitudNaranja.style.display = "none";
    imgSolicitudGris.style.display = "block";

 e.preventDefault();
})


