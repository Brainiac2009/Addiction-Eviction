<?php
if ( ! function_exists( 'wine_shop_setup' ) ) :
function wine_shop_setup() {

// Root path/URI.
define( 'WINE_SHOP_PARENT_DIR', get_template_directory() );
define( 'WINE_SHOP_PARENT_URI', get_template_directory_uri() );

// Root path/URI.
define( 'WINE_SHOP_PARENT_INC_DIR', WINE_SHOP_PARENT_DIR . '/inc');
define( 'WINE_SHOP_PARENT_INC_URI', WINE_SHOP_PARENT_URI . '/inc');

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );
	
	add_theme_support( 'custom-header' );

	
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );
	
	//Add selective refresh for sidebar widget
	add_theme_support( 'customize-selective-refresh-widgets' );
	
	/*
	 * Make theme available for translation.
	 */
	load_theme_textdomain( 'wine-shop' );
		
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary_menu' => esc_html__( 'Primary Menu', 'wine-shop' ),
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
	
	
	add_theme_support('custom-logo');

	/*
	 * WooCommerce Plugin Support
	 */
	add_theme_support( 'woocommerce' );
	
	// Gutenberg wide images.
	add_theme_support( 'align-wide' );
	
	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'assets/css/editor-style.css', wine_shop_google_font() ) );
	
	//Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'wine_shop_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'wine_shop_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wine_shop_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wine_shop_content_width', 1170 );
}
add_action( 'after_setup_theme', 'wine_shop_content_width', 0 );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function wine_shop_widgets_init() {
	
	register_sidebar( array(
		'name' => __( 'Sidebar Widget Area', 'wine-shop' ),
		'id' => 'wine-shop-sidebar-primary',
		'description' => __( 'The Primary Widget Area', 'wine-shop' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4><div class="title"><span class="shap"></span></div>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer Widget Area', 'wine-shop' ),
		'id' => 'wine-shop-footer-widget-area',
		'description' => __( 'The Footer Widget Area', 'wine-shop' ),
		'before_widget' => '<div class="footer-widget col-lg-3 col-sm-6 wow fadeIn" data-wow-delay="0.2s"><aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside></div>',
		'before_title' => '<h5 class="widget-title w-title">',
		'after_title' => '</h5><span class="shap"></span>',
	) );

	register_sidebar( array(
		'name' => __( 'WooCommerce Widget Area', 'wine-shop' ),
		'id' => 'wine-shop-woocommerce-sidebar',
		'description' => __( 'This Widget area for WooCommerce Widget', 'wine-shop' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4><div class="title"><span class="shap"></span></div>',
	) );
}
add_action( 'widgets_init', 'wine_shop_widgets_init' );

/**
 * All Styles & Scripts.
 */

require_once get_template_directory() . '/inc/enqueue.php';

/**
 * Nav Walker fo Bootstrap Dropdown Menu.
 */

require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Implement the Custom Header feature.
 */
require_once get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require_once get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require_once get_template_directory() . '/inc/extras.php';


/**
 * Customizer additions.
 */
 require_once get_template_directory() . '/inc/wineshop-customizer.php';

require_once get_template_directory() . '/inc/tab-control.php';


    
// for header
function wine_shop_header_reset_settings() {
    remove_theme_mod('hide_show_sticky');
    remove_theme_mod('topheader_emailicon');
    remove_theme_mod('topheader_emailtext');
    remove_theme_mod('topheader_phoneicon');
    remove_theme_mod('topheader_phonetext');
    remove_theme_mod('topheader_twitterlink');
    remove_theme_mod('topheader_fblink');
    remove_theme_mod('topheader_instalink');
    remove_theme_mod('topheader_linkedinlink');
    remove_theme_mod('topheader_btntext');
    remove_theme_mod('topheader_btntextlink');
    remove_theme_mod('header_emailiconcolor');
    remove_theme_mod('header_emailtxtcolor');
    remove_theme_mod('header_phniconcolor');
    remove_theme_mod('header_phntxtcolor');
    remove_theme_mod('header_socialiconscolor');                
    remove_theme_mod('header_menuscolor');
    remove_theme_mod('header_menushovercolor');
    remove_theme_mod('header_submenusbgcolor');
    remove_theme_mod('header_submenutextcolor');
    remove_theme_mod('header_submenustexthovercolor');
    remove_theme_mod('header_submenusbordercolor');
    remove_theme_mod('header_btnbgcolor');
    remove_theme_mod('header_btnbghovercolor');
    remove_theme_mod('header_btntxtcolor');
    remove_theme_mod('header_btntxthovercolor');
    remove_theme_mod('header_mobilemenutogglecolor');
    remove_theme_mod('header_mobilemenubgcolor');
    wp_send_json_success(
        array(
            'success' => true,
            'message' => "Reset Completed",
        )
    );
}
add_action( 'wp_ajax_wine_shop_header_reset_settings', 'wine_shop_header_reset_settings' );



// for slider

function wine_shop_slider_reset_settings() {
    remove_theme_mod('slider1');
    remove_theme_mod('slider2');
    remove_theme_mod('slider3');
    remove_theme_mod('slider4');
    remove_theme_mod('slider5');
    remove_theme_mod('slider6');
    remove_theme_mod('slider_titlecolor');
    remove_theme_mod('slider_descriptioncolor');
    remove_theme_mod('slider_btntxt1color');
    remove_theme_mod('slider_btnbg1color');                
    remove_theme_mod('slider_btntxt2color');
    remove_theme_mod('slider_btnbg2color');
    remove_theme_mod('slider_arrowcolor');
    remove_theme_mod('slider_arrowbgcolor');
    remove_theme_mod('wine_shop_slider_section_width');
    wp_send_json_success(
        array(
            'success' => true,
            'message' => "Reset Completed",
        )
    );
}
add_action( 'wp_ajax_wine_shop_slider_reset_settings', 'wine_shop_slider_reset_settings' );


// for service
function wine_shop_Service_reset_settings() {
    remove_theme_mod('service_disable_section');
    remove_theme_mod('Service1');
    remove_theme_mod('Service2');
    remove_theme_mod('Service3');
    remove_theme_mod('Service4');
    remove_theme_mod('Service5');
    remove_theme_mod('Service6');
    remove_theme_mod('service_headingcolor');
    remove_theme_mod('service_bordercolor');
    remove_theme_mod('service_boxtitlecolorcolor');
    remove_theme_mod('service_boxdescriptioncolorcolor');   
    remove_theme_mod('service_buttonbgcolor');
    remove_theme_mod('service_buttontextcolor');
    remove_theme_mod('service_buttonhovercolor');
    remove_theme_mod('wine_shop_service_section_width');
    remove_theme_mod('wine_shop_service_top_padding');
    remove_theme_mod('wine_shop_service_bottom_padding');
    wp_send_json_success(
        array(
            'success' => true,
            'message' => "Reset Completed",
        )
    );
}
add_action( 'wp_ajax_wine_shop_Service_reset_settings', 'wine_shop_Service_reset_settings' );



// for popularproducts

function wine_shop_popularproducts_reset_settings() {
    remove_theme_mod('product_disable_section');
    remove_theme_mod('popularproducts_heading');
    remove_theme_mod('popularproducts_headingcolor');
    remove_theme_mod('popularproducts_bordercolor');
    remove_theme_mod('popularproducts_titlecolor');
    remove_theme_mod('popularproducts_titlebgcolor');
    remove_theme_mod('popularproducts_pricecolor');
    remove_theme_mod('popularproducts_pricebgcolor');
    remove_theme_mod('popularproducts_pricebordercolor');
    remove_theme_mod('popularproducts_arrowcolor');
    remove_theme_mod('wine_shop_popularproducts_section_width');
    remove_theme_mod('wine_shop_popularproducts_top_padding');
    remove_theme_mod('wine_shop_popularproducts_bottom_padding');
    wp_send_json_success(
        array(
            'success' => true,
            'message' => "Reset Completed",
        )
    );
}
add_action( 'wp_ajax_wine_shop_popularproducts_reset_settings', 'wine_shop_popularproducts_reset_settings' );



add_filter( 'nav_menu_link_attributes', 'wine_shop_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function wine_shop_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}


function wine_shop_fonts() {
    wp_enqueue_style( 'wine_shop-google-fonts-Philosopher', 'https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,700;1,400&display=swap" rel="stylesheet', false );
    
    wp_enqueue_style( 'wine_shop-google-fonts-Kaushan', 'https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap', false );

}
add_action( 'wp_enqueue_scripts', 'wine_shop_fonts' );