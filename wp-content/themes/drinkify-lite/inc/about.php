<?php
/**
 * Theme About Page
 *
 * @package Drinkify_Lite
 * @since 1.0
 */

function drinkify_lite_admin_plugin_notice() {
    
    $screen = get_current_screen();
    
    if ( ! empty( $screen->base ) && 'appearance_page_drinkify-lite-theme' === $screen->base ) {
        return false;
    }
    ?>
    <div class="notice notice-info is-dismissible drinkify-lite-admin-notice">
        <div class="drinkify-lite-admin-notice-wrapper">
            <h2><?php esc_html_e( 'Drinkify', 'drinkify-lite' ); ?></h2>
            <p><?php esc_html_e( 'Get your hands on the WordPress Full Site Editing features. Start building your website with advanced block patterns and custom blocks! Get additional 31+ Pre-Designed Block Patterns, 28 FSE Templates, and 13 Template Parts  that are highly customizable and fully responsive.', 'drinkify-lite' ); ?></p>
            
            <a target="_blank" class="button-primary button green" href="<?php echo esc_url( 'https://catchthemes.com/themes/Drinkify/'); ?>"><?php esc_html_e( 'Get Drinkify', 'drinkify-lite' ); ?></a>
            
            <a class="button" href="<?php echo esc_url( admin_url( 'themes.php?page=drinkify-lite-theme' ) ); ?>" ><?php esc_html_e( 'Theme Info', 'drinkify-lite' ); ?></a>
        </div>
    </div>
    <?php
}
add_action( 'admin_notices', 'drinkify_lite_admin_plugin_notice' );

function drinkify_lite_theme_page_admin_style( $hook ) {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'drinkify-lite-theme-admin-style',
			get_theme_file_uri( 'assets/css/about-admin.css' ),
			array(),
			$version_string
		);
}
add_action( 'admin_enqueue_scripts', 'drinkify_lite_theme_page_admin_style' );

/**
 * Add theme page
 */
function drinkify_lite_menu() {
	add_theme_page( esc_html__( 'Drinkify Lite', 'drinkify-lite' ), esc_html__( 'Drinkify Lite', 'drinkify-lite' ), 'edit_theme_options', 'drinkify-lite-theme', 'drinkify_lite_theme_page_display' );
}
add_action( 'admin_menu', 'drinkify_lite_menu' );

/**
 * Display About page
 */
function drinkify_lite_theme_page_display() {
	$theme = wp_get_theme();
	
	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}
	?>
	
	<div id="welcome-panel" class="welcome-panel">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2><?php echo esc_html( $theme->Name ); ?></h2>
				<p><?php esc_html_e( 'Free Full Site Editing WordPress Theme', 'drinkify-lite' ); ?></p>
			</div>
			
			<div class="welcome-panel-column-container">
				<div class="container-wrap">
					<div class="welcome-panel-column two-columns">
						<!-- <div class="welcome-panel-icon-pages"></div> -->
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'Getting Started with Drinkify Lite!', 'drinkify-lite' ); ?></h3>
							<p><?php esc_html_e( 'Awesome! Drinkify Lite has been installed and activated successfully. Now, you can start building your dream website with a wide range of highly-customizable block patterns, templates, and template parts available in this astounding theme.', 'drinkify-lite' ); ?></p>
							<a target="_blank" href="https://catchthemes.com/themes/drinkify-lite/#theme-instructions"><?php esc_html_e( 'Theme instructions', 'drinkify-lite' ); ?></a>
						</div>
					</div>
					
					<div class="welcome-panel-column two-columns">
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'More Features with Drinkify Theme', 'drinkify-lite' ); ?></h3>
							<p><?php esc_html_e( 'To get more beautiful block patterns and templates, we recommend you upgrade to Drinkify. With the premium theme installed, get more options, blocks, block patterns, templates and template parts.', 'drinkify-lite' ); ?></p>
							<a target="_blank" class="button green button-primary button-hero green" href="https://catchthemes.com/themes/drinkify/"><?php esc_html_e( 'Buy Drinkify', 'drinkify-lite' ); ?></a>
						</div>
					</div>
					
				</div>
				<div class="sidebar">
					<div class="welcome-panel-column important-links">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Important Links', 'drinkify-lite' ); ?></h3>
						<a target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) ); ?>"><?php esc_html_e( 'Theme Info', 'drinkify-lite' ); ?></a>
						<a target="_blank" href="https://fse.catchthemes.com/drinkify-lite/"><?php esc_html_e( 'View Demo', 'drinkify-lite' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( 'https://catchthemes.com/fse-faq' ); ?>"><?php esc_html_e( 'FSE FAQs', 'drinkify-lite' ); ?></a>
						<a  target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) . '/#changelog' ); ?>"><?php esc_html_e( 'Change log', 'drinkify-lite' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( 'https://catchthemes.com/support-forum/forum/full-site-editing/' ); ?>"><?php esc_html_e( 'Support', 'drinkify-lite' ); ?></a>
					</div>
				</div>
				
				<div class="welcome-panel-column review">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Leave us a review', 'drinkify-lite' ); ?></h3>
						<p><?php esc_html_e( 'Loved Drinkify Lite? Feel free to leave your feedback. Your opinion helps us reach more audiences!', 'drinkify-lite' ); ?></p>
						<a href="https://wordpress.org/support/theme/drinkify-lite/reviews/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Review', 'drinkify-lite' ); ?></a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
