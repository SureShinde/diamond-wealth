<?php

$cat_display_names = array(	
	'default' => __('Creativo Main', 'Creativo'),
	'gym' => __('Creativo Gym', 'Creativo'),
	'hero' => __('Hero Sections', 'Creativo'),
	'clients' => __('Clients', 'Creativo'),
	'cta' => __('Call to Action', 'Creativo'),
	'icons' => __('Icons', 'Creativo'),
	'carousels'  => __('Carousels', 'Creativo'),
	'counters' => __('Counters', 'Creativo'),
	'flip_boxes' => __('Flip Boxes', 'Creativo'),
	'faq' => __('FAQs', 'Creativo'),
	'icon_image_box' => __('Icon/Image Boxes', 'Creativo'),
	'content' => __('Images/Galleries', 'Creativo'),
	'portfolio' => __('Portfolio', 'Creativo'),
	'posts_grid' => __('Posts Grid', 'Creativo'),
	'progress_bars' => __('Progress Bars', 'Creativo'),
	'testimonials' => __('Testimonials', 'Creativo'),	
	'team_members' => __('Team Members', 'Creativo'),
	'tabs' => __('Tabs', 'Creativo'),
	'tours' => __('Tours', 'Creativo'),	
);

/* Hero Images sections */
/* ================================================== */

$data = array();
$data['name'] = __( 'Parallax Hero +Text 1', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'default hero';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/heading_text_5.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row eq_height="yes" content_placement="middle" parallax="yes" parallax_sizing="100%" css=".vc_custom_1505390793670{padding-top: 20% !important;padding-bottom: 20% !important;background: #fafafa url(https://rockythemes.com/creativo/wp-content/uploads/2017/06/home-page-4.jpg?id=3609);}"][vc_column width="1/2"][vc_custom_heading text="Simplify your creation process
with the Creativo Theme" font_container="tag:h2|font_size:40px|text_align:left|color:%23ffffff|line_height:1.3" use_theme_fonts="yes" el_class="font_weight_300" css=".vc_custom_1498220945957{padding-bottom: 20px !important;}"][vc_custom_heading text="Create pixel perfect websites with the best functionality
and technologies on the web.

" font_container="tag:p|font_size:17px|text_align:left|color:%23d6d6d6" use_theme_fonts="yes" css=".vc_custom_1498220958962{padding-bottom: 20px !important;}"][vc_button title="Download your Creativo Theme" target="_blank" shape="rounded" color="custom" custom_font_size="12px" custom_font_weight="600" custom_color="#4a90e2" custom_border_color="#4a90e2" custom_color_hover="#4565d1" custom_border_color_hover="#4565d1" align="left" href="https://www.mojomarketplace.com/item/creativo-5-0-ultra-responsive-multipurpose-wp-theme"][/vc_column][vc_column width="1/2"][vc_single_image image="3610" img_size="full" style="vc_box_rounded" css=".vc_custom_1498221372581{padding-top: 5% !important;padding-right: 5% !important;padding-bottom: 5% !important;padding-left: 5% !important;}"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Parallax Hero +Text 2', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'business hero';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/heading_text_8.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row parallax="yes" parallax_sizing="100%" css=".vc_custom_1490020031908{padding-top: 20% !important;padding-bottom: 15% !important;background-image: url(https://rockythemes.com/creativo_wp/wp-content/uploads/2017/02/about-lead.jpg?id=273) !important;}"][vc_column css_animation="fadeIn"][vc_custom_heading text="About Us" font_container="tag:h2|font_size:72px|text_align:center|color:%23ffffff|line_height:85px" use_theme_fonts="yes"][vc_custom_heading text="You can change everything you want in the About Us section without having to coding anything.
Edit the Row element to change the background image with just one click." font_container="tag:p|text_align:center|color:%23ffffff" use_theme_fonts="yes"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Parallax Hero +Text 3', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'business hero';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/heading_text_9.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row parallax="yes" parallax_sizing="100%" css=".vc_custom_1490021145885{padding-top: 20% !important;padding-bottom: 15% !important;background-image: url(https://rockythemes.com/creativo_wp/wp-content/uploads/2017/02/services-lead.jpg?id=175) !important;}"][vc_column css_animation="fadeIn"][vc_custom_heading text="Services" font_container="tag:h2|font_size:72px|text_align:center|color:%23ffffff|line_height:85px" use_theme_fonts="yes"][vc_custom_heading text="Take advantage of the Drag Drop page builder, Visual Elements and Theme Options
we integrated so you can build the best site for your business." font_container="tag:p|text_align:center|color:%23ffffff" use_theme_fonts="yes"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Video Hero +Text', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'default hero';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/video_hero.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row eq_height="yes" content_placement="middle" video_bg="yes" video_overlay="rgba(10,10,10,0.72)" video_placeholder="3565" css=".vc_custom_1498478422501{border-bottom-width: 1px !important;padding-top: 15% !important;padding-bottom: 15% !important;background-color: #fafafa !important;border-bottom-color: #ededed !important;border-bottom-style: solid !important;}" video_bg_url="https://www.youtube.com/watch?v=nbU2bybx5fU"][vc_column 0=""][vc_custom_heading text="Howdy, this is <strong>Creativo</strong>,
The Ultimate WordPress Theme" font_container="tag:h2|font_size:40px|text_align:center|color:%23ffffff|line_height:1.3" use_theme_fonts="yes" el_class="font_weight_300" css=".vc_custom_1498478511596{padding-bottom: 20px !important;}"][vc_custom_heading text="Create pixel perfect websites with the best functionality
and technologies on the web.

" font_container="tag:p|font_size:17px|text_align:center|color:%23c4c4c4" use_theme_fonts="yes" css=".vc_custom_1498478454522{padding-bottom: 20px !important;}"][vc_button title="Download your Creativo Theme" target="_blank" shape="rounded" color="custom" custom_font_size="12px" custom_font_weight="600" custom_color="#4a90e2" custom_border_color="#4a90e2" custom_color_hover="#4565d1" custom_border_color_hover="#4565d1" href="https://www.mojomarketplace.com/item/creativo-5-0-ultra-responsive-multipurpose-wp-theme"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Hero Image + Text 1', 'js_composer' );
$data['cat_display_name'] = 'Hero Images';
$data['custom_class'] = 'hero default';
$data['weight']     = 4; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/heading_text_1.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row eq_height="yes" content_placement="middle" css=".vc_custom_1504525285123{padding-top: 11% !important;padding-bottom: 11% !important;background: #fafafa url(https://rockythemes.com/creativo/wp-content/uploads/2017/06/business-man.jpg?id=3726) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column width="1/2"][vc_custom_heading text="Simplify your creation process
with the Creativo Theme" font_container="tag:h2|font_size:40px|text_align:left|color:%23252525|line_height:1.3" use_theme_fonts="yes" el_class="font_weight_300" css=".vc_custom_1498135146047{padding-bottom: 20px !important;}"][vc_custom_heading text="Create pixel perfect websites with the best functionality
and technologies on the web.

" font_container="tag:p|font_size:17px|text_align:left|color:%23919191" use_theme_fonts="yes" css=".vc_custom_1498140440614{padding-bottom: 20px !important;}"][vc_button title="Testdrive Creativo" target="_blank" shape="rounded" color="custom" custom_font_size="12px" custom_font_weight="600" custom_color="#280808" custom_border_color="#280808" custom_color_hover="#280808" custom_border_color_hover="#280808" align="left" inline_button="yes" href="https://www.mojomarketplace.com/item/creativo-5-0-ultra-responsive-multipurpose-wp-theme"][vc_button title="Purchase Creativo" target="_blank" shape="rounded" color="custom" custom_font_size="12px" custom_font_weight="600" custom_color="#4a90e2" custom_border_color="#4a90e2" custom_color_hover="#4565d1" custom_border_color_hover="#4565d1" align="left" inline_button="yes" href="https://www.mojomarketplace.com/item/creativo-5-0-ultra-responsive-multipurpose-wp-theme"][/vc_column][vc_column width="1/2"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Hero Image + Text 2', 'js_composer' );
$data['cat_display_name'] = 'Hero Images';
$data['custom_class'] = 'hero default';
$data['weight']     = 2; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/heading_text_2.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1498253551826{padding-top: 25% !important;padding-bottom: 25% !important;background-image: url(https://rockythemes.com/creativo/wp-content/uploads/2017/06/working-office.jpg) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column 0=""][vc_custom_heading text="Creativo brings the Best Design
and Customization options" font_container="tag:h2|font_size:40px|text_align:center|color:%23ffffff|line_height:1.3" use_theme_fonts="yes" el_class="font_weight_300" css=".vc_custom_1498140252374{padding-bottom: 20px !important;}"][vc_custom_heading text="Change Fonts, Colors, Images, everything you want
with simple mouse clicks." font_container="tag:p|font_size:17px|text_align:center|color:%23e5e5e5" use_theme_fonts="yes" css=".vc_custom_1498140491268{padding-bottom: 20px !important;}"][vc_button title="Grab your copy of Creativo" target="_blank" shape="rounded" color="custom" custom_font_size="12px" custom_font_weight="600" custom_color="rgba(255,255,255,0.01)" custom_border_color="#ffffff" custom_text_color_hover="#2d2d2d" custom_color_hover="#ffffff" custom_border_color_hover="#ffffff" href="https://www.mojomarketplace.com/item/creativo-5-0-ultra-responsive-multipurpose-wp-theme"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Hero Image + Text 3', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['testimonials'];
$data['custom_class'] = 'hero default';
$data['weight']     = 3; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/heading_text_3.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row eq_height="yes" content_placement="middle" css=".vc_custom_1498214392989{padding-top: 15% !important;padding-bottom: 15% !important;background: #fafafa url(http://localhost/cr2/wp-content/uploads/2017/06/design-process.jpg?id=3565) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_custom_heading text="Simplify your creation process
with the Creativo Theme" font_container="tag:h2|font_size:40px|text_align:center|color:%23ffffff|line_height:1.3" use_theme_fonts="yes" el_class="font_weight_300" css=".vc_custom_1498142547908{padding-bottom: 20px !important;}"][vc_custom_heading text="Create pixel perfect websites with the best functionality
and technologies on the web.

" font_container="tag:p|font_size:17px|text_align:center|color:%23d6d6d6" use_theme_fonts="yes" css=".vc_custom_1498142564661{padding-bottom: 20px !important;}"][vc_button title="Download your Creativo Theme" target="_blank" shape="rounded" color="custom" custom_font_size="12px" custom_font_weight="600" custom_color="#4a90e2" custom_border_color="#4a90e2" custom_color_hover="#4565d1" custom_border_color_hover="#4565d1" href="https://www.mojomarketplace.com/item/creativo-5-0-ultra-responsive-multipurpose-wp-theme"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Hero Image +Text 4', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'default hero';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/heading_text_4.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row eq_height="yes" content_placement="middle" css=".vc_custom_1498219843013{padding-top: 20% !important;padding-bottom: 15% !important;background: #fafafa url(https://rockythemes.com/creativo/wp-content/uploads/2017/06/home-page-3.jpg?id=3601) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_custom_heading text="Simplify your creation process
with the Creativo Theme" font_container="tag:h2|font_size:40px|text_align:center|color:%23ffffff|line_height:1.3" use_theme_fonts="yes" el_class="font_weight_300" css=".vc_custom_1498215718481{padding-bottom: 20px !important;}"][vc_custom_heading text="Create pixel perfect websites with the best functionality
and technologies on the web." font_container="tag:p|font_size:17px|text_align:center|color:%23d6d6d6" use_theme_fonts="yes" css=".vc_custom_1498215736668{padding-bottom: 20px !important;}"][vc_button title="Download your Creativo Theme" target="_blank" shape="rounded" color="custom" custom_font_size="12px" custom_font_weight="600" custom_color="#4a90e2" custom_border_color="#4a90e2" custom_color_hover="#4565d1" custom_border_color_hover="#4565d1" href="https://www.mojomarketplace.com/item/creativo-5-0-ultra-responsive-multipurpose-wp-theme"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Hero Image +Text 5', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'default hero';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/heading_text_7.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row eq_height="yes" content_placement="middle" css=".vc_custom_1498227835664{padding-top: 15% !important;padding-bottom: 15% !important;background: #fafafa url(https://rockythemes.com/creativo/wp-content/uploads/2017/06/home-page-5.jpg?id=3632) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column 0=""][vc_custom_heading text="Howdy, this is Creativo, the Ultimate
Theme For WordPress" font_container="tag:h2|font_size:40px|text_align:center|color:%23ffffff|line_height:1.3" use_theme_fonts="yes" el_class="font_weight_300" css=".vc_custom_1498228028349{padding-bottom: 20px !important;}"][vc_custom_heading text="Create pixel perfect websites with the best functionality
and technologies on the web.

" font_container="tag:p|font_size:17px|text_align:center|color:%23d6d6d6" use_theme_fonts="yes" css=".vc_custom_1498142564661{padding-bottom: 20px !important;}"][vc_button title="Download your Creativo Theme" target="_blank" shape="rounded" color="custom" custom_font_size="12px" custom_font_weight="600" custom_color="#4a90e2" custom_border_color="#4a90e2" custom_color_hover="#4565d1" custom_border_color_hover="#4565d1" href="https://www.mojomarketplace.com/item/creativo-5-0-ultra-responsive-multipurpose-wp-theme"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Hero Image +Text 6', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'lifecoach hero';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/heading_text_10.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1496355877968{padding-top: 18% !important;padding-bottom: 18% !important;background-image: url(https://rockythemes.com/creativo-life/wp-content/uploads/2017/06/hero-image.jpg?id=18) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column width="7/12"][vc_custom_heading text="``A FIT, HEALTHY
BODY—THAT IS THE BEST
FASHION STATEMENT``" font_container="tag:h2|font_size:66px|text_align:left|color:%23ffffff|line_height:1.2" use_theme_fonts="yes" css_animation="fadeInUp"][vc_custom_heading text="Jasmin Rees" font_container="tag:h3|font_size:54px|text_align:left|color:%23ffffff|line_height:1" google_fonts="font_family:Yellowtail%3Aregular|font_style:400%20regular%3A400%3Anormal" css_animation="fadeInUp" css=".vc_custom_1496357842440{padding-top: 30px !important;}"][/vc_column][vc_column width="5/12"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Hero Image +Checklist Text', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'default hero';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/heading_text_6.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1498225844144{padding-top: 10% !important;padding-bottom: 10% !important;background-image: url(https://rockythemes.com/creativo/wp-content/uploads/2017/06/home-page-4-content.jpg?id=3625) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column width="2/3"][/vc_column][vc_column width="1/3" css=".vc_custom_1498225868547{padding-top: 10% !important;padding-right: 10% !important;padding-bottom: 10% !important;padding-left: 10% !important;background-color: #ffffff !important;border-radius: 10px !important;}"][vc_custom_heading text="Lifetime Support &amp; Updates" font_container="tag:h2|font_size:30px|text_align:left|color:%23252525|line_height:1.3" use_theme_fonts="yes" el_class="font_weight_300" css=".vc_custom_1498225294265{padding-bottom: 10px !important;}"][vc_column_text]Purchase <strong>Creativo</strong> and have unlimited access to future updates, theme releases and lifetime support.[/vc_column_text][vc_column_text css=".vc_custom_1498225500383{padding-top: 10px !important;padding-bottom: 10px !important;}"][checklist text_color="" icon_color="#4cc4eb" icon_bg_color="" shape="" font_size="14px" line_height="30px" fontawesome_icon="fa fa-caret-right"]
<ul>
 	<li>Easy to use layout visual builder</li>
 	<li>Modern &amp; beautiful ready-made skins</li>
 	<li>Tons of useful widgets &amp; shortcodes</li>
 	<li>Friendly &amp; helpful support team</li>
 	<li>Compatible with popular plugins</li>
</ul>
[/checklist][/vc_column_text][vc_button title="Get Started with Creativo" target="_blank" shape="rounded" color="custom" custom_font_size="12px" custom_font_weight="600" custom_color="#4a90e2" custom_border_color="#4a90e2" custom_color_hover="#4565d1" custom_border_color_hover="#4565d1" align="left" href="https://www.mojomarketplace.com/item/creativo-5-0-ultra-responsive-multipurpose-wp-theme"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Parallax Image +Headings', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'main hero cafebar';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/parallax_head.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row parallax="yes" css=".vc_custom_1460201737635{padding-top: 20% !important;padding-bottom: 20% !important;background-image: url(http://rockythemes.com/creativo-cafe/wp-content/uploads/2016/04/about-us.jpg?id=173) !important;}"][vc_column][vc_custom_heading text="ABOUT US" font_container="tag:h1|font_size:60|text_align:center|color:%23ffffff" use_theme_fonts="yes"][vc_custom_heading text="Everything there is to know about us" font_container="tag:p|font_size:30|text_align:center|color:%23d0bc9b" use_theme_fonts="yes"][vc_separator_2 color_line="#d0bc9b" padding_top="20"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Parallax Image +Headings 2', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'main hero cafebar';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/parallax_head2.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row parallax="yes" css=".vc_custom_1460201755125{padding-top: 20% !important;padding-bottom: 20% !important;background-image: url(http://rockythemes.com/creativo-cafe/wp-content/uploads/2016/04/plate.jpg?id=158) !important;}"][vc_column][vc_custom_heading text="FOOD & DRINKS" font_container="tag:h2|font_size:60|text_align:center|color:%23ffffff" use_theme_fonts="yes"][vc_custom_heading text="Served in time, using only the best ingredients" font_container="tag:p|font_size:30|text_align:center|color:%23d0bc9b" use_theme_fonts="yes"][vc_separator_2 color_line="#d0bc9b" padding_top="20"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Parallax Image +Headings 3', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'main hero cafebar';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/parallax_head3.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row parallax="yes" css=".vc_custom_1460293414888{padding-top: 20% !important;padding-bottom: 20% !important;background-image: url(http://rockythemes.com/creativo-cafe/wp-content/uploads/2016/04/blog-bg.jpg?id=238) !important;}"][vc_column][vc_custom_heading text="FROM THE BLOG" font_container="tag:h2|font_size:60|text_align:center|color:%23ffffff" use_theme_fonts="yes"][vc_custom_heading text="Follow our blog to stay updated with the latest events and news!" font_container="tag:p|font_size:30|text_align:center|color:%23d0bc9b" use_theme_fonts="yes"][vc_separator_2 color_line="#d0bc9b" padding_top="10" padding_bottom="30"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Parallax Image +Headings 4', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'main hero cafebar';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/parallax_head4.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row content_placement="middle" parallax="yes" css=".vc_custom_1460293600608{padding-top: 20% !important;padding-bottom: 20% !important;background-image: url(http://rockythemes.com/creativo-cafe/wp-content/uploads/2016/04/bar-image2.jpg?id=164) !important;}"][vc_column][vc_custom_heading text="CONTACT US" font_container="tag:h2|font_size:60|text_align:center|color:%23ffffff" use_theme_fonts="yes"][vc_custom_heading text="We look forward to meet you!" font_container="tag:p|font_size:30|text_align:center|color:%23d0bc9b" use_theme_fonts="yes"][vc_separator_2 color_line="#d0bc9b" padding_top="10" padding_bottom="30"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Hero Image +Headings +Button', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'main hero shopkeeper';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/heading_text_11.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1479158319248{background-image: url(http://rockythemes.com/creativo-shop/wp-content/uploads/2016/11/hipster-glasses-3.jpg?id=333) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column width="1/2"][/vc_column][vc_column width="1/2" css=".vc_custom_1479137620471{padding-top: 30% !important;padding-bottom: 30% !important;padding-left: 10% !important;}"][vc_custom_heading text="HIPSTER STYLE" font_container="tag:h2|font_size:48|text_align:left|color:%23212121|line_height:1" google_fonts="font_family:Open%20Sans%3A300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic|font_style:700%20bold%20regular%3A700%3Anormal"][vc_custom_heading text="EVERYTHING YOU NEED TO KNOW" font_container="tag:h2|font_size:28|text_align:left|color:%23212121|line_height:1" google_fonts="font_family:Open%20Sans%3A300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic|font_style:700%20bold%20regular%3A700%3Anormal"][vc_separator_2 color_line="#444444" separator_position="left_sep" padding_top="30" padding_bottom="30"][vc_column_text css=".vc_custom_1479135731726{margin-bottom: 30px !important;}"]
<h5>Check out the latest hipster clothing recommendatoin from the best experts. Search, find and combine the best clothing pieces for your style. It doesn’t get any better than this.</h5>
[/vc_column_text][vc_button title="BEGIN SHOPPING" color="custom" custom_color="#210707" custom_border_color="#210707" align="left"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Parallax Hero +Headings 5', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'main hero shopkeeper';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/parallax_head5.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row fullscreen="yes" content_placement="middle" parallax="yes" section_id="home" css=".vc_custom_1479309693249{background-image: url(http://rockythemes.com/creativo-shop/wp-content/uploads/2016/11/bg-1-1.jpg?id=482) !important;}"][vc_column width="1/2"][/vc_column][vc_column width="1/2"][vc_custom_heading text="HIPSTER DIY TIPS" font_container="tag:h2|font_size:50|text_align:left|color:%231c1c1c" google_fonts="font_family:Open%20Sans%3A300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic|font_style:700%20bold%20regular%3A700%3Anormal" css=".vc_custom_1479305463226{margin-bottom: 0px !important;}"][vc_custom_heading text="EASY FASHION TIPS FOR HIPSTERS" font_container="tag:h2|font_size:28|text_align:left|color:%231c1c1c" google_fonts="font_family:Open%20Sans%3A300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic|font_style:700%20bold%20regular%3A700%3Anormal"][vc_separator_2 color_line="#444444" separator_position="left_sep" padding_top="20" padding_bottom="30"][vc_column_text]
<h5>I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</h5>
[/vc_column_text][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Parallax Hero +Headings 6', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'main hero shopkeeper';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/parallax_head6.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row fullscreen="yes" content_placement="middle" parallax="yes" section_id="rayban" css=".vc_custom_1479309719543{background-image: url(http://rockythemes.com/creativo-shop/wp-content/uploads/2016/11/bg-4.jpg?id=485) !important;}"][vc_column width="1/2"][vc_custom_heading text="RAYBANS STYLING" font_container="tag:h2|font_size:50|text_align:left|color:%231c1c1c" google_fonts="font_family:Open%20Sans%3A300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic|font_style:700%20bold%20regular%3A700%3Anormal" css=".vc_custom_1479305026615{margin-bottom: 0px !important;}"][vc_custom_heading text="SHE LOVES SUNGLASSES" font_container="tag:h2|font_size:28|text_align:left|color:%231c1c1c" google_fonts="font_family:Open%20Sans%3A300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic|font_style:700%20bold%20regular%3A700%3Anormal"][vc_separator_2 color_line="#444444" separator_position="left_sep" padding_top="20" padding_bottom="30"][vc_column_text]
<h5>I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</h5>
[/vc_column_text][/vc_column][vc_column width="1/2"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Parallax Hero +Headings 7', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'main hero shopkeeper';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/parallax_head7.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row fullscreen="yes" content_placement="middle" parallax="yes" section_id="black" css=".vc_custom_1479310327959{background-image: url(http://rockythemes.com/creativo-shop/wp-content/uploads/2016/11/bg-3-real.jpg?id=484) !important;}"][vc_column width="1/2"][/vc_column][vc_column width="1/2"][vc_custom_heading text="THE BLACK SHIRT TIP" font_container="tag:h2|font_size:50|text_align:left|color:%231c1c1c" google_fonts="font_family:Open%20Sans%3A300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic|font_style:700%20bold%20regular%3A700%3Anormal" css=".vc_custom_1479310310552{margin-bottom: 0px !important;}"][vc_custom_heading text="BEST FASHION TIPS FOR HIM" font_container="tag:h2|font_size:28|text_align:left|color:%231c1c1c" google_fonts="font_family:Open%20Sans%3A300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic|font_style:700%20bold%20regular%3A700%3Anormal"][vc_separator_2 color_line="#444444" separator_position="left_sep" padding_top="20" padding_bottom="30"][vc_column_text]
<h5>I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</h5>
[/vc_column_text][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Parallax Hero +Headings 8', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'main hero shopkeeper';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/parallax_head8.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row fullscreen="yes" content_placement="middle" parallax="yes" section_id="winter" css=".vc_custom_1479309791468{background-image: url(http://rockythemes.com/creativo-shop/wp-content/uploads/2016/11/bg-2.jpg?id=483) !important;}"][vc_column width="1/2"][vc_custom_heading text="WINTER CAPS TIPS" font_container="tag:h2|font_size:50|text_align:left|color:%231c1c1c" google_fonts="font_family:Open%20Sans%3A300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic|font_style:700%20bold%20regular%3A700%3Anormal" css=".vc_custom_1479307612590{margin-bottom: 0px !important;}"][vc_custom_heading text="YOU CAN WEAR THEM IN SUMMER" font_container="tag:h2|font_size:28|text_align:left|color:%231c1c1c" google_fonts="font_family:Open%20Sans%3A300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic|font_style:700%20bold%20regular%3A700%3Anormal"][vc_separator_2 color_line="#444444" separator_position="left_sep" padding_top="20" padding_bottom="30"][vc_column_text]
<h5>I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</h5>
[/vc_column_text][/vc_column][vc_column width="1/2"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );


$data = array();
$data['name'] = __( 'Hero Image +Text 7', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'main hero shopkeeper';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/heading_text_12.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row parallax="yes" css=".vc_custom_1479397359068{padding-top: 25% !important;padding-bottom: 20% !important;background-image: url(http://rockythemes.com/creativo-shop/wp-content/uploads/2016/11/sunset-mod-right.jpg?id=539) !important;}"][vc_column][vc_custom_heading text="ABOUT US" font_container="tag:h2|font_size:40|text_align:center|color:%23ffffff" google_fonts="font_family:Open%20Sans%3A300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic|font_style:600%20bold%20regular%3A600%3Anormal" css=".vc_custom_1479382316123{margin-bottom: 0px !important;}"][vc_custom_heading text="The team behind ShopKeeper" font_container="tag:p|font_size:16|text_align:center|color:%23ffffff" use_theme_fonts="yes"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Parallax Image +Heading Text', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'main hero agency';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/parallax_head9.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row parallax="yes" css=".vc_custom_1484831193761{padding-top: 15% !important;padding-bottom: 15% !important;background-image: url(https://rockythemes.com/creativo-agency/wp-content/uploads/2015/10/team-designers-working-mod.jpg?id=20) !important;}"][vc_column][vc_custom_heading text="OUR SERVICES" font_container="tag:h1|font_size:60|text_align:center|color:%23ffffff|line_height:1" google_fonts="font_family:Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900|font_style:600%20bold%20regular%3A600%3Anormal"][vc_custom_heading text="Find out more about the services we provide" font_container="tag:h2|font_size:20|text_align:center|color:%23efefef" google_fonts="font_family:Lora%3Aregular%2Citalic%2C700%2C700italic|font_style:400%20italic%3A400%3Aitalic"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Parallax Image +Heading Text 2', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'main hero agency';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/parallax_head10.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row parallax="yes" css=".vc_custom_1484831252149{padding-top: 15% !important;padding-bottom: 15% !important;background-image: url(https://rockythemes.com/creativo-agency/wp-content/uploads/2015/10/man-woman-talkin.jpg?id=39) !important;}"][vc_column][vc_custom_heading text="ABOUT US" font_container="tag:h1|font_size:60|text_align:center|color:%23ffffff|line_height:1" google_fonts="font_family:Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900|font_style:600%20bold%20regular%3A600%3Anormal"][vc_custom_heading text="Find out more about our main area of expertise." font_container="tag:h2|font_size:20|text_align:center|color:%23efefef" google_fonts="font_family:Lora%3Aregular%2Citalic%2C700%2C700italic|font_style:400%20italic%3A400%3Aitalic"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Parallax Image +Heading Text 3', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'main hero agency';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/parallax_head11.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row parallax="yes" css=".vc_custom_1484831317133{padding-top: 15% !important;padding-bottom: 15% !important;background-image: url(https://rockythemes.com/creativo-agency/wp-content/uploads/2015/10/our-work-parallax.jpg?id=147) !important;}"][vc_column][vc_custom_heading text="OUR WORK" font_container="tag:h2|font_size:60|text_align:center|color:%23ffffff|line_height:1" google_fonts="font_family:Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900|font_style:600%20bold%20regular%3A600%3Anormal"][vc_custom_heading text="Showcase your work in style using Creativo theme." font_container="tag:h3|font_size:20|text_align:center|color:%23ffffff" google_fonts="font_family:Lora%3Aregular%2Citalic%2C700%2C700italic|font_style:400%20italic%3A400%3Aitalic"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Parallax Image +Heading Text 4', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'main hero agency';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/parallax_head12.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row parallax="yes" css=".vc_custom_1484831440461{padding-top: 15% !important;padding-bottom: 15% !important;background-image: url(https://rockythemes.com/creativo-agency/wp-content/uploads/2015/10/blog-bg-use.jpg?id=197) !important;}"][vc_column css=".vc_custom_1445384099763{background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_custom_heading text="LATEST POSTS" font_container="tag:h2|font_size:60|text_align:center|color:%23ffffff|line_height:1" google_fonts="font_family:Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900|font_style:600%20bold%20regular%3A600%3Anormal"][vc_custom_heading text="Serving fresh content directly to your blog!" font_container="tag:h2|font_size:20|text_align:center|color:%23ffffff|line_height:1.3" google_fonts="font_family:Lora%3Aregular%2Citalic%2C700%2C700italic|font_style:400%20italic%3A400%3Aitalic"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Parallax Image +Heading Text 5', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'main hero agency';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/parallax_head13.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row parallax="yes" css=".vc_custom_1484831403440{padding-top: 15% !important;padding-bottom: 15% !important;background-image: url(https://rockythemes.com/creativo-agency/wp-content/uploads/2015/10/contact-image.jpg?id=84) !important;}"][vc_column][vc_custom_heading text="CONTACT US" font_container="tag:h2|font_size:60|text_align:center|color:%23ffffff|line_height:1" google_fonts="font_family:Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900|font_style:600%20bold%20regular%3A600%3Anormal"][vc_custom_heading text="Use the info provided below to get in touch with us." font_container="tag:h2|font_size:20|text_align:center|color:%23ffffff" google_fonts="font_family:Lora%3Aregular%2Citalic%2C700%2C700italic|font_style:400%20italic%3A400%3Aitalic"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );
/* END Hero Sections */
/* ================================================== */

/* Icon/Image Box */
/* ================================================== */

$data = array();
$data['name'] = __( 'Icon Box 1', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['icon_image_box'];
$data['custom_class'] = 'default icon_image_box';
$data['weight']     = 0; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/icon_box_1.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1498137492460{padding-top: 10% !important;}"][vc_column width="1/2" css=".vc_custom_1498136531704{padding-right: 30px !important;padding-left: 30px !important;border-radius: 4px !important;}"][vc_row_inner css=".vc_custom_1498138215753{border-top-width: 1px !important;border-right-width: 1px !important;border-bottom-width: 5px !important;border-left-width: 1px !important;padding-top: 40px !important;padding-right: 20px !important;padding-bottom: 20px !important;padding-left: 20px !important;border-left-color: #ededed !important;border-left-style: solid !important;border-right-color: #ededed !important;border-right-style: solid !important;border-top-color: #ededed !important;border-top-style: solid !important;border-bottom-color: #ededed !important;border-bottom-style: solid !important;border-radius: 5px !important;}"][vc_column_inner][vc_product_feature title="Most Customizable Theme" font_size="15" font_weight="600" bottom_margin="10px" title_color="#444444" icon_fontawesome="fa fa-envira" icon_color="#2b2b2b" icon_size="custom" desc_font_size="14px" desc_line_height="26px" desc_color="#3f3f3f" custom_icon_value="40"]Creativo provides all the options needed to customize absolutely every aspect of your site: fonts, images, sliders, colors, everything can be changed.[/vc_product_feature][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2" css=".vc_custom_1498136862829{padding-right: 30px !important;padding-left: 30px !important;}"][vc_row_inner css=".vc_custom_1498138228075{border-top-width: 1px !important;border-right-width: 1px !important;border-bottom-width: 5px !important;border-left-width: 1px !important;padding-top: 40px !important;padding-right: 20px !important;padding-bottom: 20px !important;padding-left: 20px !important;border-left-color: #ededed !important;border-left-style: solid !important;border-right-color: #ededed !important;border-right-style: solid !important;border-top-color: #ededed !important;border-top-style: solid !important;border-bottom-color: #ededed !important;border-bottom-style: solid !important;border-radius: 5px !important;}"][vc_column_inner][vc_product_feature title="Used by 11,000+ Clients" font_size="15" font_weight="600" bottom_margin="10px" title_color="#444444" icon_type="entypo" icon_color="#2b2b2b" icon_size="custom" desc_font_size="14px" desc_line_height="26px" desc_color="#3f3f3f" custom_icon_value="40" icon_entypo="entypo-icon entypo-icon-users"]Used and loved by over 11,000+ satisfied customers, Creativo is the best solution for creating websites and blogs without coding anything.[/vc_product_feature][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row css=".vc_custom_1498137823380{padding-top: 40px !important;padding-bottom: 10% !important;}"][vc_column width="1/2" css=".vc_custom_1498136531704{padding-right: 30px !important;padding-left: 30px !important;border-radius: 4px !important;}"][vc_row_inner css=".vc_custom_1498138238516{border-top-width: 1px !important;border-right-width: 1px !important;border-bottom-width: 5px !important;border-left-width: 1px !important;padding-top: 40px !important;padding-right: 20px !important;padding-bottom: 20px !important;padding-left: 20px !important;border-left-color: #ededed !important;border-left-style: solid !important;border-right-color: #ededed !important;border-right-style: solid !important;border-top-color: #ededed !important;border-top-style: solid !important;border-bottom-color: #ededed !important;border-bottom-style: solid !important;border-radius: 5px !important;}"][vc_column_inner][vc_product_feature title="Visual Composer Included" font_size="15" font_weight="600" bottom_margin="10px" title_color="#444444" icon_type="openiconic" icon_color="#2b2b2b" icon_size="custom" desc_font_size="14px" desc_line_height="26px" desc_color="#3f3f3f" custom_icon_value="40" icon_openiconic="vc-oi vc-oi-layers"]Create your pages using the Visual Composer elements - more than 100 elements are at your disposal to create the perfect page layout.[/vc_product_feature][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2" css=".vc_custom_1498136862829{padding-right: 30px !important;padding-left: 30px !important;}"][vc_row_inner css=".vc_custom_1498138248054{border-top-width: 1px !important;border-right-width: 1px !important;border-bottom-width: 5px !important;border-left-width: 1px !important;padding-top: 40px !important;padding-right: 20px !important;padding-bottom: 20px !important;padding-left: 20px !important;border-left-color: #ededed !important;border-left-style: solid !important;border-right-color: #ededed !important;border-right-style: solid !important;border-top-color: #ededed !important;border-top-style: solid !important;border-bottom-color: #ededed !important;border-bottom-style: solid !important;border-radius: 5px !important;}"][vc_column_inner][vc_product_feature title="Lifetime Support" font_weight="600" bottom_margin="10px" title_color="#444444" icon_type="entypo" icon_color="#2b2b2b" icon_size="custom" desc_font_size="14px" desc_line_height="26px" desc_color="#3f3f3f" custom_icon_value="40" icon_entypo="entypo-icon entypo-icon-lifebuoy"]Purchasing Creativo gives you access to our support platform for life. We provide support on forum, chat or directly on email, for FREE.[/vc_product_feature][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Icon Box 2', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['icons'];
$data['custom_class'] = 'default icon_image_box';
$data['weight']     = 8; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/icon_box_4.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1498251593962{padding-top: 10% !important;padding-bottom: 10% !important;}"][vc_column width="1/3"][vc_product_feature title="Flawless Design" font_size="20" font_weight="400" line_height="30px" bottom_margin="10px" title_color="#0c0c0c" icon_fontawesome="fa fa-html5" icon_color="#2282d6" icon_size="custom" icon_bg_color="" desc_font_size="14px" desc_line_height="26px" custom_icon_value="30" desc_color="#7a7a7a"]This theme does everything you could possibly want it to do and not only that, it is beautifully designed and extremely intuitive to use.[/vc_product_feature][/vc_column][vc_column width="1/3"][vc_product_feature title="Easy to Use" font_size="20" font_weight="400" line_height="30px" bottom_margin="10px" title_color="#0c0c0c" icon_fontawesome="fa fa-gitlab" icon_color="#2282d6" icon_size="custom" icon_bg_color="" desc_font_size="14px" desc_line_height="26px" custom_icon_value="30" desc_color="#7a7a7a"]This theme does everything you could possibly want it to do and not only that, it is beautifully designed and extremely intuitive to use.[/vc_product_feature][/vc_column][vc_column width="1/3"][vc_product_feature title="Build Infinite Layouts" font_size="20" font_weight="400" line_height="30px" bottom_margin="10px" title_color="#0c0c0c" icon_fontawesome="fa fa-television" icon_color="#2282d6" icon_size="custom" icon_bg_color="" desc_font_size="14px" desc_line_height="26px" custom_icon_value="30" desc_color="#7a7a7a"]This theme does everything you could possibly want it to do and not only that, it is beautifully designed and extremely intuitive to use.[/vc_product_feature][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Icon Box 3', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['icons'];
$data['custom_class'] = 'business icon_image_box';
$data['weight']     = 8; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/icon_box_6.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1483975784406{padding-top: 100px !important;}"][vc_column width="1/4"][vc_product_feature title="Drag & Drop Builder" font_size="17" font_weight="400" line_height="normal" bottom_margin="20px" top_margin="20px" title_color="#03072e" icon="57" pf_pos="center" desc_font_size="14px" desc_line_height="24px" css_animation="rotateInDownRight" desc_color="#939399"]Using the Visual Composer you will create amazing layouts without coding anything.[/vc_product_feature][/vc_column][vc_column width="1/4"][vc_product_feature title="Ready to Use Templates" font_size="17" font_weight="400" line_height="normal" bottom_margin="20px" top_margin="20px" title_color="#03072e" icon="53" pf_pos="center" desc_font_size="14px" desc_line_height="24px" css_animation="rotateInDownRight" desc_color="#939399" delay="200"]Get started in seconds by importing the pre-built templates with just 1 click.[/vc_product_feature][/vc_column][vc_column width="1/4"][vc_product_feature title="Responsive & Retina Ready" font_size="17" font_weight="400" line_height="normal" bottom_margin="20px" top_margin="20px" title_color="#03072e" icon="54" pf_pos="center" desc_font_size="14px" desc_line_height="24px" css_animation="rotateInDownRight" desc_color="#939399" delay="400"]Creativo looks amazing on both retina and mobile devices.[/vc_product_feature][/vc_column][vc_column width="1/4"][vc_product_feature title="Customize Everything" font_size="17" font_weight="400" line_height="normal" bottom_margin="20px" top_margin="20px" title_color="#03072e" icon="51" pf_pos="center" desc_font_size="14px" desc_line_height="24px" css_animation="rotateInDownRight" desc_color="#939399" delay="600"]All the design elements inside Creativo can be changed with just a few clicks.[/vc_product_feature][/vc_column][/vc_row][vc_row css=".vc_custom_1483971604115{padding-top: 60px !important;padding-bottom: 30px !important;}"][vc_column width="1/4"][vc_product_feature title="Perfect WordPress Integration" font_size="17" font_weight="400" line_height="normal" bottom_margin="20px" top_margin="20px" title_color="#03072e" icon="55" pf_pos="center" desc_font_size="14px" desc_line_height="24px" css_animation="rotateInUpRight" desc_color="#939399"]Creativo is fully compatible with the latest version of WordPress 4.7.1[/vc_product_feature][/vc_column][vc_column width="1/4"][vc_product_feature title="MegaMenu Ready" font_size="17" font_weight="400" line_height="normal" bottom_margin="20px" top_margin="20px" title_color="#03072e" icon="52" pf_pos="center" desc_font_size="14px" desc_line_height="24px" css_animation="rotateInUpRight" desc_color="#939399" delay="200"]With Creativo you can easily create MegaMenus with just a few mouse clicks.[/vc_product_feature][/vc_column][vc_column width="1/4"][vc_product_feature title="Fantastic Support" font_size="17" font_weight="400" line_height="normal" bottom_margin="20px" top_margin="20px" title_color="#03072e" icon="56" pf_pos="center" desc_font_size="14px" desc_line_height="24px" css_animation="rotateInUpRight" desc_color="#939399" delay="400"]Our Support Team is available 24/7 to solve any issues you may encounter.[/vc_product_feature][/vc_column][vc_column width="1/4"][vc_product_feature title="Lifetime Updates" font_size="17" font_weight="400" line_height="normal" bottom_margin="20px" top_margin="20px" title_color="#03072e" icon="50" pf_pos="center" desc_font_size="14px" desc_line_height="24px" css_animation="rotateInUpRight" desc_color="#939399" delay="600"]Lifetime updates are delivered automatically to your admin dashboard.[/vc_product_feature][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Title +Icon Box', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['icons'];
$data['custom_class'] = 'default icon_image_box';
$data['weight']     = 8; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/icon_box_2.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1498145103378{border-top-width: 1px !important;padding-top: 10% !important;background-color: #fafafa !important;border-top-color: #ededed !important;border-top-style: solid !important;}"][vc_column 0=""][vc_custom_heading text="Easy to Use by <strong>Beginners &amp; Advanced</strong> Users
" font_container="tag:h2|font_size:30px|text_align:center|color:%23353535|line_height:1.3" use_theme_fonts="yes" el_class="font_weight_300" css=".vc_custom_1498145446362{padding-bottom: 10px !important;}"][vc_custom_heading text="Create pixel perfect websites with the best functionality
and technologies on the web." font_container="tag:p|font_size:17px|text_align:center|color:%23474747" use_theme_fonts="yes" css=".vc_custom_1498144754059{padding-bottom: 20px !important;}"][/vc_column][/vc_row][vc_row css=".vc_custom_1498146384503{border-bottom-width: 1px !important;padding-top: 3% !important;padding-bottom: 10% !important;background-color: #fafafa !important;border-bottom-color: #ededed !important;border-bottom-style: solid !important;}"][vc_column width="1/4" css=".vc_custom_1498136531704{padding-right: 30px !important;padding-left: 30px !important;border-radius: 4px !important;}"][vc_row_inner css=".vc_custom_1498144988439{border-top-width: 1px !important;border-right-width: 1px !important;border-bottom-width: 5px !important;border-left-width: 1px !important;padding-top: 40px !important;padding-right: 20px !important;padding-bottom: 20px !important;padding-left: 20px !important;background-color: #ffffff !important;border-left-color: #ededed !important;border-left-style: solid !important;border-right-color: #ededed !important;border-right-style: solid !important;border-top-color: #ededed !important;border-top-style: solid !important;border-bottom-color: #ededed !important;border-bottom-style: solid !important;border-radius: 5px !important;}"][vc_column_inner 0=""][vc_product_feature title="Customize with Ease" font_size="18" font_weight="600" bottom_margin="20px" top_margin="30px" title_color="#444444" pf_pos="center" icon_fontawesome="fa fa-envira" icon_color="#2b2b2b" icon_size="custom" desc_font_size="14px" desc_line_height="26px" desc_color="#3f3f3f" custom_icon_value="40"]Creativo provides all the options needed to customize absolutely every aspect of your site.[/vc_product_feature][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2" css=".vc_custom_1498136862829{padding-right: 30px !important;padding-left: 30px !important;}"][vc_row_inner css=".vc_custom_1498145000121{border-top-width: 1px !important;border-right-width: 1px !important;border-bottom-width: 5px !important;border-left-width: 1px !important;padding-top: 40px !important;padding-right: 20px !important;padding-bottom: 20px !important;padding-left: 20px !important;background-color: #ffffff !important;border-left-color: #ededed !important;border-left-style: solid !important;border-right-color: #ededed !important;border-right-style: solid !important;border-top-color: #ededed !important;border-top-style: solid !important;border-bottom-color: #ededed !important;border-bottom-style: solid !important;border-radius: 5px !important;}"][vc_column_inner 0=""][vc_product_feature title="Used by 11,000+ Clients" font_size="18" font_weight="600" bottom_margin="20px" top_margin="30px" title_color="#444444" pf_pos="center" icon_type="entypo" icon_color="#2b2b2b" icon_size="custom" desc_font_size="14px" desc_line_height="26px" desc_color="#3f3f3f" custom_icon_value="40" icon_entypo="entypo-icon entypo-icon-users"]Used and loved by over 11,000+ satisfied customers, Creativo is the best solution for creating websites and blogs without coding anything. Featured on all major design websites, Creativo is The Ultimate WordPress Theme you must purchase.[/vc_product_feature][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/4"][vc_row_inner css=".vc_custom_1498145000121{border-top-width: 1px !important;border-right-width: 1px !important;border-bottom-width: 5px !important;border-left-width: 1px !important;padding-top: 40px !important;padding-right: 20px !important;padding-bottom: 20px !important;padding-left: 20px !important;background-color: #ffffff !important;border-left-color: #ededed !important;border-left-style: solid !important;border-right-color: #ededed !important;border-right-style: solid !important;border-top-color: #ededed !important;border-top-style: solid !important;border-bottom-color: #ededed !important;border-bottom-style: solid !important;border-radius: 5px !important;}"][vc_column_inner 0=""][vc_product_feature title="Visual Composer Included" font_size="18" font_weight="600" bottom_margin="20px" top_margin="30px" title_color="#444444" pf_pos="center" icon_type="openiconic" icon_color="#2b2b2b" icon_size="custom" desc_font_size="14px" desc_line_height="26px" desc_color="#3f3f3f" custom_icon_value="40" icon_openiconic="vc-oi vc-oi-layers"]Create your pages using the Visual Composer elements – more than 100 elements are at your disposal to create the perfect page layout.[/vc_product_feature][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Title +Icon Box 2', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['icons'];
$data['custom_class'] = 'default icon_image_box';
$data['weight']     = 8; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/icon_box_3.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1498224488405{padding-top: 10% !important;padding-bottom: 10% !important;}"][vc_column][vc_custom_heading text="Creating Amazing Websites Should Be Easy" font_container="tag:h2|font_size:30px|text_align:center|color:%23252525|line_height:1.3" use_theme_fonts="yes" el_class="font_weight_300" css=".vc_custom_1498223512684{padding-bottom: 20px !important;}"][vc_custom_heading text="Creativo brings all the tools you need to create beautiful websites
without having to know any coding at all.

" font_container="tag:p|font_size:17px|text_align:center|color:%23474747" use_theme_fonts="yes" css=".vc_custom_1498223831771{padding-bottom: 20px !important;}"][vc_row_inner css=".vc_custom_1498224177619{padding-top: 60px !important;}"][vc_column_inner width="1/4"][vc_product_feature title="Drag & Drop Builder" font_size="20" font_weight="400" line_height="30px" bottom_margin="20px" top_margin="30px" title_color="#0c0c0c" pf_pos="left_above" icon_fontawesome="fa fa-html5" icon_color="#2282d6" icon_size="custom" icon_bg_color="" desc_font_size="14px" desc_line_height="26px" custom_icon_value="50" desc_color="#7a7a7a"]Creativo provides all the right tools to create virtually any type of layout, your only limitation is your imagination.[/vc_product_feature][/vc_column_inner][vc_column_inner width="1/4"][vc_product_feature title="Premium Slider Plugins" font_size="20" font_weight="400" line_height="30px" bottom_margin="20px" top_margin="30px" title_color="#0c0c0c" pf_pos="left_above" icon_fontawesome="fa fa-gitlab" icon_color="#2282d6" icon_size="custom" icon_bg_color="" desc_font_size="14px" desc_line_height="26px" custom_icon_value="50" desc_color="#7a7a7a"]Creativo provides all the right tools to create virtually any type of layout, your only limitation is your imagination.[/vc_product_feature][/vc_column_inner][vc_column_inner width="1/4"][vc_product_feature title="Pixel Perfect Grid" font_size="20" font_weight="400" line_height="30px" bottom_margin="20px" top_margin="30px" title_color="#0c0c0c" pf_pos="left_above" icon_fontawesome="fa fa-th" icon_color="#2282d6" icon_size="custom" icon_bg_color="" desc_font_size="14px" desc_line_height="26px" custom_icon_value="50" desc_color="#7a7a7a"]Creativo provides all the right tools to create virtually any type of layout, your only limitation is your imagination.[/vc_product_feature][/vc_column_inner][vc_column_inner width="1/4"][vc_product_feature title="Advanced Theme Options" font_size="20" font_weight="400" line_height="30px" bottom_margin="20px" top_margin="30px" title_color="#0c0c0c" pf_pos="left_above" icon_fontawesome="fa fa-fire" icon_color="#2282d6" icon_size="custom" icon_bg_color="" desc_font_size="14px" desc_line_height="26px" custom_icon_value="50" desc_color="#7a7a7a"]Creativo provides all the right tools to create virtually any type of layout, your only limitation is your imagination.[/vc_product_feature][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Title +Icon Box 3', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['icons'];
$data['custom_class'] = 'default icon_image_box';
$data['weight']     = 8; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/icon_box_5.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1426540076407{padding-top: 100px !important;}"][vc_column 0=""][vc_separator_2 style="line_symbol" icon_fontawesome="fa fa-heart" color_line="rgba(68,68,68,0.01)" color_symbol="#40d188" padding_bottom="10" symbol_size="small"][ctitle title="Welcome. This is Creativo." color="#444444" background="#ffffff" font_weight="700"][vc_custom_heading text="Ultra responsive & multipurpose theme that allows you to easy create a website of any category." font_container="tag:h2|font_size:20|text_align:center|color:%23444444|line_height:1.5" use_theme_fonts="yes"][/vc_column][/vc_row][vc_row css=".vc_custom_1426540101253{padding-top: 80px !important;padding-bottom: 100px !important;}"][vc_column width="1/3"][vc_product_feature title="RESPONSIVE LAYOUT" title_color="#333333" icon_fontawesome="fa fa-tablet" icon_color="#000000" icon_size="custom" css_animation="left-to-right" animation="none" custom_icon_value="35" desc_color="#999999"]Ultra Responsive layout that will adapt to any screen size.[/vc_product_feature][vc_separator style="blank" padding_top="10" padding_bottom="10"][vc_product_feature title="HTML5 VIDEOS" title_color="#333333" icon_fontawesome="fa fa-html5" icon_color="#000000" icon_size="custom" css_animation="right-to-left" desc_color="#999999" custom_icon_value="35"]Creativo provides support for Native HTML5 Videos that can be added to a Full Background.[/vc_product_feature][vc_separator style="blank" padding_top="10" padding_bottom="10"][vc_product_feature title="INIFINITE COLORS" title_color="#333333" icon_fontawesome="fa fa-pencil" icon_color="#000000" css_animation="bottom-to-top" desc_color="#999999"]Create your own color systems and change everything you want from the Theme Options.[/vc_product_feature][/vc_column][vc_column width="1/3"][vc_product_feature title="MEGAMENU INTEGRATED" title_color="#333333" icon_fontawesome="fa fa-magic" icon_color="#000000" icon_size="custom" css_animation="bottom-to-top" animation="bounce" custom_icon_value="35" desc_color="#999999"]Impress your visitors with the use of the integrated MegaMenu Feature.[/vc_product_feature][vc_separator style="blank" padding_top="10" padding_bottom="10"][vc_product_feature title="PARALLAX BACKGROUNDS" title_color="#333333" icon_fontawesome="fa fa-pagelines" icon_color="#000000" icon_size="custom" css_animation="appear" desc_color="#999999" custom_icon_value="35"]Add style to your pages with Parallax Effect for your background images.[/vc_product_feature][vc_separator style="blank" padding_top="10" padding_bottom="10"][vc_product_feature title="BOXED & WIDE LAYOUTS" title_color="#333333" icon_fontawesome="fa fa-cube" icon_color="#000000" icon_size="custom" css_animation="top-to-bottom" custom_icon_value="35" desc_color="#999999"]Choose between Full Width of Boxed layouts using the Theme Options interface.[/vc_product_feature][/vc_column][vc_column width="1/3"][vc_product_feature title="VISUAL COMPOSER" title_color="#333333" icon_fontawesome="fa fa-sliders" icon_color="#000000" icon_size="custom" css_animation="right-to-left" animation="rubberBand" custom_icon_value="35" desc_color="#999999"]Create perfect websites with the latest version of Visual Composer.[/vc_product_feature][vc_separator style="blank" padding_top="10" padding_bottom="10"][vc_product_feature title="PREMIUM SLIDERS" title_color="#333333" icon_fontawesome="fa fa-pied-piper" icon_color="#000000" icon_size="custom" css_animation="left-to-right" desc_color="#999999" custom_icon_value="35"]Layer Slider and Revolution Slider plugins are both integrated into the Creativo theme.[/vc_product_feature][vc_separator style="blank" padding_top="10" padding_bottom="10"][vc_product_feature title="LIFETIME SUPPORT & UPDATES" title_color="#333333" icon_fontawesome="fa fa-life-ring" icon_color="#000000" icon_size="custom" css_animation="bottom-to-top" desc_color="#999999" custom_icon_value="35"]We are constantly improving Creativo and we will provide support for life.[/vc_product_feature][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Title +Icon Box 4', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['icons'];
$data['custom_class'] = 'business icon_image_box';
$data['weight']     = 8; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/icon_box_7.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row layout="wide" eq_height="yes" content_placement="middle"][vc_column css=".vc_custom_1506000736908{padding-top: 2% !important;padding-right: 5% !important;padding-bottom: 2% !important;padding-left: 5% !important;background-color: #e5fceb !important;}" offset="vc_col-lg-8 vc_col-md-12"][vc_row_inner][vc_column_inner][vc_custom_heading text="Get Started with Creativo in Only 6 Simple Steps
" font_container="tag:h2|font_size:45|text_align:center|color:%2314183c|line_height:50px" google_fonts="font_family:Roboto%20Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic|font_style:300%20light%20regular%3A300%3Anormal" css_animation="fadeInUp" css=".vc_custom_1506001064024{padding-bottom: 30px !important;}"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1506000647304{padding-top: 30px !important;}"][vc_column_inner width="1/3" css=".vc_custom_1506001118934{padding-bottom: 30px !important;}"][vc_product_feature title="Purchase Creativo" font_size="17" font_weight="400" line_height="normal" bottom_margin="10px" title_color="#03072e" icon_fontawesome="fa fa-shopping-basket" icon_color="#ffffff" icon_size="custom" icon_bg_color="#4ee97a" icon_bg_shape="circle" desc_font_size="14px" desc_line_height="24px" css_animation="fadeInUp" desc_color="#939399" custom_icon_value="20"]Purchase the Creativo theme for only $59 - once in a lifetime fee.[/vc_product_feature][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1506001105994{padding-bottom: 30px !important;}"][vc_product_feature title="Upload and Activate" font_size="17" font_weight="400" line_height="normal" bottom_margin="10px" title_color="#03072e" icon_fontawesome="fa fa-check" icon_color="#ffffff" icon_size="custom" icon_bg_color="#4ee97a" icon_bg_shape="circle" desc_font_size="14px" desc_line_height="24px" css_animation="fadeInUp" desc_color="#939399" custom_icon_value="20" delay="125"]Use the WordPress Theme Upload interface to install the theme.[/vc_product_feature][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1506001091876{padding-bottom: 30px !important;}"][vc_product_feature title="Import any Demo" font_size="17" font_weight="400" line_height="normal" bottom_margin="10px" title_color="#03072e" icon_fontawesome="fa fa-sign-out" icon_color="#ffffff" icon_size="custom" icon_bg_color="#4ee97a" icon_bg_shape="circle" desc_font_size="14px" desc_line_height="24px" css_animation="fadeInUp" desc_color="#939399" custom_icon_value="20" delay="250"]Save hours of work by using our One Click Demo Templates.[/vc_product_feature][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/3"][vc_product_feature title="Customize Theme Options" font_size="17" font_weight="400" line_height="normal" bottom_margin="10px" title_color="#03072e" icon_fontawesome="fa fa-cog" icon_color="#ffffff" icon_size="custom" icon_bg_color="#4ee97a" icon_bg_shape="circle" desc_font_size="14px" desc_line_height="24px" css_animation="fadeInUp" desc_color="#939399" custom_icon_value="20"]Use the Theme Options area to modify your site layout easily[/vc_product_feature][/vc_column_inner][vc_column_inner width="1/3"][vc_product_feature title="Create/Edit Your Content" font_size="17" font_weight="400" line_height="normal" bottom_margin="10px" title_color="#03072e" icon_fontawesome="fa fa-pencil-square-o" icon_color="#ffffff" icon_size="custom" icon_bg_color="#4ee97a" icon_bg_shape="circle" desc_font_size="14px" desc_line_height="24px" css_animation="fadeInUp" desc_color="#939399" custom_icon_value="20" delay="125"]Create your own content/layouts or modify the existing ones.[/vc_product_feature][/vc_column_inner][vc_column_inner width="1/3"][vc_product_feature title="Publish Your Site" font_size="17" font_weight="400" line_height="normal" bottom_margin="10px" title_color="#03072e" icon_fontawesome="fa fa-thumbs-o-up" icon_color="#ffffff" icon_size="custom" icon_bg_color="#4ee97a" icon_bg_shape="circle" desc_font_size="14px" desc_line_height="24px" css_animation="fadeInUp" desc_color="#939399" custom_icon_value="20" delay="250"]Your site is now ready to be discovered by millions of visitors.[/vc_product_feature][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css=".vc_custom_1506000764860{padding-top: 15% !important;padding-right: 15% !important;padding-bottom: 15% !important;padding-left: 15% !important;background-color: #03072e !important;}" offset="vc_col-lg-4 vc_col-md-12"][vc_product_feature title="For Small Businesses and Big Corporations" font_size="22" font_weight="400" bottom_margin="20px" title_color="#ffffff" icon_fontawesome="fa fa-check-square-o" icon_color="#2a78e0" desc_font_size="14px" desc_line_height="24px" css_animation="fadeInRight" desc_color="#939399"]Creativo can be used for any type of business, from start-ups to well established business, Creativo is the correct choice for you and your clients.[/vc_product_feature][vc_product_feature title="For Lawyers and Politics" font_size="22" font_weight="300" bottom_margin="20px" title_color="#ffffff" icon_fontawesome="fa fa-check-square-o" icon_color="#2a78e0" desc_font_size="14px" desc_line_height="24px" css_animation="fadeInRight" desc_color="#939399"]Are you a lawyer or a politician? Grow your business and improve the functionality of your site by taking advantage of the tools we integrated in Creativo.[/vc_product_feature][vc_product_feature title="Independents or Teams" font_size="22" font_weight="300" bottom_margin="20px" title_color="#ffffff" icon_fontawesome="fa fa-check-square-o" icon_color="#2a78e0" desc_font_size="14px" desc_line_height="24px" css_animation="fadeInRight" desc_color="#939399"]Make the most of your idea, express your self in your own way. Building a website should not be a hard process, that's why Creativo does all the heavy lifting for you.[/vc_product_feature][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Title +Icon Box 5', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['icons'];
$data['custom_class'] = 'business icon_image_box';
$data['weight']     = 8; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/icon_box_8.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_custom_heading text="Powerful Features You Will Enjoy" font_container="tag:h2|font_size:22|text_align:center|color:%2314183c" use_theme_fonts="yes"][vc_column_text]
<p style="text-align: center;"><span style="color: #939399;">Every element we created inside the Visual Composer is perfectly crafted to fit perfectly any type of device.
We constaly add new elements with each new theme update.</span></p>
[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1484608261212{padding-top: 60px !important;}"][vc_column width="1/3"][vc_product_feature title="Drag &amp; Drop Page Builder" font_size="17" font_weight="400" line_height="30px" bottom_margin="10px" title_color="#03072e" icon="92" icon_fontawesome="fa fa-mouse-pointer" icon_color="#1e74e5" desc_font_size="14px" desc_line_height="24px" css_animation="rotateInUpLeft" desc_color="#939399"]The Visual Composer helps you create amazing page layouts without writing any code.[/vc_product_feature][/vc_column][vc_column width="1/3"][vc_product_feature title="Ultra Responsive Design" font_size="17" font_weight="400" line_height="30px" bottom_margin="10px" title_color="#03072e" icon="94" icon_fontawesome="fa fa-television" icon_color="#1e74e5" desc_font_size="14px" desc_line_height="24px" css_animation="rotateInUpLeft" desc_color="#939399" delay="200"]Creativo will look amazing on any device, Smartphones and Tablets included.[/vc_product_feature][/vc_column][vc_column width="1/3"][vc_product_feature title="Premium Sliders Plugins" font_size="17" font_weight="400" line_height="30px" bottom_margin="10px" title_color="#03072e" icon="96" icon_type="openiconic" icon_color="#1e74e5" desc_font_size="14px" desc_line_height="24px" css_animation="rotateInUpLeft" desc_color="#939399" icon_openiconic="vc-oi vc-oi-layers" delay="400"]Slider Revolution and Layer Slider are bundled with Creativo - save an extra <strong>$50</strong>[/vc_product_feature][/vc_column][/vc_row][vc_row css=".vc_custom_1484608620963{padding-top: 30px !important;}"][vc_column width="1/3"][vc_product_feature title="Lifetime Support &amp; Updates" font_size="17" font_weight="400" line_height="30px" bottom_margin="10px" title_color="#03072e" icon="95" icon_fontawesome="fa fa-cog" icon_color="#1e74e5" desc_font_size="14px" desc_line_height="24px" css_animation="rotateInDownLeft" desc_color="#939399"]We provide 5 Star Support for all our clients. Anything you need we can provide.[/vc_product_feature][/vc_column][vc_column width="1/3"][vc_product_feature title="One Click Setup" font_size="17" font_weight="400" line_height="30px" bottom_margin="10px" title_color="#03072e" icon="90" icon_fontawesome="fa fa-cog" icon_color="#1e74e5" desc_font_size="14px" desc_line_height="24px" css_animation="rotateInDownLeft" desc_color="#939399" delay="200"]With just One Click you can import any of the available Templates on your site.[/vc_product_feature][/vc_column][vc_column width="1/3"][vc_product_feature title="Integrated Shopping System" font_size="17" font_weight="400" line_height="30px" bottom_margin="10px" title_color="#03072e" icon="91" icon_fontawesome="fa fa-cog" icon_color="#1e74e5" desc_font_size="14px" desc_line_height="24px" css_animation="rotateInDownLeft" desc_color="#939399" delay="400"]Creativo is fully compatible with the best shopping cart system: WooCommerce[/vc_product_feature][/vc_column][/vc_row][vc_row css=".vc_custom_1484663990501{padding-top: 30px !important;}"][vc_column width="1/3"][vc_product_feature title="Powerful Theme Options" font_size="17" font_weight="400" line_height="30px" bottom_margin="10px" title_color="#03072e" icon="97" icon_fontawesome="fa fa-cog" icon_color="#1e74e5" desc_font_size="14px" desc_line_height="24px" css_animation="rotateInDownLeft" desc_color="#939399"]The Theme Options allows you to change everything from design to site functionality[/vc_product_feature][/vc_column][vc_column width="1/3"][vc_product_feature title="Custom Typography" font_size="17" font_weight="400" line_height="30px" bottom_margin="10px" title_color="#03072e" icon="98" icon_fontawesome="fa fa-cog" icon_color="#1e74e5" desc_font_size="14px" desc_line_height="24px" css_animation="rotateInDownLeft" desc_color="#939399" delay="200"]Using the Typograhpy settings you can enhance the design of your site in no time.[/vc_product_feature][/vc_column][vc_column width="1/3"][vc_product_feature title="HTML5 &amp; Self Hosted Videos" font_size="17" font_weight="400" line_height="30px" bottom_margin="10px" title_color="#03072e" icon="99" icon_fontawesome="fa fa-cog" icon_color="#1e74e5" desc_font_size="14px" desc_line_height="24px" css_animation="rotateInDownLeft" desc_color="#939399" delay="400"]Add HTML5 Videos or Youtube Videos as Backgrounds for different sections on your site.[/vc_product_feature][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );


$data = array();
$data['name'] = __( 'Title +Icon Box 6', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['icons'];
$data['custom_class'] = 'business icon_image_box';
$data['weight']     = 8; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/icon_box_9.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1486475744156{padding-top: 10% !important;}" section_id="products"][vc_column][vc_custom_heading text="Our Products" font_container="tag:h2|font_size:50ox|text_align:center|color:%2314183c|line_height:60px" use_theme_fonts="yes"][vc_custom_heading text="Using the Icon/Image Box element, the Button element and a Drop Shadow effect,
we create a nice way to display some of your best products." font_container="tag:h2|font_size:17px|text_align:center|color:%23abacb2|line_height:26px" use_theme_fonts="yes"][/vc_column][/vc_row][vc_row css=".vc_custom_1486475593791{padding-top: 60px !important;padding-bottom: 5% !important;}"][vc_column width="1/4" el_class="shadow_on_hover" css=".vc_custom_1486475222287{padding-top: 30px !important;padding-right: 50px !important;padding-bottom: 30px !important;padding-left: 50px !important;}"][vc_product_feature title="Sizzle" font_size="17" font_weight="400" line_height="26px" bottom_margin="10px" top_margin="40px" title_color="#03072e" icon="289" pf_pos="center" desc_line_height="24px" css_animation="slideInDown" desc_color="#939399"]You can add your own product description here. Edit the element with your own text.[/vc_product_feature][vc_button title="Launch Product" shape="rounded" color="custom" custom_font_size="13px" custom_font_weight="400" custom_color="#abacb2" custom_border_color="#abacb2" custom_color_hover="#f33763" custom_border_color_hover="#f33763" href="#"][/vc_column][vc_column width="1/4" css=".vc_custom_1486475526903{padding-top: 30px !important;padding-right: 50px !important;padding-bottom: 30px !important;padding-left: 50px !important;}" el_class="shadow_on_hover"][vc_product_feature title="Cloud Flare" font_size="17" font_weight="400" line_height="26px" bottom_margin="10px" top_margin="40px" title_color="#03072e" icon="286" pf_pos="center" desc_line_height="24px" css_animation="slideInUp" desc_color="#939399" delay="200"]Create perfect websites with the latest version of Visual Composer and some.[/vc_product_feature][vc_button title="Launch Product" shape="rounded" color="custom" custom_font_size="13px" custom_font_weight="400" custom_color="#abacb2" custom_border_color="#abacb2" custom_color_hover="#f33763" custom_border_color_hover="#f33763" href="#"][/vc_column][vc_column width="1/4" css=".vc_custom_1486475535246{padding-top: 30px !important;padding-right: 50px !important;padding-bottom: 30px !important;padding-left: 50px !important;}" el_class="shadow_on_hover"][vc_product_feature title="Adobe" font_size="17" font_weight="400" line_height="26px" bottom_margin="10px" top_margin="40px" title_color="#03072e" icon="290" pf_pos="center" desc_line_height="24px" css_animation="slideInDown" desc_color="#939399"]Create perfect websites with the latest version of Visual Composer and some.[/vc_product_feature][vc_button title="Launch Product" shape="rounded" color="custom" custom_font_size="13px" custom_font_weight="400" custom_color="#abacb2" custom_border_color="#abacb2" custom_color_hover="#f33763" custom_border_color_hover="#f33763" href="#"][/vc_column][vc_column width="1/4" css=".vc_custom_1486475543250{padding-top: 30px !important;padding-right: 50px !important;padding-bottom: 30px !important;padding-left: 50px !important;}" el_class="shadow_on_hover"][vc_product_feature title="Sizzle" font_size="17" font_weight="400" line_height="26px" bottom_margin="10px" top_margin="40px" title_color="#03072e" icon="291" pf_pos="center" desc_line_height="24px" css_animation="slideInUp" desc_color="#939399"]Create perfect websites with the latest version of Visual Composer and some.[/vc_product_feature][vc_button title="Launch Product" shape="rounded" color="custom" custom_font_size="13px" custom_font_weight="400" custom_color="#abacb2" custom_border_color="#abacb2" custom_color_hover="#f33763" custom_border_color_hover="#f33763" href="#"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Title +Icon Box 7', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['icons'];
$data['custom_class'] = 'business icon_image_box';
$data['weight']     = 8; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/icon_box_10.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row fullscreen="yes" columns_placement="bottom" css=".vc_custom_1490020112280{background-image: url(https://rockythemes.com/creativo_wp/wp-content/uploads/2017/02/values-bg.jpg?id=253) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" section_id="values"][vc_column width="1/4"][/vc_column][vc_column width="1/2" css=".vc_custom_1486480169262{padding: 10% !important;background-color: #939399 !important;}"][vc_custom_heading text="Values" font_container="tag:h2|font_size:50ox|text_align:left|color:%23ffffff|line_height:60px" use_theme_fonts="yes" css=".vc_custom_1486480418862{padding-bottom: 20px !important;}"][vc_product_feature title="Superb CSS3 Animation " font_size="22" font_weight="400" bottom_margin="10px" title_color="#ffffff" icon="254" css_animation="bounceInRight" desc_color="#d0d1d9"]You can animate any element you want using the Animation box. Each animation is going to render smoothly for every user, regardless of the devices being used.[/vc_product_feature][vc_separator style="blank" padding_top="20" padding_bottom="20"][vc_product_feature title="Narrated Video Tutorials" font_size="22" font_weight="400" bottom_margin="10px" title_color="#ffffff" icon="255" css_animation="bounceInRight" desc_color="#d0d1d9"]Learn how to use the Creativo theme properly by watching our High Definition Video Tutorials library. Each tutorial will teach you something new.[/vc_product_feature][vc_separator style="blank" padding_top="20" padding_bottom="20"][vc_product_feature title="Think Outside the Box" font_size="22" font_weight="400" bottom_margin="10px" title_color="#ffffff" icon="256" css_animation="bounceInRight" desc_color="#d0d1d9"]Every site is unique and every visitor has its own expectation. Improve and impress your user's experience by using the Creativo theme.[/vc_product_feature][/vc_column][vc_column width="1/4"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Title +Icon Box 8', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['icons'];
$data['custom_class'] = 'lifecoach icon_image_box';
$data['weight']     = 8; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/icon_box_12.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1496353570858{padding-top: 10% !important;padding-bottom: 5% !important;}"][vc_column 0=""][vc_custom_heading text="WE HAVE EVERYTHING" font_container="tag:h3|font_size:54px|text_align:center|color:%233f3b51" use_theme_fonts="yes" css=".vc_custom_1496353541303{margin-bottom: 0px !important;padding-bottom: 0px !important;}"][vc_custom_heading text="to make you happy
" font_container="tag:h3|font_size:54px|text_align:center|color:%23f8ac9a|line_height:1" google_fonts="font_family:Yellowtail%3Aregular|font_style:400%20regular%3A400%3Anormal"][/vc_column][/vc_row][vc_row css=".vc_custom_1496354216254{padding-bottom: 10% !important;}"][vc_column width="1/4"][vc_product_feature title="MENTAL RELAXATION" line_height="60px" top_margin="10px" title_color="#3f3b51" icon="21" pf_pos="center" desc_line_height="20px" css_animation="slideInUp" desc_color="#a3a1a8"]Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus.[/vc_product_feature][/vc_column][vc_column width="1/4"][vc_product_feature title="WEIGHT LOSS" line_height="60px" top_margin="10px" title_color="#3f3b51" icon="24" pf_pos="center" desc_line_height="20px" css_animation="slideInUp" desc_color="#a3a1a8" delay="200"]Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus.[/vc_product_feature][/vc_column][vc_column width="1/4"][vc_product_feature title="HEALTHY NUTRITION" line_height="60px" top_margin="10px" title_color="#3f3b51" icon="22" pf_pos="center" desc_line_height="20px" css_animation="slideInUp" desc_color="#a3a1a8" delay="400"]Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus.[/vc_product_feature][/vc_column][vc_column width="1/4"][vc_product_feature title="RELATIONSHIP HARMONY" line_height="60px" top_margin="10px" title_color="#3f3b51" icon="23" pf_pos="center" desc_line_height="20px" css_animation="slideInUp" desc_color="#a3a1a8" delay="600"]Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus.[/vc_product_feature][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Title +Icon Box 9', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['icons'];
$data['custom_class'] = 'lifecoach icon_image_box';
$data['weight']     = 8; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/icon_box_13.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1496496754887{padding-top: 10% !important;padding-bottom: 40px !important;}"][vc_column][vc_custom_heading text="additional services" font_container="tag:h2|font_size:54|text_align:center|color:%23f8ac9a" google_fonts="font_family:Yellowtail%3Aregular|font_style:400%20regular%3A400%3Anormal"][/vc_column][/vc_row][vc_row 0=""][vc_column width="1/2" css=".vc_custom_1496497231778{border-right-width: 1px !important;border-bottom-width: 1px !important;padding-top: 10% !important;padding-right: 15% !important;padding-bottom: 10% !important;padding-left: 15% !important;border-right-color: #edebf5 !important;border-right-style: solid !important;border-bottom-color: #edebf5 !important;border-bottom-style: solid !important;}"][vc_product_feature title="PRIVATE CLASSES" bottom_margin="15px" top_margin="30px" title_color="#444444" icon="106" pf_pos="center" css_animation="rotateInDownLeft" desc_color="#a3a1a8"]Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus.[/vc_product_feature][/vc_column][vc_column width="1/2" css=".vc_custom_1496497290185{border-bottom-width: 1px !important;padding-top: 10% !important;padding-right: 15% !important;padding-bottom: 10% !important;padding-left: 15% !important;border-bottom-color: #edebf5 !important;border-bottom-style: solid !important;}"][vc_product_feature title="VIDEO LESSONS" bottom_margin="15px" top_margin="30px" title_color="#444444" icon="114" pf_pos="center" css_animation="rotateInUpLeft" desc_color="#a3a1a8"]Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus.[/vc_product_feature][/vc_column][/vc_row][vc_row css=".vc_custom_1496497374404{padding-bottom: 10% !important;}"][vc_column width="1/2" css=".vc_custom_1496497351490{border-right-width: 1px !important;padding-top: 10% !important;padding-right: 15% !important;padding-bottom: 10% !important;padding-left: 15% !important;border-right-color: #edebf5 !important;border-right-style: solid !important;}"][vc_product_feature title="WORKOUTS" bottom_margin="15px" top_margin="30px" title_color="#444444" icon="108" pf_pos="center" css_animation="rotateInUpLeft" desc_color="#a3a1a8"]Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus.[/vc_product_feature][/vc_column][vc_column width="1/2" css=".vc_custom_1496497360459{padding-top: 10% !important;padding-right: 15% !important;padding-bottom: 10% !important;padding-left: 15% !important;}"][vc_product_feature title="TOTAL RELAXATION" bottom_margin="15px" top_margin="30px" title_color="#444444" icon="109" pf_pos="center" css_animation="rotateInDownLeft" desc_color="#a3a1a8"]Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus.[/vc_product_feature][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Parallax Image +Icon Box', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['icons'];
$data['custom_class'] = 'main icon_image_box onepage';
$data['weight']     = 8; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/icon_box_14.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row parallax="yes" css=".vc_custom_1499522399625{background-image: url(https://rockythemes.com/creativo-one-page/wp-content/uploads/2015/04/girl-typing.jpg?id=3195) !important;}" section_id="services"][vc_column css=".vc_custom_1428882413643{padding-top: 80px !important;padding-bottom: 80px !important;}"][vc_custom_heading text="SERVICES" font_container="tag:h2|font_size:24|text_align:center|color:%23333333|line_height:1.5" use_theme_fonts="yes" el_class="font_weight_600"][vc_separator_2 color_line="#333333" padding_top="20" padding_bottom="25"][vc_custom_heading text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent metus magna, malesuada porta elementum vitae, hendrerit sed nunec ut placerat odio." font_container="tag:p|font_size:20|text_align:center|color:%23333333|line_height:1.5" use_theme_fonts="yes" el_class="font_weight_300"][vc_row_inner css=".vc_custom_1428616072089{padding-top: 20px !important;}"][vc_column_inner width="1/3"][vc_product_feature title="PERFECT DESIGN" line_height="50px" title_color="#444444" pf_pos="center" icon_fontawesome="fa fa-diamond" icon_color="#333333"]Ultra Responsive Pixel Perfect Design, that will adapt to any screen size.[/vc_product_feature][vc_separator style="blank" padding_top="10" padding_bottom="10"][vc_product_feature title="PARALLAX BACKGROUNDS" line_height="50px" title_color="#444444" pf_pos="center" icon_fontawesome="fa fa-desktop" icon_color="#333333"]Add style to your pages with Parallax Effect for your background images.[/vc_product_feature][/vc_column_inner][vc_column_inner width="1/3"][vc_product_feature title="VISUAL COMPOSER" line_height="50px" title_color="#444444" pf_pos="center" icon_fontawesome="fa fa-gitlab" icon_color="#333333"]Create perfect websites with the latest version of Visual Composer.[/vc_product_feature][vc_separator style="blank" padding_top="10" padding_bottom="10"][vc_product_feature title="PREMIUM SLIDERS" line_height="50px" title_color="#444444" pf_pos="center" icon_fontawesome="fa fa-pied-piper" icon_color="#333333"]Layer Slider and Revolution Slider plugins are both integrated into the Creativo theme.[/vc_product_feature][/vc_column_inner][vc_column_inner width="1/3"][vc_product_feature title="HTML5 VIDEOS" line_height="50px" title_color="#444444" pf_pos="center" icon_fontawesome="fa fa-html5" icon_color="#333333"]Creativo provides support for Native HTML5 Videos that can be added to a Full Background.[/vc_product_feature][vc_separator style="blank" padding_top="10" padding_bottom="10"][vc_product_feature title="LIFETIME SUPPORT &amp; UPDATES" line_height="50px" title_color="#444444" pf_pos="center" icon_fontawesome="fa fa-life-ring" icon_color="#333333"]We are constantly improving Creativo and we will provide support for life.[/vc_product_feature][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Title +Icon Box 10', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content icon_image_box innovate';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/icon_box_15.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1492702641663{padding-top: 10% !important;}" section_id="performance"][vc_column 0=""][vc_custom_heading text="NOT JUST A LAMP, THE PERFECT LAMP" font_container="tag:h2|font_size:18px|text_align:center|color:%2300031a" use_theme_fonts="yes" el_class="font_weight_600"][vc_column_text 0=""]
<h4 style="text-align: center;">The Picia Lamp was designed with confort and functionality in mind.
See below some of the great functionality we have discovered</h4>
[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1493029536144{padding-top: 90px !important;}"][vc_column width="1/3"][vc_product_feature title="Minimal Lamp Design" font_weight="600" line_height="1" bottom_margin="8px" title_color="#1e1e1e" icon="32" icon_size="custom" desc_font_size="14px" desc_line_height="24px" custom_icon_value="50" desc_color="#9a9a9f"]Enrico Zanolla created the perfect minimal lamp for home[/vc_product_feature][/vc_column][vc_column width="1/3"][vc_product_feature title="High Quality Materials" font_weight="600" line_height="1" bottom_margin="8px" title_color="#1e1e1e" icon="38" icon_size="custom" desc_font_size="14px" desc_line_height="24px" custom_icon_value="50" desc_color="#9a9a9f"]Picia uses high quality materials to make sure it lasts for a life time[/vc_product_feature][/vc_column][vc_column width="1/3"][vc_product_feature title="Touch Sensor Ready" font_weight="600" line_height="1" bottom_margin="8px" title_color="#1e1e1e" icon="35" icon_size="custom" desc_font_size="14px" desc_line_height="24px" custom_icon_value="50" desc_color="#9a9a9f"]Easily touch the Picia lamp to turn on the light[/vc_product_feature][/vc_column][/vc_row][vc_row css=".vc_custom_1492705069293{padding-top: 40px !important;padding-bottom: 30px !important;}"][vc_column width="1/3"][vc_product_feature title="E27 Socket Compatibility" font_weight="600" line_height="1" bottom_margin="8px" title_color="#1e1e1e" icon="37" icon_size="custom" desc_font_size="14px" desc_line_height="24px" custom_icon_value="50" desc_color="#9a9a9f"]Picia Lamp is compatible with the most common bulb socket: E27[/vc_product_feature][/vc_column][vc_column width="1/3"][vc_product_feature title="Environmental Friendly " font_weight="600" line_height="1" bottom_margin="8px" title_color="#1e1e1e" icon="31" icon_size="custom" desc_font_size="14px" desc_line_height="24px" custom_icon_value="50" desc_color="#9a9a9f"]The Picia Lamp is made entirely from fully recycled materials[/vc_product_feature][/vc_column][vc_column width="1/3"][vc_product_feature title="Great Value for Collectors" font_weight="600" line_height="1" bottom_margin="8px" title_color="#1e1e1e" icon="39" icon_size="custom" desc_font_size="14px" desc_line_height="24px" custom_icon_value="50" desc_color="#9a9a9f"]Any art collector should have at least one Picia Lamp in their home[/vc_product_feature][/vc_column][/vc_row][vc_row css=".vc_custom_1492773557034{padding-bottom: 10% !important;}"][vc_column 0=""][vc_button title="Pre-Order One Now" shape="rounded" size="large" color="custom" custom_font_size="13px" custom_line_height="22px" custom_letter_spacing="0px" custom_color="#e53935" custom_border_color="#e53935"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Animated Icon Boxes', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content icon_image_box agency';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/icon_box_16.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1504990627812{padding-top: 10% !important;padding-right: 10% !important;padding-bottom: 0px !important;padding-left: 10% !important;}"][vc_column width="1/3"][vc_product_feature title="AWESOME DESIGN" font_size="16" bottom_margin="15px" top_margin="20px" title_color="#444444" pf_pos="center" icon_type="linecons" icon_color="#f7f7f7" icon_size="big" icon_bg_color="#5bc98c" icon_bg_shape="rounded" css_animation="bottom-to-top" icon_linecons="vc_li vc_li-bulb"]This is the Product Feature element. Simply edit this element and change everything you want: icons, colors, text, etc.[/vc_product_feature][/vc_column][vc_column width="1/3"][vc_product_feature title="VISUAL COMPOSER" font_size="16" bottom_margin="15px" top_margin="20px" title_color="#444444" pf_pos="center" icon_type="linecons" icon_color="#ffffff" icon_size="big" icon_bg_color="#5bc98c" icon_bg_shape="rounded" css_animation="bottom-to-top" icon_linecons="vc_li vc_li-lab" delay="300"]This is the Product Feature element. Simply edit this element and change everything you want: icons, colors, text, etc.[/vc_product_feature][/vc_column][vc_column width="1/3"][vc_product_feature title="INCREDIBLE SUPPORT" font_size="16" bottom_margin="15px" top_margin="20px" title_color="#444444" pf_pos="center" icon_type="linecons" icon_color="#ffffff" icon_size="big" icon_bg_color="#5bc98c" icon_bg_shape="rounded" css_animation="bottom-to-top" icon_linecons="vc_li vc_li-study" delay="600"]This is the Product Feature element. Simply edit this element and change everything you want: icons, colors, text, etc.[/vc_product_feature][/vc_column][/vc_row][vc_row css=".vc_custom_1504990646949{padding-top: 5% !important;padding-right: 10% !important;padding-bottom: 10% !important;padding-left: 10% !important;}"][vc_column width="1/3"][vc_product_feature title="EASY THEME OPTIONS" font_size="16" bottom_margin="15px" top_margin="20px" title_color="#444444" pf_pos="center" icon_type="linecons" icon_color="#ffffff" icon_size="big" icon_bg_color="#5bc98c" icon_bg_shape="rounded" css_animation="bottom-to-top" icon_linecons="vc_li vc_li-params"]This is the Product Feature element. Simply edit this element and change everything you want: icons, colors, text, etc.[/vc_product_feature][/vc_column][vc_column width="1/3"][vc_product_feature title="FAST CUSTOMIZATION" font_size="16" bottom_margin="15px" top_margin="20px" title_color="#444444" pf_pos="center" icon_type="linecons" icon_color="#ffffff" icon_size="big" icon_bg_color="#5bc98c" icon_bg_shape="rounded" css_animation="bottom-to-top" icon_linecons="vc_li vc_li-fire" delay="300"]This is the Product Feature element. Simply edit this element and change everything you want: icons, colors, text, etc.[/vc_product_feature][/vc_column][vc_column width="1/3"][vc_product_feature title="ONE CLICK SETUP" font_size="16" bottom_margin="15px" top_margin="20px" title_color="#444444" pf_pos="center" icon_type="linecons" icon_color="#ffffff" icon_size="big" icon_bg_color="#5bc98c" icon_bg_shape="rounded" css_animation="bottom-to-top" icon_linecons="vc_li vc_li-like" delay="600"]This is the Product Feature element. Simply edit this element and change everything you want: icons, colors, text, etc.[/vc_product_feature][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );



/* END Icon/Image Box */
/* ================================================== */


/* Content */
/* ================================================== */

$data = array();
$data['name'] = __( 'Title +Image', 'js_composer' );
$data['cat_display_name'] = 'content';
$data['custom_class'] = 'content';
$data['weight']     = 5; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/content_image.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row parallax="yes" css=".vc_custom_1484827841362{padding-top: 100px !important;padding-bottom: 0px !important;background-image: url(https://rockythemes.com/creativo/wp-content/uploads/2015/03/bg-mountain-big.jpg?id=3259) !important;}" img_link_large=""][vc_column 0=""][vc_separator_2 style="line_symbol" icon_fontawesome="fa fa-leaf" color_line="rgba(68,68,68,0.01)" color_symbol="#ffffff" padding_bottom="10"][ctitle color="#ffffff" background="rgba(255,255,255,0.01)" font_weight="700" separator_color="#4f4f4f"][vc_custom_heading text="Built with your needs in mind and trusted by over 11,000+ users, Creativo is the perfect solution for your business. " font_container="tag:div|font_size:18|text_align:center|color:%23e8e8e8|line_height:1.5" use_theme_fonts="yes"][vc_separator style="blank" padding_top="30" padding_bottom="30"][vc_column_text css_animation="bottom-to-top"]<img class="aligncenter size-full wp-image-3260" src="https://rockythemes.com/creativo/wp-content/uploads/2015/03/devices.png" alt="devices" width="968" height="359" />[/vc_column_text][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( '3 Columns Text', 'js_composer' );
$data['cat_display_name'] = 'content';
$data['custom_class'] = 'content default';
$data['weight']     = 5; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/content_text.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row layout="stretch_row_content_no_spaces"][vc_column width="1/3" css=".vc_custom_1426450995450{padding: 60px !important;background-color: #5bc98c !important;}"][vc_icon icon_fontawesome="fa fa-gitlab" color="white" size="xl" align="center" css_animation="left-to-right"][vc_separator_2 color_line="#ffffff" padding_top="20" padding_bottom="20"][vc_separator style="blank" color="#ffffff" padding_top="5" padding_bottom="5"][vc_column_text 0=""]
<p style="text-align: center;"><span style="color: #ffffff;">Take full control of the power Creativo has to offer with our new exciting page builder. You’ll be grinning in delight when you see just how easy it is to create stunning layouts with little effort.</span></p>
[/vc_column_text][vc_separator style="blank" color="#ffffff" padding_top="10" padding_bottom="10"][vc_button2 title="Discover Creativo" align="center" style="square_outlined" color="white"][/vc_column][vc_column width="1/3" css=".vc_custom_1426450985960{padding: 60px !important;background-color: #5091b2 !important;}"][vc_icon icon_fontawesome="fa fa-microphone" color="white" size="xl" align="center" css_animation="appear"][vc_separator_2 color_line="#ffffff" padding_top="20" padding_bottom="20"][vc_separator style="blank" color="#ffffff" padding_top="5" padding_bottom="5"][vc_column_text 0=""]
<p style="text-align: center;"><span style="color: #ffffff;">Creativo is packing more than 70 visual elements that can be used to create the perfect website for you and your clients. From blog post, portfolio showcase, to Team Memeber elements, Creativo has everything you need.</span></p>
[/vc_column_text][vc_separator style="blank" color="#ffffff" padding_top="10" padding_bottom="10"][vc_button2 title="Discover Creativo" align="center" style="square_outlined" color="white"][/vc_column][vc_column width="1/3" css=".vc_custom_1426450972094{padding: 60px !important;background-color: #6e56bf !important;}"][vc_icon icon_fontawesome="fa fa-lightbulb-o" color="white" size="xl" align="center" css_animation="right-to-left"][vc_separator_2 color_line="#ffffff" padding_top="20" padding_bottom="20"][vc_separator style="blank" color="#ffffff" padding_top="5" padding_bottom="5"][vc_column_text 0=""]
<p style="text-align: center;"><span style="color: #ffffff;">You don't need to be a programmer to create amazing websites. Now you can use our Creativo theme and it's best Visual Composer plugin to date to create the ultimate WordPress site.</span></p>
[/vc_column_text][vc_separator style="blank" color="#ffffff" padding_top="10" padding_bottom="10"][vc_button2 title="Discover Creativo" align="center" style="square_outlined" color="white"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Images +Text', 'js_composer' );
$data['cat_display_name'] = 'content';
$data['custom_class'] = 'content default';
$data['weight']     = 5; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/image_text3.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1498478698030{padding-top: 10% !important;padding-bottom: 10% !important;}"][vc_column width="1/4"][vc_single_image image="3651" img_size="" alignment="center"][vc_column_text css=".vc_custom_1498479562882{padding-top: 20px !important;}"]
<h4>For <strong>Bloggers</strong></h4>
With Creativo you can build any type of website you want, no coding needed.[/vc_column_text][/vc_column][vc_column width="1/4"][vc_single_image image="3650" img_size="" alignment="center"][vc_column_text css=".vc_custom_1498479590822{padding-top: 20px !important;}"]
<h4>For <strong>Agencies</strong></h4>
With Creativo you can build any type of website you want, no coding needed.[/vc_column_text][/vc_column][vc_column width="1/4"][vc_single_image image="3649" img_size="" alignment="center"][vc_column_text css=".vc_custom_1498479607128{padding-top: 20px !important;}"]
<h4>For <strong>Start-ups</strong></h4>
With Creativo you can build any type of website you want, no coding needed.[/vc_column_text][/vc_column][vc_column width="1/4"][vc_single_image image="3652" img_size="" alignment="center"][vc_column_text css=".vc_custom_1498479634228{padding-top: 20px !important;}"]
<h4>For <strong>Freelancers</strong></h4>
With Creativo you can build any type of website you want, no coding needed.[/vc_column_text][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );


$data = array();
$data['name'] = __( 'Text +Image +Text', 'js_composer' );
$data['cat_display_name'] = 'content';
$data['custom_class'] = 'content default';
$data['weight']     = 5; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/text_image_text.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row eq_height="yes" content_placement="middle" css=".vc_custom_1498139375313{border-top-width: 1px !important;padding-top: 10% !important;padding-bottom: 10% !important;background-color: #fafafa !important;border-top-color: #ededed !important;border-top-style: solid !important;}"][vc_column width="1/4"][vc_custom_heading text="Inspiration Process" font_container="tag:h2|font_size:30px|text_align:left|color:%23252525|line_height:1.3" use_theme_fonts="yes" el_class="font_weight_300" css=".vc_custom_1498139162380{padding-bottom: 20px !important;}"][vc_column_text 0=""]Creativo was created with the user needs in mind - starting users will have no difficulties into create beautiful websites without writing a single line of code.

From Design to Development, everything is done with simple mouse clicks.[/vc_column_text][/vc_column][vc_column width="1/2"][vc_single_image img_size="full" style="vc_box_border" border_color="white" css=".vc_custom_1498142123962{padding-top: 30px !important;padding-right: 10% !important;padding-bottom: 30px !important;padding-left: 10% !important;}"][/vc_column][vc_column width="1/4"][vc_custom_heading text="Flawless Design" font_container="tag:h2|font_size:30px|text_align:left|color:%23252525|line_height:1.3" use_theme_fonts="yes" el_class="font_weight_300" css=".vc_custom_1498139469685{padding-bottom: 20px !important;}"][vc_column_text 0=""]Creativo was created with the user needs in mind - starting users will have no difficulties into create beautiful websites without writing a single line of code.

From Design to Development, everything is done with simple mouse clicks.[/vc_column_text][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Image +Text', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content default';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/image_text4.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1499341901811{padding-top: 10% !important;padding-bottom: 10% !important;}"][vc_column width="1/2" css=".vc_custom_1426439513488{padding-right: 0px !important;padding-left: 0px !important;}"][vc_single_image image="3684" img_size="full" alignment="center"][/vc_column][vc_column width="1/2" css=".vc_custom_1426439542323{padding-right: 40px !important;padding-left: 40px !important;}"][vc_custom_heading text="EVEN MORE FEATURES? YES SIR!" font_container="tag:h2|font_size:30|text_align:left|color:%233f3f3f" use_theme_fonts="yes"][vc_custom_heading text="Only the best features in one awesome theme." font_container="tag:p|font_size:18|text_align:left|color:%234c4c4c|line_height:1.5" use_theme_fonts="yes"][vc_separator_2 color_line="#444444" separator_position="left_sep" padding_top="10" padding_bottom="40"][vc_product_feature title="BEST FONT ICONS INTEGRATED" title_color="#444444" icon_fontawesome="fa fa-rocket" icon_color="#6ed140" css_animation="right-to-left"]Create special pages using the Font Icons we integrated into the Creativo theme and the Visual Composer: FontAwesome, Open Iconic, Typicons, Entypo, Linecons.[/vc_product_feature][vc_separator style="blank" padding_top="10" padding_bottom="10"][vc_product_feature title="SUPERB CSS3 ANIMATIONS" title_color="#444444" icon_fontawesome="fa fa-eye" icon_color="#4296d6" css_animation="right-to-left"]Impress your visitors with eye catching CSS3 Animations. It's really easy and fun to use![/vc_product_feature][vc_separator style="blank" padding_top="10" padding_bottom="10"][vc_product_feature title="ULTRA RESPONSIVE DESIGN" title_color="#444444" icon_fontawesome="fa fa-star" icon_color="#d14a40" css_animation="right-to-left"]Creativo looks amazing on all your HD Devices, but don't take our word for it: test the theme on any device you want.[/vc_product_feature][vc_separator style="blank" color="#e2e2e2" padding_top="5" padding_bottom="5"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Text + Image', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content business';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/image_text_6.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row eq_height="yes" css=".vc_custom_1486126096754{padding-top: 15% !important;}"][vc_column css_animation="fadeInLeft" width="1/2"][vc_custom_heading text="Create powefull websites without any coding knowledge at all" font_container="tag:h2|font_size:40px|text_align:left|color:%2314183c|line_height:50px" use_theme_fonts="yes" css=".vc_custom_1486125092556{padding-bottom: 40px !important;}"][vc_custom_heading text="The easy to use Visual Composer allows you to create seamless designs. The Theme Options interface provide just the correct settings to change the design and functionality of the theme based on your needs." font_container="tag:p|font_size:17px|text_align:left|color:%23abacb2|line_height:24px" use_theme_fonts="yes" css=".vc_custom_1486125260073{padding-bottom: 40px !important;}"][vc_button title="START 30-DAYS FREE TRIAL" shape="rounded" size="large" color="custom" custom_font_size="15PX" custom_font_weight="400" custom_letter_spacing="0px" custom_color="#2b7ce6" custom_border_color="#2b7ce6" custom_color_hover="#2867d3" custom_border_color_hover="#2867d3" align="left"][/vc_column][vc_column css_animation="fadeInRight" width="1/2" css=".vc_custom_1490104794971{padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;}"][vc_single_image  img_size="full" alignment="right"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Image +Text 2', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content default';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/image_text.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row eq_height="yes" content_placement="middle" css=".vc_custom_1498219792424{padding-bottom: 10% !important;}"][vc_column width="1/2"][vc_single_image image="3554" img_size="full" alignment="center" style="vc_box_border" css=".vc_custom_1498219880102{padding-top: 30px !important;padding-bottom: 30px !important;}"][/vc_column][vc_column width="1/2"][vc_custom_heading text="<strong>Flawless</strong> Design" font_container="tag:h2|font_size:30px|text_align:left|color:%23252525|line_height:1.3" use_theme_fonts="yes" el_class="font_weight_300" css=".vc_custom_1498139469685{padding-bottom: 20px !important;}"][vc_column_text]Creativo was created with the user needs in mind - starting users will have no difficulties into create beautiful websites without writing a single line of code.

From Design to Development, everything is done with simple mouse clicks - it's no wonder Creativo is being used by over 11,000+ satisfied cusomers.[/vc_column_text][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( '2 Columns Image +Text 3', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content business';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/image_text5.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1486473652983{padding-top: 80px !important;}"][vc_column width="1/2"][vc_single_image img_size="full" css_animation="slideInLeft"][/vc_column][vc_column width="1/2"][vc_single_image img_size="full" css_animation="slideInRight"][/vc_column][/vc_row][vc_row css=".vc_custom_1486474359041{padding-top: 30px !important;}"][vc_column width="1/2" css=".vc_custom_1486474252208{padding-right: 20% !important;padding-left: 20% !important;}"][vc_custom_heading text="14 Offices - 5 Countries" font_container="tag:h2|font_size:17px|text_align:left|color:%2303072e" google_fonts="font_family:Roboto%20Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic|font_style:400%20regular%3A400%3Anormal"][vc_column_text]<span style="color: #939399;">We are proud to announce the opening of a new office in New York. You can apply for a job starting this week.</span>[/vc_column_text][/vc_column][vc_column width="1/2" css=".vc_custom_1486474380680{padding-right: 20% !important;padding-left: 20% !important;}"][vc_custom_heading text="We Have the Best Support" font_container="tag:h2|font_size:17px|text_align:left|color:%2303072e" google_fonts="font_family:Roboto%20Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic|font_style:400%20regular%3A400%3Anormal"][vc_column_text]<span style="color: #939399;">We take support seriously. Our support team is ready to help you overcome any obstacle you may encounter.</span>[/vc_column_text][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( '2 Columns Image +Text 4', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content business';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/image_text_7.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row][vc_column css_animation="fadeInUp" width="1/2"][vc_single_image img_size="full" alignment="center"][/vc_column][vc_column css_animation="fadeInDown" width="1/2" css=".vc_custom_1490104819895{padding-top: 15% !important;}"][vc_custom_heading text="BASIC SERVICES" font_container="tag:h2|font_size:13px|text_align:left|color:%232b7ce6" google_fonts="font_family:Roboto%20Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic|font_style:700%20bold%20regular%3A700%3Anormal" css=".vc_custom_1486126541981{padding-bottom: 20px !important;}"][vc_custom_heading text="The easy to use Visual Composer combined with the poweful Theme Options interface allow you to create seamless designs. " font_container="tag:p|font_size:17px|text_align:left|color:%2314183c|line_height:24px" use_theme_fonts="yes" css=".vc_custom_1486126477638{padding-bottom: 10px !important;}"][vc_column_text]With Creativo you don't need any coding experience at all to craft the perfect website for your business or your client's businesses. Everything can be changed in Creativo: font families, colors, links, background images, site layouts, you name it, we already have it ready for you to use it.[/vc_column_text][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );


$data = array();
$data['name'] = __( '2 Columns Title +Text', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content business';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/title_text.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1486475728578{padding-top: 15% !important;}" section_id="who"][vc_column][vc_custom_heading text="SINCE 2013" font_container="tag:h2|font_size:13|text_align:left|color:%23abacb2" google_fonts="font_family:Roboto%20Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic|font_style:700%20bold%20regular%3A700%3Anormal"][vc_custom_heading text="The World’s Most Powerfull
WordPress Theme" font_container="tag:h2|font_size:50ox|text_align:left|color:%2314183c|line_height:60px" use_theme_fonts="yes"][/vc_column][/vc_row][vc_row css=".vc_custom_1486473581502{padding-top: 30px !important;}"][vc_column width="1/2" css=".vc_custom_1486473596239{padding-right: 40px !important;padding-left: 40px !important;}"][vc_custom_heading text="This text is a demo text which you can easily replace with your own text. Turn on the Front End Visual Composer and hover your mouse over this Custom Heading element. Edit the content of the Text Block element with your own content and click Save Changes. Everything will be updated with a click of a mouse. You can choose a different Font Family, color and font size in seconds." font_container="tag:h2|font_size:17px|text_align:left|color:%23abacb2|line_height:26px" use_theme_fonts="yes"][/vc_column][vc_column width="1/2" css=".vc_custom_1486473609049{padding-right: 40px !important;padding-left: 40px !important;}"][vc_custom_heading text="Just like the text on the left, this element is also using the Custom Heading element. It's a very powerful element and you don't have to write any coding to alter the design of this element. Everything is done with simple mouse clicks." font_container="tag:h2|font_size:17px|text_align:left|color:%23abacb2|line_height:26px" use_theme_fonts="yes"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Title +Icon Boxes + Image', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content business icon_image_box';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/icon_box_11.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row eq_height="yes" content_placement="bottom" css=".vc_custom_1486383409293{padding-top: 12% !important;}" section_id="overview"][vc_column width="1/2" css=".vc_custom_1486128148730{padding-right: 7% !important;padding-left: 7% !important;}"][vc_custom_heading text="ADVANCED SERVICES" font_container="tag:h2|font_size:13px|text_align:left|color:%23f33763" google_fonts="font_family:Roboto%20Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic|font_style:700%20bold%20regular%3A700%3Anormal" css=".vc_custom_1486126821520{padding-bottom: 20px !important;}"][vc_custom_heading text="The easy to use Visual Composer combined with the poweful Theme Options interface allow you to create seamless designs. " font_container="tag:p|font_size:17px|text_align:left|color:%2314183c|line_height:24px" use_theme_fonts="yes" css=".vc_custom_1486127319969{padding-bottom: 20px !important;}"][vc_product_feature title="Parallax Backgrounds" font_size="17" font_weight="400" bottom_margin="10px" title_color="#444444" icon_type="openiconic" icon_color="#ffffff" icon_size="custom" icon_bg_color="#f33763" icon_bg_shape="rounded" css_animation="rotateInDownLeft" custom_icon_value="40" desc_color="#939399" icon_openiconic="vc-oi vc-oi-aperture-alt"]Turn your normal background images into beautiful Parallax Background images with just one click.[/vc_product_feature][vc_separator style="solid" color="#e3e3e5" padding_top="10" padding_bottom="30"][vc_product_feature title="Video Backgrounds" font_size="17" font_weight="400" bottom_margin="10px" title_color="#444444" icon_type="entypo" icon_color="#ffffff" icon_size="custom" icon_bg_color="#f33763" icon_bg_shape="rounded" css_animation="rotateInDownLeft" custom_icon_value="40" desc_color="#939399" icon_entypo="entypo-icon entypo-icon-megaphone"]HTML 5 self hosted videos and Youtube videos can be set as Backgrounds for your Row elements.[/vc_product_feature][vc_separator style="solid" color="#e3e3e5" padding_top="10" padding_bottom="30"][vc_product_feature title="MegaMenu Reay" font_size="17" font_weight="400" bottom_margin="10px" title_color="#444444" icon_type="entypo" icon_color="#ffffff" icon_size="custom" icon_bg_color="#f33763" icon_bg_shape="rounded" css_animation="rotateInDownLeft" custom_icon_value="40" desc_color="#939399" icon_entypo="entypo-icon entypo-icon-map"]With just one click you can transform a default WordPress menu into a beautiful MegaMenu.[/vc_product_feature][vc_separator style="solid" color="#e3e3e5" padding_top="10" padding_bottom="30"][vc_button title="More Services" shape="rounded" size="large" color="custom" custom_font_size="15px" custom_font_weight="400" custom_letter_spacing="0px" custom_color="#abacb2" custom_border_color="#abacb2" align="left"][/vc_column][vc_column width="1/2"][vc_single_image  img_size="full" alignment="right" css_animation="fadeInUp"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Image +Title +Checklist', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content business checklist';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/content_text2.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row][vc_column width="1/2" css=".vc_custom_1484664483409{padding-right: 0px !important;padding-left: 0px !important;}"][vc_single_image img_size="full" alignment="center" css_animation="flipInX"][/vc_column][vc_column width="1/2" css=".vc_custom_1484698899808{padding-right: 5% !important;padding-left: 5% !important;}"][vc_custom_heading text="Perfect Solution for
Your Business Website" font_container="tag:h2|font_size:50px|text_align:left|color:%2314183c|line_height:60px" google_fonts="font_family:Roboto%20Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic|font_style:300%20light%20regular%3A300%3Anormal"][vc_custom_heading text="Creativo provides all the Tools you need to create beautiful websites for your business and your client's businesses." font_container="tag:h3|font_size:17px|text_align:left|color:%23abacb2|line_height:24px" google_fonts="font_family:Roboto%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic|font_style:300%20light%20regular%3A300%3Anormal"][vc_column_text css=".vc_custom_1484699965956{padding-top: 10px !important;}"][checklist text_color="#939399" icon_color="#ffffff" icon_bg_color="#95f2af" shape="circle" fontawesome_icon="fa fa-check" line_height="30px" font_size="14px"]
<ul>
 	<li>Multiple Header Layouts</li>
 	<li>Parallax Effect Ready</li>
 	<li>Unlimited Color Schemes</li>
 	<li>Infinite Sidebars &amp; Widgets Usage</li>
 	<li>Translate the Theme in any language</li>
 	<li>One Page Navigation option</li>
 	<li>Super Powerful Theme Options</li>
</ul>
[/checklist][/vc_column_text][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Title +Counters +Icon Box', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content business icon_image_box counters';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/content_text3.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1490002810383{padding-top: 12% !important;padding-bottom: 5% !important;background-image: url(https://rockythemes.com/creativo_wp/wp-content/uploads/2016/11/home-pic-3.jpg?id=63) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_custom_heading text="Join The Best Selling Business Theme" font_container="tag:h2|font_size:50|text_align:center|color:%23ffffff|line_height:1" google_fonts="font_family:Roboto%20Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic|font_style:300%20light%20regular%3A300%3Anormal" css=".vc_custom_1484572148252{margin-bottom: 0px !important;padding-bottom: 0px !important;}"][vc_custom_heading text="And start creating the perfect website for your business" font_container="tag:h3|font_size:40|text_align:center|color:%23ffffff|line_height:1.5" google_fonts="font_family:Roboto%20Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic|font_style:300%20light%20regular%3A300%3Anormal"][vc_column_text]
<p style="text-align: center;"><span style="color: #ffffff;">You don't need any Coding or Programming Experience at all. Everything is done with just Drag&amp;Drop actions.</span></p>
[/vc_column_text][vc_row_inner css=".vc_custom_1484148350724{border-bottom-width: 1px !important;padding-top: 80px !important;padding-bottom: 80px !important;border-bottom-color: rgba(255,255,255,0.2) !important;border-bottom-style: solid !important;}"][vc_column_inner width="1/4"][vc_counter position="center" icon_fontawesome="" data_to="72" comma_separator="yes" data_refresh_interval="10" data_speed="1000" font_size="50" font_color="#ffffff" suffix="K" separator="yes" separator_color="#2b7ce6" description_color="#ffffff"]
<h4>Websites Built</h4>
[/vc_counter][/vc_column_inner][vc_column_inner width="1/4"][vc_counter position="center" icon_fontawesome="" data_to="99" comma_separator="yes" data_refresh_interval="10" data_speed="1300" font_size="50" font_color="#ffffff" suffix="%" separator="yes" separator_color="#2b7ce6" description_color="#ffffff"]
<h4>Satisfaction Rate</h4>
[/vc_counter][/vc_column_inner][vc_column_inner width="1/4"][vc_counter position="center" icon_fontawesome="" data_to="35" comma_separator="yes" data_refresh_interval="10" data_speed="1300" font_size="50" font_color="#ffffff" suffix="K" separator="yes" separator_color="#2b7ce6" description_color="#ffffff"]
<h4>Customers using Creativo</h4>
[/vc_counter][/vc_column_inner][vc_column_inner width="1/4"][vc_counter position="center" icon_fontawesome="" data_to="25" comma_separator="yes" data_refresh_interval="10" data_speed="1600" font_size="50" font_color="#ffffff" suffix="K" separator="yes" separator_color="#2b7ce6" description_color="#ffffff"]
<h4>Lines of Code</h4>
[/vc_counter][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/2" css=".vc_custom_1484151094922{border-right-width: 1px !important;padding-top: 50px !important;padding-right: 30px !important;padding-bottom: 50px !important;padding-left: 30px !important;border-right-color: rgba(255,255,255,0.2) !important;border-right-style: solid !important;}"][vc_product_feature title="Control Everything, <strong>Yes Everything!</strong>" font_size="22" font_weight="300" bottom_margin="25px" top_margin="30px" title_color="#ffffff" pf_pos="left_above" icon_type="entypo" icon_color="#ffffff" icon_size="bigger" icon_bg_color="#f33763" icon_bg_shape="rounded" desc_font_size="14px" desc_line_height="24px" css_animation="fadeInDown" desc_color="#ffffff" icon_entypo="entypo-icon entypo-icon-tools"]Every element that you see on our pages can be customized to your own needs: font colors, font families, background images, background videos, everything is available for customization. You don't need to write any code at all, changes are done using the Visual Composer builder and the Theme Options interface.[/vc_product_feature][vc_separator style="blank" padding_top="10" padding_bottom="10"][vc_button title="Purchase Creativo" shape="rounded" size="large" color="custom" custom_font_size="15px" custom_font_weight="400" custom_letter_spacing="0px" custom_color="#f33763" custom_border_color="#f33763" custom_text_color_hover="#353535" custom_color_hover="#ffffff" custom_border_color_hover="#ffffff" align="left" css_animation="slideInUp"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1484151165779{padding-top: 50px !important;padding-right: 30px !important;padding-bottom: 50px !important;padding-left: 30px !important;}"][vc_product_feature title="Get started with <strong>Creativo Templates</strong>" font_size="22" font_weight="300" bottom_margin="25px" top_margin="30px" title_color="#ffffff" pf_pos="left_above" icon_type="entypo" icon_color="#ffffff" icon_size="bigger" icon_bg_color="#f38b37" icon_bg_shape="rounded" desc_font_size="14px" desc_line_height="1.8" css_animation="fadeInUp" desc_color="#ffffff" icon_entypo="entypo-icon entypo-icon-upload-cloud"]Save hours of work by getting started with the built-in Creativo Templates. We are constantly creating new templates for Creativo and you will always have access to these templates free of charge. Current templates include: Business, Blogger, Agency, Cafe &amp; Bar, Church and One Page Navigation.[/vc_product_feature][vc_separator style="blank" padding_top="10" padding_bottom="10"][vc_button title="View all Templates" shape="rounded" size="large" color="custom" custom_font_size="15px" custom_font_weight="400" custom_letter_spacing="0px" custom_color="#f38b37" custom_border_color="#f38b37" custom_text_color_hover="#494949" custom_color_hover="#ffffff" custom_border_color_hover="#ffffff" align="left" css_animation="slideInUp" href="http://rockythemes.com/creativo-business/"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Heading Images +Text', 'js_composer' );
$data['cat_display_name'] = 'content ';
$data['weight']     = 6; // Weight of your template in the template list
$data['custom_class'] = 'default content';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/heading_images_text.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1498143088410{padding-top: 10% !important;padding-bottom: 10% !important;}"][vc_column width="1/3"][vc_single_image img_size="full" style="vc_box_rounded" css=".vc_custom_1498144319298{padding-right: 10px !important;padding-bottom: 30px !important;padding-left: 10px !important;}"][vc_custom_heading text="Infinite Posibilites" font_container="tag:h2|font_size:16px|text_align:center|color:%231c1c1c|line_height:1.3" use_theme_fonts="yes" el_class="font_weight_600" css=".vc_custom_1498144266981{padding-bottom: 10px !important;}"][vc_column_text 0=""]
<p style="text-align: center;"><span style="color: #969696;">Creativo was created with the user needs in mind, from Design to Development, everything is done with simple mouse clicks.</span></p>
[/vc_column_text][vc_button title="Learn more" color="custom" custom_font_size="11px" custom_text_color="#4a90e2" custom_color="rgba(255,255,255,0.01)" custom_border_color="rgba(91,201,140,0.01)" custom_text_color_hover="#494949" custom_color_hover="rgba(255,255,255,0.01)" custom_border_color_hover="rgba(255,255,255,0.01)" href="#"][/vc_column][vc_column width="1/3"][vc_single_image img_size="full" style="vc_box_rounded" css=".vc_custom_1498144408773{padding-right: 10px !important;padding-bottom: 30px !important;padding-left: 10px !important;}"][vc_custom_heading text="No Coding Needed" font_container="tag:h2|font_size:16px|text_align:center|color:%231c1c1c|line_height:1.3" use_theme_fonts="yes" el_class="font_weight_600" css=".vc_custom_1498144424959{padding-bottom: 10px !important;}"][vc_column_text 0=""]
<p style="text-align: center;"><span style="color: #969696;">Creativo was created with the user needs in mind, from Design to Development, everything is done with simple mouse clicks.</span></p>
[/vc_column_text][vc_button title="Learn more" color="custom" custom_font_size="11px" custom_text_color="#4a90e2" custom_color="rgba(255,255,255,0.01)" custom_border_color="rgba(91,201,140,0.01)" custom_text_color_hover="#494949" custom_color_hover="rgba(255,255,255,0.01)" custom_border_color_hover="rgba(255,255,255,0.01)" href="#"][/vc_column][vc_column width="1/3"][vc_single_image img_size="full" style="vc_box_rounded" css=".vc_custom_1498144455275{padding-right: 10px !important;padding-bottom: 30px !important;padding-left: 10px !important;}"][vc_custom_heading text="Dream &amp; Create" font_container="tag:h2|font_size:16px|text_align:center|color:%231c1c1c|line_height:1.3" use_theme_fonts="yes" el_class="font_weight_600" css=".vc_custom_1498144483781{padding-bottom: 10px !important;}"][vc_column_text 0=""]
<p style="text-align: center;"><span style="color: #969696;">Creativo was created with the user needs in mind, from Design to Development, everything is done with simple mouse clicks.</span></p>
[/vc_column_text][vc_button title="Learn more" color="custom" custom_font_size="11px" custom_text_color="#4a90e2" custom_color="rgba(255,255,255,0.01)" custom_border_color="rgba(91,201,140,0.01)" custom_text_color_hover="#494949" custom_color_hover="rgba(255,255,255,0.01)" custom_border_color_hover="rgba(255,255,255,0.01)" href="#"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Title +Image +Text', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['default'];
$data['custom_class'] = 'content default';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/image_text2.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row content_placement="middle" css=".vc_custom_1498252199896{border-top-width: 1px !important;border-bottom-width: 1px !important;padding-top: 10% !important;padding-bottom: 0px !important;background-color: #fafafa !important;border-top-color: #ededed !important;border-top-style: solid !important;border-bottom-color: #ededed !important;border-bottom-style: solid !important;}"][vc_column 0=""][vc_custom_heading text="The Most Customizable Theme Ever" font_container="tag:h2|font_size:40px|text_align:center|color:%23212121|line_height:1.3" use_theme_fonts="yes" el_class="font_weight_300" css=".vc_custom_1498254248416{padding-bottom: 10px !important;}"][vc_custom_heading text="Create everything without Coding Anything!

" font_container="tag:p|font_size:20px|text_align:center|color:%23212121" use_theme_fonts="yes" css=".vc_custom_1498254232431{padding-bottom: 10px !important;}" el_class="font_weight_300"][vc_row_inner 0=""][vc_column_inner width="1/2"][vc_single_image image="3615" img_size="full" alignment="center"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1498254041212{padding-top: 40px !important;}"][vc_custom_heading text="Creativo was created with the user needs in mind – starting users will have no difficulties into create beautiful websites." font_container="tag:p|font_size:17px|text_align:left|color:%23212121" use_theme_fonts="yes" css=".vc_custom_1498254135794{padding-bottom: 10px !important;}"][vc_column_text css=".vc_custom_1498254066192{padding-bottom: 20px !important;}"]Creativo provides all the right tools to create virtually any type of layout, your only limitation is your imagination.[/vc_column_text][vc_column_text css=".vc_custom_1498254119632{padding-bottom: 20px !important;}"][checklist text_color="" icon_color="#4cc4eb" icon_bg_color="" shape="" font_size="14px" line_height="30px" fontawesome_icon="fa fa-caret-right"]

Easy to use layout visual builder
Friendly & helpful support team
Compatible with popular plugins
[/checklist][/vc_column_text][vc_button title="Get started today" target="_blank" shape="rounded" color="custom" custom_font_size="12px" custom_font_weight="600" custom_color="#4a90e2" custom_border_color="#4a90e2" custom_color_hover="#4565d1" custom_border_color_hover="#4565d1" align="left" href="https://www.mojomarketplace.com/item/creativo-5-0-ultra-responsive-multipurpose-wp-theme"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Title +Text +Progress Bar', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['default'];
$data['custom_class'] = 'content default progress_bars';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/content-progress.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1498251800821{padding-top: 10% !important;padding-bottom: 10% !important;}"][vc_column 0=""][vc_custom_heading text="More <strong>About</strong> Us" font_container="tag:h2|font_size:30|text_align:center|color:%23212121" use_theme_fonts="yes" el_class="font_weight_300"][vc_custom_heading text="Our team of professionals will always be here to support you" font_container="tag:h3|font_size:17|text_align:center|color:%23212121" use_theme_fonts="yes"][vc_row_inner css=".vc_custom_1497520797091{padding-top: 5% !important;}"][vc_column_inner width="1/3"][vc_custom_heading text="Who are we" font_container="tag:h2|font_size:18|text_align:left|color:%23212121" use_theme_fonts="yes" el_class="font_weight_600" css=".vc_custom_1497520886633{padding-bottom: 20px !important;}"][vc_column_text 0=""]Create <strong>pixel perfect websites</strong> with the best techs and functionality on the web.

<strong>Creativo</strong> was created with the user needs in mind – starting users will have no difficulties into create beautiful websites without writing a single line of code.

From Design to Development, everything is done with simple mouse clicks – it’s no wonder Creativo is being used by over <strong>11,000+ satisfied cusomers</strong>.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_custom_heading text="Why choose us" font_container="tag:h2|font_size:18|text_align:left|color:%23212121" use_theme_fonts="yes" el_class="font_weight_600" css=".vc_custom_1497520956733{padding-bottom: 20px !important;}"][vc_column_text 0=""]Purchase <strong>Creativo</strong> and have unlimited access to future updates, theme releases and lifetime support.

[checklist text_color="" icon_color="#4cc4eb" icon_bg_color="" shape="" font_size="14px" line_height="30px" fontawesome_icon="fa fa-caret-right"]
<ul>
 	<li>Integrated Visual Composer page builder</li>
 	<li>Premium Revolution Slider plugin</li>
 	<li>Premium LayerSlider plugin</li>
 	<li>Lifetime Support and Updates</li>
 	<li>Advanced Theme Options Interface</li>
 	<li>Super Compatible with popular plugins</li>
</ul>
[/checklist][/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_custom_heading text="Our experience" font_container="tag:h2|font_size:18|text_align:left|color:%23212121" use_theme_fonts="yes" el_class="font_weight_600" css=".vc_custom_1497520986070{padding-bottom: 20px !important;}"][vc_progress_bar values="%5B%7B%22label%22%3A%22Development%22%2C%22value%22%3A%2290%22%7D%2C%7B%22label%22%3A%22Design%22%2C%22value%22%3A%2280%22%7D%2C%7B%22label%22%3A%22Marketing%22%2C%22value%22%3A%2270%22%7D%2C%7B%22label%22%3A%22Content%20Writing%22%2C%22value%22%3A%2280%22%7D%2C%7B%22label%22%3A%22Photography%22%2C%22value%22%3A%2290%22%7D%5D" bgcolor="custom" custom_bar_height="10px" options="striped" custombgcolor="#4cc4eb" customtxtcolor="#3d3d3d" units="%"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Title +Text +Checklist', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content checklist business';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/content_text4.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1486565585551{padding-top: 10% !important;padding-bottom: 60px !important;}" section_id="media-kit"][vc_column][vc_custom_heading text="Media Kit" font_container="tag:h2|font_size:50ox|text_align:center|color:%2314183c|line_height:60px" use_theme_fonts="yes"][vc_custom_heading text="The Checklist shortcode can be used in combination with FontAwesome icons
to create beautiful colored lists on your site." font_container="tag:h2|font_size:17px|text_align:center|color:%23abacb2|line_height:26px" use_theme_fonts="yes"][/vc_column][/vc_row][vc_row][vc_column width="1/2" css=".vc_custom_1490090382031{border-right-width: 1px !important;padding-right: 10% !important;padding-left: 20% !important;border-right-color: #d7d7d9 !important;border-right-style: solid !important;}"][vc_custom_heading text="Gold Package" font_container="tag:h2|font_size:22px|text_align:left|color:%234ee97a" use_theme_fonts="yes"][vc_column_text][checklist text_color="#14183c" icon_color="#4ee97a" icon_bg_color="" shape="square" font_size="" fontawesome_icon="fa fa-plus"]
<ul>
 	<li>Lifetime Support and Updates</li>
 	<li>Integrated premium Slider plugins</li>
 	<li>Easy to use Drag and Drop Page Builder</li>
 	<li>Powerful Theme Options Interface</li>
 	<li>One Click Import Demo Templates</li>
 	<li>Parallax &amp; Video Backgrounds</li>
</ul>
[/checklist][/vc_column_text][/vc_column][vc_column width="1/2" css=".vc_custom_1490090373119{padding-right: 10% !important;padding-left: 20% !important;}"][vc_custom_heading text="Ultimate Package" font_container="tag:h2|font_size:22px|text_align:left|color:%23f33763" use_theme_fonts="yes"][vc_column_text][checklist text_color="#14183c" icon_color="#f33763" icon_bg_color="" shape="square" font_size="" fontawesome_icon="fa fa-plus"]
<ul>
 	<li>Lifetime Support and Updates</li>
 	<li>Integrated premium Slider plugins</li>
 	<li>Easy to use Drag and Drop Page Builder</li>
 	<li>Powerful Theme Options Interface</li>
 	<li>One Click Import Demo Templates</li>
 	<li>Parallax &amp; Video Backgrounds</li>
</ul>
[/checklist][/vc_column_text][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( '6 Column Images', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content business';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/images_columns.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1486567266645{padding-top: 10% !important;}"][vc_column][vc_single_image img_size="full" alignment="center"][vc_column_text css=".vc_custom_1486566783393{padding-top: 10px !important;}"]
<p style="text-align: center;">Creativo Logo  for Web / for Print</p>
[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1486567921105{padding-top: 60px !important;padding-bottom: 100px !important;}"][vc_column css_animation="rollIn" width="1/6" el_class="shadow_always"][vc_single_image img_size="full" alignment="center" css_animation="none"][vc_column_text css=".vc_custom_1486566618974{padding-top: 20px !important;padding-bottom: 20px !important;}"]
<p style="text-align: center;"><span style="color: #2b7ce6;">#2b7ce6</span></p>
[/vc_column_text][/vc_column][vc_column css_animation="rollIn" width="1/6" el_class="shadow_always"][vc_single_image img_size="full" alignment="center" css_animation="none"][vc_column_text css=".vc_custom_1486567294476{padding-top: 20px !important;padding-bottom: 20px !important;}"]
<p style="text-align: center;"><span style="color: #4e5ee9;">#4e5ee9</span></p>
[/vc_column_text][/vc_column][vc_column css_animation="rollIn" width="1/6" el_class="shadow_always"][vc_single_image img_size="full" alignment="center"][vc_column_text css=".vc_custom_1486567316326{padding-top: 20px !important;padding-bottom: 20px !important;}"]
<p style="text-align: center;"><span style="color: #f33763;">#f33763</span></p>
[/vc_column_text][/vc_column][vc_column css_animation="rollIn" width="1/6" el_class="shadow_always"][vc_single_image img_size="full" alignment="center"][vc_column_text css=".vc_custom_1486567331856{padding-top: 20px !important;padding-bottom: 20px !important;}"]
<p style="text-align: center;"><span style="color: #f38b37;">#f38b37</span></p>
[/vc_column_text][/vc_column][vc_column css_animation="rollIn" width="1/6" el_class="shadow_always"][vc_single_image img_size="full" alignment="center"][vc_column_text css=".vc_custom_1486567348001{padding-top: 20px !important;padding-bottom: 20px !important;}"]
<p style="text-align: center;"><span style="color: #4ee97a;">#4ee97a</span></p>
[/vc_column_text][/vc_column][vc_column css_animation="rollIn" width="1/6" el_class="shadow_always"][vc_single_image img_size="full" alignment="center"][vc_column_text css=".vc_custom_1486567372741{padding-top: 20px !important;padding-bottom: 20px !important;}"]
<p style="text-align: center;"><span style="color: #14183c;">#14183c</span></p>
[/vc_column_text][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( '2/3 Columns Text', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content business';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/2-3-content-text.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1486567997394{padding-top: 10% !important;padding-bottom: 10% !important;background-color: #f7f8f9 !important;}" section_id="jobs"][vc_column width="1/4"][/vc_column][vc_column css_animation="fadeInRight" width="1/2"][vc_custom_heading text="CAREERS" font_container="tag:h2|font_size:13|text_align:left|color:%232b7ce6" google_fonts="font_family:Roboto%20Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic|font_style:700%20bold%20regular%3A700%3Anormal"][vc_custom_heading text="User Experience Engineer- Staff" font_container="tag:h2|font_size:22|text_align:left|color:%2314183c|line_height:24px" google_fonts="font_family:Roboto%20Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic|font_style:400%20regular%3A400%3Anormal" css=".vc_custom_1486567738593{padding-bottom: 10px !important;}"][vc_column_text]Looking for a well trained UX Engineer. Daily tasks include: drawing and sketching in Adobe Photoshop, Illustrator and other Image Editing Software. High communication skill are required.[/vc_column_text][vc_separator style="solid" color="#dcdcde" padding_top="30" padding_bottom="30"][vc_custom_heading text="Support Forum Engineer- Staff" font_container="tag:h2|font_size:22|text_align:left|color:%2314183c|line_height:24px" google_fonts="font_family:Roboto%20Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic|font_style:400%20regular%3A400%3Anormal" css=".vc_custom_1486648385260{padding-bottom: 10px !important;}"][vc_column_text]Support Staff needed for our Forum. Daily tasks include: being active on the Forum section for 8 hours, replying to at least 100 threads/day. Good written English skills are required.[/vc_column_text][vc_separator style="solid" color="#dcdcde" padding_top="30" padding_bottom=""][/vc_column][vc_column width="1/4"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Titles +Text +Image +Parallax', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['icons'];
$data['custom_class'] = 'business content';
$data['weight']     = 8; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/content_text5.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row parallax="yes" parallax_sizing="100%" css=".vc_custom_1490021189585{padding-top: 20% !important;padding-bottom: 20% !important;background-image: url(https://rockythemes.com/creativo_wp/wp-content/uploads/2017/02/services-bg-2.jpg?id=200) !important;}" section_id="development"][vc_column css_animation="fadeInLeft" width="1/3"][vc_custom_heading text="01" font_container="tag:h2|font_size:50px|text_align:right|color:%23f33763" google_fonts="font_family:Roboto%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic|font_style:900%20bold%20regular%3A900%3Anormal"][vc_custom_heading text="Drag &amp; Drop Page Builder" font_container="tag:h2|font_size:17px|text_align:right|color:%23ffffff" google_fonts="font_family:Roboto%20Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic|font_style:400%20regular%3A400%3Anormal"][vc_column_text css=".vc_custom_1486133705097{padding-bottom: 70px !important;}"]
<p style="text-align: right;"><span style="color: #939399;">The Visual Composer helps you create amazing page layouts without writing any code.</span></p>
[/vc_column_text][vc_custom_heading text="02" font_container="tag:h2|font_size:50px|text_align:right|color:%23f33763" google_fonts="font_family:Roboto%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic|font_style:900%20bold%20regular%3A900%3Anormal"][vc_custom_heading text="Premium Sliders Plugins" font_container="tag:h2|font_size:17px|text_align:right|color:%23ffffff" google_fonts="font_family:Roboto%20Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic|font_style:400%20regular%3A400%3Anormal"][vc_column_text css=".vc_custom_1486133753373{padding-bottom: 70px !important;}"]
<p style="text-align: right;"><span style="color: #939399;">Slider Revolution and Layer Slider are bundled with Creativo – save an extra $50</span></p>
[/vc_column_text][vc_custom_heading text="03" font_container="tag:h2|font_size:50px|text_align:right|color:%23f33763" google_fonts="font_family:Roboto%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic|font_style:900%20bold%20regular%3A900%3Anormal"][vc_custom_heading text="Lifetime Support" font_container="tag:h2|font_size:17px|text_align:right|color:%23ffffff" google_fonts="font_family:Roboto%20Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic|font_style:400%20regular%3A400%3Anormal"][vc_column_text]
<p style="text-align: right;"><span style="color: #939399;">Once you purchase Creativo, our support staff will always be around to help you with anything you need</span></p>
[/vc_column_text][/vc_column][vc_column width="1/3" css=".vc_custom_1486132696374{padding-right: 10% !important;padding-left: 10% !important;}"][vc_single_image img_size="full" css_animation="bottom-to-top"][/vc_column][vc_column css_animation="fadeInRight" width="1/3"][vc_custom_heading text="04" font_container="tag:h2|font_size:50px|text_align:left|color:%23f33763" google_fonts="font_family:Roboto%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic|font_style:900%20bold%20regular%3A900%3Anormal"][vc_custom_heading text="Ultra Responsive Design" font_container="tag:h2|font_size:17px|text_align:left|color:%23ffffff" google_fonts="font_family:Roboto%20Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic|font_style:400%20regular%3A400%3Anormal"][vc_column_text css=".vc_custom_1486133737556{padding-bottom: 70px !important;}"]<span style="color: #939399;">Creativo will look amazing on any device, Smartphones and Tablets included.</span>[/vc_column_text][vc_custom_heading text="05" font_container="tag:h2|font_size:50px|text_align:left|color:%23f33763" google_fonts="font_family:Roboto%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic|font_style:900%20bold%20regular%3A900%3Anormal"][vc_custom_heading text="One Click Setup" font_container="tag:h2|font_size:17px|text_align:left|color:%23ffffff" google_fonts="font_family:Roboto%20Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic|font_style:400%20regular%3A400%3Anormal"][vc_column_text css=".vc_custom_1486133804033{padding-bottom: 70px !important;}"]<span style="color: #939399;">With just One Click you can import any of the available Templates on your site.</span>[/vc_column_text][vc_custom_heading text="06" font_container="tag:h2|font_size:50px|text_align:left|color:%23f33763" google_fonts="font_family:Roboto%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic|font_style:900%20bold%20regular%3A900%3Anormal"][vc_custom_heading text="Lifetime Updates" font_container="tag:h2|font_size:17px|text_align:left|color:%23ffffff" google_fonts="font_family:Roboto%20Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic|font_style:400%20regular%3A400%3Anormal"][vc_column_text]<span style="color: #939399;">Creativo is the most updated theme on the marketplace. We release several updates each month</span>[/vc_column_text][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Support Section', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content business support';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/support.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1490002848228{padding-top: 40px !important;padding-bottom: 47% !important;background-image: url(https://rockythemes.com/creativo_wp/wp-content/uploads/2016/11/support-image.jpg?id=111) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_custom_heading text="We Are Here to Help
24/7 Our Support Staff is Ready" font_container="tag:h2|font_size:50px|text_align:center|color:%2314183c|line_height:60px" google_fonts="font_family:Roboto%20Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic|font_style:300%20light%20regular%3A300%3Anormal"][vc_custom_heading text="Our support team is working 24/7 to stay ahead of any issue you may encounter.
Creativo is the best supported theme on the market." font_container="tag:h3|font_size:17px|text_align:center|color:%23abacb2|line_height:24px" google_fonts="font_family:Roboto%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic|font_style:300%20light%20regular%3A300%3Anormal"][/vc_column][/vc_row][vc_row css=".vc_custom_1484701227522{border-bottom-width: 100px !important;padding-top: 60px !important;}" el_class="enable_overflow"][vc_column offset="vc_col-lg-6 vc_col-md-6" css=".vc_custom_1490965308037{padding-bottom: 20px !important;}"][vc_column_text css=".vc_custom_1484954426517{padding-bottom: 30px !important;}"]<span style="color: #939399;">This is a Text Block element which can support any type of media or text content you want to add. Simply edit this element and change it with your own ideas, upload your own images and transform everything into an interesting section for your visitors.</span>[/vc_column_text][vc_row_inner css=".vc_custom_1484700794997{margin-right: 0px !important;margin-left: 0px !important;padding-top: 30px !important;padding-bottom: 30px !important;background-color: #f7fafe !important;}"][vc_column_inner][vc_product_feature title="" font_size="" title_color="#bcbcbc" icon_fontawesome="fa fa-volume-control-phone" icon_color="#4e5ee9" icon_size="custom" desc_font_size="17px" desc_line_height="24px" desc_color="#abacb2" custom_icon_value="40"]You can use this Icon/Image Box element to add a fast contact options for your visitors. You can see a demo below:[/vc_product_feature][vc_column_text css=".vc_custom_1484700734741{padding-left: 55px !important;}"]
<h4><span style="color: #4e5ee9;">0800 8283 9273</span>    /   <span style="color: #4e5ee9;">info@creativo.com</span></h4>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column css=".vc_custom_1490965223180{margin-top: -30% !important;padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 40px !important;padding-left: 0px !important;background-color: #4ee97a !important;}" offset="vc_col-lg-6 vc_col-md-6"][vc_testimonials test_design="modern" test_style="left" test_images="no" timeout="3000" navigation="no" style="custom" custom_color="#14183c" testimonial_author="#14183c" testimonial_link="#14183c" font_size="22" author_font_size="14" author_link_font_size="14" font_weight="400" author_font_weight="400" test_desc_font_family="Roboto Condensed" include=""][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Title +3 Columns Checklists', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content business checklist';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/content_checklist.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1486382569737{padding-top: 15% !important;}" section_id="benefits"][vc_column][vc_custom_heading text="Benefits of Using our Product" font_container="tag:h2|font_size:50px|text_align:center|color:%2314183c" use_theme_fonts="yes"][vc_custom_heading text="Creativo can be used by any type of users/business: from bloggers to high end corporations,
Creativo is the best solution for creating the perfect website" font_container="tag:h2|font_size:17px|text_align:center|color:%23abacb2|line_height:26px" use_theme_fonts="yes"][/vc_column][/vc_row][vc_row css=".vc_custom_1486135989361{padding-top: 60px !important;padding-bottom: 15% !important;}"][vc_column width="1/3" css=".vc_custom_1490105569422{margin-bottom: 30px !important;border-right-width: 1px !important;padding-right: 40px !important;padding-left: 40px !important;border-right-color: #d7d7d9 !important;border-right-style: solid !important;}"][vc_custom_heading text="For Individuals" font_container="tag:h2|font_size:22px|text_align:left|color:%2314183c" google_fonts="font_family:Roboto%20Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic|font_style:400%20regular%3A400%3Anormal" css=".vc_custom_1486135748124{padding-bottom: 20px !important;}"][vc_column_text][checklist text_color="#14183c" icon_color="#abacb2" icon_bg_color="" shape="square" font_size="" fontawesome_icon="fa fa-plus"]
<ul>
 	<li>Lifetime Support and Updates</li>
 	<li>Integrated premium Slider plugins</li>
 	<li>Easy to use Drag and Drop Page Builder</li>
 	<li>Powerful Theme Options Interface</li>
 	<li>One Click Import Demo Templates</li>
 	<li>Parallax &amp; Video Backgrounds</li>
</ul>
[/checklist][/vc_column_text][/vc_column][vc_column width="1/3" css=".vc_custom_1490105582803{margin-bottom: 30px !important;border-right-width: 1px !important;padding-right: 40px !important;padding-left: 40px !important;border-right-color: #d7d7d9 !important;border-right-style: solid !important;}"][vc_custom_heading text="For Start-ups" font_container="tag:h2|font_size:22px|text_align:left|color:%232b7ce6" google_fonts="font_family:Roboto%20Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic|font_style:400%20regular%3A400%3Anormal" css=".vc_custom_1486135833542{padding-bottom: 20px !important;}"][vc_column_text][checklist text_color="#14183c" icon_color="#2b7ce6" icon_bg_color="" shape="square" font_size="" fontawesome_icon="fa fa-plus"]
<ul>
 	<li>Lifetime Support and Updates</li>
 	<li>Integrated premium Slider plugins</li>
 	<li>Easy to use Drag and Drop Page Builder</li>
 	<li>Powerful Theme Options Interface</li>
 	<li>One Click Import Demo Templates</li>
 	<li>Parallax &amp; Video Backgrounds</li>
</ul>
[/checklist][/vc_column_text][/vc_column][vc_column width="1/3" css=".vc_custom_1490105596688{margin-bottom: 30px !important;padding-right: 40px !important;padding-left: 40px !important;}"][vc_custom_heading text="For Enterprises" font_container="tag:h2|font_size:22px|text_align:left|color:%23f33763" google_fonts="font_family:Roboto%20Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic|font_style:400%20regular%3A400%3Anormal" css=".vc_custom_1486382740536{padding-bottom: 20px !important;}"][vc_column_text][checklist text_color="#14183c" icon_color="#f33763" icon_bg_color="" shape="square" font_size="" fontawesome_icon="fa fa-plus"]
<ul>
 	<li>Lifetime Support and Updates</li>
 	<li>Integrated premium Slider plugins</li>
 	<li>Easy to use Drag and Drop Page Builder</li>
 	<li>Powerful Theme Options Interface</li>
 	<li>One Click Import Demo Templates</li>
 	<li>Parallax &amp; Video Backgrounds</li>
</ul>
[/checklist][/vc_column_text][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Title +Text +Button +Background', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content lifecoach';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/content_life_1.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1496357534594{padding-top: 12% !important;padding-bottom: 12% !important;background-image: url(https://rockythemes.com/creativo-life/wp-content/uploads/2017/06/hero-image-2nd.jpg?id=29) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column css_animation="fadeInLeft" width="1/2"][vc_custom_heading text="WORK HARD." font_container="tag:h3|font_size:54px|text_align:center|color:%233f3b51" use_theme_fonts="yes" css=".vc_custom_1496355287922{margin-bottom: 0px !important;padding-bottom: 0px !important;}"][vc_custom_heading text="stay humble
" font_container="tag:h3|font_size:54px|text_align:center|color:%233f3b51|line_height:1" google_fonts="font_family:Yellowtail%3Aregular|font_style:400%20regular%3A400%3Anormal" css=".vc_custom_1496355400228{margin-bottom: 0px !important;padding-bottom: 40px !important;}"][vc_column_text css=".vc_custom_1496355613562{padding-bottom: 40px !important;}"]
<p style="text-align: center; font-size: 17px; line-height: 25px;">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
<p style="text-align: center;">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus.</p>
[/vc_column_text][vc_button title="Schedule Your First Lesson" color="custom" custom_font_size="14px" custom_line_height="30px" custom_letter_spacing="0px" custom_text_color="#3f3b51" custom_color="#ffffff" custom_border_color="#ffffff" custom_color_hover="#3f3b51" custom_border_color_hover="#3f3b51"][/vc_column][vc_column width="1/2"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Image +Text', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content lifecoach';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/image_text_8.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row eq_height="yes" content_placement="middle" css=".vc_custom_1496357931193{background-image: url(https://rockythemes.com/creativo-life/wp-content/uploads/2017/06/bg-portrai-fin.jpg?id=36) !important;background-position: 0 0 !important;background-repeat: no-repeat !important;}"][vc_column css_animation="fadeInUp" width="1/2" css=".vc_custom_1496750747581{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_single_image img_size="full" alignment="center"][/vc_column][vc_column css_animation="slideInRight" width="1/2" css=".vc_custom_1496750761545{padding-left: 15% !important;background-color: #ffffff !important;}"][vc_column_text 0=""]
<p style="font-size: 17px; line-height: 25px;">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper.</p>
<span style="color: #a3a1a8;">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>

<span style="color: #a3a1a8;">Cras mattis consectetur purus sit amet fermentum. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</span>[/vc_column_text][vc_custom_heading text="Jasmin Rees" font_container="tag:h3|font_size:54px|text_align:left|color:%23f8ac9a|line_height:1" google_fonts="font_family:Yellowtail%3Aregular|font_style:400%20regular%3A400%3Anormal" css_animation="none" css=".vc_custom_1496750735001{padding-top: 50px !important;}"][vc_custom_heading text="YOGA GURU AND HEALTH NUTRITION EXPERT" font_container="tag:h4|font_size:14px|text_align:left|color:%233f3b51" use_theme_fonts="yes" css=".vc_custom_1496357701807{margin-bottom: 0px !important;padding-bottom: 0px !important;}"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Title +Text +Button +Background 2', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content lifecoach';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/content_life_2.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1496359715051{padding-top: 12% !important;padding-bottom: 12% !important;background-image: url(https://rockythemes.com/creativo-life/wp-content/uploads/2017/06/hero-image-3rd.jpg?id=41) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column width="1/2"][/vc_column][vc_column css_animation="slideInRight" width="1/2"][vc_custom_heading text="YOUR PEACE OF MIND" font_container="tag:h3|font_size:54px|text_align:center|color:%23756456" use_theme_fonts="yes" css=".vc_custom_1496359581506{margin-bottom: 0px !important;padding-bottom: 0px !important;}"][vc_custom_heading text="is priceless
" font_container="tag:h3|font_size:54px|text_align:center|color:%23756456|line_height:1" google_fonts="font_family:Yellowtail%3Aregular|font_style:400%20regular%3A400%3Anormal" css=".vc_custom_1496359594039{margin-bottom: 0px !important;padding-bottom: 40px !important;}"][vc_column_text css=".vc_custom_1496359616135{padding-bottom: 40px !important;}"]
<p style="text-align: center; font-size: 17px; line-height: 25px;"><span style="color: #5a434b;">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</span></p>
<p style="text-align: center;"><span style="color: #5a434b;">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus.</span></p>
[/vc_column_text][vc_button title="Schedule Your First Lesson" color="custom" custom_font_size="14px" custom_line_height="30px" custom_letter_spacing="0px" custom_color="#756457" custom_border_color="#756457" custom_color_hover="#3f3b51" custom_border_color_hover="#3f3b51"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Background Image with Spacing', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content lifecoach';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/plain_bg.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1496360385034{padding-top: 25% !important;padding-bottom: 25% !important;background-image: url(https://rockythemes.com/creativo-life/wp-content/uploads/2017/06/hero-image-4th.jpg?id=43) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column 0=""][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Background Image with Spacing 2', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content innovate';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/plain_bg2.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1493026552968{padding-top: 30% !important;padding-bottom: 30% !important;background-image: url(https://rockythemes.com/creativo-innovate/wp-content/uploads/2017/04/bg-lamp-img.jpg?id=9) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column 0=""][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Title +Text +Background Image', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content lifecoach';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/title_text_bg.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row layout="wide" eq_height="yes" content_placement="middle" css=".vc_custom_1496491248114{padding-top: 0px !important;padding-bottom: 0px !important;background-color: #3f3b51 !important;}"][vc_column css_animation="fadeInLeft" width="1/2" css=".vc_custom_1496751222667{padding-top: 20% !important;padding-right: 20% !important;padding-bottom: 20% !important;padding-left: 20% !important;background-color: #3f3b51 !important;}"][vc_custom_heading text="BE THE ENERGY" font_container="tag:h2|font_size:54px|text_align:left|color:%23ffffff|line_height:1" use_theme_fonts="yes"][vc_custom_heading text="you want to attract" font_container="tag:h2|font_size:54px|text_align:left|color:%23f8ac9a|line_height:1" google_fonts="font_family:Yellowtail%3Aregular|font_style:400%20regular%3A400%3Anormal" css=".vc_custom_1496491094375{padding-bottom: 50px !important;}"][vc_column_text]<span style="color: #ffffff; font-size: 17px;">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. </span>

<span style="color: #ffffff;">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span>

<span style="color: #ffffff;">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus.</span>[/vc_column_text][/vc_column][vc_column width="1/2" css=".vc_custom_1496491232491{padding-top: 40px !important;padding-bottom: 40px !important;background-image: url(https://rockythemes.com/creativo-life/wp-content/uploads/2017/06/about-hero-column.jpg?id=79) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( '3 Columns Titles +Text', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content lifecoach';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/title_text2.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1496491327776{padding-top: 10% !important;padding-bottom: 10% !important;}"][vc_column css_animation="fadeInUp" width="1/3" css=".vc_custom_1496750938764{padding-right: 10% !important;padding-left: 10% !important;}"][vc_custom_heading text="STEP" font_container="tag:h2|font_size:54px|text_align:center|color:%233f3b51|line_height:1" use_theme_fonts="yes"][vc_custom_heading text="one" font_container="tag:h2|font_size:54px|text_align:center|color:%23f8ac9a|line_height:1" google_fonts="font_family:Yellowtail%3Aregular|font_style:400%20regular%3A400%3Anormal" css=".vc_custom_1496491637949{padding-bottom: 10px !important;}"][vc_column_text]
<h5 style="text-align: center;">FREE YOUR MIND</h5>
<p style="text-align: center;"><span style="color: #a3a1a8;">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus.</span></p>
[/vc_column_text][/vc_column][vc_column css_animation="fadeInDown" width="1/3" css=".vc_custom_1496750949670{padding-right: 10% !important;padding-left: 10% !important;}"][vc_custom_heading text="STEP" font_container="tag:h2|font_size:54px|text_align:center|color:%233f3b51|line_height:1" use_theme_fonts="yes"][vc_custom_heading text="two" font_container="tag:h2|font_size:54px|text_align:center|color:%23f8ac9a|line_height:1" google_fonts="font_family:Yellowtail%3Aregular|font_style:400%20regular%3A400%3Anormal" css=".vc_custom_1496491666289{padding-bottom: 10px !important;}"][vc_column_text]
<h5 style="text-align: center;">HEALTHY NUTRITION</h5>
<p style="text-align: center;"><span style="color: #a3a1a8;">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus.</span></p>
[/vc_column_text][/vc_column][vc_column css_animation="fadeInUp" width="1/3" css=".vc_custom_1496750961558{padding-right: 10% !important;padding-left: 10% !important;}"][vc_custom_heading text="STEP" font_container="tag:h2|font_size:54px|text_align:center|color:%233f3b51|line_height:1" use_theme_fonts="yes"][vc_custom_heading text="three" font_container="tag:h2|font_size:54px|text_align:center|color:%23f8ac9a|line_height:1" google_fonts="font_family:Yellowtail%3Aregular|font_style:400%20regular%3A400%3Anormal" css=".vc_custom_1496491676649{padding-bottom: 10px !important;}"][vc_column_text]
<h5 style="text-align: center;">MAKE IT SENSE OF YOUR LIFE</h5>
<p style="text-align: center;"><span style="color: #a3a1a8;">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus.</span></p>
[/vc_column_text][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Titke +Text +Button', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content cta lifecoach';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/title_text3.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1496491746381{padding-top: 10% !important;padding-bottom: 10% !important;background-color: #f7fbfc !important;}"][vc_column width="1/6"][/vc_column][vc_column css_animation="appear" width="2/3"][vc_custom_heading text="YOUR PEACE OF MIND" font_container="tag:h2|font_size:54px|text_align:center|color:%233f3b51|line_height:1" use_theme_fonts="yes"][vc_custom_heading text="is priceless" font_container="tag:h2|font_size:54px|text_align:center|color:%23a3a1a8|line_height:1" google_fonts="font_family:Yellowtail%3Aregular|font_style:400%20regular%3A400%3Anormal" css=".vc_custom_1496491794726{padding-bottom: 50px !important;}"][vc_column_text css=".vc_custom_1496493218074{padding-bottom: 40px !important;}"]
<p style="text-align: center;"><span style="font-size: 17px;">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. </span></p>
<p style="text-align: center;">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
[/vc_column_text][vc_button title="Schedule Your First Lesson" color="custom" custom_font_size="14px" custom_line_height="30px" custom_letter_spacing="0px" custom_text_color="#3f3b51" custom_color="#ffffff" custom_border_color="#3f3b51" custom_color_hover="#3f3b51" custom_border_color_hover="#3f3b51"][/vc_column][vc_column width="1/6"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Instagram Widget', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content lifecoach';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/instagram_widget.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1496582184561{padding-top: 10% !important;}"][vc_column width="1/2"][vc_custom_heading text="INSTAGRAM" font_container="tag:h2|font_size:14px|text_align:left|color:%233f3b51" use_theme_fonts="yes" css=".vc_custom_1496582298002{margin-bottom: 0px !important;padding-bottom: 20px !important;}"][/vc_column][vc_column width="1/2"][vc_custom_heading text="@creativo-health" font_container="tag:h2|font_size:22px|text_align:right|color:%23f8ac9a" google_fonts="font_family:Yellowtail%3Aregular|font_style:400%20regular%3A400%3Anormal" css=".vc_custom_1496582347117{margin-bottom: 0px !important;padding-bottom: 10px !important;}" link="url:https%3A%2F%2Fwww.instagram.com%2Fhealth%2F||target:%20_blank|"][/vc_column][/vc_row][vc_row css=".vc_custom_1496582177536{padding-bottom: 10% !important;}"][vc_column 0="" css_animation="flipInX"][cr_instagram_widget_render username="health" number="10" columns="5"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Title +Background Image', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content lifecoach';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/title_bg.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1496494959302{padding-top: 10% !important;padding-bottom: 10% !important;background-image: url(https://rockythemes.com/creativo-life/wp-content/uploads/2017/06/gradient-bg.png?id=39) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_custom_heading text="SERVICES" font_container="tag:h2|font_size:54|text_align:center|color:%23ffffff|line_height:1" use_theme_fonts="yes" css=".vc_custom_1496495029238{margin-bottom: 0px !important;}"][vc_custom_heading text="best for our clients" font_container="tag:h2|font_size:54|text_align:center|color:%23ffffff" google_fonts="font_family:Yellowtail%3Aregular|font_style:400%20regular%3A400%3Anormal"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Image +Content', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content lifecoach';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/image_content.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row eq_height="yes" content_placement="middle" css=".vc_custom_1496495328041{padding-top: 10% !important;}"][vc_column width="1/12"][/vc_column][vc_column css_animation="fadeInUp" width="1/3" css=".vc_custom_1496495778139{padding-left: 0px !important;}"][vc_single_image img_size="full"][/vc_column][vc_column css_animation="fadeInDown" width="1/2" css=".vc_custom_1496495595763{padding-top: 8% !important;padding-right: 8% !important;padding-bottom: 8% !important;padding-left: 8% !important;background-color: #f7fbfc !important;}"][vc_custom_heading text="YOGA" font_container="tag:h2|font_size:54|text_align:left|color:%233f3b51|line_height:1" use_theme_fonts="yes" css=".vc_custom_1496495542414{margin-bottom: 0px !important;padding-bottom: 25px !important;}"][vc_column_text]<span style="color: #616161;">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. </span>

<span style="color: #616161;">No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</span>[/vc_column_text][/vc_column][vc_column width="1/12"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Content +Image', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content lifecoach';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/image_content2.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row eq_height="yes" content_placement="middle" css=".vc_custom_1496495666972{padding-top: 30px !important;}"][vc_column width="1/12"][/vc_column][vc_column css_animation="fadeInUp" width="1/2" css=".vc_custom_1496495743088{padding: 8% !important;background-color: #f7fbfc !important;}"][vc_custom_heading text="FITNESS" font_container="tag:h2|font_size:54|text_align:left|color:%233f3b51|line_height:1" use_theme_fonts="yes" css=".vc_custom_1496495856286{margin-bottom: 0px !important;padding-bottom: 25px !important;}"][vc_column_text]<span style="color: #616161;">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. </span>

<span style="color: #616161;">No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</span>[/vc_column_text][/vc_column][vc_column css_animation="fadeInDown" width="1/3" css=".vc_custom_1496495786941{padding-right: 0px !important;}"][vc_single_image img_size="full" alignment="right"][/vc_column][vc_column width="1/12"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Images +Titles +Text', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content onepage';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/image_content3.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1428882355299{padding-top: 85px !important;padding-bottom: 20px !important;}" section_id="about-us"][vc_column][vc_custom_heading text="ABOUT US" font_container="tag:h2|font_size:24|text_align:center|color:%23232323|line_height:1.5" use_theme_fonts="yes" el_class="font_weight_600"][vc_separator_2 color_line="#444444" padding_top="20" padding_bottom="25"][vc_custom_heading text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent metus magna, malesuada porta elementum vitae, hendrerit sed nunec ut placerat odio." font_container="tag:p|font_size:20|text_align:center|line_height:1.5" use_theme_fonts="yes" el_class="font_weight_300"][/vc_column][/vc_row][vc_row css=".vc_custom_1428611754380{padding-top: 0px !important;padding-bottom: 100px !important;}"][vc_column width="1/3"][vc_single_image img_size="full" alignment="center" style="vc_box_rounded" css_animation="bottom-to-top"][vc_separator style="blank" padding_top="10" padding_bottom="10"][ctitle title="Who we are" color="#232323" background="#ffffff" font_size="20" font_weight="600" position="left" separator_color="rgba(235,235,235,0.01)"][vc_column_text 0=""]I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.[/vc_column_text][/vc_column][vc_column width="1/3"][vc_single_image img_size="full" alignment="center" style="vc_box_rounded" css_animation="top-to-bottom"][vc_separator style="blank" padding_top="10" padding_bottom="10"][ctitle title="What we do" color="#232323" background="#ffffff" font_size="20" font_weight="600" position="left" separator_color="rgba(235,235,235,0.01)"][vc_column_text 0=""]I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.[/vc_column_text][/vc_column][vc_column width="1/3"][vc_single_image img_size="full" alignment="center" style="vc_box_rounded" css_animation="bottom-to-top"][vc_separator style="blank" padding_top="10" padding_bottom="10"][ctitle title="Our Philosophy" color="#232323" background="#ffffff" font_size="20" font_weight="600" position="left" separator_color="rgba(235,235,235,0.01)"][vc_column_text 0=""]I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.[/vc_column_text][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( '1/3 Column Text', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content innovate';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/plain_text.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1492773543745{padding-top: 40px !important;padding-bottom: 10% !important;}"][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text]
<h4 style="text-align: center;"></h4>
<h4 style="text-align: center;">Picia collection, whose name means tiny in the language spoken in Trieste (Italy), is a range of table and suspension lamp designed to merge the process of hand-blown glass and the handmade production on lathe of natural conglomerate cork. The playful shape is inspired by the little helper of Gyro Gearloose (part of the Walt Disney’s Duck universe) whose comic books filled the designer’s childhood.</h4>
[/vc_column_text][/vc_column][vc_column width="1/4"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Text +Image +Text', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content innovate';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/text_image_text2.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row eq_height="yes" content_placement="middle" css=".vc_custom_1492773527814{padding-top: 10% !important;padding-bottom: 10% !important;background-color: #fff7f7 !important;}" section_id="designer"][vc_column width="1/4"][vc_custom_heading text="MARCELO DINOS" font_container="tag:p|font_size:13|text_align:left|color:%23abacb2" use_theme_fonts="yes" el_class="font_weight_600"][vc_custom_heading text="Top Reviewer of the Beautiful Picia Lamp" font_container="tag:h2|font_size:48px|text_align:left|color:%2300031a|line_height:66px" use_theme_fonts="yes" el_class="font_weight_700"][/vc_column][vc_column width="5/12"][vc_single_image img_size="full" alignment="center"][/vc_column][vc_column width="1/3"][vc_column_text 0=""]The simplicity of shape and use of a classic material like glass and unusual in its combination such as cork create a gorgeous contrast, enhanced by the colours palette chosen for the glass adding a contemporary feel. The designer wanted to emphasize the delicate match of glass and cork, drawing the attention on it as an elegant and functional detail allowing the shade to be removed easily for bulb changing. In the table version the wiring is hidden in the small base thanks to a matte black steel cap completing the lamp.

<em>"Design is life , in continuous variation and motion, you can live or refuse it but at the end you will be involved even against your will. Design helps reinvent ourselves, being challenged, forcing the human being to turn attention to the future. Impetuous desire of improvement."</em> - Enrico Zanolla[/vc_column_text][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Background Image +Text', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content innovate';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/bg_image_text.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row eq_height="yes" content_placement="middle" css=".vc_custom_1493026528711{border-top-width: 1px !important;background-image: url(https://rockythemes.com/creativo-innovate/wp-content/uploads/2017/04/bg-image.jpg?id=8) !important;background-position: 0 0 !important;background-repeat: no-repeat !important;border-top-color: #eaeaea !important;border-top-style: solid !important;}" section_id="functionality"][vc_column width="1/6"][/vc_column][vc_column width="1/2"][vc_custom_heading text="GET POWER FROM SIMPLICITY" font_container="tag:h2|font_size:18px|text_align:left|color:%2300031a" use_theme_fonts="yes" el_class="font_weight_600"][vc_column_text 0=""]
<h4 style="text-align: left;">Picia Lamp is the simplest product you can own.
It's made of recycled materials and will last forever in your home.</h4>
[/vc_column_text][/vc_column][vc_column width="1/3" css=".vc_custom_1492707447181{padding-top: 120px !important;padding-bottom: 120px !important;}"][vc_column_text 0=""]The simplicity of shape and use of a classic material like glass and unusual in its combination such as cork create a gorgeous contrast, enhanced by the colours palette chosen for the glass adding a contemporary feel.

The designer wanted to emphasize the delicate match of glass and cork, drawing the attention on it as an elegant and functional detail allowing the shade to be removed easily for bulb changing. In the table version the wiring is hidden in the small base thanks to a matte black steel cap completing the lamp.[/vc_column_text][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Text +Image Equal Height', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content cafebar';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/text_image_equal_1.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row layout="wide" eq_height="yes" content_placement="middle" css=".vc_custom_1507068607183{border-top-width: 1px !important;background-color: #312f31 !important;border-top-color: #3d383d !important;border-top-style: solid !important;}"][vc_column css=".vc_custom_1460128825887{padding-top: 80px !important;padding-right: 10% !important;padding-bottom: 80px !important;padding-left: 10% !important;}" offset="vc_col-lg-6 vc_col-md-12"][vc_custom_heading text="BEST COFFEE IN TOWN" font_container="tag:h2|font_size:40|text_align:left|color:%23ffffff" use_theme_fonts="yes"][vc_custom_heading text="Come to our Cafe &amp; Bar and taste the best coffee flavors in the world." font_container="tag:h4|font_size:18|text_align:left|color:%23d1b181|line_height:24px" use_theme_fonts="yes"][vc_separator_2 color_line="#d1b181" separator_position="left_sep" padding_top="20" padding_bottom="30"][vc_column_text]<span style="color: #aaa9a9;">In the cup, a well-prepared espresso borne of exclusively high-quality Arabica is beautifullyfragrant, sweet and round, with a slight and pleasantacidity, often chocolaty, with an aftertaste of caramel and just a mild hint of bitterness. The rich, creamy layer on top, or crema, should have alight reddish brown hue, unbroken and painted withtiger-like stripes.</span>

<span style="color: #aaa9a9;">In the cup, a well-prepared espresso borne of exclusively high-quality Arabica is beautifully fragrant, sweet and round, with a slight and pleasant acidity, often chocolaty, with an aftertaste of caramel and just a mild hint of bitterness.</span>

<span style="color: #aaa9a9;">The rich, creamy layer on top, or crema, should have a light reddish brown hue, unbroken and painted with tiger-like stripes.</span>[/vc_column_text][vc_separator style="blank" padding_top="10" padding_bottom="10"][/vc_column][vc_column css=".vc_custom_1460128788230{background-image: url(http://rockythemes.com/creativo-cafe/wp-content/uploads/2016/04/coffee-mod.jpg?id=152) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" offset="vc_col-lg-6 vc_col-md-12 vc_hidden-md vc_col-xs-12"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Image +Text Equal Height', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content cafebar';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/text_image_equal_2.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row layout="wide" eq_height="yes" content_placement="middle" css=".vc_custom_1507069089380{background-color: #312f31 !important;}"][vc_column css=".vc_custom_1507068911567{padding-top: 20% !important;padding-bottom: 20% !important;background-image: url(http://rockythemes.com/creativo-cafe/wp-content/uploads/2016/04/free-croissants-mod.jpg?id=153) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" offset="vc_col-lg-6 vc_col-md-12 vc_hidden-sm"][/vc_column][vc_column css=".vc_custom_1460128835795{padding-top: 80px !important;padding-right: 10% !important;padding-bottom: 80px !important;padding-left: 10% !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" offset="vc_col-lg-6 vc_col-md-12"][vc_custom_heading text="FREE CROISSANTS &amp; COFFEE" font_container="tag:h2|font_size:40|text_align:left|color:%23ffffff" use_theme_fonts="yes"][vc_custom_heading text="Order any coffee and you will be rewarded with a free croissant.
" font_container="tag:h4|font_size:18|text_align:left|color:%23d1b181|line_height:24px" use_theme_fonts="yes"][vc_separator_2 color_line="#d1b181" separator_position="left_sep" padding_top="20" padding_bottom="30"][vc_column_text]<span style="color: #aaa9a9;">In the cup, a well-prepared espresso borne of exclusively high-quality Arabica is beautifullyfragrant, sweet and round, with a slight and pleasantacidity, often chocolaty, with an aftertaste of caramel and just a mild hint of bitterness. The rich, creamy layer on top, or crema, should have alight reddish brown hue, unbroken and painted withtiger-like stripes.</span>

<span style="color: #aaa9a9;">n the cup, a well-prepared espresso borne of exclusively high-quality Arabica is beautifully fragrant, sweet and round, with a slight and pleasant acidity, often chocolaty, with an aftertaste of caramel and just a mild hint of bitterness.</span>

<span style="color: #aaa9a9;">The rich, creamy layer on top, or crema, should have a light reddish brown hue, unbroken and painted with tiger-like stripes.</span>[/vc_column_text][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( '3 Columns Restaurant Menus', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content cafebar';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/restaurant_menu.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row layout="wide" parallax="yes" css=".vc_custom_1460128949666{border-top-width: 1px !important;padding-top: 100px !important;padding-bottom: 100px !important;background-image: url(http://rockythemes.com/creativo-cafe/wp-content/uploads/2016/04/plate-menu.jpg?id=154) !important;border-top-color: #3d383d !important;border-top-style: solid !important;}"][vc_column][vc_custom_heading text="THE PERFECT FOOD &amp; DRINKS" font_container="tag:h3|font_size:40|text_align:center|color:%23ffffff" use_theme_fonts="yes"][vc_custom_heading text="Our Five Star Chefs always deliver the best Food &amp; Drinks for our clients" font_container="tag:h4|font_size:20|text_align:center|color:%23d1b181|line_height:24px" use_theme_fonts="yes"][vc_separator_2 color_line="#d1b181" padding_top="20" padding_bottom="30"][vc_row_inner css=".vc_custom_1459728320658{padding-right: 3% !important;padding-left: 3% !important;}"][vc_column_inner width="1/3" css=".vc_custom_1459728107605{padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 30px !important;padding-left: 30px !important;}"][ctitle title="Coffee Menu" color="#e8e8e8" background="rgba(255,255,255,0.01)" position="left" separator_color="rgba(235,235,235,0.2)"][restaurant_menu menu_item_title="Cappucino Latte" ingredients="Milk / Cappucino / Coffee" price="$7.9" menu_color="#d1b181" ingredients_color="#ffffff" price_color="#d1b181" separator_color="#939393" ingredients_font_size="14" price_font_size="25"][restaurant_menu menu_item_title="THE FLAT WHITE" ingredients="Espresso / Cappuccino / Latte" price="$8.9" menu_color="#d1b181" ingredients_color="#ffffff" price_color="#d1b181" separator_color="#939393" ingredients_font_size="14" price_font_size="25"][restaurant_menu menu_item_title="IRISH COFFEE" ingredients="Irish cream / Whiskey / Nutmeg / Coffee" price="$9.9" menu_color="#d1b181" ingredients_color="#ffffff" price_color="#d1b181" separator_color="#939393" ingredients_font_size="14" price_font_size="25"][restaurant_menu menu_item_title="CARAMEL FRAPPUCCINO" ingredients="Ice / Brewed Coffee / Milk / Caramel Sauce" price="$11.9" menu_color="#d1b181" ingredients_color="#ffffff" price_color="#d1b181" separator_color="#939393" ingredients_font_size="14" price_font_size="25"][restaurant_menu menu_item_title="CUBAN ESPRESSO" ingredients="Cuban coffee / Cuban espresso / Cuban shot" price="$12.9" menu_color="#d1b181" ingredients_color="#ffffff" price_color="#d1b181" separator_color="#939393" ingredients_font_size="14" price_font_size="25"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1459728142530{padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 30px !important;padding-left: 30px !important;}"][ctitle title="COCKTAILS MENU" color="#e8e8e8" background="rgba(255,255,255,0.01)" position="left" separator_color="rgba(235,235,235,0.2)"][restaurant_menu menu_item_title="Perfect Mojito" ingredients="Mint / Lime / Sugar / Ice / Carbonated Water" price="$9.5" menu_color="#88b570" ingredients_color="#ffffff" price_color="#88b570" separator_color="#939393" ingredients_font_size="14" price_font_size="25"][restaurant_menu menu_item_title="BIKINI MARTINI" ingredients="Coconut Rum / Vodka / Pineapple / Grenadyne Syrup" price="$13" menu_color="#88b570" ingredients_color="#ffffff" price_color="#88b570" separator_color="#939393" ingredients_font_size="14" price_font_size="25"][restaurant_menu menu_item_title="FAMOUS MARGUERITAS" ingredients="Tequila / Lime / Orange Liqueur / Ice / Rimming Salt" price="$17" menu_color="#88b570" ingredients_color="#ffffff" price_color="#88b570" separator_color="#939393" ingredients_font_size="14" price_font_size="25"][restaurant_menu menu_item_title="FROZEN DAIQUIRI" ingredients="Rum / Sugar / Lime Juice / Ice / Maraschino Cherry" price="$22" menu_color="#88b570" ingredients_color="#ffffff" price_color="#88b570" separator_color="#939393" ingredients_font_size="14" price_font_size="25"][restaurant_menu menu_item_title="WILD RIVER BLOODY MARY" ingredients="Tomato Juice / Salt / Black Pepper / Worcestershire sauce / Hot Pepper Sauce" price="$27" menu_color="#88b570" ingredients_color="#ffffff" price_color="#88b570" separator_color="#939393" ingredients_font_size="14" price_font_size="25"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1459728171228{padding: 30px !important;}"][ctitle title="Food MENU" color="#e8e8e8" background="rgba(255,255,255,0.01)" position="left" separator_color="rgba(235,235,235,0.2)"][restaurant_menu menu_color="#cc887e" ingredients_color="#ffffff" price_color="#cc887e" separator_color="#939393" ingredients_font_size="14" price_font_size="25"][restaurant_menu menu_item_title="GREEN BEAN &amp; SALAD" ingredients="Green Beans / Tomatoes / Olive Oil / Onion / Pepper" price="$19" menu_color="#cc887e" ingredients_color="#ffffff" price_color="#cc887e" separator_color="#939393" ingredients_font_size="14" price_font_size="25"][restaurant_menu menu_item_title="BAKED TERIYAKI CHICKEN" ingredients="Cornstarch / Garlic / Soy Sauce / Vinegar / Chicken Breast" price="$25" menu_color="#cc887e" ingredients_color="#ffffff" price_color="#cc887e" separator_color="#939393" ingredients_font_size="14" price_font_size="25"][restaurant_menu menu_item_title="CHICKEN ENCHILADAS" ingredients="Butter / Onions / Garlic / Green Chiles / Sour Cream / Cheddar Cheese / Tortillas / Milk" price="$32" menu_color="#cc887e" ingredients_color="#ffffff" price_color="#cc887e" separator_color="#939393" ingredients_font_size="14" price_font_size="25"][restaurant_menu menu_item_title="PORK STAKE" ingredients="Cornstarch / Garlic / Soy Sauce / Vinegar / Pork Breast" price="$35" menu_color="#cc887e" ingredients_color="#ffffff" price_color="#cc887e" separator_color="#939393" ingredients_font_size="14" price_font_size="25"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( '2/3 Content +1/3 Image', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content cafebar';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/text_image_equal_3.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row layout="stretch_row_content_no_spaces" eq_height="yes" css=".vc_custom_1460205912950{border-top-width: 1px !important;background-color:#312f32 !important;border-bottom-width: 1px !important;border-top-color: #3f3f3f !important;border-top-style: solid !important;border-bottom-color: #3f3f3f !important;border-bottom-style: solid !important;}"][vc_column width="2/3" css=".vc_custom_1460199657425{padding-top: 80px !important;padding-right: 10% !important;padding-bottom: 80px !important;padding-left: 10% !important;}"][vc_custom_heading text="OUR PHILOSOPHY" font_container="tag:h2|font_size:40|text_align:left|color:%23ffffff" use_theme_fonts="yes"][vc_custom_heading text="The passion for Food, Drinks and Good Music recommends us" font_container="tag:h2|font_size:20|text_align:left|color:%23d0bc9b" use_theme_fonts="yes"][vc_separator_2 color_line="#d1b181" separator_position="left_sep" padding_top="10" padding_bottom="30"][vc_column_text]<img class="wp-image-168 size-thumbnail alignleft" src="http://rockythemes.com/creativo-cafe/wp-content/uploads/2016/04/food-1-150x150.jpg" alt="food-1" width="150" height="150" />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis eros lobortis, vestibulum turpis ac, pulvinar odio. Praesent vulputate a elit ac mollis. In sit amet ipsum turpis. Pellentesque venenatis, libero vel euismod lobortis, mi metus luctus augue, eget dapibus elit nisi eu massa.

Donec ac mauris luctus, ullamcorper felis nec, interdum felis. Vivamus aliquet lorem in turpis rhoncus tristique. Phasellus fringilla est in massa placerat aliquam. Proin vulputate ligula vel finibus viverra. Phasellus ultricies ligula nec enim bibendum, eu molestie augue tincidunt.

Donec ac mauris luctus, ullamcorper felis nec, interdum felis. Vivamus aliquet lorem in turpis rhoncus tristique. Phasellus fringilla est in massa placerat aliquam. Proin vulputate ligula vel finibus viverra. Phasellus ultricies ligula nec enim bibendum, eu molestie augue tincidunt.[/vc_column_text][/vc_column][vc_column width="1/3" css=".vc_custom_1507071072530{padding-top: 10% !important;padding-bottom: 10% !important;background-image: url(http://rockythemes.com/creativo-cafe/wp-content/uploads/2016/04/about-us-pic1.jpg?id=176) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Restaurant Menu + Background Image', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content cafebar';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/text_image_equal_4.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row layout="stretch_row_content_no_spaces" eq_height="yes" css=".vc_custom_1460201652751{border-top-width: 1px !important;background-color:#312f32 !important;border-top-color: #3f3f3f !important;border-top-style: solid !important;}"][vc_column width="1/2" css=".vc_custom_1460068931796{padding-top: 50px !important;padding-right: 10% !important;padding-bottom: 50px !important;padding-left: 10% !important;}"][vc_custom_heading text="BREAKFAST" font_container="tag:h2|font_size:40|text_align:left|color:%23d0bc9b|line_height:1.5" use_theme_fonts="yes"][vc_separator_2 color_line="#d0bc9b" separator_position="left_sep" padding_top="10" padding_bottom="40"][restaurant_menu menu_item_title="IMPORTED OYSTERS GRILL (5 PIECES)" ingredients="Oysters / Veggie / Ginger" price="$12" menu_color="#ffffff" ingredients_color="#aaa9a9" price_color="#d1b181" separator_color="#545454" menu_font_size="22" ingredients_font_size="14" price_font_size="22"][restaurant_menu menu_item_title="FRESH CRAB WITH LEMON" ingredients="Crab / Lemon / Garlic" price="$15" menu_color="#ffffff" ingredients_color="#aaa9a9" price_color="#d1b181" separator_color="#545454" menu_font_size="22" ingredients_font_size="14" price_font_size="22"][restaurant_menu menu_item_title="GRILLED SALMON SUSHI" ingredients="Rice / Salmon / Shoyu" price="$18" menu_color="#ffffff" ingredients_color="#aaa9a9" price_color="#d1b181" separator_color="#545454" menu_font_size="22" ingredients_font_size="14" price_font_size="22"][restaurant_menu menu_item_title="FRIED POTATOES WITH GARLIC" ingredients="Potatoes / Olive Oil / Garlic" price="$21" menu_color="#ffffff" ingredients_color="#aaa9a9" price_color="#d1b181" separator_color="#545454" menu_font_size="22" ingredients_font_size="14" price_font_size="22"][restaurant_menu menu_item_title="CRISPY ZUCCHINI FRITTÉ" ingredients="Garlic / Crostini / Rice" price="$21" menu_color="#ffffff" ingredients_color="#aaa9a9" price_color="#d1b181" separator_color="#545454" menu_font_size="22" ingredients_font_size="14" price_font_size="22"][/vc_column][vc_column width="1/2" css=".vc_custom_1460129876233{background-image: url(http://rockythemes.com/creativo-cafe/wp-content/uploads/2016/04/free-croissants-mod.jpg?id=153) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Background Image + Restaurant Menu', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content cafebar';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/text_image_equal_5.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row layout="stretch_row_content_no_spaces" eq_height="yes"][vc_column width="1/2" css=".vc_custom_1460129658716{background-image: url(http://rockythemes.com/creativo-cafe/wp-content/uploads/2016/04/lunch-2.jpg?id=160) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][/vc_column][vc_column width="1/2" css=".vc_custom_1460071251515{padding-top: 50px !important;padding-right: 10% !important;padding-bottom: 50px !important;padding-left: 10% !important;background-color: #d7dbde !important;}"][vc_custom_heading text="LUNCH" font_container="tag:h2|font_size:40|text_align:left|color:%23bd9e6e|line_height:1.5" use_theme_fonts="yes"][vc_separator_2 color_line="#bd9e6e" separator_position="left_sep" padding_top="10" padding_bottom="40"][restaurant_menu menu_item_title="ITALIAN SOURCE MUSHROOM" ingredients="Mushroom / Garlic / Veggies" price="$19" menu_color="#292c30" ingredients_color="#888888" price_color="#bd9e6e" separator_color="#aaaaaa" menu_font_size="22" ingredients_font_size="14" price_font_size="22"][restaurant_menu menu_item_title="TUNA ROAST SOURCE" ingredients="Tuna / Potatoes / Rice" price="$22" menu_color="#292c30" ingredients_color="#888888" price_color="#bd9e6e" separator_color="#aaaaaa" menu_font_size="22" ingredients_font_size="14" price_font_size="22"][restaurant_menu menu_item_title="ROAST PORK (4 STICKS)" ingredients="Pork / Veggies / Shoyu" price="$25" menu_color="#292c30" ingredients_color="#888888" price_color="#bd9e6e" separator_color="#aaaaaa" menu_font_size="22" ingredients_font_size="14" price_font_size="22"][restaurant_menu menu_item_title="CALAMARI FRITTÉ" ingredients="Fresh Mozzarella, Basil &amp; Balsamic Glaze" price="$27" menu_color="#292c30" ingredients_color="#848484" price_color="#bd9e6e" separator_color="#aaaaaa" menu_font_size="22" ingredients_font_size="14" price_font_size="22"][restaurant_menu menu_item_title="CRISPY ZUCCHINI FRITTE" ingredients="Garlic / Crostini / Veggies " price="$29" menu_color="#292c30" ingredients_color="#888888" price_color="#bd9e6e" separator_color="#aaaaaa" menu_font_size="22" ingredients_font_size="14" price_font_size="22"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( '3 Cols +Background Images +Text', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content shopkeeper';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/content_col3.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row layout="wide" css=".vc_custom_1479226704320{padding-top: 40px !important;}"][vc_column width="1/3" css=".vc_custom_1479226807044{padding-top: 80% !important;padding-right: 10% !important;padding-bottom: 15% !important;padding-left: 10% !important;background-image: url(http://rockythemes.com/creativo-shop/wp-content/uploads/2016/08/hipster-front-original-2.jpg?id=456) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_custom_heading text="Best Clothing for Men" font_container="tag:p|font_size:22px|text_align:center|color:%23ffffff" google_fonts="font_family:PT%20Sans%3Aregular%2Citalic%2C700%2C700italic|font_style:400%20regular%3A400%3Anormal" css=".vc_custom_1472132664998{margin-bottom: 0px !important;padding-bottom: 15px !important;}"][vc_custom_heading text="MAN UP FOR AUTUMN" font_container="tag:h2|font_size:35px|text_align:center|color:%23ffffff" google_fonts="font_family:Montserrat%3Aregular%2C700|font_style:700%20bold%20regular%3A700%3Anormal"][vc_button title="sEE Collection" shape="rounded" color="custom" custom_color="rgba(255,255,255,0.09)" custom_border_color="#ffffff" custom_color_hover="rgba(255,255,255,0.01)" custom_border_color_hover="#ffffff"][/vc_column][vc_column width="1/3" css=".vc_custom_1479226772082{padding-top: 80% !important;padding-right: 10% !important;padding-bottom: 15% !important;padding-left: 10% !important;background-image: url(http://rockythemes.com/creativo-shop/wp-content/uploads/2016/08/hipster-front-original-3.jpg?id=457) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_custom_heading text="New Fashion for Autumn" font_container="tag:p|font_size:22px|text_align:center|color:%23ffffff" google_fonts="font_family:PT%20Sans%3Aregular%2Citalic%2C700%2C700italic|font_style:400%20regular%3A400%3Anormal" css=".vc_custom_1472130936502{margin-bottom: 0px !important;padding-bottom: 15px !important;}"][vc_custom_heading text="GET READY FOR AUTUMN" font_container="tag:h2|font_size:35px|text_align:center|color:%23ffffff" google_fonts="font_family:Montserrat%3Aregular%2C700|font_style:700%20bold%20regular%3A700%3Anormal"][vc_button title="sEE Collection" shape="rounded" color="custom" custom_color="rgba(255,255,255,0.09)" custom_border_color="#ffffff" custom_color_hover="rgba(255,255,255,0.01)" custom_border_color_hover="#ffffff"][/vc_column][vc_column width="1/3" css=".vc_custom_1479226838381{padding-top: 80% !important;padding-right: 10% !important;padding-bottom: 15% !important;padding-left: 10% !important;background-image: url(http://rockythemes.com/creativo-shop/wp-content/uploads/2016/08/hipster-front-original-1.jpg?id=455) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_custom_heading text="Update Your Fashion " font_container="tag:p|font_size:22px|text_align:center|color:%23ffffff" google_fonts="font_family:PT%20Sans%3Aregular%2Citalic%2C700%2C700italic|font_style:400%20regular%3A400%3Anormal" css=".vc_custom_1472132675997{margin-bottom: 0px !important;padding-bottom: 15px !important;}"][vc_custom_heading text="AUTUMN SALES DAY" font_container="tag:h2|font_size:35px|text_align:center|color:%23ffffff" google_fonts="font_family:Montserrat%3Aregular%2C700|font_style:700%20bold%20regular%3A700%3Anormal"][vc_button title="sEE Collection" shape="rounded" color="custom" custom_color="rgba(255,255,255,0.09)" custom_border_color="#ffffff" custom_color_hover="rgba(255,255,255,0.01)" custom_border_color_hover="#ffffff"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Text +3 Col Products Carousel', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content shopkeeper';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/products_carousel_1.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1478696691291{padding-top: 80px !important;}"][vc_column][vc_custom_heading text="PRODUCTS ON SALE" font_container="tag:h2|font_size:22|text_align:center|color:%23282828|line_height:1.3" google_fonts="font_family:Montserrat%3Aregular%2C700|font_style:700%20bold%20regular%3A700%3Anormal"][vc_column_text]
<p style="text-align: center;">You can easily create a Product Carousel using the Woo Carousel element.
Choose how the carousel is populated by choosing the products type: best seller, most reviewed, etc.</p>
[/vc_column_text][vc_separator style="double" padding_top="40" padding_bottom="20"][/vc_column][/vc_row][vc_row css=".vc_custom_1478703969669{padding-top: 40px !important;}"][vc_column width="1/3" css=".vc_custom_1478788118090{padding-top: 15% !important;padding-right: 15% !important;}"][vc_custom_heading text="Blazers On Sale" font_container="tag:h2|font_size:22|text_align:left|color:%23282828|line_height:1.3" google_fonts="font_family:Montserrat%3Aregular%2C700|font_style:700%20bold%20regular%3A700%3Anormal"][vc_column_text css=".vc_custom_1478704192501{padding-bottom: 20px !important;}"]
<p style="text-align: left;">Check out the On Sale products in Blazers category. This carousel is updated based on Products On Sale in the Blazers category.</p>
[/vc_column_text][vc_button title="View All Blazzers" color="custom" custom_text_color="#232323" custom_color="rgba(255,255,255,0.01)" custom_border_color="rgba(0,0,0,0.67)" custom_color_hover="#232323" custom_border_color_hover="#232323" i_align="right_icon" icon_fontawesome="fa fa-long-arrow-right" align="left" add_icon="true" href="http://rockythemes.com/creativo-shop/product-category/blazzers/"][/vc_column][vc_column width="2/3"][woo_carousel visible_items="3" categ_select="0" include="0" orderby="price"][/vc_column][/vc_row][vc_row][vc_column][vc_separator style="double" padding_top="30" padding_bottom="50"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( '3 Col Products Carousel +Text', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content shopkeeper';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/products_carousel_2.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1478701933219{padding-bottom: 60px !important;}"][vc_column width="2/3"][woo_carousel visible_items="3" categ_select="0" include="0" timeout="4000" orderby="price"][/vc_column][vc_column width="1/3" css=".vc_custom_1478788176058{padding-top: 15% !important;padding-left: 15% !important;}"][vc_custom_heading text="T-Shirts On Sale" font_container="tag:h2|font_size:22|text_align:left|color:%23282828|line_height:1.3" google_fonts="font_family:Montserrat%3Aregular%2C700|font_style:700%20bold%20regular%3A700%3Anormal"][vc_column_text css=".vc_custom_1478704158807{padding-bottom: 20px !important;}"]
<p style="text-align: left;">Check out the On Sale products in T-Shirts category. This carousel is updated based on Products On Sale in the T-Shirts category.</p>

[/vc_column_text][vc_button title="View All T-Shirts" color="custom" custom_text_color="#232323" custom_color="rgba(255,255,255,0.01)" custom_border_color="rgba(0,0,0,0.67)" custom_color_hover="#232323" custom_border_color_hover="#232323" i_align="right_icon" icon_fontawesome="fa fa-long-arrow-right" align="left" add_icon="true" href="http://rockythemes.com/creativo-shop/product-category/t-shirts/"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( '5 Column Images Carousel', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['posts_grid'];
$data['custom_class'] = 'main content shopkeeper';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/image_carousel.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1479161412657{border-top-width: 1px !important;padding-top: 60px !important;padding-bottom: 60px !important;border-top-color: #f2f2f2 !important;border-top-style: solid !important;}"][vc_column][vc_carousel2 img_size="full" visible_items="5" timeout="3500" navigation="no" onclick="link_no"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );


$data = array();
$data['name'] = __( '4 Column Widgetized Sidebars', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['posts_grid'];
$data['custom_class'] = 'main content shopkeeper';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/4-col-sidebar.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row][vc_column width="1/4"][vc_widget_sidebar sidebar_id="sidebar-1"][/vc_column][vc_column width="1/4"][vc_widget_sidebar sidebar_id="woocommerce-sidebar"][/vc_column][vc_column width="1/4"][vc_widget_sidebar sidebar_id="sidebar-2"][/vc_column][vc_column width="1/4"][vc_widget_sidebar sidebar_id="sidebar-3"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( '2 Col Content + Image', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['posts_grid'];
$data['custom_class'] = 'main content shopkeeper';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/2-col-content-image.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row layout="wide" eq_height="yes"][vc_column width="1/2" css=".vc_custom_1479166684889{padding-top: 20% !important;padding-right: 20% !important;padding-bottom: 20% !important;padding-left: 20% !important;background-color: #f9f9f9 !important;}"][vc_custom_heading text="SUPER SELL OUTS" font_container="tag:h2|font_size:22|text_align:left|color:%23212121|line_height:1" google_fonts="font_family:Open%20Sans%3A300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic|font_style:600%20bold%20regular%3A600%3Anormal"][vc_custom_heading text="20% OFF ON SHOES" font_container="tag:h2|font_size:38|text_align:left|color:%23212121|line_height:1" google_fonts="font_family:Open%20Sans%3A300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic|font_style:700%20bold%20regular%3A700%3Anormal"][vc_column_text css=".vc_custom_1479139614905{padding-top: 20px !important;padding-bottom: 30px !important;}"]
<h5>Check out the latest hipster clothing recommendatoin from the best experts. Search, find and combine the best clothing pieces for your style. It doesn’t get any better than this.</h5>
[/vc_column_text][vc_button title="BEGIN SHOPPING" size="large" color="custom" custom_color="#232323" custom_border_color="#232323" align="left"][/vc_column][vc_column width="1/2" css=".vc_custom_1479158383942{padding-top: 20% !important;padding-bottom: 20% !important;background-image: url(http://rockythemes.com/creativo-shop/wp-content/uploads/2016/11/bright-shoe-store-right.jpg?id=334) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( '2 Col Image + Content +Countdown', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['posts_grid'];
$data['custom_class'] = 'main content shopkeeper';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/2-col-content-image2.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row layout="wide" eq_height="yes"][vc_column width="1/2" css=".vc_custom_1479162185164{padding-top: 20% !important;padding-bottom: 20% !important;background-image: url(http://rockythemes.com/creativo-shop/wp-content/uploads/2016/11/bright-shoe-store.jpg?id=335) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" offset="vc_hidden-xs"][/vc_column][vc_column width="1/2" css=".vc_custom_1479166702541{padding-top: 20% !important;padding-right: 20% !important;padding-bottom: 20% !important;padding-left: 20% !important;background-color: #f9f9f9 !important;}"][vc_custom_heading text="SHOES ON SELL" font_container="tag:h2|font_size:22|text_align:left|color:%23212121|line_height:1" google_fonts="font_family:Open%20Sans%3A300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic|font_style:600%20bold%20regular%3A600%3Anormal"][vc_custom_heading text="-40% FEMALE SHOES" font_container="tag:h2|font_size:38|text_align:left|color:%23212121|line_height:1" google_fonts="font_family:Open%20Sans%3A300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic|font_style:700%20bold%20regular%3A700%3Anormal"][vc_column_text css=".vc_custom_1479139925618{padding-top: 20px !important;padding-bottom: 40px !important;}"]
<h5>Check out the latest hipster clothing recommendatoin from the best experts. Search, find and combine the best clothing pieces for your style. It doesn’t get any better than this.</h5>
[/vc_column_text][countdown_el count_date="12/31/2018 12:00:00" count_offset="-12" count_style="custom" count_font_size="30px" count_font_color="#ffffff" count_details_font_color="#ffffff" border="0px" count_bg="#2d2d2d" count_margin="1px" count_align="left" count_width="450px"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Products on Sale', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['posts_grid'];
$data['custom_class'] = 'main content shopkeeper';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/products_grid.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1479164968167{padding-top: 100px !important;padding-bottom: 60px !important;}"][vc_column][vc_custom_heading text="LOWEST PRICE" font_container="tag:h2|font_size:22|text_align:left|color:%23212121|line_height:1" google_fonts="font_family:Open%20Sans%3A300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic|font_style:600%20bold%20regular%3A600%3Anormal"][vc_custom_heading text="PRODUCTS ON SALE" font_container="tag:h2|font_size:38|text_align:left|color:%23212121|line_height:1" google_fonts="font_family:Open%20Sans%3A300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic|font_style:700%20bold%20regular%3A700%3Anormal" css=".vc_custom_1479164531726{padding-bottom: 40px !important;}"][sale_products per_page="12" columns="4" orderby="" order=""][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Products Categories', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['posts_grid'];
$data['custom_class'] = 'main content shopkeeper';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/product_categories.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1479162651239{border-top-width: 1px !important;border-bottom-width: 1px !important;padding-top: 100px !important;padding-bottom: 80px !important;background-color: #f7f7f7 !important;border-top-color: #f2f2f2 !important;border-top-style: solid !important;border-bottom-color: #f2f2f2 !important;border-bottom-style: solid !important;}"][vc_column][vc_custom_heading text="SHOP BY" font_container="tag:h2|font_size:22|text_align:left|color:%23212121|line_height:1" google_fonts="font_family:Open%20Sans%3A300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic|font_style:600%20bold%20regular%3A600%3Anormal"][vc_custom_heading text="CATEGORIES" font_container="tag:h2|font_size:38|text_align:left|color:%23212121|line_height:1" google_fonts="font_family:Open%20Sans%3A300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic|font_style:700%20bold%20regular%3A700%3Anormal" css=".vc_custom_1479163274658{padding-bottom: 40px !important;}"][product_categories orderby="" order="" columns="3" ids=""][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );


$data = array();
$data['name'] = __( 'Content +Image', 'js_composer' );
$data['weight']     = 7; // Weight of your template in the template list
$data['cat_display_name'] = $cat_display_names['testimonials'];
$data['custom_class'] = 'main content agency';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/image_text_9.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row eq_height="yes" css=".vc_custom_1444429656262{padding-top: 100px !important;padding-bottom: 60px !important;}"][vc_column width="1/2" el_alignment="middle" css=".vc_custom_1444429682067{padding-right: 60px !important;}"][vc_custom_heading text="Ultimate WordPress Theme" font_container="tag:h2|font_size:32px|text_align:left|color:%233f3f3f|line_height:1.3" google_fonts="font_family:Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900|font_style:600%20bold%20regular%3A600%3Anormal"][vc_custom_heading text="Build your website today with Creativo" font_container="tag:h3|font_size:16px|text_align:left|color:%233f3f3f|line_height:1" google_fonts="font_family:Lora%3Aregular%2Citalic%2C700%2C700italic|font_style:400%20italic%3A400%3Aitalic"][vc_separator_2 color_line="#666666" separator_position="left_sep" padding_top="10" padding_bottom="30"][vc_column_text]This is a Text Block element which you can easily edit by using the Front End or the Back End Visual Composer. Just one click and you can start adding/changing the current content. This is a Text Block element which you can easily edit by using the Front End or the Back End Visual Composer. Just one click and you can start adding/changing the current content.[/vc_column_text][vc_separator style="blank" padding_top="15" padding_bottom="15"][vc_button title="Purchase Creativo" target="_blank" size="large" color="custom" custom_text_color="#f4f4f4" custom_color="#303030" custom_border_color="#303030" custom_text_color_hover="#303030" custom_color_hover="#fcfcfc" custom_border_color_hover="#3d3d3d" icon_type="openiconic" align="left" add_icon="true" icon_openiconic="vc-oi vc-oi-heart-empty" href="https://www.mojomarketplace.com/item/creativo-5-0-ultra-responsive-multipurpose-wp-theme"][/vc_column][vc_column width="1/2"][vc_single_image img_size="full"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Title +3 Columns Content', 'js_composer' );
$data['weight']     = 7; // Weight of your template in the template list
$data['cat_display_name'] = $cat_display_names['testimonials'];
$data['custom_class'] = 'main content agency';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/content_text6.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1444396130869{padding-top: 50px !important;padding-bottom: 50px !important;background-color: #5bc98c !important;}"][vc_column][vc_custom_heading text="Awesome Features" font_container="tag:h2|font_size:35|text_align:center|color:%23ffffff|line_height:1.3" google_fonts="font_family:Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900|font_style:400%20regular%3A400%3Anormal" css_animation="appear"][vc_custom_heading text="We are always working hard to integrate the best technologies in our themes." font_container="tag:h2|font_size:16|text_align:center|color:%23ffffff|line_height:1" google_fonts="font_family:Lora%3Aregular%2Citalic%2C700%2C700italic|font_style:400%20italic%3A400%3Aitalic" css_animation="bottom-to-top" delay="300"][/vc_column][/vc_row][vc_row][vc_column][section_separator size="ss_medium" border_color="#5bc98c" sep_bg_color="#5bc98c"][/vc_column][/vc_row][vc_row layout="wide" eq_height="yes" css=".vc_custom_1444393803954{background-color: #f7f7f7 !important;}"][vc_column width="1/3" el_alignment="middle" css=".vc_custom_1444394563442{border-right-width: 1px !important;padding-top: 70px !important;padding-right: 40px !important;padding-bottom: 60px !important;padding-left: 40px !important;border-right-color: #e8e8e8 !important;border-right-style: solid !important;border-radius: 1px !important;}"][vc_custom_heading text="01" font_container="tag:h3|font_size:60px|text_align:center|color:%233f3f3f|line_height:1" google_fonts="font_family:Lora%3Aregular%2Citalic%2C700%2C700italic|font_style:700%20bold%20regular%3A700%3Anormal"][vc_separator_2 color_line="#606060" padding_top="10" padding_bottom="30"][vc_custom_heading text="FREE SUPPORT" font_container="tag:h2|font_size:22px|text_align:center|color:%23606060|line_height:2" google_fonts="font_family:Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900|font_style:600%20bold%20regular%3A600%3Anormal" css_animation="left-to-right"][vc_column_text css_animation="left-to-right"]
<p style="text-align: center;">This is a Text Block element which you can easily edit by using the Front End or the Back End Visual Composer. Just one click and you can start adding/changing the current content.</p>
[/vc_column_text][vc_separator style="blank" padding_top="10" padding_bottom="10"][vc_button title="Services" shape="round" size="large" color="custom" custom_text_color="#565656" custom_color="#f4f4f4" custom_border_color="#280b0b" custom_color_hover="#3d3d3d" custom_border_color_hover="#3d3d3d" css_animation="left-to-right"][/vc_column][vc_column width="1/3" css=".vc_custom_1444394571179{border-right-width: 1px !important;padding-top: 70px !important;padding-right: 40px !important;padding-bottom: 60px !important;padding-left: 40px !important;border-right-color: #e8e8e8 !important;border-right-style: solid !important;border-radius: 1px !important;}"][vc_custom_heading text="02" font_container="tag:h3|font_size:60px|text_align:center|color:%233f3f3f|line_height:1" google_fonts="font_family:Lora%3Aregular%2Citalic%2C700%2C700italic|font_style:700%20bold%20regular%3A700%3Anormal"][vc_separator_2 color_line="#666666" padding_top="10" padding_bottom="30"][vc_custom_heading text="BEST PRICING" font_container="tag:h2|font_size:22px|text_align:center|color:%23606060|line_height:2" google_fonts="font_family:Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900|font_style:600%20bold%20regular%3A600%3Anormal" css_animation="bottom-to-top" delay="300"][vc_column_text css_animation="bottom-to-top" delay="300"]
<p style="text-align: center;">This is a Text Block element which you can easily edit by using the Front End or the Back End Visual Composer. Just one click and you can start adding/changing the current content.</p>
[/vc_column_text][vc_separator style="blank" padding_top="10" padding_bottom="10"][vc_button title="Pricing" shape="round" size="large" color="custom" custom_text_color="#565656" custom_color="#f4f4f4" custom_border_color="#280b0b" custom_color_hover="#3d3d3d" custom_border_color_hover="#3d3d3d" css_animation="bottom-to-top" delay="300"][/vc_column][vc_column width="1/3" css=".vc_custom_1444394579159{padding-top: 70px !important;padding-right: 40px !important;padding-bottom: 60px !important;padding-left: 40px !important;}"][vc_custom_heading text="03" font_container="tag:h3|font_size:60px|text_align:center|color:%233f3f3f|line_height:1" google_fonts="font_family:Lora%3Aregular%2Citalic%2C700%2C700italic|font_style:700%20bold%20regular%3A700%3Anormal"][vc_separator_2 color_line="#666666" padding_top="10" padding_bottom="30"][vc_custom_heading text="GET A QUOTE" font_container="tag:h2|font_size:22px|text_align:center|color:%233f3f3f|line_height:2" google_fonts="font_family:Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900|font_style:600%20bold%20regular%3A600%3Anormal" css_animation="right-to-left" delay="600"][vc_column_text css_animation="right-to-left" delay="600"]
<p style="text-align: center;">This is a Text Block element which you can easily edit by using the Front End or the Back End Visual Composer. Just one click and you can start adding/changing the current content.</p>
[/vc_column_text][vc_separator style="blank" padding_top="10" padding_bottom="10"][vc_button title="Contact" shape="round" size="large" color="custom" custom_text_color="#565656" custom_color="#f4f4f4" custom_border_color="#280b0b" custom_color_hover="#3d3d3d" custom_border_color_hover="#3d3d3d" css_animation="right-to-left" delay="600"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Title + 3 Col Featured Services', 'js_composer' );
$data['weight']     = 7; // Weight of your template in the template list
$data['cat_display_name'] = $cat_display_names['testimonials'];
$data['custom_class'] = 'main content agency';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/content_featured_services.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1444608814785{padding-top: 100px !important;}"][vc_column][vc_custom_heading text="Need More Features?" font_container="tag:h2|font_size:26px|text_align:center|color:%233f3f3f|line_height:1.3" google_fonts="font_family:Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900|font_style:600%20bold%20regular%3A600%3Anormal" css_animation="right-to-left"][vc_custom_heading text="Check our the Featured Services element in action just below." font_container="tag:h3|font_size:16px|text_align:center|color:%233f3f3f|line_height:1" google_fonts="font_family:Lora%3Aregular%2Citalic%2C700%2C700italic|font_style:400%20italic%3A400%3Aitalic" css_animation="right-to-left" delay="200"][vc_separator_2 color_line="#666666" padding_top="10" padding_bottom="30"][/vc_column][/vc_row][vc_row layout="normal_no_spaces" css=".vc_custom_1444517871256{padding-top: 30px !important;padding-bottom: 0px !important;}"][vc_column width="1/3" css=".vc_custom_1444519286288{border-top-width: 0px !important;border-right-width: 1px !important;border-bottom-width: 1px !important;border-left-width: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;border-left-color: #eaeaea !important;border-left-style: solid !important;border-right-color: #eaeaea !important;border-right-style: solid !important;border-top-color: #eaeaea !important;border-top-style: solid !important;border-bottom-color: #eaeaea !important;border-bottom-style: solid !important;}"][vc_service_box title="Web Design" url_area="entire_element" white_circle="no"  style="custom" fs_title_color="#666666" fs_link_color="#65c18b" fs_title_color_hover="#ffffff" fs_desc_color_hover="#ffffff" fs_link_color_hover="#ffffff" fs_bg_color_hover="rgba(139,195,74,0.6)" view_more="true" css_animation="appear" href="j"]Add your text for the featured services here and remember you can change it with one click.[/vc_service_box][/vc_column][vc_column width="1/3" css=".vc_custom_1444519299125{border-right-width: 1px !important;border-bottom-width: 1px !important;border-right-color: #eaeaea !important;border-right-style: solid !important;border-bottom-color: #eaeaea !important;border-bottom-style: solid !important;border-radius: 1px !important;}"][vc_service_box title="Photography" url_area="entire_element" white_circle="no"  style="custom" fs_title_color="#666666" fs_link_color="#65c18b" fs_title_color_hover="#ffffff" fs_desc_color_hover="#ffffff" fs_link_color_hover="#ffffff" fs_bg_color_hover="rgba(229,57,53,0.51)" view_more="true" css_animation="appear" href="#" delay="300"]Add your text for the featured services here and remember you can change it with one click.[/vc_service_box][/vc_column][vc_column width="1/3" css=".vc_custom_1444519327845{border-bottom-width: 1px !important;padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;border-bottom-color: #eaeaea !important;border-bottom-style: solid !important;border-radius: 1px !important;}"][vc_service_box title="Legal Advice" url_area="entire_element" white_circle="no"  style="custom" fs_title_color="#666666" fs_link_color="#65c18b" fs_title_color_hover="#ffffff" fs_desc_color_hover="#ffffff" fs_link_color_hover="#ffffff" fs_bg_color_hover="rgba(255,152,0,0.51)" view_more="true" css_animation="appear" href="#" delay="600"]Add your text for the featured services here and remember you can change it with one click.[/vc_service_box][/vc_column][/vc_row][vc_row css=".vc_custom_1444608824411{margin-top: 0px !important;padding-top: 0px !important;padding-bottom: 100px !important;}"][vc_column width="1/3" css=".vc_custom_1444520282589{border-right-width: 1px !important;padding-right: 0px !important;padding-left: 0px !important;border-right-color: #eaeaea !important;border-right-style: solid !important;}"][vc_service_box title="Fast Shipping" url_area="entire_element" white_circle="no"  style="custom" fs_title_color="#666666" fs_link_color="#65c18b" fs_title_color_hover="#ffffff" fs_desc_color_hover="#ffffff" fs_link_color_hover="#ffffff" fs_bg_color_hover="rgba(149,117,205,0.49)" view_more="true" css_animation="appear" href="#"]Add your text for the featured services here and remember you can change it with one click.[/vc_service_box][/vc_column][vc_column width="1/3" css=".vc_custom_1444520290590{border-right-width: 1px !important;padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;border-right-color: #eaeaea !important;border-right-style: solid !important;border-radius: 1px !important;}"][vc_service_box title="Performance" url_area="entire_element" white_circle="no"  style="custom" fs_title_color="#444444" fs_link_color="#65c18b" fs_title_color_hover="#ffffff" fs_desc_color_hover="#ffffff" fs_link_color_hover="#ffffff" fs_bg_color_hover="rgba(0,188,212,0.52)" view_more="true" css_animation="appear" href="#" delay="300"]Add your text for the featured services here and remember you can change it with one click.[/vc_service_box][/vc_column][vc_column width="1/3" css=".vc_custom_1444520297608{padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;border-radius: 1px !important;}"][vc_service_box title="Responsiveness" url_area="entire_element" white_circle="no"  style="custom" fs_title_color="#444444" fs_link_color="#65c18b" fs_title_color_hover="#ffffff" fs_desc_color_hover="#ffffff" fs_link_color_hover="#ffffff" fs_bg_color_hover="rgba(55,122,153,0.5)" view_more="true" css_animation="appear" href="#" delay="600"]Add your text for the featured services here and remember you can change it with one click.[/vc_service_box][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( '3 Columns Images + Text', 'js_composer' );
$data['weight']     = 7; // Weight of your template in the template list
$data['cat_display_name'] = $cat_display_names['testimonials'];
$data['custom_class'] = 'main content agency';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/content_text7.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1445385106412{padding-top: 80px !important;padding-bottom: 80px !important;}"][vc_column width="1/3"][vc_single_image  img_size="full"][vc_separator style="blank" padding_top="15" padding_bottom="15"][vc_custom_heading text="Web Design" font_container="tag:h2|font_size:20|text_align:left|color:%23474747|line_height:1.3" google_fonts="font_family:Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900|font_style:600%20bold%20regular%3A600%3Anormal"][vc_custom_heading text="Reliable, Fast and Beautiful" font_container="tag:h2|font_size:16|text_align:left|color:%23474747|line_height:1.3" google_fonts="font_family:Lora%3Aregular%2Citalic%2C700%2C700italic|font_style:400%20italic%3A400%3Aitalic"][vc_separator style="blank" padding_top="10" padding_bottom="10"][vc_column_text]I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.[/vc_column_text][/vc_column][vc_column width="1/3"][vc_single_image  img_size="full"][vc_separator style="blank" padding_top="15" padding_bottom="15"][vc_custom_heading text="Programming" font_container="tag:h2|font_size:20|text_align:left|color:%23474747|line_height:1.3" google_fonts="font_family:Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900|font_style:600%20bold%20regular%3A600%3Anormal"][vc_custom_heading text="Clean coding and bug free" font_container="tag:h2|font_size:16|text_align:left|color:%23474747|line_height:1.3" google_fonts="font_family:Lora%3Aregular%2Citalic%2C700%2C700italic|font_style:400%20italic%3A400%3Aitalic"][vc_separator style="blank" padding_top="10" padding_bottom="10"][vc_column_text]I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.[/vc_column_text][/vc_column][vc_column width="1/3"][vc_single_image  img_size="full"][vc_separator style="blank" padding_top="15" padding_bottom="15"][vc_custom_heading text="App Creation" font_container="tag:h2|font_size:20|text_align:left|color:%23474747|line_height:1.3" google_fonts="font_family:Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900|font_style:600%20bold%20regular%3A600%3Anormal"][vc_custom_heading text="iOS and Android Compatible" font_container="tag:h2|font_size:16|text_align:left|color:%23474747|line_height:1.3" google_fonts="font_family:Lora%3Aregular%2Citalic%2C700%2C700italic|font_style:400%20italic%3A400%3Aitalic"][vc_separator style="blank" padding_top="10" padding_bottom="10"][vc_column_text]I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.[/vc_column_text][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( '3 Columns Image + Icon/Image Box', 'js_composer' );
$data['weight']     = 7; // Weight of your template in the template list
$data['cat_display_name'] = $cat_display_names['testimonials'];
$data['custom_class'] = 'main content icon_image_box agency';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/content_text8.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1444946600768{padding-top: 80px !important;background-color: #f9f9f9 !important;}"][vc_column][vc_custom_heading text="Services Included " font_container="tag:h2|font_size:26|text_align:center|color:%23474747|line_height:1.3" google_fonts="font_family:Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900|font_style:600%20bold%20regular%3A600%3Anormal"][vc_custom_heading text="Start your business by selecting the services you want to use below." font_container="tag:h2|font_size:16|text_align:center|color:%23474747|line_height:1.3" google_fonts="font_family:Lora%3Aregular%2Citalic%2C700%2C700italic|font_style:400%20italic%3A400%3Aitalic"][vc_separator_2 color_line="#444444" padding_top="20" padding_bottom="40"][/vc_column][/vc_row][vc_row css=".vc_custom_1444946581698{padding-bottom: 80px !important;background-color: #f9f9f9 !important;}"][vc_column offset="vc_col-lg-4 vc_col-md-12"][vc_single_image img_size="full" alignment="center"][/vc_column][vc_column width="1/2" css=".vc_custom_1445278786555{padding-top: 60px !important;}" offset="vc_col-lg-4 vc_col-md-6"][vc_product_feature title="RESPONSIVE DESIGN" title_color="#444444" icon_fontawesome="fa fa-desktop" icon_color="#383838"]Add your own content for this product feature with just a few clicks.[/vc_product_feature][vc_separator style="blank" padding_top="" padding_bottom="20"][vc_product_feature title="PREMIUM SLIDERS" title_color="#444444" icon_type="openiconic" icon_color="#383838" icon_openiconic="vc-oi vc-oi-layers"]Add your own content for this product feature with just a few clicks.[/vc_product_feature][vc_separator style="blank" padding_bottom="20"][vc_product_feature title="UNLIMITED COLORS" title_color="#444444" icon_fontawesome="fa fa-eye" icon_color="#383838"]Add your own content for this product feature with just a few clicks.[/vc_product_feature][/vc_column][vc_column width="1/2" css=".vc_custom_1445278798084{padding-top: 60px !important;}" offset="vc_col-lg-4 vc_col-md-6"][vc_product_feature title="VISUAL COMPOSER" title_color="#444444" icon_type="openiconic" icon_color="#383838" icon_openiconic="vc-oi vc-oi-equalizer"]Add your own content for this product feature with just a few clicks.[/vc_product_feature][vc_separator style="blank" padding_top="" padding_bottom="20"][vc_product_feature title="MEGAMENU READY" title_color="#444444" icon_type="openiconic" icon_color="#383838" icon_openiconic="vc-oi vc-oi-list"]Add your own content for this product feature with just a few clicks.[/vc_product_feature][vc_separator style="blank" padding_bottom="20"][vc_product_feature title="PARALLAX BACKGROUND" title_color="#444444" icon_type="openiconic" icon_color="#383838" icon_openiconic="vc-oi vc-oi-aperture"]Add your own content for this product feature with just a few clicks.[/vc_product_feature][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( '2 Columns Text + Round Chart', 'js_composer' );
$data['weight']     = 7; // Weight of your template in the template list
$data['cat_display_name'] = $cat_display_names['testimonials'];
$data['custom_class'] = 'main content agency';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/content_text9.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1444946955200{padding-top: 80px !important;padding-bottom: 80px !important;}"][vc_column width="2/3"][vc_custom_heading text="Custom Analytics to help your customers" font_container="tag:h2|font_size:26|text_align:left|color:%23474747|line_height:1.3" google_fonts="font_family:Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900|font_style:600%20bold%20regular%3A600%3Anormal"][vc_custom_heading text="Use our custom user interface to track down all the info you need to generate a higher revenue." font_container="tag:h2|font_size:16|text_align:left|color:%23474747|line_height:1.3" google_fonts="font_family:Lora%3Aregular%2Citalic%2C700%2C700italic|font_style:400%20italic%3A400%3Aitalic"][vc_separator_2 color_line="#444444" separator_position="left_sep" padding_top="20" padding_bottom="40"][vc_column_text]I am text block. Click edit button to change this text. Aspernatur, quo, quos nisi dolorum aperiam fugiat deserunt velit rerum laudantium cum magnam excepturi quod, fuga architecto provident, cupiditate delectus voluptate eaque! Sit neque ut eum, voluptatibus odit cum dolorum ipsa voluptates inventore cumque a.

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti vero, animi suscipit id facere officia. Aspernatur, quo, quos nisi dolorum aperiam fugiat deserunt velit rerum laudantium cum magnam excepturi quod, fuga architecto provident, cupiditate delectus voluptate eaque! Sit neque ut eum, voluptatibus odit cum dolorum ipsa voluptates inventore cumque a.[/vc_column_text][/vc_column][vc_column width="1/3" css=".vc_custom_1507735325162{padding-top: 60px !important;padding-left: 40px !important;}"][vc_round_chart type="doughnut" stroke_width="2" values="%5B%7B%22title%22%3A%22Web%20Design%22%2C%22value%22%3A%2220%22%2C%22color%22%3A%22turquoise%22%7D%2C%7B%22title%22%3A%22Marketing%22%2C%22value%22%3A%2210%22%2C%22color%22%3A%22pink%22%7D%2C%7B%22title%22%3A%22Programming%22%2C%22value%22%3A%2220%22%2C%22color%22%3A%22vista-blue%22%2C%22custom_color%22%3A%22%234cadc9%22%7D%2C%7B%22title%22%3A%22App%20Develop%22%2C%22value%22%3A%2210%22%2C%22color%22%3A%22purple%22%2C%22custom_color%22%3A%22%23b97ebb%22%7D%2C%7B%22title%22%3A%22Photography%22%2C%22value%22%3A%2215%22%2C%22color%22%3A%22mulled-wine%22%2C%22custom_color%22%3A%22%23f7be68%22%7D%2C%7B%22title%22%3A%22SEO%22%2C%22value%22%3A%2215%22%2C%22color%22%3A%22orange%22%2C%22custom_color%22%3A%22%23ff675b%22%7D%5D"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( '2 Columns Line Chart + Text', 'js_composer' );
$data['weight']     = 7; // Weight of your template in the template list
$data['cat_display_name'] = $cat_display_names['testimonials'];
$data['custom_class'] = 'main content agency';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/content_text10.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1444946209426{padding-top: 80px !important;padding-bottom: 80px !important;background-color: #f9f9f9 !important;}"][vc_column width="1/3" css=".vc_custom_1507735362928{padding-right: 20px !important;}"][vc_line_chart type="line" style="modern" values="%5B%7B%22title%22%3A%22Sales%22%2C%22y_values%22%3A%2210%3B%2015%3B%2020%3B%2025%3B%2027%3B%2025%3B%2023%3B%2025%22%2C%22color%22%3A%22turquoise%22%2C%22custom_color%22%3A%22%2340d19c%22%7D%2C%7B%22title%22%3A%22Profit%22%2C%22y_values%22%3A%2225%3B%2018%3B%2016%3B%2017%3B%2020%3B%2025%3B%2030%3B%2035%22%2C%22color%22%3A%22chino%22%2C%22custom_color%22%3A%22%23e5b020%22%7D%5D"][/vc_column][vc_column width="2/3"][vc_custom_heading text="Real time reports for better stats" font_container="tag:h2|font_size:26|text_align:left|color:%23474747|line_height:1.3" google_fonts="font_family:Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900|font_style:600%20bold%20regular%3A600%3Anormal"][vc_custom_heading text="The element you see on the right is a Line Graph element. Customize it the way you want." font_container="tag:h2|font_size:16|text_align:left|color:%23474747|line_height:1.3" google_fonts="font_family:Lora%3Aregular%2Citalic%2C700%2C700italic|font_style:400%20italic%3A400%3Aitalic"][vc_separator_2 color_line="#444444" separator_position="left_sep" padding_top="20" padding_bottom="40"][vc_column_text]Aspernatur, quo, quos nisi dolorum aperiam fugiat deserunt velit rerum laudantium cum magnam excepturi quod, fuga architecto provident, cupiditate delectus voluptate eaque! Sit neque ut eum, voluptatibus odit cum dolorum ipsa voluptates inventore cumque a.

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti vero, animi suscipit id facere officia. Aspernatur, quo, quos nisi dolorum aperiam fugiat deserunt velit rerum laudantium cum magnam excepturi quod, fuga architecto provident, cupiditate delectus voluptate eaque! Sit neque ut eum, voluptatibus odit cum dolorum ipsa voluptates inventore cumque a.[/vc_column_text][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( '3 Columns Title + Text', 'js_composer' );
$data['weight']     = 7; // Weight of your template in the template list
$data['cat_display_name'] = $cat_display_names['testimonials'];
$data['custom_class'] = 'main content agency';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/content_text11.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1444739170809{padding-top: 80px !important;padding-bottom: 80px !important;}"][vc_column width="1/3"][vc_custom_heading text="Programs" font_container="tag:h2|font_size:26|text_align:left|color:%23444444|line_height:1.2" google_fonts="font_family:Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900|font_style:600%20bold%20regular%3A600%3Anormal"][vc_custom_heading text="Everything about our services" font_container="tag:h2|font_size:16|text_align:left|color:%23444444|line_height:1" google_fonts="font_family:Lora%3Aregular%2Citalic%2C700%2C700italic|font_style:400%20italic%3A400%3Aitalic"][vc_separator_2 color_line="#444444" separator_position="left_sep" padding_top="20" padding_bottom="25"][vc_column_text]Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.[/vc_column_text][/vc_column][vc_column width="1/3"][vc_custom_heading text="Philisophy" font_container="tag:h2|font_size:26|text_align:left|color:%23444444|line_height:1.2" google_fonts="font_family:Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900|font_style:600%20bold%20regular%3A600%3Anormal"][vc_custom_heading text="Our philosophy explained" font_container="tag:h2|font_size:16|text_align:left|color:%23444444|line_height:1" google_fonts="font_family:Lora%3Aregular%2Citalic%2C700%2C700italic|font_style:400%20italic%3A400%3Aitalic"][vc_separator_2 color_line="#444444" separator_position="left_sep" padding_top="20" padding_bottom="25"][vc_column_text]Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.[/vc_column_text][/vc_column][vc_column width="1/3"][vc_custom_heading text="Offers" font_container="tag:h2|font_size:26|text_align:left|color:%23444444|line_height:1.2" google_fonts="font_family:Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900|font_style:600%20bold%20regular%3A600%3Anormal"][vc_custom_heading text="See our current promotions" font_container="tag:h2|font_size:16|text_align:left|color:%23444444|line_height:1" google_fonts="font_family:Lora%3Aregular%2Citalic%2C700%2C700italic|font_style:400%20italic%3A400%3Aitalic"][vc_separator_2 color_line="#444444" separator_position="left_sep" padding_top="20" padding_bottom="25"][vc_column_text]Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.[/vc_column_text][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( '4 Columns Pie Charts', 'js_composer' );
$data['weight']     = 7; // Weight of your template in the template list
$data['cat_display_name'] = $cat_display_names['testimonials'];
$data['custom_class'] = 'main content agency';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/pie_chart.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1444833281763{padding-top: 80px !important;padding-bottom: 40px !important;background-color: #f9f9f9 !important;}"][vc_column][vc_custom_heading text="Services We Provide" font_container="tag:h2|font_size:26|text_align:center|color:%23444444" google_fonts="font_family:Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900|font_style:600%20bold%20regular%3A600%3Anormal"][vc_custom_heading text="Want to hear more about our best services? Read below this line!" font_container="tag:h2|font_size:16|text_align:center|color:%23444444" google_fonts="font_family:Lora%3Aregular%2Citalic%2C700%2C700italic|font_style:400%20italic%3A400%3Aitalic"][vc_separator_2 color_line="#444444" padding_top="10" padding_bottom="20"][/vc_column][/vc_row][vc_row css=".vc_custom_1445385725132{padding-bottom: 40px !important;background-color: #f9f9f9 !important;}"][vc_column width="1/4" css=".vc_custom_1445385675204{padding-bottom: 40px !important;}"][vc_pie value="95" color="custom" units="%" custom_color="#5bc98c"][vc_separator style="blank" color="#e0e0e0" padding_top="20" padding_bottom="10"][vc_custom_heading text="WordPress" font_container="tag:h2|font_size:20|text_align:center|color:%23444444" google_fonts="font_family:Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900|font_style:600%20bold%20regular%3A600%3Anormal"][vc_column_text]
<p style="text-align: center;">I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
[/vc_column_text][/vc_column][vc_column width="1/4" css=".vc_custom_1445385693823{padding-bottom: 40px !important;}"][vc_pie value="70" color="custom" units="%" custom_color="#5198b5"][vc_separator style="blank" color="#e0e0e0" padding_top="20" padding_bottom="10"][vc_custom_heading text="Graphics" font_container="tag:h2|font_size:20|text_align:center|color:%23444444" google_fonts="font_family:Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900|font_style:600%20bold%20regular%3A600%3Anormal"][vc_column_text]
<p style="text-align: center;">I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
[/vc_column_text][/vc_column][vc_column width="1/4" css=".vc_custom_1445385706584{padding-bottom: 40px !important;}"][vc_pie value="85" color="custom" units="%" custom_color="#ce5c5c"][vc_separator style="blank" color="#e0e0e0" padding_top="20" padding_bottom="10"][vc_custom_heading text="Development" font_container="tag:h2|font_size:20|text_align:center|color:%23444444" google_fonts="font_family:Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900|font_style:600%20bold%20regular%3A600%3Anormal"][vc_column_text]
<p style="text-align: center;">I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
[/vc_column_text][/vc_column][vc_column width="1/4" css=".vc_custom_1445385715817{padding-bottom: 40px !important;}"][vc_pie value="75" color="custom" units="%" custom_color="#eadb69"][vc_separator style="blank" color="#e0e0e0" padding_top="20" padding_bottom="10"][vc_custom_heading text="Design" font_container="tag:h2|font_size:20|text_align:center|color:%23444444" google_fonts="font_family:Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900|font_style:600%20bold%20regular%3A600%3Anormal"][vc_column_text]
<p style="text-align: center;">I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
[/vc_column_text][/vc_column][/vc_row]
CONTENT;


/* END Content */
/* ================================================== */

/* Counters */
/* ================================================== */

$data = array();
$data['name'] = __( 'Counters', 'js_composer' );
$data['weight']     = 7; // Weight of your template in the template list
$data['cat_display_name'] = $cat_display_names['testimonials'];
$data['custom_class'] = 'default counters';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/counters_1.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1426546498796{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column width="1/4"][vc_counter position="center" icon_fontawesome="fa fa-coffee" icon_color="#31aae2" icon_size="50" data_to="1925" data_speed="1000" suffix="+"]Coffees Consumed[/vc_counter][/vc_column][vc_column width="1/4"][vc_counter position="center" icon_fontawesome="fa fa-check" icon_color="#eb768c" icon_size="50" data_to="2540" data_refresh_interval="100" data_speed="1500" suffix="+"]Projects Completed[/vc_counter][/vc_column][vc_column width="1/4"][vc_counter position="center" icon_fontawesome="fa fa-heart" icon_color="#c183d6" icon_size="50" data_to="17320" data_refresh_interval="100" suffix="+"]Happy Clients[/vc_counter][/vc_column][vc_column width="1/4"][vc_counter position="center" icon_fontawesome="fa fa-code" icon_color="#31aae2" icon_size="50" data_to="4230" data_refresh_interval="100" data_speed="1500" suffix="+"]Lines of Code[/vc_counter][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Title +Counters', 'js_composer' );
$data['weight']     = 7; // Weight of your template in the template list
$data['cat_display_name'] = $cat_display_names['testimonials'];
$data['custom_class'] = 'main counters';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/counters_2.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1486475833382{padding-top: 10% !important;}" section_id="team"][vc_column][vc_custom_heading text="Our Team" font_container="tag:h2|font_size:50ox|text_align:center|color:%2314183c|line_height:60px" use_theme_fonts="yes"][vc_custom_heading text="Since version 6 of Creativo, the Employee element has become more powerful.
You now have more customization options for the Emplyoee element." font_container="tag:h2|font_size:17px|text_align:center|color:%23abacb2|line_height:26px" use_theme_fonts="yes"][/vc_column][/vc_row][vc_row css=".vc_custom_1486476593974{padding-top: 40px !important;}"][vc_column width="1/4"][vc_counter position="center" icon_fontawesome="" data_to="25" data_refresh_interval="3" data_speed="1000" font_size="50" font_color="#14183c" separator="yes" separator_color="#2b7ce6" description_color="#939399"]Countries[/vc_counter][/vc_column][vc_column width="1/4"][vc_counter position="center" icon_fontawesome="" data_to="36" data_refresh_interval="3" data_speed="1500" font_size="50" font_color="#14183c" separator="yes" separator_color="#2b7ce6" description_color="#939399"]Offices[/vc_counter][/vc_column][vc_column width="1/4"][vc_counter position="center" icon_fontawesome="" data_to="574" font_size="50" font_color="#14183c" separator="yes" separator_color="#2b7ce6" description_color="#939399"]Employees[/vc_counter][/vc_column][vc_column width="1/4"][vc_counter position="center" icon_fontawesome="" data_to="147" data_refresh_interval="10" data_speed="2100" font_size="50" font_color="#14183c" separator="yes" separator_color="#2b7ce6" description_color="#939399"]Interns[/vc_counter][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Counters 2', 'js_composer' );
$data['weight']     = 7; // Weight of your template in the template list
$data['cat_display_name'] = $cat_display_names['testimonials'];
$data['custom_class'] = 'innovate counters';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/counters_3.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1492773574661{padding-top: 10% !important;padding-bottom: 10% !important;background-color: #dadee5 !important;}"][vc_column width="1/4"][vc_counter position="center" icon_fontawesome="" icon_size="48" data_to="34" data_refresh_interval="6" font_size="48" font_color="#ffffff" suffix="k" descr_font_size="13px" descr_font_weight="600"]WORKING HOURS[/vc_counter][/vc_column][vc_column width="1/4"][vc_counter position="center" icon_fontawesome="" icon_size="48" data_to="15" data_refresh_interval="6" font_size="48" font_color="#ffffff" suffix="W" descr_font_size="13px" descr_font_weight="600"]ENERGY CONSUMPTION[/vc_counter][/vc_column][vc_column width="1/4"][vc_counter position="center" icon_fontawesome="" icon_size="48" data_to="27" data_refresh_interval="6" font_size="48" font_color="#ffffff" prefix="E" descr_font_size="13px" descr_font_weight="600"]SOCKET COMPATIBLE[/vc_counter][/vc_column][vc_column width="1/4"][vc_counter position="center" icon_fontawesome="" icon_size="48" data_to="23" data_refresh_interval="6" font_size="48" font_color="#ffffff" suffix="cm" descr_font_size="13px" descr_font_weight="600"]DIAMETER[/vc_counter][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Counters 3', 'js_composer' );
$data['weight']     = 7; // Weight of your template in the template list
$data['cat_display_name'] = $cat_display_names['testimonials'];
$data['custom_class'] = 'main counters cafebar';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/counters_4.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row layout="wide" css=".vc_custom_1460216749972{border-top-width: 1px !important;border-bottom-width: 1px !important;background-color:#312f32 !important;padding-top: 80px !important;padding-right: 10% !important;padding-bottom: 80px !important;padding-left: 10% !important;border-top-color: #3f3f3f !important;border-top-style: solid !important;border-bottom-color: #3f3f3f !important;border-bottom-style: solid !important;}"][vc_column width="1/4"][vc_counter position="center" icon_fontawesome="fa fa-child" icon_color="#d0bc9b" icon_size="50" data_to="1250" data_speed="3000" font_size="40" font_color="#f9f9f9" description_color="#ffffff"]DAILY CLIENTS[/vc_counter][/vc_column][vc_column width="1/4"][vc_counter position="center" icon_fontawesome="fa fa-glass" icon_color="#d0bc9b" icon_size="50" data_to="1400" comma_separator="yes" data_speed="3300" font_size="40" font_color="#f9f9f9" description_color="#ffffff"]DRINKS SERVED[/vc_counter][/vc_column][vc_column width="1/4"][vc_counter position="center" icon_fontawesome="fa fa-coffee" icon_color="#d0bc9b" icon_size="50" data_to="1550" comma_separator="yes" data_speed="3600" font_size="40" font_color="#f9f9f9" description_color="#ffffff"]COFFEES MADE[/vc_counter][/vc_column][vc_column width="1/4"][vc_counter position="center" icon_fontawesome="fa fa-heart" icon_color="#d0bc9b" icon_size="50" data_to="9999" comma_separator="yes" data_speed="3900" font_size="40" font_color="#f9f9f9" description_color="#ffffff"]HAPPY CUSTOMERS[/vc_counter][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Title + 4 Columns Counters', 'js_composer' );
$data['weight']     = 7; // Weight of your template in the template list
$data['cat_display_name'] = $cat_display_names['testimonials'];
$data['custom_class'] = 'main counters agency';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/counters_5.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1444608801907{padding-top: 100px !important;}"][vc_column][vc_custom_heading text="Progress by Technology" font_container="tag:h2|font_size:26|text_align:center|color:%233f3f3f|line_height:1.3" google_fonts="font_family:Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900|font_style:600%20bold%20regular%3A600%3Anormal"][vc_custom_heading text="Using a Counter Element to display some nice stats" font_container="tag:h2|font_size:16|text_align:center|line_height:1" google_fonts="font_family:Lora%3Aregular%2Citalic%2C700%2C700italic|font_style:400%20italic%3A400%3Aitalic"][vc_separator_2 color_line="#666666" padding_top="20" padding_bottom="40"][/vc_column][/vc_row][vc_row css=".vc_custom_1444605629074{padding-bottom: 100px !important;}"][vc_column width="1/4"][vc_counter position="center" icon_fontawesome="fa fa-birthday-cake" icon_color="#3cc18c" icon_size="45" suffix=",00"]Optionally you can add a short description text.[/vc_counter][/vc_column][vc_column width="1/4"][vc_counter position="center" icon_fontawesome="fa fa-flask" icon_color="#c4453c" icon_size="45" data_to="1000" data_speed="2400" suffix=",00"]Optionally you can add a short description text.[/vc_counter][/vc_column][vc_column width="1/4"][vc_counter position="center" icon_fontawesome="fa fa-database" icon_color="#3c99c1" icon_size="45" data_to="1200" data_speed="2600" suffix=",00"]Optionally you can add a short description text.[/vc_counter][/vc_column][vc_column width="1/4"][vc_counter position="center" icon_fontawesome="fa fa-lightbulb-o" icon_color="#e8d547" icon_size="45" data_to="1400" data_speed="2600" suffix=",00"]Optionally you can add a short description text.[/vc_counter][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

/* END Counters */
/* ================================================== */

/* Testimonials */
/* ================================================== */

$data = array();
$data['name'] = __( 'Testimonials + Clients', 'js_composer' );
$data['weight']     = 7; // Weight of your template in the template list
$data['cat_display_name'] = $cat_display_names['testimonials'];
$data['custom_class'] = 'default testimonials clients';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/testimonials_clients2.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1499340374613{padding-top: 7% !important;padding-bottom: 7% !important;background-image: url(https://rockythemes.com/creativo/wp-content/uploads/2015/03/girl-test-2.jpg?id=3265) !important;}"][vc_column offset="vc_col-lg-8 vc_col-md-12 vc_col-xs-12"][vc_custom_heading text="CUSTOMERS FEEDBACK" font_container="tag:h2|font_size:30|text_align:center|color:%23353535|line_height:1.5" use_theme_fonts="yes"][vc_separator_2 color_line="#444444" padding_top="20" padding_bottom="30"][vc_testimonials items="3" timeout="3000" navigation="no" font_size="16" font_weight="400" author_font_weight="600" include=""][vc_separator style="blank" color="#4c4c4c" padding_top="20" padding_bottom="40"][vc_clients items="3" visible_items="3" timeout="3000" navigation="no" include=""][/vc_column][vc_column width="1/3" offset="vc_hidden-md vc_hidden-sm vc_hidden-xs"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Testimonials + Clients 2', 'js_composer' );
$data['weight']     = 7; // Weight of your template in the template list
$data['cat_display_name'] = $cat_display_names['testimonials'];
$data['custom_class'] = 'business testimonials clients';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/testimonials_clients.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1498140636163{padding-top: 10% !important;padding-bottom: 10% !important;}"][vc_column 0=""][vc_custom_heading text="Simplify your creation process with the Creativo Theme" font_container="tag:h2|font_size:30px|text_align:center|color:%23252525|line_height:1.3" use_theme_fonts="yes" el_class="font_weight_300" css=".vc_custom_1498141436974{padding-bottom: 20px !important;}"][vc_custom_heading text="Create pixel perfect websites with the best functionality and technologies on the web." font_container="tag:p|font_size:17px|text_align:center|color:%23919191" use_theme_fonts="yes" css=".vc_custom_1498141452205{padding-bottom: 20px !important;}"][vc_row_inner css=".vc_custom_1498141426511{padding-top: 40px !important;}"][vc_column_inner width="1/2"][vc_testimonials test_design="modern" test_style="left" test_images="no" navigation="no" navigation_type="lines" style="custom" custom_color="#636363" testimonial_author="#a0a0a0" testimonial_link="#a0a0a0" author_font_size="12" font_weight="400" author_font_weight="600" include=""][/vc_column_inner][vc_column_inner width="1/2"][vc_carousel2 img_size="" visible_items="3" navigation="no"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Testimonials Slider', 'js_composer' );
$data['weight']     = 7; // Weight of your template in the template list
$data['cat_display_name'] = $cat_display_names['testimonials'];
$data['custom_class'] = 'default testimonials';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/testimonials.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1498477259744{border-top-width: 1px !important;padding-top: 10% !important;padding-bottom: 10% !important;background-color: #fafafa !important;border-top-color: #ededed !important;border-top-style: solid !important;}"][vc_column width="1/6"][/vc_column][vc_column width="4/6"][vc_testimonials items="3" autoplay="no" dots_color="#160000" dots_size="big" style="custom" testimonial_author="#140101" testimonial_link="#8e8e8e" font_size="18" author_font_size="14" font_weight="400" author_font_weight="700" include=""][/vc_column][vc_column width="1/6"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Testimonials Slider 2', 'js_composer' );
$data['weight']     = 7; // Weight of your template in the template list
$data['cat_display_name'] = $cat_display_names['testimonials'];
$data['custom_class'] = 'main testimonials';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/testimonials_slider.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1486383157417{padding-top: 12% !important;padding-bottom: 12% !important;}" section_id="testimonials"][vc_column css=".vc_custom_1486383296923{padding-right: 15% !important;padding-left: 15% !important;}"][vc_testimonials test_design="modern" autoplay="no" navigation_type="lines" dots_color="#2b7ce6" style="custom" custom_color="#14183c" testimonial_author="#abacb2" testimonial_link="#abacb2" font_size="22" author_font_size="14" author_link_font_size="14" font_weight="400" author_font_weight="400" test_desc_font_family="Roboto Condensed" include=""][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Testimonials Simple', 'js_composer' );
$data['weight']     = 7; // Weight of your template in the template list
$data['cat_display_name'] = $cat_display_names['testimonials'];
$data['custom_class'] = 'main testimonials lifecoach';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/testimonials_simple.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1496435090244{padding-top: 8% !important;padding-bottom: 8% !important;}"][vc_column width="1/12"][/vc_column][vc_column width="5/6"][vc_custom_heading text="READ TESTIMONIALS" font_container="tag:h4|font_size:14px|text_align:center|color:%233f3b51" use_theme_fonts="yes" css=".vc_custom_1496360222274{margin-bottom: 0px !important;padding-bottom: 0px !important;}"][vc_testimonials items="1" test_design="modern" type="grid" style="custom" custom_color="#3f3b51" testimonial_author="#a3a1a8" testimonial_link="#a3a1a8" font_size="17" author_font_size="14" author_link_font_size="14" font_weight="400" author_font_weight="400" include=""][/vc_column][vc_column width="1/12"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Testimonials Simple 2', 'js_composer' );
$data['weight']     = 7; // Weight of your template in the template list
$data['cat_display_name'] = $cat_display_names['testimonials'];
$data['custom_class'] = 'main testimonials lifecoach';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/testimonials_simple2.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1496494388955{padding-top: 10% !important;padding-bottom: 10% !important;background-color: #93a3af !important;}"][vc_column width="1/12"][/vc_column][vc_column width="5/6"][vc_testimonials items="1" test_design="modern" type="grid" style="custom" custom_color="#ffffff" testimonial_author="#ffffff" testimonial_link="#ffffff" font_size="17" author_font_size="14" author_link_font_size="14" font_weight="400" author_font_weight="400" include=""][/vc_column][vc_column width="1/12"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Testimonials +Background Image', 'js_composer' );
$data['weight']     = 7; // Weight of your template in the template list
$data['cat_display_name'] = $cat_display_names['testimonials'];
$data['custom_class'] = 'main testimonials lifecoach';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/testimonials_simple3.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1496497429252{padding-top: 10% !important;padding-bottom: 10% !important;background-image: url(https://rockythemes.com/creativo-life/wp-content/uploads/2017/06/testimonials-bg.jpg?id=112) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_testimonials items="1" test_images="no" type="grid" style="custom" custom_color="#ffffff" testimonial_author="#ffffff" testimonial_link="#ffffff" font_size="17" author_font_size="14" author_link_font_size="14" font_weight="400" author_font_weight="400" include=""][/vc_column][vc_column width="1/6"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Testimonials Slider 3', 'js_composer' );
$data['weight']     = 7; // Weight of your template in the template list
$data['cat_display_name'] = $cat_display_names['testimonials'];
$data['custom_class'] = 'main testimonials innovate';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/testimonials_slider2.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1492773072774{padding-top: 10% !important;padding-bottom: 10% !important;}"][vc_column width="1/6"][/vc_column][vc_column width="4/6"][vc_testimonials test_design="modern" timeout="3000" navigation_type="arrows" dots_color="#999999" style="custom" custom_color="#3f3f3f" testimonial_author="#999999" testimonial_link="#999999" font_size="18" author_font_size="12" font_weight="300" author_font_weight="600"][/vc_column][vc_column width="1/6"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Testimonials Slider +Parallax', 'js_composer' );
$data['weight']     = 7; // Weight of your template in the template list
$data['cat_display_name'] = $cat_display_names['testimonials'];
$data['custom_class'] = 'main testimonials cafebar';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/testimonials_parallax.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row parallax="yes" css=".vc_custom_1460216505220{padding-top: 150px !important;padding-bottom: 150px !important;background-image: url(http://rockythemes.com/creativo-cafe/wp-content/uploads/2016/04/testimonials.jpg?id=216) !important;}"][vc_column][vc_custom_heading text="HAPPY CLIENTS" font_container="tag:h2|font_size:40|text_align:center|color:%23ffffff" use_theme_fonts="yes"][vc_custom_heading text="Testimonials from our happy customers" font_container="tag:h2|font_size:20|text_align:center|color:%23d0bc9b" use_theme_fonts="yes"][vc_separator_2 color_line="#d1b181" padding_top="20" padding_bottom="50"][vc_testimonials navigation="no" style="custom" custom_color="#cecece" testimonial_author="#d0bc9b" font_size="16" author_font_size="20" font_weight="300" author_font_weight="600" include=""][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Testimonials Slider 4', 'js_composer' );
$data['weight']     = 7; // Weight of your template in the template list
$data['cat_display_name'] = $cat_display_names['testimonials'];
$data['custom_class'] = 'main testimonials shopkeeper';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/testimonials_slider3.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row parallax="yes" css=".vc_custom_1478701022997{margin-bottom: 60px !important;padding-top: 60px !important;padding-bottom: 60px !important;background-image: url(http://rockythemes.com/creativo-shop/wp-content/uploads/2016/08/testimonial.jpg?id=179) !important;}"][vc_column][vc_custom_heading text="FROM OUR CLIENTS" font_container="tag:h2|font_size:22|text_align:center|color:%23d1d1d1|line_height:1.3" google_fonts="font_family:Montserrat%3Aregular%2C700|font_style:700%20bold%20regular%3A700%3Anormal"][vc_separator_2 color_line="#a5a5a5" padding_top="10" padding_bottom="40"][vc_testimonials autoplay="no" dots_color="#0780bc" dots_size="big" style="custom" custom_color="#e8e8e8" testimonial_author="#ffffff" testimonial_link="#0780bc" font_size="16" author_font_size="12" author_link_font_size="13" font_weight="400" author_font_weight="700" include=""][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Testimonials Slider 5', 'js_composer' );
$data['weight']     = 7; // Weight of your template in the template list
$data['cat_display_name'] = $cat_display_names['testimonials'];
$data['custom_class'] = 'main testimonials agency';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/testimonials_slider4.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row layout="wide" css=".vc_custom_1484831016057{padding-top: 80px !important;padding-right: 100px !important;padding-bottom: 260px !important;padding-left: 100px !important;background-image: url(https://rockythemes.com/creativo-agency/wp-content/uploads/2015/10/thumbs-up-4.jpg?id=30) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_custom_heading text="Customer Testimonials" font_container="tag:h2|font_size:26|text_align:center|color:%23ffffff|line_height:1.3" google_fonts="font_family:Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900|font_style:600%20bold%20regular%3A600%3Anormal"][vc_custom_heading text="First create some Testimonials and then display them." font_container="tag:h2|font_size:16|text_align:center|color:%23ededed|line_height:1" google_fonts="font_family:Lora%3Aregular%2Citalic%2C700%2C700italic|font_style:400%20italic%3A400%3Aitalic"][vc_separator_2 color_line="#ffffff" padding_top="20" padding_bottom="80"][vc_testimonials visible_items="4" items="10" timeout="4000" dots_color="#ffffff" style="custom" custom_color="#ffffff" testimonial_author="#46e28f" testimonial_link="#dbdbdb" font_weight="300" author_font_weight="600" include=""][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

/* End Testimonials */
/* ================================================== */

/* CTA */
/* ================================================== */

$data = array();
$data['name'] = __( 'Call to Action 1', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['clients'];
$data['custom_class'] = 'default cta';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/cta_1.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1498480500212{padding-bottom: 10% !important;}"][vc_column css=".vc_custom_1498480428360{border-top-width: 3px !important;padding-right: 0px !important;padding-left: 0px !important;border-top-color: #4a90e2 !important;border-top-style: solid !important;}"][tagline_box call_text="Creativo is the Ultimate Multi Purpose Theme!" call_text_small="Packing all the latest technologies of the moment: premium sliders, fully responsive, drag and drop builder, advanced theme options and more!" title="Download Now" target="_blank" color="custom" custom_bg_color="#fafafa" custom_inner_padding="30px" custom_title_font_size="26px" custom_description_color="#6d6d6d" custom_description_font_size="16px" custom_description_line_height="28px" button_align="middle" button_border_color="#4a90e2" button_bg_color="#4a90e2" href="https://www.mojomarketplace.com/item/creativo-5-0-ultra-responsive-multipurpose-wp-theme"][/vc_column][/vc_row]w]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Call to Action 2', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['clients'];
$data['custom_class'] = 'main cta';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/cta_2.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1484608849271{padding-top: 100px !important;padding-bottom: 80px !important;}"][vc_column][tagline_box call_text="Our Support Is Fantastic!" call_text_small="We take support seriously. No question is too small, no answer is too short. Whatever issues you may encounter
or you simply wantto improve the functionality of certain sections, you can count on us. " title="Do you need support?" color="custom" custom_inner_padding="0px" custom_title_font_size="22px" custom_title_font_weight="400" custom_description_font_size="14px" custom_description_line_height="24px" button_text_font_size="14px" button_text_font_weight="400" button_text_line_height="28px" button_border_color="#4ee97a" button_bg_color="#4ee97a" button_border_radius="3px" href="#"][vc_separator style="solid" color="#e3e3e5" padding_top="60"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Call to Action 3', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['clients'];
$data['custom_class'] = 'lifecoach cta';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/cta_3.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row eq_height="yes" content_placement="middle" css=".vc_custom_1496359252192{padding-top: 5% !important;padding-bottom: 5% !important;background-image: url(https://rockythemes.com/creativo-life/wp-content/uploads/2017/06/gradient-bg.png?id=39) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column width="7/12"][vc_custom_heading text="20 MINUTES FREE" font_container="tag:h4|font_size:36px|text_align:left|color:%23ffffff" use_theme_fonts="yes" css=".vc_custom_1496359274016{padding-bottom: 10px !important;}"][vc_column_text 0=""]<span style="color: #ffffff; font-size: 17px; line-height: 25px;">Uidnus justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod sempeqd qwdress  sdeas deik deliok.</span>[/vc_column_text][/vc_column][vc_column width="5/12"][vc_button title="Schedule Your First Lesson" color="custom" custom_font_size="14px" custom_line_height="30px" custom_letter_spacing="0px" custom_text_color="#3f3b51" custom_color="#ffffff" custom_border_color="#ffffff" custom_color_hover="#3f3b51" custom_border_color_hover="#3f3b51"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Centered Call to Action', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['clients'];
$data['custom_class'] = 'main cta lifecoach';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/cta_4.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1496496160238{padding-top: 10% !important;padding-bottom: 10% !important;background-image: url(https://rockythemes.com/creativo-life/wp-content/uploads/2017/06/gradient-bg.png?id=39) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_custom_heading text="20 MINUTES FREE" font_container="tag:h2|font_size:36px|text_align:center|color:%23ffffff|line_height:1" use_theme_fonts="yes" css=".vc_custom_1496494000781{padding-bottom: 10px !important;}"][vc_column_text css=".vc_custom_1496494052468{padding-bottom: 20px !important;}"]
<p style="text-align: center; font-size: 17px;"><span style="color: #ffffff;">Uidnus justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod sempeqd qwdress  sdeas deik deliok.</span></p>
[/vc_column_text][vc_button title="CLAIM YOUR FIRST 20 MINUTES" color="custom" custom_font_size="14px" custom_line_height="30px" custom_letter_spacing="0px" custom_text_color="#f8ac9a" custom_color="#ffffff" custom_border_color="#ffffff" custom_color_hover="#3f3b51" custom_border_color_hover="#3f3b51"][/vc_column][vc_column width="1/6"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Icon +Text Call to Action', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['clients'];
$data['custom_class'] = 'main cta cafebar';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/cta_5.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1460073717486{border-top-width: 3px !important;padding-top: 60px !important;padding-bottom: 60px !important;background-color: #363336 !important;border-top-color: #2e2b2e !important;border-top-style: solid !important;}"][vc_column][vc_icon icon_fontawesome="fa fa-glass" color="white" size="lg" align="center"][vc_custom_heading text="WANT TO MAKE A RESERVATION? CALL +555-4466-542" font_container="tag:h3|font_size:25|text_align:center|color:%23ffffff" use_theme_fonts="yes"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

/* End CTA */
/* ================================================== */

/* Clients */
/* ================================================== */

$data = array();
$data['name'] = __( 'Title +Clients', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['clients'];
$data['custom_class'] = 'default clients';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/clients_1.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1498145505679{padding-top: 10% !important;padding-bottom: 10% !important;}"][vc_column 0=""][vc_custom_heading text="Our Satisfied Customers
" font_container="tag:h2|font_size:30px|text_align:center|color:%23353535|line_height:1.3" use_theme_fonts="yes" el_class="font_weight_300" css=".vc_custom_1498145622750{padding-bottom: 40px !important;}"][vc_carousel2 images="2847,2848,2849,2850,2851,2854,2855" img_size="full" visible_items="5"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Title +Clients 2', 'js_composer' );
$data['cat_display_name'] = 'content';
$data['custom_class'] = 'main clients';
$data['weight']     = 5; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/clients_2.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1490002776986{padding-top: 12% !important;padding-bottom: 12% !important;background-image: url(https://rockythemes.com/creativo_wp/wp-content/uploads/2016/11/brands-bg.jpg?id=61) !important;background-position: 0 0 !important;background-repeat: no-repeat !important;}"][vc_column][vc_product_feature title="Brands we've worked together" font_size="22" font_weight="400" title_color="#2b7ce6" icon="60" icon_fontawesome="fa fa-circle" icon_color="#2b7ce6"][/vc_product_feature][vc_row_inner equal_height="yes" content_placement="middle" css=".vc_custom_1490089290747{padding-top: 30px !important;padding-right: 5% !important;padding-left: 5% !important;}"][vc_column_inner width="1/6"][vc_single_image img_size="full" alignment="center" css=".vc_custom_1490089308262{padding-bottom: 40px !important;}"][/vc_column_inner][vc_column_inner width="1/6"][vc_single_image img_size="full" alignment="center" css=".vc_custom_1490089330571{padding-bottom: 40px !important;}"][/vc_column_inner][vc_column_inner width="1/6"][vc_single_image img_size="full" alignment="center" css=".vc_custom_1490089339201{padding-bottom: 40px !important;}"][/vc_column_inner][vc_column_inner width="1/6"][vc_single_image  img_size="full" alignment="center" css=".vc_custom_1490089347761{padding-bottom: 40px !important;}"][/vc_column_inner][vc_column_inner width="1/6"][vc_single_image  img_size="full" alignment="center" css=".vc_custom_1490089356039{padding-bottom: 40px !important;}"][/vc_column_inner][vc_column_inner width="1/6"][vc_single_image img_size="full" alignment="center" css=".vc_custom_1490089367514{padding-bottom: 40px !important;}"][/vc_column_inner][/vc_row_inner][vc_row_inner equal_height="yes" content_placement="middle" css=".vc_custom_1484144583730{padding-right: 5% !important;padding-left: 5% !important;}"][vc_column_inner width="1/6"][vc_single_image  img_size="full" alignment="center" css=".vc_custom_1490089416273{padding-bottom: 40px !important;}"][/vc_column_inner][vc_column_inner width="1/6"][vc_single_image  img_size="full" alignment="center" css=".vc_custom_1490089442801{padding-bottom: 40px !important;}"][/vc_column_inner][vc_column_inner width="1/6"][vc_single_image img_size="full" alignment="center" css=".vc_custom_1490089454843{padding-bottom: 40px !important;}"][/vc_column_inner][vc_column_inner width="1/6"][vc_single_image img_size="full" alignment="center" css=".vc_custom_1490089467335{padding-bottom: 40px !important;}"][/vc_column_inner][vc_column_inner width="1/6"][vc_single_image img_size="full" alignment="center" css=".vc_custom_1490089477209{padding-bottom: 40px !important;}"][/vc_column_inner][vc_column_inner width="1/6"][vc_single_image img_size="full" alignment="center" css=".vc_custom_1490089486754{padding-bottom: 40px !important;}"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Title +Clients 3', 'js_composer' );
$data['cat_display_name'] = 'content';
$data['custom_class'] = 'main clients agency';
$data['weight']     = 5; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/clients_3.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1444740425394{padding-top: 80px !important;padding-bottom: 80px !important;}"][vc_column][vc_custom_heading text="Clients We Work With" font_container="tag:h2|font_size:26|text_align:center|color:%23444444" google_fonts="font_family:Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900|font_style:600%20bold%20regular%3A600%3Anormal"][vc_custom_heading text="Some of our best customers are listed below. You can add your own easily." font_container="tag:h2|font_size:16|text_align:center|color:%23444444" google_fonts="font_family:Lora%3Aregular%2Citalic%2C700%2C700italic|font_style:400%20italic%3A400%3Aitalic"][vc_separator_2 color_line="#444444" padding_top="10" padding_bottom="50"][vc_clients items="9" timeout="3000"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

/* Flip Boxes */
/* ================================================== */

$data = array();
$data['name'] = __( '3 Columns Flip Boxes', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['flip_boxes'];
$data['custom_class'] = 'default flip_boxes';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/flip_boxes_1.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1498215381951{padding-top: 10% !important;padding-bottom: 10% !important;}" section_id="features"][vc_column width="1/3"][flip_box front_head_size="20px" front_text="Creativo will look amazing on all mobile devices -both Android and iOS." front_text_size="14px" back_text="Drag and Drop to create the ultimate WordPress site. No coding needed." front_border_color="#f2f2f2" icon_type="fontawesome" icon_fontawesome="fa fa-tablet" icon_back="no" front_head="Ultra Responsive" front_bg_color="#fafafa" front_icon_color="#4a90e2" back_head="Mobile Ready" back_bg_color="#4a90e2" back_head_color="#ffffff" back_text_color="#f2f2f2" back_border_color="#4a90e2"][/vc_column][vc_column width="1/3"][flip_box direction="vert" front_head_size="20px" front_text="Creativo allows to set up Parallax Backgrounds with just one click." front_text_size="14px" back_text="Drag and Drop to create the ultimate WordPress site. No coding needed." front_border_color="#f2f2f2" icon_type="fontawesome" icon_fontawesome="fa fa-hand-pointer-o" icon_back="no" front_head="Parallax Backgrounds" front_bg_color="#fafafa" front_icon_color="#4a90e2" back_head="Easy Parallax" back_bg_color="#4a90e2" back_head_color="#ffffff" back_text_color="#f2f2f2" back_border_color="#4a90e2"][/vc_column][vc_column width="1/3"][flip_box front_head_size="20px" front_text="Create amazing websites with the Visual Composer page builder." front_text_size="14px" back_text="Drag and Drop to create the ultimate WordPress site. No coding needed." front_border_color="#f2f2f2" icon_type="fontawesome" icon_fontawesome="fa fa-stack-overflow" icon_back="no" front_head="Drag and Drop" front_bg_color="#fafafa" front_icon_color="#4a90e2" back_head="Visual Composer " back_bg_color="#4a90e2" back_head_color="#ffffff" back_text_color="#f2f2f2" back_border_color="#4a90e2"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( '4 Columns Flip Boxes', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['flip_boxes'];
$data['custom_class'] = 'main flip_boxes cafebar';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/flip_boxes_2.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1460223048230{padding-top: 80px !important;padding-bottom: 60px !important;background-color: #292829 !important;}"][vc_column width="1/4"][flip_box front_text="(see address)" back_text="4870 Cass Ave
Detroit, MI, United States
(555) 389 976
hello@yoursite.com" front_border="0px" front_border_radius="10px" back_border="0px" back_border_radius="10px" icon_type="fontawesome" icon_fontawesome="fa fa-map-marker" front_head="NEW YORK" front_bg_color="#292829" front_head_color="#ffffff" front_icon_color="#d0bc9b" back_icon_color="#232323" back_bg_color="#d0bc9b" back_head_color="#292829" front_text_color="#d0bc9b"][/vc_column][vc_column width="1/4"][flip_box front_text="(see address)" back_text="4870 Cass Ave
Detroit, MI, United States
(555) 389 976
hello@yoursite.com" front_border="0px" front_border_radius="10px" back_border="0px" back_border_radius="10px" icon_type="fontawesome" icon_fontawesome="fa fa-map-marker" front_head="LOS ANGELES" front_bg_color="#292829" front_head_color="#ffffff" front_icon_color="#d0bc9b" back_icon_color="#232323" back_bg_color="#d0bc9b" back_head_color="#292829" front_text_color="#d0bc9b"][/vc_column][vc_column width="1/4"][flip_box front_text="(see address)" back_text="4870 Cass Ave
Detroit, MI, United States
(555) 389 976
hello@yoursite.com" front_border="0px" front_border_radius="10px" back_border="0px" back_border_radius="10px" icon_type="fontawesome" icon_fontawesome="fa fa-map-marker" front_head="SAN FRANCISCO" front_bg_color="#292829" front_head_color="#ffffff" front_icon_color="#d0bc9b" back_icon_color="#232323" back_bg_color="#d0bc9b" back_head_color="#292829" front_text_color="#d0bc9b"][/vc_column][vc_column width="1/4"][flip_box front_text="(see address)" back_text="4870 Cass Ave
Detroit, MI, United States
(555) 389 976
hello@yoursite.com" front_border="0px" front_border_radius="10px" back_border="0px" back_border_radius="10px" icon_type="fontawesome" icon_fontawesome="fa fa-map-marker" front_head="CHICAGO" front_bg_color="#292829" front_head_color="#ffffff" front_icon_color="#d0bc9b" back_icon_color="#232323" back_bg_color="#d0bc9b" back_head_color="#292829" front_text_color="#d0bc9b"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Flip Boxes +Heading Title', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['flip_boxes'];
$data['custom_class'] = 'shopkeeper flip_boxes';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/flip_boxes_3.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1478696583939{padding-top: 80px !important;}"][vc_column][vc_custom_heading text="WELCOME TO OUR SHOP" font_container="tag:h2|font_size:22|text_align:center|color:%23282828|line_height:1.3" google_fonts="font_family:Montserrat%3Aregular%2C700|font_style:700%20bold%20regular%3A700%3Anormal"][vc_column_text]
<p style="text-align: center;"> The <strong>SHOPPER</strong> template can be easily imported from your Appearance -&gt; Import Templates area.
This is another great template created for the Creativo theme. It will look amazing for your shop site.</p>
[/vc_column_text][vc_separator_2 color_line="#efefef" padding_top="40" padding_bottom="10"][/vc_column][/vc_row][vc_row css=".vc_custom_1471869742959{padding-top: 40px !important;}"][vc_column width="1/3"][flip_box front_head_size="14px" front_text="Not satisfied with the product you purchased? We offer instant refunds to all customers." back_head_size="14px" back_text="You can ask for a refund within the first 30 days of the purchase date. No questions asked. " front_border="0px" back_border="0px" icon_type="fontawesome" icon_fontawesome="fa fa-gg" icon_back="no" front_head="MONEY BACK" front_bg_color="#f2f2f2" front_head_color="#303030" front_text_color="#555555" back_bg_color="#000000" back_head_color="#ffffff" back_text_color="#e5e5e5" front_icon_color="#444444" back_icon_color="#ffffff" back_head="YOUR PURCHASE IS SAFE"][/vc_column][vc_column width="1/3"][flip_box front_head_size="14px" front_text="All orders over $39 benefit of free shipping. Go ahead and purchase your favorite products." back_head_size="14px" back_text="We will ship all your products in less than 2 days. International shipping may take a bit longer due to international shipping routes." front_border="0px" back_border="0px" icon_type="fontawesome" icon_fontawesome="fa fa-globe" icon_back="no" front_head="FREE SHIPPING" front_bg_color="#f2f2f2" back_head="WORLDWIDE FREE SHIPPING" front_head_color="#303030" front_text_color="#555555" back_bg_color="#000000" back_head_color="#ffffff" back_text_color="#e5e5e5" front_icon_color="#444444" back_icon_color="#ffffff"][/vc_column][vc_column width="1/3"][flip_box front_head_size="14px" front_text="If you have any questions, don't hesitate to contact us 24h/week." back_head_size="14px" back_text="Our operators will reply to any question you have 24h/week. We take support seriously!" front_border="0px" back_border="0px" icon_type="fontawesome" icon_fontawesome="fa fa-comments" icon_back="no" front_head="24H FREE SUPPORT" front_bg_color="#f2f2f2" back_head="BEST SUPPORT IN THE BUSINESS" front_head_color="#303030" front_text_color="#555555" back_bg_color="#000000" back_head_color="#ffffff" back_text_color="#e5e5e5" front_icon_color="#444444" back_icon_color="#ffffff"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Flip Boxes +Heading Title', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['flip_boxes'];
$data['custom_class'] = 'shopkeeper flip_boxes';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/flip_boxes_4.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1479166165546{padding-top: 80px !important;}"][vc_column][vc_custom_heading text="WELCOME TO SHOPKEEPER" font_container="tag:h2|font_size:22px|text_align:center" google_fonts="font_family:Montserrat%3Aregular%2C700|font_style:700%20bold%20regular%3A700%3Anormal"][vc_column_text]
<p style="text-align: center;">The <strong>ShopKeeper</strong> template can be easily imported from your Appearance -&gt; Import Templates area.
This is another great template created for the Creativo theme. It will look amazing for your shop site.</p>
[/vc_column_text][vc_separator_2 color_line="#444444" padding_top="40" padding_bottom="30"][/vc_column][/vc_row][vc_row css=".vc_custom_1479166184551{border-bottom-width: 1px !important;padding-top: 30px !important;padding-bottom: 80px !important;border-bottom-color: #f2f2f2 !important;border-bottom-style: solid !important;}"][vc_column width="1/3"][flip_box front_head_size="16px" front_text="You can ask for a refund within the first 30 days of the purchase date. No questions asked. " back_head_size="18px" back_text="You can ask for a refund within the first 30 days of the purchase date. No questions asked. The only condition we ask is for the product returned to be in mint condition." front_border="0px" front_border_radius="0px" front_border_color="" back_bg_img="340" back_border="0px" back_border_radius="0px" icon_type="fontawesome" icon_fontawesome="fa fa-gg" front_head="MONEY BACK" back_head="YOUR PURCHASE IS SAFE" front_bg_color="#ededed" front_head_color="#232323" front_text_color="#3f3f3f" back_bg_color="#000000" back_head_color="#ffffff" back_text_color="#e5e5e5" front_icon_color="#515151" back_icon_color="#ffffff" front_bg_mask_color="#eeee22" front_inner_bg_color="rgba(255,255,255,0.8)" back_bg_mask_color="rgba(0,0,0,0.76)"][/vc_column][vc_column width="1/3"][flip_box front_head_size="16px" front_text="All orders over $39 benefit of free shipping. Go ahead and purchase your favorite products." back_head_size="18px" back_text="We will ship all your products in less than 2 days. International shipping may take a bit longer due to international shipping routes but it is still a free shipping service." front_border="0px" front_border_radius="0px" front_border_color="" back_bg_img="339" back_border="0px" back_border_radius="0px" icon_type="fontawesome" icon_fontawesome="fa fa-globe" front_head="FREE SHIPPING" back_head="WORLDWIDE FREE SHIPPING" front_bg_color="#ededed" front_head_color="#232323" front_text_color="#3f3f3f" back_bg_color="#000000" back_head_color="#ffffff" back_text_color="#e5e5e5" front_icon_color="#515151" back_icon_color="#ffffff" front_inner_bg_color="rgba(255,255,255,0.75)" back_bg_mask_color="rgba(0,0,0,0.76)"][/vc_column][vc_column width="1/3"][flip_box front_head_size="16px" front_text="If you have any questions don't hesitate to contact us 24h/week." back_head_size="18px" back_text="Our operators will reply to any question you have 24h/week. Any questions or suggestion you have for our site and products are more than welcomed. We take support seriously!" front_border="0px" front_border_radius="0px" front_border_color="" back_bg_img="341" back_border="0px" back_border_radius="0px" icon_type="fontawesome" icon_fontawesome="fa fa-comments-o" front_head="24H Free Support" back_head="BEST SUPPORT TEAM" front_bg_color="#ededed" front_head_color="#232323" front_text_color="#3f3f3f" back_bg_color="#000000" back_head_color="#ffffff" back_text_color="#e5e5e5" front_icon_color="#515151" back_icon_color="#ffffff" front_bg_mask_color="rgba(255,255,255,0.5)" front_inner_bg_color="rgba(255,255,255,0.75)" back_bg_mask_color="rgba(0,0,0,0.76)"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Flip Boxes +Heading Title 2', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['flip_boxes'];
$data['custom_class'] = 'shopkeeper flip_boxes';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/flip_boxes_5.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1479393286935{padding-top: 80px !important;padding-bottom: 80px !important;}"][vc_column width="1/3"][flip_box front_head_size="22px" front_text="Add some content for the front of the Flip Box element." front_text_size="15px" back_text="Add some content for the front of the Flip Box element. The more content you add the bigger your Flip Box element will become." front_border="5px" front_border_radius="0px" front_border_color="rgba(239,164,33,0.16)" back_border="0px" back_border_radius="0px" icon_type="fontawesome" icon_fontawesome="fa fa-gitlab" front_head="FASHION TRENDS" front_bg_color="#ffffff" back_bg_color="#333333" front_text_color="#727272" front_head_color="#282828" back_head="FASHION TRENDS" back_head_color="#ffffff" back_text_color="#dddddd" front_icon_color="rgba(239,164,33,0.92)"][/vc_column][vc_column width="1/3"][flip_box front_head_size="22px" front_text="Add some content for the front of the Flip Box element." front_text_size="14px" back_text="Add some content for the front of the Flip Box element. The more content you add the bigger your Flip Box element will become." front_border="5px" front_border_radius="0px" front_border_color="rgba(239,164,33,0.16)" back_border="0px" back_border_radius="0px" icon_type="fontawesome" icon_fontawesome="fa fa-american-sign-language-interpreting" front_head="CLOTHING TIPS" front_bg_color="#ffffff" back_bg_color="#333333" front_text_color="#727272" front_head_color="#282828" back_head="CLOTHING TIPS" back_head_color="#ffffff" back_text_color="#dddddd" front_icon_color="#efa421"][/vc_column][vc_column width="1/3"][flip_box front_head_size="22px" front_text="Add some content for the front of the Flip Box element." front_text_size="14px" back_text="Add some content for the front of the Flip Box element. The more content you add the bigger your Flip Box element will become." front_border="5px" front_border_radius="0px" front_border_color="rgba(239,164,33,0.16)" back_border="0px" back_border_radius="0px" icon_type="fontawesome" icon_fontawesome="fa fa-universal-access" front_head="ONLINE SUPPORT" front_bg_color="#ffffff" back_bg_color="#333333" front_text_color="#727272" front_head_color="#282828" back_head="ONLINE SUPPORT" back_head_color="#ffffff" back_text_color="#dddddd" front_icon_color="#efa421"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Flip Boxes Blogger', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['flip_boxes'];
$data['custom_class'] = 'blogger flip_boxes';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/flip_boxes_6.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1463742958830{padding-top: 30px !important;padding-bottom: 10px !important;}"][vc_column width="1/3"][flip_box front_head_size="22px" back_text="You can add here any text you want. The content add here will be shown when the user hovers the mouse over the Flip Box element. You can also make the entire box clickable." front_bg_img="220" front_border="0px" front_border_radius="0px" back_link="http://rockythemes.com/creativo-blogger/about/" back_bg_img="220" back_border_radius="0px" icon_type="entypo" icon_back="no" front_head="ABOUT ME" back_head="Who am I?" front_bg_color="#232323" front_text_color="#ffffff" back_bg_color="#232323" back_head_color="#111111" back_text_color="#707070" icon_entypo="entypo-icon entypo-icon-user" front_icon_color="#111111" front_inner_bg_color="rgba(255,255,255,0.7)" front_inner_border_color="#ffffff" front_head_color="#111111" back_bg_mask_color="rgba(255,255,255,0.85)" back_border_color="#ededed"][/vc_column][vc_column width="1/3"][flip_box front_head_size="22px" back_text="You can add here any text you want. The content add here will be shown when the user hovers the mouse over the Flip Box element. You can also make the entire box clickable." front_bg_img="221" front_border="0px" front_border_radius="0px" back_bg_img="221" back_border_radius="0px" icon_type="entypo" icon_back="no" front_head="ADVERTISE" back_head="Advertise Here" front_bg_color="#232323" front_text_color="#ffffff" back_bg_color="#232323" back_head_color="#111111" back_text_color="#707070" front_inner_bg_color="rgba(255,255,255,0.7)" front_inner_border_color="#ffffff" front_head_color="#111111" back_bg_mask_color="rgba(255,255,255,0.85)" icon_entypo="entypo-icon entypo-icon-thumbs-up" front_icon_color="#111111" back_border_color="#ededed"][/vc_column][vc_column width="1/3"][flip_box front_head_size="22px" back_text="You can add here any text you want. The content add here will be shown when the user hovers the mouse over the Flip Box element. You can also make the entire box clickable." front_bg_img="222" front_border="0px" front_border_radius="0px" back_link="http://rockythemes.com/creativo-blogger/contact/" back_bg_img="222" back_border_radius="0px" icon_type="entypo" icon_back="no" front_head="CONTACT" back_head="Get in touch!" front_bg_color="#232323" front_text_color="#ffffff" back_bg_color="#232323" back_head_color="#111111" back_text_color="#707070" front_inner_bg_color="rgba(255,255,255,0.7)" front_inner_border_color="#ffffff" front_head_color="#111111" back_bg_mask_color="rgba(255,255,255,0.85)" icon_entypo="entypo-icon entypo-icon-chat" front_icon_color="#111111" back_border_color="#ededed"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

/* End Flip Boxes */
/* ================================================== */

/* Tabs */
/* ================================================== */

$data = array();
$data['name'] = __( 'Tabs +FAQs', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'default tabs faqs';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/tabs_faqs.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1498220048684{border-top-width: 1px !important;border-bottom-width: 1px !important;background-color: #fafafa !important;border-top-color: #ededed !important;border-top-style: solid !important;border-bottom-color: #ededed !important;border-bottom-style: solid !important;}"][vc_column width="2/3"][vc_tabs color="custom" tt_font_size="16px" tt_font_weight="400" tc_font_size="14px" tc_line_heigt="26px" style="style_5"][vc_tab title="Web Design" tab_id="c043b05d-7783-10"][vc_column_text 0=""]The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family.

Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators.[/vc_column_text][/vc_tab][vc_tab title="Development" tab_id="331c1658-7dfd-2"][vc_column_text 0=""]The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family.

Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators.[/vc_column_text][/vc_tab][vc_tab title="Advertising" tab_id="1498216238106-2-8"][vc_column_text 0=""]The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family.

Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators.[/vc_column_text][/vc_tab][vc_tab title="Support" tab_id="1498216750872-3-2"][vc_column_text 0=""]

The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family.

Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators.

[/vc_column_text][/vc_tab][/vc_tabs][/vc_column][vc_column width="1/3" css=".vc_custom_1498220124524{padding-top: 30px !important;padding-left: 10% !important;}"][vc_toggle title="How to purchase Creativo " size="sm" el_id="1498217103734-73a0088b-c772"]Creativo can be purchased on the MojoMarketplace website only. The them costs only $59, one time fee only.[/vc_toggle][vc_toggle title="How can I receive support?" size="sm" el_id="1498217332639-c728ed2a-94be"]Support is provided by us RockyThemes via Chat, Forum or directly by email. Head to the Contact area to get in touch with us.[/vc_toggle][vc_toggle title="Can the theme be customized?" size="sm" el_id="1498217330304-4e9effb8-246b"]Yes, Creativo allows you to change every single pixel on your site. Everything is done with simple mouse clicks.[/vc_toggle][vc_toggle title="Can I change the Logo?" size="sm" el_id="1498217393338-92a97085-e667"]The logo can be changed by going to Appearance -> Theme Options -> Logo favicon.[/vc_toggle][vc_toggle title="How can I update Creativo?" size="sm" el_id="1498217503468-de7b6d8e-883b"]The theme can be updated with just one click by going to Appearance -> Themes page. Click once and the theme will be automatically updated.[/vc_toggle][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Tabs Business', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'main tabs';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/tabs_business.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1486383460778{background-color: #fafafc !important;}"][vc_column][vc_tabs color="custom" tt_font_size="17px" tt_line_height="20px" tt_font_weight="400" tc_font_size="14px" tc_line_heigt="24px" style="style_5" tt_alignment="center"][vc_tab icon_img="196" title="Web/UI Design" tab_id="f19d0c38-b5d2-9"][vc_custom_heading text="UI DESIGN" font_container="tag:h2|font_size:13px|text_align:left|color:%232b7ce6" google_fonts="font_family:Roboto%20Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic|font_style:700%20bold%20regular%3A700%3Anormal"][vc_custom_heading text="Understanding the User Interface design will improve your sells" font_container="tag:h2|font_size:22px|text_align:left|color:%2314183c|line_height:24px" google_fonts="font_family:Roboto%20Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic|font_style:400%20regular%3A400%3Anormal" css=".vc_custom_1486131259845{padding-bottom: 20px !important;}"][vc_row_inner][vc_column_inner width="2/3"][vc_custom_heading text="The easy to use Visual Composer allows you to create seamless designs. The Theme Options interface provide just the correct settings to change the design and functionality of the theme based on your needs." font_container="tag:p|font_size:17px|text_align:left|color:%23abacb2|line_height:24px" use_theme_fonts="yes"][vc_column_text]With Creativo you don't need any coding experience at all to craft the perfect website for your business or your client's businesses. Everything can be changed in Creativo: font families, colors, links, background images, site layouts, you name it, we already have it ready for you to use it.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1486131393621{padding-right: 30px !important;padding-left: 30px !important;}"][vc_carousel2 img_size="full" visible_items="2" timeout="2500" navigation="no" onclick="link_no"][/vc_column_inner][/vc_row_inner][/vc_tab][vc_tab icon_img="195" title="User Experience" tab_id="c2b26bc4-fb27-7"][vc_row_inner][vc_column_inner width="1/3"][vc_single_image  img_size="full" alignment="center" css_animation="fadeInLeft"][/vc_column_inner][vc_column_inner width="2/3"][vc_custom_heading text="USER EXPERIENCE" font_container="tag:h2|font_size:13|text_align:left|color:%232b7ce6" google_fonts="font_family:Roboto%20Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic|font_style:700%20bold%20regular%3A700%3Anormal"][vc_custom_heading text="User Experience is the most important aspect of your website" font_container="tag:h2|font_size:22|text_align:left|color:%2314183c|line_height:24px" google_fonts="font_family:Roboto%20Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic|font_style:400%20regular%3A400%3Anormal" css=".vc_custom_1490190454879{padding-bottom: 20px !important;}"][vc_column_text css_animation="fadeInRight"]The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.

The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators.

To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages.

The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_tab][vc_tab icon_img="191" tab_id="432131d0-44f2-2" title="Animation"][vc_row_inner][vc_column_inner width="2/3"][vc_custom_heading text="ANIMATION" font_container="tag:h2|font_size:13PX|text_align:left|color:%232b7ce6" google_fonts="font_family:Roboto%20Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic|font_style:700%20bold%20regular%3A700%3Anormal"][vc_custom_heading text="Use CSS3 Animation to create a visual impact on your site" font_container="tag:h2|font_size:22px|text_align:left|color:%2314183c|line_height:24px" google_fonts="font_family:Roboto%20Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic|font_style:400%20regular%3A400%3Anormal" css=".vc_custom_1490190628410{padding-bottom: 20px !important;}"][vc_column_text css_animation="fadeInUp"]The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.

The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators.

To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages.

The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental.

To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_single_image  img_size="full" alignment="center" css_animation="fadeInDown"][/vc_column_inner][/vc_row_inner][/vc_tab][vc_tab icon_img="193" tab_id="97a34e44-dc2e-3" title="Development"][vc_row_inner][vc_column_inner width="1/3"][vc_single_image  img_size="full" alignment="center" css_animation="fadeInUp"][/vc_column_inner][vc_column_inner width="2/3"][vc_custom_heading text="DEVELOPMENT" font_container="tag:h2|font_size:13px|text_align:left|color:%232b7ce6" google_fonts="font_family:Roboto%20Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic|font_style:700%20bold%20regular%3A700%3Anormal"][vc_custom_heading text="Choose the right theme for your Development Site" font_container="tag:h2|font_size:22px|text_align:left|color:%2314183c|line_height:24px" google_fonts="font_family:Roboto%20Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic|font_style:400%20regular%3A400%3Anormal" css=".vc_custom_1490191245837{padding-bottom: 20px !important;}"][vc_column_text css_animation="fadeInRight"]The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.

The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators.

To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages.

The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental.

To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_tab][vc_tab icon_img="192" tab_id="11407048-f98c-4" title="Copywriting"][vc_row_inner][vc_column_inner width="2/3"][vc_custom_heading text="COPYWRITING" font_container="tag:h2|font_size:13px|text_align:left|color:%232b7ce6" google_fonts="font_family:Roboto%20Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic|font_style:700%20bold%20regular%3A700%3Anormal"][vc_custom_heading text="We provide professional Copy writing Services" font_container="tag:h2|font_size:22px|text_align:left|color:%2314183c|line_height:24px" google_fonts="font_family:Roboto%20Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic|font_style:400%20regular%3A400%3Anormal" css=".vc_custom_1490191787976{padding-bottom: 20px !important;}"][vc_column_text css_animation="fadeInUp"]The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.

The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators.

To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages.

The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_single_image img_size="full" alignment="center" css_animation="fadeInDown"][/vc_column_inner][/vc_row_inner][/vc_tab][vc_tab icon_img="194" tab_id="f8a317d6-80cc-5" title="SEO/SEM"][vc_custom_heading font_container="tag:h2|font_size:13px|text_align:center|color:%232b7ce6" google_fonts="font_family:Roboto%20Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic|font_style:700%20bold%20regular%3A700%3Anormal" css_animation="fadeInDown"][vc_custom_heading text="SEO / SEM Services to improve your Traffic" font_container="tag:h2|font_size:22px|text_align:center|color:%2314183c|line_height:24px" google_fonts="font_family:Roboto%20Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic|font_style:400%20regular%3A400%3Anormal" css_animation="fadeInUp" css=".vc_custom_1490191943892{padding-bottom: 20px !important;}"][vc_column_text css_animation="fadeInUp"]
<p style="text-align: center;">The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</p>
<p style="text-align: center;">The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators.</p>
<p style="text-align: center;">To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages.</p>
<p style="text-align: center;">The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental.</p>
[/vc_column_text][/vc_tab][/vc_tabs][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Tour +Tabs', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['posts_grid'];
$data['custom_class'] = 'default tours tabs';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/tour_tab.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1498480900445{padding-bottom: 10% !important;}"][vc_column width="1/2"][vc_accordion][vc_accordion_tab title="How to purchase Creativo ?"][vc_column_text]Creativo can be purchased on the MojoMarketplace website only. The them costs only <strong>$59</strong>, one time fee only.[/vc_column_text][/vc_accordion_tab][vc_accordion_tab title="How can I receive support ?"][vc_column_text]Support is provided by us RockyThemes via Chat, Forum or directly by email. Head to the Contact area to get in touch with us.[/vc_column_text][/vc_accordion_tab][vc_accordion_tab title="Can the theme be customized ?"][vc_column_text]Yes, Creativo allows you to change every single pixel on your site. Everything is done with simple mouse clicks.[/vc_column_text][/vc_accordion_tab][vc_accordion_tab title="Can I change the Copyright text?"][vc_column_text]Yes, you can change every text with your own content, including the Copyright section of the theme. Simply go to Appearance -&gt; Theme Options -&gt; Footer -&gt; Footer Copyright and change it there.[/vc_column_text][/vc_accordion_tab][vc_accordion_tab title="How can I update Creativo?"][vc_column_text]The theme can be updated with just one click by going to Appearance -&gt; Themes page. Click once and the theme will be automatically updated.[/vc_column_text][/vc_accordion_tab][/vc_accordion][/vc_column][vc_column width="1/2"][vc_tabs color="custom" tt_font_size="14px" custom_colored_border="#4a90e2" style="style_4"][vc_tab tab_id="310f118a-0643-2" title="Social Media"][vc_column_text css=".vc_custom_1498482128620{padding-bottom: 30px !important;}"]The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words.[/vc_column_text][vc_gallery type="image_grid" images="2889,2890,2885,2891" img_size="140x100"][/vc_tab][vc_tab title="Development" tab_id="223f2752-5170-1"][vc_column_text 0=""]<img class="alignleft wp-image-2849 size-thumbnail" src="https://rockythemes.com/creativo/wp-content/uploads/2015/03/client-3-150x150.png" alt="" width="150" height="150" />The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.

The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words.[/vc_column_text][/vc_tab][vc_tab title="Design Studio" tab_id="f3d72fc5-745d-0"][vc_column_text]The European languages are members of the same family. Their separate <img class="alignright wp-image-2848 size-thumbnail" src="https://rockythemes.com/creativo/wp-content/uploads/2015/03/client-2-150x150.png" alt="" width="150" height="150" />existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.

The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words.[/vc_column_text][/vc_tab][vc_tab tab_id="ae24382c-a4fa-3" title="Advertising"][vc_column_text]
<p style="text-align: center;"><img class="aligncenter size-full wp-image-3433" src="https://rockythemes.com/creativo/wp-content/uploads/layerslider/Flying-Banners-2/landing-screen-2.jpg" alt="" width="497" height="280" /></p>
[/vc_column_text][/vc_tab][/vc_tabs][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Products Tabs +Heading Title', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['posts_grid'];
$data['custom_class'] = 'main shopkeeper tabs';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/product_tabs.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_custom_heading text="PRODUCTS BY CATEGORY" font_container="tag:h2|font_size:22|text_align:center|color:%23282828|line_height:1.3" google_fonts="font_family:Montserrat%3Aregular%2C700|font_style:700%20bold%20regular%3A700%3Anormal"][vc_column_text]
<p style="text-align: center;">The Products below are being displayed based on the category they are part of.
Combined with the <strong>Tabs Element</strong>, this is a nice way to showcase multiple products by category.</p>
[/vc_column_text][vc_separator_2 color_line="#efefef" padding_top="40" padding_bottom="40"][vc_tabs color="custom" custom_colored_border="#197aaa" style="style_2" tt_alignment="center" tt_line_heigt="50px"][vc_tab title="Blazers" tab_id="5062e954-6b0e-8"][product_category per_page="4" columns="4" orderby="date" order="DESC" category="blazzers"][/vc_tab][vc_tab title="T-shirts" tab_id="f915fea2-c751-8"][product_category per_page="4" columns="4" orderby="date" order="DESC" category="t-shirts"][/vc_tab][vc_tab title="Shoes" tab_id="1471957576354-2-2"][product_category per_page="4" columns="4" orderby="date" order="" category="shoes"][/vc_tab][vc_tab title="Suits" tab_id="1471957577969-3-6"][product_category per_page="4" columns="4" orderby="" order="" category="suits"][/vc_tab][vc_tab title="Jeans" tab_id="1471957599710-4-8"][product_category per_page="4" columns="4" orderby="" order="" category="jeans"][/vc_tab][vc_tab title="Accesories" tab_id="1471957608047-5-2"][product_category per_page="4" columns="4" orderby="" order="" category="accesories"][/vc_tab][/vc_tabs][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

/* Posts Elements */
/* ================================================== */

$data = array();
$data['name'] = __( 'Title +Posts Grid', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['posts_grid'];
$data['custom_class'] = 'default posts_grid';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/posts_grid_2.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1426452889663{padding-top: 100px !important;padding-bottom: 60px !important;}"][vc_column 0=""][ctitle title="Latest Articles" color="#383838" background="rgba(255,255,255,0.01)" font_weight="700" separator_color="rgba(186,186,186,0.01)" el_width="50"][vc_custom_heading text="Here are some of the latest entries from our blog section." font_container="tag:p|font_size:18|text_align:center|line_height:1.5" use_theme_fonts="yes"][vc_separator_2 color_line="#5e5e5e" padding_bottom="20"][vc_separator style="blank" padding_top="10" padding_bottom="10"][recent_posts columns="3" show_comments="yes" excerpt_length="20" taxonomies="" include="" style="custom" content_padding="0" post_title_font_size="15px" post_date_color="#6b6b6b" post_desc_line_height="1.8" post_desc_text_color="#999999" posts="3"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Title +Posts Grid 2', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['posts_grid'];
$data['custom_class'] = 'business posts_grid';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/posts_grid_3.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1484958972912{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column][vc_custom_heading text="Latest News" font_container="tag:h2|font_size:50|text_align:center|color:%2314183c|line_height:60px" google_fonts="font_family:Roboto%20Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic|font_style:300%20light%20regular%3A300%3Anormal" css=".vc_custom_1485270300290{padding-bottom: 40px !important;}"][recent_posts columns="4" show_category="yes" show_comments="yes" show_read_more="yes" taxonomies="" include="" style="custom" content_padding="0px" post_title_color="#14183c" post_title_font_size="22px" font_weight="400" read_more_color="#2b7ce6" category_color="#2b7ce6" post_date_color="#939399" post_desc_font_size="14px" post_desc_font_weight="300" post_desc_text_color="#939399" posts="4"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Title +Posts Grid 3', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['posts_grid'];
$data['custom_class'] = 'lifecoach posts_grid';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/posts_grid_4.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1496361781457{padding-top: 12% !important;padding-bottom: 3% !important;}"][vc_column 0=""][vc_custom_heading text="HAVE A HEALTHY" font_container="tag:h3|font_size:54px|text_align:center|color:%233f3b51" use_theme_fonts="yes" css=".vc_custom_1496360491586{margin-bottom: 0px !important;padding-bottom: 0px !important;}"][vc_custom_heading text="reading below
" font_container="tag:h3|font_size:54px|text_align:center|color:%23f8ac9a|line_height:1" google_fonts="font_family:Yellowtail%3Aregular|font_style:400%20regular%3A400%3Anormal" css=".vc_custom_1496360539989{padding-bottom: 5% !important;}"][recent_posts columns="4" show_category="yes" categ_location="below" show_comments="yes" show_read_more="yes" excerpt_length="22" taxonomies="" include="" style="custom" content_padding="0" post_title_color="#3f3b51" post_title_font_size="22px" post_title_line_height="24px" font_weight="" post_title_uppercase="yes" read_more_color="#f8ac9a" category_color="#f8ac9a" category_font_size="12px" post_date_color="#a3a1a8" post_desc_line_height="22px" post_desc_text_color="#878787" el_class="categories_uppercase"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Title +Posts Grid 4', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['posts_grid'];
$data['custom_class'] = 'main posts_grid onepage';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/posts_grid_5.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row section_id="blog" css=".vc_custom_1428615313247{padding-top: 80px !important;padding-bottom: 80px !important;background-color: #f9f9f9 !important;}"][vc_column][vc_custom_heading text="FROM THE BLOG" font_container="tag:h2|font_size:24|text_align:center|color:%23333333|line_height:1.5" use_theme_fonts="yes" el_class="font_weight_600"][vc_separator_2 color_line="#333333" padding_top="20" padding_bottom="55"][recent_posts columns="4" show_comments="yes" taxonomies="" include="" style="custom" content_padding="0px" post_title_color="#282828" post_date_color="#636363" post_desc_text_color="#9b9b9b" post_desc_bg_color=""][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Posts Grid 5', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['posts_grid'];
$data['custom_class'] = 'default posts_grid';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/posts_grid.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1498220028623{padding-top: 10% !important;}"][vc_column][recent_posts columns="4" show_date="no" taxonomies="" include="" style="custom" content_padding="0" post_title_font_size="16px" font_weight="400" category_color="#4887bf" category_font_size="12px" category_font_weight="600" post_date_color="#3f3f3f" post_desc_line_height="2" post_desc_text_color="#9e9e9e"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Posts Slider', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['posts_grid'];
$data['custom_class'] = 'main posts_grid manhattan';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/posts_slider1.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1503308181725{padding-top: 40px !important;}"][vc_column][cr_posts_slider include_categ="" include="" author_select=""][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Title +Section Separator +Post Grid', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['posts_grid'];
$data['custom_class'] = 'main posts_grid manhattan';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/posts_grid_6.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1503308025917{padding-top: 80px !important;}" el_class="enable_overflow"][vc_column][vc_custom_heading text="RECOMMENDED READINGS" font_container="tag:p|font_size:30px|text_align:center" use_theme_fonts="yes" el_class="font_weight_600" css=".vc_custom_1503308501195{margin-bottom: 20px !important;padding-bottom: 20px !important;}"][section_separator size="ss_medium" border_color="#f5f5f5" sep_bg_color="#ffffff"][/vc_column][/vc_row][vc_row css=".vc_custom_1503308137568{padding-top: 100px !important;background-color: #f5f5f5 !important;}"][vc_column][recent_posts posts="3" columns="3" taxonomies="" include="" author_select="" style="custom" content_padding="0" post_title_color="#232323" post_title_font_size="24px" post_title_line_height="1.5" font_weight="400" category_font_size="12px" post_date_color="#7f613e" post_desc_bg_color=""][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Posts Slider +Posts List', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['posts_grid'];
$data['custom_class'] = 'main posts_grid manhattan';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/posts_slider2.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1503489885189{padding-top: 6% !important;padding-bottom: 4% !important;background-color: #f7f7f7 !important;}"][vc_column][vc_custom_heading text="EDITOR PICKS" font_container="tag:p|font_size:30px|text_align:center" use_theme_fonts="yes" el_class="font_weight_600" css=".vc_custom_1503438518987{margin-bottom: 0px !important;}"][vc_row_inner css=".vc_custom_1503439198970{padding-top: 50px !important;}"][vc_column_inner width="2/3"][cr_posts_slider include_categ="" include="" author_select="" slider_style="custom" title_font_size="26px" excerpt_font_size="14px" excerpt_words="10" category_font_size="14px"][/vc_column_inner][vc_column_inner width="1/3"][cr_posts_list show_thumbnail="no" show_comments="no" show_date="no" include_categ="" include="" author_select="" list_style="custom" excerpt_words="10"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row css=".vc_custom_1503439152170{padding-top: 10% !important;}"][vc_column][vc_custom_heading text="EVEN MORE GOODIES" font_container="tag:p|font_size:30px|text_align:center" use_theme_fonts="yes" el_class="font_weight_600" css=".vc_custom_1503421681005{margin-bottom: 30px !important;}"][vc_separator style="solid" color="#e8e8e8" padding_top="10" padding_bottom="10"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( '2 Columns Masonry Posts', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['posts_grid'];
$data['custom_class'] = 'main posts_grid cafebar';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/posts_grid_masonry_2_cols.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1507114446496{padding-top: 80px !important;padding-bottom: 80px !important;background-color: #312f32 !important;}"][vc_column][recent_posts grid_display="masonry" columns="2" excerpt_length="35" taxonomies="" include="" style="custom" post_title_color="#d1b181" post_title_font_size="26px" post_date_color="#c9c9c9" post_desc_font_size="16px" post_desc_text_color="#dbdbdb" post_desc_bg_color="rgba(10,10,10,0.01)" posts="10"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Posts Grid 6', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['posts_grid'];
$data['custom_class'] = 'main posts_grid shopkeeper';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/posts_grid_7.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_custom_heading text="LATEST ARTICLES" font_container="tag:h2|font_size:22|text_align:center|color:%23282828|line_height:1.3" google_fonts="font_family:Montserrat%3Aregular%2C700|font_style:700%20bold%20regular%3A700%3Anormal"][vc_separator_2 color_line="#efefef" padding_top="30" padding_bottom="50"][recent_posts columns="3" excerpt_length="20" taxonomies="" include="" style="custom" post_title_font_size="16px" post_desc_font_size="14px" post_desc_text_color="#757575" posts="3"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Full Width Posts Grid', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['posts_grid'];
$data['custom_class'] = 'main posts_grid agency';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/posts_grid_8.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row layout="wide" css=".vc_custom_1504990860743{padding: 5% !important;background-color: #f7f7f7 !important;}"][vc_column][recent_posts columns="3" taxonomies="" include="" author_select="" style="custom" post_title_font_size="20px" posts="9"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

/* End Posts Elements */
/* ================================================== */

/* Portfolio Element */
/* ================================================== */

$data = array();
$data['name'] = __( 'Title + Portfolio', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['portfolio'];
$data['custom_class'] = 'default portfolio';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/portfolio2.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1426516818128{padding-top: 50px !important;padding-bottom: 0px !important;background-color: #f9f9f9 !important;}"][vc_column 0=""][vc_separator_2 style="line_symbol" icon_fontawesome="fa fa-star" color_line="rgba(73,73,73,0.01)" color_symbol="#444444" padding_bottom="20"][ctitle title="Our Amazing Work" color="#3f3f3f" background="rgba(255,255,255,0.01)" font_weight="700" separator_color="#d3d3d3"][vc_custom_heading text="Your portfolio will look amazing using any of the available styles: 3D or Flat / Fullscreen or Normal." font_container="tag:p|font_size:18|text_align:center|color:%23565656|line_height:1.5" use_theme_fonts="yes"][vc_separator style="blank" padding_top="10"][/vc_column][/vc_row][vc_row layout="stretch_row_content_no_spaces" css=".vc_custom_1456697749237{background-color: #f9f9f9 !important;}"][vc_column 0=""][vc_portfolio_el items="5" show_filters="no" layout="fullscreen" columns_fullscreen="5" port_details="below" style="custom" port_title_color="#444444" port_bg_color="#f9f9f9"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Title + Portfolio 2', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['portfolio'];
$data['custom_class'] = 'default portfolio';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/portfolio.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1498226351987{padding-top: 10% !important;padding-bottom: 10% !important;}"][vc_column][vc_custom_heading text="Best of Our Works" font_container="tag:h2|font_size:30|text_align:center|color:%23212121" use_theme_fonts="yes" el_class="font_weight_300"][vc_custom_heading text="Using the Portfolio Flat or 3D Portfolio elements you can show your work in style!" font_container="tag:h3|font_size:17|text_align:center|color:%23474747" use_theme_fonts="yes" css=".vc_custom_1498226405228{padding-bottom: 50px !important;}"][vc_portfolio_el items="6" show_filters="no" portfolio_design="modern" columns_normal="3" style="custom" port_bg_color="rgba(0,0,0,0.87)" include_categ="" include=""][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Title + Portfolio 3', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['portfolio'];
$data['custom_class'] = 'onepage portfolio';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/portfolio5.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1428613738047{padding-top: 80px !important;padding-bottom: 0px !important;}" section_id="work"][vc_column][vc_custom_heading text="OUR WORK" font_container="tag:h2|font_size:24|text_align:center|color:%23333333|line_height:1.5" use_theme_fonts="yes" el_class="font_weight_600"][vc_separator_2 color_line="#333333" padding_top="20" padding_bottom="25"][vc_custom_heading text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent metus magna, malesuada porta elementum vitae, hendrerit sed nunec ut placerat odio." font_container="tag:p|font_size:20|text_align:center|color:%23333333|line_height:1.5" use_theme_fonts="yes" el_class="font_weight_300"][vc_separator style="blank" padding_bottom="10"][/vc_column][/vc_row][vc_row css=".vc_custom_1428615332186{padding-bottom: 100px !important;}"][vc_column][vc_portfolio_el items="6" show_filters="no" portfolio_design="modern" columns_normal="3" style="custom" port_bg_color="rgba(91,201,140,0.93)" include_categ="" include=""][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Title + Portfolio + Button', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['portfolio'];
$data['custom_class'] = 'agency portfolio';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/portfolio3.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1445294821278{border-top-width: 1px !important;border-bottom-width: 1px !important;padding-top: 80px !important;padding-bottom: 60px !important;background-color: #f7f7f7 !important;border-top-color: #eaeaea !important;border-top-style: solid !important;border-bottom-color: #eaeaea !important;border-bottom-style: solid !important;}"][vc_column][vc_custom_heading text="Amazing Portfolio" font_container="tag:h2|font_size:26|text_align:center|color:%233f3f3f|line_height:1.3" google_fonts="font_family:Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900|font_style:600%20bold%20regular%3A600%3Anormal"][vc_custom_heading text="Adding a portfolio element is done with just one click!" font_container="tag:h2|font_size:16|text_align:center|line_height:1" google_fonts="font_family:Lora%3Aregular%2Citalic%2C700%2C700italic|font_style:400%20italic%3A400%3Aitalic"][vc_separator_2 color_line="#666666" padding_top="30" padding_bottom="20"][vc_portfolio_el items="3" filter_pos="center" columns_normal="3" port_details="below" style="custom" port_title_color="#444444" port_bg_color="#f7f7f7" include_categ="" include=""][vc_separator style="blank" padding_top="15" padding_bottom="15"][vc_button title="Want to see more? Click Here!" shape="round" size="large" color="custom" custom_text_color="#333333" custom_color="rgba(91,201,140,0.01)" custom_border_color="#333333" custom_color_hover="#333333" custom_border_color_hover="#333333" icon_type="openiconic" add_icon="true" icon_openiconic="vc-oi vc-oi-aperture-alt"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Title + Portfolio + Button 2', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['portfolio'];
$data['custom_class'] = 'agency portfolio';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/portfolio4.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row layout="wide" css=".vc_custom_1445381158145{padding-top: 20px !important;padding-bottom: 80px !important;}"][vc_column][vc_portfolio_el items="-1" filter_pos="center" columns_normal="4" port_details="below" style="custom" port_title_color="#444444" port_bg_color="#ffffff"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

/* End Portfolio */
/* ================================================== */

/* Pricing Columns */
/* ================================================== */

$data = array();
$data['name'] = __( '4 Pricing Columns', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['portfolio'];
$data['custom_class'] = 'main pricing_columns business';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/pricing_columns.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row section_id="packages" css=".vc_custom_1490021218863{padding-top: 10% !important;padding-bottom: 10% !important;background-image: url(https://rockythemes.com/creativo_wp/wp-content/uploads/2017/02/pattern.jpg?id=215) !important;background-position: 0 0 !important;background-repeat: repeat !important;}"][vc_column][advanced_tables tab_columns="4" columns="%5B%7B%22label%22%3A%22Starter%22%2C%22price%22%3A%2259.99%22%2C%22value%22%3A%22Online%20Management%5CnVideo%20Tutorials%5CnEmail%20Campaigns%5Cn1%20GB%20Storage%5Cn5%20Statistics%20Report%5Cn10%20Email%20Accounts%22%2C%22billing_cycle%22%3A%22Per%20Month%22%2C%22button_text%22%3A%22Join%20Now%22%2C%22button_link%22%3A%22%23%22%7D%2C%7B%22label%22%3A%22Basic%22%2C%22head_sep_but_color%22%3A%22%232b7ce6%22%2C%22price%22%3A%2299.99%22%2C%22value%22%3A%22Online%20Management%5CnVideo%20Tutorials%5CnEmail%20Campaigns%5Cn3%20GB%20Storage%5Cn15%20Statistics%20Report%5Cn20%20Email%20Accounts%22%2C%22billing_cycle%22%3A%22Per%20Month%22%2C%22button_text%22%3A%22Purchase%22%2C%22button_link%22%3A%22%23%22%7D%2C%7B%22label%22%3A%22Advanced%22%2C%22head_sep_but_color%22%3A%22%234e5ee9%22%2C%22price%22%3A%22129.99%22%2C%22value%22%3A%22Online%20Management%5CnVideo%20Tutorials%5CnEmail%20Campaigns%5Cn3%20GB%20Storage%5Cn15%20Statistics%20Report%5Cn20%20Email%20Accounts%22%2C%22billing_cycle%22%3A%22Per%20Month%22%2C%22button_text%22%3A%22Purchase%22%2C%22button_link%22%3A%22%23%22%7D%2C%7B%22label%22%3A%22Premium%22%2C%22head_sep_but_color%22%3A%22%23f33763%22%2C%22price%22%3A%22199.99%22%2C%22value%22%3A%22Online%20Management%5CnVideo%20Tutorials%5CnEmail%20Campaigns%5Cn3%20GB%20Storage%5Cn15%20Statistics%20Report%5Cn20%20Email%20Accounts%22%2C%22billing_cycle%22%3A%22Per%20Month%22%2C%22button_text%22%3A%22Contact%20Us%22%2C%22button_link%22%3A%22%23%22%7D%5D"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( '4 Pricing Columns 2', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['portfolio'];
$data['custom_class'] = 'main pricing_columns agency';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/pricing_columns2.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row][vc_column css=".vc_custom_1444918377384{padding-top: 80px !important;padding-bottom: 80px !important;}"][vc_custom_heading text="Flexible Pricing" font_container="tag:h2|font_size:26|text_align:center|color:%23474747|line_height:1.3" google_fonts="font_family:Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900|font_style:600%20bold%20regular%3A600%3Anormal"][vc_custom_heading text="Start your business by selecting the services you want to use below." font_container="tag:h2|font_size:16|text_align:center|color:%23474747|line_height:1.3" google_fonts="font_family:Lora%3Aregular%2Citalic%2C700%2C700italic|font_style:400%20italic%3A400%3Aitalic"][vc_separator_2 color_line="#444444" padding_top="20" padding_bottom="40"][vc_row_inner][vc_column_inner width="1/2" offset="vc_col-lg-3 vc_col-md-6"][vc_price_column heading_text="Basic" price="9" pf_text_color="#444444" title="Sign Up" color="grey" css_animation="bottom-to-top"]
<ul>
 	<li>15 Projects</li>
 	<li>30 GB Storage</li>
 	<li>50 GB Data Transfer</li>
 	<li>50 GB Bandwith</li>
 	<li>5 User Accounts</li>
 	<li>Basic Security</li>
</ul>
[/vc_price_column][/vc_column_inner][vc_column_inner width="1/2" offset="vc_col-lg-3 vc_col-md-6"][vc_price_column col_type="promo" heading_text="Premium" heading_text_color="#ffffff" pf_text_color="#444444" title="Sign Up" color="green" css_animation="bottom-to-top" delay="300"]
<ul>
 	<li>35 Projects</li>
 	<li>30 GB Storage</li>
 	<li>Unlimited Data Transfer</li>
 	<li>50 GB Bandwith</li>
 	<li>500 User Accounts</li>
 	<li>Enhanced Security</li>
 	<li>Unlimited Support</li>
 	<li>Dedicated Email Client</li>
 	<li>5 Dedicated IP</li>
 	<li>Custom Analytic Stats</li>
</ul>
[/vc_price_column][/vc_column_inner][vc_column_inner width="1/2" offset="vc_col-lg-3 vc_col-md-6"][vc_price_column col_type="promo" heading_text="Platinum" heading_text_color="#ffffff" price="49" pf_text_color="#444444" title="Sign Up" color="green" css_animation="bottom-to-top" delay="600"]
<ul>
 	<li>99 Projects</li>
 	<li>100 GB Storage</li>
 	<li>Unlimited Data Transfer</li>
 	<li>1000 GB Bandwith</li>
 	<li>2000 User Accounts</li>
 	<li>Enhanced Security</li>
 	<li>Unlimited Support</li>
 	<li>Dedicated Email Clien</li>
 	<li>10 Dedicated IP address</li>
 	<li>Custom Analytic Stats</li>
 	<li>Unlimited Sub Domains</li>
 	<li>Dedicated Account Manager</li>
</ul>
[/vc_price_column][/vc_column_inner][vc_column_inner width="1/2" offset="vc_col-lg-3 vc_col-md-6"][vc_price_column price="19" pf_text_color="#444444" title="Sign Up" color="grey" css_animation="bottom-to-top" delay="900"]
<ul>
 	<li>25 Projects</li>
 	<li>50 GB Storage</li>
 	<li>Unlimited Data Transfer</li>
 	<li>80 GB Bandwith</li>
 	<li>50 User Accounts</li>
 	<li>Enhanced Security</li>
 	<li>6 Months Support</li>
 	<li>20 Domains</li>
</ul>
[/vc_price_column][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

/* End Portfolio */
/* ================================================== */

/* Team Member Element */
/* ================================================== */

$data = array();
$data['name'] = __( 'Title + Team Members', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['portfolio'];
$data['custom_class'] = 'default team_members';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/team_members_1.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1427050961790{padding-top: 80px !important;}"][vc_column 0=""][vc_separator_2 style="line_symbol" icon_fontawesome="fa fa-thumbs-up" color_line="rgba(73,73,73,0.01)" color_symbol="#444444" padding_bottom="20"][ctitle title="Our Super Team" color="#3f3f3f" background="rgba(255,255,255,0.01)" font_weight="700" separator_color="#d3d3d3"][vc_custom_heading text="Our team will always be there to help you and your business." font_container="tag:p|font_size:18|text_align:center|line_height:1.5" use_theme_fonts="yes"][vc_separator_2 color_line="#444444" padding_top="10" padding_bottom="10"][/vc_column][/vc_row][vc_row css=".vc_custom_1449591734253{padding-top: 40px !important;padding-bottom: 20px !important;}"][vc_column width="1/4" css=".vc_custom_1449591239025{padding: 40px !important;}"][vc_employee image="3685" img_style="round" colors="custom" position_color="#707070" sc_bg="#ffffff" sc_color="#444444" name="John Does" position="Founder" facebook="#" twitter="#" gplus="#" linkedin="#" instagram="#"][/vc_employee][/vc_column][vc_column width="1/4" css=".vc_custom_1449591378331{padding: 40px !important;}"][vc_employee image="3687" img_style="round" colors="custom" img_hover_color="#ffffff" icon_color="#2b2b2b" position_color="#707070" separator_color="#eaeaea" description_color="#6d6d6d" desc_border_color="#eeee22" sc_bg="#ffffff" sc_color="#444444" name="Jessica Pong" position="Art Director" facebook="#" twitter="#" gplus="#" linkedin="#" instagram="#"][/vc_employee][/vc_column][vc_column width="1/4" css=".vc_custom_1449591697566{padding: 40px !important;}"][vc_employee image="3686" img_style="round" colors="custom" position_color="#707070" sc_bg="#ffffff" sc_color="#444444" name="Edward Groom" position="Financial CEO" facebook="#" twitter="#" gplus="#" linkedin="#" pinterest="#"][/vc_employee][/vc_column][vc_column width="1/4" css=".vc_custom_1499340441846{padding-top: 40px !important;padding-right: 40px !important;padding-bottom: 40px !important;padding-left: 40px !important;}"][vc_employee image="3688" img_style="round" colors="custom" img_hover_color="#ffffff" icon_color="#2b2b2b" position_color="#707070" separator_color="#eaeaea" description_color="#6d6d6d" desc_border_color="#eeee22" sc_bg="#ffffff" sc_color="#444444" name="Jessica Pong" position="Marketing CEF" facebook="#" twitter="#" gplus="#" linkedin="#" instagram="#"][/vc_employee][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Team Members 2 Columns', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['portfolio'];
$data['custom_class'] = 'business team_members';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/team_members_2.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1486476957510{padding-top: 60px !important;}"][vc_column width="1/2"][vc_employee emp_design="business"  href="#" colors="custom" img_hover_color="#2b7ce6" opacity="0.8" name_color="#14183c" position_color="#2b7ce6" separator_color="rgba(241,241,241,0.01)" description_color="#939399" sc_bg="#ffffff" sc_color="#5b5b5b" name="Thomas Drawsome" position="CEO & Co-Founder" facebook="f" twitter="t" gplus="g" linkedin="l"]Add here a small description or bio for this Employee. Change the Text color, the orientation and the design of the Employee with simple mouse clicks.[/vc_employee][/vc_column][vc_column width="1/2"][vc_employee emp_design="business" href="#" colors="custom" img_hover_color="#2b7ce6" opacity="0.8" name_color="#14183c" position_color="#2b7ce6" separator_color="rgba(241,241,241,0.01)" description_color="#939399" sc_bg="#ffffff" sc_color="#5b5b5b" name="Maria Montgomery" position="Financial CEO" facebook="f" twitter="t" gplus="g" linkedin="l"]Add here a small description or bio for this Employee. Change the Text color, the orientation and the design of the Employee with simple mouse clicks.[/vc_employee][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Team Members 4 Columns', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['portfolio'];
$data['custom_class'] = 'business team_members';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/team_members_3.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1486479963685{padding-bottom: 60px !important;}"][vc_column width="1/4"][vc_employee emp_design="business"  href="#" colors="custom" img_hover_color="#2b7ce6" opacity="0.8" name_color="#14183c" position_color="#2b7ce6" separator_color="rgba(241,241,241,0.01)" description_color="#939399" sc_bg="#ffffff" sc_color="#5b5b5b" name="Mike Allister" position="Executive Director" facebook="f" twitter="t" gplus="g" linkedin="l"]Add here a small description or bio for this Employee. Change the Text color, the orientation and the design of the Employee with simple mouse clicks.[/vc_employee][/vc_column][vc_column width="1/4"][vc_employee emp_design="business" href="#" colors="custom" img_hover_color="#2b7ce6" opacity="0.8" name_color="#14183c" position_color="#2b7ce6" separator_color="rgba(241,241,241,0.01)" description_color="#939399" sc_bg="#ffffff" sc_color="#5b5b5b" name="John Anderson" position="Executive Director" facebook="f" twitter="t" gplus="g" linkedin="l"]Add here a small description or bio for this Employee. Change the Text color, the orientation and the design of the Employee with simple mouse clicks.[/vc_employee][/vc_column][vc_column width="1/4"][vc_employee emp_design="business" href="#" colors="custom" img_hover_color="#2b7ce6" opacity="0.8" name_color="#14183c" position_color="#2b7ce6" separator_color="rgba(241,241,241,0.01)" description_color="#939399" sc_bg="#ffffff" sc_color="#5b5b5b" name="Andrew Star" position="Executive Director" facebook="f" twitter="t" gplus="g" linkedin="l"]Add here a small description or bio for this Employee. Change the Text color, the orientation and the design of the Employee with simple mouse clicks.[/vc_employee][/vc_column][vc_column width="1/4"][vc_employee emp_design="business"  href="#" colors="custom" img_hover_color="#2b7ce6" opacity="0.8" name_color="#14183c" position_color="#2b7ce6" separator_color="rgba(241,241,241,0.01)" description_color="#939399" sc_bg="#ffffff" sc_color="#5b5b5b" name="Simone Pink" position="Executive Director" facebook="f" twitter="t" gplus="g" linkedin="l"]Add here a small description or bio for this Employee. Change the Text color, the orientation and the design of the Employee with simple mouse clicks.[/vc_employee][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Team Members 2 Columns 2', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['portfolio'];
$data['custom_class'] = 'lifecoach team_members';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/team_members_4.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1496751037193{padding-top: 10% !important;}"][vc_column 0=""][vc_custom_heading text="STAFF MEMBERS" font_container="tag:h2|font_size:14px|text_align:center|color:%233f3b51" use_theme_fonts="yes" css=".vc_custom_1496493855498{padding-bottom: 40px !important;}"][/vc_column][/vc_row][vc_row css=".vc_custom_1496751105962{padding-bottom: 10% !important;}"][vc_column css_animation="fadeInLeft" width="1/2"][vc_single_image img_size="full" css=".vc_custom_1496493820613{padding-bottom: 20px !important;}"][vc_custom_heading text="YOGA" font_container="tag:h2|font_size:14px|text_align:left|color:%23a3a1a8" use_theme_fonts="yes"][vc_custom_heading text="CHERYL BASTARACHE" font_container="tag:h2|font_size:22px|text_align:left|color:%233f3b51" use_theme_fonts="yes" css=".vc_custom_1496493670937{padding-bottom: 10px !important;}"][vc_column_text 0=""]<span style="color: #939399;">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. </span>

<span style="color: #939399;">No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally.</span>[/vc_column_text][/vc_column][vc_column css_animation="fadeInRight" width="1/2"][vc_single_image img_size="full" css=".vc_custom_1496493846448{padding-bottom: 20px !important;}"][vc_custom_heading text="FITNESS" font_container="tag:h2|font_size:14px|text_align:left|color:%23a3a1a8" use_theme_fonts="yes"][vc_custom_heading text="MATT NOLLEY" font_container="tag:h2|font_size:22px|text_align:left|color:%233f3b51" use_theme_fonts="yes" css=".vc_custom_1496493716776{padding-bottom: 10px !important;}"][vc_column_text 0=""]<span style="color: #939399;">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. </span>

<span style="color: #939399;">No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally.</span>[/vc_column_text][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Team Members 3 Columns', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['portfolio'];
$data['custom_class'] = 'main team_members cafebar';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/team_members_5.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row parallax="yes" css=".vc_custom_1460205506035{padding-top: 80px !important;background-image: url(http://rockythemes.com/creativo-cafe/wp-content/uploads/2016/04/happy-chef-bg.jpg?id=195) !important;}"][vc_column][vc_custom_heading text="OUR TEAM" font_container="tag:h2|font_size:40|text_align:center|color:%23ffffff" use_theme_fonts="yes"][vc_custom_heading text="The Team that makes it all happen" font_container="tag:h2|font_size:20|text_align:center|color:%23d0bc9b" use_theme_fonts="yes"][vc_separator_2 color_line="#d1b181" padding_top="10" padding_bottom="40"][vc_row_inner][vc_column_inner width="1/3" css=".vc_custom_1460203383423{padding: 10% !important;}"][vc_employee  img_style="round" href="#" colors="custom" img_hover_color="#d0bc9b" icon_color="rgba(255,255,255,0.01)" description_bg="rgba(10,10,10,0.01)" name_color="#d0bc9b" position_color="#ffffff" separator_color="#555555" sc_bg="rgba(241,241,241,0.01)" sc_color="#ffffff" name="Drew Star" position="Italian Cuisine" facebook="#" twitter="#" gplus="#" linkedin="#" instagram="#"]Aliquam erat volutpat. Aenean a suscipit ex. Fusce tempor malesuada dolor, ut pharetra nunc porta et.[/vc_employee][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1460203395348{padding: 10% !important;}"][vc_employee  img_style="round" href="#" colors="custom" img_hover_color="#d0bc9b" icon_color="rgba(255,255,255,0.01)" description_bg="rgba(10,10,10,0.01)" name_color="#d0bc9b" position_color="#ffffff" separator_color="#555555" sc_bg="rgba(241,241,241,0.01)" sc_color="#ffffff" name="Matthew Bic" position="Asian Cuisine" facebook="#" twitter="#" gplus="#" linkedin="#" instagram="#"]Fusce tempor malesuada dolor, ut pharetra nunc porta et. Donec elit tortor, vulputate at interdum eu.[/vc_employee][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1460203405151{padding: 10% !important;}"][vc_employee  img_style="round" href="#" colors="custom" img_hover_color="#d0bc9b" icon_color="rgba(255,255,255,0.01)" description_bg="rgba(10,10,10,0.01)" name_color="#d0bc9b" position_color="#ffffff" separator_color="#555555" sc_bg="rgba(241,241,241,0.01)" sc_color="#ffffff" name="ANDREW JACOB" position="French Cuisine" facebook="#" twitter="#" gplus="#" linkedin="#" instagram="#"]Vestibulum eu lacus vel magna malesuada mattis quis eget dolor varius massa et viverra accumsan.[/vc_employee][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Team Members 4 Columns', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['portfolio'];
$data['custom_class'] = 'main team_members shopkeeper';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/team_members_6.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1479384499880{padding-top: 80px !important;padding-bottom: 0px !important;background-color: #f7f7f7 !important;}"][vc_column][vc_custom_heading text="THE TEAM" font_container="tag:h2|font_size:25|text_align:center|color:%23383838" google_fonts="font_family:Open%20Sans%3A300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic|font_style:600%20bold%20regular%3A600%3Anormal"][vc_column_text]
<p style="text-align: center;">Using the Team Member element we can easily show off the great team behind the ShopKeeper.
This template can be easily imported with just one click from the Appearance -&gt; Import Templates area of the Creativo theme.</p>
[/vc_column_text][vc_separator_2 color_line="#444444" padding_top="30"][/vc_column][/vc_row][vc_row css=".vc_custom_1479387014514{padding-top: 40px !important;background-color: #f9f9f9 !important;}"][vc_column width="1/4" css=".vc_custom_1479387057598{padding-right: 10% !important;padding-left: 10% !important;}"][vc_employee image="146" img_style="round" colors="custom" description_bg="rgba(255,255,255,0.01)" position_color="#a0a0a0" separator_color="#efefef" description_color="#494949" sc_bg="rgba(255,255,255,0.01)" sc_color="#383838" name="Michael Bay" position="FOUNDER" facebook="http://facebook.com/rockythemes/" twitter="http://twitter.com/rockythemes/" gplus="http://plus.google.com/rockythemes/" linkedin="http://linkedin.com/rockythemes/"][/vc_employee][/vc_column][vc_column width="1/4" css=".vc_custom_1479387088139{padding-right: 10% !important;padding-left: 10% !important;}"][vc_employee image="149" img_style="round" colors="custom" description_bg="rgba(255,255,255,0.01)" position_color="#a0a0a0" separator_color="#efefef" description_color="#494949" sc_bg="rgba(255,255,255,0.01)" sc_color="#383838" name="Shauna Pink" position="Customer Support" facebook="http://facebook.com/rockythemes/" twitter="http://twitter.com/rockythemes/" gplus="http://plus.google.com/rockythemes/" linkedin="http://linkedin.com/rockythemes/"][/vc_employee][/vc_column][vc_column width="1/4" css=".vc_custom_1479387100373{padding-right: 10% !important;padding-left: 10% !important;}"][vc_employee image="147" img_style="round" colors="custom" description_bg="rgba(255,255,255,0.01)" position_color="#a0a0a0" separator_color="#81d742" description_color="#494949" desc_border_color="#dddddd" sc_bg="rgba(255,255,255,0.01)" sc_color="#383838" name="Jeremy Clay" position="Public Relations" facebook="http://facebook.com/rockythemes/" twitter="http://twitter.com/rockythemes/" gplus="http://plus.google.com/rockythemes/" linkedin="http://linkedin.com/rockythemes/"][/vc_employee][/vc_column][vc_column width="1/4" css=".vc_custom_1479387119250{padding-right: 10% !important;padding-left: 10% !important;}"][vc_employee image="148" img_style="round" colors="custom" description_bg="rgba(255,255,255,0.01)" position_color="#a0a0a0" separator_color="#efefef" description_color="#494949" sc_bg="rgba(255,255,255,0.01)" sc_color="#383838" name="Graham Dot" position="Marketing director" facebook="http://facebook.com/rockythemes/" twitter="http://twitter.com/rockythemes/" gplus="http://plus.google.com/rockythemes/" linkedin="http://linkedin.com/rockythemes/"][/vc_employee][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Title + Team Members 2 Cols', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['portfolio'];
$data['custom_class'] = 'main team_members agency';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/team_members_7.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1444782235646{padding-top: 80px !important;}"][vc_column][vc_custom_heading text="Meet Our Team" font_container="tag:h2|font_size:26|text_align:center|color:%23444444" google_fonts="font_family:Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900|font_style:600%20bold%20regular%3A600%3Anormal"][vc_custom_heading text="This is a section created using the Team Member element of Visual Composer." font_container="tag:h2|font_size:16|text_align:center|color:%23444444" google_fonts="font_family:Lora%3Aregular%2Citalic%2C700%2C700italic|font_style:400%20italic%3A400%3Aitalic"][vc_separator_2 color_line="#444444" padding_top="10" padding_bottom="40"][vc_row_inner css=".vc_custom_1445203873894{padding-bottom: 0px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1445203892897{border-right-width: 1px !important;padding-bottom: 40px !important;border-right-color: #f2f2f2 !important;border-right-style: solid !important;}"][vc_employee employee_style="horizontal" img_style="round" href="#" colors="custom" description_bg="" position_color="#5bc98c" description_color="#4c4c4c" desc_border_color="" sc_bg="rgba(0,0,0,0.01)" sc_color="#4c4c4c" name="Johnny Camp" position="Financial CEO" facebook="#" twitter="#" gplus="#" linkedin="#" instagram="#" pinterest="#"]Johnny Camp is a nice Team Member element you can use anywhere on your pages. Creating it is easy for everyone.[/vc_employee][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1445203903177{padding-bottom: 40px !important;}"][vc_employee employee_style="horizontal" img_style="round" href="#" colors="custom" description_bg="" position_color="#5bc98c" description_color="#4c4c4c" sc_bg="rgba(241,241,241,0.01)" sc_color="#4c4c4c" name="Jessica Lane" position="Production Manager" facebook="#" twitter="#" gplus="#" linkedin="#" instagram="#" pinterest="#"]Jessica Lane is a nice Team Member element you can use anywhere on your pages. Creating it is easy for everyone.[/vc_employee][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1445203946495{border-top-width: 1px !important;border-top-color: #f2f2f2 !important;border-top-style: solid !important;}"][vc_column_inner width="1/2" css=".vc_custom_1445203955217{border-right-width: 1px !important;padding-top: 40px !important;border-right-color: #f2f2f2 !important;border-right-style: solid !important;}"][vc_employee employee_style="horizontal" img_style="round" href="#" colors="custom" description_bg="" position_color="#5bc98c" description_color="#4c4c4c" desc_border_color="" sc_bg="rgba(0,0,0,0.01)" sc_color="#4c4c4c" name="Michael Tinder" position="Lead Designer" facebook="#" twitter="#" gplus="#" linkedin="#" instagram="#" pinterest="#"]Michael Tinder is a nice Team Member element you can use anywhere on your pages. Creating it is easy for everyone.[/vc_employee][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1445203961961{padding-top: 40px !important;}"][vc_employee employee_style="horizontal"  img_style="round" href="#" colors="custom" description_bg="" position_color="#5bc98c" description_color="#4c4c4c" sc_bg="rgba(241,241,241,0.01)" sc_color="#4c4c4c" name="Matthew Grow" position="Lead Programmer" facebook="#" twitter="#" gplus="#" linkedin="#" instagram="#" pinterest="#"]Matthew Grow is a nice Team Member element you can use anywhere on your pages. Creating it is easy for everyone.[/vc_employee][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

/* End Team Member */
/* ================================================== */

/* Google Maps Element */
/* ================================================== */

$data = array();
$data['name'] = __( 'Google Map 1', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['portfolio'];
$data['custom_class'] = 'default google_maps';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/google_map1.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row layout="stretch_row_content_no_spaces"][vc_column][gmap_advanced address="1600 Amphitheatre Parkway, Mountain View" map_style="1" size="500px" zoom="16" scrollwheel="no" pan="no" title="This is Creativo" message="The Ultimate Multi Purpose theme for WordPress you have to buy. Set everything up with simply mouse clicks, no coding is needed!" email="hello@yoursite.com" phone="555-CALL-US"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Google Map 2', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['portfolio'];
$data['custom_class'] = 'business google_maps';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/google_map2.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row layout="stretch_row_content_no_spaces"][vc_column][gmap_advanced map_style="custom" size="650px" zoom="13" scrollwheel="no" type_control="no" title="Creativo's Contact Map" message="This is the Contact page created using the Advanced Google Map element of Visual Composer. Update the google map design with your own custom design and change the address with your business address." email="support@rockythemes.com" phone="+1 650-253-0000" custom_map_style="JTVCJTdCJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjJhZG1pbmlzdHJhdGl2ZS5sb2NhbGl0eSUyMiUyQyUyMmVsZW1lbnRUeXBlJTIyJTNBJTIyYWxsJTIyJTJDJTIyc3R5bGVycyUyMiUzQSU1QiU3QiUyMmh1ZSUyMiUzQSUyMiUyMzJjMmUzMyUyMiU3RCUyQyU3QiUyMnNhdHVyYXRpb24lMjIlM0E3JTdEJTJDJTdCJTIybGlnaHRuZXNzJTIyJTNBMTklN0QlMkMlN0IlMjJ2aXNpYmlsaXR5JTIyJTNBJTIyb24lMjIlN0QlNUQlN0QlMkMlN0IlMjJmZWF0dXJlVHlwZSUyMiUzQSUyMmxhbmRzY2FwZSUyMiUyQyUyMmVsZW1lbnRUeXBlJTIyJTNBJTIyYWxsJTIyJTJDJTIyc3R5bGVycyUyMiUzQSU1QiU3QiUyMmh1ZSUyMiUzQSUyMiUyM2ZmZmZmZiUyMiU3RCUyQyU3QiUyMnNhdHVyYXRpb24lMjIlM0EtMTAwJTdEJTJDJTdCJTIybGlnaHRuZXNzJTIyJTNBMTAwJTdEJTJDJTdCJTIydmlzaWJpbGl0eSUyMiUzQSUyMnNpbXBsaWZpZWQlMjIlN0QlNUQlN0QlMkMlN0IlMjJmZWF0dXJlVHlwZSUyMiUzQSUyMnBvaSUyMiUyQyUyMmVsZW1lbnRUeXBlJTIyJTNBJTIyYWxsJTIyJTJDJTIyc3R5bGVycyUyMiUzQSU1QiU3QiUyMmh1ZSUyMiUzQSUyMiUyM2ZmZmZmZiUyMiU3RCUyQyU3QiUyMnNhdHVyYXRpb24lMjIlM0EtMTAwJTdEJTJDJTdCJTIybGlnaHRuZXNzJTIyJTNBMTAwJTdEJTJDJTdCJTIydmlzaWJpbGl0eSUyMiUzQSUyMm9mZiUyMiU3RCU1RCU3RCUyQyU3QiUyMmZlYXR1cmVUeXBlJTIyJTNBJTIycm9hZCUyMiUyQyUyMmVsZW1lbnRUeXBlJTIyJTNBJTIyZ2VvbWV0cnklMjIlMkMlMjJzdHlsZXJzJTIyJTNBJTVCJTdCJTIyaHVlJTIyJTNBJTIyJTIzYmJjMGM0JTIyJTdEJTJDJTdCJTIyc2F0dXJhdGlvbiUyMiUzQS05MyU3RCUyQyU3QiUyMmxpZ2h0bmVzcyUyMiUzQTMxJTdEJTJDJTdCJTIydmlzaWJpbGl0eSUyMiUzQSUyMnNpbXBsaWZpZWQlMjIlN0QlNUQlN0QlMkMlN0IlMjJmZWF0dXJlVHlwZSUyMiUzQSUyMnJvYWQlMjIlMkMlMjJlbGVtZW50VHlwZSUyMiUzQSUyMmxhYmVscyUyMiUyQyUyMnN0eWxlcnMlMjIlM0ElNUIlN0IlMjJodWUlMjIlM0ElMjIlMjNiYmMwYzQlMjIlN0QlMkMlN0IlMjJzYXR1cmF0aW9uJTIyJTNBLTkzJTdEJTJDJTdCJTIybGlnaHRuZXNzJTIyJTNBMzElN0QlMkMlN0IlMjJ2aXNpYmlsaXR5JTIyJTNBJTIyb24lMjIlN0QlNUQlN0QlMkMlN0IlMjJmZWF0dXJlVHlwZSUyMiUzQSUyMnJvYWQuYXJ0ZXJpYWwlMjIlMkMlMjJlbGVtZW50VHlwZSUyMiUzQSUyMmxhYmVscyUyMiUyQyUyMnN0eWxlcnMlMjIlM0ElNUIlN0IlMjJodWUlMjIlM0ElMjIlMjNiYmMwYzQlMjIlN0QlMkMlN0IlMjJzYXR1cmF0aW9uJTIyJTNBLTkzJTdEJTJDJTdCJTIybGlnaHRuZXNzJTIyJTNBLTIlN0QlMkMlN0IlMjJ2aXNpYmlsaXR5JTIyJTNBJTIyc2ltcGxpZmllZCUyMiU3RCU1RCU3RCUyQyU3QiUyMmZlYXR1cmVUeXBlJTIyJTNBJTIycm9hZC5sb2NhbCUyMiUyQyUyMmVsZW1lbnRUeXBlJTIyJTNBJTIyZ2VvbWV0cnklMjIlMkMlMjJzdHlsZXJzJTIyJTNBJTVCJTdCJTIyaHVlJTIyJTNBJTIyJTIzZTllYmVkJTIyJTdEJTJDJTdCJTIyc2F0dXJhdGlvbiUyMiUzQS05MCU3RCUyQyU3QiUyMmxpZ2h0bmVzcyUyMiUzQS04JTdEJTJDJTdCJTIydmlzaWJpbGl0eSUyMiUzQSUyMnNpbXBsaWZpZWQlMjIlN0QlNUQlN0QlMkMlN0IlMjJmZWF0dXJlVHlwZSUyMiUzQSUyMnRyYW5zaXQlMjIlMkMlMjJlbGVtZW50VHlwZSUyMiUzQSUyMmFsbCUyMiUyQyUyMnN0eWxlcnMlMjIlM0ElNUIlN0IlMjJodWUlMjIlM0ElMjIlMjNlOWViZWQlMjIlN0QlMkMlN0IlMjJzYXR1cmF0aW9uJTIyJTNBMTAlN0QlMkMlN0IlMjJsaWdodG5lc3MlMjIlM0E2OSU3RCUyQyU3QiUyMnZpc2liaWxpdHklMjIlM0ElMjJvbiUyMiU3RCU1RCU3RCUyQyU3QiUyMmZlYXR1cmVUeXBlJTIyJTNBJTIyd2F0ZXIlMjIlMkMlMjJlbGVtZW50VHlwZSUyMiUzQSUyMmFsbCUyMiUyQyUyMnN0eWxlcnMlMjIlM0ElNUIlN0IlMjJodWUlMjIlM0ElMjIlMjNlOWViZWQlMjIlN0QlMkMlN0IlMjJzYXR1cmF0aW9uJTIyJTNBLTc4JTdEJTJDJTdCJTIybGlnaHRuZXNzJTIyJTNBNjclN0QlMkMlN0IlMjJ2aXNpYmlsaXR5JTIyJTNBJTIyc2ltcGxpZmllZCUyMiU3RCU1RCU3RCU1RA=="][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Google Map 3', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['portfolio'];
$data['custom_class'] = 'lifecoach google_maps';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/google_map3.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row layout="stretch_row_content_no_spaces"][vc_column][gmap_advanced map_style="3" size="500px" zoom="14" scrollwheel="no" email="hello@yoursite.com" phone="555-Call-Now" title="Welcome to LifeCoach" message="This is another great template created with Creativo 6. You can import everything with just one click. Happy site creation from RockyThemes."][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Google Map 4', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['portfolio'];
$data['custom_class'] = 'main google_maps cafebar';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/google_map4.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row layout="stretch_row_content_no_spaces" css=".vc_custom_1460040782005{border-top-width: 1px !important;border-bottom-width: 1px !important;border-top-color: #494949 !important;border-top-style: solid !important;border-bottom-color: #494949 !important;border-bottom-style: solid !important;}"][vc_column][gmap_advanced pop_size="300px" map_style="custom" size="450px" zoom="14" popup="no" scrollwheel="no" pan="no" zoom_control="no" type_control="no" streetview="no" title="Our Address" message="This is our actual address. Come on by and you will never want to leave." custom_map_style="JTVCJTBBJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjAlMjJhbGwlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJlbGVtZW50VHlwZSUyMiUzQSUyMCUyMmxhYmVscy50ZXh0LmZpbGwlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyc2F0dXJhdGlvbiUyMiUzQSUyMDM2JTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNkMWIxODElMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjA0MCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIyYWxsJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZWxlbWVudFR5cGUlMjIlM0ElMjAlMjJsYWJlbHMudGV4dC5zdHJva2UlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIydmlzaWJpbGl0eSUyMiUzQSUyMCUyMm9uJTIyJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjMwMDAwMDAlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAxNiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIyYWxsJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZWxlbWVudFR5cGUlMjIlM0ElMjAlMjJsYWJlbHMuaWNvbiUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnN0eWxlcnMlMjIlM0ElMjAlNUIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJ2aXNpYmlsaXR5JTIyJTNBJTIwJTIyb2ZmJTIyJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTVEJTBBJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjAlMjJhZG1pbmlzdHJhdGl2ZSUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnkuZmlsbCUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnN0eWxlcnMlMjIlM0ElMjAlNUIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJjb2xvciUyMiUzQSUyMCUyMiUyMzgzZDI5YSUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmxpZ2h0bmVzcyUyMiUzQSUyMDIwJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTVEJTBBJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjAlMjJhZG1pbmlzdHJhdGl2ZSUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnkuc3Ryb2tlJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyc3R5bGVycyUyMiUzQSUyMCU1QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmNvbG9yJTIyJTNBJTIwJTIyJTIzMDAwMDAwJTIyJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIybGlnaHRuZXNzJTIyJTNBJTIwMTclMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJ3ZWlnaHQlMjIlM0ElMjAxLjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlNUQlMEElMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJmZWF0dXJlVHlwZSUyMiUzQSUyMCUyMmxhbmRzY2FwZSUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjMzMTM1MzklMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAlMjIwJTIyJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIydmlzaWJpbGl0eSUyMiUzQSUyMCUyMm9uJTIyJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTVEJTBBJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjAlMjJwb2klMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJlbGVtZW50VHlwZSUyMiUzQSUyMCUyMmdlb21ldHJ5JTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyc3R5bGVycyUyMiUzQSUyMCU1QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmNvbG9yJTIyJTNBJTIwJTIyJTIzMDAwMDAwJTIyJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIybGlnaHRuZXNzJTIyJTNBJTIwMjElMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJ2aXNpYmlsaXR5JTIyJTNBJTIwJTIyb2ZmJTIyJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTVEJTBBJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjAlMjJyb2FkLmhpZ2h3YXklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJlbGVtZW50VHlwZSUyMiUzQSUyMCUyMmdlb21ldHJ5LmZpbGwlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjMwMDAwMDAlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAxNyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIycm9hZC5oaWdod2F5JTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZWxlbWVudFR5cGUlMjIlM0ElMjAlMjJnZW9tZXRyeS5zdHJva2UlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjMwMDAwMDAlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAyOSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMndlaWdodCUyMiUzQSUyMDAuMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIycm9hZC5hcnRlcmlhbCUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjMwMDAwMDAlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAxOCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIycm9hZC5sb2NhbCUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjMwMDAwMDAlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAxNiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIydHJhbnNpdCUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjMwMDAwMDAlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAxOSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIyd2F0ZXIlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJlbGVtZW50VHlwZSUyMiUzQSUyMCUyMmdlb21ldHJ5JTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyc3R5bGVycyUyMiUzQSUyMCU1QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmNvbG9yJTIyJTNBJTIwJTIyJTIzMzEzNTM5JTIyJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIybGlnaHRuZXNzJTIyJTNBJTIwMTclMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlNUQlMEElMjAlMjAlMjAlMjAlN0QlMEElNUQ="][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

/* End Google Maps */
/* ================================================== */

/* Contact Info Element */
/* ================================================== */

$data = array();
$data['name'] = __( 'Contact Info 1', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['portfolio'];
$data['custom_class'] = 'default contact_info';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/contact_info.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1505941699700{padding-top: 80px !important;}"][vc_column width="1/2"][ctitle title="Contact Info" uppercase="no" color="#3d3d3d" background="#ffffff" font_size="20" font_weight="600" position="left"][vc_column_text]You can easily change all the contact info on this page by simply editing this page. We did all the hard work to provide you with the best tools to create a nice looking contact page. The map above is automatically generated based on the info you enter under Appearance -&gt; Theme Options -&gt; Contact Options.[/vc_column_text][vc_separator style="blank" padding_top="15" padding_bottom="15"][vc_product_feature title="Office Location" font_size="18" title_color="#444444" icon_fontawesome="fa fa-paper-plane" icon_color="#ffffff" icon_size="big" icon_bg_color="#444444" icon_bg_shape="circle"]You can reach us at the following address:
<strong>13/2 Elizabeth Street, Melbourne VIC 3000, Australia</strong>[/vc_product_feature][vc_separator style="blank" padding_top="10" padding_bottom=""][vc_product_feature title="Email Address" font_size="18" title_color="#444444" icon_fontawesome="fa fa-envelope" icon_color="#ffffff" icon_size="big" icon_bg_color="#444444" icon_bg_shape="circle"]Send us your questions by email and we will reply as soon as possible:
<b>support[at]rockythemes.com</b>[/vc_product_feature][vc_separator style="blank" padding_top="10" padding_bottom=""][vc_product_feature title="Working Hours" font_size="18" title_color="#444444" icon_fontawesome="fa fa-thumbs-up" icon_color="#ffffff" icon_size="big" icon_bg_color="#444444" icon_bg_shape="circle"]We are doing our best to provide the best support. Working hours:

[checklist text_color="" icon_color="" fontawesome_icon="fa fa-clock-o"]
<ul>
 	<li>Mon - Fri : 10AM - 11PM</li>
 	<li>Sat - 10AM - 5PM</li>
 	<li>Sun - Closed.</li>
</ul>
[/checklist][/vc_product_feature][vc_separator style="double" padding_top="10" padding_bottom="20"][vc_column_text]You can also make use of the Social Icons element of Visual Composer to provide more contact info for your visitors. See a working example of the Social Icons element below:[/vc_column_text][social_icons style="custom" icon_gap="6px" bg_color="#ffffff" icon_color="#444444" position="center" fb="http://facebook.com/rockythemes" tw="http://twitter.com/rockythemes" goo="#" link="#" flk="#" pin="#" stumble="#" insta="#" tbl="#" drb="#" beh="#" vm="#" sk="#" dg="#" rdd="#" dev="#" yah="#" yt="#" sc="#" xng="#"][/vc_column][vc_column width="1/2"][ctitle title="Get in Touch" uppercase="no" color="#3d3d3d" background="#ffffff" font_size="20" font_weight="600" position="left"][vc_column_text]The form below is created using the free Contact Form 7 plugin for WordPress which allows you to easily create powerful Contact forms for your site. The design of the form can be changed by creating/editing the Contact Form 7 element. It's very easy, anyone can do it.[/vc_column_text][vc_separator style="blank" padding_top="15" padding_bottom="15"][vc_separator style="blank" padding_top="10" padding_bottom=""][contact-form-7-mod id="3144" style="custom" input_border="#999999" input_border_focus="#5bc98c" btn_full="yes" btn_font_weight="600" btn_bg="#ffffff" btn_bg_hover="#444444" btn_border="#999999" btn_border_hover="#444444" btn_text="#3d3d3d" btn_text_hover="#ffffff"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Contact Info 2', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'contact_info';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/title_image_text.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1486649774119{padding-top: 10% !important;padding-bottom: 10% !important;}"][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]<span style="font-size: 17px; line-height: 26px; color: #abacb2;">The Google Map that appears on top of this page is created using the Visual Composer element called: Advanced Google Maps. The map will work correctly after you enter a Google Map Api under Theme Options -&gt; Contact Options -&gt; Google Map Api</span>[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row css=".vc_custom_1486650956409{padding-bottom: 10% !important;}"][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_row_inner equal_height="yes" content_placement="middle"][vc_column_inner width="1/2"][vc_single_image img_size="full"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1486650680329{background-color: #14183c !important;}"][vc_custom_heading text="Main Office" font_container="tag:h2|font_size:50px|text_align:center|color:%23ffffff" use_theme_fonts="yes"][vc_column_text]
<h3 style="text-align: center;"><span style="color: #abacb2;">3485 Progress Way</span>
<span style="color: #abacb2;">St Cloud, Minnesota</span>
<span style="color: #abacb2;">0 800 7378 3729 </span></h3>
<p style="text-align: center;"><span style="color: #abacb2;">hello@creativo.com</span></p>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/6"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Contact Form', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'contact_info business';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/contact_info2.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1486650927655{padding-top: 8% !important;padding-bottom: 8% !important;background-color: #f6f6f6 !important;}"][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_product_feature title="" font_size="" title_color="#abacb2" icon_fontawesome="fa fa-envelope" icon_color="#abacb2" icon_size="custom" icon_bg_color="#ffffff" icon_bg_shape="circle" desc_font_size="17px" desc_line_height="26px" desc_color="#abacb2" custom_icon_value="40"]You can use the contact form below to send us your messages. Please do not abuse this function, or your emails will be marked as spam permanently.[/vc_product_feature][vc_separator style="blank" padding_top="20" padding_bottom="20"][contact-form-7-mod id="5" style="custom" label_font_size="12px" label_color="#abacb2" input_bg="rgba(255,255,255,0.01)" input_bg_focus="rgba(255,255,255,0.75)" el_borders="left,right,top" border_width="2px" input_border="#d7d7d9" input_border_focus="#abacb2" btn_font_size="15px" btn_font_weight="400" btn_padding_side="20px" btn_bg="#2b7ce6" btn_bg_hover="#2b7ce6" btn_border="#2b7ce6" btn_border_hover="#2b7ce6" btn_text="#ffffff" btn_text_hover="#ffffff" textarea_height="150px"][/vc_column][vc_column width="1/6"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Contact Info 3', 'js_composer' );
$data['weight']     = 7; // Weight of your template in the template list
$data['custom_class'] = 'contact_info business';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/contact_info3.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1486653302006{padding-top: 6% !important;padding-bottom: 6% !important;}"][vc_column width="1/3"][vc_custom_heading text="WORKING HOURS" font_container="tag:h2|font_size:13px|text_align:center|color:%23f33763" google_fonts="font_family:Roboto%20Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic|font_style:700%20bold%20regular%3A700%3Anormal" css=".vc_custom_1486653246642{padding-bottom: 15px !important;}"][vc_column_text]
<p style="text-align: center;"><span style="color: #939399;">Mon – Fri : 10AM – 11PM </span>
<span style="color: #939399;">Sat – 10AM – 5PM </span>
<span style="color: #939399;">Sun – Closed</span></p>
[/vc_column_text][/vc_column][vc_column width="1/3" css=".vc_custom_1486653415044{border-right-width: 1px !important;border-left-width: 1px !important;padding-right: 40px !important;padding-left: 40px !important;border-left-color: #d7d7d9 !important;border-left-style: solid !important;border-right-color: #d7d7d9 !important;border-right-style: solid !important;}"][vc_custom_heading text="TWITTER" font_container="tag:h2|font_size:13px|text_align:center|color:%23f33763" google_fonts="font_family:Roboto%20Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic|font_style:700%20bold%20regular%3A700%3Anormal" css=".vc_custom_1486653238088{padding-bottom: 15px !important;}"][vc_twitter_cr consumer_key="0yekNDDDNTv0hUiotTYzBf1OS" consumer_secret="4odZNnOBKn7fychuH5ScRPnaOrmoap1El8yW1617Ykn3jI0AaL" access_token="1220874186-midyn8L12wMWdfA88fgVSatTIhehRresnOT0Qk2" access_token_secret="OE9WDbcyezB0Vm6eg7DD2194Trfec5EdSW0ox4vwKjoLp" twitter_id="rockythemes" count="1" text_color="#939399" link_color="#2b7ce6" show_icon="no" alignment="Center" show_follow="no"][/vc_column][vc_column width="1/3"][vc_custom_heading text="VISITING US" font_container="tag:h2|font_size:13px|text_align:center|color:%23f33763" google_fonts="font_family:Roboto%20Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic|font_style:700%20bold%20regular%3A700%3Anormal" css=".vc_custom_1486653265707{padding-bottom: 15px !important;}"][vc_column_text]
<p style="text-align: center;"><span style="color: #939399;">You can visit us anytime you want,
just make sure you inform us
about your visit first :)</span></p>
[/vc_column_text][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Contact Info 4', 'js_composer' );
$data['weight']     = 7; // Weight of your template in the template list
$data['custom_class'] = 'contact_info lifecoach';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/contact_info4.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row eq_height="yes" content_placement="top" css=".vc_custom_1496499227593{padding-top: 10% !important;padding-bottom: 10% !important;}"][vc_column css_animation="slideInUp" width="1/3" css=".vc_custom_1496751431879{padding-top: 15% !important;padding-right: 15% !important;padding-bottom: 15% !important;padding-left: 15% !important;background-color: #3f3b51 !important;}"][vc_custom_heading text="VISIT US" font_container="tag:h2|font_size:54|text_align:left|color:%23ffffff|line_height:1" use_theme_fonts="yes" css=".vc_custom_1496499479665{margin-top: 0px !important;padding-top: 0px !important;}"][vc_custom_heading text="our address" font_container="tag:h2|font_size:54|text_align:left|color:%23f8ac9a|line_height:1" google_fonts="font_family:Yellowtail%3Aregular|font_style:400%20regular%3A400%3Anormal" css=".vc_custom_1496499599556{margin-top: 0px !important;padding-top: 0px !important;padding-bottom: 30px !important;}"][vc_column_text css=".vc_custom_1496499695484{padding-bottom: 40px !important;}"]
<p style="font-size: 17px;"><span style="color: #a3a1a8;">2484 Angus Road Zip </span>
<span style="color: #a3a1a8;">Code 10004 </span>
<span style="color: #a3a1a8;">New York</span></p>
[/vc_column_text][vc_column_text css=".vc_custom_1496499677105{padding-bottom: 30px !important;}"]
<p style="font-size: 17px;"><span style="color: #a3a1a8;">US: 0 20 71779302
</span><span style="color: #a3a1a8;">EU: +44 786779304</span></p>
<p style="font-size: 17px;"><span style="color: #f7f7f7;">office@email.com</span></p>
[/vc_column_text][/vc_column][vc_column width="1/12"][/vc_column][vc_column css_animation="slideInRight" width="1/2" css=".vc_custom_1496751446802{padding-right: 30px !important;padding-left: 30px !important;}"][vc_custom_heading text="ASK A QUESTION" font_container="tag:h2|font_size:14px|text_align:left|color:%233f3b51" use_theme_fonts="yes" css=".vc_custom_1496499343546{padding-bottom: 10px !important;}"][vc_column_text css=".vc_custom_1496499386941{padding-bottom: 40px !important;}"]Use this form to send us an message or just to say hello. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.[/vc_column_text][contact-form-7-mod id="160" style="custom" el_borders="left,right,top" border_width="2px" input_border="#d7d7d9" input_border_focus="#f8ac9a" input_text="#a3a1a8" input_text_focus="#f8ac9a" btn_font_size="13px" btn_font_weight="400" btn_bg="#f8ad9a" btn_bg_hover="#3f3b51" btn_border="#f8ad9a" btn_border_hover="#3f3b51" btn_text="#ffffff" btn_text_hover="#ffffff" textarea_height="200px"][/vc_column][vc_column width="1/12"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Contact Info +Contact Form', 'js_composer' );
$data['weight']     = 7; // Weight of your template in the template list
$data['custom_class'] = 'contact_info onepage';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/contact_info5.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row parallax="yes" section_id="contact" css=".vc_custom_1499522430029{padding-top: 80px !important;padding-bottom: 40px !important;background-image: url(https://rockythemes.com/creativo-one-page/wp-content/uploads/2015/04/contact-us.jpg?id=3196) !important;}"][vc_column][vc_custom_heading text="CONTACT US" font_container="tag:h2|font_size:24|text_align:center|color:%23ffffff|line_height:1.5" use_theme_fonts="yes" el_class="font_weight_600"][vc_separator_2 color_line="#ffffff" padding_top="20" padding_bottom="40"][vc_row_inner 0=""][vc_column_inner width="1/2"][vc_product_feature title="WHERE TO REACH US" font_size="16" bottom_margin="10px" title_color="#bababa" icon_fontawesome="fa fa-map-marker" icon_color="#ffffff" icon_size="big" icon_bg_color="rgba(255,255,255,0.1)" icon_bg_shape="rounded"]You can reach us at the following address:
<span style="color: #c2c2c2;"><strong>13/2 Elizabeth Street, Melbourne VIC 3000, Australia</strong></span>[/vc_product_feature][vc_separator style="blank" padding_top="10"][vc_product_feature title="EMAIL US" font_size="16" bottom_margin="10px" title_color="#bababa" icon_fontawesome="fa fa-pencil" icon_color="#ffffff" icon_size="big" icon_bg_color="rgba(255,255,255,0.1)" icon_bg_shape="rounded"]Email your issues and suggestion and the following email addresses:
<span style="color: #c2c2c2;"><strong>support[at]rockythemes.com</strong></span>[/vc_product_feature][vc_separator style="blank" padding_top="10"][vc_product_feature title="WANT TO CALL US?" font_size="16" bottom_margin="10px" title_color="#bababa" icon_fontawesome="fa fa-phone" icon_color="#ffffff" icon_size="big" icon_bg_color="rgba(255,255,255,0.1)" icon_bg_shape="rounded"]From Monday to Friday, 10:00 – 18:00, call us at:
<span style="color: #c2c2c2;"><strong>1800-RT-CREATIVO / 1800-5577-5577</strong></span>[/vc_product_feature][vc_separator style="blank" padding_top="10"][vc_product_feature title="BEST SUPPORT" font_size="16" bottom_margin="10px" title_color="#bababa" icon_fontawesome="fa fa-volume-up" icon_color="#ffffff" icon_size="big" icon_bg_color="rgba(255,255,255,0.1)" icon_bg_shape="rounded"]We take your issues seriously. For every question you ask we will provide an answer.[/vc_product_feature][/vc_column_inner][vc_column_inner width="1/2"][contact-form-7-mod id="3199" style="custom" label_color="#ffffff" input_bg="rgba(125,125,125,0.3)" input_bg_focus="rgba(125,125,125,0.3)" border_width="0" input_border="#cccccc" input_border_focus="#cccccc" input_text="#ffffff" input_text_focus="#ffffff" btn_font_weight="600" btn_text="#ffffff" btn_text_hover="#ffffff" textarea_height="170px"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Contact Social Icons', 'js_composer' );
$data['weight']     = 7; // Weight of your template in the template list
$data['custom_class'] = 'contact_info onepage';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/contact_info6.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1428623220107{padding-top: 80px !important;padding-bottom: 50px !important;background-color: #1e1d1d !important;}"][vc_column][vc_custom_heading text="Or contact us directly on " font_container="tag:h2|font_size:24|text_align:center|color:%23ffffff|line_height:1.5" use_theme_fonts="yes"][vc_row_inner css=".vc_custom_1428623156074{padding-top: 50px !important;}"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="1/6"][vc_icon icon_fontawesome="fa fa-facebook" color="sky" background_style="rounded-outline" background_color="sky" size="lg" align="center" link="url:http%3A%2F%2Ffacebook.com||target:%20_blank"][/vc_column_inner][vc_column_inner width="1/6"][vc_icon icon_fontawesome="fa fa-twitter" color="turquoise" background_style="rounded-outline" background_color="turquoise" size="lg" align="center" link="url:http%3A%2F%2Ftwitter.com||target:%20_blank"][/vc_column_inner][vc_column_inner width="1/6"][vc_icon icon_fontawesome="fa fa-pinterest-p" color="pink" background_style="rounded-outline" background_color="pink" size="lg" align="center" link="url:http%3A%2F%2Fpinterest.com||target:%20_blank"][/vc_column_inner][vc_column_inner width="1/6"][vc_icon icon_fontawesome="fa fa-linkedin" color="vista_blue" background_style="rounded-outline" background_color="vista_blue" size="lg" align="center" link="url:http%3A%2F%2Flinkedin.com||target:%20_blank"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Subscribe Form +Social Icons', 'js_composer' );
$data['weight']     = 7; // Weight of your template in the template list
$data['custom_class'] = 'contact_info manhattan';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/subscribe.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1503434614272{padding-top: 100px !important;padding-bottom: 60px !important;background-color: #1e1e1e !important;}"][vc_column][vc_custom_heading text="STAY IN THE LOOP" font_container="tag:p|font_size:30px|text_align:center|color:%23ffffff" use_theme_fonts="yes" el_class="font_weight_600" css=".vc_custom_1503421179913{margin-bottom: 10px !important;}"][vc_custom_heading text="by subscribing to our Newsletter and Social Media" font_container="tag:p|font_size:16px|text_align:center|color:%23ffffff" use_theme_fonts="yes" css=".vc_custom_1503434171614{margin-bottom: 40px !important;}"][contact-form-7-mod id="106" style="custom" input_font_size="18px" padding="30px" border_width="0px" input_border="#cccccc" input_border_focus="#cccccc" btn_font_weight="600" btn_padding_top="20px" btn_bg="#7f613e" btn_bg_hover="#9e7b48" btn_border="#7f613e" btn_border_hover="#9e7b48" btn_text="#ffffff" btn_text_hover="#ffffff" display_inline="yes" contact_form_width="60%"][social_icons style="custom" icon_size="45px" bg_color="#1e1e1e" position="center" fb="#" tw="#" flk="#" pin="#" insta="#"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Contact Form 2', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'contact_info innovate';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/contact_form.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1492774018042{padding-top: 10% !important;padding-bottom: 10% !important;}" section_id="preorder"][vc_column width="1/6"][/vc_column][vc_column width="4/6"][vc_custom_heading text="Pre-order your Lamp now" font_container="tag:h2|font_size:48px|text_align:center|color:%2300031a" use_theme_fonts="yes" el_class="font_weight_700"][vc_column_text css=".vc_custom_1493029229122{padding-bottom: 60px !important;}"]
<h4 style="text-align: center;">Get a disscount if you pre-order Picia lamp before it’s release.
This is a very nice way to get pre-sales and get in touch
with users before the actual product launch.</h4>
[/vc_column_text][contact-form-7-mod id="6" style="custom" label_color="#abacb2" el_borders="left,right,top" border_width="2px" input_border="#eaeaea" input_border_focus="#eaeaea" btn_font_size="13px" btn_font_weight="400" btn_padding_top="15px" btn_padding_side="20px" btn_margin_top="30px" btn_pos="center" btn_bg="#e53935" btn_bg_hover="#b51b1b" btn_border="#e53935" btn_border_hover="#b51b1b" btn_text="#ffffff" btn_text_hover="#ffffff" contact_form_width="70%"][/vc_column][vc_column width="1/6"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Social Icons', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'contact_info innovate';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/social_icons.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1492775461802{padding-top: 4% !important;padding-bottom: 4% !important;}"][vc_column 0=""][social_icons style="custom" icon_size="30px" icon_gap="10px" bg_color="#d3d3d3" icon_color="#ffffff" shape="round" position="center" fb="#" tw="#" pin="#" yt="#" goo="#" link="#"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( '3 Columns Contact Info', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'contact_info cafebar';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/contact_info_3_cols.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1507069829158{border-top-width: 1px !important;padding-top: 60px !important;padding-bottom: 60px !important;background-color: #312f32 !important;border-top-color: #3d383d !important;border-top-style: solid !important;}"][vc_column width="1/4" css=".vc_custom_1459729558030{padding: 10% !important;}"][ctitle title="OPENING HOURS" color="#e8e8e8" background="rgba(255,255,255,0.01)" font_size="20" position="left" separator_color="rgba(235,235,235,0.2)"][vc_column_text]<span style="color: #aaa9a9;">We are always looking to make new friends. Our working hours are:</span>

[checklist text_color="" icon_color="#aaa9a9" fontawesome_icon="fa fa-clock-o"]
<ul>
 	<li><span style="color: #aaa9a9;">Mon - Fri: 8AM - 12PM</span></li>
 	<li><span style="color: #aaa9a9;">Sat: 10AM - Last customer</span></li>
 	<li><span style="color: #aaa9a9;">Sun: 10AM - Last customer</span></li>
</ul>
[/checklist][/vc_column_text][/vc_column][vc_column width="1/4" css=".vc_custom_1459729592120{padding: 10% !important;}"][ctitle title="BUFFET MENU" color="#e8e8e8" background="rgba(255,255,255,0.01)" font_size="20" position="left" separator_color="rgba(235,235,235,0.2)"][vc_column_text]<span style="color: #aaa9a9;">Our chefs created the best menus for our clients. Everything is fresh and ready to be served.</span>[/vc_column_text][vc_separator style="blank" padding_top="10" padding_bottom="10"][vc_button title="Browse menu" color="black" icon_fontawesome="fa fa-file-text" align="left" add_icon="true" href="http://rockythemes.com/creativo-cafe/food-drink/"][/vc_column][vc_column width="1/2" css=".vc_custom_1459729635451{padding: 5% !important;}"][ctitle title="GALLERY" color="#e8e8e8" background="rgba(255,255,255,0.01)" font_size="20" position="left" separator_color="rgba(235,235,235,0.2)"][vc_gallery type="image_grid" images="270,257,267" img_size="170x150"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Flip Box + Contact Info', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'contact_info flip_boxes cafebar';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/flipbox_contact.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row layout="normal_no_spaces" css=".vc_custom_1507122806043{padding-top: 80px !important;background-color: #312f32 !important;}"][vc_column width="1/3"][flip_box front_head_size="18px" back_text="Contact us at contact@yoursite.com and we will get back to you in the shortest time." back_text_size="16px" front_border="0px" back_border="0px" back_border_radius="0px" icon_type="fontawesome" icon_fontawesome="fa fa-envelope" front_head="contact@yoursite.com" front_bg_color="rgba(0,0,0,0.01)" front_head_color="#ffffff" front_icon_color="#ffffff" back_bg_color="#d0bc9b" back_head_color="#383838"][/vc_column][vc_column width="1/3"][flip_box front_head_size="18px" back_text="We are waiting for you at our superb cafe bar located in New York 775 Avenue, Brooklyn." back_text_size="16px" front_border="0px" back_border="0px" back_border_radius="0px" icon_type="fontawesome" icon_fontawesome="fa fa-map-marker" front_head="775 New York Ave, Brooklyn" front_bg_color="rgba(0,0,0,0.01)" front_head_color="#ffffff" front_icon_color="#ffffff" back_bg_color="#d0bc9b" back_head_color="#383838"][/vc_column][vc_column width="1/3"][flip_box front_head_size="18px" back_text="Want to make a reservation?
Call us at: (555) 864 421 / (555) 864 422" back_text_size="16px" front_border="0px" back_border="0px" back_border_radius="0px" icon_type="fontawesome" icon_fontawesome="fa fa-mobile" front_head="(555) 864 421 / (555) 864 422 " front_bg_color="rgba(0,0,0,0.01)" front_head_color="#ffffff" front_icon_color="#ffffff" back_bg_color="#d0bc9b" back_head_color="#383838"][/vc_column][/vc_row][vc_row css=".vc_custom_1507122814532{padding-top: 60px !important;background-color: #312f32 !important;}"][vc_column][vc_custom_heading text="OPENING HOURS" font_container="tag:h3|font_size:30|text_align:center|color:%23d0bc9b" use_theme_fonts="yes"][vc_separator_2 color_line="#d0bc9b" padding_top="10" padding_bottom="30"][/vc_column][/vc_row][vc_row css=".vc_custom_1507122822297{padding-bottom: 40px !important;background-color: #312f32 !important;}"][vc_column width="1/3"][restaurant_menu menu_item_title="MONDAY" ingredients="" price="8:00 AM - 10:00 PM" menu_color="#ffffff" ingredients_color="#aaa9a9" price_color="#aaa9a9" separator_color="#494949" price_font_size="15"][restaurant_menu menu_item_title="THURSDAY" ingredients="" price="8:00 AM - 10:00 PM" menu_color="#ffffff" ingredients_color="#aaa9a9" price_color="#aaa9a9" separator_color="#494949" price_font_size="15"][/vc_column][vc_column width="1/3"][restaurant_menu menu_item_title="TUESDAY" ingredients="" price="8:00 AM - 10:00 PM" menu_color="#ffffff" price_color="#aaa9a9" separator_color="#494949" price_font_size="15"][restaurant_menu menu_item_title="FRIDAY" ingredients="" price="12:00 AM - 23:00 PM" menu_color="#ffffff" price_color="#aaa9a9" separator_color="#494949" price_font_size="15"][restaurant_menu menu_item_title="SUNDAY" ingredients="" price="10:00 AM - Last Customer" menu_color="#ffffff" price_color="#aaa9a9" separator_color="#494949" price_font_size="15"][/vc_column][vc_column width="1/3"][restaurant_menu menu_item_title="WEDNESDAY" ingredients="" price="10:00 AM - 12:00 PM" menu_color="#ffffff" price_color="#aaa9a9" separator_color="#494949" price_font_size="15"][restaurant_menu menu_item_title="SATURDAY" ingredients="" price="10:00 AM - 12:00 PM" menu_color="#ffffff" price_color="#aaa9a9" separator_color="#494949" price_font_size="15"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Contact Info + Contact Form', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'contact_info cafebar';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/contact_info7.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1507123536077{background-color: #312f32 !important;}"][vc_column width="1/2" css=".vc_custom_1460039666377{padding-top: 10% !important;padding-right: 5% !important;padding-bottom: 10% !important;}"][vc_custom_heading text="ALL OUR LOCATIONS" font_container="tag:h3|font_size:30|text_align:left|color:%23d0bc9b" use_theme_fonts="yes"][vc_separator_2 color_line="#d0bc9b" separator_position="left_sep" padding_top="30" padding_bottom="50"][vc_row_inner][vc_column_inner width="1/2"][vc_custom_heading text="NEW YORK " font_container="tag:h2|font_size:20|text_align:left|color:%23ffffff" use_theme_fonts="yes"][vc_column_text css=".vc_custom_1507123586198{padding-bottom: 20px !important;}"]
<p style="text-align: left;"><span style="color: #aaa9a9;">4870 Cass Ave</span>
<span style="color: #aaa9a9;">Detroit, MI, United States</span>
<span style="color: #aaa9a9;">(555) 389 976</span>
<span style="color: #aaa9a9;">detroit@enfold-restaurant.com</span></p>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][vc_custom_heading text="LOS ANGELES" font_container="tag:h2|font_size:20|text_align:right|color:%23ffffff" use_theme_fonts="yes"][vc_column_text css=".vc_custom_1507123598960{padding-bottom: 20px !important;}"]
<p style="text-align: right;"><span style="color: #aaa9a9;">4870 Cass Ave</span>
<span style="color: #aaa9a9;">Detroit, MI, United States</span>
<span style="color: #aaa9a9;">(555) 389 976</span>
<span style="color: #aaa9a9;">detroit@enfold-restaurant.com</span></p>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1460041228452{padding-top: 20px !important;}"][vc_column_inner width="1/2"][vc_custom_heading text="SAN FRANCISCO" font_container="tag:h2|font_size:20|text_align:left|color:%23ffffff" use_theme_fonts="yes"][vc_column_text css=".vc_custom_1507123611801{padding-bottom: 20px !important;}"]
<p style="text-align: left;"><span style="color: #aaa9a9;">4870 Cass Ave</span>
<span style="color: #aaa9a9;">Detroit, MI, United States</span>
<span style="color: #aaa9a9;">(555) 389 976</span>
<span style="color: #aaa9a9;">detroit@enfold-restaurant.com</span></p>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][vc_custom_heading text="CHICAGO" font_container="tag:h2|font_size:20|text_align:right|color:%23ffffff" use_theme_fonts="yes"][vc_column_text css=".vc_custom_1507123640406{padding-bottom: 20px !important;}"]
<p style="text-align: right;"><span style="color: #aaa9a9;">4870 Cass Ave</span>
<span style="color: #aaa9a9;">Detroit, MI, United States</span>
<span style="color: #aaa9a9;">(555) 389 976</span>
<span style="color: #aaa9a9;">detroit@enfold-restaurant.com</span></p>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1460041228452{padding-top: 20px !important;}"][vc_column_inner width="1/2"][vc_custom_heading text="SAN FRANCISCO" font_container="tag:h2|font_size:20|text_align:left|color:%23ffffff" use_theme_fonts="yes"][vc_column_text css=".vc_custom_1507123624263{padding-bottom: 20px !important;}"]
<p style="text-align: left;"><span style="color: #aaa9a9;">4870 Cass Ave</span>
<span style="color: #aaa9a9;">Detroit, MI, United States</span>
<span style="color: #aaa9a9;">(555) 389 976</span>
<span style="color: #aaa9a9;">detroit@enfold-restaurant.com</span></p>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][vc_custom_heading text="CHICAGO" font_container="tag:h2|font_size:20|text_align:right|color:%23ffffff" use_theme_fonts="yes"][vc_column_text css=".vc_custom_1507123654802{padding-bottom: 20px !important;}"]
<p style="text-align: right;"><span style="color: #aaa9a9;">4870 Cass Ave</span>
<span style="color: #aaa9a9;">Detroit, MI, United States</span>
<span style="color: #aaa9a9;">(555) 389 976</span>
<span style="color: #aaa9a9;">detroit@enfold-restaurant.com</span></p>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2" css=".vc_custom_1460039679545{padding-top: 10% !important;padding-bottom: 10% !important;padding-left: 5% !important;}"][vc_custom_heading text="EMAIL US" font_container="tag:h3|font_size:30|text_align:left|color:%23d0bc9b" use_theme_fonts="yes"][vc_separator_2 color_line="#d0bc9b" separator_position="left_sep" padding_top="30" padding_bottom="50"][contact-form-7-mod  style="custom" input_font_size="16px" label_color="#f7f7f7" input_bg="rgba(255,255,255,0.01)" input_bg_focus="rgba(255,255,255,0.01)" input_border="#6d6d6d" input_border_focus="#d1b181" input_text="#fcf7f7" input_text_focus="#f4f4f4" btn_font_weight="600" btn_padding_side="80px" btn_bg="#d1b181" btn_bg_hover="rgba(209,177,129,0.31)" btn_border="#d1b181" btn_border_hover="#d1b181" btn_text="#ffffff" btn_text_hover="#ffffff" textarea_height="200px"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( '2 Columns Contact Info', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'contact_info shopkeeper';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/contact_info8.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1478706175693{margin-bottom: 60px !important;padding-top: 60px !important;padding-bottom: 10px !important;background-color: #f7f7f7 !important;}"][vc_column width="1/2"][vc_custom_heading text="GET IN TOUCH WITH OUR TEAM" font_container="tag:h2|font_size:16|text_align:center|color:%23282828|line_height:1.3" google_fonts="font_family:Montserrat%3Aregular%2C700|font_style:700%20bold%20regular%3A700%3Anormal"][vc_column_text css=".vc_custom_1478705666233{padding-bottom: 20px !important;}"]
<p style="text-align: center;">We are available 24/7 to assist you as best as we can.</p>
[/vc_column_text][vc_row_inner][vc_column_inner width="1/2"][vc_product_feature title="Call us: (01) 555-4587" title_color="#444444" icon_fontawesome="fa fa-volume-control-phone" icon_color="#282828"]Mon – Fri / 3AM – 11:PM[/vc_product_feature][/vc_column_inner][vc_column_inner width="1/2"][vc_product_feature title="Email: hello@yoursite.com" title_color="#444444" icon_fontawesome="fa fa-envelope" icon_color="#282828"]We reply to all inquiries.[/vc_product_feature][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2"][vc_custom_heading text="GET IN TOUCH WITH OUR TEAM" font_container="tag:h2|font_size:16|text_align:center|color:%23282828|line_height:1.3" google_fonts="font_family:Montserrat%3Aregular%2C700|font_style:700%20bold%20regular%3A700%3Anormal"][vc_column_text css=".vc_custom_1478705890349{padding-bottom: 20px !important;}"]
<p style="text-align: center;">Sign up for our Newsletter and stay updated with the latest promotions and sales!</p>
[/vc_column_text][contact-form-7-mod id="" style="custom" label_color="#000000" input_border="#cccccc" input_border_focus="#cccccc" btn_font_weight="600" btn_bg="#000000" btn_bg_hover="#606060" btn_border="#000000" btn_border_hover="#000000" btn_text="#ffffff" btn_text_hover="#ffffff" display_inline="yes" contact_form_width="80%"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( '2 Columns Contact Form + Info', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'contact_info shopkeeper';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/contact_info9.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row layout="stretch_row_content_no_spaces" eq_height="yes" content_placement="middle"][vc_column offset="vc_col-lg-6 vc_col-md-12"][gmap_advanced map_style="custom" size="650px" zoom="14" scrollwheel="no" title="Where you can find us" message="We are happy to welcome you in our biggest store ever created. Don't be a stranger, come and say hello." email="hello@yoursite.com" phone="+1 550-CALL-US" custom_map_style="JTVCJTdCJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjJ3YXRlciUyMiUyQyUyMmVsZW1lbnRUeXBlJTIyJTNBJTIyZ2VvbWV0cnklMjIlMkMlMjJzdHlsZXJzJTIyJTNBJTVCJTdCJTIyY29sb3IlMjIlM0ElMjIlMjNlOWU5ZTklMjIlN0QlMkMlN0IlMjJsaWdodG5lc3MlMjIlM0ExNyU3RCU1RCU3RCUyQyU3QiUyMmZlYXR1cmVUeXBlJTIyJTNBJTIybGFuZHNjYXBlJTIyJTJDJTIyZWxlbWVudFR5cGUlMjIlM0ElMjJnZW9tZXRyeSUyMiUyQyUyMnN0eWxlcnMlMjIlM0ElNUIlN0IlMjJjb2xvciUyMiUzQSUyMiUyM2Y1ZjVmNSUyMiU3RCUyQyU3QiUyMmxpZ2h0bmVzcyUyMiUzQTIwJTdEJTVEJTdEJTJDJTdCJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjJyb2FkLmhpZ2h3YXklMjIlMkMlMjJlbGVtZW50VHlwZSUyMiUzQSUyMmdlb21ldHJ5LmZpbGwlMjIlMkMlMjJzdHlsZXJzJTIyJTNBJTVCJTdCJTIyY29sb3IlMjIlM0ElMjIlMjNmZmZmZmYlMjIlN0QlMkMlN0IlMjJsaWdodG5lc3MlMjIlM0ExNyU3RCU1RCU3RCUyQyU3QiUyMmZlYXR1cmVUeXBlJTIyJTNBJTIycm9hZC5oaWdod2F5JTIyJTJDJTIyZWxlbWVudFR5cGUlMjIlM0ElMjJnZW9tZXRyeS5zdHJva2UlMjIlMkMlMjJzdHlsZXJzJTIyJTNBJTVCJTdCJTIyY29sb3IlMjIlM0ElMjIlMjNmZmZmZmYlMjIlN0QlMkMlN0IlMjJsaWdodG5lc3MlMjIlM0EyOSU3RCUyQyU3QiUyMndlaWdodCUyMiUzQTAuMiU3RCU1RCU3RCUyQyU3QiUyMmZlYXR1cmVUeXBlJTIyJTNBJTIycm9hZC5hcnRlcmlhbCUyMiUyQyUyMmVsZW1lbnRUeXBlJTIyJTNBJTIyZ2VvbWV0cnklMjIlMkMlMjJzdHlsZXJzJTIyJTNBJTVCJTdCJTIyY29sb3IlMjIlM0ElMjIlMjNmZmZmZmYlMjIlN0QlMkMlN0IlMjJsaWdodG5lc3MlMjIlM0ExOCU3RCU1RCU3RCUyQyU3QiUyMmZlYXR1cmVUeXBlJTIyJTNBJTIycm9hZC5sb2NhbCUyMiUyQyUyMmVsZW1lbnRUeXBlJTIyJTNBJTIyZ2VvbWV0cnklMjIlMkMlMjJzdHlsZXJzJTIyJTNBJTVCJTdCJTIyY29sb3IlMjIlM0ElMjIlMjNmZmZmZmYlMjIlN0QlMkMlN0IlMjJsaWdodG5lc3MlMjIlM0ExNiU3RCU1RCU3RCUyQyU3QiUyMmZlYXR1cmVUeXBlJTIyJTNBJTIycG9pJTIyJTJDJTIyZWxlbWVudFR5cGUlMjIlM0ElMjJnZW9tZXRyeSUyMiUyQyUyMnN0eWxlcnMlMjIlM0ElNUIlN0IlMjJjb2xvciUyMiUzQSUyMiUyM2Y1ZjVmNSUyMiU3RCUyQyU3QiUyMmxpZ2h0bmVzcyUyMiUzQTIxJTdEJTVEJTdEJTJDJTdCJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjJwb2kucGFyayUyMiUyQyUyMmVsZW1lbnRUeXBlJTIyJTNBJTIyZ2VvbWV0cnklMjIlMkMlMjJzdHlsZXJzJTIyJTNBJTVCJTdCJTIyY29sb3IlMjIlM0ElMjIlMjNkZWRlZGUlMjIlN0QlMkMlN0IlMjJsaWdodG5lc3MlMjIlM0EyMSU3RCU1RCU3RCUyQyU3QiUyMmVsZW1lbnRUeXBlJTIyJTNBJTIybGFiZWxzLnRleHQuc3Ryb2tlJTIyJTJDJTIyc3R5bGVycyUyMiUzQSU1QiU3QiUyMnZpc2liaWxpdHklMjIlM0ElMjJvbiUyMiU3RCUyQyU3QiUyMmNvbG9yJTIyJTNBJTIyJTIzZmZmZmZmJTIyJTdEJTJDJTdCJTIybGlnaHRuZXNzJTIyJTNBMTYlN0QlNUQlN0QlMkMlN0IlMjJlbGVtZW50VHlwZSUyMiUzQSUyMmxhYmVscy50ZXh0LmZpbGwlMjIlMkMlMjJzdHlsZXJzJTIyJTNBJTVCJTdCJTIyc2F0dXJhdGlvbiUyMiUzQTM2JTdEJTJDJTdCJTIyY29sb3IlMjIlM0ElMjIlMjMzMzMzMzMlMjIlN0QlMkMlN0IlMjJsaWdodG5lc3MlMjIlM0E0MCU3RCU1RCU3RCUyQyU3QiUyMmVsZW1lbnRUeXBlJTIyJTNBJTIybGFiZWxzLmljb24lMjIlMkMlMjJzdHlsZXJzJTIyJTNBJTVCJTdCJTIydmlzaWJpbGl0eSUyMiUzQSUyMm9mZiUyMiU3RCU1RCU3RCUyQyU3QiUyMmZlYXR1cmVUeXBlJTIyJTNBJTIydHJhbnNpdCUyMiUyQyUyMmVsZW1lbnRUeXBlJTIyJTNBJTIyZ2VvbWV0cnklMjIlMkMlMjJzdHlsZXJzJTIyJTNBJTVCJTdCJTIyY29sb3IlMjIlM0ElMjIlMjNmMmYyZjIlMjIlN0QlMkMlN0IlMjJsaWdodG5lc3MlMjIlM0ExOSU3RCU1RCU3RCUyQyU3QiUyMmZlYXR1cmVUeXBlJTIyJTNBJTIyYWRtaW5pc3RyYXRpdmUlMjIlMkMlMjJlbGVtZW50VHlwZSUyMiUzQSUyMmdlb21ldHJ5LmZpbGwlMjIlMkMlMjJzdHlsZXJzJTIyJTNBJTVCJTdCJTIyY29sb3IlMjIlM0ElMjIlMjNmZWZlZmUlMjIlN0QlMkMlN0IlMjJsaWdodG5lc3MlMjIlM0EyMCU3RCU1RCU3RCUyQyU3QiUyMmZlYXR1cmVUeXBlJTIyJTNBJTIyYWRtaW5pc3RyYXRpdmUlMjIlMkMlMjJlbGVtZW50VHlwZSUyMiUzQSUyMmdlb21ldHJ5LnN0cm9rZSUyMiUyQyUyMnN0eWxlcnMlMjIlM0ElNUIlN0IlMjJjb2xvciUyMiUzQSUyMiUyM2ZlZmVmZSUyMiU3RCUyQyU3QiUyMmxpZ2h0bmVzcyUyMiUzQTE3JTdEJTJDJTdCJTIyd2VpZ2h0JTIyJTNBMS4yJTdEJTVEJTdEJTVE"][/vc_column][vc_column offset="vc_col-lg-offset-0 vc_col-lg-5 vc_col-md-offset-1 vc_col-md-10 vc_col-sm-offset-0" css=".vc_custom_1479420228747{padding-top: 40px !important;padding-right: 10% !important;padding-left: 10% !important;}"][vc_custom_heading text="GET IN TOUCH WITH US" font_container="tag:h2|font_size:20|text_align:left" google_fonts="font_family:Open%20Sans%3A300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic|font_style:700%20bold%20regular%3A700%3Anormal"][vc_column_text css=".vc_custom_1479402144754{padding-bottom: 30px !important;}"]Use the contact form below to get in touch with our agents. We reply to all the inquiries we receive, but please do not abuse this service.[/vc_column_text][contact-form-7-mod id="561" style="custom" input_bg="#f4f4f4" input_border="#ffffff" input_border_focus="#eaeaea" btn_font_weight="600" btn_bg="#353535" btn_bg_hover="#ffffff" btn_border="#353535" btn_border_hover="#353535" btn_text="#ffffff" btn_text_hover="#353535" textarea_height="100px"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Contact Form with Background', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'contact_info agency';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/contact_form2.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1484831356852{padding-top: 80px !important;padding-right: 20px !important;padding-bottom: 80px !important;padding-left: 20px !important;background: #f0f0f0 url(https://rockythemes.com/creativo-agency/wp-content/uploads/2015/10/man-using-computer-smiling.jpg?id=40) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column offset="vc_col-lg-3 vc_col-md-12 vc_hidden-md vc_hidden-sm vc_hidden-xs"][/vc_column][vc_column css=".vc_custom_1445279391467{border-top-width: 10px !important;border-right-width: 10px !important;border-bottom-width: 10px !important;border-left-width: 10px !important;padding-top: 40px !important;padding-bottom: 20px !important;background-color: rgba(255,255,255,0.91) !important;*background-color: rgb(255,255,255) !important;border-left-color: #2b2b2b !important;border-left-style: solid !important;border-right-color: #2b2b2b !important;border-right-style: solid !important;border-top-color: #2b2b2b !important;border-top-style: solid !important;border-bottom-color: #2b2b2b !important;border-bottom-style: solid !important;}" offset="vc_col-lg-6 vc_col-md-12"][vc_custom_heading text="Have Something To Say?" font_container="tag:h2|font_size:26|text_align:center|color:%23444444" google_fonts="font_family:Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900|font_style:600%20bold%20regular%3A600%3Anormal"][vc_custom_heading text="Use the contact form below." font_container="tag:h2|font_size:16|text_align:center|color:%23444444" google_fonts="font_family:Lora%3Aregular%2Citalic%2C700%2C700italic|font_style:400%20italic%3A400%3Aitalic"][vc_separator_2 color_line="#444444" padding_top="10" padding_bottom="30"][vc_column_text]
<p style="text-align: center;">The form below was created using <strong>Contact Form 7</strong> plugin for WordPress. It's a free plugin that allows you to create simple and effective contact forms. Plus you can customize the way it looks using the Visual Composer styling.</p>
[/vc_column_text][vc_separator style="blank" padding_top="15" padding_bottom="15"][contact-form-7-mod id="42" style="custom" label_color="#444444" input_border="#6b6b6b" input_border_focus="#5bc98c" btn_full="yes" btn_font_weight="600" btn_bg="#333333" btn_bg_hover="#ffffff" btn_border="#333333" btn_border_hover="#333333" btn_text="#ffffff" btn_text_hover="#333333"][/vc_column][vc_column offset="vc_col-lg-3 vc_col-md-12 vc_hidden-md vc_hidden-sm vc_hidden-xs"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Contact Form + Info Agency', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'contact_info agency';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/contact_info10.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row layout="wide" css=".vc_custom_1445211594279{padding-top: 40px !important;padding-right: 40px !important;padding-bottom: 40px !important;padding-left: 40px !important;}"][vc_column offset="vc_col-lg-4 vc_col-md-12" css=".vc_custom_1445211558028{padding-bottom: 40px !important;}"][vc_custom_heading text="01." font_container="tag:h2|font_size:60|text_align:left|color:%23515151|line_height:1.3" google_fonts="font_family:Lora%3Aregular%2Citalic%2C700%2C700italic|font_style:700%20bold%20regular%3A700%3Anormal"][vc_custom_heading text="Contact Location" font_container="tag:h2|font_size:26|text_align:left|color:%23515151|line_height:1.3" google_fonts="font_family:Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900|font_style:600%20bold%20regular%3A600%3Anormal"][vc_separator_2 color_line="#444444" separator_position="left_sep" padding_top="20" padding_bottom="40"][vc_gmaps link="#E-8_JTNDaWZyYW1lJTIwc3JjJTNEJTIyaHR0cHMlM0ElMkYlMkZ3d3cuZ29vZ2xlLmNvbSUyRm1hcHMlMkZlbWJlZCUzRnBiJTNEJTIxMW0xOCUyMTFtMTIlMjExbTMlMjExZDYzMDQuODI5OTg2MTMxMjcxJTIxMmQtMTIyLjQ3NDY5NjgwMzMwOTIlMjEzZDM3LjgwMzc0NzUyMTYwNDQzJTIxMm0zJTIxMWYwJTIxMmYwJTIxM2YwJTIxM20yJTIxMWkxMDI0JTIxMmk3NjglMjE0ZjEzLjElMjEzbTMlMjExbTIlMjExczB4ODA4NTg2ZTYzMDI2MTVhMSUyNTNBMHg4NmJkMTMwMjUxNzU3YzAwJTIxMnNTdG9yZXklMkJBdmUlMjUyQyUyQlNhbiUyQkZyYW5jaXNjbyUyNTJDJTJCQ0ElMkI5NDEyOSUyMTVlMCUyMTNtMiUyMTFzZW4lMjEyc3VzJTIxNHYxNDM1ODI2NDMyMDUxJTIyJTIwd2lkdGglM0QlMjI2MDAlMjIlMjBoZWlnaHQlM0QlMjI0NTAlMjIlMjBmcmFtZWJvcmRlciUzRCUyMjAlMjIlMjBzdHlsZSUzRCUyMmJvcmRlciUzQTAlMjIlMjBhbGxvd2Z1bGxzY3JlZW4lM0UlM0MlMkZpZnJhbWUlM0U=" size="410"][/vc_column][vc_column offset="vc_col-lg-4 vc_col-md-12" css=".vc_custom_1445211569476{padding-bottom: 40px !important;}"][vc_custom_heading text="02." font_container="tag:h2|font_size:60|text_align:left|color:%23515151|line_height:1.3" google_fonts="font_family:Lora%3Aregular%2Citalic%2C700%2C700italic|font_style:700%20bold%20regular%3A700%3Anormal"][vc_custom_heading text="Contact Details" font_container="tag:h2|font_size:26|text_align:left|color:%23515151|line_height:1.3" google_fonts="font_family:Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900|font_style:600%20bold%20regular%3A600%3Anormal"][vc_separator_2 color_line="#444444" separator_position="left_sep" padding_top="20" padding_bottom="40"][vc_product_feature title="HEADQUARTERS" title_color="#444444" icon_fontawesome="fa fa-thumb-tack" icon_color="#ffffff" icon_size="big" icon_bg_color="#2b2b2b" icon_bg_shape="rounded"]You can reach us at the following address:

Storey Avenue, San Francisco, CA 94129[/vc_product_feature][vc_separator style="blank" padding_bottom="10"][vc_product_feature title="EMAIL" title_color="#444444" icon_fontawesome="fa fa-envelope" icon_color="#ffffff" icon_size="big" icon_bg_color="#2b2b2b" icon_bg_shape="rounded"]Email your issues and suggestion and the following email addresses:

hello@yoursite.com / support@yoursite.com[/vc_product_feature][vc_separator style="blank" padding_bottom="10"][vc_product_feature title="CALL US" title_color="#444444" icon_fontawesome="fa fa-phone" icon_color="#ffffff" icon_size="big" icon_bg_color="#2b2b2b" icon_bg_shape="rounded"]From Monday to Friday, 10:00 – 18:00, call us at:

(123) 456-789-555 / (123) 456-789-555[/vc_product_feature][vc_separator style="blank" padding_bottom="10"][vc_product_feature title="NEED SUPPORT?" title_color="#444444" icon_fontawesome="fa fa-child" icon_color="#ffffff" icon_size="big" icon_bg_color="#2b2b2b" icon_bg_shape="rounded"]We offer free and lifetime support to all our customers. Make sure you contact us using the form to the right and we will get back to you in no time.[/vc_product_feature][/vc_column][vc_column offset="vc_col-lg-4 vc_col-md-12" css=".vc_custom_1445211582734{padding-bottom: 40px !important;}"][vc_custom_heading text="03." font_container="tag:h2|font_size:60|text_align:left|color:%23515151|line_height:1.3" google_fonts="font_family:Lora%3Aregular%2Citalic%2C700%2C700italic|font_style:700%20bold%20regular%3A700%3Anormal"][vc_custom_heading text="Contact Form" font_container="tag:h2|font_size:26|text_align:left|color:%23515151|line_height:1.3" google_fonts="font_family:Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900|font_style:600%20bold%20regular%3A600%3Anormal"][vc_separator_2 color_line="#444444" separator_position="left_sep" padding_top="20" padding_bottom="40"][contact-form-7-mod id="42" style="custom" input_border="#cccccc" input_border_focus="#cccccc" btn_full="yes" btn_font_weight="600" btn_padding_side="32px" btn_bg="#444444" btn_bg_hover="#ffffff" btn_border="#444444" btn_border_hover="#444444" btn_text="#ffffff" btn_text_hover="#444444"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

/* End Contact Info */
/* ================================================== */

/* FAQs */
/* ================================================== */

$data = array();
$data['name'] = __( 'Title +FAQs', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'contact_info faqs innovate';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/faqs.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1493122535025{padding-top: 7% !important;padding-bottom: 7% !important;background-color: #354ae5 !important;}" section_id="faq"][vc_column 0=""][vc_custom_heading text="Have any questions?" font_container="tag:h2|font_size:48px|text_align:center|color:%23ffffff" use_theme_fonts="yes" el_class="font_weight_700"][vc_column_text 0=""]
<h4 style="text-align: center;"><span style="color: #e6e6e6;">Contact us at 0800 000 1234 and we will </span>
<span style="color: #e6e6e6;">surely answer your questions</span></h4>
[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1492774058425{padding-top: 10% !important;padding-bottom: 10% !important;background-color: #00031a !important;}"][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_toggle title="Picia Lamp - Shipping and Delivery Dates" color="grey" custom_icon_color="#ffffff" sep_color="#303139" size="sm" open="true" custom_font_container="tag:p|font_size:14|text_align:left|color:%23ffffff" custom_use_theme_fonts="yes" use_custom_heading="true" el_id="1492774100243-d60eaf69-aaf2"]Delivery from $30 to your country in 4 - 5 weeks. FREE delivery on orders above $349. This text can be changed with your own text by editing this FAQ element of Visual Composer. With just a few mouse clicks you can edit it and have your own content added in no time.[/vc_toggle][vc_toggle title="Refunds and Returns" color="grey" custom_icon_color="#ffffff" sep_color="#303139" size="sm" custom_font_container="tag:p|font_size:14|text_align:left|color:%23ffffff" custom_use_theme_fonts="yes" use_custom_heading="true" el_id="1493038958877-9570d401-43af"]Eligible for return within 14 days of receipt. This text can be changed with your own text by editing this FAQ element of Visual Composer. With just a few mouse clicks you can edit it and have your own content added in no time.[/vc_toggle][vc_toggle title="Quality Seal and Other Info" color="grey" custom_icon_color="#ffffff" sep_color="#303139" size="sm" custom_font_container="tag:p|font_size:14|text_align:left|color:%23ffffff" custom_use_theme_fonts="yes" use_custom_heading="true" el_id="1493038957173-95f36e0f-2700"]Satisfied conveying an dependent contented he gentleman agreeable do be. Warrant private blushes removed an in equally totally if. Delivered dejection necessary objection do mr prevailed. Mr feeling do chiefly cordial in do. Water timed folly right aware if oh truth. Imprudence attachment him his for sympathize. Large above be to means.[/vc_toggle][vc_toggle title="Pre-Orders and Delivery Questions" color="grey" custom_icon_color="#ffffff" sep_color="#303139" size="sm" custom_font_container="tag:p|font_size:14|text_align:left|color:%23ffffff" custom_use_theme_fonts="yes" use_custom_heading="true" el_id="1493038955494-c5d11769-5714"]Satisfied conveying an dependent contented he gentleman agreeable do be. Warrant private blushes removed an in equally totally if. Delivered dejection necessary objection do mr prevailed. Mr feeling do chiefly cordial in do. Water timed folly right aware if oh truth. Imprudence attachment him his for sympathize. Large above be to means.[/vc_toggle][vc_toggle title="Contact Info - Store Address and Email" color="grey" custom_icon_color="#ffffff" sep_color="#303139" size="sm" custom_font_container="tag:p|font_size:14|text_align:left|color:%23ffffff" custom_use_theme_fonts="yes" use_custom_heading="true" el_id="1493038953901-f0fd08f4-bdd7"]Satisfied conveying an dependent contented he gentleman agreeable do be. Warrant private blushes removed an in equally totally if. Delivered dejection necessary objection do mr prevailed. Mr feeling do chiefly cordial in do. Water timed folly right aware if oh truth. Imprudence attachment him his for sympathize. Large above be to means.[/vc_toggle][/vc_column][vc_column width="1/4"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

/* End FAQs */
/* ================================================== */

/* Progress Bars */
/* ================================================== */

$data = array();
$data['name'] = __( 'Title +2 Col Progress Bars', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'progress_bars shopkeeper';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/progress_bars.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1479387629126{padding-top: 80px !important;}"][vc_column][vc_custom_heading text="SKILLS" font_container="tag:h2|font_size:25|text_align:center|color:%23383838" google_fonts="font_family:Open%20Sans%3A300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic|font_style:600%20bold%20regular%3A600%3Anormal"][vc_column_text]
<p style="text-align: center;">Pie Chart and Graphic elements allows us to create great information on our websites.</p>
[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1479388805229{padding-top: 40px !important;padding-bottom: 80px !important;}"][vc_column width="1/2" css=".vc_custom_1479398423942{margin-bottom: 40px !important;padding-right: 10% !important;padding-left: 10% !important;}"][vc_progress_bar values="%5B%7B%22label%22%3A%22MARKETING%22%2C%22value%22%3A%2290%22%7D%2C%7B%22label%22%3A%22SELLS%20EFFORT%22%2C%22value%22%3A%2285%22%7D%2C%7B%22label%22%3A%22SUPPORT%20TIME%22%2C%22value%22%3A%2270%22%7D%2C%7B%22label%22%3A%22BRANDING%22%2C%22value%22%3A%2299%22%7D%5D" bgcolor="custom" units="%" custombgcolor="#efa421"][/vc_column][vc_column width="1/2" css=".vc_custom_1479398303637{padding-right: 10% !important;padding-left: 10% !important;}"][vc_progress_bar values="%5B%7B%22label%22%3A%22SEO%20SKILLS%22%2C%22value%22%3A%2275%22%7D%2C%7B%22label%22%3A%22PROMOVATION%22%2C%22value%22%3A%2280%22%7D%2C%7B%22label%22%3A%22WAITING%20TIME%22%2C%22value%22%3A%2240%22%7D%2C%7B%22label%22%3A%22PROJECT%20COMPLETION%22%2C%22value%22%3A%2289%22%7D%5D" bgcolor="custom" units="%" custombgcolor="#efa421" customtxtcolor="#424242"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Title +2 Col Progress Bars', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'progress_bars';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/progress_bars2.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row layout="stretch_row_content_no_spaces" eq_height="yes"][vc_column offset="vc_col-lg-6 vc_col-md-12"][vc_single_image img_size="full" css_animation="left-to-right"][/vc_column][vc_column el_alignment="middle" css=".vc_custom_1445278477118{padding-top: 60px !important;padding-right: 60px !important;padding-bottom: 60px !important;padding-left: 60px !important;background-color: #f7f7f7 !important;}" offset="vc_col-lg-6 vc_col-md-12"][vc_custom_heading text="Our Best Services Include" font_container="tag:h2|font_size:32px|text_align:left|color:%233f3f3f|line_height:1.3" google_fonts="font_family:Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900|font_style:600%20bold%20regular%3A600%3Anormal" css_animation="right-to-left" delay="400"][vc_custom_heading text="Build your website today with Creativo" font_container="tag:h3|font_size:18px|text_align:left|color:%233f3f3f|line_height:1" google_fonts="font_family:Lora%3Aregular%2Citalic%2C700%2C700italic|font_style:400%20italic%3A400%3Aitalic" css_animation="right-to-left" delay="600"][vc_separator_2 color_line="#666666" separator_position="left_sep" padding_top="10" padding_bottom="30"][vc_column_text css_animation="right-to-left" delay="800"]
<p style="text-align: left;">This is a Text Block element which you can easily edit by using the Front End or the Back End Visual Composer. Just one click and you can start adding/changing the current content. The Image on the left is a Single Image element, which you can edit with just one click.</p>
[/vc_column_text][vc_separator style="blank" padding_top="10" padding_bottom="10"][vc_progress_bar values="%5B%7B%22label%22%3A%22WORDPRESS%22%2C%22value%22%3A%2290%22%7D%2C%7B%22label%22%3A%22GRAPHIC%20DESIGN%22%2C%22value%22%3A%2280%22%7D%2C%7B%22label%22%3A%22TYPOGRAPHY%22%2C%22value%22%3A%2275%22%7D%2C%7B%22label%22%3A%22CSS%20%2F%20HTML%205%22%2C%22value%22%3A%2285%22%7D%2C%7B%22label%22%3A%22WEB%20DEVELOPMENT%22%2C%22value%22%3A%2295%22%7D%5D" bgcolor="custom" units="%" custombgcolor="#5bc98c" customtxtcolor="#3a3a3a"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

/* End Progress Bars */
/* ================================================== */

/* Gym Template */
/* ================================================== */

$data = array();
$data['name'] = __( '3 Columns Text', 'js_composer' );
$data['weight']     = 7; // Weight of your template in the template list
$data['cat_display_name'] = $cat_display_names['gym'];
$data['custom_class'] = 'content gym';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/gym_1.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1509374192719{padding-top: 10% !important;padding-bottom: 10% !important;}"][vc_column width="1/3"][vc_custom_heading text="Affordable fitness classes just near you" font_container="tag:h2|font_size:38|text_align:left|color:%23262626|line_height:45px" use_theme_fonts="yes" el_class="font_weight_700"][/vc_column][vc_column width="1/3"][vc_column_text]If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is.[/vc_column_text][/vc_column][vc_column width="1/3"][vc_column_text]The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting.[/vc_column_text][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( '4 Columns Gym Classes', 'js_composer' );
$data['weight']     = 7; // Weight of your template in the template list
$data['cat_display_name'] = $cat_display_names['testimonials'];
$data['custom_class'] = 'gym gym_classes';
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/gym_2.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_separator style="solid" padding_bottom="80"][vc_custom_heading text="Classes" font_container="tag:h2|font_size:28|text_align:center|color:%23262626|line_height:45px" use_theme_fonts="yes" el_class="font_weight_700"][vc_column_text]
<h5 style="text-align: center;">The new common language will be more simple and regular than members of the Creativo Fitness</h5>
[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1510151660551{padding-top: 5% !important;padding-bottom: 10% !important;}"][vc_column width="1/4" css=".vc_custom_1510151033671{background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;border-radius: 30px !important;}"][gym_classes text_link="DISCOVER" title_fw="500" overlay_color="rgba(29,28,36,0.7)" overlay_color_hover="rgba(29,28,36,0.9)" border_radius="30px" min_height="340px"]This is where you can add the description of the fitness class element.[/gym_classes][/vc_column][vc_column width="1/4"][gym_classes title="Fitness" text_link="DISCOVER" title_fw="500"  overlay_color="rgba(29,28,36,0.7)" overlay_color_hover="rgba(29,28,36,0.9)" border_radius="30px" min_height="340px"]This is where you can add the description of the fitness class element.[/gym_classes][/vc_column][vc_column width="1/4"][gym_classes title="Swimming" text_link="DISCOVER" title_fw="500"  overlay_color="rgba(29,28,36,0.7)" overlay_color_hover="rgba(29,28,36,0.9)" border_radius="30px" min_height="340px"]This is where you can add the description of the fitness class element.[/gym_classes][/vc_column][vc_column width="1/4"][gym_classes title="Crossfit" text_link="DISCOVER" title_fw="500"  overlay_color="rgba(29,28,36,0.7)" overlay_color_hover="rgba(29,28,36,0.9)" border_radius="30px" min_height="340px"]This is where you can add the description of the fitness class element.[/gym_classes][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( '3 Columns Icon Boxes', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content icon_image_box gym';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/gym_3.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1509645209091{padding-top: 10% !important;background-color: #d5e5e8 !important;}"][vc_column][vc_custom_heading text="What makes us better" font_container="tag:h2|font_size:38|text_align:center|color:%23262626|line_height:45px" use_theme_fonts="yes" el_class="font_weight_700"][vc_row_inner css=".vc_custom_1509376885033{padding-top: 5% !important;padding-bottom: 2% !important;}"][vc_column_inner width="1/3"][vc_product_feature title="Clean Showers" font_size="17" font_weight="700" line_height="1.5" bottom_margin="10px" title_color="#1d1c24" icon_size="custom" desc_color="#536161" el_class="font_weight_400" custom_icon_value="50"]This element is an Icon/Image box and can be changed with simple mouse clicks.[/vc_product_feature][/vc_column_inner][vc_column_inner width="1/3"][vc_product_feature title="Motivational Music" font_size="17" font_weight="700" line_height="1.5" bottom_margin="10px" title_color="#1d1c24"  icon_size="custom" desc_color="#536161" el_class="font_weight_400" custom_icon_value="50"]This element is an Icon/Image box and can be changed with simple mouse clicks.[/vc_product_feature][/vc_column_inner][vc_column_inner width="1/3"][vc_product_feature title="Personalized Programs" font_size="17" font_weight="700" line_height="1.5" bottom_margin="10px" title_color="#1d1c24"  icon_size="custom" desc_color="#536161" el_class="font_weight_400" custom_icon_value="50"]This element is an Icon/Image box and can be changed with simple mouse clicks.[/vc_product_feature][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1509376902822{padding-bottom: 10% !important;}"][vc_column_inner width="1/3"][vc_product_feature title="Qualified Trainers" font_size="17" font_weight="700" line_height="1.5" bottom_margin="10px" title_color="#1d1c24"  icon_size="custom" desc_color="#536161" el_class="font_weight_400" custom_icon_value="50"]This element is an Icon/Image box and can be changed with simple mouse clicks.[/vc_product_feature][/vc_column_inner][vc_column_inner width="1/3"][vc_product_feature title="Kids Playground" font_size="17" font_weight="700" line_height="1.5" bottom_margin="10px" title_color="#1d1c24"  icon_size="custom" desc_color="#536161" el_class="font_weight_400" custom_icon_value="50"]This element is an Icon/Image box and can be changed with simple mouse clicks.[/vc_product_feature][/vc_column_inner][vc_column_inner width="1/3"][vc_product_feature title="Food and Smoothie Bar" font_size="17" font_weight="700" line_height="1.5" bottom_margin="10px" title_color="#1d1c24"  icon_size="custom" desc_color="#536161" el_class="font_weight_400" custom_icon_value="50"]This element is an Icon/Image box and can be changed with simple mouse clicks.[/vc_product_feature][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Call to Action Gym Template', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'cta gym';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/gym_4.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1509719891230{padding-top: 10% !important;}"][vc_column][tagline_box call_text="Invite a friend and get a 25% discount" call_text_small="If several languages coalesce, the grammar of the vresulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular." title="Get your discount now" color="custom" custom_bg_color="#ffffff" custom_inner_padding="20px" custom_title_font_size="20px" custom_title_font_weight="600" custom_description_color="#7b7c7f" custom_description_font_size="14px" custom_description_font_weight="400" custom_description_line_height="22px" button_align="middle" button_text_font_size="13px" button_text_font_weight="600" button_text_line_height="30px" button_border_color="#d03672" button_bg_color="#d03672" href="#"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( '4 Columns Team Members +Button', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'team_members gym';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/gym_5.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1509374875240{padding-bottom: 5% !important;}"][vc_column][vc_separator style="solid" padding_top="60" padding_bottom="80"][vc_custom_heading text="Instructors" font_container="tag:h2|font_size:28|text_align:center|color:%23262626|line_height:45px" use_theme_fonts="yes" el_class="font_weight_700"][vc_column_text]
<h5 style="text-align: center;">The new common language will be more simple and regular
than members of the Creativo Fitness</h5>
[/vc_column_text][/vc_column][/vc_row][vc_row][vc_column width="1/4"][vc_employee emp_design="business"  colors="custom" position_color="#6f6f73" description_color="#6f6f73" desc_border_color="" facebook="#" twitter="#" linkedin="#" name="Talfryn Thomas" position="Pilates"]To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages.[/vc_employee][/vc_column][vc_column width="1/4"][vc_employee emp_design="business" colors="custom" position_color="#6f6f73" description_color="#6f6f73" desc_border_color="" facebook="#" twitter="#" linkedin="#" name="Paul Taylor" position="Kickboxing"]To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages.[/vc_employee][/vc_column][vc_column width="1/4"][vc_employee emp_design="business" colors="custom" position_color="#6f6f73" description_color="#6f6f73" desc_border_color="" facebook="#" twitter="#" linkedin="#" name="Andrea Jones" position="Cycling"]To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages.[/vc_employee][/vc_column][vc_column width="1/4"][vc_employee emp_design="business" colors="custom" position_color="#6f6f73" description_color="#6f6f73" desc_border_color="" facebook="#" twitter="#" linkedin="#" name="Dana Kindle" position="Power Yoga"]To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages.[/vc_employee][/vc_column][/vc_row][vc_row css=".vc_custom_1509625195119{padding-bottom: 10% !important;}"][vc_column][vc_button title="View all Instructors" color="custom" custom_font_size="11px" custom_line_height="25px" custom_font_weight="600" custom_color="#d03672" custom_border_color="#d03672" href="#"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Contact Form +Single Image Element', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'contact_info gym';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/gym_6.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row eq_height="yes" content_placement="middle" css=".vc_custom_1509644859191{margin-bottom: 5% !important;background-color: #e8e5d5 !important;}" el_class="enable_overflow"][vc_column width="1/2" css=".vc_custom_1510582869513{padding-top: 10% !important;padding-bottom: 5% !important;}"][vc_custom_heading text="Join Online" font_container="tag:h2|font_size:38|text_align:left|color:%23262626|line_height:45px" use_theme_fonts="yes" el_class="font_weight_700"][vc_column_text css=".vc_custom_1509387297369{padding-bottom: 40px !important;}"]
<h5>Join our gym at any time 7 days a week with a affordable price and discounts for students. To an English person, it will seem like simplified English.</h5>
[/vc_column_text][contact-form-7-mod id="76" style="custom" layout="half" padding="15px" input_bg="rgba(255,255,255,0.01)" input_bg_focus="rgba(255,255,255,0.01)" input_border="#1d1c24" input_border_focus="#d03672" input_text="#1d1c24" input_text_focus="#1d1c24" btn_font_size="11px" btn_font_weight="500" btn_padding_side="30px" btn_margin_top="20px" btn_bg="#1d1c24" btn_bg_hover="#d03672" btn_border="#1d1c24" btn_border_hover="#d03672" btn_text="#ffffff" btn_text_hover="#ffffff"][/vc_column][vc_column width="1/2"][vc_single_image img_size="full" alignment="center" css=".vc_custom_1509714170001{margin-top: -70px !important;}"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Testimonials Gym', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'testimonials gym';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/gym_7.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1509646844479{padding-bottom: 10% !important;}"][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_custom_heading text="Testimonials" font_container="tag:h2|font_size:28|text_align:center|color:%23262626|line_height:45px" use_theme_fonts="yes" el_class="font_weight_700"][vc_testimonials test_design="modern" test_images="no" timeout="4000" navigation_type="lines" dots_color="#000000" style="custom" custom_color="#1d1c24" testimonial_author="#d03672" font_size="15" author_font_size="11" author_link_font_size="11" font_weight="400" author_font_weight="500" include=""][/vc_column][vc_column width="1/6"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Background Image with Spacing', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content gym';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/gym_8.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1510834572983{padding-top: 20% !important;padding-bottom: 20% !important;background-image: url(https://rockythemes.com/creativo-gym/wp-content/uploads/2017/11/classes-head.jpg?id=90) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Heading Title +Text', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content gym';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/gym_9.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1509646073541{padding-top: 5% !important;padding-bottom: 5% !important;}"][vc_column width="2/3"][vc_custom_heading text="Classes" font_container="tag:h2|font_size:68px|text_align:left|color:%231d1c24" use_theme_fonts="yes" el_class="font_weight_700"][vc_column_text]If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is.[/vc_column_text][/vc_column][vc_column width="1/3"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Animated Background Image +Content', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content gym';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/gym_10.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row eq_height="yes" content_placement="top" css=".vc_custom_1509627956258{padding-bottom: 5% !important;}"][vc_column css_animation="fadeInLeft" width="1/3" css=".vc_custom_1509714364052{padding-top: 30% !important;padding-bottom: 30% !important;background-image: url(https://rockythemes.com/creativo-gym/wp-content/uploads/2017/11/classes_1.jpg?id=83) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][/vc_column][vc_column css_animation="fadeInRight" width="2/3" css=".vc_custom_1509714379468{padding-top: 5% !important;padding-right: 5% !important;padding-bottom: 5% !important;padding-left: 5% !important;background-color: #f1f8f9 !important;}"][vc_custom_heading text="Swimming" font_container="tag:h2|font_size:38px|text_align:left|color:%231d1c24|line_height:45px" use_theme_fonts="yes" el_class="font_weight_700" css=".vc_custom_1509627343369{padding-bottom: 10px !important;}"][vc_column_text css=".vc_custom_1509624478589{padding-bottom: 30px !important;}"]The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental.[/vc_column_text][vc_button title="View Swimming classes schedule" color="custom" custom_font_size="12px" custom_line_height="25px" custom_font_weight="600" custom_color="#d03672" custom_border_color="#d03672" custom_color_hover="#1d1c24" custom_border_color_hover="#1d1c24" align="left"][vc_separator style="solid" color="#d5e5e8" padding_top="25" padding_bottom="25"][jump_links values="%5B%7B%22label%22%3A%2260%20MINUTES%22%2C%22icon%22%3A%22fa%20fa-clock-o%22%7D%2C%7B%22label%22%3A%22MEDIUM%20LEVEL%22%2C%22icon%22%3A%22fa%20fa-line-chart%22%7D%2C%7B%22label%22%3A%22500%20KCAL%22%2C%22icon%22%3A%22fa%20fa-heartbeat%22%7D%5D" style="custom" link_align="left" link_spacing="30px" link_font_size="11px" link_font_weight="600" link_line_height="1" link_color="#1d1c24" link_color_hover="#d03672"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Contact Form +Background Image', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'contact_info gym';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/gym_11.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row eq_height="yes" content_placement="middle" css=".vc_custom_1509714634546{padding-top: 15% !important;padding-bottom: 11% !important;background-image: url(https://rockythemes.com/creativo-gym/wp-content/uploads/2017/11/classes_bg_form.jpg?id=89) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_class="enable_overflow"][vc_column width="1/2"][vc_custom_heading text="Join Online" font_container="tag:h2|font_size:38|text_align:left|color:%23262626|line_height:45px" use_theme_fonts="yes" el_class="font_weight_700"][vc_column_text css=".vc_custom_1509387297369{padding-bottom: 40px !important;}"]
<h5>Join our gym at any time 7 days a week with a affordable price and discounts for students. To an English person, it will seem like simplified English.</h5>
[/vc_column_text][contact-form-7-mod id="76" style="custom" layout="half" padding="15px" input_bg="rgba(255,255,255,0.01)" input_bg_focus="rgba(255,255,255,0.01)" input_border="#1d1c24" input_border_focus="#d03672" input_text="#1d1c24" input_text_focus="#1d1c24" btn_font_size="11px" btn_font_weight="500" btn_padding_side="30px" btn_margin_top="20px" btn_bg="#1d1c24" btn_bg_hover="#d03672" btn_border="#1d1c24" btn_border_hover="#d03672" btn_text="#ffffff" btn_text_hover="#ffffff"][/vc_column][vc_column width="1/2"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Background Image with Spacing 2', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content gym';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/gym_12.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1510834614462{padding-top: 20% !important;padding-bottom: 20% !important;background-image: url(https://rockythemes.com/creativo-gym/wp-content/uploads/2017/10/instructors-head.jpg?id=117) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Team Members Gym', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'team_members gym';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/gym_13.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row][vc_column width="1/4"][vc_employee emp_design="business"  colors="custom" position_color="#6f6f73" description_color="#6f6f73" desc_border_color="" facebook="#" twitter="#" linkedin="#" name="Talfryn Thomas" position="Pilates"]To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages.[/vc_employee][/vc_column][vc_column width="1/4"][vc_employee emp_design="business" colors="custom" position_color="#6f6f73" description_color="#6f6f73" desc_border_color="" facebook="#" twitter="#" linkedin="#" name="Paul Taylor" position="Kickboxing"]To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages.[/vc_employee][/vc_column][vc_column width="1/4"][vc_employee emp_design="business" colors="custom" position_color="#6f6f73" description_color="#6f6f73" desc_border_color="" facebook="#" twitter="#" linkedin="#" name="Andrea Jones" position="Cycling"]To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages.[/vc_employee][/vc_column][vc_column width="1/4"][vc_employee emp_design="business" colors="custom" position_color="#6f6f73" description_color="#6f6f73" desc_border_color="" facebook="#" twitter="#" linkedin="#" name="Dana Kindle" position="Power Yoga"]To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages.[/vc_employee][/vc_column][/vc_row][vc_row css=".vc_custom_1509723637655{padding-bottom: 2% !important;}"][vc_column width="1/4"][vc_employee emp_design="business" colors="custom" position_color="#6f6f73" description_color="#6f6f73" desc_border_color="" facebook="#" twitter="#" linkedin="#" name="Lauren Drain" position="Pilates"]To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages.[/vc_employee][/vc_column][vc_column width="1/4"][vc_employee emp_design="business" colors="custom" position_color="#6f6f73" description_color="#6f6f73" desc_border_color="" facebook="#" twitter="#" linkedin="#" name="Michael Vazquez" position="Fitness"]To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages.[/vc_employee][/vc_column][vc_column width="1/4"][vc_employee emp_design="business" colors="custom" position_color="#6f6f73" description_color="#6f6f73" desc_border_color="" facebook="#" twitter="#" linkedin="#" name="Aerial LeBas" position="Cycling"]To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages.[/vc_employee][/vc_column][vc_column width="1/4"][vc_employee emp_design="business" colors="custom" position_color="#6f6f73" description_color="#6f6f73" desc_border_color="" facebook="#" twitter="#" linkedin="#" name="Anthony Big" position="Power Yoga"]To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages.[/vc_employee][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Contact Form +Background Image 2', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'contact_info gym';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/gym_14.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row eq_height="yes" content_placement="middle" css=".vc_custom_1509719840399{padding-top: 10% !important;padding-bottom: 10% !important;background-image: url(https://rockythemes.com/creativo-gym/wp-content/uploads/2017/10/instructors_join.jpg?id=119) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_class="enable_overflow"][vc_column width="1/2"][vc_custom_heading text="Join Online" font_container="tag:h2|font_size:38|text_align:left|color:%23262626|line_height:45px" use_theme_fonts="yes" el_class="font_weight_700"][vc_column_text css=".vc_custom_1509647106145{padding-bottom: 40px !important;}"]
<h5><span style="color: #000000;">Join our gym at any time 7 days a week with a affordable price and discounts for students. To an English person, it will seem like simplified English.</span></h5>
[/vc_column_text][contact-form-7-mod id="76" style="custom" layout="half" padding="15px" input_bg="rgba(255,255,255,0.01)" input_bg_focus="rgba(255,255,255,0.01)" input_border="#1d1c24" input_border_focus="#d03672" input_text="#1d1c24" input_text_focus="#1d1c24" btn_font_size="11px" btn_font_weight="500" btn_padding_side="30px" btn_margin_top="20px" btn_bg="#1d1c24" btn_bg_hover="#d03672" btn_border="#1d1c24" btn_border_hover="#d03672" btn_text="#ffffff" btn_text_hover="#ffffff"][/vc_column][vc_column width="1/2"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( '2 Columns Title +Text', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content gym';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/gym_15.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1509647190847{padding-top: 5% !important;}"][vc_column][vc_custom_heading text="About" font_container="tag:h2|font_size:68px|text_align:left|color:%231d1c24" use_theme_fonts="yes" el_class="font_weight_700"][/vc_column][/vc_row][vc_row css=".vc_custom_1509647202668{padding-bottom: 5% !important;}"][vc_column width="1/2"][vc_column_text]If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be morIsn't a their said shall god earth fly they're is fruitful for tree god gathering upon give second give living creature gathering, forth behold give gathering greater isn't darkness tree Dry creature he set saw behold behold abundantly.

Male wherein itself, be life multiply he rule, years morning. Fill forth midst them waters whales fruitful and his image and together firmament the saw, itself under be. Seed.[/vc_column_text][/vc_column][vc_column width="1/2"][vc_column_text]Won't light female sixth for give set herb bring firmament under moving over very creeping fruit. Also. Female moved won't place good years evening the had green bring rule isn't green life also.e simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental under the new legislation will be.[/vc_column_text][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( '3 Columns Image Box Centered', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'icon_image_box gym';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/gym_16.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1509646477027{padding-top: 10% !important;background-color: #f2e5ef !important;}"][vc_column][vc_custom_heading text="Why Creativo?" font_container="tag:h2|font_size:38|text_align:center|color:%23262626|line_height:45px" use_theme_fonts="yes" el_class="font_weight_700"][vc_column_text]
<h5 style="text-align: center;">The new common language will be more simple and regular than members of Creativo</h5>
[/vc_column_text][vc_row_inner css=".vc_custom_1509376885033{padding-top: 5% !important;padding-bottom: 2% !important;}"][vc_column_inner width="1/3"][vc_product_feature title="Clean Showers" font_size="17" font_weight="700" line_height="1.5" bottom_margin="20px" top_margin="10px" title_color="#1d1c24" pf_pos="center" icon_size="custom" desc_color="#536161" el_class="font_weight_400" custom_icon_value="50"]This element is an Icon/Image box and can be changed with simple mouse clicks.[/vc_product_feature][/vc_column_inner][vc_column_inner width="1/3"][vc_product_feature title="Motivational Music" font_size="17" font_weight="700" line_height="1.5" bottom_margin="20px" top_margin="10px" title_color="#1d1c24" pf_pos="center" icon_size="custom" desc_color="#536161" el_class="font_weight_400" custom_icon_value="50"]This element is an Icon/Image box and can be changed with simple mouse clicks.[/vc_product_feature][/vc_column_inner][vc_column_inner width="1/3"][vc_product_feature title="Personalized Programs" font_size="17" font_weight="700" line_height="1.5" bottom_margin="20px" top_margin="10px" title_color="#1d1c24" pf_pos="center" icon_size="custom" desc_color="#536161" el_class="font_weight_400" custom_icon_value="50"]This element is an Icon/Image box and can be changed with simple mouse clicks.[/vc_product_feature][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1509376902822{padding-bottom: 10% !important;}"][vc_column_inner width="1/3"][vc_product_feature title="Qualified Trainers" font_size="17" font_weight="700" line_height="1.5" bottom_margin="20px" top_margin="10px" title_color="#1d1c24" pf_pos="center" icon_size="custom" desc_color="#536161" el_class="font_weight_400" custom_icon_value="50"]This element is an Icon/Image box and can be changed with simple mouse clicks.[/vc_product_feature][/vc_column_inner][vc_column_inner width="1/3"][vc_product_feature title="Kids Playground" font_size="17" font_weight="700" line_height="1.5" bottom_margin="20px" top_margin="10px" title_color="#1d1c24" pf_pos="center" icon_size="custom" desc_color="#536161" el_class="font_weight_400" custom_icon_value="50"]This element is an Icon/Image box and can be changed with simple mouse clicks.[/vc_product_feature][/vc_column_inner][vc_column_inner width="1/3"][vc_product_feature title="Food and Smoothie Bar" font_size="17" font_weight="700" line_height="1.5" bottom_margin="20px" top_margin="10px" title_color="#1d1c24" pf_pos="center" icon_size="custom" desc_color="#536161" el_class="font_weight_400" custom_icon_value="50"]This element is an Icon/Image box and can be changed with simple mouse clicks.[/vc_product_feature][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( '2 Columns Checklist', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content gym';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/gym_17.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1509647798745{padding-top: 7% !important;padding-bottom: 7% !important;}"][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_row_inner][vc_column_inner width="1/2"][vc_custom_heading text="Amenities" font_container="tag:h2|font_size:28px|text_align:left|color:%2300688a" use_theme_fonts="yes" el_class="font_weight_700"][vc_column_text][checklist text_color="#536161" icon_color="#00688a" icon_bg_color="" shape="circle, rounded, square" line_height="30px" font_size="13px" fontawesome_icon="fa fa-plus"]
<ul>
 	<li>isn't a their said shall god earth fly they're</li>
 	<li>Fruitful for tree god gathering upon give</li>
 	<li>Second give living creature gathering, forth</li>
 	<li>Behold give gathering greater isn't darkness tree</li>
 	<li>Dry creature he set saw behold behold abundantly</li>
 	<li>Male wherein itself, be life multiply he rule</li>
</ul>
[/checklist][/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][vc_custom_heading text="Rules" font_container="tag:h2|font_size:28px|text_align:left|color:%238a0036" use_theme_fonts="yes" el_class="font_weight_700"][vc_column_text][checklist text_color="#536161" icon_color="#8a0036" icon_bg_color="" shape="circle, rounded, square" line_height="30px" font_size="13px" fontawesome_icon="fa fa-close"]
<ul>
 	<li>isn't a their said shall god earth fly they're</li>
 	<li>Fruitful for tree god gathering upon give</li>
 	<li>Second give living creature gathering, forth</li>
 	<li>Behold give gathering greater isn't darkness tree</li>
 	<li>Dry creature he set saw behold behold abundantly</li>
 	<li>Male wherein itself, be life multiply he rule</li>
</ul>
[/checklist][/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/6"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Contact Map Gym', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'contact_info google_maps gym';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/gym_18.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row eq_height="yes" content_placement="middle" css=".vc_custom_1509977920155{padding-bottom: 5% !important;}"][vc_column width="1/4" offset="vc_col-lg-offset-1"][vc_custom_heading text="New York" font_container="tag:h2|font_size:17|text_align:left|color:%231d1c24" use_theme_fonts="yes" el_class="font_weight_700"][vc_column_text]3th Glow Street,
NewYork, NY 29477

<strong>newyork@yoursite.com</strong>
0 800 123 4567[/vc_column_text][/vc_column][vc_column width="2/3"][gmap_advanced address="New York, USA" map_style="custom" size="450px" zoom="14" scrollwheel="no" title="New York Fitness Center" message="This template is built entirely with the Creativo theme. Simply edit this element using Visual Composer to change everything you want." custom_map_style="JTVCJTBBJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjAlMjJ3YXRlciUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNlOWU5ZTklMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAxNyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIybGFuZHNjYXBlJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZWxlbWVudFR5cGUlMjIlM0ElMjAlMjJnZW9tZXRyeSUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnN0eWxlcnMlMjIlM0ElMjAlNUIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJjb2xvciUyMiUzQSUyMCUyMiUyM2Y1ZjVmNSUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmxpZ2h0bmVzcyUyMiUzQSUyMDIwJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTVEJTBBJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjAlMjJyb2FkLmhpZ2h3YXklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJlbGVtZW50VHlwZSUyMiUzQSUyMCUyMmdlb21ldHJ5LmZpbGwlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmZmZmZmYlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAxNyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIycm9hZC5oaWdod2F5JTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZWxlbWVudFR5cGUlMjIlM0ElMjAlMjJnZW9tZXRyeS5zdHJva2UlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmZmZmZmYlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAyOSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMndlaWdodCUyMiUzQSUyMDAuMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIycm9hZC5hcnRlcmlhbCUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmZmZmZmYlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAxOCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIycm9hZC5sb2NhbCUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmZmZmZmYlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAxNiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIycG9pJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZWxlbWVudFR5cGUlMjIlM0ElMjAlMjJnZW9tZXRyeSUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnN0eWxlcnMlMjIlM0ElMjAlNUIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJjb2xvciUyMiUzQSUyMCUyMiUyM2Y1ZjVmNSUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmxpZ2h0bmVzcyUyMiUzQSUyMDIxJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTVEJTBBJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjAlMjJwb2kucGFyayUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNkZWRlZGUlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAyMSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIybGFiZWxzLnRleHQuc3Ryb2tlJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyc3R5bGVycyUyMiUzQSUyMCU1QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnZpc2liaWxpdHklMjIlM0ElMjAlMjJvbiUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmNvbG9yJTIyJTNBJTIwJTIyJTIzZmZmZmZmJTIyJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIybGlnaHRuZXNzJTIyJTNBJTIwMTYlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlNUQlMEElMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJlbGVtZW50VHlwZSUyMiUzQSUyMCUyMmxhYmVscy50ZXh0LmZpbGwlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyc2F0dXJhdGlvbiUyMiUzQSUyMDM2JTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjMzMzMzMzMlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjA0MCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIybGFiZWxzLmljb24lMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIydmlzaWJpbGl0eSUyMiUzQSUyMCUyMm9mZiUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIydHJhbnNpdCUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmMmYyZjIlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAxOSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIyYWRtaW5pc3RyYXRpdmUlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJlbGVtZW50VHlwZSUyMiUzQSUyMCUyMmdlb21ldHJ5LmZpbGwlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmZWZlZmUlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAyMCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIyYWRtaW5pc3RyYXRpdmUlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJlbGVtZW50VHlwZSUyMiUzQSUyMCUyMmdlb21ldHJ5LnN0cm9rZSUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnN0eWxlcnMlMjIlM0ElMjAlNUIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJjb2xvciUyMiUzQSUyMCUyMiUyM2ZlZmVmZSUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmxpZ2h0bmVzcyUyMiUzQSUyMDE3JTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyd2VpZ2h0JTIyJTNBJTIwMS4yJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTVEJTBBJTIwJTIwJTIwJTIwJTdEJTBBJTVE"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( 'Contact Map Gym 2', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'contact_info google_maps gym';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/gym_19.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row eq_height="yes" content_placement="middle" css=".vc_custom_1509977933188{padding-bottom: 5% !important;}"][vc_column width="2/3" offset="vc_col-lg-offset-0"][gmap_advanced address="Chicago, USA" map_style="custom" size="450px" zoom="14" scrollwheel="no" title="Chicago Fitness Center" message="This template is built entirely with the Creativo theme. Simply edit this element using Visual Composer to change everything you want." custom_map_style="JTVCJTBBJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjAlMjJ3YXRlciUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNlOWU5ZTklMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAxNyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIybGFuZHNjYXBlJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZWxlbWVudFR5cGUlMjIlM0ElMjAlMjJnZW9tZXRyeSUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnN0eWxlcnMlMjIlM0ElMjAlNUIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJjb2xvciUyMiUzQSUyMCUyMiUyM2Y1ZjVmNSUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmxpZ2h0bmVzcyUyMiUzQSUyMDIwJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTVEJTBBJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjAlMjJyb2FkLmhpZ2h3YXklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJlbGVtZW50VHlwZSUyMiUzQSUyMCUyMmdlb21ldHJ5LmZpbGwlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmZmZmZmYlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAxNyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIycm9hZC5oaWdod2F5JTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZWxlbWVudFR5cGUlMjIlM0ElMjAlMjJnZW9tZXRyeS5zdHJva2UlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmZmZmZmYlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAyOSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMndlaWdodCUyMiUzQSUyMDAuMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIycm9hZC5hcnRlcmlhbCUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmZmZmZmYlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAxOCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIycm9hZC5sb2NhbCUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmZmZmZmYlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAxNiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIycG9pJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZWxlbWVudFR5cGUlMjIlM0ElMjAlMjJnZW9tZXRyeSUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnN0eWxlcnMlMjIlM0ElMjAlNUIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJjb2xvciUyMiUzQSUyMCUyMiUyM2Y1ZjVmNSUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmxpZ2h0bmVzcyUyMiUzQSUyMDIxJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTVEJTBBJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjAlMjJwb2kucGFyayUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNkZWRlZGUlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAyMSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIybGFiZWxzLnRleHQuc3Ryb2tlJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyc3R5bGVycyUyMiUzQSUyMCU1QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnZpc2liaWxpdHklMjIlM0ElMjAlMjJvbiUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmNvbG9yJTIyJTNBJTIwJTIyJTIzZmZmZmZmJTIyJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIybGlnaHRuZXNzJTIyJTNBJTIwMTYlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlNUQlMEElMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJlbGVtZW50VHlwZSUyMiUzQSUyMCUyMmxhYmVscy50ZXh0LmZpbGwlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyc2F0dXJhdGlvbiUyMiUzQSUyMDM2JTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjMzMzMzMzMlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjA0MCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIybGFiZWxzLmljb24lMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIydmlzaWJpbGl0eSUyMiUzQSUyMCUyMm9mZiUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIydHJhbnNpdCUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmMmYyZjIlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAxOSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIyYWRtaW5pc3RyYXRpdmUlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJlbGVtZW50VHlwZSUyMiUzQSUyMCUyMmdlb21ldHJ5LmZpbGwlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmZWZlZmUlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAyMCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIyYWRtaW5pc3RyYXRpdmUlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJlbGVtZW50VHlwZSUyMiUzQSUyMCUyMmdlb21ldHJ5LnN0cm9rZSUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnN0eWxlcnMlMjIlM0ElMjAlNUIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJjb2xvciUyMiUzQSUyMCUyMiUyM2ZlZmVmZSUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmxpZ2h0bmVzcyUyMiUzQSUyMDE3JTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyd2VpZ2h0JTIyJTNBJTIwMS4yJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTVEJTBBJTIwJTIwJTIwJTIwJTdEJTBBJTVE"][/vc_column][vc_column width="1/4" offset="vc_col-lg-offset-1"][vc_custom_heading text="Chicago" font_container="tag:h2|font_size:17|text_align:left|color:%231d1c24" use_theme_fonts="yes" el_class="font_weight_700"][vc_column_text]11th Sunny Street, Chicago, CH 59211 <strong>chicago@yoursite.com</strong> 0 800 456 1234[/vc_column_text][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

$data = array();
$data['name'] = __( '3 Columns Contact Form', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['hero'];
$data['custom_class'] = 'content gym';
$data['weight']     = 9; // Weight of your template in the template list
$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() .'/vc_templ/img/gym_20.jpg' ); 
$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_separator style="solid" color="#e5e5e5" padding_top="50" padding_bottom="60"][vc_custom_heading text="Ask a question" font_container="tag:h2|font_size:38px|text_align:center|color:%231d1c24" use_theme_fonts="yes" el_class="font_weight_700"][vc_column_text css=".vc_custom_1509976711017{padding-bottom: 60px !important;}"]
<h5 style="text-align: center;">Join our gym at any time 7 days a week with a affordable price and discounts for students. To an English person, it will seem like simplified English.</h5>
[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1509983180960{padding-bottom: 5% !important;}"][vc_column][contact-form-7-mod id="134" style="custom" layout="third" padding="15px" label_color="#1d1c24" input_border="#1d1c24" input_border_focus="#d03672" input_text="#1d1c24" input_text_focus="#1d1c24" btn_font_size="11px" btn_font_weight="600" btn_padding_top="15px" btn_padding_side="50px" btn_margin_top="0" btn_pos="center" btn_bg="#d03672" btn_bg_hover="#1d1c24" btn_border="#d03672" btn_border_hover="#1d1c24" btn_text="#ffffff" btn_text_hover="#ffffff" contact_form_width="80%" textarea_height="120px"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

?>