<?php 

class SubMenuBox {

    public function menuBox($attr) {
        global $post;
        $attr = shortcode_atts( array( 'name' => 'default name','subtitle' => 'skriv '),
		        $attr,'getsubmenu' );
        $navarray = wp_get_nav_menu_items($attr['name']);
        return $this->setMenuView($navarray);
    }

    private function setMenuView($arr){
        global $post;
        
        $output = '<div class = "pre-menu">';
        foreach($arr as $nav) {
            $excerpt = get_the_excerpt($nav->object_id);
            $output .= '<a class = "column card-hover" href = "'.$nav->url.'"><div class = "layer"></div><h2>'.$nav->title.'</h2><p>'.$excerpt.'</p></a>';
            
        }
        
        $output .= '</div>';
        return $output;
    }

    private function getMenuExerpt($id){
        $page_content = get_post($id);
        return $page_content;
    }
    
}

$sub_menu = new SubMenuBox();
add_shortcode( 'getsubmenu', array( $sub_menu, 'menuBox' ) );


?>