const activePage = window.location.pathname;
const navLinks = document.querySelectorAll('nav .activo').forEach(link =>{
    if(link.href.includes(`${activePage}`)){
        link.classList.add('active');
        console.log(link);
    }
})
