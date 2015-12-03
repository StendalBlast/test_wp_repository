<?php
/**
 * Template Name: Programs Page
 *
 * @package WordPress
 * @subpackage Test_theme
 * @since Test_theme 1.0
 */

get_header();
?>

<div class="programs-wrapper">
	<div class="container" id="programs-container">
	
		<div class="programs-row1">
			<h1>Programs</h1>
			<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
		</div>

		<div class="programs-row2">
			<h2>Our Programs</h2>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="our-programs-photo1">
					<figure><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/programs/Programs1_340x308.jpg"></a></figure>
					<h5><a href="">Proin aliquet mauris dictum nisi</a></h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit massa vel mauris sollicitudin dignissim.... </p>
				<div class="clearfix"></div>
				</div>
				
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="our-programs-photo">
					<figure><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/programs/Programs2_340x308.jpg"></a></figure>
					<h5><a href="">Nulla lacinia, sem quis malesuada</a></h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit massa vel mauris sollicitudin dignissim.... </p>
				<div class="clearfix"></div>
				</div>
			
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="our-programs-photo">
					<figure><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/programs/Programs3_340x308.jpg"></a></figure>
					<h5><a href="">Interdum et malesuada fames ac</a></h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit massa vel mauris sollicitudin dignissim.... </p>
				<div class="clearfix"></div>
				</div>
		
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="our-programs-photo1">
					<figure><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/programs/Programs4_340x308.jpg"></a></figure>
					<h5><a href="">Donec imperdiet faucibus tristique</a></h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit massa vel mauris sollicitudin dignissim.... </p>
				<div class="clearfix"></div>
				</div>
		
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="our-programs-photo">
					<figure><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/programs/Programs5_340x308.jpg"></a></figure>
					<h5><a href="">Mauris fermentum dictum magneuam leo. Aliquam</a></h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit massa vel mauris sollicitudin dignissim.... </p>
				<div class="clearfix"></div>
				</div>
			<div class="clearfix"></div>
		</div>

</div>
</div>

<?php get_footer(); ?>