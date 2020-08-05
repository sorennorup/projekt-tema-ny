<?php
 
class PostView {
	  
	public function getPostList( $attr,$numCols ){
		$output;
	  	global $post;
	  	$count = 1;
	 	$attr = shortcode_atts( array( 'cat' => 'default cat ','colsize'=> 2),
		        $attr,'getpostsoutput' );
		$args = array( 'category'=> $attr['cat'],$attr['colsize'],'posts_per_page' => -1000 );
		$allposts = get_posts( $args ); 
		$output .= '<div class = "row">';
	
		foreach( $allposts as $post ): setup_postdata( $post );
			$count = 1; 
			$cols = $this->numberOfCols( $attr['colsize'] ); 
			$output .= '<div class = "col-lg-'.$cols.' mb-2">';
			$output .= '<a href="'.get_the_permalink().'" title="'.$post->post_title.'">';
			$output .= '<div class = "card card-hover h-100">';
			$output .= $this->cardHeader( $post->post_title,'bg-1' );
			$count++;
			$output .= $this->cardBody( $attr ); 
			$output.= $this->cardFooter();
	
		endforeach; 
		return $output;
	}

	public function displayTimelines($attr = array()) {
		$output;
		?> <ul class="nav nav-tabs">     <?php
		$count = 0;
		foreach ($attr as $menu_item){
			if( $count === 0 ){
				$first = 'first-load';
			 } else{
				$first = "";
			 }
			 ?><li class = "get-posts <?php echo $first ?> " id = "<?php echo $menu_item['id']?>"><?php echo $menu_item['name'] ?></li>
			 <input name = "post_sort" type = "hidden"> <?php  $menu_item['post_sort'] ?> </input>
			 <?php
			 	$count++;	
		}
?>
		</ul>
		<!-- Renders all the posts with a certain category -->
	 	<div id = "post-view"></div> 
<script>
	let postID = '<?php echo $attr[0]['id']?>';
	let order = '<?php echo $attr[0]['post_sort']?>'; 
	
	$(document).ready(function(){
		 $('.first-load').addClass('active');
		$.ajax({
			type: 'POST',
			url: '<?php echo admin_url('admin-ajax.php');?>',
			// add data type
			data: { action : 'get_timeline_posts', cat_id: postID, post_sort: order },
					success: function( response ) {
					$("#post-view").html(response).hide().fadeIn(1000);
				 }
		});
	});

	let previousActive;
	$(".get-posts").click(function(e){
		e.preventDefault();
		$('.first-load').removeClass('active');
		let id = e.target.id;
		if( previousActive!==  undefined ){
			previousActive.removeClass('active');
		}
		$(this).addClass('active');
		previousActive = $(this);
		$.ajax({
			type: 'POST',
			url: '<?php echo admin_url('admin-ajax.php');?>',
			// get_ajax_posts function is found in functions.php file
			data: { action : 'get_timeline_posts', cat_id: id, post_sort: order},
			success: function( response ) {
			$(id).addClass('active');
			$("#post-view").html(response).hide().fadeIn(1000);
			}
		});
		});
	</script>
		<?php
	}
	
	public function displayAjaxPosts($attr = array()){
		//print_r($attr);
		$output;
		?> <ul class="nav nav-tabs">     <?php
		$count = 0;
		foreach ($attr as $menu_item){
			if( $count === 0 ){
				$first = 'first-load';
			 } else{
				$first = "";
			 }
			 ?><li class = "get-posts <?php echo $first ?> " id = "<?php echo $menu_item['id']?>"><?php echo $menu_item['name'] ?></li>
			 <input name = "post_sort" type = "hidden"> <?php  $menu_item['post_sort'] ?> </input>
			 <input name = "view" type = "hidden"> <?php  $menu_item['view'] ?> </input>
			 <?php
			 	$count++;	
		}
?>
		</ul>
		<!-- Renders all the posts with a certain category -->
	 	<div id = "post-view"></div> 
<script>
	let postID = '<?php echo $attr[0]['id']?>';
	let order = '<?php echo $attr[0]['post_sort']?>'; 
	let view = '<?php echo $attr[0]['view']?>'; 
	
	$(document).ready(function(){
		$('.first-load').addClass('active');
		$.ajax({
			type: 'POST',
			url: '<?php echo admin_url('admin-ajax.php');?>',
			// add data type
			data: { action : 'get_ajax_posts', cat_id: postID, post_sort: order,time_view: view },
			success: function( response ) {
				$("#post-view").html(response).hide().fadeIn(1000);		
			}
		});
	});

	let previousActive;
	$(".get-posts").click(function(e){
		e.preventDefault();
		$('.first-load').removeClass('active');
		let id = e.target.id;
		if( previousActive!==  undefined ){
			previousActive.removeClass('active');
		}
		$(this).addClass('active');
		previousActive = $(this);
		$.ajax({
			type: 'POST',
			url: '<?php echo admin_url('admin-ajax.php');?>',
			// get_ajax_posts function is found in functions.php file
			data: { action : 'get_ajax_posts', cat_id: id, post_sort: order, time_view: view},
			success: function( response ) {
			$(id).addClass('active');
			$("#post-view").html(response).hide().fadeIn(1000);
			}
		});
		});
	</script>
		<?php
		
	}

	private function numberOfCols($num){
		switch($num){
			case 1:
				return '10';
				break;
			case 2:
				return '6';
		    break;
			case 3:
				return '4';
			}
	}

	private function cardHeader($the_title,$style_class){
		$output = '<div class = "card-header '.$style_class.'">
				<h6>'. $the_title.' </h6></div>';
		return $output;
	}

	private function cardBody($attr){
		$output .= '<div class = "card-body justify-content-center">';
	if ( has_post_thumbnail()) : // Check if thumbnail exists 
	 	$output .= '<div class = "card-img-top text-center " >';
	 	$output .= get_the_post_thumbnail().'</div>';	
	endif; 
		$output .= '<div class = "card-text loop custom-excerpt-text">';
		$output .= html5wp_excerpt('html5wp_index');
	 	$output .= readmore(get_the_permalink($post->ID)).'</div>';	
	if($attr['cat'] != 8) : 
		$output .= '<span class="date">'. get_the_time('F j, Y').'</span>';
	endif;
	$output .= '</div>';	
	return $output;
	}

	private function cardFooter(){
		$output .= '</div></a></div>';
		return $output;
	}
}

$postview = new PostView();
add_shortcode( 'getpostsoutput', array( $postview, 'getPostList' ) );
?>