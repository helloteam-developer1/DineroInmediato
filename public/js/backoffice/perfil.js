const botonCambioContraseña = document.getElementById("botonCambioContraseña");
const cambioContraseña = document.getElementById("cambioContraseña");
const nuevaContraseña = document.getElementById("nuevaContraseña");


botonCambioContraseña.addEventListener('click', e =>{

    cambioContraseña.style.display = "none";
    nuevaContraseña.style.display = "block";

    e.preventDefault();
})
