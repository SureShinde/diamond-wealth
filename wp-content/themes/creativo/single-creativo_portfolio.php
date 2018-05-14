<?php get_header(); ?>
	
<?php 
if($data['single_portfolio_style'] == 'modern') {
	get_template_part('content/single-portfolio/modern');
}
else {
	get_template_part('content/single-portfolio/default');
}
?>

<?php get_footer(); ?>