<?php

class PostMetabox {

    function __construct(){
		add_action('add_meta_boxes', 'test');
     }
     
   public function test() {
       
    add_meta_box(
           "box_id",
           "custom_thumb",
           "cont_callback",
           "post"
       );

       function cont_callback($post) {
        echo '<label for="buy-ticket-url">';
        _e( '<h4>Eventuelt link</h4>', 'myplugin_textdomain' );
        echo '</label> ';
        echo '<input type="text" id="ticketurl" name = "url" value=" test" size="50" />';
     
       }
   }

  
      
}
 $newPostMetabox = new PostMetabox();

?>
