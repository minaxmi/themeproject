<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wander
 */

?>
			
	<footer id="footer-1">
		<div class="footer-columns">
			<div class="container">
				<div class="row">

					<div class="col-md-3">
						<?php if ( is_active_sidebar( 'sidebar-2' ) ) { 
				              dynamic_sidebar( 'sidebar-2' ); 
				            } ?>
					</div>

					<div class="col-md-3">
						<?php if ( is_active_sidebar( 'sidebar-3' ) ) { 
				              dynamic_sidebar( 'sidebar-3' ); 
				            } ?>						
					</div>

					<div class="col-md-3">
						<?php if ( is_active_sidebar( 'sidebar-4' ) ) { 
				              dynamic_sidebar( 'sidebar-4' ); 
				            } ?>
					</div>

					<div class="col-md-3">
						<?php if ( is_active_sidebar( 'sidebar-5' ) ) { 
				              dynamic_sidebar( 'sidebar-5' ); 
				            } ?>
					</div>

				</div>
			</div>  
		</div>

		<div class="footer-copyright">
			<div class="container">
				<div class="row">

					<div class="col-md-6 col-sm-12">
					
						
						<?php if ( wander_return_theme_option('copyright') ) { ?>
				
							<p><?php echo wander_return_theme_option('copyright'); ?></p>
						
						<?php }else{ ?>
						
							<p><?php esc_html_e('© 2016 ','wander')?><a href="<?php echo esc_url(home_url('/')); ?>" class="logo"><?php esc_html_e('Wander','wander')?></a><?php esc_html_e(' All Rights Reserved. ','wander')?></p>
							
						<?php } ?>
					</div>
					<div class="col-md-6 col-sm-12">
						<ul class="social-icons">
					<?php
					
					$social_icons = wander_return_theme_option ( 'social_icons' );
					
					$social_links = wander_return_theme_option ( 'social_links' );
					$social_links = explode ( ',', $social_links );
					
					$grab = false;
					$count = 0;
					if (isset ( $social_icons )) {
						$social_html = '';
						foreach ( $social_icons as $key => $icon ) {
							$link = isset($social_links [$count]) ? $social_links [$count] : '#';
							if ($icon != '') {
								$social_html .= '
								<li><a href="' . esc_url ( $link ) . '"><i class="icon ' . esc_attr ( $key ) . '"></i></a></li>';
								$grab = true;
							}
							$count ++;
						}
						
						if ($grab) {
								echo wp_kses($social_html, array( 'li'=> array('class' => array()), 'a'=> array( 'href' => array()), 'i'=> array('class' => array()) ) );
							
						}
					}
					?>
						</ul>
					</div>
				</div>
			</div>
		</div>

	</footer>
	<!-- Start Back To Top -->
	<a id="back-to-top"><i class="icon ion-chevron-up"></i></a>
	<!-- End Back To Top -->
		<div id="search-modal" class="zoom-anim-dialog mfp-hide">
		<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) );?>">
			<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="search-modal-input" placeholder="<?php echo esc_html__('Start typing to search...','wander'); ?>" autocomplete="off" />
		</form>
	</div>
<?php wp_footer(); ?>

</body>

</html>
