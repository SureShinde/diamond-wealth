<?php

/* Add Next Page Button in First Row */
add_filter( 'mce_buttons', 'my_add_next_page_button', 1, 2 ); // 1st row

function my_add_next_page_button( $buttons, $id ){
 
    /* only add this for content editor */
    if ( 'content' != $id )
        return $buttons;
 
    /* add next page after more tag button */
    array_splice( $buttons, 13, 0, 'wp_page' );
 
    return $buttons;
}

if( !function_exists( 'hex2rgba' ) ) {
  function hex2rgba($hex) {

  	$hex = str_replace("#", "", $hex);

     if(strlen($hex) == 3) {
        $r = hexdec(substr($hex,0,1).substr($hex,0,1));
        $g = hexdec(substr($hex,1,1).substr($hex,1,1));
        $b = hexdec(substr($hex,2,1).substr($hex,2,1));
     } else {
        $r = hexdec(substr($hex,0,2));
        $g = hexdec(substr($hex,2,2));
        $b = hexdec(substr($hex,4,2));
     }
     $rgb = array($r, $g, $b);
     //return implode(",", $rgb); // returns the rgb values separated by commas
     return $rgb; // returns an array with the rgb values
  }
}

#-----------------------------------------------------------------#
# Hex to darker RGBA function
#-----------------------------------------------------------------#

if( !function_exists( 'hexDarker' ) ) {
  function hexDarker( $hex, $factor = 30 ) {
      $new_hex = '';
      if ( $hex == '' || $factor == '' ) {
          return false;
      }

      $hex = str_replace( '#', '', $hex );

      $base['R'] = hexdec( $hex{0}.$hex{1} );
      $base['G'] = hexdec( $hex{2}.$hex{3} );
      $base['B'] = hexdec( $hex{4}.$hex{5} );


      foreach ( $base as $k => $v ) {
          $amount = $v / 100;
          $amount = round( $amount * $factor );
          $new_decimal = $v - $amount;

          $new_hex_component = dechex( $new_decimal );
          if ( strlen( $new_hex_component ) < 2 ) { $new_hex_component = "0".$new_hex_component; }
          $new_hex .= $new_hex_component;
      }

      return '#'.$new_hex;
  }
}


if( !function_exists( 'get_related_posts' ) ) {
  function get_related_posts($post_id,$items) {
  	
  	$query = new WP_Query();    
      $args = array();
  	$args = wp_parse_args($args, array(
  		'showposts' => $items,
  		'post__not_in' => array($post_id),
  		'ignore_sticky_posts' => 0,
          'category__in' => wp_get_post_categories($post_id)
  	));
  	
  	$query = new WP_Query($args);
  	
    	return $query;
  }
}

if( !function_exists( 'get_related_projects' ) ) {
  function get_related_projects($post_id,$items) {
      $query = new WP_Query();
      
      $args = $item_array = array();

      $item_cats = get_the_terms($post_id, 'portfolio_category');
      if($item_cats):
      foreach($item_cats as $item_cat) {
          $item_array[] = $item_cat->term_id;
      }
      endif;

      $args = wp_parse_args($args, array(
          'showposts' => $items,
          'post__not_in' => array($post_id),
          'ignore_sticky_posts' => 0,
          'post_type' => 'creativo_portfolio',
          'tax_query' => array(
              array(
                  'taxonomy' => 'portfolio_category',
                  'field' => 'id',
                  'terms' => $item_array
              )
          )
      ));
      
      $query = new WP_Query($args);
      
      return $query;
  }
}

if( !function_exists( 'related_posts_vertical' ) ) {
  function related_posts_vertical() {
      global $data;

      $related = get_related_posts( get_the_ID(), $data['related_items'] ); 

      if( $related -> have_posts() ){
          ?>
          <div class="related_posts_heading">
              <?php _e('Related Posts', 'Creativo'); ?>
          </div>
          <div class="related_posts_wrap">
              <?php
              while( $related -> have_posts() ): $related -> the_post();
              ?>

                  <div class="related_post_item clearfix">
                      <?php
                      if( ( has_post_thumbnail() || get_post_meta( get_the_ID(), 'pyre_youtube', true) || get_post_meta(get_the_ID(), 'pyre_vimeo', true))) {
                      ?>
                          <div class="blogpost_small_pic ">
                              <div class="flexslider mini related_posts">
                                  <ul class="slides">
                                      <?php

                                      if(get_post_meta( get_the_ID(), 'pyre_youtube', true)): 
                                      ?>
                                          <li>
                                              <div class="video-container" style="height:12px;">
                                                  <iframe title="YouTube video player" width="218px" height="134px" src="//youtube.com/embed/<?php echo get_post_meta(get_the_ID(), 'pyre_youtube', true); ?>" frameborder="0" allowfullscreen>
                                                  </iframe>
                                              </div>
                                          </li>
                                      <?php
                                      endif;

                                      if(get_post_meta(get_the_ID(), 'pyre_vimeo', true)) { 
                                      ?>
                                          <li>
                                              <div class="video-container" style="height:12px;">
                                                  <iframe src="//player.vimeo.com/video/<?php echo get_post_meta(get_the_ID(), 'pyre_vimeo', true);?>" width="220px" height="161px" frameborder="0">
                                                  </iframe>
                                              </div>
                                          </li>';
                                      <?php
                                      }

                                      if(has_post_thumbnail()) {
                                      ?>
                                          <li>
                                              <div class="one-fourth-recent">
                                                  <figure>
                                                      <a href="<?php echo get_permalink($post->ID); ?>">
                                                          <?php echo get_the_post_thumbnail($post->ID, 'blog-small'); ?>
                                                      </a>
                                                  </figure>
                                              </div>
                                          </li>
                                      <?php
                                      }                        
                                  ?>
                                  </ul>
                                  </div>
                          </div>
                      <?php 
                      } 
                      ?>
                      <div class="blogpost_small_desc">
                          <h4><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h4>
                          <div class="related_post_date"><?php echo get_the_date(); ?></div>
                          <div class="related_post_description">
                              <?php echo string_limit_words(get_the_excerpt(), 25).'...'; ?>
                          </div>
                      </div>
                  </div>
              <?php
              endwhile;
              wp_reset_query();
              ?>
          </div>
      <?php
      }
  }
}

if( !function_exists( 'modern_related_posts' ) ) {
  function modern_related_posts() {
    global $items, $related_columns;
    $relate = get_related_posts(get_the_ID(),$items);  
    if($relate->have_posts()): ?>
      <div class="posts-boxes related_posts">
        <div class="content_box_title">
          <h5><?php _e('Related Posts', 'Creativo'); ?></h5>
        </div>
        <div class="recent_posts_container related_posts">
          <div class="is_grid clearfix">
          <?php                   
            while($relate->have_posts()): $relate->the_post();                      
            ?>
            <div class="blogpost grid_posts columns-<?php echo $related_columns; ?>">
              <?php            
              if(has_post_thumbnail() || get_post_meta( get_the_ID(), 'pyre_youtube', true) || get_post_meta(get_the_ID(), 'pyre_vimeo', true)):
              ?>
                <div class="flexslider mini related_posts">
                    <ul class="slides">
                      <?php
                      if(get_post_meta( get_the_ID(), 'pyre_youtube', true)):
                        echo '<li><div class="video-container" style="height:12px;"><iframe title="YouTube video player" width="218px" height="134px" src="//www.youtube.com/embed/' . get_post_meta(get_the_ID(), 'pyre_youtube', true) . '" frameborder="0" allowfullscreen></iframe></div></li>';
                      endif;
                      if(get_post_meta(get_the_ID(), 'pyre_vimeo', true)):
                        echo '<li><div class="video-container" style="height:12px;"><iframe src="//player.vimeo.com/video/' . get_post_meta(get_the_ID(), 'pyre_vimeo', true) . '" width="220px" height="161px" frameborder="0"></iframe></div></li>';
                      endif;                          
                    
                      if(has_post_thumbnail()):
                    
                        $attachment_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'recent-posts');
                        $full_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                        $attachment_data = wp_get_attachment_metadata(get_post_thumbnail_id());                           
                        echo '<li><div class="one-fourth-recent"><figure><a href="'.get_permalink($post->ID).'"><div class="text-overlay"><div class="info"><i class="fa fa-search"></i></div></div></figure>'.get_the_post_thumbnail($post->ID, 'recent-posts').'</a></div></li>';
                          
                      endif;                                            
                      ?>
                    </ul>
                </div>
              <?php
              endif;
              ?>
              <div class="description">
                <h3><a href="<?php echo get_permalink($post->ID);?>"><?php echo get_the_title();?></a></h3>                   
              </div>
            </div>
                              
          <?php             
          endwhile;
          wp_reset_query();
          ?>
          </div>                          
        </div>   
    </div>                        
    <?php 
    endif; 
  }
}


if( !function_exists( 'modern_related_projects' ) ) {
  function modern_related_projects() {  
    
    $relate = get_related_projects(get_the_ID(),4);  
    if($relate->have_posts()): ?>
      <div class="posts-boxes related_posts">      
          <h5 class="related_posts_title"><?php _e('Related Projects', 'Creativo'); ?></h5>      
        <div class="recent_posts_container related_posts">
          <div class="is_grid clearfix">
          <?php                   
            while($relate->have_posts()): $relate->the_post();                      
            ?>
            <div class="blogpost grid_posts columns-4">
              <?php            
              if(has_post_thumbnail() || get_post_meta( get_the_ID(), 'pyre_youtube', true) || get_post_meta(get_the_ID(), 'pyre_vimeo', true)):
              ?>
                <div class="flexslider mini related_posts">
                    <ul class="slides">
                      <?php
                      if(get_post_meta( get_the_ID(), 'pyre_youtube', true)):
                        echo '<li><div class="video-container" style="height:12px;"><iframe title="YouTube video player" width="218px" height="134px" src="//www.youtube.com/embed/' . get_post_meta(get_the_ID(), 'pyre_youtube', true) . '" frameborder="0" allowfullscreen></iframe></div></li>';
                      endif;
                      if(get_post_meta(get_the_ID(), 'pyre_vimeo', true)):
                        echo '<li><div class="video-container" style="height:12px;"><iframe src="//player.vimeo.com/video/' . get_post_meta(get_the_ID(), 'pyre_vimeo', true) . '" width="220px" height="161px" frameborder="0"></iframe></div></li>';
                      endif;                          
                    
                      if(has_post_thumbnail()):
                    
                        $attachment_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'recent-posts');
                        $full_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                        $attachment_data = wp_get_attachment_metadata(get_post_thumbnail_id());                           
                        //echo '<li><div class="one-fourth-recent"><figure><a href="'.get_permalink($post->ID).'"><div class="text-overlay"><div class="info"><i class="fa fa-search"></i></div></div></figure>'.get_the_post_thumbnail($post->ID, 'recent-posts').'</a></div></li>';
                        ?>
                        <li>
                          <div class="related_posts_img">
                            <?php echo get_the_post_thumbnail($post->ID, 'portfolio-four'); ?>
                            <div class="title_categ_over">
                              <div class="title_categ_over_wrap">
                                <h4><a href="<?php echo get_permalink( get_the_ID() );?>"><?php echo get_the_title();?></a></h4> 
                                <span class="related_port_categ"><?php echo get_the_term_list( get_the_ID(), 'portfolio_category', '', ', ', ''); ?></span>
                              </div>
                            </div>
                          </div>
                        </li>
                        <?php  
                      endif;                                            
                      ?>
                    </ul>
                </div>
              <?php
              endif;
              ?>            
            </div>
                              
          <?php             
          endwhile;
          wp_reset_query();
          ?>
          </div>                          
        </div>   
    </div>                        
    <?php 
    endif; 
  }
}


