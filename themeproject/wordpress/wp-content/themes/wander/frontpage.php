<?php
/*
Template name: Frontpage Template
*/

 get_header(); 
 
?>
	 
<?php	 
	 
		if ( ( $locations = get_nav_menu_locations() ) && $locations['onepage'] ) {
			$menu = wp_get_nav_menu_object( $locations['onepage'] );
			$menu_items = wp_get_nav_menu_items($menu->term_id);
			$included_item = array();
			foreach($menu_items as $item) {				
				
				if(!in_array("notsingle", $item->classes))		
					if($item->object == 'page')				
						$included_item[] = $item->object_id;					
			}
			
			$main_query = new WP_Query( array( 'post_type' => 'page', 'post__in' => $included_item, 'posts_per_page' => count($included_item), 'orderby' => 'post__in' ) );
			
		while ($main_query->have_posts()) : $main_query->the_post();
		

		$post_name = $post->post_name;
		
		$post_id = get_the_ID();?>

			<div id="<?php echo esc_attr($post->post_name);?>" class="<?php echo esc_attr($post->post_name);?> nav-highlight">
				 
				<?php the_content('');?>
				
			</div>
		   
		<?php endwhile; wp_reset_query(); }?>

 <?php get_footer();?>