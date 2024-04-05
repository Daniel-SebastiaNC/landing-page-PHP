$(()=>{
    $('nav.mobile').click(()=>{
        let listaMenu = $('nav.mobile ul')
        /*
        if( listaMenu.is(':hidden')){
            listaMenu.fadeIn();
        } else {
            listaMenu.fadeOut();
        }*/

        listaMenu.slideToggle();
    })
    
    if ($('target').length > 0) {
            let elemento = '#'+$('target').attr('target');
            let divScroll = $(elemento).offset().top;

            $('html,body').animate({'scrollTop': divScroll}, 2000);
    }
})