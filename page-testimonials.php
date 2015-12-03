<?php
/**
 * Template Name: Testimonials Page
 *
 * @package WordPress
 * @subpackage Test_theme
 * @since Test_theme 1.0
 */
get_header();
?>


<div class="testimonials-wrapper">
	<div class="container" id="testimonials-container">

	

	<div class="testimonials-row1">
		<h1>testimonials</h1>
	</div>

	<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>

	<div class="testimonials-row2">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" id="testimonials-col8">
			<article id="testimonials-art">
				<blockquote id="testimonials-bq">
					<div class="testimonials-content">
						<p>Aenean nonummy hendrerit mau phasellu porta. Fusce suscipit varius mi sed. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio morbi.</p>
						<p>Ut viverra mauris justo, quis auctor nisi. Suspendisse sit amet diam diam, eget volutpat lacus. Vestibulum faucibus scelerisque nisl vitae scelerisque. Sed tristique metus eu quam viverra malesuada. Cras porta eros nec libero bibendum sed faucibus felis fringilla. Quisque sed odio neque. Mauris at nisl ac eros pretium hendrerit vitae et velit. Aliquam erat volutpat. Proin sit amet erat vel nisl consectetur auctor et at quam.</p>
						<small>
						<span class="user">Sam Kromstain</span>
						<span class="info">Manager</span><br>
						<a href="">http://demolink.org</a>
						</small>
					</div>
				</blockquote>
			</article>
			<article id="testimonials-art">
				<blockquote id="testimonials-bq">
					<div class="testimonials-content">
						<p>Aenean nonummy hendrerit mau phasellu porta. Fusce suscipit varius mi sed. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio morbi.</p>
						<p>Ut viverra mauris justo, quis auctor nisi. Suspendisse sit amet diam diam, eget volutpat lacus. Vestibulum faucibus scelerisque nisl vitae scelerisque. Sed tristique metus eu quam viverra malesuada. Cras porta eros nec libero bibendum sed faucibus felis fringilla. Quisque sed odio neque. Mauris at nisl ac eros pretium hendrerit vitae et velit. Aliquam erat volutpat. Proin sit amet erat vel nisl consectetur auctor et at quam.</p>
						<small>
						<span class="user">John Franklin</span>
						<span class="info">Consultant</span><br>
						<a href="">http://demolink.org</a>
						</small>
					</div>
				</blockquote>
			</article>
			<article id="testimonials-art">
				<blockquote id="testimonials-bq">
					<div class="testimonials-content">
						<p>Aenean nonummy hendrerit mau phasellu porta. Fusce suscipit varius mi sed. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio morbi.</p>
						<p>Ut viverra mauris justo, quis auctor nisi. Suspendisse sit amet diam diam, eget volutpat lacus. Vestibulum faucibus scelerisque nisl vitae scelerisque. Sed tristique metus eu quam viverra malesuada. Cras porta eros nec libero bibendum sed faucibus felis fringilla. Quisque sed odio neque. Mauris at nisl ac eros pretium hendrerit vitae et velit. Aliquam erat volutpat. Proin sit amet erat vel nisl consectetur auctor et at quam.</p>
						<small>
						<span class="user">Mr. John Anderson</span>
						<span class="info">Designer</span><br>
						<a href="">http://demolink.org</a>
						</small>
					</div>
				</blockquote>
			</article>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 sidebar">
		    		<?php
				if ( function_exists( 'dynamic_sidebar' ) ) :
					dynamic_sidebar( 'primary' );
				endif; ?>
				</div>
		<div class="clearfix"></div>
		</div>
	</div>
</div>

<?php get_footer(); ?>