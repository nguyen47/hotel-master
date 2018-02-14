<?php get_header(); ?>
<div class="gdlr-content">

	<?php 
		global $gdlr_sidebar, $theme_option;
		$gdlr_sidebar = array(
			'type'=>$theme_option['archive-sidebar-template'],
			'left-sidebar'=>$theme_option['archive-sidebar-left'], 
			'right-sidebar'=>$theme_option['archive-sidebar-right']
		); 
		$gdlr_sidebar = gdlr_get_sidebar_class($gdlr_sidebar);
	?>
	<div class="with-sidebar-wrapper">
		<div class="with-sidebar-container container">
			<div class="with-sidebar-left <?php echo esc_attr($gdlr_sidebar['outer']); ?> columns">
				<div class="with-sidebar-content <?php echo esc_attr($gdlr_sidebar['center']); ?> gdlr-item-start-content columns">
					<?php
						if( is_tax('portfolio_category') || is_tax('portfolio_tag') ){		
							global $wp_query;
							gdlr_include_portfolio_scirpt();
							
							echo'<div class="portfolio-item-holder" >';
							if($theme_option['archive-portfolio-style'] == 'classic-portfolio'){
								global $gdlr_excerpt_length; $gdlr_excerpt_length = $theme_option['archive-portfolio-num-excerpt'];
								add_filter('excerpt_length', 'gdlr_set_excerpt_length');
								
								echo gdlr_get_classic_portfolio($wp_query, str_replace('1/', '', $theme_option['archive-portfolio-size']), 
											$theme_option['archive-portfolio-thumbnail-size'], 'fitRows' );
											
								remove_filter('excerpt_length', 'gdlr_set_excerpt_length');
							}else if($theme_option['archive-portfolio-style'] == 'modern-portfolio'){	
								echo gdlr_get_modern_portfolio($wp_query, str_replace('1/', '', $theme_option['archive-portfolio-size']), 
											$theme_option['archive-portfolio-thumbnail-size'], 'fitRows' );
							}
							echo '<div class="clear"></div>';
							echo '</div>';
							
							$paged = (get_query_var('paged'))? get_query_var('paged') : 1;
							echo gdlr_get_pagination($wp_query->max_num_pages, $paged);	
						}else if( is_tax('room_category') || is_tax('room_tag') ){		
							global $wp_query;
							
							echo'<div class="room-item-holder" >';
							if( $theme_option['archive-room-style'] == 'medium' || $theme_option['archive-room-style'] == 'medium-new' ){
								global $gdlr_excerpt_length, $gdlr_excerpt_read_more, $gdlr_excerpt_word; 
								$gdlr_excerpt_read_more = false;
								$gdlr_excerpt_length = $theme_option['archive-room-num-excerpt'];
								add_filter('excerpt_length', 'gdlr_set_excerpt_length');
								
								echo gdlr_get_medium_room($wp_query, $theme_option['archive-room-thumbnail-size'], $theme_option['archive-room-style']);
								
								$gdlr_excerpt_word = ''; $gdlr_excerpt_read_more = true;
								remove_filter('excerpt_length', 'gdlr_set_excerpt_length');
							}else if( $theme_option['archive-room-style'] == 'classic' ){	
								echo gdlr_get_classic_room($wp_query, $theme_option['archive-room-size'], $theme_option['archive-room-thumbnail-size']);
							}else if( $theme_option['archive-room-style'] == 'modern' ){
								echo gdlr_get_modern_room($wp_query, $theme_option['archive-room-size'], $theme_option['archive-room-thumbnail-size']);
							}else if( $theme_option['archive-room-style'] == 'modern-new' ){
								echo gdlr_get_modern_new_room($wp_query, $theme_option['archive-room-size'], $theme_option['archive-room-thumbnail-size']);
							}							
							echo '<div class="clear"></div>';
							echo '</div>';
							
							$paged = (get_query_var('paged'))? get_query_var('paged') : 1;
							echo gdlr_get_pagination($wp_query->max_num_pages, $paged);	
						}else if( is_tax('hostel_room_category') || is_tax('hostel_room_tag') ){		
							global $wp_query;
							
							echo'<div class="room-item-holder" >';
							if( $theme_option['archive-room-style'] == 'medium' || $theme_option['archive-room-style'] == 'medium-new' ){
								global $gdlr_excerpt_length, $gdlr_excerpt_read_more, $gdlr_excerpt_word; 
								$gdlr_excerpt_read_more = false;
								$gdlr_excerpt_length = $theme_option['archive-room-num-excerpt'];
								add_filter('excerpt_length', 'gdlr_set_excerpt_length');
								
								echo gdlrs_get_medium_room($wp_query, $theme_option['archive-room-thumbnail-size'], $theme_option['archive-room-style']);
								
								$gdlr_excerpt_word = ''; $gdlr_excerpt_read_more = true;
								remove_filter('excerpt_length', 'gdlr_set_excerpt_length');
							}else if( $theme_option['archive-room-style'] == 'classic' ){	
								echo gdlrs_get_classic_room($wp_query, $theme_option['archive-room-size'], $theme_option['archive-room-thumbnail-size']);
							}else if( $theme_option['archive-room-style'] == 'modern' ){
								echo gdlr_get_modern_room($wp_query, $theme_option['archive-room-size'], $theme_option['archive-room-thumbnail-size']);
							}else if( $theme_option['archive-room-style'] == 'modern-new' ){
								echo gdlrs_get_modern_new_room($wp_query, $theme_option['archive-room-size'], $theme_option['archive-room-thumbnail-size']);
							}							
							echo '<div class="clear"></div>';
							echo '</div>';
							
							$paged = (get_query_var('paged'))? get_query_var('paged') : 1;
							echo gdlr_get_pagination($wp_query->max_num_pages, $paged);	
						}else{
							// set the excerpt length
							if( !empty($theme_option['archive-num-excerpt']) ){
								global $gdlr_excerpt_length; $gdlr_excerpt_length = $theme_option['archive-num-excerpt'];
								add_filter('excerpt_length', 'gdlr_set_excerpt_length');
							} 

							global $wp_query, $gdlr_post_settings;
							$gdlr_lightbox_id++;
							$gdlr_post_settings['excerpt'] = intval($theme_option['archive-num-excerpt']);
							$gdlr_post_settings['thumbnail-size'] = $theme_option['archive-thumbnail-size'];			
							$gdlr_post_settings['blog-style'] = $theme_option['archive-blog-style'];							
						
							echo '<div class="blog-item-holder">';
							if($theme_option['archive-blog-style'] == 'blog-full'){
								echo gdlr_get_blog_full($wp_query);
							}else if($theme_option['archive-blog-style'] == 'blog-medium'){
								echo gdlr_get_blog_medium($wp_query);			
							}else{
								$blog_size = str_replace('blog-1-', '', $theme_option['archive-blog-style']);
								echo gdlr_get_blog_grid($wp_query, $blog_size, 'fitRows');
							}
							echo '<div class="clear"></div>';
							echo '</div>';
							remove_filter('excerpt_length', 'gdlr_set_excerpt_length');
							
							$paged = (get_query_var('paged'))? get_query_var('paged') : 1;
							echo gdlr_get_pagination($wp_query->max_num_pages, $paged);		
						}
					?>
				</div>
				<?php get_sidebar('left'); ?>
				<div class="clear"></div>
			</div>
			<?php get_sidebar('right'); ?>
			<div class="clear"></div>
		</div>				
	</div>				

</div><!-- gdlr-content -->
<?php get_footer(); ?>