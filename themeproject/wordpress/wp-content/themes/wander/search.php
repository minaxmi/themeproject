<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package wander
 */

get_header(); ?>
<?php if ( have_posts() ) : ?>

<section class="blog">
            <div class="container">				
				<div class="row">     

                    <div class="col-md-9"> 

                        <ul class="blog-standard">
							<?php
						

								if ( is_home() && ! is_front_page() ) : ?>
									<header>							
										<?php the_archive_title( '<h1 class="page-title white font1">', '</h1>' ); ?>
										<?php the_archive_description( '<p class="page-sub-title white font4">', '</p>' ); ?>
									</header>

								<?php
								endif;

								while ( have_posts() ) : the_post();

									get_template_part( 'template-parts/content', 'search' );

								endwhile;
								wp_reset_postdata();
								?><div class="hidden"><?php the_posts_navigation();?></div><?php
							?>
						</ul> 
					<div class="col-md-12 text-center">
						<?php
							if (function_exists("wander_pagination")) {
								wander_pagination();
							}
						?>
					</div>
				</div>
				<div class="col-md-3 sidebar">
					<?php get_sidebar();?>				
				</div>
			</div>
		</div>
				

	</section>
<?php else : ?>
<div class="no_result container">				
	<div class="row">     

		<div class="col-md-12"> 
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php get_footer();