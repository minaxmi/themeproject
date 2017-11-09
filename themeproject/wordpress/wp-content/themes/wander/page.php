<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wander
 */

global $post;
$slider = rwmb_meta( 'wander_slider'); 

if($slider == 'banner'){
	get_header('transperant');
	get_template_part('page-banner'); 
}elseif($slider == 'slider_1' || $slider == 'slider_2' || $slider == 'slider_3' || $slider == 'slider_4' || $slider == 'slider_5' || $slider == 'slider_6' || $slider == 'slider_7' || $slider == 'slider_8'){
	get_header('transperant');
	get_template_part('page-slider'); 
}else{
	get_header();
} 

?>

<?php while(have_posts() ) : the_post(); 
the_content();
 endwhile; wp_reset_postdata(); ?> 
<?php
get_footer(); ?>
