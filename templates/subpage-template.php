<?php /* Template Name: Projekt underside */ 

get_header(); ?>
    <?php $page_id = "ups"?>
	<main role="main">
		<!-- section -->
		<section>


		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="container container-height">
  <!-- PROJEKT MENU-->
  
  <!-- END PROJEKT MENU-->
<div class="row">
<div class = 'col-lg-2'></div>
<div class="col-lg-8 main-con ">
     <?php if (has_post_thumbnail( $post->ID ) ): ?>
	 
     <img style = "margin-top:20px;margin-bottom: 10px;" class = "projekt-logo img-rounded" src = "<?php echo get_the_post_thumbnail_url($post->ID); ?>" width = "200px;"/>
	 <?php endif; ?>
    <p class="text-justify clearfix"><?php the_content();?></p>
    <hr/>
    


</div>

<div class = "col-lg-2"></div>
</div>
<div class="row">
<div class = 'col-lg-2'></div>
<div class="col-lg-8 main-con ">
    
		
  <div class = "row">
	<div class="col-sm-5"></div>
  <div class="col-sm-3"><h5>Med støtte fra</h5></div>
  <div class="col-sm-4"></div>
  </div>

<div class = "row">
<div class="col-sm-5"></div>
<div class="col-sm-2"><?php dynamic_sidebar( 'UPS sponsorer' ); ?></div>
<div class="col-sm-5"></div>
</div>


</div>

<div class = "col-lg-2"></div>
</div>


				

			

			
				

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
