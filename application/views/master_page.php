<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
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
			(new Image()).src = 'images/orientation.jpg';
		</script>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>
		
		<script src="js/modernizr.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/jquery.bxslider.min.js" type="text/javascript" charset="utf-8"></script>		
		<script src="js/jquery.rwdImageMaps.min.js" type="text/javascript" charset="utf-8"></script>		
		<script src="js/jquery.ba-throttle-debounce.min.js" type="text/javascript" charset="utf-8"></script>		
		<script src="js/main.js" type="text/javascript" charset="utf-8"></script>
		
		<?= $head ?>
    </head>
    <body>
		<div id="mainWrapper" class="container-fluid">
			<header>
				<div class="row">
					<div class="col-1 botonera">
						<img src="images/work.png" />
					</div>
					<div class="col-4"></div>
					<div class="col-2 middle">
						<img src="images/ganz-toll.png" />
                    </div>    
					<div class="col-4"></div>
					<div class="col-1 facebook">
						<img src="images/mail.png" />
					</div>
				</div>
			</header>
			<mp:Content />
            <footer>
                <div class="row">
                    <div class="col-2 nopadding">
                        <div class="row nomargin">
                            <div class="col-12 nopadding socialWrapper">
                                <a href="#" target="_blank"><img src="images/redes/facebook.jpg" /></a><a href="#" target="_blank"><img src="images/redes/linkedin.jpg" /></a><a href="#" target="_blank"><img src="images/redes/tumblr.jpg" /></a><a href="#" target="_blank"><img src="images/redes/instagram.jpg" /></a><a href="#" target="_blank"><img src="images/redes/twitter.jpg" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-9"></div>
                    <div class="col-1 corner nopadding">
                        <img src="images/dau.jpg" />
                    </div>
                </div>
            </footer>
		</div>
		<div id="madeBy">Diseño a upa 2014 / Desarrollo <a href="http://www.parleboo.com" target="_blank">Pârleboo</a><a href="#" class="spacer">&nbsp;</a></div>
		<mp:Magico />
    </body>
		
</html>