if( !function_exists( 'portfolio_page_template' ) ) {
  function portfolio_page_template( $cols, $thumb) {

    global $portfolio_style, $grid, $data;

    $thumbnail = get_post_meta(get_the_ID(), 'pyre_portfolio_style', true) != 'masonry' ? 'portfolio-' . $thumb : 'full';

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
    <div class="portfolio-wrapper <?php echo $grid; ?> clearfix" masonry-effect="<?php echo (get_post_meta(get_the_ID(), 'pyre_portfolio_style', true) == 'masonry') ? 'yes' : 'no' ?>">  
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
          if(has_post_thumbnail() || get_post_meta(get_the_ID(), 'pyre_youtube', true) || get_post_meta(get_the_ID(), 'pyre_vimeo', true)):                
            $item_classes = '';
            $item_cats = get_the_terms(get_the_ID(), 'portfolio_category');
            if($item_cats):
              foreach($item_cats as $item_cat) {
                $item_classes .= $item_cat->slug . ' ';
              }
            endif;                
            $thumb_link = wp_get_attachment_image_src(get_post_thumbnail_id(), $thumbnail);
            $full_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');           
            
            if ( $portfolio_style != 'flat' && $portfolio_style != 'masonry' ){          
            ?>
              <div class="portfolio-item  <?php echo $item_classes; ?>">   
                  <div class="project-feed clearfix">                   
                      <div class="ch-item portfolio-<?php echo $cols; ?>"> 
                          <div class="ch-info portfolio-<?php echo $cols; ?>">
                              <div class="ch-info-front<?php echo $cols; ?> "><img src="<?php echo $thumb_link[0]; ?>" /></div>
                              <div class="ch-info-back<?php echo $cols; ?> portfolio-<?php echo $cols; ?>" style="background-image:url(<?php echo $thumb_link[0]; ?>);">
                                  <?php                           
                                  if (get_post_meta(get_the_ID(), 'pyre_custom_link', true) != '') {                         
                                  ?>
                                      <div class="info"><a href="<?php echo get_post_meta(get_the_ID(), 'pyre_custom_link', true); ?>" target="<?php echo get_post_meta(get_the_ID(), 'pyre_custom_link_target', true); ?>"><i class="fa fa-search"></i></a>
                                      </div>                                                      
                                  <?php
                                  }
                                  else{
                                  ?>                            
                                      <div class="info"><a href="<?php echo get_permalink(get_the_ID())?>"><i class="fa fa-search"></i></a>
                                      </div>
                                  <?php 
                                  } 
                                  ?>                          
                              </div>
                          </div>
                      </div>
                  </div>  
                  <div class="portfolio_details">                                     
                      <h3><a href="<?php echo get_permalink(get_the_ID())?>"><?php echo get_the_title(); ?></a></h3>
                      <div class="tags"><?php echo get_the_term_list(get_the_ID(), 'portfolio_category', '', ', ', '');?></div>
                  </div>                
              </div>  
            <?php 
            }
            else {
              if($data['single_portfolio_style'] != 'modern') {
              ?>  
                <figure class="effect-zoe cols-<?php echo $cols; ?> <?php echo $item_classes; ?>"> 
                  <?php echo get_the_post_thumbnail(get_the_ID(), $thumbnail);?>
                  <div class="effect-overlay">
                    <div class="zoomin"><a href="<?php echo $full_image[0]; ?>" rel="prettyPhoto"><i class="fa fa-search"></i></a></div>
                      <?php
                      if (get_post_meta(get_the_ID(), 'pyre_custom_link', true) != '') {
                      ?>  
                        <div class="launch"><a href="<?php echo get_post_meta(get_the_ID(), 'pyre_custom_link', true); ?>" target="<?php echo get_post_meta(get_the_ID(), 'pyre_custom_link_target', true); ?>"><i class="fa fa-link"></i></a></div>';
                      <?php    
                      }
                      else {
                      ?>
                        <div class="launch"><a href="<?php echo get_permalink(get_the_ID()); ?>"><i class="fa fa-link"></i></a></div>
                      <?php
                      }
                    ?>
                  </div>
                  <figcaption>
                    <h3><a href="<?php echo get_permalink(get_the_ID());?>"><?php echo get_the_title(); ?></a></h3>
                  </figcaption>
                </figure>
            <?php
              }
              else {
                $link = ( get_post_meta ( get_the_ID(), 'pyre_custom_link', true ) != '' ) ? get_post_meta ( get_the_ID(), 'pyre_custom_link', true) : get_permalink( get_the_ID() );
                $target = ( get_post_meta( get_the_ID(), 'pyre_custom_link', true) != '' ) ? get_post_meta(get_the_ID(), 'pyre_custom_link_target', true) : '_self';
                ?>
                <figure class="cols-<?php echo $cols; ?> modern_portfolio_layout <?php echo $item_classes; ?>">              
                  
                  <a href="<?php echo $link; ?>" target="<?php echo $target; ?>"><?php echo get_the_post_thumbnail(get_the_ID(), $thumbnail);?></a>
                    
                  <div class="modern_overlay_effect">
                    <a href="<?php echo $link; ?>" class="make_this_full" target="<?php echo $target; ?>"></a>
                    <div class="portfolio_content_wrap">                  
                      <h3><a href="<?php echo $link; ?>" target="<?php echo $target; ?>"><?php echo get_the_title(); ?></a></h3>
                      <span class="portfolio_categ_list"><?php echo get_the_term_list(get_the_ID(), 'portfolio_category', '', ', ', '');?></span>
                    </div>
                  </div>  
                  
                </figure>
              <?php
              } 
            }
          endif;
        endwhile;
        wp_reset_query();
        ?>
    </div>
    <?php
    cr_pagination($gallery->max_num_pages, $range = 2);
  }
}

if( !function_exists( 'cr_flat_portfolio_no_video' ) ) {
  function cr_flat_portfolio_no_video( $cols, $item_classes, $css_out, $link, $target, $port_date, $full_image) {

    $html .= '<figure class="effect-zoe cols-'.$cols.' '. $item_classes . '">'; 
      $html .= '<div class="figure_image_holder">';
        $html .= get_the_post_thumbnail( get_the_ID(), $css_out );
        $html .= '<div class="effect-overlay">';

          $html .= '<div class="zoomin"><a href="'. $full_image .'" rel="prettyPhoto"><i class="fa fa-search"></i></a></div>';        
          $html .= '<div class="launch"><a href="'. $link .'" target="'. $target .'"><i class="fa fa-link"></i></a></div>';
          
        $html .= '</div>';
      $html .= '</div>';  
      $html .= '<figcaption>';
        
        $html .= '<h3><a href="'. $link .'" target="'. $target .'">'. get_the_title().'</a></h3>';
        
        if($port_date =='yes'){
          $html .= '<div class="portfolio_date">'.get_the_date('', get_the_ID()).'</div>';
        }
      $html .= '</figcaption>';
    $html .= '</figure>';

    return $html;
  }
}

if( !function_exists( 'cr_flat_portfolio_modern_style' ) ) {
  function cr_flat_portfolio_modern_style( $cols, $item_classes, $thumbnail, $link, $target ) {

    $html .= '<figure class="cols-' . $cols . ' modern_portfolio_layout ' . $item_classes . '">';
                  
      $html .= '<a href="' . $link . '" target="' . $target . '">' . get_the_post_thumbnail( get_the_ID(), $thumbnail ) .'</a>';
        
      $html .= '<div class="modern_overlay_effect">';
        $html .= '<a href="' . $link . '" class="make_this_full" target="' . $target . '"></a>';
        $html .= '<div class="portfolio_content_wrap">';                 
          $html .= '<h3><a href="' . $link . '" target="' . $target . '">' . get_the_title() . '</a></h3>';
          $html .= '<span class="portfolio_categ_list">' . get_the_term_list(get_the_ID(), 'portfolio_category', '', ', ', '') .'</span>';
        $html .= '</div>';
      $html .= '</div>'; 
      
    $html .= '</figure>';

    return $html;
  }
}


if( !function_exists( 'cr_flexslider_render' ) ) {
  function cr_flexslider_render() {
    global $data;
    $timeout = ($data['flexslider_slide_timeout'] && $data['flexslider_slide_timeout'] != 0) ? $data['flexslider_slide_timeout'] : 0;
    if(has_post_thumbnail() || get_post_meta( get_the_ID(), 'pyre_youtube', true ) || get_post_meta( get_the_ID(), 'pyre_vimeo', true )):
    ?>
      <div class="flexslider" data-interval="<?php echo $timeout; ?>" data-flex_fx="fade" data-smooth-height="false">
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
                <?php echo do_shortcode('[vimeo id="'.get_post_meta(get_the_ID(), 'pyre_vimeo', true).'" width="600" height="350"]'); ?>
            </li>
            <?php 
            $has_slides = true;
          } 

          if(has_post_thumbnail() && ( get_post_meta(get_the_ID(), 'pyre_skip_first', true) !='yes' )){ 
          ?>               
            <?php $full_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); ?>
            <?php $attachment_data = wp_get_attachment_metadata(get_post_thumbnail_id()); ?>
            <li>
              <a href="<?php echo $full_image[0]; ?>" rel="prettyPhoto['gallery']" title="<?php echo get_the_title(get_post_thumbnail_id()); ?>"><?php the_post_thumbnail('full');?></a>                                    
            </li>
          <?php 
          } 

          $i = 2;
          while($i <= $data['featured_images_count']):
            $attachment = new StdClass();
            $attachment->ID = cr_get_featured_image_id('featured-image-'.$i, 'creativo_portfolio');
            if($attachment->ID):                    
              ?>
            
              <?php $full_image = wp_get_attachment_image_src($attachment->ID, 'full'); ?>
              <?php $attachment_data = get_post($attachment->ID);?>
              <li>  
                <a href="<?php echo $full_image[0] ?>" rel="prettyPhoto['gallery']" title="<?php echo get_the_title($attachment->ID); ?>"><img src="<?php echo $full_image[0]; ?>" alt="<?php echo $attachment_data->post_title; ?>" /></a>  
              </li>                                                        
              <?php 
              $has_slides = true;
            endif; 
            $i++; 
          endwhile; 

          if(!$has_slides && ( get_post_meta(get_the_ID(), 'pyre_skip_first', true) =='yes') ) {
            echo '<li></li>';
          }
          ?>    
        </ul>
      </div>
      <?php
    endif;
  }
}

