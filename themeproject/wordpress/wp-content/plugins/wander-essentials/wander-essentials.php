<?php
/*
Plugin Name: wander Essentials
Plugin URI: http://wordpress.org/extend/plugins/wander-essentials/
Description: Visual Composer Shortcodes for wander theme
Author: wander
Author URI: http://wordpress.org/
Version: 1.0
Text Domain: wander-essentials
License: GPL version 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

require dirname( __FILE__ ) . '/shortcodes.php';

require dirname( __FILE__ ) . '/vc_shortcodes/wander_aboutus.php';
require dirname( __FILE__ ) . '/vc_shortcodes/wander_gap.php';
require dirname( __FILE__ ) . '/vc_shortcodes/wander_sponsor.php';
require dirname( __FILE__ ) . '/vc_shortcodes/wander_sponsor_section.php';
require dirname( __FILE__ ) . '/vc_shortcodes/wander_title.php';
require dirname( __FILE__ ) . '/vc_shortcodes/wander_testimonial.php';
require dirname( __FILE__ ) . '/vc_shortcodes/wander_testimonial_section.php';
require dirname( __FILE__ ) . '/vc_shortcodes/wander_team_section.php';
require dirname( __FILE__ ) . '/vc_shortcodes/wander_team.php';
require dirname( __FILE__ ) . '/vc_shortcodes/wander_section.php';
require dirname( __FILE__ ) . '/vc_shortcodes/wander_projects.php';
require dirname( __FILE__ ) . '/vc_shortcodes/wander_counter.php';

require dirname( __FILE__ ) . '/vc_shortcodes/wander_contact_us.php';
require dirname( __FILE__ ) . '/vc_shortcodes/wander_blog_post.php';
require dirname( __FILE__ ) . '/vc_shortcodes/wander_service_section.php';
require dirname( __FILE__ ) . '/vc_shortcodes/wander_service.php';
require dirname( __FILE__ ) . '/vc_shortcodes/wander_feature_tabs.php';
require dirname( __FILE__ ) . '/vc_shortcodes/wander_feature_box.php';
require dirname( __FILE__ ) . '/vc_shortcodes/wander_video.php';
require dirname( __FILE__ ) . '/vc_shortcodes/wander_progress_bars_section.php';
require dirname( __FILE__ ) . '/vc_shortcodes/wander_progress_bars.php';
require dirname( __FILE__ ) . '/vc_shortcodes/wander_progress_circle.php';
require dirname( __FILE__ ) . '/vc_shortcodes/wander_pricing_column.php';
require dirname( __FILE__ ) . '/vc_shortcodes/wander_countdown_timer.php';
require dirname( __FILE__ ) . '/vc_shortcodes/wander_button.php';
require dirname( __FILE__ ) . '/vc_shortcodes/wander_accordion_section.php';
require dirname( __FILE__ ) . '/vc_shortcodes/wander_accordion.php';
require dirname( __FILE__ ) . '/vc_shortcodes/wander_tab_section.php';
require dirname( __FILE__ ) . '/vc_shortcodes/wander_event_tab_section.php';
require dirname( __FILE__ ) . '/vc_shortcodes/wander_event_tab.php';
require dirname( __FILE__ ) . '/vc_shortcodes/wander_event.php';
require dirname( __FILE__ ) . '/vc_shortcodes/wander_grid_slider.php';
require dirname( __FILE__ ) . '/vc_shortcodes/wander_grid_slider_section.php';
require dirname( __FILE__ ) . '/vc_shortcodes/wander_subscription.php';
require dirname( __FILE__ ) . '/vc_shortcodes/wander_gmap.php';
require dirname( __FILE__ ) . '/vc_shortcodes/wander_alert.php';
require dirname( __FILE__ ) . '/vc_shortcodes/wander_shop.php';
require dirname( __FILE__ ) . '/vc_shortcodes/wander_slider.php';


require dirname( __FILE__ ) . '/cpt/projects.php';
require dirname( __FILE__ ) . '/cpt/services.php';
require dirname( __FILE__ ) . '/meta.php';

require dirname( __FILE__ ) . '/barebones-config.php';

 
if (class_exists ( 'WPBakeryShortCode' )) {
	require dirname( __FILE__ ) . '/Visual_Composer.php';
	add_action ( 'vc_before_init', 'Visual_Composer::add_shortcode_to_VC' );
	add_shortcode_param ( 'wander_custom_taxonomy', 'Visual_Composer::wander_param_settings_field' );
}


function wander_breadcrumb() {
    global $post;
	$separator = "/"; 
	
    echo '<div class="blog-post-path text-right"><p>';
	if (!is_front_page()) {
		echo '<a class="inner-page-navigation dark-grey font3" href="';
		echo esc_url(home_url(), 'wander-essentials');
		echo '">';
		echo esc_html__('Home', 'wander-essentials');
		echo '</a>'.$separator;
		if ( is_category() || is_single() ) {
			the_category(', ');
			if ( is_single() ) {
				echo $separator;
				the_title();
			}
		
	
		} elseif ( is_page() && $post->post_parent) {
			
			
			
			$home = get_page(get_option('page_on_front'));
			for ($i = count($post->ancestors)-1; $i >= 0; $i--) {
				if (($home->ID) != ($post->ancestors[$i])) {
					echo '<a class="inner-page-navigation dark-grey font3" href="';
					echo esc_url(get_permalink($post->ancestors[$i])); 
					echo '">';
					echo get_the_title($post->ancestors[$i]);
					echo "</a>".$separator;
				}
			}
			echo the_title();
		} elseif (is_page()) {
			echo the_title();
		} elseif (is_404()) {
			echo esc_html__('404','wander-essentials');
		}
	} else {
		echo '<a class="inner-page-navigation dark-grey font3" href="';
		echo home_url();
		echo '">';
		echo esc_html__('Home','wander-essentials');
		echo '</a>';
	}
	echo '</p></div>';
}


class wander_widget_get_in_touch extends WP_Widget {

	function __construct() {
		parent::__construct(
			'wander_widget_popular_posts', 

			esc_html__('wander Get In Touch', 'wander-essentials'), 

			array( 'description' => esc_html__( 'wander Get In Touch', 'wander-essentials' ), ) 
		);
	}

	public function widget( $args, $instance ) {
		
		$title = apply_filters( 'widget_title', $instance['title'] );
		
		
		
		$output = $args['before_widget'].$args['before_title']. $title .$args['after_title'].'<ul class="contact-info">';
        					
		$output .= '
		<li><i class="fa fa-map-marker"></i>'.esc_attr($instance['address'],'wander-essentials').'</li>
		<li><i class="fa fa-phone"></i></i>'.esc_attr($instance['phone']).'</li>
		<li><i class="fa fa-envelope-o"></i>'.esc_attr($instance['email']).'</li>
		<li><i class="fa fa-globe"></i>'.esc_attr($instance['website']).'</li>';
		
		$output .= '</ul>'.$args['after_widget'];
		
		echo $output;
		
	}
		
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = esc_html__( 'Get In Touch', 'wander-essentials' );
		}
		
		if ( isset( $instance[ 'address' ] ) ) {
			$address = $instance[ 'address' ];
		}
		else {
			$address = esc_html__( "Lorance Road 542B, Tailstoi Town 5248 MT, Wordwide Country", 'wander-essentials' );
		}
		if ( isset( $instance[ 'phone' ] ) ) {
			$phone = $instance[ 'phone' ];
		}
		else {
			$phone = esc_html__( "01865 524 8503", 'wander-essentials' );
		}
		if ( isset( $instance[ 'email' ] ) ) {
			$email = $instance[ 'email' ];
		}
		else {
			$email = esc_html__( "contact@wander.com", 'wander-essentials' );
		}
		if ( isset( $instance[ 'website' ] ) ) {
			$website = $instance[ 'website' ];
		}
		else {
			$website = esc_url( "http://wander.com", 'wander-essentials' );
		}
		
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php esc_html_e( 'Title:','wander-essentials' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
			
			<label style="margin-top: 20px; display: block;" for="<?php echo $this->get_field_id( 'address' ); ?>"><?php esc_html_e( 'Address:','wander-essentials' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'address' ); ?>" name="<?php echo $this->get_field_name( 'address' ); ?>" type="text" value="<?php echo esc_attr( $address ); ?>" />
		
			<label style="margin-top: 20px; display: block;" for="<?php echo $this->get_field_id( 'phone' ); ?>"><?php esc_html_e( 'Phone:','wander-essentials' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'phone' ); ?>" name="<?php echo $this->get_field_name( 'phone' ); ?>" type="text" value="<?php echo esc_attr( $phone ); ?>" />
		
			<label style="margin-top: 20px; display: block;" for="<?php echo $this->get_field_id( 'email' ); ?>"><?php esc_html_e( 'Email:','wander-essentials' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'email' ); ?>" name="<?php echo $this->get_field_name( 'email' ); ?>" type="text" value="<?php echo esc_attr( $email ); ?>" />
		
			<label style="margin-top: 20px; display: block;" for="<?php echo $this->get_field_id( 'website' ); ?>"><?php esc_html_e( 'Website:','wander-essentials' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'website' ); ?>" name="<?php echo $this->get_field_name( 'website' ); ?>" type="text" value="<?php echo esc_attr( $website ); ?>" />
		
		</p>
		<?php 
	}
	
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		
		$instance['address'] = ( ! empty( $new_instance['address'] ) ) ? strip_tags( $new_instance['address'] ) : '';
		$instance['phone'] = ( ! empty( $new_instance['phone'] ) ) ? strip_tags( $new_instance['phone'] ) : '';
		$instance['email'] = ( ! empty( $new_instance['email'] ) ) ? strip_tags( $new_instance['email'] ) : '';
		$instance['website'] = ( ! empty( $new_instance['website'] ) ) ? strip_tags( $new_instance['website'] ) : '';
		
		
		return $instance;
	}
	
}
class wander_widget_popular_posts extends WP_Widget {

	function __construct() {
		parent::__construct(
			'wander_widget_get_in_touch', 

			esc_html__('wander Popular Posts', 'wander-essentials'), 

			array( 'description' => esc_html__( 'wander Popular Posts', 'wander-essentials' ), ) 
		);
	}

	public function widget( $args, $instance ) {
		
		$title = apply_filters( 'widget_title', $instance['title'] );
		$post_args = array (
				'posts_per_page' => $instance['posts_per_page'],
				'orderby' => 'date',
				'order' => 'DESC',
				'include' => '',
				'exclude' => '',
				'meta_key' => '',
				'meta_value' => '',
				'post_type' => 'post',
				'post_mime_type' => '',
				'post_parent' => '',
				'author' => '',
				'post_status' => 'publish',
				'suppress_filters' => true 
		);
		$posts_array = get_posts ( $post_args );	
		
		$output = $args['before_widget'].$args['before_title']. $title .$args['after_title'].'<ul class="popular-post">';
                            
                           
			foreach ( $posts_array as $single_post ) {						
				setup_postdata( $single_post );
				if (has_post_thumbnail ( $single_post->ID)) {											
					$src = wp_get_attachment_image_src ( get_post_thumbnail_id($single_post->ID), 'wander_thumb');
					$img_src = esc_url ( $src [0] );
				} else {
					$img_src = "";
				}
				
				
				if ( isset( $instance[ 'show_thumb' ] ) ) {
					if ( $instance[ 'show_thumb' ] =='show'  ) {
						 
						$output .= '
						<li class="clearfix">
							<img src="'.esc_url($img_src).'" alt="">
							<div class="content-wrap">
								<h5>'.esc_html($single_post->post_title).'</h5>
								<span class="date">'.get_the_date().'</span>										
							</div>
						</li>';
					}else{
						$output .= '
							<li>
								<a href="' . get_the_permalink ( $single_post->ID ) . '"><h5>'.esc_html($single_post->post_title).'</h5></a>
								<p class="date">'.get_the_date().'</p>
							</li>';
					}
				}
				
			}
			$output .= '</ul>'.$args['after_widget'];
		echo $output;
		
	}
		
	public function form( $instance ) {
	
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = esc_html__( 'Popular Posts', 'wander-essentials' );
		}
		
		if ( isset( $instance[ 'posts_per_page' ] ) ) {
			$posts_per_page = $instance[ 'posts_per_page' ];
		}
		else {
			$posts_per_page = esc_html__( "4", 'wander-essentials' );
		}
		
		if ( isset( $instance[ 'show_thumb' ] ) ) {
			$show_thumb = $instance[ 'show_thumb' ];
		}
		else {
			$show_thumb = esc_html__( "hide", 'wander-essentials' );
		}
		
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php esc_html_e( 'Title:','wander-essentials' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
			
			<label style="margin-top: 20px; display: block;" for="<?php echo $this->get_field_id( 'posts_per_page' ); ?>"><?php esc_html_e( 'Post Per Page:','wander-essentials' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'posts_per_page' ); ?>" name="<?php echo $this->get_field_name( 'posts_per_page' ); ?>" type="text" value="<?php echo esc_attr( $posts_per_page ); ?>" />
			
			
			<label style="margin-top: 20px; display: block;"  for="<?php echo $this->get_field_id('show_thumb'); ?>"><?php esc_html_e('Show/Hide Thumbnail', 'wander-essentials'); ?></label>
			<select name="<?php echo $this->get_field_name('show_thumb'); ?>" id="<?php echo $this->get_field_id('show_thumb'); ?>" class="widefat">				
				<option <?php if ( 'hide' == $instance['show_thumb'] ) echo 'selected="selected"'; ?> value="<?php echo esc_attr( 'hide'); ?>"><?php esc_html_e('Hide', 'wander-essentials'); ?></option>	
				<option <?php if ( 'show' == $instance['show_thumb'] ) echo 'selected="selected"'; ?> value="<?php echo esc_attr( 'show'); ?>"><?php esc_html_e('Show', 'wander-essentials'); ?></option>
			</select>
			
		
		</p>
		<?php 
	}
	
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['posts_per_page'] = ( ! empty( $new_instance['posts_per_page'] ) ) ? strip_tags( $new_instance['posts_per_page'] ) : '';
		$instance['show_thumb'] = ( ! empty( $new_instance['show_thumb'] ) ) ? strip_tags( $new_instance['show_thumb'] ) : '';
		return $instance;
	}
}

function wander_load_widget() {
	register_widget( 'wander_widget_popular_posts' );
	register_widget( 'wander_widget_get_in_touch' );
}
add_action( 'widgets_init', 'wander_load_widget' );