<?php
global $data;
$current_post_id = get_queried_object_id();

if( get_post_meta($current_post_id, 'pyre_main_menu', true) != 'default' ) {
    $main_menu = get_post_meta($current_post_id, 'pyre_main_menu', true);
}
else {
    $main_menu = '';
}
if( get_post_meta($current_post_id, 'pyre_one_menu', true) != 'default' ) {
    $one_menu = get_post_meta($current_post_id, 'pyre_one_menu', true);
}
else {
    $one_menu = '';
}
if( get_post_meta($current_post_id, 'pyre_side_menu', true) != 'default' ) {
    $side_menu = get_post_meta($current_post_id, 'pyre_side_menu', true);
}
else {
    $side_menu = '';
}   
?>

<nav id="navigation" class="main_menu <?php echo $menu_extra_class; ?> clearfix">                     
    <?php
    if ( is_page_template ( 'page-one-full.php' ) ) {
        wp_nav_menu(array('theme_location' => 'one-page-menu', 'menu' => $one_menu, 'container' => false, 'items_wrap' => '<ul id="one_page_navigation" class="%2$s clearfix">%3$s</ul>', 'fallback_cb' => 'default_menu_fallback', 'walker' => new cr_walker));
        
    }
    else{        
        wp_nav_menu(array('theme_location' => 'primary-menu', 'menu' => $main_menu, 'container' => false, 'items_wrap' => '<ul id="%1$s" class="%2$s clearfix">%3$s</ul>', 'fallback_cb' => 'default_menu_fallback', 'walker' => new cr_walker));
        ?>
        
    <?php
    }
    ?> 
    <form action="<?php echo home_url(); ?>" method="get" class="header_search">
        <input type="text" name="s" class="form-control" value="" placeholder="<?php _e('Type &amp; Hit Enter..','Creativo'); ?>">
        <?php if( ( class_exists( 'Woocommerce' ) && is_woocommerce() ) || ( is_tax( 'product_cat' ) ||  is_tax( 'product_tag' ) ) ) { ?>
        	<input type="hidden" name="post_type" value="product">
        <?php } ?>	
    </form>                                        
</nav>

<?php if($data['header_extra_button']){ ?>
    <div class="extra_header_button"><a href="<?php echo $data['header_cta_link']; ?>" class="header_button" target="<?php echo $data['header_cta_link_target']; ?>"><?php echo $data['header_cta_text']; ?></a></div>
<?php } ?>

<div class="additional_icons">
	<ul>												
		<?php
		echo header_menu_extra_icons();
		?>
	</ul>
</div> 
