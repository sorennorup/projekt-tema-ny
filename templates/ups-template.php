<?php /* Template Name:Unge på sporet template*/ get_header(); ?>

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

<div class="row main-row">
	

<div class="col-sm-8 main-con ">
	 
	
     <?php //if (has_post_thumbnail( $post->ID ) ): ?>
	 <?php //endif; ?>
	 <div class = "clearfix">
    <?php the_content();?>
	</div>
    <hr/>
   
 <div class = "row">
  <div class="col-lg-12"><h5>Med støtte fra</h5></div>
  </div>

<div class = "row">
<div class="col-lg-2"><?php dynamic_sidebar( 'UPS sponsorer' ); ?></div>
<div class="col-lg-4"></div>
<div class="col-lg-4"></div>
</div>

    </div>
<div class="col-sm-4 sidebar sidebar-margin-top ">
	<?php if(!is_front_page()):?>
	 
	<div class ="bg-2 card">
      
	  <?php dynamic_sidebar( 'UPS seneste nyheder' ); ?>

    </div>
	<?php endif; ?>
    <!--<div class = "bg-2 card ">
    
  <?php $myWidget = new Widget();?>
  <?php // $myWidget->displayResourcesWidget();  ?>
    </div>-->
	<div class = "bg-1 card">
      <?php dynamic_sidebar( 'Stamoplysninger' ); ?>
    </div>
	<p><a class = "all-access" href="http://www.adgangforalle.dk/" target="_blank"><img border="0" src="https://ungeipraksis.dk/wp-content/uploads/2019/06/43134-logo.jpg" width="120" height="26" alt="Vil du have teksten på vores hjemmeside læst højt, kan du hente et lille gratis program på www.adgangforalle.dk - (Åbner nyt vindue)"></a>
</p> <hr/><!-- Link til adgangforalle.dk - grafik (slut)  --->
En del af 
 <a href = "http://ungeværk.dk"><img src = "https://youth-it.cool/wp-content/uploads/2018/12/cropped-UV-fin-web-logo-thumb.png" width = "120"/></a>
 <hr/>

    
    
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
