<?php

class Widget {
	
    //Display the Categorymenu with the postcount and the markup of selected category
    public function displayResourcesWidget(){
        $ressource_properties = $this->countCategoryPosts(); ?>
       
	<ul class="list-group">
		<a href = "https://ungeipraksis.dk/om-projektet/"><?php $this->markCurrentTerm(1); ?>
		<!--<a href = "<?php //echo $ressource_properties[1]['url']; ?>"> <?php //$this->markCurrentTerm(7); ?>-->
		Om projektet
		<!--<span class="badge badge-secondary badge-pill"><?php //echo $ressource_properties[1]['num_posts']; ?></span>-->
	 </li></a>
		<a href = "https://ungeipraksis.dk/projektpartnere/"><?php $this->markCurrentTerm(4); ?>
		<!--<a href = "https://ungeipraksis.dk/projektpartnere/"> <?php $this->markCurrentTerm(4); ?>-->
		Projektpartnere
		
     </li></a>
		
		 <a href = "https://ungeipraksis.dk/arrangementer/"><?php $this->markCurrentTerm(5);?>
       Arrangementer
      <!-- <span class="badge badge-secondary badge-pill"><?php //echo $ressource_properties[0]['num_posts'];?></span>-->
     </li></a>
  
		
		<a href = "https://ungeipraksis.dk/produkter/"><?php $this->markCurrentTerm(1); ?>
		<!--<a href = "<?php //echo $ressource_properties[1]['url']; ?>"> <?php //$this->markCurrentTerm(7); ?>-->
		Produkter
		<!--<span class="badge badge-secondary badge-pill"><?php //echo $ressource_properties[1]['num_posts']; ?></span>-->
	 </li></a>
		
		<!--<a href = "<?php //echo $ressource_properties[3]['url']; ?>"> <?php //$this->markCurrentTerm(8); ?>-->
		<a href = "https://ungeipraksis.dk/referencer/"> <?php $this->markCurrentTerm(8); ?>
		Referencer
		<!--<span class="badge badge-secondary badge-pill"><?php //echo $ressource_properties[3]['num_posts']; ?></span> -->
	 </li></a>
   
	</ul>
       <?php 
    }
      // Count the number of post in the current category
      // Remember to set the parent cat_id to the right value
    private function countCategoryPosts(){
      $ressource_properties = array();
      $child_arg = array( 'hide_empty' => false, 'parent' => 5 );
      $child_cat = get_terms( 'category', $child_arg );
      
  
        foreach( $child_cat as $child_term ) {
			$url = get_category_link($child_term->term_id);
			
            $prop['num_posts'] = $child_term->count;
			$prop['url'] = $url;
			array_push($ressource_properties,$prop);      
		}
        return $ressource_properties;
    }
	 // Add a background-color to the current term list item
	private function markCurrentTerm($num){
		
		if($this->checkCurrentTerm($num)){
			//If true add the bg-1 class
		?><li class="list-group-item bg-2 d-flex justify-content-between align-items-center"><?php
		}
		else {
	       // Else add the list-group
		?><li class="list-group-item  d-flex justify-content-between align-items-center"><?php
		}
	}
    
    private function checkCurrentTerm($n){
		// Get the current post object
		global $post;
		// Get the category of the current postobject
        $postcat = get_the_category( $post->ID );
		// If the first term id equals the arument number return true
		if($postcat[0]->term_id == $n){
			return true;
		}
		// Else return false
		else {
			return false;
		}
	}
    
}


?>



