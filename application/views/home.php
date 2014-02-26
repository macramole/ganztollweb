<section id="home" class="row">
	<div class="flecha flechaIz col-1">
		
	</div>
	
	<div class="slideWrapper col-10">
		<ul class="slide">
			<?php foreach ( $stills as $still ) : ?>
				<?php if ( $still['esVideo'] == 0 ) : ?>
					<li class="imagen">
						<img rel="<?= site_url( sprintf('common/responsiveImage/%s', $still['imagen'] ) ) ?>" src="" usemap="#map<?= $still['id'] ?>" />
						<?php if ( $still['coordenadas']) : ?>
						<map name="map<?= $still['id'] ?>">
							<?= $still['coordenadas'] ?>
						</map>
						<?php endif; ?>
					</li>
				<?php elseif ( $still['esVideo'] == 1 ) : ?>
					<li class="video">
						<img src="images/videos/funny.jpg" />
						<!--<div class="row">
							<div class="col-3"></div>
							<div class="col-6" style="padding: 0">
								
							</div>
							<div class="col-3"></div>
						</div>-->
						<div class="videoWrapper">
							<?= $still['video'] ?>
						</div>
						<img src="images/videos/animation.jpg" />
					</li>
				<?php else : ?>
					<li class="video2">
						<img src="images/videos/project.jpg" class="left" />
						<!--<div class="row">
							<div class="col-3"></div>
							<div class="col-6" style="padding: 0">
								
							</div>
							<div class="col-3"></div>
						</div>-->
						<div class="videoWrapper">
							<?= $still['video'] ?>
						</div>
					</li>
				<?php endif; ?>
			</li>
			<?php endforeach; ?>
		</ul>
	</div>
	
	<div class="flecha flechaDer col-1">
		
	</div>
</section>
<?php magico_setData($stills, 'Still', 'ul.slide li') ?>