'use strict'
/** selecion de tablas por su ID*/
const tableSolicitud = document.getElementById('tabla-Solicitud');
const tableClientes = document.getElementById('tabla-Clientes');
const tablaFinalizado = document.getElementById('tabla-Finalizado');
const tablaCartera = document.getElementById('tabla-Cartera');
/**Selecion de imagenes por su ID */
const imgSolicitudNaranja = document.getElementById("imgSolicitudNaranja");
const imgSolicitudGris = document.getElementById("imgSolicitudGris");
const imgClientesNaranja = document.getElementById("imgClientesNaranja");
const imgClientesGris = document.getElementById("imgClientesGris");
const imgFinalizadoGris =document.getElementById('imgFinalizadoGris');
const imgFinalizadoNaranja = document.getElementById('imgFinalizadoNaranja');
const imgCarteraGris = document.getElementById('imgCarteraGris');
const imgCarteraNaranja = document.getElementById('imgCarteraNaranja');
const imgNotificacionVerde = document.getElementById('imgNotificacionVerde');
const imgNotificacionNegro = document.getElementById('imgNotificacionNegro');
/**selecion de elemento para dar cambiar de seccion por su ID */
const solicitudes = document.getElementById("solicitudes");
const clientes = document.getElementById("clientes");
const finalizado = document.getElementById('finalizado');
const cartera = document.getElementById('cartera');
const linkClientes = document.getElementById('linkClientes');
const linkNotificaciones = document.getElementById('linkNotificaciones');

solicitudes.addEventListener('click',e => {

  solicitudes.style.color = "#f29100";
  clientes.style.color = "black";
  finalizado.style.color = "black";
  cartera.style.color = "black";
  tableSolicitud.style.display = "block";
  tableClientes.style.display = "none";
  tablaFinalizado.style.display = "none";
  tablaCartera.style.display = "none";
  imgClientesNaranja.style.display = "none";
  imgClientesGris.style.display = "block";
  imgSolicitudNaranja.style.display = "block";
  imgSolicitudGris.style.display = "none";
  imgFinalizadoNaranja.style.display = "none"
  imgFinalizadoGris.style.display ="block";
  imgCarteraNaranja.style.display = "none";
  imgCarteraGris.style.display = "block";

  e.preventDefault();

});

clientes.addEventListener('click',e => {

  clientes.style.color = "#f29100";
  solicitudes.style.color = "black";
  finalizado.style.color = "black";
  cartera.style.color = "black";
  tableClientes.style.display = "block";
  tableSolicitud.style.display = "none";
  tablaFinalizado.style.display = "none";
  tablaCartera.style.display = "none";
  imgClientesNaranja.style.display = "block";
  imgClientesGris.style.display = "none";
  imgSolicitudNaranja.style.display = "none";
  imgSolicitudGris.style.display = "block";
  imgFinalizadoNaranja.style.display = "none"
  imgFinalizadoGris.style.display ="block";
  imgCarteraNaranja.style.display = "none";
  imgCarteraGris.style.display = "block";


  e.preventDefault();
});


finalizado.addEventListener('click',e=>{

    finalizado.style.color = "#f29100";
    clientes.style.color = "black";
    solicitudes.style.color = "black";
    cartera.style.color = "black";
    tablaFinalizado.style.display = "block";
    tableClientes.style.display = "none";
    tableSolicitud.style.display = "none";
    tablaCartera.style.display = "none";
    imgFinalizadoNaranja.style.display = "block"
    imgFinalizadoGris.style.display ="none";
    imgClientesNaranja.style.display = "none";
    imgClientesGris.style.display = "block";
    imgSolicitudNaranja.style.display = "none";
    imgSolicitudGris.style.display = "block";
    imgCarteraNaranja.style.display = "none";
    imgCarteraGris.style.display = "block";

 e.preventDefault();
});

cartera.addEventListener('click', e=>{

    cartera.style.color = "#f29100"
    finalizado.style.color = "black";
    clientes.style.color = "black";
    solicitudes.style.color = "black";
    imgCarteraNaranja.style.display = "block";
    imgCarteraGris.style.display = "none";
    imgFinalizadoNaranja.style.display = "none";
    imgFinalizadoGris.style.display ="block";
    imgClientesNaranja.style.display = "none";
    imgClientesGris.style.display = "block";
    imgSolicitudNaranja.style.display = "none";
    imgSolicitudGris.style.display = "block";
    tablaFinalizado.style.display = "none";
    tableClientes.style.display = "none";
    tableSolicitud.style.display = "none";
    tablaCartera.style.display = "block";

 e.preventDefault();
});
