$( function() {
    $('section#home .slide').bxSlider({
        auto : false,
        pager : false,
        nextSelector: '.flechaDer',
        prevSelector: '.flechaIz',
        nextText: '<img src="images/flecha-der.png" />',
        prevText: '<img src="images/flecha-izq.png" />',
        oneToOneTouch: false
    });

    if ( Modernizr.touch ) //Orientación, aparece un ícono de que gires la pantalla
    {
        $(window).bind('orientationchange', function() {
            if ( window.orientation !== 90 && window.orientation !== -90 )
            {
                $('body').addClass('orientation').height( $(document).height() );
                $('#mainWrapper').css('opacity', 0);
            }
            else
            {
                $('body').removeClass('orientation').height('');
                $('#mainWrapper').css('opacity', 1);
            }
        });

        $(window).trigger('orientationchange');
    }


    $(window).resize( function() {
        $('section#home .flecha').css('opacity',0);
        setTimeout( function() {
            $('section#home .flecha').css( 'margin-top', $('body').height() / 2 - $('section#home .flecha').height() / 2 );
            $('section#home .flecha').css('opacity',1);
        }, 400 );
    });
    
    $(window).resize();    
});