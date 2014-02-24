var slider = null;

function fixFlechas()
{
    $('section#home .flecha').css('opacity',0);
    setTimeout( function() {
        flechaHeight = $('.slideWrapper').height() / 2 -  $('section#home .flecha').height() / 2;
        
        $('section#home .flecha').css( 'margin-top', flechaHeight );
        $('section#home .flecha').css('opacity',1);	
		
    }, 1000 );
	
	// Calculo padding para que quede bien en la pantalla
	/*
	screenWidth = $(window).width();
	screenHeight = $(window).height();
	screenRatio = screenWidth / screenHeight;
	
	if ( screenRatio > 1.8 ) //1.8 es mas o menos 16:9
	{
		padding = screenRatio * 6 / 2;
		alert(padding);
		$("section#home .slideWrapper").css('padding', '0 ' + padding + '%');
		slider.reloadSlider(sliderOptions);
	}*/
}

function fixMadeBy()
{
	//Posiciono madeBy
	$upa = $('.corner img');
	upaPosition = $upa.offset();
	$('#madeBy .spacer').css('width', '');
	madeByWidth = $('#madeBy').width();
	$('#madeBy').css('top', upaPosition.top + $upa.height() / 2 - $('#madeBy').height() / 2);
	$('#madeBy').css('left', upaPosition.left - madeByWidth);
	$('#madeBy .spacer').width( $upa.width() );
}

function isPortrait()
{
	if ( Modernizr.touch )
	{
		if ( $(window).width() < $(window).height() )
		{
			return true;
		}
	}
	
	return false;
}

$( function() {
    
	sliderWidth = null;
	
	if ( !isPortrait() ) //no es un movil o es un movil pero no esta en portrait
		sliderWidth = $('section#home .slide').width();
	else //es un movil en portrait
		sliderWidth = $(window).height();
	
	$('section#home .slide img').each( function()
	{
		$(this).attr('src', $(this).attr('rel') + '/' + sliderWidth );
	});
	
	
	//Slide
	sliderOptions = {
        auto : false,
        pager : false,
        nextSelector: '.flechaDer',
        prevSelector: '.flechaIz',
        nextText: '<img src="images/flecha-der.png" />',
        prevText: '<img src="images/flecha-izq.png" />',
		preloadImages: 'all',
        oneToOneTouch: false,
		onSliderLoad : function() { fixFlechas(); fixMadeBy(); }
	};
	
	slider = $('section#home .slide').bxSlider(sliderOptions);
	
	//rwdImageMaps (para que funcione resizeando)
	$('img[usemap]').rwdImageMaps();

    if ( Modernizr.touch ) //Orientación, aparece un ícono de que gires la pantalla
    {
        $(window).bind('orientationchange', function() {
            if ( isPortrait() )
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
		fixMadeBy();
		
        $(window).resize( function() {
			fixFlechas();
        });
    }
	
	//upa link
	$('#madeBy .spacer').mouseover( function() {
		$('#madeBy').addClass('visible');
	});
	
	$('#madeBy').mouseleave( function() {
		$('#madeBy').removeClass('visible');
	});
	
	$('#madeBy .spacer').click( function(e) {
		e.preventDefault();
		$('#madeBy').toggleClass('visible');
	});
	
});
