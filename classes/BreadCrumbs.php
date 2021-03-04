<?php
 
class BreadCrumbs {
 
   public static function the_breadcrumb() {
						$parent_name = Category::findParentCategory();
						
        if (!is_home()) {
            echo '<nav class ="breadcrumb">';
            echo '<a class = "breadcrumb-item" href="';
            echo get_option('home');
            echo '">';
            echo 'Forside';
            echo "</a>";
			if(is_page()&& !is_home()) {
				echo '<a href = "'.wp_get_referer().'/'.'" class = "breadcrumb-item">Forrige</a>';
			}
				if (is_category() || is_single()) {
			
				echo '<a href = "'.get_site_url().'/'.$parent_name.'" class = "breadcrumb-item">'.$parent_name.'</a>';
		
					if (is_single()) {
						echo '  <span class = "breadcrumb-item">';
						the_title();
						echo '</span>';
					}
				} elseif (is_page()) {
			 		echo '<span class = "breadcrumb-item">';
			 		echo ' / '.the_title();
					echo '</span>';
				   }
			   }
							elseif (is_tag()) {single_tag_title();}
							elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
							elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
							elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
							elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
							elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
							elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
							echo '</nav>';
}

			
 }



?>