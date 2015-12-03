<?php
/**
 * Template Name: About Page
 *
 * @package WordPress
 * @subpackage Test_theme
 * @since Test_theme 1.0
 */
get_header();
?>

<div class="about-wrapper">
	<div class="container" id="about-container">

	
	
		<div class="about-row1">
		<h1>about</h1>

		<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
		
		</div>
		<div class="about-row2">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="about-col4">
				<h2>Who we are</h2>
				<span class="dropcap">1</span>
				<h6>Mauris fermentum dictum magneuam leo.</h6>
				<p>Ut telloribus eget elementum vel curleifend elit. Aean auctorisi et urnaliqt. Duirpis.</p>
				<span class="dropcap">2</span>
				<h6>Renementum dictum magneuam.</h6>
				<p>Ut telloribus eget elementum vel curleifend elit. Aean auctorisi et urnaliqt. Duirpis.</p>
				<span class="dropcap">3</span>
				<h6>Mauris fermentum dictum magneuam leo.</h6>
				<p>Ut telloribus eget elementum vel curleifend elit. Aean auctorisi et urnaliqt. Duirpis.</p>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="about-col8">
				<h2>A Few Words About Us</h2>
				<h6>Mauris fermentum dictum magneuam leo. Aliquam dapibus tincidunt metus. raesent justo dolor, lobortis quis, lobortis dignissim, pulvinar ac, lorem estibulum sed ante onec sagittis euis.</h6>
				<p>Ut telloribus eget elementum vel curleifend elit. Aean auctorisi et urnaliqt. Duirpis. Inteerutrm ante eu lastibulumiamur ulla fn nec eros. Vestiblum ante ipsum primis faorci lucs et utrices posuere cubilipende sollicitudin vd leo pharetra aug ne.ugue. Nlit magandrerit siet tiidunt aciverra sed nullanec porta diam eu massa. Quisque diam lorem interdum vitae dapibus ac scelerisque vitae pede. Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum auctor pulvinar. Proin ullamcorpe.</p>
				<div id="btn-sm">
				<a href="" class="btn btn-inverse btn-normal btn-primary">learn more</a>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<hr>
		<div class="about-row3">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="about-col4">
				<h2>Testimonials</h2>
				<div class="testimonials">
				<div class="testimonials-item">
					<blockquote class="testimonials-item-blockquote"><a href="">
					Aenean nonummy hendrerit mau phasellu porta. Fusce suscipit varius mi sed. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio morbi. Ut viverra mauris justo, quis... 
					</a></blockquote>
					<small class="testimonials-meta"><span class="user">Sam Kromstain</span></small>
				</div>
				<div class="testimonials-item">
					<div class="testimonials-item">
					<blockquote class="testimonials-item-blockquote"><a href="">
					Aenean nonummy hendrerit mau phasellu porta. Fusce suscipit varius mi sed. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio morbi. Ut viverra mauris justo, quis... 
					</a></blockquote>
					<small class="testimonials-meta"><span class="user">John Franklin</span></small>
				</div>
				</div>
				</div>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="about-col8">
				<h2>Our work team</h2>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="our-team-photo">
					<figure><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/team/Marta Pool.jpg"></a></figure>
					<h5><a href="">Marta Pool</a></h5>
					<p>Nulla facilisi. Aenean nec eros.... </p>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="our-team-photo">
					<figure><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/team/Alan Smith.jpg"></a></figure>
					<h5><a href="">Alan Smith</a></h5>
					<p>Nulla facilisi. Aenean nec eros.... </p>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="our-team-photo">
					<figure><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/team/Iren Brown.jpg"></a></figure>
					<h5><a href="">Iren Brown</a></h5>
					<p>Nulla facilisi. Aenean nec eros.... </p>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="our-team-photo">
					<figure><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/team/John McCoist.jpg"></a></figure>
					<h5><a href="">John McCoist</a></h5>
					<p>Nulla facilisi. Aenean nec eros.... </p>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="our-team-photo">
					<figure><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/team/Patrick Pool.jpg"></a></figure>
					<h5><a href="">Patrick Pool</a></h5>
					<p>Nulla facilisi. Aenean nec eros.... </p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>

	</div>
</div>




<?php get_footer(); ?>