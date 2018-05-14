<?php
global $data;
$field_1 = ( $data['pd_custom' ] && ( $data['client_name_custom'] != 'Client name' ) ) ? $data['client_name_custom'] : __('Client name', 'Creativo');
$field_2 = ( $data['pd_custom' ] && ( $data['skills_custom'] != 'Skills' ) ) ? $data['skills_custom'] : __('Skills', 'Creativo');
get_header(); ?>
	<div class="row">
	    <div id="content" class="portfolio-one">
            <div class="portfolio-wrapper">
            	<?php
				while(have_posts()): the_post();
					if(has_post_thumbnail() || get_post_meta($post->ID, 'pyre_youtube', true) || get_post_meta($post->ID, 'pyre_vimeo', true)):
				    ?>
                        <?php
                        $item_classes = '';
                        $item_cats = get_the_terms($post->ID, 'portfolio_category');        				

                        if($item_cats):
                            foreach($item_cats as $item_cat) {
                                $item_classes .= $item_cat->slug . ' ';
                            }
                        endif;
        				$thumb_link = wp_get_attachment_image_src(get_post_thumbnail_id(), 'portfolio-one');

                        if($data['portfolio_categ_style'] == 'default') {
                            get_template_part('content/portfolio/default_category'); 
                        }
                        else {
                            get_template_part('content/portfolio/modern_category');    
                        }
                    endif; 
                endwhile; 
                wp_reset_query();
                ?>
            </div>
        </div>    
		<?php cr_pagination($portf->max_num_pages, $range = 2); ?>
	</div>
<?php get_footer(); ?>