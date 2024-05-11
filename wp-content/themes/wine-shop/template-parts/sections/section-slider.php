<section id="slider-section" class="slider-area home-slider">
<div class="<?php if(esc_attr(get_theme_mod('wine_shop_slider_section_width','Full Width')) == 'Full Width'){ ?>container-fluid pd-0 <?php } elseif(esc_attr(get_theme_mod('wine_shop_slider_section_width','Full Width')) == 'Box Width'){ ?> container <?php }?>">

  <!-- <div class="slideinning"></div> -->
  <!-- start of hero --> 
  <section class="hero-slider hero-style">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <?php for($p=1; $p<6; $p++) { ?>
        <?php if( get_theme_mod('slider'.$p,false)) { ?>
        <?php $querycolumns = new WP_query('page_id='.get_theme_mod('slider'.$p,true)); ?>
        <?php while( $querycolumns->have_posts() ) : $querycolumns->the_post(); 
          $image = wp_get_attachment_image_src(get_post_thumbnail_id() , true); ?>
        <?php 
          if(has_post_thumbnail()){
            $img = esc_url($image[0]);
          }
          if(empty($image)){
            $img = get_template_directory_uri().'/assets/images/default.png';
          }

        ?>


        <div class="swiper-slide">
          <div class="slide-inner slide-bg-image">
            <div class="row md-0">                      
              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pd-0">  
                <div class="slidersvg2">              
                  <div class="container slidercontent">
                    <div class="slide-title">
                      <h2><?php the_title_attribute(); ?></h2>   
                      <!-- <hr> -->
                    </div>    
                    <div class="slide-text" style="margin-bottom: 1em;">
                      <p><?php the_excerpt(); ?></p>
                    </div>
                    <div class="slide-btns">
                      <a class="ReadMore" href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_html_e('Shop Now','wine-shop'); ?></a>

                      <a class="contactus" href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_html_e('About Us','wine-shop'); ?></a>

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pd-0">
                <div class="sliderimg">
                  
                  <img class="slide-mainimg slidershape1" src="<?php echo $img; ?>" alt="<?php the_title_attribute(); ?>">

                </div>
                
              </div>
            </div>                
          </div>
        </div>
        <?php endwhile;
           wp_reset_postdata(); ?>
        <?php } } ?>
        <div class="clear"></div> 

      </div>
       <!-- swipper controls -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"><i class="fa fa-caret-right"></i></div>
        <div class="swiper-button-prev"><i class="fa fa-caret-left"></i></div>
    </div>
  </section>
  <!-- end of hero slider -->
  </div>
</section>


