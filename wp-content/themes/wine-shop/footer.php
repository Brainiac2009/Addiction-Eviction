</div>
<footer class="footer-area">  

	<div class="image">
		<?php
	        $img = get_template_directory_uri().'/assets/images/bottel.png';
        ?>
	  	<!-- <img class="footer-img" src="<?php echo $img; ?>" alt="bottel"> -->
	</div>

	<div class="footer-top">
		<div class="container content"> 
			 <?php do_action('wineshop_footer_above'); 
			  if ( is_active_sidebar( 'wine-shop-footer-widget-area' ) ) { ?>	
				 <div class="row footer-row"> 
					 <?php  dynamic_sidebar( 'wine-shop-footer-widget-area' ); ?>
				 </div>  
			 <?php } ?>
		 </div>
	</div>
	
	<?php 
		$footer_copyright = get_theme_mod('footer_copyright','Copyright &copy; [current_year] [site_title] | Powered by [theme_author]');

		
	?>
	<div class="copy-right"> 
		<div class="container"> 
			<?php 
			if ( ! empty( $footer_copyright ) ): ?>
			<?php 	
				$wineshop_copyright_allowed_tags = array(
					'[current_year]' => date_i18n('Y'),
					'[site_title]'   => get_bloginfo('name'),
					'[theme_author]' => sprintf(__('<a href="#">Wine Shop</a>', 'wine-shop')),
				);
			?>                          
			<p class="copyright-text">
				<?php
					echo apply_filters('wineshop_footer_copyright', wp_kses_post(wineshop_str_replace_assoc($wineshop_copyright_allowed_tags, $footer_copyright)));
				?>
			</p>
			<?php endif; ?>
		</div>
	</div>
</footer>
<!-- End Footer Area  -->

<button class="scroll-top">
	<i class="fa fa-arrow-up" aria-hidden="true"></i>
</button>

</div>		
<?php wp_footer(); ?>
</body>
</html>

