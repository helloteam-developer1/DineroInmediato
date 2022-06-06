all_modals = ['credito-rechazado','credito-aprobado', 'abandonar-linea', 'email-enviado']
all_modals.forEach((modal)=>{
    const modalSelected = document.querySelector('.'+modal);
    modalSelected.classList.remove('fadeIn');
    modalSelected.classList.add('fadeOut');
    modalSelected.style.display = 'none';
})
const modalClose = (modal) => {
    const modalToClose = document.querySelector('.'+modal);
    modalToClose.classList.remove('fadeIn');
    modalToClose.classList.add('fadeOut');
    setTimeout(() => {
        modalToClose.style.display = 'none';
    }, 500);
}

const openModal = (modal) => {
    const modalToOpen = document.querySelector('.'+modal);
    modalToOpen.classList.remove('fadeOut');
    modalToOpen.classList.add('fadeIn');
    modalToOpen.style.display = 'flex';
}


$(document).on('click', '#showModalAbandonarLinea', function (e) {
    openModal('abandonar-linea');
});