if( !function_exists( 'cr_project_details_modern' ) ) {
  function cr_project_details_modern() {
    global $data;

    $field_1 = ( $data['pd_custom' ] && ( $data['client_name_custom'] != 'Client name' ) ) ? $data['client_name_custom'] : __('Client name', 'Creativo');
    $field_2 = ( $data['pd_custom' ] && ( $data['skills_custom'] != 'Skills' ) ) ? $data['skills_custom'] : __('Skills', 'Creativo');
    $field_3 = ( $data['pd_custom' ] && ( $data['category_custom'] != 'Category' ) ) ? $data['category_custom'] : __('Category', 'Creativo');
    $field_4 = ( $data['pd_custom' ] && ( $data['website_custom'] != 'Website' ) ) ? $data['website_custom'] : __('Website', 'Creativo');

    ?>                  
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
          <h3><?php echo _e('Year','Creativo'); ?></h3>
          <span><?php the_date( 'Y' ); ?></span>             
        </div>
      <?php endif; ?>
      
      <?php if(get_the_term_list(get_the_ID(), 'portfolio_category', '', '<br />', '') && (get_post_meta(get_the_ID(), 'pyre_width', true) != 'half') ): ?>
        <div class="project-info-details">
          <h3><?php echo $field_3; ?></h3>
          <span><?php echo get_the_term_list(get_the_ID(), 'portfolio_category', '', ', ', ''); ?></span>                                                      
        </div>
      <?php endif; ?>
      
      <?php if(get_post_meta(get_the_ID(), 'pyre_website_text', true) && get_post_meta(get_the_ID(), 'pyre_website_url', true)): ?>
        <div class="project-info-details">
          <h3><?php echo $field_4; ?></h3>  
          <span><a href="<?php echo get_post_meta(get_the_ID(), 'pyre_website_url', true); ?>" rel="nofollow" target="_blank"><?php echo get_post_meta(get_the_ID(), 'pyre_website_text', true); ?></a></span>
        </div>
      <?php endif; ?>

    </div>
    <?php
  }
}

if( !function_exists( 'one_column_modern_portfolio' ) ) {
  function one_column_modern_portfolio( $item_classes ) {
    global $data;
    $field_1 = ( $data['pd_custom' ] && ( $data['client_name_custom'] != 'Client name' ) ) ? $data['client_name_custom'] : __('Client name', 'Creativo');
    $field_2 = ( $data['pd_custom' ] && ( $data['skills_custom'] != 'Skills' ) ) ? $data['skills_custom'] : __('Skills', 'Creativo');
    $html = '';

    $html .= '<div class="portfolio-item-modern ' . $item_classes . ' clearfix">';
      $html .= '<div class="portfolio-modern-image">';
        $html .= '<div class="flexslider" data-interval="0" data-flex_fx="fade">';
          $html .= '<ul class="slides">';
            
            if( get_post_meta(get_the_ID(), 'pyre_youtube', true) != ''){
              $html .= '<li class="video-container">';
                $html .= do_shortcode('[youtube id="'.get_post_meta(get_the_ID(), 'pyre_youtube', true).'" ]');
              $html .= '</li>';
              $has_slides = true;
            }

            if( get_post_meta(get_the_ID(), 'pyre_vimeo', true) != ''){
              $html .= '<li class="video-container">';
                $html .= do_shortcode('[vimeo id="'.get_post_meta(get_the_ID(), 'pyre_vimeo', true).'" width="600" height="350"]');
              $html .= '</li>';
              $has_slides = true;
            }

            if( has_post_thumbnail() ){
              $full_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
              $attachment_data = wp_get_attachment_metadata(get_post_thumbnail_id());
              $html .= '<li>';
                $html .= '<a href="' . $full_image[0] . '" rel="prettyPhoto[\'gallery_'.get_the_ID().'\']">' . get_the_post_thumbnail( get_the_ID(), 'portfolio-two') . '</a>';                                    
              $hml .= '</li>';
            }

          $html .= '</ul>';
        $html .= '</div>';
      $html .= '</div>';
      $html .= '<div class="portfolio-modern-description">';
        $html .= '<div class="potfolio-modern-content-wrap">';
          $html .= '<div class="portfolio-modern-categs">' . get_the_term_list(get_the_ID(), 'portfolio_category', '<h4>', ', ', '</h4>') . '</div>';
          $html .= '<div class="portfolio-modern-title"><h3><a href="' . get_permalink(get_the_ID()) . '">' . get_the_title() . '</a></h3></div>';
          $html .= '<div class="portfolio-modern-content">' . string_limit_words(get_the_excerpt(), $excerpt_length ? $excerpt_length : 30 ) . '...</div>';
        $html .= '</div>'; 
        
        if($data['project_details']) {
          $html .= '<div class="portfolio-modern-proj-details portfolio-modern">';
            $html .= '<div class="portfolio-misc-info">';

              if(get_post_meta(get_the_ID(), 'pyre_client_name', true)):
                $html .= '<div class="project-info-details">';
                  $html .= '<h3>' . $field_1 . '</h3>';
                  $html .= '<span>' . get_post_meta(get_the_ID(), 'pyre_client_name', true) . '</span>';
                $html .= '</div>';
              endif; 

              if(get_post_meta(get_the_ID(), 'pyre_skills', true)):
                $html .= '<div class="project-info-details">';
                  $html .= '<h3>' . $field_2 . '</h3>';
                  $html .= '<span>' . get_post_meta(get_the_ID(), 'pyre_skills', true) . '</span>';
                $html .= '</div>';
              endif; 

              if( $data['project_date'] != '0') :
                $html .= '<div class="project-info-details">';
                  $html .= '<h3>' . __('Year','Creativo') . '</h3>';
                  $html .= '<span>' . get_the_date( 'Y' ) . '</span>';
                $html .= '</div>';
              endif;

            $html .= '</div>';
          $html .= '</div>';
        }

      $html .= '</div>';
    $html .= '</div>';

    return $html;
  }
}

if( !function_exists( 'cr_checkIfMenuIsSetByLocation' ) ) {
  function cr_checkIfMenuIsSetByLocation($menu_location = '') {
      if(has_nav_menu($menu_location)) {
          return true;
      }

      return false;
  }
}

if( !function_exists( 'nv_is_out_of_stock' ) ) {
  function nv_is_out_of_stock() {
	    global $post;
	    $post_id = $post->ID;
	    $stock_status = get_post_meta($post_id, '_stock_status',true);
	    
	    if ($stock_status == 'outofstock') {
	    return true;
	    } else {
	    return false;
	    }
	}
}

if( !function_exists( 'cr_pagination' ) ) {
  function cr_pagination($pages = '', $range = 2) {   

  	global $data;

       $showitems = ($range * 2)+1;  

       global $paged;
       if(empty($paged)) $paged = 1;

       if($pages == '')
       {
           global $wp_query;
           $pages = $wp_query->max_num_pages;
           if(!$pages)
           {
               $pages = 1;
           }
       }   

       if(1 != $pages)
       {
           echo '<div class="pagination ' . $data['pagination_style'] . ' clearfix">';
          // if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo '<a href="'.get_pagenum_link(1).'"><span class="arrows">&laquo;</span> First</a>';
           if($paged > 1 && $data['en_custom_pag'] && $data['en_navigation_arrows'] ) echo '<a class="pagination-prev" href="'.get_pagenum_link($paged - 1).'"><i class="fa fa-angle-left"></i></a>';

           for ($i=1; $i <= $pages; $i++)
           {
               if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
               {
                   echo ($paged == $i) ? '<span class=current>' . $i . '</span>' : '<a href="'.get_pagenum_link($i).'" class="inactive" >' . $i . '</a>';
               }
           }

           if ($paged < $pages  && $data['en_custom_pag'] && $data['en_navigation_arrows']) echo '<a class="pagination-next" href="' . get_pagenum_link($paged + 1) . '"><i class="fa fa-angle-right"></i></a>';  
           //if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last <span class='arrows'>&raquo;</span></a>";
           echo '</div>';
       }
  }
}

if( !function_exists( 'string_limit_words' ) ) {
  function string_limit_words($string, $word_limit)
  {
  	$words = explode(' ', $string, ($word_limit + 1));
  	
  	if(count($words) > $word_limit) {
  		array_pop($words);
  	}
  	
  	return implode(' ', $words);
  }
}

if(!function_exists('cr_breadcrumb')) {
  
  function cr_breadcrumb() {
        global $data,$post;
        echo '<ul class="breadcrumbs">';

         if ( !is_front_page() ) {
        echo '<li><a href="';
        echo home_url();
        echo '">';
        echo "</a></li>";
        }

        $params['link_none'] = '';
        $separator = '';

        if (is_category() && !is_singular('creativo_portfolio')) {
            $category = get_the_category();
            $ID = $category[0]->cat_ID;
            echo is_wp_error( $cat_parents = get_category_parents($ID, TRUE, '', FALSE ) ) ? '' : '<li>'.$cat_parents.'</li>';
        }

        if(is_singular('creativo_portfolio')) {
            echo get_the_term_list($post->ID, 'portfolio_category', '<li>', '&nbsp;/&nbsp;&nbsp;', '</li>');
            echo '<li>'.get_the_title().'</li>';
        }

        if (is_tax()) {
            $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
            echo '<li>'.$term->name.'</li>';
        }

        if(is_home() || is_front_page()) { echo '<li><i class="fa fa-home"></i></li>'; }
        if(is_page() && !is_front_page()) {
            $parents = array();
            $parent_id = $post->post_parent;
            while ( $parent_id ) :
                $page = get_page( $parent_id );
                if ( $params["link_none"] )
                    $parents[]  = get_the_title( $page->ID );
                else
                    $parents[]  = '<li><a href="' . get_permalink( $page->ID ) . '" title="' . get_the_title( $page->ID ) . '">' . get_the_title( $page->ID ) . '</a></li>' . $separator;
                $parent_id  = $page->post_parent;
            endwhile;
            $parents = array_reverse( $parents );
            echo join( '', $parents );
            echo '<li>'.get_the_title().'</li>';
        }
        if(is_single() && !is_singular('creativo_portfolio')  && !is_singular('event')) {
            $categories_1 = get_the_category($post->ID);
            if($categories_1):
                foreach($categories_1 as $cat_1):
                    $cat_1_ids[] = $cat_1->term_id;
                endforeach;
                $cat_1_line = implode(',', $cat_1_ids);
            endif;
            if( $cat_1_line ) {
                $categories = get_categories(array(
                    'include' => $cat_1_line,
                    'orderby' => 'id'
                ));
                if ( $categories ) :
                    foreach ( $categories as $cat ) :
                        $cats[] = '<li><a href="' . get_category_link( $cat->term_id ) . '" title="' . $cat->name . '">' . $cat->name . '</a></li>';
                    endforeach;
                    echo join( '', $cats );
                endif;
            }
            echo '<li>'.get_the_title().'</li>';
        }
        if(is_tag()){ echo '<li>'."Tag: ".single_tag_title('',FALSE).'</li>'; }
        if(is_404()){ echo '<li>'.__("404 - Page not Found", 'Creativo').'</li>'; }
        if(is_search()){ echo '<li>'.__("Search", 'Creativo').'</li>'; }
        if(is_year()){ echo '<li>'.get_the_time('Y').'</li>'; }

        echo "</ul>";
  }
}

