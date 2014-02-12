function fixFlechas()
{
    $('section#home .flecha').css('opacity',0);
    setTimeout( function() {
        flechaHeight = $('.slideWrapper').height() / 2 -  $('section#home .flecha').height() / 2;
        
        $('section#home .flecha').css( 'margin-top', flechaHeight );
        $('section#home .flecha').css('opacity',1);
    }, 1000 );
}

$( function() {
    
	//Slide
	$('section#home .slide').bxSlider({
        auto : false,
        pager : false,
        nextSelector: '.flechaDer',
        prevSelector: '.flechaIz',
        nextText: '<img src="images/flecha-der.png" />',
        prevText: '<img src="images/flecha-izq.png" />',
        oneToOneTouch: false,
        onSliderLoad: function() {
            fixFlechas();
        }
    });
	
	//rwdImageMaps (para que funcione resizeando)
	$('img[usemap]').rwdImageMaps();

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
                fixFlechas();
            }
        });

        $(window).trigger('orientationchange');
    }
    else
    {
        $(window).resize( function() {
            fixFlechas();
        });
    }
});
