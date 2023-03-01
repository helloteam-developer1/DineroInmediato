const butonacordeon1 = document.querySelector('#butonacordeon1');
const butonacordeon2 = document.querySelector('#butonacordeon2');
const butonacordeon3 = document.querySelector('#butonacordeon3');
const butonacordeon4 = document.querySelector('#butonacordeon4');
const butonacordeon5 = document.querySelector('#butonacordeon5');
const butonacordeon6 = document.querySelector('#butonacordeon6');

butonacordeon1.addEventListener('click', e=>{

    const iconAcordion1 = document.querySelector('#iconAcordion1');

    iconAcordion1.style.transform = "rotate(180deg)";


    butonacordeon1.addEventListener('click', e=>{

        if(iconAcordion1.style.transform === "rotate(180deg)"){

            iconAcordion1.style.transform = "rotate(0deg)";
        }else{
            iconAcordion1.style.transform = "rotate(180deg)";
        }
    })
})

butonacordeon2.addEventListener('click', e=>{

    const iconAcordion2 = document.querySelector('#iconAcordion2');

    iconAcordion2.style.transform = "rotate(180deg)";


    butonacordeon2.addEventListener('click', e=>{
        if(iconAcordion2.style.transform === "rotate(180deg)"){

            iconAcordion2.style.transform = "rotate(0deg)";
        }else{
            iconAcordion2.style.transform = "rotate(180deg)";
        }
    })
})

butonacordeon3.addEventListener('click', e=>{

    const iconAcordion3 = document.querySelector('#iconAcordion3');


    iconAcordion3.style.transform = "rotate(180deg)";


    butonacordeon3.addEventListener('click', e=>{
        if(iconAcordion3.style.transform === "rotate(180deg)"){

            iconAcordion3.style.transform = "rotate(0deg)";
        }else{
            iconAcordion3.style.transform = "rotate(180deg)";
        }
    })
})

butonacordeon4.addEventListener('click', e=>{

    const iconAcordion4 = document.querySelector('#iconAcordion4');

    iconAcordion4.style.transform = "rotate(180deg)";


    butonacordeon4.addEventListener('click', e=>{
        if(iconAcordion4.style.transform === "rotate(180deg)"){

            iconAcordion4.style.transform = "rotate(0deg)";
        }else{
            iconAcordion4.style.transform = "rotate(180deg)";
        }
    })
})

butonacordeon5.addEventListener('click', e=>{

    const iconAcordion5 = document.querySelector('#iconAcordion5');

    iconAcordion5.style.transform = "rotate(180deg)";


    butonacordeon5.addEventListener('click', e=>{
        if(iconAcordion5.style.transform === "rotate(180deg)"){

            iconAcordion5.style.transform = "rotate(0deg)";
        }else{
            iconAcordion5.style.transform = "rotate(180deg)";
        }
    })
})

butonacordeon6.addEventListener('click', e=>{

    const iconAcordion6 = document.querySelector('#iconAcordion6');

    iconAcordion6.style.transform = "rotate(180deg)";


    butonacordeon6.addEventListener('click', e=>{
        if(iconAcordion6.style.transform === "rotate(180deg)"){

            iconAcordion6.style.transform = "rotate(0deg)";
        }else{
            iconAcordion6.style.transform = "rotate(180deg)";
        }
    })
})
