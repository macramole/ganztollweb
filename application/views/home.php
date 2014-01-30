<section id="home" class="row">
	<div class="flecha flechaIz col-1">
		
	</div>
	
	<div class="slideWrapper col-10">
		<ul class="slide">
			<?php for ( $i = 1 ; $i <= 21 ; $i++ ) : ?>
			<li><img src="images/stills/new/still0<?= $i ?>.jpg" /></li>
			<?php endfor; ?>
		</ul>
	</div>
	
	<div class="flecha flechaDer col-1">
		
	</div>
</section>
<script>
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

		$(window).resize();
	});
</script>