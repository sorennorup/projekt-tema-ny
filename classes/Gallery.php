<?php

class Gallery {

    public function addRandomHeader() {       
        
        function randomHeaderImage() {
            global $post;
            $post_meta = get_post_meta( $post->ID,'_meta_answer',true); 
            $thumb_url = get_the_post_thumbnail_url($post->ID);
            if($post_meta == '1'){
                $html = '<img src = "'.$thumb_url.'" width = "100%" />';
            } else {
                $images_array = array('gartner.jpg','Sjælsø-2.jpg','Kuverter.png','Indgang-ZBC.png','Uddeling-af-kuverter.png');
                $rand = rand(0, count($images_array)-1);
                $html = '<img src = "https://ungeipraksis.dk/wp-content/themes/Projekt-tema/Projekt-tema/images/'.$images_array[$rand].'" width = "100%" />';
             }
            echo $html;
        }

        add_action('jumbotron_hook','randomHeaderImage');
    }
}

$gallery = new Gallery();

$gallery->addRandomHeader();

?>