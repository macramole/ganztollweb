<section id="home" class="row">
	<div class="flecha flechaIz col-1">
		
	</div>
	
	<div class="slideWrapper col-10">
		<ul class="slide">
			<?php foreach ( $stills as $still ) : ?>
            <!--<li><img src="images/stills/Still_<?= str_pad($i, 2, '0', STR_PAD_LEFT) ?>.jpg" /></li>-->
			<li class="still">
				<img rel="<?= site_url( sprintf('common/responsiveImage/%s', $still['imagen'] ) ) ?>" src="" usemap="#map<?= $still['id'] ?>" />
				<?php if ( $still['coordenadas']) : ?>
				<map name="map<?= $still['id'] ?>">
					<?= $still['coordenadas'] ?>
				</map>
				<?php endif; ?>
			</li>
			<?php endforeach; ?>
		</ul>
	</div>
	
	<div class="flecha flechaDer col-1">
		
	</div>
</section>
<?php magico_setData($stills, 'Still', 'ul.slide li') ?>