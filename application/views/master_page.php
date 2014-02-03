<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no" />
        <meta name="description" content="Ganz Toll">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<meta property="og:title" content="<?= $title ?> <?= $sectionTitle ? "| $sectionTitle" : '' ?>"/>
		<meta property="og:url" content="<?= current_url() ?>"/>
		<meta property="og:description" content="<?= $og_description ?>"/>
		<meta property="og:image" content="<?= $og_image?>" />
		
		<link rel="icon" type="image/png" href="favicon.ico">
		
		<title><?= $title ?> <?= $sectionTitle ? "| $sectionTitle" : '' ?> </title>

		<base href="<?= base_url() ?>" />
		
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" charset="utf-8" />
		<link rel="stylesheet" href="css/core.css" type="text/css" charset="utf-8" />
		<link rel="stylesheet" href="css/ganztoll.css" type="text/css" charset="utf-8" />
		<link rel="stylesheet" href="css/jquery.bxslider.css" type="text/css" charset="utf-8" />
		
		<script>
			//loading gif preload
			(new Image()).src = 'images/bxslider/bx_loader.gif';
		</script>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/modernizr.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/jquery.bxslider.min.js" type="text/javascript" charset="utf-8"></script>		
		<script src="js/jquery.rwdImageMaps.min.js" type="text/javascript" charset="utf-8"></script>		
        <script src="js/main.js" type="text/javascript" charset="utf-8"></script>		
		
		<?= $head ?>
    </head>
    <body>
		<div id="mainWrapper" class="container-fluid">
			<header>
				<div class="row">
					<div class="col-4 botonera">
						<img src="images/botonera.png" usemap="#botoneraMap" id="imgBotonera" />
						<map id="botoneraMap" name="botoneraMap">
							<area shape="rect" coords="17,13,68,48" title="" alt="" href="1" target="_blank">
							<area shape="rect" coords="83,18,142,49" title="" alt="" href="2" target="_blank">
							<area shape="rect" coords="149,21,185,43" title="" alt="" href="3" target="_blank">
							<area shape="rect" coords="193,17,247,47" title="" alt="" href="4" target="_blank">
						</map>
					</div>
					<div class="col-7">
						
					</div>
					<div class="col-1 facebook">
						<img src="images/fcb-bot.png" />
					</div>
				</div>
			</header>
			<mp:Content />
		</div>
		
		<mp:Magico />
    </body>
</html>
