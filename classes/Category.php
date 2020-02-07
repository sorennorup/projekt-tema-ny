<?php


class Category{
    
    public static function findParentCategory(){
		$get_cat = get_the_category();
        $parent_name = "";
        foreach($get_cat as $cat){
            if($cat->parent == 0){
                $parent_name = $cat->name;
				return $parent_name;
            }
        }
		return null;
	 }
	
	public function getNumberOffPosts($menu_title){
       $ressource_properties = array();
       $arg = array( 'hide_empty' => false );
       $cats = get_terms( 'category', $arg );
       $trimed_title = (string) preg_replace("/[^a-zA-Z]/",'', $menu_title);
        foreach( $cats as $terms ) {
			$trimed_name = preg_replace("/[^a-zA-Z]/", '',$terms->name );
		    
			if($trimed_title == $trimed_name || $trimed_title == "PREvents"){
				return $terms->count;
				}
		    
		}
	     return '1';
		
	}
	
	
    
    
    
}
	$category_class = new Category();






?>