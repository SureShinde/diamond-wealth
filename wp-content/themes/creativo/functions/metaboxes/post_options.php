<div class='pyre_metabox'>
<?php
$this->select(	'skip_first',
				__('Skip first Featured Image', 'Creativo'),
				array('no' => __('No', 'Creativo'), 'yes' => __('Yes', 'Creativo')),
				__('Select to skip the first Featured Image set for this post.', 'Creativo')
			);
?>

<?php
$this->select(	'featured_image_size',
				__('Featured Image Size', 'Creativo'),
				array('full' => __('Full', 'Creativo'), 'crop' => __('Cropped version', 'Creativo')),
				'Select the size of the Featured Images shown on page. Cropped version option will show images in a: 800x533 px format'
			);
?>

<?php
$this->select(	'show_featured',
				__('Show Featured Images and Videos', 'Creativo'),
				array('yes' => __('Yes', 'Creativo'), 'no' => __('No', 'Creativo')),
				__('Display featured images and videos at the beggining of the post.', 'Creativo')
			);
?>
<?php
$this->select(	'en_sidebar',
				__('Enable Sidebar', 'Creativo'),
				array('yes' => __('Yes', 'Creativo'), 'no' => __('No', 'Creativo')),
				__('Select to enable or disable the sidebar. Disable the Sidebar to create a Full Width post. ', 'Creativo')
			);
?>
<?php
$this->select(	'sidebar_pos',
				__('Sidebar Position', 'Creativo'),
				array('right' => __('Right', 'Creativo'), 'left' => __('Left', 'Creativo')),
				__('Select the position of the sidebar.', 'Creativo')
			);
?>
<div class="pyre_info"><?php echo __('The following options will affect the Post Title area only if the Single Post Design is set to Modern under Theme Options -> Blog -> SINGLE POST PAGE OPTIONS.', 'Creativo'); ?></div>
<?php
$this->select(	'pt_fullscreen',
				__('Post Title Fullscreen Height', 'Creativo'),
				array('no' => __('No', 'Creativo'), 'yes' => __('Yes', 'Creativo')),
				__('Select to have the Post Title area expand to the entire height of the window.', 'Creativo')
			);
?>

<?php
$this->text(	'pt_custom_height',
				__('Post Title Custom Height', 'Creativo'),
				'Enter here a value in pixels to be used for the Post Title area. Setting a value here will overwrite the default value set in Theme Options. E.g: 300px'
			);
?>

<?php 
$this->upload('pt_bg_image', __('Post Title Background Image', 'Creativo'), __('Upload a background image to be used for the Post Title area. This option will work only if the Single Post Title Background option is set to Custom Background Image under Theme Options -> Blog -> Single Post Title Background.', 'Creativo')); ?>

<?php 
$this->colorpicker('pt_bg_color', __('Post Title Background Color', 'Creativo'), __('Choose a background color to be used for the Post Title area. This option will work only if the Single Post Title Background option is set to Custom Background Color under Theme Options -> Blog -> Single Post Title Background.', 'Creativo'));?>
<?php
$this->text(	'vertical_position',
				__('Background Image Manual Vertical Position ', 'Creativo'),
				'Enter here a value in pixels to manually position the image vertically. This will also affect the Featured Image if set to be used as the Background. E.g: -200px'
			);
?>
<?php
$this->text(	'youtube_bg',
				__('Post Title Youtube Background', 'Creativo'),
				'Enter here the Youtube Video ID you want to use as the background of the Post Title. E.g: '
			);
?>
<?php 
$this->colorpicker('pt_mask_color', __('Post Title Mask Color', 'Creativo'), __('Choose a background color to be used for the Post Title mask. Leave blank to inherit the default mask color set under Theme Options -> Blog -> Custom Background Image Mask Color', 'Creativo'));?>


<div class="pyre_info"><?php echo __('--- END ---', 'Creativo'); ?></div>
<?php
$this->text(	'pt_font_size',
				__('Post Title Font Size', 'Creativo'),
				'Set the Posts Titles font size. E.g: 26 <br>Leave blank to use the option set under Theme Options -> Blog -> Single Post Title font size (px)'
			);
?>
<?php
$this->text(	'pt_line_height',
				__('Post Title Line Height', 'Creativo'),
				'Set the Posts Titles line height. <br>Leave blank to use the option set under Theme Options -> Blog -> Single Post Title line height'
			);
?>
<?php 
$this->colorpicker('pt_color', __('Post Title Color', 'Creativo'), __('This will overide the actual post title color set under Theme Options -> Blog -> Single Post Title Color.', 'Creativo'));?>
<?php
$this->text(	'pt_font_weight',
				__('Post Title Font Weight', 'Creativo'),
				'Set the Posts Titles font weight. <br>Leave blank to use the option set under Theme Options -> Blog -> Single Post Title font weight'
			);
?>

<?php
$this->select(	'post_elements_align',
				__('Post Title and Meta Align', 'Creativo'),
				array('default' => __('Default', 'Creativo'), 'left' => __('Left', 'Creativo'), 'center' => __('Center', 'Creativo') ),
				__('Select the alignment of the Post elements. Leave Default to inherit the option set under Theme Options -> Blog -> Post Title and Meta Align', 'Creativo')
			);
?>

<?php
$this->select(	'post_title_meta_pos',
				__('Post Title and Meta Positioning', 'Creativo'),
				array('default' => __('Default', 'Creativo'), 'above' => __('Above Featured Images', 'Creativo'), 'below' => __('Below Featured Images', 'Creativo') ),
				__('Select the Post Title and Meta positioning. Leave Default to inherit the setting set under Appearance -> Theme Options -> Blog -> Post Title and Meta Positioning', 'Creativo')
			);
?>
<?php 
$this->colorpicker('post_meta_color', __('Post Meta Text Color', 'Creativo'), __('This will overide the actual post meta color set in Theme Options.', 'Creativo'));?>
<?php 
$this->colorpicker('post_meta_color_link', __('Post Meta Link Color', 'Creativo'), __('This will overide the actual post meta link color set in Theme Options.', 'Creativo'));?>

<?php
$this->select(	'post_content_columns',
				__('Post Content Columns', 'Creativo'),
				array('default' => __('Default', 'Creativo'), '2' => __('2 Columns', 'Creativo'), '3' => __('3 Columns', 'Creativo') ),
				__('Optionally you can force the Post Content to use a Column Layout - your content will be split into equal columns depending on the selection above.', 'Creativo')
			);
?>

</div>