<?php

class Menu {
  private $menu_name;
	
    public function customMenu($menu_name){
		global $post;
		$navarray = $this->getMenu($menu_name);
		echo '<ul class="nav nav-tabs main-menu ">';
		foreach($navarray as $navitem){
		  	if($navitem->post_parent == 0 ){
	      		if($this->isActive($post,$navitem)){
					echo ' <li class="nav-item active-this">';
				}
?>	  			<a class="nav-link active"  href="<?php echo $navitem->url; ?>">
				<?php  echo $navitem->title; ?>
				<?php  echo ' </a> </li>'; 
		 	}  
		} 
					echo '<div style = "position:absolute;left:0;z-index:-1;" id = "sub-menu-container">';
					$this->displaySubmenuItems();
					echo '</div>';
					echo '</ul>';
	}
    
	public function AdvancedBurgerMenu($menu_name){
		echo '<div class = "nav-menu-outer"><div class = "nav-wrapper">'. $this->clean_custom_main_menu(
					$menu_name,
					'nav-inner',
					'nav-item-mobile',
					'animate-mobile-item',
					'nav-inner-children'
		);
		echo '</div></div>';
	}
	

    public function sidebarMenu($menu_name){
					echo   $this->clean_custom_main_menu($menu_name,'list-group','list-group-item','item-animate-sidebar','list-group');
		}
		
		public function mainDropdownMenu($menu_name){
			   echo  $this->clean_custom_main_menu(
										$menu_name,
										'nav nav-tabs',
										'nav-item nav-link',
										'item-animate-main-menu',
										'item-sublist'
				);
			
		}

    private function getMenu($menu_name){
					return $navarray = wp_get_nav_menu_items($menu_name);
    }
    
    private function displaySubmenuItems(){
					global $post;
					$childItems = $this->getSubmenuItems($post);
					if($childItems){
	
					echo '<ul style = "display:none;margin-left:300px;margin-top:40px;background-color:rgba(255, 255, 255, 0.8);padding:5px;" class="nav slide-items nav-pills">';
	
					foreach($childItems as $child){
							echo '<li class = "nav-link "><a href="'.$child->guid.'">'.$child->post_title.'</a></li>';
					}
							echo '</ul>';
			}
	} 
   
    private function getSubmenuItems($post){
	 
	$children = get_pages(array('child_of'=> $post->ID));
	if(count($children) == 0){
		return false;
	}
	else {
		 return $children;
	}
   }
   
   
   private function isActive($post,$item){
	  if($item->title == $post->post_title){
		return true;
	  }
	  else{
		return false;
	  }
   }

	private function isParent($item){
			if ($item->menu_item_parent == 0) {
			return true;
			}
		}

	private function clean_custom_main_menu($menu_name,$ul_class_name,$li_class_name,$animate_class,$sub_list) {
    	$menu_list = '<nav class = "'.$ul_class_name.'" class ="menu">';
		if ($menu_items = $this->getMenu($menu_name)) { 
			$count = 0;
			$id_num = 1;
			$submenu = false;
			$parent_id = 0;
			$previous_item_has_submenu = false;
				foreach ((array) $menu_items as $key => $menu_item) {
					$title = $menu_item->title;
					$url = $menu_item->url;
					// object_id is the id of the post that belongs the menu item
					$id = $menu_item->object_id;
					// check if it's a top-level item
					if ($this->isParent($menu_item)) {
						$parent_id = $menu_item->ID;
						// If the next item is not parent, then this menuitem show the menutitle without a "href" attribute
						if(!$this->isParent($menu_items[$count+1])){
		  				 // write the item but DON'T close the A or LI until we know if it has children!
							$menu_list .='<div id = "'.$id_num.'" class = "'.$li_class_name.' parent-item '.$animate_class.' no-hover-background"><a class = "parent-link "><a href = "'.$url.'" class = "parent_link '.$animate_class.'"> '. $title;
							$id_num++;
						}
					// If the next item is parent then give the title a link
					elseif($this->isParent($menu_items[$count+1])){
						$menu_list .='<div class = "'.$li_class_name.' parent-item '.$animate_class.' no-link-color"><a href = "'.$url.'" class = "parent_link '.$animate_class.'">  '. $title;
					}
				}
	
				// if this item has a (nonzero) parent ID, it's a second-level (child) item
				else {
					if ( !$submenu ) { // first item
						// add the dropdown arrow to the parent
						$menu_list .= '</a>';
						// start the child list
						$submenu = true;
						$previous_item_has_submenu = true;
						$menu_list .= '<div class="sub '.$sub_list.'">';
		   			}

					$menu_list .= '<div class = "'.$li_class_name.' sub-item">';
					$menu_list .= '<a id = '.$id.' href="'.$url.'"class="title">'.$title.'</a>';
					$menu_list .= '</div>';
					// if it's the last child, close the submenu code
					if ( $menu_items[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ){
					$menu_list .= '</div></div>';
					$submenu = false;
				}
		}

		// close the parent (top-level) item
		if (empty($menu_items[$count + 1]) || $menu_items[ $count + 1 ]->menu_item_parent != $parent_id )
		{
		   if ($previous_item_has_submenu)
			{
				// the a link and list item were already closed
				$previous_item_has_submenu = false; //reset
			}
			else {
				// close a link and list item
				$menu_list .='</a></div>';
			}
		}

		$count++;
	}
} else {
	 $menu_list .= '<!-- no list defined -->';
}
$menu_list .= '<div class = ""></nav>';
return $menu_list;
}

}
	
$newmenu = new Menu();



?>



