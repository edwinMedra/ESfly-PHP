/*////////////////////////TRADUCTOR HEADER //////////////////////////////////////////*/ 

const headertraduction = {
    es: {
        reserveFlight: "Reserva tu vuelo",
        offersAndDestinations: "Ofertas y destinos",
        checkIn: "Check-in",
        search: "Buscar",
        tickets: "Boletos",
        chats: "Chats",
        hello: "¡Hola,",
        verperfil: "Ver perfil",
        logout: "Cerrar sesión",
        text1: "Más que una aerolínea, somos tu puente al mundo."

    },
    en: {
        reserveFlight: "Reserve your flight",
        offersAndDestinations: "Offers and destinations",
        checkIn: "Check-in",
        search: "Search",
        tickets: "Tickets",
        chats: "Chats",
        hello: "Hello,",
        verperfil: "View profile",
        logout: "Logout",
        text1: "More than an airline, we are your bridge to the world."

    }
};

function setLanguage(lang) {
    localStorage.setItem('language', lang); 
    document.getElementById('reserveFlight').textContent = headertraduction[lang].reserveFlight;
    document.getElementById('offersAndDestinations').textContent = headertraduction[lang].offersAndDestinations;
    document.getElementById('checkIn').textContent = headertraduction[lang].checkIn;
    document.getElementById('search-btn').innerHTML = `<img src="../imagen/header/lupa.png" class="" id="lupa" alt="" width="20"> ${headertraduction[lang].search}`;
    document.getElementById('tickets').innerHTML = `<img src="../imagen/header_ayudante/boleto.png" class="" id="" alt="" width="20"> ${headertraduction[lang].tickets}`;
    document.getElementById('chats').innerHTML = `<img src="../imagen/header_ayudante/chats.png" class="" id="" alt="" width="20"> ${headertraduction[lang].chats}`;
    document.getElementById('hello').innerHTML = `${headertraduction[lang].hello} ${nomCliente}!`;
    document.getElementById('viewProfile').textContent = headertraduction[lang].viewProfile;
    document.getElementById('logout').textContent = headertraduction[lang].logout;
    document.getElementById('text1').textContent = headertraduction[lang].text1;

}


/*GUARDAR EL IDIOMA Y COLOR*/

window.addEventListener('load', () => {
    const theme = localStorage.getItem("theme");
    const language = localStorage.getItem("language"); 

    if (theme === "dark") {
        temaOscuro();
    } else {
        temaClaro();
    }

    if (language) {
        setLanguage(language); 
    } else {
        setLanguage('es'); 
    }
});
/*//////////////////////////////////////////////////////////////////*/ 