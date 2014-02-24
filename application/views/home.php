<section id="home" class="row">
	<div class="flecha flechaIz col-1">
		
	</div>
	
	<div class="slideWrapper col-10">
		<ul class="slide">
			<?php for ( $i = 1 ; $i <= 21 ; $i++ ) : ?>
            <!--<li><img src="images/stills/Still_<?= str_pad($i, 2, '0', STR_PAD_LEFT) ?>.jpg" /></li>-->
			<li><img rel="<?= site_url( sprintf('common/responsiveImage/%s%s.%s', 'Still_', str_pad($i, 2, '0', STR_PAD_LEFT), 'jpg' ) ) ?>" src="" /></li>
			<?php endfor; ?>
		</ul>
	</div>
	
	<div class="flecha flechaDer col-1">
		
	</div>
</section>