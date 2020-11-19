
<!doctype html>
<html> 
	<head>
	<?php wp_head(); ?>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:300,400,400i,500,600,700" rel="stylesheet">
		
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
	<header id = "header" class = "wrapp">
	<div class = "test"> </test>
		
		<div class = "header__left"></div>

		<a class = "header__center" href = "<?php echo get_home_url(); ?>"><img class = "projekt-logo img-rounded" src = "<?php echo get_site_url(); ?>/wp-content/uploads/2018/07/UIP-fin-w300.png"/></a>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<div class = "burger__background header__right ">
			<div class = "header-link__container">	
				<a class = "header-link"  href = "<?php echo get_site_url(); ?>/for-virksomheder/">
				<span class  = "text-uppercase" >Til virksomheder</span></a>
			 	<a class = "header-link" href = "<?php echo get_site_url();?>/foraeldre"><span class = " text-center text-uppercase ">Til forældre</span></a>
			</div>
			<div class = "burger"> <i class="fa fa-bars fa-lg"></i></div>
		</div>
		
		<div style = "display:none;" class="topnav" id="myTopnav"> <div class = 'close-btn'>Luk</div> 
		 <?php $newmenu->sideBarMenu('Mobil menu'); ?>
		</div>
	</header>
	
	
	<div class = "body-for-mobile"> 
		<div class="jumbotron single-page-header">
			<?php if(is_front_page()){ ?>
				<div class = "video__wrapper" >
				<video class = "video" width="100%" preload = "auto" loop = "true" >
				<source src="https://ungeipraksis.dk/wp-content/uploads/2020/05/UIP-banner-short.mp4" type="video/mp4">
 				Your browser does not support the video tag.
				</video> 
				</div>
			<?php } 
				else {?>
				<div class = "video__wrapper" >
				<?php jumbotron_hook(); ?>    
			<?php }?>
			</div>
		
	</div>
</div> 
