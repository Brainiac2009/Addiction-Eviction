<?php
function wineshop_header_settings( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Header Settings Panel
	=========================================*/
	$wp_customize->add_panel( 
		'header_section', 
		array(
			'priority'      => 2,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Header', 'wine-shop'),
		) 
	);

	
	/*=========================================
	Wine Shop Site Identity
	=========================================*/
	$wp_customize->add_section(
        'title_tagline',
        array(
        	'priority'      => 1,
            'title' 		=> __('Site Identity','wine-shop'),
			'panel'  		=> 'header_section',
		)
    );



	// topheader Logo Width
	$wp_customize->add_setting('topheader_logowidth',array(
		'default' => 100,
		'sanitize_callback' => 'wineshop_sanitize_float'
	));
	$wp_customize->add_control(new wineshop_Custom_Control( $wp_customize, 'topheader_logowidth',array(
		'label' => __('Logo Width','wine-shop'),
		'section' => 'title_tagline',
		'input_attrs' => array(
				'min' => 0,
				'max' => 500,
				'step' => 1,
			),
	)));

	// topheader Logo height
	$wp_customize->add_setting('topheader_logoheight',array(
		'default' => 100,
		'sanitize_callback' => 'wineshop_sanitize_float'
	));
	$wp_customize->add_control(new wineshop_Custom_Control( $wp_customize, 'topheader_logoheight',array(
		'label' => __('Logo Height','wine-shop'),
		'section' => 'title_tagline',
		'input_attrs' => array(
				'min' => 0,
				'max' => 500,
				'step' => 1,
			),
	)));


    // top header Site Title Color
	$topheadersitetitlecol = esc_html__('#56032d', 'wine-shop' );
	$wp_customize->add_setting(
    	'topheader_sitetitlecol',
    	array(
			'default' => $topheadersitetitlecol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'topheader_sitetitlecol',
		array(
		    'label'   		=> __('Site Title Color','wine-shop'),
		    'section'		=> 'title_tagline',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// top header Tagline Color
	$topheadertaglinecol = esc_html__('#56032d', 'wine-shop' );
	$wp_customize->add_setting(
    	'topheader_taglinecol',
    	array(
			'default' => $topheadertaglinecol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'topheader_taglinecol',
		array(
		    'label'   		=> __('Tagline Color','wine-shop'),
		    'section'		=> 'title_tagline',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);
	
 
	/*=========================================
	Wine Shop header
	=========================================*/
	$wp_customize->add_section(
        'top_header',
        array(
        	'priority'      => 5,
            'title' 		=> __('Header','wine-shop'),
			'panel'  		=> 'header_section',
		)
    );	


    $wp_customize->add_setting('wineshop_reset_header_settings',array(
	  'sanitize_callback'   => 'sanitize_text_field'
	));
	$wp_customize->add_control(new wineshop_Reset_Custom_Control($wp_customize, 'wine_shop_reset_header_settings',array(
	  'type' => 'reset_control',
	   'priority' => 1,
	  'label' => __('Reset Header Settings', 'wine-shop'),
	  'description' => 'wine_shop_header_reset_settings',
	  'section' => 'top_header'
	)));



    $wp_customize->add_setting('wineshop_top_header_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new wineshop_Tab_Control($wp_customize, 'wineshop_top_header_tabs', array(
	   'section' => 'top_header',
	   'priority' => 1,
	   'buttons' => array(
	      array(
     		'name' => esc_html__('General', 'wine-shop'),
 			'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'hide_show_sticky',
            	'topheader_emailicon',
            	'topheader_emailtext',
            	'topheader_phoneicon',
            	'topheader_phonetext',
            	'topheader_twitterlink',
            	'topheader_fblink',
            	'topheader_instalink',
            	'topheader_linkedinlink',
            	'topheader_btntext',
            	'topheader_btntextlink'

            ),
            'active' => true,
         ),
	      array(
            'name' => esc_html__('Style', 'wine-shop'),
            'icon' => 'dashicons dashicons-art',
            'fields' => array(
            	'header_emailiconcolor',
            	'header_emailtxtcolor',
            	'header_phniconcolor',
            	'header_phntxtcolor',
            	'header_socialiconscolor',
            	'header_menuscolor',
            	'header_menushovercolor',
            	'header_submenusbgcolor',
            	'header_submenutextcolor',
            	'header_submenustexthovercolor',
            	'header_submenusbordercolor',
            	'header_btnbgcolor',
            	'header_btnbghovercolor',
            	'header_btntxtcolor',
            	'header_btntxthovercolor',
				'header_mobilemenubgcolor',
            	'header_mobilemenutogglecolor'

            ),
         )
	    
    	),
	)));


	// general setting

	// sticky header
	$wp_customize->add_setting( 'hide_show_sticky',array(
        'default' => false,
        'sanitize_callback' => 'wineshop_switch_sanitization'
   	) );
   	$wp_customize->add_control( new wineshop_Toggle_Switch_Custom_Control( $wp_customize, 'hide_show_sticky',array(
        'label' => __( 'Show Sticky Header','wine-shop' ),
        'section' => 'top_header'
   	)));


   	// topheader icon 1
	$topheaderemailicon = esc_html__('fa fa-envelope-o', 'wine-shop' );
	$wp_customize->add_setting(
    	'topheader_emailicon',
    	array(
			'default' => $topheaderemailicon,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'topheader_emailicon',
		array(
		    'label'   		=> __('Email Icon','wine-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);



	// topheader text 1
	$topheaderemailtext = esc_html__('wineshop@mail.moc', 'wine-shop' );
	$wp_customize->add_setting(
    	'topheader_emailtext',
    	array(
			'default' => $topheaderemailtext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'topheader_emailtext',
		array(
		    'label'   		=> __('Email Text','wine-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


    // topheader icon 1
	$topheaderphoneicon = esc_html__('fa fa-phone', 'wine-shop' );
	$wp_customize->add_setting(
    	'topheader_phoneicon',
    	array(
			'default' => $topheaderphoneicon,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'topheader_phoneicon',
		array(
		    'label'   		=> __('Phone Icon','wine-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);



	// topheader text 1
	$topheaderphonetext = esc_html__('+91 802 9329 222', 'wine-shop' );
	$wp_customize->add_setting(
    	'topheader_phonetext',
    	array(
			'default' => $topheaderphonetext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'topheader_phonetext',
		array(
		    'label'   		=> __('Phone Text','wine-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// twitter link
	$topheadertwitterlink = esc_html__('#', 'wine-shop' );
	$wp_customize->add_setting(
    	'topheader_twitterlink',
    	array(
			'default' => $topheadertwitterlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'topheader_twitterlink',
		array(
		    'label'   		=> __('Twitter Link','wine-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// fb link
	$topheaderfblink = esc_html__('#', 'wine-shop' );
	$wp_customize->add_setting(
    	'topheader_fblink',
    	array(
			'default' => $topheaderfblink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'topheader_fblink',
		array(
		    'label'   		=> __('Facebook Link','wine-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// insta link
	$topheaderinstalink = esc_html__('#', 'wine-shop' );
	$wp_customize->add_setting(
    	'topheader_instalink',
    	array(
			'default' => $topheaderinstalink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'topheader_instalink',
		array(
		    'label'   		=> __('Instagram Link','wine-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// linkedin link
	$topheaderlinkedinlink = esc_html__('#', 'wine-shop' );
	$wp_customize->add_setting(
    	'topheader_linkedinlink',
    	array(
			'default' => $topheaderlinkedinlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'topheader_linkedinlink',
		array(
		    'label'   		=> __('Linkedin Link','wine-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	// btn text
	$topheaderbtntext = esc_html__('Contact', 'wine-shop' );
	$wp_customize->add_setting(
    	'topheader_btntext',
    	array( 
			'default' => $topheaderbtntext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'topheader_btntext',
		array(
		    'label'   		=> __('Button Text','wine-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	// btn textlink
	$topheaderbtntextlink = esc_html__('#', 'wine-shop' );
	$wp_customize->add_setting(
    	'topheader_btntextlink',
    	array(
			'default' => $topheaderbtntextlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'topheader_btntextlink',
		array(
		    'label'   		=> __('Button Text Link','wine-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	// Style setting


	// header emailicon Color
	$headeremailiconcolor = esc_html__('#56032d', 'wine-shop' );
	$wp_customize->add_setting(
    	'header_emailiconcolor',
    	array(
			'default' => $headeremailiconcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_emailiconcolor',
		array(
		    'label'   		=> __('Email Icon Color','wine-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header emailtxt Color
	$headeremailtxtcolor = esc_html__('#56032d', 'wine-shop' );
	$wp_customize->add_setting(
    	'header_emailtxtcolor',
    	array(
			'default' => $headeremailtxtcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_emailtxtcolor',
		array(
		    'label'   		=> __('Email Text Color','wine-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header phnicon Color
	$headerphniconcolor = esc_html__('#56032d', 'wine-shop' );
	$wp_customize->add_setting(
    	'header_phniconcolor',
    	array(
			'default' => $headerphniconcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_phniconcolor',
		array(
		    'label'   		=> __('Phone Icon Color','wine-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header phntxt Color
	$headerphntxtcolor = esc_html__('#56032d', 'wine-shop' );
	$wp_customize->add_setting(
    	'header_phntxtcolor',
    	array(
			'default' => $headerphntxtcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_phntxtcolor',
		array(
		    'label'   		=> __('Phone Text Color','wine-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header socialicons Color
	$headersocialiconscolor = esc_html__('#56032d', 'wine-shop' );
	$wp_customize->add_setting(
    	'header_socialiconscolor',
    	array(
			'default' => $headersocialiconscolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_socialiconscolor',
		array(
		    'label'   		=> __('Social Icons Color','wine-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header menus Color
	$headermenuscolor = esc_html__('#56032d', 'wine-shop' );
	$wp_customize->add_setting(
    	'header_menuscolor',
    	array(
			'default' => $headermenuscolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_menuscolor',
		array(
		    'label'   		=> __('Menus Color','wine-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header menushover Color
	$headermenushovercolor = esc_html__('#000', 'wine-shop' );
	$wp_customize->add_setting(
    	'header_menushovercolor',
    	array(
			'default' => $headermenushovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_menushovercolor',
		array(
		    'label'   		=> __('Menus Hover Color','wine-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header submenusbg Color
	$headersubmenusbgcolor = esc_html__('#56032d', 'wine-shop' );
	$wp_customize->add_setting(
    	'header_submenusbgcolor',
    	array(
			'default' => $headersubmenusbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenusbgcolor',
		array(
		    'label'   		=> __('SubMenus BG Color','wine-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header submenutext Color
	$headersubmenutextcolor = esc_html__('#d7c2a7', 'wine-shop' );
	$wp_customize->add_setting(
    	'header_submenutextcolor',
    	array(
			'default' => $headersubmenutextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenutextcolor',
		array(
		    'label'   		=> __('SubMenus Text Color','wine-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header submenustexthover Color
	$headersubmenustexthovercolor = esc_html__('#a57477', 'wine-shop' );
	$wp_customize->add_setting(
    	'header_submenustexthovercolor',
    	array(
			'default' => $headersubmenustexthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenustexthovercolor',
		array(
		    'label'   		=> __('SubMenus Text Hover Color','wine-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header submenusborder Color
	$headersubmenusbordercolor = esc_html__('#d7c2a7', 'wine-shop' );
	$wp_customize->add_setting(
    	'header_submenusbordercolor',
    	array(
			'default' => $headersubmenusbordercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenusbordercolor',
		array(
		    'label'   		=> __('SubMenus Border Color','wine-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header btnbg Color
	$headerbtnbgcolor = esc_html__('#56032d', 'wine-shop' );
	$wp_customize->add_setting(
    	'header_btnbgcolor',
    	array(
			'default' => $headerbtnbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_btnbgcolor',
		array(
		    'label'   		=> __('Button BG Color','wine-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header btnbghover Color
	$headerbtnbghovercolor = esc_html__('#56032d', 'wine-shop' );
	$wp_customize->add_setting(
    	'header_btnbghovercolor',
    	array(
			'default' => $headerbtnbghovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_btnbghovercolor',
		array(
		    'label'   		=> __('Button BG Hover Color','wine-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header btntxt Color
	$headerbtntxtcolor = esc_html__('#d7c2a7', 'wine-shop' );
	$wp_customize->add_setting(
    	'header_btntxtcolor',
    	array(
			'default' => $headerbtntxtcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_btntxtcolor',
		array(
		    'label'   		=> __('Button Text Color','wine-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header btntxthover Color
	$headerbtntxthovercolor = esc_html__('#d7c2a7', 'wine-shop' );
	$wp_customize->add_setting(
    	'header_btntxthovercolor',
    	array(
			'default' => $headerbtntxthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_btntxthovercolor',
		array(
		    'label'   		=> __('Button Text Hover Color','wine-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header mobilemenutoggle Color
	$headermobilemenutogglecolor = esc_html__('#56032d', 'wine-shop' );
	$wp_customize->add_setting(
    	'header_mobilemenutogglecolor',
    	array(
			'default' => $headermobilemenutogglecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_mobilemenutogglecolor',
		array(
		    'label'   		=> __('Mobile Menu Toggle Color','wine-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header mobilemenubg Color
	$headermobilemenubgcolor = esc_html__('#7d7974', 'wine-shop' );
	$wp_customize->add_setting(
    	'header_mobilemenubgcolor',
    	array(
			'default' => $headermobilemenubgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_mobilemenubgcolor',
		array(
		    'label'   		=> __('Mobile Menu BG Color','wine-shop'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);



	$wp_customize->register_control_type('wineshop_Tab_Control');
	$wp_customize->register_panel_type( 'wineshop_WP_Customize_Panel' );
	$wp_customize->register_section_type( 'wineshop_WP_Customize_Section' );



	

}
add_action( 'customize_register', 'wineshop_header_settings' );



if ( class_exists( 'WP_Customize_Panel' ) ) {
  	class wineshop_WP_Customize_Panel extends WP_Customize_Panel {
	   public $panel;
	   public $type = 'wineshop_panel';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'type', 'panel', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;
	      return $array;
    	}
  	}
}

if ( class_exists( 'WP_Customize_Section' ) ) {
  	class wineshop_WP_Customize_Section extends WP_Customize_Section {
	   public $section;
	   public $type = 'wineshop_section';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'panel', 'type', 'description_hidden', 'section', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;

	      if ( $this->panel ) {
	        $array['customizeAction'] = sprintf( 'Customizing &#9656; %s', esc_html( $this->manager->get_panel( $this->panel )->title ) );
	      } else {
	        $array['customizeAction'] = 'Customizing';
	      }
	      return $array;
    	}
  	}
}






