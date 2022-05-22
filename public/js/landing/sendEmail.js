$(document).on('submit', '#sendContactEmail', function (e) {
    e.preventDefault();

    let form = new FormData();
    const mode = $(this).attr('data-info');


    form.append( 'email', $(`#emailContact-${mode}`).val() );
    form.append( 'comment', $(`#comentContact-${mode}`).val() );
    sendEmail(form);


});



const sendEmail = async(data) => {
    try {

        const res = await axios.post('/sendEmail', data);
        const {response} = res.data;

        if (response) console.log("se envio");

    } catch (error) {

        console.log("ocurrio un eror");

    }

}
