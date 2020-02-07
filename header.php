﻿
<!doctype html>
<html> 
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		
		<?php include_once('classes/Widgets.php'); ?>
		<?php include_once('classes/Logo.php'); ?>
		<?php include_once('classes/PostView.php'); ?>
		<?php include_once('classes/Category.php'); ?>
		<?php include_once('classes/BreadCrumbs.php'); ?>
		<?php include_once('elements/CtaButton.php'); ?>
		<?php include_once('classes/Menu.php'); ?>


		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<?php wp_head(); ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>  

		
		
		<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="06e7cf7a-c275-4a06-a002-c3faa99d27ab" type="text/javascript" async></script>

 	<!-- Global site tag (gtag.js) - Google Analytics -->
		<script type= "text/plain" data-cookieconsent="statistics" async src="https://www.googletagmanager.com/gtag/js?id=UA-46938234-4"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', 'UA-46938234-4');
		</script>
	</head>
		
	<body>
	<div class = 'mobile-body'></div>
	<header id = "mobile-header">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<div class = "burger"> <i class="fa fa-bars fa-lg"></i></div>
		<div style = "display:none;" class="topnav" id="myTopnav"> <div class = 'close-btn'>Luk</div> 
		 <?php $newmenu->sideBarMenu('Mobil menu'); ?>
		</div>
	</header>

		
		<div class = "body-for-mobile"> 
		<?php $imageUrl = "https://ungepåsporet.nu/wp-content/uploads/2018/03/" ?>
			<div class="jumbotron single-page-header">
			<div class ="button-container">
				<a class = "btn  btn-secondary shadow-lg cta-btn " href = "<?php echo get_site_url(); ?>/for-virksomheder/">
			<span class  = "text-uppercase" >For virksomheder</span></a>
		 <a class = "btn  btn-secondary shadow-lg cta-btn " href = "<?php echo get_site_url();?>/parentspage/parents.html"><span class = " text-center text-uppercase ">For forældre</span></a>
		</div>
		<div class = "col-xs-12">
			<div class = "overlay"></div>
	</div>

		<div class = "page-title">
				<a href = "<?php echo get_home_url(); ?>"><img class = "projekt-logo img-rounded" src = "<?php echo get_site_url(); ?>/wp-content/uploads/2018/07/UIP-fin-w300.png"/></a>
								<div class = "site-info">
					<!--<a class = "btn btn-primary btn-lg" href = "<?php echo get_site_url(); ?>">Om projektet</a>-->

				</div>
				
		</div>
	
	</div>

</div> 