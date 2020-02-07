<?php /* Template Name: Post view */ ?>
<?php get_header(); ?>

	<main role="main">
		
		<!-- section -->
		<section>
         
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			
			<div class="container container-height">
  <!-- PROJEKT MENU-->
  
  <!-- END PROJEKT MENU-->
<div class="row">
      <?php echo '<h3 style = "margin-left:15px;">'.get_the_title().'</h3>';?>
	  
<div class="col-lg-11 " >
	      <div class = "row">
         <div id = "post-view"></div>
		 </div>
	 <?php if (has_post_thumbnail( $post->ID ) ): ?>

	 <?php endif; ?>
	     
     <?php the_content(); ?>
  
 <!-- The sponser view     --> 
 
</div>
<hr/>
<div class = "row">
  <div class="col-sm-12"><h5>Med støtte fra</h5></div>
  </div>

<div class = "row">
<div class="col-sm-2 sponsor-logo"><?php dynamic_sidebar( 'UPS sponsorer' ); ?></div>
<div class="col-sm-4"></div>
<div class="col-sm-4"></div>
</div>
  <!-- End the sponser view  -->  
 
</div>

			

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

