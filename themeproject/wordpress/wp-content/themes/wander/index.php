<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wander
 */

get_header(); ?>


	<section class="blog">
            <div class="container">
                <div class="row">     

                    <div class="col-md-9"> 

                        <ul class="blog-standard">

					<?php
					if ( have_posts() ) :

						if ( is_home() && ! is_front_page() ) : ?>
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>

						<?php
						endif;

						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', 'blog' );

						endwhile;
wp_reset_postdata();
						?><div class="hidden"><?php the_posts_navigation();?></div><?php

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>
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

<?php get_footer();
