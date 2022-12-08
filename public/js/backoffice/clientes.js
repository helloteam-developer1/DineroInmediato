'use strict'

const tableSolicitud = document.getElementById('tabla-Solicitud');
const tableClientes = document.getElementById('tabla-Clientes');
const imgSolicitudNaranja = document.getElementById("imgSolicitudNaranja");
const imgSolicitudGris = document.getElementById("imgSolicitudGris");
const imgClientesNaranja = document.getElementById("imgClientesNaranja");
const imgClientesGris = document.getElementById("imgClientesGris");
const solicitudes = document.getElementById("solicitudes");
const clientes = document.getElementById("clientes");

solicitudes.addEventListener('click',e => {

  solicitudes.style.color = "#f29100";
  clientes.style.color = "black";
  tableSolicitud.style.display = "block";
  tableClientes.style.display = "none";
  imgClientesNaranja.style.display = "none";
  imgClientesGris.style.display = "block";
  imgSolicitudNaranja.style.display = "block";
  imgSolicitudGris.style.display = "none";


  e.preventDefault();

});

clientes.addEventListener('click',e => {

  clientes.style.color = "#f29100";
  solicitudes.style.color = "black";
  tableClientes.style.display = "block";
  tableSolicitud.style.display = "none";
  imgClientesNaranja.style.display = "block";
  imgClientesGris.style.display = "none";
  imgSolicitudNaranja.style.display = "none";
  imgSolicitudGris.style.display = "block";


  e.preventDefault();
});

