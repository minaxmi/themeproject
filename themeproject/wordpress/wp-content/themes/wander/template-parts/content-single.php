<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wander
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


<section class="blog-page-content pad-top pad-bottom white-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-sm-9">

				<div class="row">
					<div class="col-md-12">			
						<div class="video-blog resize-video">
							<?php the_post_thumbnail();?>
						</div>						
						<div class="blog-list-item-details add-min-top-half">
							<?php
								the_title( '<h3 class="light-black font1">', '</h1>' );
															
								the_content();

								wp_link_pages( array(
									'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wander' ),
									'after'  => '</div>',
								) );
							?>
						</div>
					</div>
				</div>
				<?php 
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				
				?>
			</div>
			
			<div class="col-md-3 col-sm-3 col-xs-12">
				<?php get_sidebar();?>
			</div>
		</div>
	</div>
</section>
</div>
