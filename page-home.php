<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Test_theme
 * @since Test_theme 1.0
 */

get_header();
?>



<div class="t-home">
<div class="container" id="slider-wrapper">
	<?php if( function_exists('cyclone_slider') ) cyclone_slider('50'); ?>
</div>

	<div class="container b-carousel" id="photo-carousel">
		<h2>urgent projects</h2>
		<?php echo do_shortcode('[wonderplugin_carousel id="1"]'); ?>
	</div>	


<div class="container" id="home-post1">
	<h1>give your helping hand to those who need it!</h1>
	<p>Lorem ipsum dolor sit amet consectetuer adipiscing elit. Praesent vestibulum mole</p>
	<div class="btn-big">
		<a href=" http://localhost/wordpress/index.php/blog-2/" class="btn btn-info btn-normal btn-primary">learn more</a>
	</div>
</div>

<div class="container" id="home-serias-posts">
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="serias-posts-col1">
	<div class="post-inner">
		<h2>Safety</h2>
			<h5>Mauris fermentum dictum magneuam leo</h5>
				<div class="text-p">Ut telloribus eget elementum vel curleifend elit. Aean auctorisi et urnaliqt. Duirpis. Inteerutrm ante eu lastibulumiamur ulla fn nec eros. Vestiblum ante ipsum primis faorci lucs et utrices posuere cubilipende sollicitudin vd leo pharetra aug ne.ugue. Nlit magnandrerit siet tiidunt aciverra sed nullanec porta diam eu massa.</div>
		<div id="btn-sm">
			<a href="" class="btn btn-inverse btn-normal btn-primary">learn more</a>
		</div>
	</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="serias-posts-col2">
	<div class="post-inner">
		<h2>Supplies</h2>
			<h5>Duirpis. Inteerutrm ante eu lastibulumiam</h5>
				<div class="text-p">Estiblum ante ipsum primis faorci lucs et utrices posuere cubilipende sollicitudin veied leo pharetra aug neaugue. Nlit magnandrerit siet tinidunt aciverra sed nulla.onec porta diam eu massa. Quisque diam lorem interdum apibus ac scelerisque vitpede. Donec eget tellus non erat lacinia fer mentum. Donec in velit vel ipsum auct.</div>
		<div id="btn-sm">
			<a href="" class="btn btn-inverse btn-normal btn-primary">learn more</a>
		</div>
	</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="serias-posts-col3">
	<div class="post-inner">
		<h2>What`s new?</h2>
			<ul class="recent-posts">
				<li class="recent-posts-li">
				<span class="meta"><span class="post-date">Thursday, March 14, 2013</span></span>
					<div class="extra-recent-posts">
						<a href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit massa vel mauris sollicitudin dignissim. Phasellus...</a>
					</div>
				</li>
				<li class="recent-posts-li">
				<span class="meta"><span class="post-date">Tuesday, March 5, 2013</span></span>
					<div class="extra-recent-posts">
						<a href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit massa vel mauris sollicitudin dignissim. Phasellus...</a>
					</div>
				</li>
			</ul>
		<div id="btn-sm">
			<a href="" class="btn btn-inverse btn-normal btn-primary">learn more</a>
		</div>
	</div>
</div>
</div>
</div>


<?php get_footer(); ?>

