<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wander
 */

?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wander' ),
				'after'  => '</div>',
			) );
		?>
			
	
	
		<?php
			edit_post_link(
				sprintf(
					esc_html__( 'Edit %s', 'wander' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	
</div>
</section>