if( ! function_exists( 'less_css' ) ) {
	function less_css( $minify ) {
		/* remove comments */
		$minify = preg_replace( '!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $minify );

		/* remove tabs, spaces, newlines, etc. */
		$minify = str_replace( array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $minify );
			
		return $minify;
	}
}

/* Get Attachment id from image url */
if( ! function_exists( 'pn_get_attachment_id_from_url' ) ) {
  function pn_get_attachment_id_from_url( $attachment_url = '' ) {
 
    global $wpdb;
    $attachment_id = false;
 
    // If there is no url, return.
    if ( '' == $attachment_url )
        return;
 
    // Get the upload directory paths
    $upload_dir_paths = wp_upload_dir();
 
    // Make sure the upload path base directory exists in the attachment URL, to verify that we're working with a media library image
    if ( false !== strpos( $attachment_url, $upload_dir_paths['baseurl'] ) ) {
 
        // If this is the URL of an auto-generated thumbnail, get the URL of the original image
        $attachment_url = preg_replace( '/-\d+x\d+(?=\.(jpg|jpeg|png|gif)$)/i', '', $attachment_url );
 
        // Remove the upload path base directory from the attachment URL
        $attachment_url = str_replace( $upload_dir_paths['baseurl'] . '/', '', $attachment_url );
 
        // Finally, run a custom database query to get the attachment ID from the modified attachment URL
        $attachment_id = $wpdb->get_var( $wpdb->prepare( "SELECT wposts.ID FROM $wpdb->posts wposts, $wpdb->postmeta wpostmeta WHERE wposts.ID = wpostmeta.post_id AND wpostmeta.meta_key = '_wp_attached_file' AND wpostmeta.meta_value = '%s' AND wposts.post_type = 'attachment'", $attachment_url ) );
 
    }
 
    return $attachment_id;
  }
}

if( ! function_exists( 'cr_share_post' ) ) {
  function cr_share_post() {
    global $data, $post;
    $template_page = !is_single() ? 'share_archives' : ( is_singular('creativo_portfolio') ? ' social_ic_margin' : '' );
    $content = '<ul class="get_social '.$template_page.'">';

    if($data['share_facebook'] !='no') { 
      $content .= '<li><a class="fb  ntip" href="http://www.facebook.com/sharer.php?m2w&s=100&p&#91;url&#93;=' . get_the_permalink() . '&p&#91;images&#93;&#91;0&#93;=' . wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ) . '&p&#91;title&#93;=' . rawurlencode( get_the_title() ) .'" target="_blank" title="'. __("Share on Facebook", "Creativo").'"><i class="fa fa-facebook"></i></a></li>';    
    }

    if($data['share_twitter'] !='no') {
      $content .= '<li><a class="tw ntip" title="' . __("Share on Twitter", "Creativo") . '" href="https://twitter.com/share?text=' . rawurlencode( html_entity_decode( get_the_title(), ENT_COMPAT, 'UTF-8' ) ) . '&url=' . rawurlencode( get_the_permalink() ) . '" target="_blank"><i class="fa fa-twitter"></i></a></li>';
    } 

    if($data['share_linkedin'] !='no') {
      $content .= '<li><a class="lnk ntip" title="' . __("Share on LinkedIn", "Creativo") .'" href="https://www.linkedin.com/shareArticle?mini=true&url=' . get_the_permalink() . '&amp;title=' . rawurlencode( get_the_title() ) . '&amp;summary=' . rawurlencode( get_the_excerpt() ) .'" target="_blank"><i class="fa fa-linkedin"></i></a></li>';
    }

    if($data['share_pinterest'] !='no') {
      $content .= '<li><a class="pinterest ntip" title="'. __("Share on Pinterest", "Creativo").'" href="http://pinterest.com/pin/create/button/?url=' . urlencode( get_the_permalink() ) . '&amp;description=' . rawurlencode( get_the_excerpt() ) . '&amp;media=' . rawurlencode( wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ) ) .'" target="_blank"><i class="fa fa-pinterest"></i></a></li>';
    }

    if($data['share_reddit'] !='no') {
      $content .= '<li><a class="rd ntip" title="' . __("Share on Reddit", "Creativo") .'" href="http://reddit.com/submit?url=' . get_the_permalink() . '&amp;title=' . rawurlencode( get_the_title() ) .'" target="_blank"><i class="fa fa-reddit"></i></a></li>';
    }

    if($data['share_tumblr'] !='no') {
      $content .= '<li><a class="tu ntip" title="'. __("Share on Tumblr", "Creativo").'" href="http://www.tumblr.com/share/link?url=' . rawurlencode( get_the_permalink() ) . '&amp;name=' . rawurlencode( get_the_title() ) .'&amp;description=' . rawurlencode( get_the_excerpt() ) .'" target="_blank"><i class="fa fa-tumblr"></i></a></li>';
    }

    if($data['share_gplus'] !='no') {
      $content .= '<li><a class="gp ntip" title="'. __("Share on Google+", "Creativo").'" href="https://plus.google.com/share?url=' . get_the_permalink() .'" target="_blank"><i class="fa fa-google-plus"></i></a></li>';
    }  

    $content .= '</ul>';

    echo $content;
  }
}

if( ! function_exists( 'cr_post_category' ) ) {
  function cr_post_category() {
    global $data;
    if( $data['show_categories'] ) {
      $categories = get_the_category();
      if ( ! empty( $categories ) ) {
        foreach( $categories as $category ) {
        $cat_output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" title="' . esc_attr( sprintf( __( 'View all posts in %s', 'Creativo' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . ', ';
        }   
      }
      if( $data['show_categories'] ){
        $content .= '<ul class="post_meta title_'.$data['post_meta_category_pos'].'">';
            $content .= '<li class="category_output">' . $categ_icon . trim( $cat_output, ', ' ) . '</li>';
        $content .= '</ul>';
      }
      echo $content;
    }
  }
}

/* Create the Single Post Title Function */
if( ! function_exists( 'cr_post_meta_title' ) ) {
  function cr_post_meta_title() {
    global $data;
    /* Generate the Post Title tag - for Single Post or Archive page */
    $post_title_tag = is_single() ? ( $data['post_title_tag'] ? $data['post_title_tag'] : 'h1' ) : ($data['archives_post_title_tag'] ? $data['archives_post_title_tag'] : 'h2' );

    /* Generate extra class for title, depending on location: single or archive pages */
    $post_title_class = is_single() ? 'singlepost_title' : 'archives_title';

    /* Check the position of the Post Title and Meta */
    $post_meta_position = (get_post_meta(get_the_ID(), 'pyre_post_title_meta_pos', true) != NULL) ? get_post_meta(get_the_ID(), 'pyre_post_title_meta_pos', true) : $data['post_meta_style'];
    if( $post_meta_position == 'default' ) {
      $post_meta_position = $data['post_meta_style'];
    }

    /* Generate the actual title - no link for Single Post, with link for Archive Pages */
    $title = is_single() ? get_the_title() : '<a href="' . get_the_permalink() . '">' . get_the_title() . '</a>';
    
    /* Render the Title tag and Title Content */
    $content = '<' . $post_title_tag .' class="' . $post_title_class . '">' . $title .'</' . $post_title_tag . '>';

    return $content;
  }
}


/* Create the Post Meta Function - used for Single and Archive Pages */
if( ! function_exists( 'cr_post_meta' ) ) {
  function cr_post_meta() {
    global $data, $post;
    $content = $author_icon = $date_icon = $categ_icon = '';
    
    if( $data['post_meta_design'] != 'modern' ) {
      $author_icon = '<i class="fa fa-user"></i>';
      $date_icon = '<i class="fa fa-clock-o"></i>';
      $categ_icon = '<i class="fa fa-bookmark"></i>';
    }

    if( $data['show_categories'] ) {
      $categories = get_the_category();
      if ( ! empty( $categories ) ) {
        foreach( $categories as $category ) {
        $cat_output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" title="' . esc_attr( sprintf( __( 'View all posts in %s', 'Creativo' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . ', ';
        }   
      }
    }

    if( $data['show_categories'] && ($data['post_meta_category_pos'] == 'above' )){
      $content .= '<ul class="post_meta above_title">';
          $content .= '<li class="category_output">' . $categ_icon . trim( $cat_output, ', ' ) . '</li>';
      $content .= '</ul>';
    }
       
    /* Render the Title tag and Title Content */
    $content .= cr_post_meta_title();
    
    
    if( $data['show_date'] || $data['show_author'] || $data['show_categories'] || $data['show_comments'] ) {
      $content .= '<ul class="post_meta ' . ( $post_meta_position != 'above' ? 'default' : 'style2' ) . '">';      

      if($data['show_author'] && !is_single()) {
        $content .= '<li>' . $author_icon . __('by ','Creativo') . get_the_author_posts_link() . '</li>';
      }

      if($data['show_author_single'] && is_single()) {
        $content .= '<li>' . $author_icon . __('by ','Creativo') . get_the_author_posts_link() . '</li>';
      }

      if( $data['show_date'] ) {
        $content .= '<li>' . $date_icon . get_the_time( get_option('date_format') ) . '</li>';
      }

      if( $data['show_categories'] && ($data['post_meta_category_pos'] != 'above' ) ) { 
        $content .= '<li>' . $categ_icon . trim( $cat_output, ', ' ) . '</li>';
      }

      if($data['show_comments']) {
        $content .= '<li><a href="' . get_comments_link() .'" class="comments_count"><i class="icon-message"></i>'. get_comments_number() . '</a></li>';
      }

      $content .= '</ul>';
    }

    echo '<div class="post_meta_wrap">'.$content.'</div>';
  }
}

if( ! function_exists( 'single_post_title_modern' ) ) {
  function single_post_title_modern() {

    global $data;

    if($data['post_meta_category_pos'] == 'above') { 
      cr_post_category();
      echo cr_post_meta_title();
      cr_post_meta_ul_only();             
    }
    else {
      echo cr_post_meta_title();              
      //cr_post_category(); 
      cr_post_meta_ul_only(); 
    }
          
  }
}

if( ! function_exists( 'cr_post_meta_ul_only' ) ) {
  function cr_post_meta_ul_only() {

    global $data;

    if( ( $data['show_date'] || $data['show_author'] || $data['show_categories'] || $data['show_comments'] ) && $data['post_meta_design']=='modern' ) {
      $content .= '<ul class="post_meta modern_layout">';     

    if(is_single() && $data['single_post_design'] =='modern') {
      if( $data['show_categories'] ) {
        $categories = get_the_category();
        if ( ! empty( $categories ) ) {
          foreach( $categories as $category ) {
          $cat_output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" title="' . esc_attr( sprintf( __( 'View all posts in %s', 'Creativo' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . ', ';
          }   
        }
      }    
    }    
    if($data['show_categories'] && $data['post_meta_category_pos'] != 'above') {
      $content .= '<li>' . trim( $cat_output, ', ' ) . '</li>';
    }

    if($data['show_author'] && !is_single()) {
      $content .= '<li>' . __('by ','Creativo') . get_the_author_posts_link() . '</li>';
    }
    
    if($data['show_author_single'] && is_single()) {
      $content .= '<li>' . __('by ','Creativo') . get_the_author_posts_link() . '</li>';
    }

    if( $data['show_date'] ) {
      $content .= '<li>' . get_the_time( get_option('date_format') ) . '</li>';
    }

    if($data['show_comments']) {
      $content .= '<li class="comments_count"><a href="' . get_comments_link() .'"><i class="icon-message"></i>'. get_comments_number() . '</a></li>';
    }

      $content .= '</ul>';
    }

    echo $content;

  }
}

