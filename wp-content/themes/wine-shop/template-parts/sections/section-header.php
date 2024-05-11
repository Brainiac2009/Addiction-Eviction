<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="custom-header" rel="home">
		<img src="<?php esc_url(header_image()); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr(get_bloginfo( 'title' )); ?>">
	</a>	
<?php endif;  ?>
<!-- Header Area -->

	<?php 

		// header
		$topheader_emailicon = esc_attr(get_theme_mod('topheader_emailicon','fa fa-envelope-o'));
		$topheader_emailtext = esc_attr(get_theme_mod('topheader_emailtext','wineshop@mail.moc'));
		$topheader_phoneicon = esc_attr(get_theme_mod('topheader_phoneicon','fa fa-phone'));
		$topheader_phonetext = esc_attr(get_theme_mod('topheader_phonetext','+111-222-333'));
		$topheader_twitterlink = esc_attr(get_theme_mod('topheader_twitterlink','#'));
		$topheader_fblink = esc_attr(get_theme_mod('topheader_fblink','#'));
		$topheader_instalink = esc_attr(get_theme_mod('topheader_instalink','#'));
		$topheader_linkedinlink = esc_attr(get_theme_mod('topheader_linkedinlink','#'));
		$topheader_btntext = esc_attr(get_theme_mod('topheader_btntext','Contact'));
		$topheader_btntextlink = esc_attr(get_theme_mod('topheader_btntextlink','#'));

		$stickyheader = esc_attr(wineshop_sticky_menu());
	?>

<div class="main">
    <header class="main-header site-header <?php echo esc_attr(wineshop_sticky_menu()); ?>">
		<div class="container">
			<div class="header-section">
				<div class="headfer-content row">

					<div class="col-md-4 col-lg-4 col-sm-12">

						<div class="site-logo">
							<?php
							if(has_custom_logo())
								{	
									the_custom_logo();
								}
								else { 
								?>
								<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>">
									
									<?php 
										echo esc_html(bloginfo('name'));
									?>
								</a>	
							<?php 						
								}
							?>
						</div>

						<div class="box-info">
							<?php
								$wineshop_site_desc = get_bloginfo( 'description');
								if ($wineshop_site_desc) : ?>
									<p class="site-description"><?php echo esc_html($wineshop_site_desc); ?></p>
							<?php endif; ?>
						</div>
					</div>
					<div class="col-md-8 col-lg-8 col-sm-12 site-menu">
						<div style="width: 100%;">
							<div class="row">

								<div class="col-md-9 col-lg-9 col-sm-12">
									<div class="email con">
										<a class="h-email" href="mailto:<?php echo apply_filters('wineshop_header', $topheader_emailtext); ?>">
											<i class="<?php echo apply_filters('wineshop_header', $topheader_emailicon); ?>" aria-hidden="true"></i>
											<span><?php echo apply_filters('wineshop_header', $topheader_emailtext); ?></span>
										</a>
									</div>

									<div class="phn con">
										<a class="h-phn" href="telto:<?php echo apply_filters('wineshop_header', $topheader_phonetext); ?>">
											<i class="<?php echo apply_filters('wineshop_header', $topheader_phoneicon); ?>" aria-hidden="true"></i>
											<span><?php echo apply_filters('wineshop_header', $topheader_phonetext); ?></span>
										</a>
									</div>
								</div>
								 

								<div class="col-md-3 col-lg-3 col-sm-12 social-icons">
									<a title="<?php esc_attr('twitter', 'wine-shop'); ?>" target="_blank" href="<?php echo apply_filters('wineshop_header', $topheader_twitterlink); ?>"><i class="fa fa-twitter"></i></a>

						            <a title="<?php esc_attr('facebook', 'wine-shop'); ?>" target="_blank" href="<?php echo apply_filters('wineshop_header', $topheader_fblink); ?>"><i class="fa fa-facebook"></i></a> 
						            <a title="<?php esc_attr('instagram', 'wine-shop'); ?>" target="_blank" href="<?php echo apply_filters('wineshop_header', $topheader_instalink); ?>"><i class="fa fa-instagram"></i></a>

						            <a title="<?php esc_attr('linkedin', 'wine-shop'); ?>" target="_blank" href="<?php echo apply_filters('wineshop_header', $topheader_linkedinlink); ?>"><i class="fa fa-linkedin-square"></i></a>

						         </div>
							</div>
							<div class="row header-bottom">
								<div class="col-md-12 col-lg-9 col-sm-12 menus">
									<nav class="navbar navbar-expand-lg navbaroffcanvase">
									<div class="navbar-menubar">
					                    <!-- Small Divice Menu-->
					                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-menu"  aria-label="<?php echo esc_attr_e('Toggle navigation','wine-shop'); ?>"> 
					                        <i class="fa fa-bars"></i>
					                    </button>
					                    <div class="collapse navbar-collapse navbar-menu">
						                    <button class="navbar-toggler navbar-toggler-close" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-menu"  aria-label="<?php echo esc_attr_e('Toggle navigation','wine-shop'); ?>"> 
						                        <i class="fa fa-times"></i>
						                    </button> 
											<?php 
												wp_nav_menu( 
													array(  
														'theme_location' => 'primary_menu',
														'container'  => '',
														'container_id'    => '',
														'menu_class' => 'navbar-nav main-nav',
														'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
														'walker' => new WP_Bootstrap_Navwalker()
														 ) 
													);
											?>
											
					                    </div>

					                </div>

									</nav>
		                        </div>
		                        <div class="col-md-3 col-lg-3 col-sm-12 dmob">
		                        	<div class="hbtn">
										<a class="contactus" href="<?php echo apply_filters('wineshop_header', $topheader_btntextlink); ?>">
											<?php echo apply_filters('wineshop_header', $topheader_btntext); ?>
										</a> 
									</div>
		                        </div>
	                        </div>
						</div>
					</div>
				</div>
			</div>
		</div>

    </header>
	<div class="clearfix"></div>
</div>

