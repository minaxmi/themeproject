<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package wander
 */

get_header(); ?>
<section class="hero-fullscreen error-page overlay bg-img-1">  
	<div class="hero-container">  
		<div class="hero-content">   
				
			<h2 class="color subheading mt30"><?php esc_html_e('404','wander')?></h2>  
			<h1 class="large white mb30"><?php esc_html_e('Page Not Found','wander')?></h1>   
			<p class="white"><?php esc_html_e('The page you requested couldn\'t be found, it has been removed or moved and the URL was not changed accordingly.','wander')?></p> 
			<a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary btn-md mt40"><i class="ion-arrow-left-c"></i> <?php esc_html_e('Back to home page','wander')?></a>			
		</div>
	</div>    
</section>



<?php
get_footer();
