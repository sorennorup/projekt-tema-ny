<?php 
get_header(); ?>

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
  <?php echo  '<div class = "title-wrapper"><h1>'.get_the_title().'</h1>
  </div>';?>
   <?php BreadCrumbs::the_breadcrumb(); ?>
<div class="row main-row">

<div class = "col-lg-2"></div>
<div class="col-sm-8 main-con ">
	 
	
     <?php //if (has_post_thumbnail( $post->ID ) ): ?>
	 <?php //endif; ?>
	 <div class = "clearfix">
	

   <p> <?php the_content();?></p>
	</div>


    </div>

 <div class = "col-lg-2"></div>

</div>
<hr/>
<?php echo '<h1 > Nyheder </h1>'; ?>
<?php echo do_shortcode('[sc]'); ?>
<hr/>
<div class = "footer-before">
  <div class="footer-before__row"><h5>Med støtte fra</h5><?php dynamic_sidebar( 'UPS sponsorer' ); ?></div>
  <div class="footer-before__row"><a class = "all-access" href="http://www.adgangforalle.dk/" target="_blank"><img border="0" src="https://ungeipraksis.dk/wp-content/uploads/2019/06/43134-logo.jpg" width="120" alt="Vil du have teksten på vores hjemmeside læst højt, kan du hente et lille gratis program på www.adgangforalle.dk - (Åbner nyt vindue)"></a>
 <!-- Link til adgangforalle.dk - grafik (slut)  ---></div>
<div class="footer-before__row"><h5>En del af</h5><a href = "http://ungeværk.dk"><img src = "https://youth-it.cool/wp-content/uploads/2018/12/cropped-UV-fin-web-logo-thumb.png" width = "120"/></a></div>
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
