<?php

class CtaButton {
   
    
    public function ctaButton($attr = array()){
          $attr = shortcode_atts( array( 'btnurl' => 'default url','text'=> 'Knaptext','id'=> 'default'),
		        $attr,'ctabutton' );
         $output = '<a id = "'.$attr['id'].'"  style = "text-align:center" class = "btn  btn-secondary shadow-lg cta-btn "
         href = "'.$attr['btnurl'].'"><span class = " text-center text-uppercase ">'.$attr['text'].'</span></a>' ;
         
         return $output;
         
    }
      
    
    
}

$ctaBtn = new CtaButton();
add_shortcode('ctabutton',array( $ctaBtn, 'ctaButton' ));

?>