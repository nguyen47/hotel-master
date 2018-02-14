<?php
/**
 * The template for displaying 404 pages (Not Found).
 */

get_header(); ?>

	<div class="page-not-found-container container">
		<div class="gdlr-item page-not-found-item">
			<div class="page-not-found-block" >
				<div class="page-not-found-icon">
					<?php if( !empty($theme_option['new-fontawesome']) && $theme_option['new-fontawesome'] == 'enable' ){ ?>
						<i class="fa fa-frown-o"></i>
					<?php }else{ ?>
						<i class="icon-frown"></i>
					<?php } ?>
				</div>
				<div class="page-not-found-title">
					<?php _e('Error 404', 'gdlr_translate'); ?>
				</div>
				<div class="page-not-found-caption">
					<?php _e('Sorry, we couldn\'t find the page you\'re looking for.', 'gdlr_translate'); ?>
				</div>
				<div class="page-not-found-search">
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>