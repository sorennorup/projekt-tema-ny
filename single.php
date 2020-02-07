<?php get_header(); ?>
	<main role="main">
		<!-- section -->
		<section>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="container container-height">
				<?php BreadCrumbs::the_breadcrumb(); ?>
				<h2 style = "margin-top:20px;margin-bottom:40px;" ><?php the_title();?></h2>
		<div class="row">
			<div class="col-sm-8 ">
			<?php if (has_post_thumbnail( $post->ID ) ): ?>
	 		<?php endif; ?>
	 			<div class = "clearfix">
				 	<?php the_content();?>
				</div>
				<hr/>
		<div class = "row">
  			<div class="col-sm-12">
				<h4>Med støtte fra</h4>
			</div>
		</div>
   		<div class = "row">
		   <div class="col-sm-2">
		   <?php dynamic_sidebar( 'UPS sponsorer' ); ?>
		</div>
<div class="col-sm-4"></div>
<div class="col-sm-4"></div></div>

</div>
<div class = "col-sm-4 sidebar">
	<div class ="bg-2 card">
	<?php dynamic_sidebar( 'UPS seneste nyheder' ); ?>

    </div>
		 <div class = "bg-2 card">
	<?php $myWidget = new Widget();?>
    <?php $myWidget->displayResourcesWidget() ?>

    </div>
		 <p><a class = "all-access" href="http://www.adgangforalle.dk/" target="_blank"><img border="0" src="https://ungeipraksis.dk/wp-content/uploads/2019/06/43134-logo.jpg" width="120" height="26" alt="Vil du have teksten på vores hjemmeside læst højt, kan du hente et lille gratis program på www.adgangforalle.dk - (Åbner nyt vindue)"></a>
</p> <!-- Link til adgangforalle.dk - grafik (slut)  --->
En del af 
 <a href = "http://ungeværk.dk"><img src = "https://youth-it.cool/wp-content/uploads/2018/12/cropped-UV-fin-web-logo-thumb.png" width = "120"/></a>

	</div>

</div>


				<br class="clear">

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