if( ! function_exists( 'cr_post_meta_ul_only_big_images' ) ) {
  function cr_post_meta_ul_only_big_images() {

    global $data;

    $ul_class = is_page_template('page-blog.php') ? 'big_images' : 'small_images';

    if( ( $data['show_date'] || $data['show_author'] || $data['show_categories'] || $data['show_comments'] ) && $data['post_meta_design']=='modern' ) {
      $content .= '<ul class="post_meta modern_layout '.$ul_class.'">'; 

    if($data['show_comments']) {
      $content .= '<li class="comments_count"><a href="' . get_comments_link() .'"><i class="icon-message"></i>'. get_comments_number() . '</a></li>';
    }       

    if($data['show_author']) {
      $content .= '<li>' . __('by ','Creativo') . get_the_author_posts_link() . '</li>';
    }

    if( $data['show_date'] ) {
      $content .= '<li>' . get_the_time( get_option('date_format') ) . '</li>';
    }  

      $content .= '</ul>';
    }

    echo $content;

  }
}

if( ! function_exists( 'cr_featured_images' ) ) {
  function cr_featured_images( $thumbnail, $thumbnail_to_search) {
    global $data;
    $content = '';
    $timeout = ($data['flexslider_slide_timeout'] && $data['flexslider_slide_timeout'] != 0) ? $data['flexslider_slide_timeout'] : 0;

    if(( has_post_thumbnail() || get_post_meta(get_the_ID(), 'pyre_youtube', true) || get_post_meta(get_the_ID(), 'pyre_vimeo', true )) && ( !get_post_meta(get_the_ID(), 'pyre_mp3', true) && !get_post_meta(get_the_ID(), 'pyre_oga', true) && !get_post_meta(get_the_ID(), 'pyre_embed_code', true)) ) {
      $content .= '<div class="flexslider" data-interval="'.$timeout.'" data-flex_fx="fade">';
        $content .= '<ul class="slides">';
          
          if( get_post_meta( get_the_ID(), 'pyre_youtube', true ) != '' ) {
            $content .= '<li class="video-container">';
              $content .= do_shortcode('[youtube id="'.get_post_meta(get_the_ID(), 'pyre_youtube', true).'"]');
            $content .= '</li>';
          }

          if( get_post_meta( get_the_ID(), 'pyre_vimeo', true ) != '' ) {
            $content .= '<li class="video-container">';
              $content .= do_shortcode('[vimeo id="'.get_post_meta(get_the_ID(), 'pyre_vimeo', true).'"]');
            $content .= '</li>';
          }

          /* Extra Featured Images */

          $extra ='';                                 
          $i = 2;
          while($i <= $data['featured_images_count']):
              $attachment = new StdClass();
              $attachment_id = cr_get_featured_image_id('featured-image-'.$i, 'post');
              if($attachment_id):                                     
                  $attachment_image = wp_get_attachment_image_src($attachment_id, $thumbnail); 
                  $full_image = wp_get_attachment_image_src($attachment_id, 'full'); 
                  $attachment_data = wp_get_attachment_metadata($attachment_id);  
                  if($attachment_image && $thumbnail_to_search && strpos($attachment_image[0], $thumbnail_to_search)) {                                    
                      $extra .= '<li><a href="'.get_permalink().'"><img src="'.$attachment_image[0].'" alt="'.$attachment_data['image_meta']['title'].'" ></a></li>';  
                  }                                          
                  else {
                      $extra .= '<li><a href="'.get_permalink().'"><img src="'.$full_image[0].'" alt="'.$attachment_data['image_meta']['title'].'" ></a></li>'; 
                  }
              endif; 
              $i++; 
          endwhile;

          /* Featured Images output */

          if(has_post_thumbnail() && !get_post_meta(get_the_ID(), 'pyre_youtube', true) && !get_post_meta(get_the_ID(), 'pyre_vimeo', true)){  

            $custom_thumb = wp_get_attachment_image_src ( get_post_thumbnail_id( get_the_ID() ), $thumbnail );
            $full_thumb = wp_get_attachment_image_src( get_the_ID(),'full' );   
            
            if($extra == '') {
              $content .= '<li>';
                $content .= '<figure>';
                  $content .= '<a href="' . get_permalink() . '">';
                    $content .= '<div class="text-overlay">';
                      $content .= '<div class="info">';
                          $content .= '<span class="plus_icon">+</span>';
                      $content .= '</div>';
                    $content .= '</div>';
                                                                                       
                    if($custom_thumb && $thumbnail_to_search && strpos($custom_thumb[0], $thumbnail_to_search)) {
                      $content .= '<img src="'.$custom_thumb[0].'">';
                    }
                    else {
                      $content .= get_the_post_thumbnail(get_the_ID(), 'full');
                    }   
                    
                  $content .= '</a>';
                $content .= '</figure>';
              $content .= '</li>';
            }

            else {
              $content .= '<li>';
                $content .= '<a href="'.get_permalink().'">';
                  if($custom_thumb && $thumbnail_to_search && strpos($custom_thumb[0], $thumbnail_to_search)) {
                    $content .= '<img src="'.$custom_thumb[0].'">';
                  }
                  else {
                    $content .= get_the_post_thumbnail(get_the_ID(), 'full');
                  }                            
                $content .= '</a>';
              $content .= '</li>';                                   
              $content .= $extra;             
            }

          }

        $content .= '</ul>';
      $content .= '</div>';
    }
    elseif(get_post_meta(get_the_ID(), 'pyre_mp3', true) != '' || get_post_meta(get_the_ID(), 'pyre_oga', true) != '') {
        $content .= '<div class="audio_section_render">';
            $content .= do_shortcode('[audio src="'.get_post_meta(get_the_ID(), 'pyre_mp3', true).'"]');
        $content .= '</div>';
    }
    elseif(get_post_meta(get_the_ID(), 'pyre_embed_code', true) != '') {
        $content .= '<div class="audio_section_render">';
            $content .= get_post_meta(get_the_ID(), 'pyre_embed_code', true);
        $content .= '</div>';
    }
      echo $content;

  }
}

/* bbPress custom breadcrumb alteration */

function custom_forum_breadcrumb( $args ) {

  $args['sep'] = '/';
  $args['home_text'] = '<i class="fa fa-home"></i>';
  return $args;

}

add_filter( 'bbp_before_get_breadcrumb_parse_args', 'custom_forum_breadcrumb' );

function social_links_space() {
  global $data;
  $size = 12;

  $size = $data['twitter'] ? $size + 40 : $size;
  $size = $data['facebook'] ? $size + 40 : $size;
  $size = $data['instagram'] ? $size + 40 : $size;
  $size = $data['google'] ? $size + 40 : $size;
  $size = $data['linkedin'] ? $size + 40 : $size;
  $size = $data['pinterest'] ? $size + 40 : $size;
  $size = $data['flickr'] ? $size + 40 : $size;
  $size = $data['tumblr'] ? $size + 40 : $size;
  $size = $data['youtube'] ? $size + 40 : $size;
  $size = $data['behance'] ? $size + 40 : $size;
  $size = $data['dribbble'] ? $size + 40 : $size;
  $size = $data['vimeo'] ? $size + 40 : $size;
  $size = $data['stumbleupon'] ? $size + 40 : $size;
  $size = $data['xing'] ? $size + 40 : $size;
  $size = $data['soundcloud'] ? $size + 40 : $size;
  $size = $data['yelp'] ? $size + 40 : $size;
  //$size = $data['twitter'] ? $size + 40 : $size;

  return $size;

}

if( ! function_exists( 'social_links' ) ) {
  function social_links() {
    global $data;
    $tooltip = $data['social_icons_tooltip'] ? ($data['en_social_icons_wrap'] ? 'etip' : 'stip')  : ''; 
    $html = '';
    
      $html .='<div class="top_social">';
        if($data['twitter']) { 
          $html .= '<a href="' . $data['twitter'] . '" class="twitter ' . $tooltip . '" original-title="Twitter"  title="' . __('Follow on Twitter', 'Creativo') . '" target="_blank" rel="nofollow"><i class="fa fa-twitter"></i></a>'; 
        }
        if($data['facebook']) { 
          $html .= '<a href="' . $data['facebook'] . '" class="facebook ' . $tooltip . '" original-title="Facebook"  title="' . __('Follow on Facebook', 'Creativo') . '" target="_blank" rel="nofollow"><i class="fa fa-facebook"></i></a>'; 
        }
        if($data['instagram']) { 
          $html .= '<a href="' . $data['instagram'] . '" class="instagram ' . $tooltip . '" original-title="Instagram"  title="' . __('Follow on Instagram', 'Creativo') . '" target="_blank" rel="nofollow"><i class="fa fa-instagram"></i></a>'; 
        }
        if($data['google']) { 
          $html .= '<a href="' . $data['google'] . '" class="google ' . $tooltip . '" original-title="Google"  title="' . __('Follow on Google', 'Creativo') . '" target="_blank" rel="nofollow"><i class="fa fa-google-plus"></i></a>'; 
        }
        if($data['linkedin']) { 
          $html .= '<a href="' . $data['linkedin'] . '" class="linkedin ' . $tooltip . '" original-title="LinkedIn"  title="' . __('Follow on LinkedIn', 'Creativo') . '" target="_blank" rel="nofollow"><i class="fa fa-linkedin"></i></a>'; 
        }
        if($data['pinterest']) { 
          $html .= '<a href="' . $data['pinterest'] . '" class="pinterest ' . $tooltip . '" original-title="Pinterest"  title="' . __('Follow on Pinterest', 'Creativo') . '" target="_blank" rel="nofollow"><i class="fa fa-pinterest"></i></a>'; 
        }
        if($data['flickr']) { 
          $html .= '<a href="' . $data['flickr'] . '" class="flickr ' . $tooltip . '" original-title="Twitter"  title="' . __('Follow on Flickr', 'Creativo') . '" target="_blank" rel="nofollow"><i class="fa fa-flickr"></i></a>'; 
        }
        if($data['tumblr']) { 
          $html .= '<a href="' . $data['tumblr'] . '" class="tumblr ' . $tooltip . '" original-title="Tumblr"  title="' . __('Follow on Tumblr', 'Creativo') . '" target="_blank" rel="nofollow"><i class="fa fa-tumblr"></i></a>'; 
        }
        if($data['youtube']) { 
          $html .= '<a href="' . $data['youtube'] . '" class="youtube ' . $tooltip . '" original-title="Youtube"  title="' . __('Follow on Youtube', 'Creativo') . '" target="_blank" rel="nofollow"><i class="fa fa-youtube-play"></i></a>'; 
        }
        if($data['behance']) { 
          $html .= '<a href="' . $data['behance'] . '" class="behance ' . $tooltip . '" original-title="Behance"  title="' . __('Follow on Behance', 'Creativo') . '" target="_blank" rel="nofollow"><i class="fa fa-behance"></i></a>'; 
        } 
        if($data['dribbble']) { 
          $html .= '<a href="' . $data['dribbble'] . '" class="dribbble ' . $tooltip . '" original-title="Dribbble"  title="' . __('Follow on Dribbble', 'Creativo') . '" target="_blank" rel="nofollow"><i class="fa fa-dribbble"></i></a>'; 
        } 
        if($data['vimeo']) { 
          $html .= '<a href="' . $data['vimeo'] . '" class="vimeo ' . $tooltip . '" original-title="Vimeo"  title="' . __('Follow on Vimeo', 'Creativo') . '" target="_blank" rel="nofollow"><i class="fa fa-vimeo-square"></i></a>'; 
        } 
        if($data['stumbleupon']) { 
          $html .= '<a href="' . $data['stumbleupon'] . '" class="stumbleupon ' . $tooltip . '" original-title="Stumbleupon"  title="' . __('Follow on Stumbleupon', 'Creativo') . '" target="_blank" rel="nofollow"><i class="fa fa-stumbleupon"></i></a>'; 
        } 
        if($data['xing']) { 
          $html .= '<a href="' . $data['xing'] . '" class="xing ' . $tooltip . '" original-title="Xing"  title="' . __('Follow on Xing', 'Creativo') . '" target="_blank" rel="nofollow"><i class="fa fa-xing"></i></a>'; 
        } 
        if($data['soundcloud']) { 
          $html .= '<a href="' . $data['soundcloud'] . '" class="soundcloud ' . $tooltip . '" original-title="Soundcloud"  title="' . __('Follow on Soundcloud', 'Creativo') . '" target="_blank" rel="nofollow"><i class="fa fa-soundcloud"></i></a>'; 
        } 
        if($data['yelp']) { 
          $html .= '<a href="' . $data['yelp'] . '" class="yelp ' . $tooltip . '" original-title="Yelp"  title="' . __('Follow on Yelp', 'Creativo') . '" target="_blank" rel="nofollow"><i class="fa fa-yelp"></i></a>'; 
        } 
        if($data['wechat']) { 
          $html .= '<a href="' . $data['wechat'] . '" class="wechat ' . $tooltip . '" original-title="WeChat"  title="' . __('Follow on WeChat', 'Creativo') . '" target="_blank" rel="nofollow"><i class="fa fa-wechat"></i></a>'; 
        }     
      $html .='</div>';

      return $html;
    
  }
}

