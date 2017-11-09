<?php
/**
 * wander functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wander
 */
include( get_template_directory() . '/inc/class-tgm-plugin-activation.php');
include( get_template_directory() . '/inc/themeplugins.php');
include( get_template_directory() . '/inc/woocommerce.php');

add_action( 'tgmpa_register', 'wander_ThemePlugins::wander_register_required_plugins' );
 
if ( ! function_exists( 'wander_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wander_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on wander, use a find and replace
	 * to change 'wander' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'wander', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
add_theme_support( 'woocommerce' );
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'onepage' => esc_html__( 'Onepage Menu', 'wander' ),
		'primary' => esc_html__( 'Primary Menu', 'wander' ),
		'responsive' => esc_html__( 'Responsive Menu', 'wander' ),
		'footer' => esc_html__( 'Footer Menu', 'wander' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );
	add_post_type_support( 'project', 'post-formats', array( 
		'video', 
		'image', 
		'audio' 
	) );
	
	add_image_size ( 'blog_grid', 770, 433, true );
	
	add_theme_support( 'custom-background', apply_filters( 'wander_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'wander_setup' );


function wander_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wander_content_width', 640 );
}
add_action( 'after_setup_theme', 'wander_content_width', 0 );


function wander_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'wander Main Sidebar', 'wander' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="blog-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'wander Footer 1 Sidebar', 'wander' ),
		'id'            => 'sidebar-2',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="subheading">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'wander Footer 2 Sidebar', 'wander' ),
		'id'            => 'sidebar-3',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="subheading">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'wander Footer 3 Sidebar', 'wander' ),
		'id'            => 'sidebar-4',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="subheading">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'wander Footer 4 Sidebar', 'wander' ),
		'id'            => 'sidebar-5',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="subheading">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'wander_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wander_scripts() {
	
	
	
	
	
	
	wp_enqueue_script( 'wander-plugins', get_template_directory_uri() . '/js/plugins.js', array(), '20151215', true );
	wp_enqueue_script( 'wander-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '20151215', true );

	$translation_array = array( 'templateUrl' => get_stylesheet_directory_uri() );
	wp_localize_script( 'wander-scripts', 'js_object', $translation_array );
	
	
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	wp_enqueue_style( 'wander-plugins', get_template_directory_uri() . '/css/plugins.css');
	
	wp_enqueue_style( 'wander-theme', get_template_directory_uri() . '/css/theme.css');
	
	wp_enqueue_style( 'wander-ionicons', get_template_directory_uri() . '/css/ionicons.min.css');
	
	wp_enqueue_style( 'wander-et-line-icons', get_template_directory_uri() . '/css/et-line-icons.css');
	wp_enqueue_style( 'wander-themify-icons', get_template_directory_uri() . '/css/themify-icons.css', array(), '3.4.1' );
	wp_enqueue_style( 'wander-fonts-lovelo-stylesheet', get_template_directory_uri() . '/fonts/lovelo/stylesheet.css');
	wp_enqueue_style( 'wander-custom', get_template_directory_uri() . '/css/custom.css');
	wp_enqueue_style( 'wander-colors-blue', get_template_directory_uri() . '/css/colors/blue.css');
	wp_enqueue_style( 'wander-style', get_stylesheet_uri() );
	
	
}
add_action( 'wp_enqueue_scripts', 'wander_scripts' );


function wander_add_editor_styles() {
    add_editor_style( get_template_directory_uri().'css/main-editor-style.css' );
}
add_action( 'admin_init', 'wander_add_editor_styles' );



