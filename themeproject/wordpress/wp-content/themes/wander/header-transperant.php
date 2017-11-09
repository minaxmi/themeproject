<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wander
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="<?php echo esc_url('http://gmpg.org/xfn/11');?>">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body>
<?php $dark_menu = rwmb_meta( 'dark_menu'); ?>

 <!-- Start Header -->
        <nav class="navbar navbar-default fullwidth transparent <?php if($dark_menu==1){ echo esc_html('dark-menu');}?>">
            <div class="container">
                
                <div class="navbar-header">
                    <div class="container">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only"><?php esc_html_e('Toggle navigation','wander');?></span>
                            <span class="icon-bar top-bar"></span>
                            <span class="icon-bar middle-bar"></span>
                            <span class="icon-bar bottom-bar"></span>
                        </button>
						
						<?php if ( wander_return_theme_option('logo_dark','url') ) { ?>
							
								<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><img class="logo-light logo text-left" src="<?php echo wander_return_theme_option('logo_light','url'); ?>" alt="<?php echo esc_html__('logo','wander');?>"/><img class="logo-dark logo text-left" src="<?php echo wander_return_theme_option('logo_dark','url'); ?>" alt="<?php echo esc_html__('logo','wander');?>"/></a>
							
						<?php }else{?>
							
							<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri();?>/img/assets/logo-light.png" class="logo-light" alt="#"><img src="<?php echo get_template_directory_uri();?>/img/assets/logo-dark.png" class="logo-dark" alt="#"></a>
						
						<?php } ?>
						
                         
                    </div>
                </div>
				<?php get_template_part('menu-section'); ?>
            </div>
        </nav>