if( ! function_exists( 'social_icons_wrap' ) ) {

  function social_icons_wrap() {
    global $data;
    $html = '';
    if($data['en_social_icons_wrap']) {
      $html .= '<div class="social_icons_wrap">';
        $html .= '<span class="sharer"><i class="icon-share2"></i></span>';
        $html .= social_links();
      $html .= '</div>';
    }
    else {
      $html .= social_links();
    }
    return $html;
  }

}


if( ! function_exists( 'header_menu_extra_icons' ) ) {
  function header_menu_extra_icons() {

    $items = '';

    global $data;

    if($data['header_social_icons']) {
      $items .= '<li class="header_menu_social">';
        $items .= social_icons_wrap();
      $items .= '</li>';
    }

    $icon_render = ( $data['woocommerce_cart_icon_render'] ) ? '<i class="'.$data['woocommerce_cart_icon_render'].'"></i>' : '<i class="icon-shop"></i>' ;

    if($data['woo_cart'] && class_exists('woocommerce')) {
      $count_output = ($data['woo_cart_count'] == 1) ? '<span>'. WC()->cart->get_cart_contents_count().'</span>' : '';
      $items .= '<li class="shopping_cart_icon">';
        $items .= '<a class="shopping-cart" href="'.wc_get_cart_url().'" >' . $icon_render . $count_output . '</a>';    
        $items .= '<div class="shopping_cart_wrap"></div>';           
      $items .='</li>';
    }  

    $items .= '<li class="header_search_li">';
      $items .= '<div id="header_search_wrap">';
        $items .= '<a href="#" id="header-search"><i class="icon-magnifier"></i><i class="icon-cancel"></i></a>';                                
      $items .= '</div>';
    $items .='</li>';  

    if( isset( $data['off_canvas_sidebar'] ) && $data['off_canvas_sidebar'] == true ) {
      $items .= '<li class="side_panel_li">';
        $items .= '<div id="side-panel-trigger" class="side-panel-trigger">';
          $items .= '<a href="#" ><i class="'.$data['off_cnv_icon'].'"></i></a>';                                
        $items .= '</div>';
      $items .='</li>';   
    }

    $items .= '<li class="menu-item-resp responsive-item">';
      $items .= '<div class="responsive-search">';
        $items .= '<form action="" method="get" class="header_search">';
          $items .='<input type="text" name="s" class="form-control" value="" placeholder="">';
          $items .='<input type="submit" value="'.__('GO','Creativo').'" class="responsive_search_submit">';
        $items .= '</form>';
      $items .= '</div>';
    $items .= '</li>';  

    return $items;

  }
}

if( ! function_exists( 'cr_footer_additional_icons_imgs' ) ) {

  function cr_footer_additional_icons_imgs() {
    $html = $footer_col_icons = $footer_col_imgs = '';    
    global $data;

    $footer_array = array();

    $footer_col_1 = !empty( $data['footer_col_img_1'] ) ? '<img src="' . $data['footer_col_img_1'] . '">' : ( !empty( $data['footer_col_icon_1'] ) ? '<i class="' . $data['footer_col_icon_1'] . '"></i>' : '' );

    $footer_col_2 = !empty( $data['footer_col_img_2'] ) ? '<img src="' . $data['footer_col_img_2'] . '">' : ( !empty( $data['footer_col_icon_2'] ) ? '<i class="' . $data['footer_col_icon_2'] . '"></i>' : '' );

    $footer_col_3 = !empty( $data['footer_col_img_3'] ) ? '<img src="' . $data['footer_col_img_3'] . '">' : ( !empty( $data['footer_col_icon_3'] ) ? '<i class="' . $data['footer_col_icon_3'] . '"></i>' : '' );

    $footer_col_4 = !empty( $data['footer_col_img_4'] ) ? '<img src="' . $data['footer_col_img_4'] . '">' : ( !empty( $data['footer_col_icon_4'] ) ? '<i class="' . $data['footer_col_icon_4'] . '"></i>' : '' );

    $footer_col_5 = !empty( $data['footer_col_img_5'] ) ? '<img src="' . $data['footer_col_img_5'] . '">' : ( !empty( $data['footer_col_icon_5'] ) ? '<i class="' . $data['footer_col_icon_5'] . '"></i>' : '' );

    $footer_col_6 = !empty( $data['footer_col_img_6'] ) ? '<img src="' . $data['footer_col_img_6'] . '">' : ( !empty( $data['footer_col_icon_6'] ) ? '<i class="' . $data['footer_col_icon_6'] . '"></i>' : '' );  

    if( $footer_col_1 != '' ) {
      $footer_col_1 = ( $data['footer_col_link_1'] != '' ) ? '<a href="' . $data['footer_col_link_1'] . '" target="' . $data['footer_ii_target'] . '">' . $footer_col_1 . '</a>' : $footer_col_1;
      $footer_array[] = $footer_col_1;
    }
    if( $footer_col_2 != '' ) {
      $footer_col_2 = ( $data['footer_col_link_2'] != '' ) ? '<a href="' . $data['footer_col_link_2'] . '" target="' . $data['footer_ii_target'] . '">' . $footer_col_2 . '</a>' : $footer_col_2;
      $footer_array[] = $footer_col_2;
    }
    if( $footer_col_3 != '' ) {
      $footer_col_3 = ( $data['footer_col_link_3'] != '' ) ? '<a href="' . $data['footer_col_link_3'] . '" target="' . $data['footer_ii_target'] . '">' . $footer_col_3 . '</a>' : $footer_col_3;
      $footer_array[] = $footer_col_3;
    }
    if( $footer_col_4 != '' ) {
      $footer_col_4 = ( $data['footer_col_link_4'] != '' ) ? '<a href="' . $data['footer_col_link_4'] . '" target="' . $data['footer_ii_target'] . '">' . $footer_col_4 . '</a>' : $footer_col_4;
      $footer_array[] = $footer_col_4;
    }
    if( $footer_col_5 != '' ) {
      $footer_col_5 = ( $data['footer_col_link_5'] != '' ) ? '<a href="' . $data['footer_col_link_5'] . '" target="' . $data['footer_ii_target'] . '">' . $footer_col_5 . '</a>' : $footer_col_5;
      $footer_array[] = $footer_col_5;
    }
    if( $footer_col_6 != '' ) {
      $footer_col_6 = ( $data['footer_col_link_6'] != '' ) ? '<a href="' . $data['footer_col_link_6'] . '" target="' . $data['footer_ii_target'] . '">' . $footer_col_6 . '</a>' : $footer_col_6;
      $footer_array[] = $footer_col_6;
    }

    if ( !empty( $footer_array )  ) {   

      $html .= '<div class="footer_ii_wrap">';
        $html .= '<div class="footer_ii_content columns_'. $data['footer_ii_cols'] .' clearfix">';
          for( $i = 0; $i < sizeof($footer_array); $i++) {
            $html .= '<div class="footer_ii_el">';

              $html .= $footer_array[$i];

            $html .= '</div>';    
          }
        $html .= '</div>';
      $html .= '</div>';
    }

    return $html;

  }
}

//Adding the Open Graph in the Language Attributes
function add_opengraph_doctype( $output ) {
        return $output . ' xmlns:og="//opengraphprotocol.org/schema/" xmlns:fb="//www.facebook.com/2008/fbml"';
    }
add_filter('language_attributes', 'add_opengraph_doctype');
 
//Lets add Open Graph Meta Info

function cr_facebook_tags() {
  global $post;
 
  if(is_single()) {
    if(has_post_thumbnail($post->ID)) {
      $img_src = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'full');
    } 
    else {
      $img_src = get_stylesheet_directory_uri() . '/img/opengraph_image.jpg';
    }
    /*if($excerpt = $post->post_excerpt) {
      $excerpt = strip_tags($post->post_excerpt);
      $excerpt = str_replace("", "'", $excerpt);
    } 
    else {
      $excerpt = get_bloginfo('description');
    }*/
    ?>
    <meta property="og:title" content="<?php echo get_the_title(); ?>"/>    
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="<?php echo the_permalink(); ?>"/>
    <meta property="og:site_name" content="<?php echo get_bloginfo(); ?>"/>
    <meta property="og:image" content="<?php echo $img_src[0]; ?>"/>
  <?php
  } 
  else {
    return;
  }
}
add_action('wp_head', 'cr_facebook_tags', 5);

