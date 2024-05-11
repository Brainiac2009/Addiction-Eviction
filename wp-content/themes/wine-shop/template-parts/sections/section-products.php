<section id="featured-product-section" class="ht-section">
	<div class="<?php if(esc_attr(get_theme_mod('wine_shop_popularproducts_section_width','Box Width')) == 'Full Width'){ ?>container-fluid pd-0 <?php } elseif(esc_attr(get_theme_mod('wine_shop_popularproducts_section_width','Box Width')) == 'Box Width'){ ?> container <?php }?>">
		<div class="featured-posts-box">
		<?php
			$popularproducts_heading = get_theme_mod('popularproducts_heading', 'Our Products');
		?> 
			<div class="row justify-content-center">
				<?php if($popularproducts_heading){ ?>	
					<div class="section-title">
					
					<?php if($popularproducts_heading){ ?>	
						<div class="section-subtitle inner-area-title">
							<h2><?php echo ($popularproducts_heading);  ?></h2>	
						</div>
					<?php }?>
					</div>
	
			<?php }?>
			</div> 

			<!-- <div class="row wow zoomIn"> -->
				<!-- <div class="row">   -->
				<div class="owl-carousel feedback-slider">
					<?php
					if(function_exists('woocommerce_template_loop_add_to_cart') && function_exists('WC')){
						$meta_query   = WC()->query->get_meta_query();
						$tax_query   = WC()->query->get_tax_query();
						$tax_query[] = array(
							'taxonomy' => 'product_visibility',
							'field'    => 'name',
							'terms'    => 'featured',
							'operator' => 'IN',
						);
						$args = array(
							'post_type'   =>  'product',
							'stock'       =>  1,
							'posts_per_page' => 10, 
							'orderby'     =>  'date',
							'order'       =>  'DESC',
							'meta_query'  =>  $meta_query,
							'tax_query'   => $tax_query,
						);
						$loop = new WP_Query( $args );
						if($loop->post_count > 0){
							while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
					<!-- <div class="item col-lg-4 col-md-4 col-sm-12">   -->
					<div class="item ">
						<div class="product-grid ">
							<!-- <div class="probg"></div> -->
							<div class="product-image">
								<div class="pro-brd"></div>
								<a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php if (has_post_thumbnail( $loop->post->ID )) 
									echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
									else
										echo '<img class="pic-1" src="'.get_template_directory_uri().'/assets/images/default.png" alt="Placeholder" />'; ?>
									
								</a>
							</div>
							<div class="productcontent-wrap">
								<?php
									$productbutton = get_theme_mod('product_txt', 'Add to cart'); 
								?>

								<div class="pcontent">
									
									<a class="add-to-cart" id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">	
										<h3><?php the_title(); ?></h3>
									</a>
									
									<span class="price">
										<div class="pr-brd"></div>
										<?php echo $product->get_price_html(); ?></span>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div> 
					<?php
						endwhile; 
							}else{ ?>
						<div class="alert alert-warning text-center">
							<strong>Sorry, no featured products to show.</strong>
						</div>
						<?php
								}
								?>
						<?php
							wp_reset_query(); 
						}else{ ?>
						<div class="alert alert-warning text-center">
							Kindly Install or Activate the WooCommerce plugin.
						</div>
					<?php
					}?>
				</div> 
			<!-- </div> -->
		</div>
	</div>
	<div class="clearfix"></div>

</section>
  <script>
        jQuery(document).ready(function($) {
        var feedbackSlider = $('#featured-product-section .feedback-slider');
        feedbackSlider.owlCarousel({
          items: 3,
          nav: true,
          dots: true,
          autoplay: false,
          loop: true,
          mouseDrag: true,
          touchDrag: true,
          navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
          responsive:{
                  0: {
                    items: 1,
                    nav: true
                  },
                  600: {
                     margin:20,
                    items:1,
                    nav: true
                  },

                  // breakpoint from 767 up
                  999:{
                    items:3,
                     margin:40,
                  nav: true,
                  dots: false
                  }
          }
        });

  feedbackSlider.on("translate.owl.carousel", function(){
    $(".feedback-slider-item h3").removeClass("animated fadeIn").css("opacity", "0");
    $(".feedback-slider-item img, .feedback-slider-thumb img, .customer-rating").removeClass("animated zoomIn").css("opacity", "0");
  });

  feedbackSlider.on("translated.owl.carousel", function(){
    $(".feedback-slider-item h3").addClass("animated fadeIn").css("opacity", "1");
    $(".feedback-slider-item img, .feedback-slider-thumb img, .customer-rating").addClass("animated zoomIn").css("opacity", "1");
  });
  feedbackSlider.on('changed.owl.carousel', function(property) {
    var current = property.item.index;
    var prevThumb = $(property.target).find(".owl-item").eq(current).prev().find("img").attr('src');
    var nextThumb = $(property.target).find(".owl-item").eq(current).next().find("img").attr('src');
    var prevRating = $(property.target).find(".owl-item").eq(current).prev().find('span').attr('data-rating');
    var nextRating = $(property.target).find(".owl-item").eq(current).next().find('span').attr('data-rating');
    $('.thumb-prev').find('img').attr('src', prevThumb);
    $('.thumb-next').find('img').attr('src', nextThumb);
    $('.thumb-prev').find('span').next().html(prevRating + '<i class="fa fa-star"></i>');
    $('.thumb-next').find('span').next().html(nextRating + '<i class="fa fa-star"></i>');
  });
  $('.thumb-next').on('click', function() {
    feedbackSlider.trigger('next.owl.carousel', [300]);
    return false;
  });
  $('.thumb-prev').on('click', function() {
    feedbackSlider.trigger('prev.owl.carousel', [300]);
    return false;
  });
  
}); //end ready
</script>
