<?php /* Template Name: Tabs view */ ?>
<?php get_header(); ?>

	<main role="main">
		
		<!-- section -->
		<section>
         
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			
			<div class="container">
  <!-- PROJEKT MENU-->
  
  <!-- END PROJEKT MENU-->
<div class="row">
<?php echo '<h1 style = "margin-left: 15px;margin-top:20px;">'.get_the_title().'</h1>';?>
<div class="col-lg-12 content-main" >
	<div class = "row">
		<div class = "container mb-4">
		<?php BreadCrumbs::the_breadcrumb(); ?>
			<?php the_content(); ?>
		</div>
		<?php  $args = array();?>
		<?php
	if( $post->ID == 25 ){
		$args = array(		  
			array("id"=> 9,"name" => "Brancheorganisationer"),
			array("id"=> 10, "name" => "UU Centre"),
			array("id"=> 11, "name" => "Erhvervsskoler"),
			array("id"=> 13, "name" => "Virksomheder"),
			array("id"=> 12, "name" => "Grundskoler")
			);
	}
	if( $post->ID == 86 ) {
			$args = array(	
			array("id"=> 14,"name" => "Opstartsmøder"),
			array("id"=> 16, "name" => "Partnerskabsmøder"),
			array("id"=> 15, "name" => "Andre møder")
			);
	}
	if( $post->ID == 1250) {
		$args = array(  
			array("id"=>20, "name" => "UU Sjælsø", 'post_sort' => 'ASC', 'view' => 'timeline'),
			array("id"=>21, "name" => "UU Slagelse", 'post_sort' => 'ASC','view' => 'timeline'),
			array("id"=>23, "name" => "UU Frederica", 'post_sort' => 'ASC','view' => 'timeline'),
			array("id"=>24, "name" => "UU Roskilde", 'post_sort' => 'ASC','view' => 'timeline'),
			array("id"=>22, "name" => "UU Odder Skanderborg",'view' => 'timeline')
		);
	}
		$postView = new PostView();
		$postView->displayAjaxPosts($args); ?>
	</div>
</div>
  
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

