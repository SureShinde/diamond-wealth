<?php // Template Name: Portfolio One Column ?>
<?php get_header(); ?>
	<?php
	$field_1 = ( $data['pd_custom' ] && ( $data['client_name_custom'] != 'Client name' ) ) ? $data['client_name_custom'] : __('Client name', 'Creativo');
	$field_2 = ( $data['pd_custom' ] && ( $data['skills_custom'] != 'Skills' ) ) ? $data['skills_custom'] : __('Skills', 'Creativo'); 
	if(get_post_meta($post->ID, 'pyre_slider_select', true) == 'layer_slider') {  
	?>
    	<div class="content-layer">
            <div class="inside_content2"> 
        		<?php echo do_shortcode('[layerslider id="'.get_post_meta($post->ID, 'pyre_slider_id',true).'"]'); ?> 
            </div>
        </div>
    <?php
	}
	if(get_post_meta($post->ID, 'pyre_slider_select', true) == 'rev_slider') {  
	?>
    	<div class="content-layer">
            <div class="inside_content"> 
        		<?php putRevSlider(get_post_meta($post->ID, 'pyre_slider_id',true)); ?>
            </div>
        </div>
    <?php
	}	
	?> 
			<div class="row">
            	<?php while(have_posts()): the_post(); ?>
                	<div class="page_description"><?php the_content(); ?></div>
                <?php endwhile; ?> 
                <div id="content" class="portfolio-one">
                    <?php
                    if(!get_post_meta(get_the_ID(), 'pyre_portfolio_category', true)):
	                    $portfolio_category = !get_post_meta(get_the_ID(), 'pyre_exclude_portfolio_category', true) ? get_terms('portfolio_category') : get_terms( array( 'taxonomy' => 'portfolio_category', 'exclude' => get_post_meta(get_the_ID(), 'pyre_exclude_portfolio_category', true) ) );	      
						if($portfolio_category && ( sizeof($portfolio_category) > 1 )):
						?>                    
							<ul class="portfolio-tabs portfolio-templates clearfix">
								<li class="active"><a data-filter="*" href="#"><?php _e('All', 'Creativo'); ?></a></li>
								<?php foreach($portfolio_category as $portfolio_cat): ?>
									<li><a data-filter=".<?php echo $portfolio_cat->slug; ?>" href="#"><?php echo $portfolio_cat->name; ?></a></li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>
                    <?php endif; ?>
                    <div class="portfolio-wrapper">
                        <?php
                        if(is_front_page()) {
							$paged = (get_query_var('page')) ? get_query_var('page') : 1;
						} else {
							$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						}
                        $args = array(
                            'post_type' => 'creativo_portfolio',
                            'paged' => $paged,
                            'posts_per_page' => $data['portfolio_items']						
                        );
                        
                        if(get_post_meta(get_the_ID(), 'pyre_portfolio_category', true)){
							$args['tax_query'][] = array(
								'taxonomy' => 'portfolio_category',
								'field' => 'term_id',
								'terms' => get_post_meta(get_the_ID(), 'pyre_portfolio_category', true)
							);
						}
						else {        
							if(get_post_meta(get_the_ID(), 'pyre_exclude_portfolio_category', true)){
								$args['tax_query'][] = array(
								  'taxonomy' => 'portfolio_category',
								  'field' => 'term_id',
								  'terms' => get_post_meta(get_the_ID(), 'pyre_exclude_portfolio_category', true),
								  'operator' => 'NOT IN',
								);
							}
						}
                        $gallery = new WP_Query($args);						
                        while($gallery->have_posts()): $gallery->the_post();
                             if(has_post_thumbnail() || get_post_meta($post->ID, 'pyre_youtube', true) || get_post_meta($post->ID, 'pyre_vimeo', true)):
								?>
								<?php
								$item_classes = '';
								$item_cats = get_the_terms($post->ID, 'portfolio_category');
								$portf_cat = wp_get_object_terms($post->ID, 'portfolio_category');
								if($item_cats):
								foreach($item_cats as $item_cat) {
									$item_classes .= $item_cat->slug . ' ';
								}
								endif;
								$thumb_link = wp_get_attachment_image_src(get_post_thumbnail_id(), 'portfolio-one');															
								
								if($data['single_portfolio_style'] != 'modern') {
		                            get_template_part('content/portfolio/default_category'); 
		                        }
		                        else {
		                            get_template_part('content/portfolio/modern_category');    
		                        }

							endif; 
						endwhile; 
						?>
                    </div>                    
                </div>
                <?php cr_pagination($gallery->max_num_pages, $range = 2); ?>
 			</div>
<?php get_footer(); ?>