if( ! function_exists( 'cr_author_box' ) ) { 
  function cr_author_box() {
     global $data;
     $html = '';
     if($data['show_author_single']){   
        $html .= '<div class="posts-boxes author_render">';
           $html .= '<div class="author_box">';
              $html .= '<div class="author_pic">';            
                 if($data['single_post_author_pic']) {
                    $html .= '<img src="' . $data['single_post_author_pic'] . '" class="avatar">';
                 }
                 else {
                    $html .= get_avatar( get_the_author_meta('id'), $size = '150');                             
                 }            
              $html .= '</div>';
              /*<h4><?php _e('Author Bio', 'Creativo'); ?></h4>*/
              $html .= '<div class="author_description">';  
                 $html .= '<h3>' . get_the_author_posts_link(). '</h3>';
                 $html .= get_the_author_meta( 'description');
              $html .= '</div>';   
           $html .= '</div>';
        $html .= '</div>';      
     }
     return $html;    
  }
}

if( class_exists( 'WooCommerce' ) ) {

  function child_manage_woocommerce_styles() {  

    //first check that woo exists to prevent fatal errors
    if ( function_exists( 'is_woocommerce' ) ) {

      global $woocommerce;
      //remove generator meta tag
      remove_action( 'wp_head', array( $GLOBALS['woocommerce'], 'generator' ) );
      
      //dequeue scripts and styles
      if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
        wp_dequeue_style( 'woocommerce_frontend_styles' );
        wp_dequeue_style( 'woocommerce-general');
        wp_dequeue_style( 'woocommerce-layout' );
        wp_dequeue_style( 'woocommerce-smallscreen' );
        wp_dequeue_style( 'woocommerce_fancybox_styles' );
        wp_dequeue_style( 'woocommerce_chosen_styles' );
        wp_dequeue_style( 'woocommerce_prettyPhoto_css' );
        wp_dequeue_style( 'select2' );
        wp_dequeue_script( 'wc-add-payment-method' );
        wp_dequeue_script( 'wc-lost-password' );
        wp_dequeue_script( 'wc_price_slider' );
        wp_dequeue_script( 'wc-single-product' );
        wp_dequeue_script( 'wc-add-to-cart' );
        wp_dequeue_script( 'wc-cart-fragments' );
        wp_dequeue_script( 'wc-credit-card-form' );
        wp_dequeue_script( 'wc-checkout' );
        wp_dequeue_script( 'wc-add-to-cart-variation' );
        wp_deregister_script('wc-add-to-cart');
        wp_dequeue_script( 'wc-single-product' );
        wp_dequeue_script( 'wc-cart' );
        wp_dequeue_script( 'wc-chosen' );
        wp_dequeue_script( 'woocommerce' );
        wp_dequeue_script( 'prettyPhoto' );
        wp_dequeue_script( 'prettyPhoto-init' );
        wp_dequeue_script( 'jquery-blockui' );
        wp_dequeue_script( 'jquery-placeholder' );
        wp_dequeue_script( 'jquery-payment' );
        wp_dequeue_script( 'fancybox' );
        wp_dequeue_script( 'jqueryui' );

      }
    }
  }

  /*disable woocommerce js & style on pages where woocommerce is not used */
  if($data['disable_woocommerce']) {
    add_action( 'wp_enqueue_scripts', 'child_manage_woocommerce_styles', 99 );
  }

  remove_action( 'woocommerce_before_main_content','woocommerce_breadcrumb', 20, 0);

  /* WOOCOMMERCE FILTER HOOKS */
  
  remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
  remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
  add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
  add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

  function my_theme_wrapper_start() {
    echo '<div class="page-content clearfix">';
  }
   
  function my_theme_wrapper_end() {
    echo '</div>';
  }

  add_filter( 'woocommerce_enqueue_styles', '__return_false' );

  /* Add WooCommerce Login/Register - My Account link to Top Menu / Primary Menu */

  if( ! function_exists( 'navigation_login' ) ) { 
    function navigation_login( $items, $args) {
      global $data;

      if ( in_array( $args->theme_location, array( 'primary-menu', 'top-menu' ) ) ) {

        $en_location = ( $args->theme_location == 'top-menu' ) ? $data['woocommerce_login_top_menu'] : $data['woocommerce_login_primary_menu'];
        
        if ( class_exists( 'WooCommerce' ) && $en_location ) {
          $woo_account_link = wc_get_endpoint_url('edit-account','',wc_get_page_permalink( 'myaccount' ));
          $woo_cart_link = get_permalink( get_option( 'woocommerce_cart_page_id' ) );
          $woo_checkout_link = get_permalink( get_option( 'woocommerce_checkout_page_id' ) );
          $woo_orders_link = wc_get_endpoint_url('orders','',wc_get_page_permalink( 'myaccount' ));
          $woo_address_link = wc_get_endpoint_url('edit-address','',wc_get_page_permalink( 'myaccount' ));

          //$woo_account_page_link = get_permalink( get_option( 'woocommerce_myaccount_page_id' ) );
          $logout_link = wp_logout_url( get_permalink( get_option( 'myaccount' ) ) );

          if ( $woo_account_link ) {

            $items .= '<li class="menu-item custom-login-box">';

            $caret = '';

            if($data['submenu_indicator']) {
              $caret .= '<span class="sf-sub-indicator"><i class="fa fa-angle-down"></i></span>';
            }
              $icon_render = $data['woocommerce_login_icon'] ? '<i class="'.$data['woocommerce_login_icon_render'].'"></i>' : '';

              $main_link_title = ( !is_user_logged_in() ) ? $icon_render . esc_html__( 'Login/Register', 'Creativo' ) : $icon_render . esc_html__( 'My Account', 'Creativo' );
              $items .= '<a href="#">' . $main_link_title . $caret . '</a>';

              if ( ! is_user_logged_in() ) {
                $items .= '<div class="woo_login_form">';
                  if ( isset( $_GET['login'] ) && 'failed' == $_GET['login'] ) {
                    $items .= '<p class="cannot-login">' . esc_html__( 'Login failed, please try again.', 'Creativo' ) . '</p>';
                  }
                  $items .= '<form action="' . wp_login_url() . '" name="loginform" method="post" class="woo_submit_form">';
                    $items .= '<input type="text" class="input-text" name="log" id="username" value="" placeholder="' . esc_html__( 'Username', 'Creativo' ) . '" />';
                    $items .= '<input type="password" class="input-text" name="pwd" id="password" value="" placeholder="' . esc_html__( 'Password', 'Creativo' ) . '" />';
                    $items .= '<label for="log_box_remember"><input name="rememberme" type="checkbox" id="fusion-menu-login-box-rememberme" value="forever"> ' . esc_html__( 'Remember Me', 'Creativo' ) . '</label>';
                    $items .= '<input type="hidden" name="cr_log_box" value="true" />';
                    
                    $items .= '<input type="submit" name="wp-submit" id="wp-submit" class="button small default login_top" value="' . esc_html__( 'Log In', 'Creativo' ) . '">';
                    $items .= '<input type="hidden" name="redirect" value="' . esc_url( ( isset( $_SERVER['HTTP_REFERER'] ) ) ? $_SERVER['HTTP_REFERER'] : $_SERVER['REQUEST_URI'] ) . '">';
                    
                  $items .= '</form>';
                  $items .= '<a class="button small default register_top" href="' . get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) . '" title="' . __( 'Register', 'Creativo' ) . '">' . __( 'Register', 'Creativo' ) . '</a>';
                $items .= '</div>';
              }
              else {
                $items .= '<ul class="sub-menu">';
                  $items .= '<li><a href="' . $woo_account_link . '">' . esc_html__( 'Account Details', 'Creativo' ) . '</a></li>';             
                  $items .= '<li><a href="' . $woo_address_link . '">' . esc_html__( 'My Addresses', 'Creativo' ) . '</a></li>';
                  $items .= '<li><a href="' . $woo_orders_link . '">' . esc_html__( 'My Orders', 'Creativo' ) . '</a></li>';
                  $items .= '<li><a href="' . $woo_cart_link . '">' . esc_html__( 'Cart', 'Creativo' ) . '</a></li>';
                  $items .= '<li><a href="' . $woo_checkout_link . '">' . esc_html__( 'Checkout', 'Creativo' ) . '</a></li>';
                  $items .= '<li><a href="' . $logout_link . '">' . esc_html__( 'Logout', 'Creativo' ) . '</a></li>';
                $items .= '</ul>';
              }

            $items .= '</li>';

          }
        }

      }

      return $items;
    }
  }

  add_filter( 'wp_nav_menu_items', 'navigation_login', 10, 3 );

  // Ensure cart contents update when products are added to the cart via AJAX (place the following in functions.php)
  add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

  function woocommerce_header_add_to_cart_fragment( $fragments ) {
    global $woocommerce, $data;
    //ob_start();

    $icon_render = ( $data['woocommerce_cart_icon_render'] ) ? '<i class="'.$data['woocommerce_cart_icon_render'].'"></i>' : '<i class="icon-shop"></i>' ;

    $count_output = ($data['woo_cart_count'] == 1) ? '<span class="item_counter">'.WC()->cart->get_cart_contents_count().'</span>' : '';
    
    $shop_item_count = '<a class="shopping-cart" href="'.wc_get_cart_url().'" >' . $icon_render . $count_output . '</a>';
    
    $fragments['a.shopping-cart'] = $shop_item_count;
    $fragments['.shopping_cart_wrap'] = '<div class="shopping_cart_wrap">'.cr_header_products().'</di>';
    
    return $fragments;
  }

  if($data['product_image_zoom'] != 0) {
    add_theme_support( 'wc-product-gallery-zoom' );
  }
  add_theme_support( 'wc-product-gallery-lightbox' );
  add_theme_support( 'wc-product-gallery-slider' );

  // Change number or products per row to 3
  add_filter('loop_shop_columns', 'loop_columns');
  if (!function_exists('loop_columns')) {
    function loop_columns() {
      global $data;
      if($data['woocommerce_sidebar_en']) { 
        return 3; // 3 products per row
      }
      else {
        return 4;
      }
    }
  }

  /* Change the columns number for related products */
  add_filter( 'woocommerce_output_related_products_args', 'cr_related_products_args' );
  function cr_related_products_args( $args ) {  
    global $data, $post;

    $has_sidebar = ( get_post_meta( get_the_ID(), 'pyre_en_prod_sidebar', true) != NULL && get_post_meta( get_the_ID(), 'pyre_en_prod_sidebar', true) != 'default' ) ? get_post_meta( get_the_ID(), 'pyre_en_prod_sidebar', true) : $data['woocommerce_sidebar_product_en'];

    if( $has_sidebar == 'yes' || $has_sidebar == 1) { 
      $args['columns'] = 3; // arranged in 3 columns
      $args['posts_per_page'] = 3; // 4 related products
    }
    else{
      $args['columns'] = 4; // arranged in 4 columns
      $args['posts_per_page'] = 4; // 4 related products  
    }
    return $args;
  }
    
  add_filter( 'loop_shop_per_page', create_function( '$cols', 'return ' . ( isset($data['products_per_page']) ? $data['products_per_page'] : 10 ) . ';' ), 20 );


  function cr_header_products() {
    $items = '';
    
    global $woocommerce;
    
    if ( $woocommerce->cart->get_cart_contents_count() ) {
      $items .= '<div class="shopping_cart_items">';
      
        foreach($woocommerce->cart->cart_contents as $cart_item):
          $items .= '<div class="cart_item">';
            $items .= '<a class="" href="' . get_permalink( $cart_item['product_id'] ) . '">';
              $items .= get_the_post_thumbnail($cart_item['product_id'], 'shop_thumbnail');
              $items .= '<div class="cart_item_details">';
                $items .= '<span class="cart_item_title">' . $cart_item['data']->post->post_title . '</span>';
                $items .= '<span class="cart_item_price_quantity">' . $cart_item['quantity'] . ' x ' . $woocommerce->cart->get_product_subtotal( $cart_item['data'], 1 ) . '</span>';
              $items .= '</div>';
            $items .= '</a>'; 
          $items .= '</div>';
        endforeach;

        $items .= '<div class="shopping_cart_total">';
          $items .= '<span class="total_text">'. esc_html__( 'Total', 'Creativo' ).'</span>';
          $items .= '<span class="total_value">'. $woocommerce->cart->get_cart_total().'</span>';
        $items .= '</div>';

        $items .= '<div class="cart_checkout">';
          $items .= '<a href="' . get_permalink( get_option( 'woocommerce_cart_page_id' ) ) . '" class="button_header_cart">'. esc_html__( 'View Cart', 'Creativo' ).'</a>';
          $items .= '<a href="' . get_permalink( get_option('woocommerce_checkout_page_id') ) . '" class="button_header_cart inverse">'. esc_html__( 'Checkout', 'Creativo' ).'</a>';
        $items .= '</div>';

      $items .= '</div>';  

    }
    
    return $items;
  }

  // Support email login on my account dropdown
  if ( isset( $_POST['cr_log_box'] ) && 'true' == $_POST['cr_log_box'] ) {
    add_filter( 'authenticate', 'cr_email_login_auth', 10, 3 );
  }
  function cr_email_login_auth( $user, $username, $password ) {
    if ( is_a( $user, 'WP_User' ) ) {
      return $user;
    }

    if ( ! empty( $username ) ) {
      $username = str_replace( '&', '&amp;', stripslashes( $username ) );
      $user = get_user_by( 'email', $username );
      if ( isset( $user, $user->user_login, $user->user_status ) && 0 == (int) $user->user_status ) {
        $username = $user->user_login;
      }
    }

    return wp_authenticate_username_password( null, $username, $password );
  }

  // No redirect on woo my account dropdown login when it fails
  if ( isset( $_POST['cr_log_box'] ) && 'true' == $_POST['cr_log_box'] ) {
    add_action( 'init', 'cr_login_redirect_support' );
  }

  function cr_login_redirect_support() {
    if ( class_exists( 'WooCommerce' ) ) {

      // When on the my account page, do nothing
      if ( ! empty( $_POST['login'] ) && ! empty( $_POST['_wpnonce'] ) && wp_verify_nonce( $_POST['_wpnonce'], 'woocommerce-login' ) ) {
        return;
      }

      add_action( 'login_redirect', 'cr_login_fail', 10, 3 );
    }
  }

  // Creativo Login Fail Test
  function cr_login_fail( $url = '', $raw_url = '', $user = '' ) {
    if ( ! is_account_page() ) {

      if ( isset( $_SERVER ) && isset( $_SERVER['HTTP_REFERER'] ) && $_SERVER['HTTP_REFERER'] ) {
        $referer_array = parse_url( $_SERVER['HTTP_REFERER'] );
        $referer = '//' . $referer_array['host'] . $referer_array['path'];

        // If there's a valid referrer, and it's not the default log-in screen
        if ( ! empty( $referer ) && ! strstr( $referer, 'wp-login' ) && ! strstr( $referer, 'wp-admin' ) ) {
          if ( is_wp_error( $user ) ) {
            // Let's append some information (login=failed) to the URL for the theme to use
            wp_redirect( add_query_arg( array( 'login' => 'failed' ), $referer ) );
          } else {
            wp_redirect( $referer );
          }
          exit;
        } else {
          return $url;
        }
      } else {
        return $url;
      }
    }
  }

  /* Show Product Stock and Availability */
  add_action( 'woocommerce_single_product_summary', 'cr_stock', 10 );

  function cr_stock() {
    global $product, $data;
    
    if( $data['woo_single_prod_stock'] ) {
      $availability      = $product->get_availability();
         
      ?>
      <div class="stock-options clearfix">
      <?php 

      $stock_output = ( $availability['class'] == 'in-stock' ) ? esc_html__( 'In Stock', 'Creativo' ) : esc_html__( 'Out of Stock', 'Creativo' );
      $stock_qty = (int)$product->stock;
      
      echo '<div class="stock-available"><span class="stock-available-text">' . esc_html__('Available', 'Creativo'). ':</span><span class="stock-text ' . $availability['class'] . '"> ' . $stock_output . '</span></div>';
      if( $data['woo_single_prod_stock_qty'] && ( $availability['class'] == 'in-stock' ) && !$product->is_type( 'grouped' ) ) {
        echo '<div class="stock-quantity"><span class="stock-quantity-text">' . esc_html__('Quantity', 'Creativo') . ':</span><span class="qty-text"> '. $stock_qty.'</span></div>';
      } 
      
      ?>
      
      </div>
    <?php
    }
  }

  /* Add Share Product above Product Meta */
  add_action( 'woocommerce_product_meta_end', 'cr_share_product', 10);

  function cr_share_product () {
    global $data;

    if( $data['woo_product_share'] ) {
      ?>
      <div class="cr_product_share clearfix"><span><?php echo esc_html('Share: ','Creativo' );?></span><?php cr_share_post(); ?></div>
      <?php
    }
  }

  /* Change WooCommerce Single Product Title */
  remove_action('woocommerce_single_product_summary','woocommerce_template_single_title',5);
  add_action('woocommerce_single_product_summary', 'cr_single_title',5);

  if ( ! function_exists( 'cr_single_title' ) ) {
     function cr_single_title() {
      global $data;

      $html_tag = $data['woo_prod_title_tag'] ? $data['woo_prod_title_tag'] : 'h2';
  ?>
              <?php echo '<' . $html_tag; ?> itemprop="name" class="product_title entry-title woo_single_prod_title"><?php the_title(); ?><?php echo '</'.$html_tag.'>'; ?>
  <?php
      }
  }

}