function wander_google_fonts_url() {
    $font_url = '';  
    if ( 'off' !== esc_html_x( 'on', 'Google font: on or off', 'wander' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Raleway:100,200,300,400|Open+Sans:400,300' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}

function wander_google_fonts() {
    wp_enqueue_style( 'wander_google_fonts', wander_google_fonts_url(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'wander_google_fonts' );


add_action( 'after_setup_theme', 'wander_return_theme_option' );

function wander_return_theme_option($string, $str = null) {
	global $wander_opt;
	if ($str != null)
		return isset ( $wander_opt ['' . $string . ''] ['' . $str . ''] ) ? $wander_opt ['' . $string . ''] ['' . $str . ''] : null;
	else
		return isset ( $wander_opt ['' . $string . ''] ) ? $wander_opt ['' . $string . ''] : null;
}


/*--------------------------------------------------------------
 *          One-Page Nav Walker
 *-------------------------------------------------------------*/
 
class wander_one_page_walker extends Walker_Nav_menu{
 
  var $value;
	function __construct($value = NULL) {
		return $this->value = $value;
	}
	function start_lvl(&$output, $depth = 0, $args = array()) {
		
		$indent = str_repeat ( "\t", $depth );
		$output .= "\n$indent<ul class=\"dropdown-menu fullwidth\">\n";
	}
	function start_el(&$output, $object, $depth = 0, $args = array(), $id = 0) {
		global $wp_query;
		$dropdown_value = 0;
		$indent = ($depth) ? str_repeat ( "\t", $depth ) : '';
		
		
		$class_names = $value = '';
		
		$classes = empty ( $object->classes ) ? array () : ( array ) $object->classes;

		$classes = array_slice ( $classes, 1 );
		
		$class_names = join ( ' ', apply_filters ( 'nav_menu_css_class', array_filter ( $classes ), $object ) );

		if ($object->object == 'page' && $object->classes [0] != 'notsingle' && $this->value != 'alter') {
			
			$varpost = get_post ( $object->object_id );
			$separate_page = get_post_meta ( $object->object_id, "lg_separate_page", true );
			$disable_menu = get_post_meta ( $object->object_id, "lg_disable_section_from_menu", true );
			$current_page_id = get_option ( 'page_on_front' );
			
			if (($disable_menu != true) && ($varpost->ID != $current_page_id)) {
				
			
				$output .= $indent . '<li class="main-menu-item">';
		 
				if (is_page(138)){
				
					$attributes = ' href="#' . esc_attr( $varpost->post_name ) . '"';
				
				}else{
					$attributes = ' href="' . esc_url( home_url () ) . '/#' . esc_attr( $varpost->post_name ) . '"';
				}
				$object_output = $args->before;
				$object_output .= '<a' . $attributes . ' class="scroll white font2">';
				$object_output .= $args->link_before . '' . apply_filters ( 'the_title', $object->title, $object->ID ) . '';
				$object_output .= $args->link_after;
				$object_output .= '</a>';
				$object_output .= $args->after;
				
				$output .= apply_filters ( 'walker_nav_menu_start_el', $object_output, $object, $depth, $args );
			}
		}else {
			
			if (strpos ( $class_names, 'menu-item-has-children' ) !== false) {
				$output .= $indent . '<li class="' . esc_attr ( $class_names ) .' dropdown"> ';
				$dropdown_value = 1;
			} else {
				$output .= $indent . '<li class="dropdown">';
				$dropdown_value = 0;
			}
			$atts = array ();
			$atts ['title'] = ! empty ( $object->attr_title ) ? $object->attr_title : '';
			$atts ['target'] = ! empty ( $object->target ) ? $object->target : '';
			$atts ['rel'] = ! empty ( $object->xfn ) ? $object->xfn : '';
			$atts ['href'] = ! empty ( $object->url ) ? $object->url : '';
			
			$atts = apply_filters ( 'nav_menu_link_attributes', $atts, $object, $args );
			
			$attributes = '';
			foreach ( $atts as $attr => $value ) {
				if (! empty ( $value )) {
					$value = ('href' === $attr) ? esc_url ( $value ) : esc_attr ( $value );
					$attributes .= ' ' . $attr . '="' . $value . '"';
				}
			}
			
			$object_output = $args->before;
			if ($dropdown_value == 0) {			
				$object_output .= '<a' . $attributes . '  class="font2">';
				$object_output .= $args->link_before . apply_filters ( 'the_title', $object->title, $object->ID ) . $args->link_after;
				$object_output .= '</a>';
				
			} else {
				$object_output .= '<a' . $attributes . '  class="scroll font2">';
				$object_output .= '
					<span>
						<i class="ion-chevron-down direction-icon white"></i>
					</span>';
				$object_output .= $args->link_before . apply_filters ( 'the_title', $object->title, $object->ID ) . $args->link_after;
				$object_output .= '</a>';
			}
			$object_output .= $args->after;
			
			$output .= apply_filters ( 'walker_nav_menu_start_el', $object_output, $object, $depth, $args );
		}
	}
   
}
   


/*--------------------------------------------------------------
 *          Responsive Nav Walker
 *-------------------------------------------------------------*/
 
class wander_responsive_walker extends Walker_Nav_menu{
 
  var $value;
	function __construct($value = NULL) {
		return $this->value = $value;
	}
	function start_lvl(&$output, $depth = 0, $args = array()) {
		
		$indent = str_repeat ( "\t", $depth );
		$output .= "\n$indent<ul class=\"dropdown-menu fullwidth\">\n";
	}
	function start_el(&$output, $object, $depth = 0, $args = array(), $id = 0) {
		global $wp_query;
		$dropdown_value = 0;
		$indent = ($depth) ? str_repeat ( "\t", $depth ) : '';
		
		
		$class_names = $value = '';
		
		$classes = empty ( $object->classes ) ? array () : ( array ) $object->classes;

		$classes = array_slice ( $classes, 1 );
		
		$class_names = join ( ' ', apply_filters ( 'nav_menu_css_class', array_filter ( $classes ), $object ) );

		if ($object->object == 'page' && $object->classes [0] != 'notsingle' && $this->value != 'alter') {
			
			$varpost = get_post ( $object->object_id );
			$separate_page = get_post_meta ( $object->object_id, "lg_separate_page", true );
			$disable_menu = get_post_meta ( $object->object_id, "lg_disable_section_from_menu", true );
			$current_page_id = get_option ( 'page_on_front' );
			
			if (($disable_menu != true) && ($varpost->ID != $current_page_id)) {
				
			
				$output .= $indent . '<li class="main-menu-item">';
		 
				if (is_page(138)){
				
					$attributes = ' href="#' . $varpost->post_name . '"';
				
				}else{
					$attributes = ' href="' . home_url () . '/#' . $varpost->post_name . '"';
				}
				$object_output = $args->before;
				$object_output .= '<a' . $attributes . ' class="scroll white font2">';
				$object_output .= $args->link_before . '' . apply_filters ( 'the_title', $object->title, $object->ID ) . '';
				$object_output .= $args->link_after;
				$object_output .= '</a>';
				$object_output .= $args->after;
				
				$output .= apply_filters ( 'walker_nav_menu_start_el', $object_output, $object, $depth, $args );
			}
		}else {
			
			if (strpos ( $class_names, 'menu-item-has-children' ) !== false) {
				$output .= $indent . '<li class="' . esc_attr ( $class_names ) .' dropdown"> ';
				$dropdown_value = 1;
			} else {
				$output .= $indent . '<li class="dropdown">';
				$dropdown_value = 0;
			}
			$atts = array ();
			$atts ['title'] = ! empty ( $object->attr_title ) ? $object->attr_title : '';
			$atts ['target'] = ! empty ( $object->target ) ? $object->target : '';
			$atts ['rel'] = ! empty ( $object->xfn ) ? $object->xfn : '';
			$atts ['href'] = ! empty ( $object->url ) ? $object->url : '';
			
			$atts = apply_filters ( 'nav_menu_link_attributes', $atts, $object, $args );
			
			$attributes = '';
			foreach ( $atts as $attr => $value ) {
				if (! empty ( $value )) {
					$value = ('href' === $attr) ? esc_url ( $value ) : esc_attr ( $value );
					$attributes .= ' ' . $attr . '="' . $value . '"';
				}
			}
			
			$object_output = $args->before;
			if ($dropdown_value == 0) {			
				$object_output .= '<a' . $attributes . '  class="white font2">';
				$object_output .= $args->link_before . apply_filters ( 'the_title', $object->title, $object->ID ) . $args->link_after;
				$object_output .= '</a>';
				
			} else {
				$object_output .= '<a' . $attributes . '  class="scroll white font2">';
				$object_output .= '
					<span>
						<i class="ion-chevron-down direction-icon white"></i>
					</span>';
				$object_output .= $args->link_before . apply_filters ( 'the_title', $object->title, $object->ID ) . $args->link_after;
				$object_output .= '</a>';
			}
			$object_output .= $args->after;
			
			$output .= apply_filters ( 'walker_nav_menu_start_el', $object_output, $object, $depth, $args );
		}
	}
   
}


function wander_pagination($pages = '', $range=4){  
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
     if(1 != $pages)
     {
		 echo '<div class="blog-pagination">
			<ul>
				<li><a href="'.esc_url(get_pagenum_link($paged - 1)).'"><i class="ion-android-arrow-back"></i></a>';
			
		
		for ($i=1; $i <= $pages; $i++){
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){			
				echo ($paged == $i)? '<li class="active"><a href="'.esc_attr("javascript:void()").'">'.$i.'</a></li>':'<li><a href="'.esc_url(get_pagenum_link($i)).'">'.$i.'</a></li>';
			}
		}
		
		
		echo  '<li><a href="'.esc_url(get_pagenum_link($paged + 1)).'"><i class="ion-android-arrow-forward"></i></a>';

        echo  '</ul></div>';
     }
	
}






/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


require get_template_directory() . '/inc/comments.php';

// How comments are displayed
