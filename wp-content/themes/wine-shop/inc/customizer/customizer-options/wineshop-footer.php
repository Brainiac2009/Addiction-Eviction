<?php
function wineshop_footer( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	// Footer Panel // 
	$wp_customize->add_panel( 
		'footer_section', 
		array(
			'priority'      => 34,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Footer', 'wine-shop'),
		) 
	);

    

	// Footer Bottom // 
	$wp_customize->add_section(
        'footer_bottom',
        array(
            'title' 		=> __('Footer','wine-shop'),
			'panel'  		=> 'footer_section',
			'priority'      => 3,
		)
    );
	
	
	
	// Footer Copyright 
	$wineshop_foo_copy = esc_html__('Copyright &copy; [current_year] [site_title] | Powered by [theme_author]', 'wine-shop' );
	$wp_customize->add_setting(
    	'footer_copyright',
    	array(
			'default' => $wineshop_foo_copy,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_copyright',
		array(
		    'label'   		=> __('CopyRight','wine-shop'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'textarea',
			'transport'         => $selective_refresh,
		)  
	);	


	// footer copyright color
	$footercopyrightcolor = esc_html__('#56032d', 'wine-shop' );
	$wp_customize->add_setting(
    	'footer_copyrightcolor',
    	array(
			'default' => $footercopyrightcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_copyrightcolor',
		array(
		    'label'   		=> __('Copyright Color','wine-shop'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer copyrightbg color
	$footercopyrightbgcolor = esc_html__('#d7c2a7', 'wine-shop' );
	$wp_customize->add_setting(
    	'footer_copyrightbgcolor',
    	array(
			'default' => $footercopyrightbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_copyrightbgcolor',
		array(
		    'label'   		=> __('Copyright BG Color','wine-shop'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer bg color
	$footerbgcolor = esc_html__('#56032d', 'wine-shop' );
	$wp_customize->add_setting(
    	'footer_bgcolor',
    	array(
			'default' => $footerbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_bgcolor',
		array(
		    'label'   		=> __('BG Color','wine-shop'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer text color
	$footertextcolor = esc_html__('#d7c2a7', 'wine-shop' );
	$wp_customize->add_setting(
    	'footer_textcolor',
    	array(
			'default' => $footertextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_textcolor',
		array(
		    'label'   		=> __('Text Color','wine-shop'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// footer scrolltotop color
	$footerscrolltotopcolor = esc_html__('#fff', 'wine-shop' );
	$wp_customize->add_setting(
    	'footer_scrolltotopcolor',
    	array(
			'default' => $footerscrolltotopcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_scrolltotopcolor',
		array(
		    'label'   		=> __('Scroll To Top Icon Color','wine-shop'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer scrolltotopbg color
	$footerscrolltotopbgcolor = esc_html__('#a57477', 'wine-shop' );
	$wp_customize->add_setting(
    	'footer_scrolltotopbgcolor',
    	array(
			'default' => $footerscrolltotopbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_scrolltotopbgcolor',
		array(
		    'label'   		=> __('Scroll To Top BG Color','wine-shop'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer scrolltotopbghover color
	$footerscrolltotopbghovercolor = esc_html__('#000', 'wine-shop' );
	$wp_customize->add_setting(
    	'footer_scrolltotopbghovercolor',
    	array(
			'default' => $footerscrolltotopbghovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_scrolltotopbghovercolor',
		array(
		    'label'   		=> __('Scroll To Top BG Hover Color','wine-shop'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);



}
add_action( 'customize_register', 'wineshop_footer' );
// Footer selective refresh
function wineshop_footer_partials( $wp_customize ){	
	// footer_copyright
	$wp_customize->selective_refresh->add_partial( 'footer_copyright', array(
		'selector'            => '.copy-right .copyright-text',
		'settings'            => 'footer_copyright',
		'render_callback'  => 'wineshop_footer_copyright_render_callback',
	) );
	
	}
add_action( 'customize_register', 'wineshop_footer_partials' );


// copyright_content
function wineshop_footer_copyright_render_callback() {
	return get_theme_mod( 'footer_copyright' );
}