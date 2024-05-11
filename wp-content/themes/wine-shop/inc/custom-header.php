<?php
function wineshop_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'wineshop_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '646464',
		'width'                  => 2000, 
		'height'                 => 200,
		'flex-height'            => true,
		'wp-head-callback'       => 'wineshop_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'wineshop_custom_header_setup' );

if ( ! function_exists( 'wineshop_header_style' ) ) :

function wineshop_header_style() {
	$header_text_color = get_header_textcolor();


	$topheader_logowidth = get_theme_mod('topheader_logowidth','100');
	$topheader_logoheight = get_theme_mod('topheader_logoheight','70');


	$topheader_sitetitlecol = esc_attr(get_theme_mod('topheader_sitetitlecol','#56032d'));
	$topheader_taglinecol = esc_attr(get_theme_mod('topheader_taglinecol','#56032d'));


	$header_emailiconcolor = esc_attr(get_theme_mod('header_emailiconcolor','#56032d'));
	$header_emailtxtcolor = esc_attr(get_theme_mod('header_emailtxtcolor','#56032d'));
	$header_phniconcolor = esc_attr(get_theme_mod('header_phniconcolor','#56032d'));
	$header_phntxtcolor = esc_attr(get_theme_mod('header_phntxtcolor','#56032d'));
	$header_socialiconscolor = esc_attr(get_theme_mod('header_socialiconscolor','#56032d'));
	$header_menuscolor = esc_attr(get_theme_mod('header_menuscolor','#56032d'));
	$header_menushovercolor = esc_attr(get_theme_mod('header_menushovercolor','#000'));
	$header_submenusbgcolor = esc_attr(get_theme_mod('header_submenusbgcolor','#56032d'));
	$header_submenutextcolor = esc_attr(get_theme_mod('header_submenutextcolor','#d7c2a7'));
	$header_submenustexthovercolor = esc_attr(get_theme_mod('header_submenustexthovercolor','#a57477'));
	$header_submenusbordercolor = esc_attr(get_theme_mod('header_submenusbordercolor','#d7c2a7'));
	$header_btnbgcolor = esc_attr(get_theme_mod('header_btnbgcolor','#56032d'));
	$header_btnbghovercolor = esc_attr(get_theme_mod('header_btnbghovercolor','#56032d'));
	$header_btntxtcolor = esc_attr(get_theme_mod('header_btntxtcolor','#d7c2a7'));
	$header_btntxthovercolor = esc_attr(get_theme_mod('header_btntxthovercolor','#d7c2a7'));
	$header_mobilemenutogglecolor = esc_attr(get_theme_mod('header_mobilemenutogglecolor','#56032d'));
	$header_mobilemenubgcolor = esc_attr(get_theme_mod('header_mobilemenubgcolor','#7d7974'));




  	$slider_titlecolor = esc_attr(get_theme_mod('slider_titlecolor','#56032d'));
  	$slider_descriptioncolor = esc_attr(get_theme_mod('slider_descriptioncolor','#a57477'));
  	$slider_btntxt1color = esc_attr(get_theme_mod('slider_btntxt1color','#d7c2a7'));
  	$slider_btnbg1color = esc_attr(get_theme_mod('slider_btnbg1color','#56032d'));
  	$slider_btntxt2color = esc_attr(get_theme_mod('slider_btntxt2color','#d7c2a7'));
  	$slider_btnbg2color = esc_attr(get_theme_mod('slider_btnbg2color','#56032d'));
  	$slider_arrowcolor = esc_attr(get_theme_mod('slider_arrowcolor','#d7c2a7'));
  	$slider_arrowbgcolor = esc_attr(get_theme_mod('slider_arrowbgcolor','#56032d'));



  	$service_disable_section = esc_attr(get_theme_mod('service_disable_section','YES'));
  	$service_headingcolor = esc_attr(get_theme_mod('service_headingcolor','#4e2825'));
  	$service_bordercolor = esc_attr(get_theme_mod('service_bordercolor','#56032d'));
  	$service_boxtitlecolorcolor = esc_attr(get_theme_mod('service_boxtitlecolorcolor','#56032d'));
  	$service_boxdescriptioncolorcolor = esc_attr(get_theme_mod('service_boxdescriptioncolorcolor','#6a4741'));
  	$service_buttonbgcolor = esc_attr(get_theme_mod('service_buttonbgcolor','#4e2825'));
  	$service_buttontextcolor = esc_attr(get_theme_mod('service_buttontextcolor','#d7c2a7'));
  	$service_buttonhovercolor = esc_attr(get_theme_mod('service_buttonhovercolor','#000'));
  	$wine_shop_service_top_padding = esc_attr(get_theme_mod('wine_shop_service_top_padding','5'));
  	$wine_shop_service_bottom_padding = esc_attr(get_theme_mod('wine_shop_service_bottom_padding','6'));



  	$product_disable_section = esc_attr(get_theme_mod('product_disable_section','YES'));
  	$popularproducts_headingcolor = esc_attr(get_theme_mod('popularproducts_headingcolor','#4e2825'));
  	$popularproducts_bordercolor = esc_attr(get_theme_mod('popularproducts_bordercolor','#56032d'));
  	$popularproducts_titlecolor = esc_attr(get_theme_mod('popularproducts_titlecolor','#d7c2a7'));
  	$popularproducts_titlebgcolor = esc_attr(get_theme_mod('popularproducts_titlebgcolor','#56032d'));
  	$popularproducts_pricecolor = esc_attr(get_theme_mod('popularproducts_pricecolor','#d7c2a7'));
  	$popularproducts_pricebgcolor = esc_attr(get_theme_mod('popularproducts_pricebgcolor','#56032d'));
  	$popularproducts_pricebordercolor = esc_attr(get_theme_mod('popularproducts_pricebordercolor','#56032d'));
  	$popularproducts_arrowcolor = esc_attr(get_theme_mod('popularproducts_arrowcolor','#56032d'));
  	$wine_shop_popularproducts_top_padding = esc_attr(get_theme_mod('wine_shop_popularproducts_top_padding','5'));
  	$wine_shop_popularproducts_bottom_padding = esc_attr(get_theme_mod('wine_shop_popularproducts_bottom_padding','6'));





  	$footer_copyrightcolor = esc_attr(get_theme_mod('footer_copyrightcolor','#56032d'));
  	$footer_copyrightbgcolor = esc_attr(get_theme_mod('footer_copyrightbgcolor','#d7c2a7'));
  	$footer_bgcolor = esc_attr(get_theme_mod('footer_bgcolor','#56032d'));
  	$footer_textcolor = esc_attr(get_theme_mod('footer_textcolor','#d7c2a7'));
  	$footer_scrolltotopcolor = esc_attr(get_theme_mod('footer_scrolltotopcolor','#fff'));
  	$footer_scrolltotopbgcolor = esc_attr(get_theme_mod('footer_scrolltotopbgcolor','#a57477'));
  	$footer_scrolltotopbghovercolor = esc_attr(get_theme_mod('footer_scrolltotopbghovercolor','#000'));


	?>
	<style type="text/css">


		<?php 
		
		?>


		.custom-logo {
			width: <?php echo apply_filters('wineshop_topheader', $topheader_logowidth); ?>px;
			height: <?php echo apply_filters('wineshop_topheader', $topheader_logoheight); ?>px;
		}
	


		header.site-header .site-title {
			color: <?php echo apply_filters('wineshop_topheader', $topheader_sitetitlecol); ?>;

		}
		header.site-header .site-title {
			text-decoration-color: <?php echo apply_filters('wineshop_topheader', $topheader_sitetitlecol); ?> !important;

		}


		p.site-description {
			color: <?php echo apply_filters('wineshop_topheader', $topheader_taglinecol); ?>;

		}
		


		
	

		header .h-email i {
			color: <?php echo apply_filters('wineshop_header', $header_emailiconcolor); ?>;
		}

		header .h-email span {
			color: <?php echo apply_filters('wineshop_header', $header_emailtxtcolor); ?>;
		}

		header .h-phn i {
			color: <?php echo apply_filters('wineshop_header', $header_phniconcolor); ?>;
		}

		header .h-phn span {
			color: <?php echo apply_filters('wineshop_header', $header_phntxtcolor); ?>;
		}

		header .social-icons a i {
			color: <?php echo apply_filters('wineshop_header', $header_socialiconscolor); ?>;
		}

		.main-header .navbar .navbar-menu ul li a,.main-header .navbar .navbar-menu ul li.dropdown>a::after {
			color: <?php echo apply_filters('wineshop_header', $header_menuscolor); ?>;
		}

		.main-header .navbar .navbar-nav > li:hover a,
		.main-header .navbar .navbar-nav > li:hover.dropdown>a::after {
			color: <?php echo apply_filters('wineshop_header', $header_menushovercolor); ?>;
		}

		.main-header .navbar .navbar-menu ul li.dropdown .sub-menu {
			background: <?php echo apply_filters('wineshop_header', $header_submenusbgcolor); ?>;
		}

		.main-header .navbar .navbar-menu ul li.dropdown .sub-menu a:not(.remove) {
			color: <?php echo apply_filters('wineshop_header', $header_submenutextcolor); ?>;
		}

		.main-header .navbar .navbar-menu ul li.dropdown .sub-menu a:hover {
			color: <?php echo apply_filters('wineshop_header', $header_submenustexthovercolor); ?> !important;
		}

		.main-header .navbar .navbar-menu ul li.dropdown .sub-menu {
			outline-color: <?php echo apply_filters('wineshop_header', $header_submenusbordercolor); ?>;
		}

		.hbtn a {
			background: <?php echo apply_filters('wineshop_header', $header_btnbgcolor); ?>;
		}

		.hbtn a:hover {
			background: <?php echo apply_filters('wineshop_header', $header_btnbghovercolor); ?>;
		}

		.hbtn a {
			color: <?php echo apply_filters('wineshop_header', $header_btntxtcolor); ?>;
		}

		.hbtn a:hover {
			color: <?php echo apply_filters('wineshop_header', $header_btntxthovercolor); ?>;
		}

		.main-header .navbar .navbar-toggler {
			color: <?php echo apply_filters('wineshop_header', $header_mobilemenutogglecolor); ?>;
			border-color: <?php echo apply_filters('wineshop_header', $header_mobilemenutogglecolor); ?>;
		}

		@media screen and (max-width: 1024px) {
			.main-header .navbar .navbar-menu ul li {
				background-image: radial-gradient( circle farthest-corner at 10% 20%,<?php echo apply_filters('wineshop_header', $header_mobilemenubgcolor); ?> 0%,<?php echo apply_filters('wineshop_header', $header_mobilemenubgcolor); ?> 100.3% ) !important;
			}
		}





		.hero-style .slide-title h2 {
			color: <?php echo apply_filters('wineshop_slider', $slider_titlecolor); ?> !important;
		}


		.hero-style .slide-text p {
			color: <?php echo apply_filters('wineshop_slider', $slider_descriptioncolor); ?>;
		}

		.hero-style a.ReadMore {
			color: <?php echo apply_filters('wineshop_slider', $slider_btntxt1color); ?> !important;
		}

		.hero-style a.ReadMore {
			background: <?php echo apply_filters('wineshop_slider', $slider_btnbg1color); ?>;
		}

		.hero-style a.contactus {
			color: <?php echo apply_filters('wineshop_slider', $slider_btntxt2color); ?>;
		}

		.hero-style a.contactus {
			background: <?php echo apply_filters('wineshop_slider', $slider_btnbg2color); ?>;
		}

		.hero-slider .swiper-button-prev i, .hero-slider .swiper-button-next i {
			background: <?php echo apply_filters('wineshop_slider', $slider_arrowcolor); ?>;
		}

		.hero-slider .swiper-button-prev, .hero-slider .swiper-button-next {
			background: <?php echo apply_filters('wineshop_slider', $slider_arrowbgcolor); ?>;
		}






		#service-section .header-section .title {
			color: <?php echo apply_filters('wineshop_service', $service_headingcolor); ?>;
		}

		#service-section .serimgbrd {
			border-top-color: <?php echo apply_filters('wineshop_service', $service_bordercolor); ?>;
		}

		#service-section .serimgbrd:before,#service-section .serimgbrd:after {
			border-color: <?php echo apply_filters('wineshop_service', $service_bordercolor); ?>;
		}

		#service-section .serimgbrd2 {
			border-bottom-color: <?php echo apply_filters('wineshop_service', $service_bordercolor); ?>;
		}

		#service-section .serimgbrd2:before,#service-section .serimgbrd2:after {
			border-color: <?php echo apply_filters('wineshop_service', $service_bordercolor); ?>;
		}

		#service-section .single-service h3 {
			color: <?php echo apply_filters('wineshop_service', $service_boxtitlecolorcolor); ?>;
		}

		#service-section .single-service p, #service-section .single-service .description {
			color: <?php echo apply_filters('wineshop_service', $service_boxdescriptioncolorcolor); ?>;
		}

		#service-section .serbtn a {
			background: <?php echo apply_filters('wineshop_service', $service_buttonbgcolor); ?>;
		}

		#service-section .serbtn a {
			color: <?php echo apply_filters('wineshop_service', $service_buttontextcolor); ?>;
		}

		#service-section .serbtn a:hover {
			background: <?php echo apply_filters('wineshop_service', $service_buttonhovercolor); ?>;
		}

		#service-section {
			padding-top: <?php echo apply_filters('wineshop_service', $wine_shop_service_top_padding); ?>em;
		}

		#service-section {
			padding-bottom: <?php echo apply_filters('wineshop_service', $wine_shop_service_bottom_padding); ?>em;
		}






		#featured-product-section .section-subtitle h2 {
			color: <?php echo apply_filters('wineshop_popularproducts', $popularproducts_headingcolor); ?>;
		}

		#featured-product-section .pro-brd {
			border-color: <?php echo apply_filters('wineshop_popularproducts', $popularproducts_bordercolor); ?>;
		}

		#featured-product-section .product-grid h3 {
			color: <?php echo apply_filters('wineshop_popularproducts', $popularproducts_titlecolor); ?>;
		}

		#featured-product-section .product-grid h3 {
			background: <?php echo apply_filters('wineshop_popularproducts', $popularproducts_titlebgcolor); ?>;
		}

		#featured-product-section .product-grid, #featured-product-section .price del span.woocommerce-Price-amount, #featured-product-section .price ins span.woocommerce-Price-amount {
			color: <?php echo apply_filters('wineshop_popularproducts', $popularproducts_pricecolor); ?>;
		}

		#featured-product-section .pcontent .price ins {
			background: <?php echo apply_filters('wineshop_popularproducts', $popularproducts_pricebgcolor); ?>;
		}

		#featured-product-section .pr-brd {
			border-color: <?php echo apply_filters('wineshop_popularproducts', $popularproducts_pricebordercolor); ?>;
		}

		#featured-product-section .pr-brd:before {
			border-top-color: <?php echo apply_filters('wineshop_popularproducts', $popularproducts_pricebordercolor); ?>;
		}

		#featured-product-section .owl-nav i {
			color: <?php echo apply_filters('wineshop_popularproducts', $popularproducts_arrowcolor); ?>;
		}

		section#featured-product-section {
			padding-top: <?php echo apply_filters('wineshop_popularproducts', $wine_shop_popularproducts_top_padding); ?>em;
		}

		section#featured-product-section {
			padding-bottom: <?php echo apply_filters('wineshop_popularproducts', $wine_shop_popularproducts_bottom_padding); ?>em;
		}




		.copy-right p,.copy-right p a {
			color: <?php echo apply_filters('wineshop_popularproducts', $footer_copyrightcolor); ?>;
		}

		.copy-right {
			background: <?php echo apply_filters('wineshop_popularproducts', $footer_copyrightbgcolor); ?>;
		}

		.footer-area {
			background: <?php echo apply_filters('wineshop_popularproducts', $footer_bgcolor); ?>;
		}

		.footer-area .widget_text, .footer-area .widget_text p, .wp-block-latest-comments__comment-excerpt p, .wp-block-latest-comments__comment-date, .has-avatars .wp-block-latest-comments__comment .wp-block-latest-comments__comment-excerpt, .has-avatars .wp-block-latest-comments__comment .wp-block-latest-comments__comment-meta,.footer-area .widget_block h1, .footer-area .widget_block h2, .footer-area .widget_block h3, .footer-area .widget_block h4, .footer-area .widget_block h5, .footer-area .widget_block h6,.footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li a {
			color: <?php echo apply_filters('wineshop_popularproducts', $footer_textcolor); ?>;
		}

		.scroll-top {
			color: <?php echo apply_filters('wineshop_popularproducts', $footer_scrolltotopcolor); ?>;
		}

		.scroll-top {
			background: <?php echo apply_filters('wineshop_popularproducts', $footer_scrolltotopbgcolor); ?>;
		}

		.scroll-top:hover {
			background: <?php echo apply_filters('wineshop_popularproducts', $footer_scrolltotopbghovercolor); ?>;
		}


		


	<?php  ?>




	<?php
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		else :
	?>
		h4.site-title{
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>



	<?php
        if ($service_disable_section == 1):
	?>
		#service-section {
			display: none;
		}
	<?php
		else :
	?>
		#service-section {
			display: block;
		}
	<?php endif; ?>


	<?php
        if ($product_disable_section == 1):
	?>
		section#featured-product-section {
			display: none;
		}
	<?php
		else :
	?>
		section#featured-product-section {
			display: block;
		}
	<?php endif; ?>


	</style>
	<?php
}
endif;
