<?php get_header(); ?>

	<main role="main">
		<?php  $args = array("child_of" => 3);?>
		
	
        <div class = "container">
			
			 <h3><?php _e( '', 'html5blank' ); single_cat_title(); ?></h3>
			<?php if($parent_id == 3) :?>
			<div class = "container">
				<div class = "row">
				<h3><?php _e( '', 'html5blank' ); single_cat_title(); ?></h3>
		    “Unge i praksis” udvikles og gennemføres i et samarbejde mellem UU DANMARK, 5 UU centre/kommune,
			samt brancheforeninger som Danske Maritime, Dansk Byggeri, Plastindustrien, World Careers og Danske Erhvervsskoler- og Gymnasier.
			<p></p>
			<p></p>
			
			</div>
			
			
			
			
  <ul class="nav nav-tabs">
				<?php foreach($categories as $category){?>
			
	  <?php echo ' <li class = "active"><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a></li>  ';
	
	} ?>
			</ul>
  <?php endif; ?>
			<div class = "row">
				
			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>
			</div>
		</div>
		</div>
		</div>
	</main>


<?php get_footer(); ?>
