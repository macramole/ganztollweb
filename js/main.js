$( function() {
    $('section#home .slide').bxSlider({
        auto : false,
        pager : false,
        nextSelector: '.flechaDer',
        prevSelector: '.flechaIz',
        nextText: '<img src="images/flecha-der.png" alt="Flecha derecha" />',
        prevText: '<img src="images/flecha-izq.png" alt="Flecha izquierda" />',
        oneToOneTouch: false
    });

    $(window).resize( function() {
        $('section#home .flecha').css('opacity',0);
        setTimeout( function() {
            $('section#home .flecha').css( 'margin-top', $('body').height() / 2 - $('section#home .flecha').height() / 2 );
            $('section#home .flecha').css('opacity',1);
        }, 400 );
    });
    
    $(window).bind('orientationchange', function() {
        if ( window.orientation != 90 && window.orientation != -90 )
        {
            
        }
    });

    $(window).trigger('orientationchange');
});