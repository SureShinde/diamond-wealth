<?php global $data, $item_classes, $thumb_link; ?>
<div class="portfolio-item <?php echo $item_classes; ?>">
    <!-- Project Feed -->
	<div class="project-feed clearfix">
		<div class="full clearfix">
			<div class="image_show">                                              	                                            
                <div class="ch-item portfolio-1">	
                    <div class="ch-info portfolio-1">
                        <div class="ch-info-front1 "><img src="<?php echo $thumb_link[0]; ?>" /></div>
                        <div class="ch-info-back1 portfolio-1" style="background-image:url(<?php echo $thumb_link[0]; ?>);">
                            <?php 													
							if (get_post_meta($post->ID, 'pyre_custom_link', true) != '') {													
							?>
								<div class="info"><a href="<?php echo get_post_meta($post->ID, 'pyre_custom_link', true); ?>" target="<?php echo get_post_meta($post->ID, 'pyre_custom_link_target', true); ?>"><i class="fa fa-search"></i></a>
								</div>                                                    	
							<?php
							}
							else{
							?>														
								<div class="info"><a href="<?php echo get_permalink($post->ID)?>"><i class="fa fa-search"></i></a>
								</div>
							<?php 
							} 
							?>
                        </div>
                    </div>
                </div>
			</div>
            <div class="description">                             	                                        
                <span class="title">
                    <?php 
                    if (get_post_meta($post->ID, 'pyre_custom_link', true) != '') {													
                    ?>
                        <a href="<?php echo get_post_meta($post->ID, 'pyre_custom_link', true); ?>" target="<?php echo get_post_meta($post->ID, 'pyre_custom_link_target', true); ?>"><?php echo get_the_title(); ?></a>
                    <?php
                    }
                    else{
                    ?>
                        <a href="<?php echo get_permalink($post->ID)?>"><?php echo get_the_title(); ?></a>
                    <?php 
                    } 
                    ?>                                
                </span>
                <p><span class="args"><i class="fa fa-tag"></i><?php echo get_the_term_list($post->ID, 'portfolio_category', '', ', ', ''); ?></span></p>
             
                <?php 
                if (get_post_meta($post->ID, 'pyre_custom_link', true) != '') {													
                ?>
                    <a href="<?php echo get_post_meta($post->ID, 'pyre_custom_link', true); ?>" target="<?php echo get_post_meta($post->ID, 'pyre_custom_link_target', true); ?>" class="button button_default small">View More</a>
                <?php
                }
                else{
                ?>
                    <a href="<?php echo get_permalink($post->ID)?>" class="button button_default small">View More</a>
                <?php 
                } 
                ?>											  	
        	</div>        
		</div>                                
	</div>
   <!-- /Project Feed -->
</div>