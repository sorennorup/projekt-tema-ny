<?php

class Gallery {

    public function addRandomHeader() {
        
        function randomHeaderImage() {
            $images_array = array('gartner.jpg','Sjælsø-2.jpg','Kuverter.png','Indgang-ZBC.png','Uddeling-af-kuverter.png');
            $rand = rand(0, count($images_array)-1);
            $html = '<img src = "https://ungeipraksis.dk/wp-content/themes/Projekt-tema/Projekt-tema/images/'.$images_array[$rand].'" width = "100%" />';
            echo $html;
        }
        add_action('jumbotron_hook','randomHeaderImage');
    }
}

$gallery = new Gallery();

$gallery->addRandomHeader();

?>