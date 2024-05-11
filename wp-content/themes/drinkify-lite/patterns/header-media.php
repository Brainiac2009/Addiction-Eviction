<?php
 /**
  * Title: Header Media
  * Slug: drinkify-lite/header-media
  * Categories: drinkify-lite, featured
  */
?>
<!-- wp:group {"align":"wide","className":"banner-wrapper","layout":{"inherit":true}} -->
<div class="wp-block-group alignwide banner-wrapper">
<!-- wp:template-part {"slug":"primary-header"} /-->
<!-- wp:cover {"overlayColor":"secondary-bg-color","isDark":false,"align":"full","className":"header-media"} -->
<div class="wp-block-cover alignfull is-light header-media">
	<span aria-hidden="true" class="wp-block-cover__background has-secondary-bg-color-background-color has-background-dim-100 has-background-dim"></span>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"header-media-content"} -->
			<div class="wp-block-columns alignwide are-vertically-aligned-center header-media-content">
				<!-- wp:column {"verticalAlignment":"center","className":"media-content","layout":{"type":"default"}} -->
				<div class="wp-block-column is-vertically-aligned-center media-content">
					<!-- wp:paragraph {"className":"header-meta"} -->
					<p class="header-meta"><?php esc_html_e ( 'Meet With', 'drinkify-lite' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"textAlign":"left","fontSize":"huge","textColor":"dark-color"} -->
					<h2 class="wp-block-heading has-text-align-left has-dark-color-color has-huge-font-size">
						<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-tertiary-color"><?php esc_html_e ( 'Sweet Elegant', 'drinkify-lite' ); ?></mark> <?php esc_html_e ( 'Fine', 'drinkify-lite' ); ?> 
						<span  class="has-inline-color has-dark-color-color last-item"><?php esc_html_e ( 'Winery', 'drinkify-lite' ); ?></span>
					</h2>
					<!-- /wp:heading -->
					<!-- wp:paragraph -->
					<p><?php esc_html_e ( 'White dry wine of Appellation of Controlled Origin. Made from grape varieties cultivated in France.', 'drinkify-lite' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button -->
						<div class="wp-block-button">
							<a class="wp-block-button__link wp-element-button"><?php esc_html_e ( 'View More', 'drinkify-lite' ); ?></a>
						</div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"verticalAlignment":"center","className":"header-image","layout":{"type":"default"}} -->
				<div class="wp-block-column is-vertically-aligned-center header-image">
					<!-- wp:image {"id":67,"sizeSlug":"large","linkDestination":"none"} -->
					<figure class="wp-block-image size-large">
						<img src="<?php echo esc_url( get_parent_theme_file_uri( '/assets/images/header-media-image.png' ) ); ?>" alt="" class="wp-image-67"/>
					</figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
</div>
<!-- /wp:group -->