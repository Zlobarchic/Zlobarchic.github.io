<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Белый Хостел</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="favicon.png" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/bootstrap-grid.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/linea/styles.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/magnific-popup/magnific-popup.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/animate/animate.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/css/main.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/css/skins/blue.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media.css" />
	<!-- Put this script tag to the <head> of your page -->
	<!-- <script type="text/javascript" src="//vk.com/js/api/openapi.js?147"></script> -->
	<!-- <script type="text/javascript">
	      VK.init({apiId: 3694990, onlyWidgets: true});
	    </script> -->
	


	<?php wp_head(); ?>
    <meta name="description" content="Хостел в Санкт-Петербурге." />
    <meta name="keywords" content="Хостел, отель, гостиница, Питер, СПб, Санкт-Питербург" />
</head>
<body>
	
	<div class="loader">
		<div class="loader_inner"></div>
	</div>

  <header class="main_head main_color_bg" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/img/bcg.jpg" data-z-index="1">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="logo_container">
					<nav class="main-mnu hidden-md hidden-sm hidden-xs">
						<ul>
							<li class="m-mnu"><a href="#about_us">О нас</a></li>
							<li class="m-mnu"><a href="#about">Номера</a></li>
							<li class="m-mnu"><a href="">Забронировать</a></li>
							<li class="m-mnu"><a href="#portfolio">Галерея</a></li>
							<li class="m-mnu"><a href="#review">Отзывы</a></li>
							<li class="m-mnu"><a href="#map">Как добраться</a></li>
							<li class="m-mnu"><a href="#contacts">Контакты</a></li> 
						</ul>
					</nav> 
					<?php dynamic_sidebar('logo'); ?>
				</div>
				<button class="toggle_mnu">
					<span class="sandwich">
						<span class="sw-topper"></span>
						<span class="sw-bottom"></span>
						<span class="sw-footer"></span>
					</span>
				</button>
				<nav class="top_mnu">
					<ul>
						<li><a href="#resume">Ваши выгоды</a></li>
						<li><a href="#about">Варианты размещения</a></li>
						<li><a href="#price">Акции</a></li>
						<li><a href="#portfolio">Галерея</a></li>
						<li><a href="#contacts">Контакты</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	<div class="top_wrapper">
		<div class="top_descr">
			<div class="top_centered">
				<div class="top_text">
					<h1><?php echo get_bloginfo('name'); ?></h1>
					<p><?php echo get_bloginfo('description'); ?></p>
				</div>
			</div>
		</div>
	</div>
</header>