<?php global $data, $item_classes, $thumb_link, $field_1, $field_2; ?>
<div class="portfolio-item-modern <?php echo $item_classes; ?> clearfix">
    <div class="portfolio-modern-image">
        <div class="flexslider" data-interval="0" data-flex_fx="fade">
            <ul class="slides">
                <?php if( get_post_meta(get_the_ID(), 'pyre_youtube', true) != ''){ ?>
                    <li class="video-container">                            
                        <?php echo  do_shortcode('[youtube id="'.get_post_meta(get_the_ID(), 'pyre_youtube', true).'" ]'); ?>                               
                    </li>
                    <?php 
                    $has_slides = true;
                }  
                if( get_post_meta(get_the_ID(), 'pyre_vimeo', true) != ''){ ?>
                    <li class="video-container">                        
                        <?php echo  do_shortcode('[vimeo id="'.get_post_meta(get_the_ID(), 'pyre_vimeo', true).'" width="600" height="350"]'); ?>
                    </li>
                    <?php 
                    $has_slides = true;
                } 
                
                if( has_post_thumbnail() ){   
                ?>                         
                    <?php $full_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); ?>
                    <?php $attachment_data = wp_get_attachment_metadata(get_post_thumbnail_id()); ?>
                    <li>
                        <a href="<?php echo $full_image[0]; ?>" rel="prettyPhoto['gallery']"><?php the_post_thumbnail('portfolio-two');?></a>                                    
                    </li>
                <?php }
                ?>
            </ul>
        </div>
    </div>
    <div class="portfolio-modern-description">
        <div class="potfolio-modern-content-wrap">
            <div class="portfolio-modern-categs"><?php echo get_the_term_list(get_the_ID(), 'portfolio_category', '<h4>', ', ', '</h4>');?></div>
            <div class="portfolio-modern-title"><h3><a href="<?php echo get_permalink(get_the_ID());?>"><?php echo get_the_title(); ?></a></h3></div>
            <div class="portfolio-modern-content"><?php echo string_limit_words(get_the_excerpt(), $data['portfolio_excerpt_length'] ? $data['portfolio_excerpt_length'] : 30 ); ?>...</div>
        </div>
        <?php if($data['project_details']) : ?>
            <div class="portfolio-modern-proj-details portfolio-modern">
                <div class="portfolio-misc-info">                
                    
                    <?php if(get_post_meta(get_the_ID(), 'pyre_client_name', true)): ?>                    
                        <div class="project-info-details">                          
                            <h3><?php echo $field_1; ?></h3>
                            <span><?php echo get_post_meta(get_the_ID(), 'pyre_client_name', true); ?></span>
                        </div>
                    <?php endif; ?>
                    
                    <?php if(get_post_meta(get_the_ID(), 'pyre_skills', true)): ?>
                        <div class="project-info-details">
                            <h3><?php echo $field_2; ?></h3>
                            <span><?php echo get_post_meta(get_the_ID(), 'pyre_skills', true); ?></span>                                                      
                        </div>
                    <?php endif; ?>

                    <?php if( $data['project_date'] != '0') : ?>
                        <div class="project-info-details">
                            <h3><?php echo __('Year','Creativo'); ?></h3>
                            <span><?php echo get_the_date( 'Y' ); ?></span>                       
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>