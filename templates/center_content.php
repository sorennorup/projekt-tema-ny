<?php /* Template Name: one-colum-center-content*/ get_header(); ?>

<?php

    //TO DO  CREATE FUNCTION  of this
	
	//TAKEs PARENT CAT ID AS ARGUMENT AND RETURNS ARRAY ALL CHILD CATEGORIES AND THEIR PROPERTIES
	$ressource_properties = array();
    $child_arg = array( 'hide_empty' => false, 'parent' => 2 );
    $child_cat = get_terms( 'category', $child_arg );
  
        foreach( $child_cat as $child_term ) {
			$url = get_category_link($child_term->term_id);
			
            $prop['num_posts'] = $child_term->count;
			$prop['url'] = $url;
			array_push($ressource_properties,$prop);      
		}       
?>
	
	
	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
            
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="container container-height">
  <!-- PROJEKT MENU-->
  
	
  <!-- END PROJEKT MENU-->
  <br/>


	 
	
     <?php //if (has_post_thumbnail( $post->ID ) ): ?>
	 <?php //endif; ?>
	 <?php if( !is_front_page() ): the_title('<h1>','</h1>'); ?>
	 <?php endif; ?>
     <div class = "container">
	 <?php 
if(!is_front_page()):?>
	<?php BreadCrumbs::the_breadcrumb(); 
	endif;?>
	<p><?php the_content(); ?></p>

</div>
	</div>
   
	</div>
	</div>
    <hr/>
   
 <div class = "pre-footer"><span>Med støtte fra </span><?php dynamic_sidebar( 'UPS sponsorer' ); ?></div>
 


 


           

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
