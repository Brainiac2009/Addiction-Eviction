<?php
function wineshop_blog_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'wineshop_frontpage_sections', array(
			'priority' => 32,
			'title' => esc_html__( 'Frontpage Sections', 'wine-shop' ),
		)
	);
	


	/*=========================================
	Slider Section
	=========================================*/
	$wp_customize->add_section(
		'slider_setting', array(
			'title' => esc_html__( 'Slider Section', 'wine-shop' ),
			'priority' => 1,
			'panel' => 'wineshop_frontpage_sections',
		)
	);


	$wp_customize->add_setting('wineshop_reset_slider_settings',array(
	  'sanitize_callback'   => 'sanitize_text_field'
	));
	$wp_customize->add_control(new wineshop_Reset_Custom_Control($wp_customize, 'wineshop_reset_slider_settings',array(
	  'type' => 'reset_control',
	   'priority' => 1,
	  'label' => __('Reset Slider Settings', 'wine-shop'),
	  'description' => 'wine_shop_slider_reset_settings',
	  'section' => 'slider_setting'
	)));
	

	$wp_customize->add_setting('wineshop_slider_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new wineshop_Tab_Control($wp_customize, 'wineshop_slider_tabs', array(
	   'section' => 'slider_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'wine-shop'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'slider1',
            	'slider2',
            	'slider3',
            	'slider4',
            	'slider5',
            	'slider6'
            ),
            'active' => true,
         ), 
	      array(
            'name' => esc_html__('Style', 'wine-shop'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
                'slider_titlecolor',
                'slider_descriptioncolor',
                'slider_btntxt1color',
                'slider_btnbg1color',
                'slider_btntxt2color',
                'slider_btnbg2color',
				'slider_arrowcolor',
				'slider_arrowbgcolor'

            ),
     	),
		 array(
		   'name' => esc_html__('Layout', 'wine-shop'),
		   'icon' => 'dashicons dashicons-layout',
		   'fields' => array(
			   'wine_shop_slider_section_width',
		   ),
		)
	    
    	),
	))); 


	

	// General Tab

	// Slider 1
	$wp_customize->add_setting( 
    	'slider1',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider1',
		array(
		    'label'   		=> __('Slider 1','wine-shop'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);		



	// Slider 2
	$wp_customize->add_setting(
    	'slider2',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'slider2',
		array(
		    'label'   		=> __('Slider 2','wine-shop'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Slider 3
	$wp_customize->add_setting(
    	'slider3',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'slider3',
		array(
		    'label'   		=> __('Slider 3','wine-shop'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Slider 4
	$wp_customize->add_setting(
    	'slider4',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'slider4',
		array(
		    'label'   		=> __('Slider 4','wine-shop'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);



	// Slider 5
	$wp_customize->add_setting(
    	'slider5',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'slider5',
		array(
		    'label'   		=> __('Slider 5','wine-shop'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// Slider 6
	$wp_customize->add_setting(
    	'slider6',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'slider6',
		array(
		    'label'   		=> __('Slider 6','wine-shop'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);


	// Style setting

	// slider title Color
	$slidertitlecolor = esc_html__('#56032d', 'wine-shop' );
	$wp_customize->add_setting(
    	'slider_titlecolor',
    	array(
			'default' => $slidertitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_titlecolor',
		array(
		    'label'   		=> __('Title Color','wine-shop'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// slider description Color
	$sliderdescriptioncolor = esc_html__('#a57477', 'wine-shop' );
	$wp_customize->add_setting(
    	'slider_descriptioncolor',
    	array(
			'default' => $sliderdescriptioncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_descriptioncolor',
		array(
		    'label'   		=> __('Description Color','wine-shop'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider btntxt1 Color
	$sliderbtntxt1color = esc_html__('#d7c2a7', 'wine-shop' );
	$wp_customize->add_setting(
    	'slider_btntxt1color',
    	array(
			'default' => $sliderbtntxt1color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btntxt1color',
		array(
		    'label'   		=> __('Button 1 Text Color','wine-shop'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider btnbg1 Color
	$sliderbtnbg1color = esc_html__('#56032d', 'wine-shop' );
	$wp_customize->add_setting(
    	'slider_btnbg1color',
    	array(
			'default' => $sliderbtnbg1color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btnbg1color',
		array(
		    'label'   		=> __('Button 1 BG Color','wine-shop'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider btntxt2 Color
	$sliderbtntxt2color = esc_html__('#d7c2a7', 'wine-shop' );
	$wp_customize->add_setting(
    	'slider_btntxt2color',
    	array(
			'default' => $sliderbtntxt2color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btntxt2color',
		array(
		    'label'   		=> __('Button 2 Text Color','wine-shop'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider btnbg2 Color
	$sliderbtnbg2color = esc_html__('#56032d', 'wine-shop' );
	$wp_customize->add_setting(
    	'slider_btnbg2color',
    	array(
			'default' => $sliderbtnbg2color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btnbg2color',
		array(
		    'label'   		=> __('Button 2 BG Color','wine-shop'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider arrow Color
	$sliderarrowcolor = esc_html__('#d7c2a7', 'wine-shop' );
	$wp_customize->add_setting(
    	'slider_arrowcolor',
    	array(
			'default' => $sliderarrowcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_arrowcolor',
		array(
		    'label'   		=> __('Arrows Color','wine-shop'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider arrowbg Color
	$sliderarrowbgcolor = esc_html__('#56032d', 'wine-shop' );
	$wp_customize->add_setting(
    	'slider_arrowbgcolor',
    	array(
			'default' => $sliderarrowbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_arrowbgcolor',
		array(
		    'label'   		=> __('Arrows BG Color','wine-shop'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// layout setting

	$wp_customize->add_setting('wine_shop_slider_section_width',array(
        'default' => 'Full Width',
        'sanitize_callback' => 'wineshop_sanitize_choices',
    ));
    $wp_customize->add_control('wine_shop_slider_section_width',array(
        'type' => 'select',
        'label' => __('Section Width','wine-shop'),
        'choices' => array (
            'Box Width' => __('Box Width','wine-shop'),
            'Full Width' => __('Full Width','wine-shop')
        ),
        'section' => 'slider_setting',
    ));



	/*=========================================
	Service Section
	=========================================*/
	$wp_customize->add_section(
		'Service_setting', array(
			'title' => esc_html__( 'Service Section', 'wine-shop' ),
			'priority' => 2,
			'panel' => 'wineshop_frontpage_sections',
		)
	);


	$wp_customize->add_setting('wineshop_reset_Service_settings',array(
	  'sanitize_callback'   => 'sanitize_text_field'
	));
	$wp_customize->add_control(new wineshop_Reset_Custom_Control($wp_customize, 'wineshop_reset_Service_settings',array(
	  'type' => 'reset_control',
	   'priority' => 1,
	  'label' => __('Reset Service Settings', 'wine-shop'),
	  'description' => 'wine_shop_Service_reset_settings',
	  'section' => 'Service_setting'
	)));
	

	$wp_customize->add_setting('wineshop_Service_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new wineshop_Tab_Control($wp_customize, 'wineshop_Service_tabs', array(
	   'section' => 'Service_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'wine-shop'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'service_disable_section',
            	'Service1',
            	'Service2',
            	'Service3',
            	'Service4',
            	'Service5',
            	'Service6'
            ),
            'active' => true,
         ),
	      array(
            'name' => esc_html__('Style', 'wine-shop'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
            	'service_headingcolor',
            	'service_bordercolor',
            	'service_boxtitlecolorcolor',
            	'service_boxdescriptioncolorcolor',
            	'service_buttonbgcolor',
            	'service_buttontextcolor',
            	'service_buttonhovercolor'
            ),
     	),
  		array(
	        'name' => esc_html__('Layout', 'wine-shop'),
	        'icon' => 'dashicons dashicons-layout',
	        'fields' => array(
	            'wine_shop_service_section_width',
	            'wineshop_service_padding',
	            'wine_shop_service_top_padding',
	            'wine_shop_service_bottom_padding'
	        ),
     	)
	    
    	),
	))); 



	// General

	// hide show service section
	$wp_customize->add_setting(
        'service_disable_section',
        array(
            'sanitize_callback' => 'wp_kses_post',
        )
    ); 
    $wp_customize->add_control(
        new wineshop_Toggle_Switch_Custom_Control(
            $wp_customize,
            'service_disable_section',
            array(
                'settings'      => 'service_disable_section',
                'section'       => 'Service_setting',
                'label'         => __( 'Disable Section', 'wine-shop' ),
                'on_off_label'  => array(
                    'on' => __( 'Yes', 'wine-shop' ),
                    'off' => __( 'No', 'wine-shop' )
                ),
            )
        )
    );

	// Service 1
	$wp_customize->add_setting( 
    	'Service1',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'Service1',
		array(
		    'label'   		=> __('Service 1','wine-shop'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);		

	// Service 2
	$wp_customize->add_setting(
    	'Service2',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'Service2',
		array(
		    'label'   		=> __('Service 2','wine-shop'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Service 3
	$wp_customize->add_setting(
    	'Service3',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'Service3',
		array(
		    'label'   		=> __('Service 3','wine-shop'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Service 4
	$wp_customize->add_setting(
    	'Service4',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'Service4',
		array(
		    'label'   		=> __('Service 4','wine-shop'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);


	// Service 5
	$wp_customize->add_setting(
    	'Service5',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'Service5',
		array(
		    'label'   		=> __('Service 5','wine-shop'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);


	// Service 6
	$wp_customize->add_setting(
    	'Service6',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'Service6',
		array(
		    'label'   		=> __('Service 6','wine-shop'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);


	// style
	// service headingcolor color
	$serviceheadingcolor = esc_html__('#4e2825', 'wine-shop' );
	$wp_customize->add_setting(
    	'service_headingcolor',
    	array(
			'default' => $serviceheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_headingcolor',
		array(
		    'label'   		=> __('Heading Color','wine-shop'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// service border color
	$servicebordercolor = esc_html__('#56032d', 'wine-shop' );
	$wp_customize->add_setting(
    	'service_bordercolor',
    	array(
			'default' => $servicebordercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_bordercolor',
		array(
		    'label'   		=> __('Border Color','wine-shop'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// service boxtitlecolor color
	$serviceboxtitlecolorcolor = esc_html__('#56032d', 'wine-shop' );
	$wp_customize->add_setting(
    	'service_boxtitlecolorcolor',
    	array(
			'default' => $serviceboxtitlecolorcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_boxtitlecolorcolor',
		array(
		    'label'   		=> __('Title Color','wine-shop'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// service boxdescriptioncolor color
	$serviceboxdescriptioncolorcolor = esc_html__('#6a4741', 'wine-shop' );
	$wp_customize->add_setting(
    	'service_boxdescriptioncolorcolor',
    	array(
			'default' => $serviceboxdescriptioncolorcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_boxdescriptioncolorcolor',
		array(
		    'label'   		=> __('Description Color','wine-shop'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// service buttonbg color
	$servicebuttonbgcolor = esc_html__('#56032d', 'wine-shop' );
	$wp_customize->add_setting(
    	'service_buttonbgcolor',
    	array(
			'default' => $servicebuttonbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_buttonbgcolor',
		array(
		    'label'   		=> __('Button BG Color','wine-shop'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// service buttontext color
	$servicebuttontextcolor = esc_html__('#d7c2a7', 'wine-shop' );
	$wp_customize->add_setting(
    	'service_buttontextcolor',
    	array(
			'default' => $servicebuttontextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_buttontextcolor',
		array(
		    'label'   		=> __('Button Text Color','wine-shop'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// service buttonhover color
	$servicebuttonhovercolor = esc_html__('#000', 'wine-shop' );
	$wp_customize->add_setting(
    	'service_buttonhovercolor',
    	array(
			'default' => $servicebuttonhovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_buttonhovercolor',
		array(
		    'label'   		=> __('Button Hover Color','wine-shop'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);



	// layout setting

	$wp_customize->add_setting('wine_shop_service_section_width',array(
        'default' => 'Box Width',
        'sanitize_callback' => 'wineshop_sanitize_choices',
    ));
    $wp_customize->add_control('wine_shop_service_section_width',array(
        'type' => 'select',
        'label' => __('Section Width','wine-shop'),
        'choices' => array (
            'Box Width' => __('Box Width','wine-shop'),
            'Full Width' => __('Full Width','wine-shop')
        ),
        'section' => 'Service_setting',
    ));


    // service section padding 
	$wp_customize->add_setting('wineshop_service_padding',array(
      'sanitize_callback'   => 'esc_html'
    ));
    $wp_customize->add_control('wineshop_service_padding',array(
      'label' => __('Section Padding','wine-shop'),
      'section' => 'Service_setting'
    ));

    $wp_customize->add_setting('wine_shop_service_top_padding',array(
        'default' => '5',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('wine_shop_service_top_padding',array(
	    'type' => 'number',
	    'label' => __('Top','wine-shop'),
	    'section' => 'Service_setting',
    ));

 	$wp_customize->add_setting('wine_shop_service_bottom_padding',array(
        'default' => '6',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('wine_shop_service_bottom_padding',array(
	    'type' => 'number',
	    'label' => __('Bottom','wine-shop'),
	    'section' => 'Service_setting',
    ));





	/*=========================================
	Popular Products Section
	=========================================*/
	$wp_customize->add_section(
		'popularproducts_setting', array(
			'title' => esc_html__( 'Products Section', 'wine-shop' ),
			'priority' => 3,
			'panel' => 'wineshop_frontpage_sections',
		)
	);


	$wp_customize->add_setting('wineshop_reset_popularproducts_settings',array(
	  'sanitize_callback'   => 'sanitize_text_field'
	));
	$wp_customize->add_control(new wineshop_Reset_Custom_Control($wp_customize, 'wineshop_reset_popularproducts_settings',array(
	  'type' => 'reset_control',
	   'priority' => 1,
	  'label' => __('Reset Products Settings', 'wine-shop'),
	  'description' => 'wine_shop_popularproducts_reset_settings',
	  'section' => 'popularproducts_setting'
	)));
	

	$wp_customize->add_setting('wineshop_popularproducts_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new wineshop_Tab_Control($wp_customize, 'wineshop_popularproducts_tabs', array(
	   'section' => 'popularproducts_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'wine-shop'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'product_disable_section',
            	'popularproducts_heading'
            ),
            'active' => true,
         ), 
	      array(
            'name' => esc_html__('Style', 'wine-shop'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
            	'popularproducts_headingcolor',
            	'popularproducts_bordercolor',
            	'popularproducts_titlecolor',
            	'popularproducts_titlebgcolor',
            	'popularproducts_pricecolor',
            	'popularproducts_pricebgcolor',
            	'popularproducts_pricebordercolor',
            	'popularproducts_arrowcolor'
            ),
     	),
  		array(
	        'name' => esc_html__('Layout', 'wine-shop'),
	        'icon' => 'dashicons dashicons-layout',
	        'fields' => array(
	            'wine_shop_popularproducts_section_width',
	            'wineshop_popularproducts_padding',
	            'wine_shop_popularproducts_top_padding',
	            'wine_shop_popularproducts_bottom_padding'
	        ),
     	)
	    
    	),
	))); 


	// hide show product section
	$wp_customize->add_setting(
        'product_disable_section',
        array(
            'sanitize_callback' => 'wp_kses_post',
        )
    ); 
    $wp_customize->add_control(
        new wineshop_Toggle_Switch_Custom_Control(
            $wp_customize,
            'product_disable_section',
            array(
                'settings'      => 'product_disable_section',
                'section'       => 'popularproducts_setting',
                'label'         => __( 'Disable Section', 'wine-shop' ),
                'on_off_label'  => array(
                    'on' => __( 'Yes', 'wine-shop' ),
                    'off' => __( 'No', 'wine-shop' )
                ),
            )
        )
    );


	// popularproducts heading
	$popularproductsheading = esc_html__('Our Products', 'wine-shop' );
	$wp_customize->add_setting(
    	'popularproducts_heading',
    	array(
			'default' => $popularproductsheading,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'popularproducts_heading',
		array(
		    'label'   		=> __('Heading','wine-shop'),
		    'section'		=> 'popularproducts_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	// popularproducts heading
	$popularproductsheadingcolor = esc_html__('#4e2825 ', 'wine-shop' );
	$wp_customize->add_setting(
    	'popularproducts_headingcolor',
    	array(
			'default' => $popularproductsheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'popularproducts_headingcolor',
		array(
		    'label'   		=> __('Heading Color','wine-shop'),
		    'section'		=> 'popularproducts_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// popularproducts border
	$popularproductsbordercolor = esc_html__('#56032d ', 'wine-shop' );
	$wp_customize->add_setting(
    	'popularproducts_bordercolor',
    	array(
			'default' => $popularproductsbordercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'popularproducts_bordercolor',
		array(
		    'label'   		=> __('Border Color','wine-shop'),
		    'section'		=> 'popularproducts_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// popularproducts title
	$popularproductstitlecolor = esc_html__('#d7c2a7 ', 'wine-shop' );
	$wp_customize->add_setting(
    	'popularproducts_titlecolor',
    	array(
			'default' => $popularproductstitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'popularproducts_titlecolor',
		array(
		    'label'   		=> __('Title Color','wine-shop'),
		    'section'		=> 'popularproducts_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// popularproducts titlebg
	$popularproductstitlebgcolor = esc_html__('#56032d ', 'wine-shop' );
	$wp_customize->add_setting(
    	'popularproducts_titlebgcolor',
    	array(
			'default' => $popularproductstitlebgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'popularproducts_titlebgcolor',
		array(
		    'label'   		=> __('Title BG Color','wine-shop'),
		    'section'		=> 'popularproducts_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	
	// popularproducts price
	$popularproductspricecolor = esc_html__('#d7c2a7 ', 'wine-shop' );
	$wp_customize->add_setting(
    	'popularproducts_pricecolor',
    	array(
			'default' => $popularproductspricecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'popularproducts_pricecolor',
		array(
		    'label'   		=> __('Price Color','wine-shop'),
		    'section'		=> 'popularproducts_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// popularproducts pricebg
	$popularproductspricebgcolor = esc_html__('#56032d ', 'wine-shop' );
	$wp_customize->add_setting(
    	'popularproducts_pricebgcolor',
    	array(
			'default' => $popularproductspricebgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'popularproducts_pricebgcolor',
		array(
		    'label'   		=> __('Price BG Color','wine-shop'),
		    'section'		=> 'popularproducts_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// popularproducts priceborder
	$popularproductspricebordercolor = esc_html__('#56032d ', 'wine-shop' );
	$wp_customize->add_setting(
    	'popularproducts_pricebordercolor',
    	array(
			'default' => $popularproductspricebordercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'popularproducts_pricebordercolor',
		array(
		    'label'   		=> __('Price Border Color','wine-shop'),
		    'section'		=> 'popularproducts_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// popularproducts arrow
	$popularproductsarrowcolor = esc_html__('#56032d ', 'wine-shop' );
	$wp_customize->add_setting(
    	'popularproducts_arrowcolor',
    	array(
			'default' => $popularproductsarrowcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'popularproducts_arrowcolor',
		array(
		    'label'   		=> __('Arrows Color','wine-shop'),
		    'section'		=> 'popularproducts_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// layout setting

	$wp_customize->add_setting('wine_shop_popularproducts_section_width',array(
        'default' => 'Box Width',
        'sanitize_callback' => 'wineshop_sanitize_choices',
    ));
    $wp_customize->add_control('wine_shop_popularproducts_section_width',array(
        'type' => 'select',
        'label' => __('Section Width','wine-shop'),
        'choices' => array (
            'Box Width' => __('Box Width','wine-shop'),
            'Full Width' => __('Full Width','wine-shop')
        ),
        'section' => 'popularproducts_setting',
    ));


    // popularproducts section padding 
	$wp_customize->add_setting('wineshop_popularproducts_padding',array(
      'sanitize_callback'   => 'esc_html'
    ));
    $wp_customize->add_control('wineshop_popularproducts_padding',array(
      'label' => __('Section Padding','wine-shop'),
      'section' => 'popularproducts_setting'
    ));

    $wp_customize->add_setting('wine_shop_popularproducts_top_padding',array(
        'default' => '5',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('wine_shop_popularproducts_top_padding',array(
	    'type' => 'number',
	    'label' => __('Top','wine-shop'),
	    'section' => 'popularproducts_setting',
    ));

 	$wp_customize->add_setting('wine_shop_popularproducts_bottom_padding',array(
        'default' => '6',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('wine_shop_popularproducts_bottom_padding',array(
	    'type' => 'number',
	    'label' => __('Bottom','wine-shop'),
	    'section' => 'popularproducts_setting',
    ));





	$wp_customize->register_control_type('wineshop_Tab_Control');

}

add_action( 'customize_register', 'wineshop_blog_setting' );

// service selective refresh
function wineshop_blog_section_partials( $wp_customize ){	
	// blog_title
	$wp_customize->selective_refresh->add_partial( 'blog_title', array(
		'selector'            => '.home-blog .title h6',
		'settings'            => 'blog_title',
		'render_callback'  => 'wineshop_blog_title_render_callback',
	
	) );
	
	// blog_subtitle
	$wp_customize->selective_refresh->add_partial( 'blog_subtitle', array(
		'selector'            => '.home-blog .title h2',
		'settings'            => 'blog_subtitle',
		'render_callback'  => 'wineshop_blog_subtitle_render_callback',
	
	) );
	
	// blog_description
	$wp_customize->selective_refresh->add_partial( 'blog_description', array(
		'selector'            => '.home-blog .title p',
		'settings'            => 'blog_description',
		'render_callback'  => 'wineshop_blog_description_render_callback',
	
	) );	
	}

add_action( 'customize_register', 'wineshop_blog_section_partials' );

// blog_title
function wineshop_blog_title_render_callback() {
	return get_theme_mod( 'blog_title' );
}

// blog_subtitle
function wineshop_blog_subtitle_render_callback() {
	return get_theme_mod( 'blog_subtitle' );
}

// service description
function wineshop_blog_description_render_callback() {
	return get_theme_mod( 'blog_description' );
}