/* Custom Gravatar Support */

if( !function_exists( 'cr_custom_gravatar' ) ) {
    function cr_custom_gravatar( $avatar_defaults ) {
        $cr_avatar = get_template_directory_uri() . '/images/gravatar.png';
        $avatar_defaults[$cr_avatar] = 'Custom Gravatar (/images/gravatar.png)';
        return $avatar_defaults;
    }
    
    add_filter( 'avatar_defaults', 'cr_custom_gravatar' );
}

/* Comment Styling */

if( !function_exists( 'comment_style' ) ) {
    function comment_style($comment, $args, $depth) {
      global $data;

        $GLOBALS['comment'] = $comment; ?>
        <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">

        <?php if( $data['single_post_design'] != 'modern' ) { ?>
     
            <div id="comment-<?php comment_ID(); ?>" class="comment_quote">             
                <div>               
                    <?php if ($comment->comment_approved == '0') : ?>
                        <em class="moderation"><?php _e('Your comment is awaiting moderation.', 'Creativo') ?></em>
                        <br />
                    <?php endif; ?>          
                    <div class="comment-body">
                        <?php comment_text() ?>
                    </div>
                </div>    
            </div>
            <div class="comment_details clearfix">
                <div class="comment_image">
                        <?php echo get_avatar($comment,$size='55'); ?>
                </div>
                <div class="comment_author_details">
                    <div class="comment-author vcard">
                            <?php printf(__('<cite class="fn">%s</cite>'), get_comment_author_link()) ?>
                    </div>
        
                    <div class="comment-meta commentmetadata">
                        <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s', 'Creativo'), get_comment_date(),  get_comment_time()) ?></a>
                        <?php edit_comment_link(__('(Edit)', 'Creativo'),'  ','') ?> &middot; <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                    </div>
                </div>    
      </div>
    <?php 
    }
    else {
    ?>
      <div id="comment-<?php comment_ID(); ?>" class="comment_quote modern">
        <div class="comment_image"><?php echo get_avatar($comment,$size='70'); ?></div>
        <div class="comment_body">
          <div class="comment_author_details">
                      <div class="comment-author vcard">
                        <h6><?php echo get_comment_author_link(); ?><span><?php echo get_comment_date() . ' ' . get_comment_time(); ?></span></h6>
                              <?php /*printf(__('<h6 class="author_title">%s</h6>'), get_comment_author_link()) ?> <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s', 'Creativo'), get_comment_date(),  get_comment_time()) ?></a>
                            <span><?php edit_comment_link(__('(Edit)', 'Creativo'),'  ','') ?> &middot; <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth'])))  */?>
                      </div>                    
                  </div>
                  <?php if ($comment->comment_approved == '0') : ?>
                        <em class="moderation"><?php _e('Your comment is awaiting moderation.', 'Creativo') ?></em>
                        <br />
                    <?php endif; ?>          
                    <div class="comment-body">
                        <?php comment_text() ?>
                    </div>
        </div>
      </div>
    <?php
    }
    ?>
    </li>
    <?php
    }
}

if( !function_exists( 'cr_posts_navigation' ) ) {
  function cr_posts_navigation() {
    global $data;
    
    if($data['post_nav_style']=='thumbs') {
      ?>                        
      <div class="posts_navigation_thumbs clearfix">
      
        <?php 
        $prevPost = get_previous_post(false);                        
        if($prevPost) {
        ?>
          <div class="thumbs_prev_post">
            <?php $prevthumbnail = get_the_post_thumbnail($prevPost->ID, array(75,75) );?>
            <?php previous_post_link('%link','<span class="navi_thumb">' . $prevthumbnail . '</span><span class="navi_content">'.__('Previous','Creativo').'<h5 class="navi_heading">%title</h5></span>', FALSE); ?>
          </div>

        <?php
            wp_reset_postdata(); 
        } 
        
        $nextPost = get_next_post(false);
        
        if($nextPost) { ?>
          <div class="thumbs_next_post">
            <?php $nextthumbnail = get_the_post_thumbnail($nextPost->ID, array(75,75) ); ?>
            <?php next_post_link('%link','<span class="navi_content">'.__('Next','Creativo').'<h5 class="navi_heading">%title</h5></span><span class="navi_thumb">'.$nextthumbnail . '</span>', FALSE); ?>
          </div>
        <?php
          wp_reset_postdata(); 
        } 
        ?>
      </div>
      <?php
    }
    else{
    ?>                    
      <div class="portfolio-navigation">                
          <?php previous_post_link('%link', '<div class="portfolio-navi-previous"><i class="fa fa-angle-left"></i> '.__('Previous ','Creativo').'</div>'); ?>
          <?php next_post_link('%link', '<div class="portfolio-navi-next">'.__('Next','Creativo').' <i class="fa fa-angle-right"></i></div>'); ?>
          <div class="clear"></div>
      </div>
    <?php
    }
  }
}