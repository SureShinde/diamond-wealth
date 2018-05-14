<?php global $data; ?>

<div class="row_full">
    <div class="portfolio-modern">
    	        
        <?php while(have_posts()): the_post(); ?>

        	<?php if(get_post_meta($post->ID, 'pyre_width', true) != 'half') { ?>
	        	<div class="sp_title_desc">
	        		<h2 class="sp_title"><?php the_title(); ?></h2>
	        		<div class="sp_description"><?php the_content(); ?></div>
	        	</div>
	        	<?php            
	            	cr_flexslider_render();	            
	            if($data['project_details']) { 
	            	cr_project_details_modern();            
	            } 
            }
            else {
            	?>
            	<div class="modern_portfolio_half clearfix">
            		<div class="modern_portfolio_image">
            			<?php cr_flexslider_render(); ?>
            		</div>
            		<div class="modern_portfolio_content">
            			<div class="sp_title_desc">
            				<div class="portfolio-modern-categs"><?php echo get_the_term_list($post->ID, 'portfolio_category', '<h4>', ', ', '</h4>');?></div>
			        		<h2 class="sp_title"><?php the_title(); ?></h2>
			        		<div class="sp_description"><?php the_content(); ?></div>
			        	</div>
            			<?php cr_project_details_modern(); ?>
            		</div>
            	</div>
            	<?php
            }
			if( $data['port_social_icons'] || $data['show_port_navi'] ){
			?>
				<div class="navigation_share_area">
					<?php 
					if($data['show_port_navi']) { 
					?>
						<div class="portfolio-navigation clearfix">				
			            	<div class="portfolio_prev_link"><?php previous_post_link('%link', '<h4>' . __('Previous Project','Creativo') . '</h4>' ); ?></div>
			            	<div class="portfolio_next_link"><?php next_post_link('%link', '<h4>' . __('Next project','Creativo') . '</h4>' ); ?></div>
			        	</div>
			        <?php } 
			        if ($data['port_social_icons']) {
			        ?>
						<div class="share_posts_wrap">
							<div class="social_icons">
		                        <div class="share_text"><?php _e('Share: ','Creativo'); ?></div>    
		                        	<?php cr_share_post(); ?>
		                        <div class="clr"></div>
		                    </div>
						</div>
					<?php
					}
					?>
				</div>	
			<?php
			}
			
			if($data['related_projects']) { 			
				modern_related_projects(); 
			} 
			?>                          

        <?php endwhile; wp_reset_query(); ?>        

    </div>

    <?php
    if($data['related_projects']) { 
	?>
     
    <?php 
    } 
    ?>      
</div>