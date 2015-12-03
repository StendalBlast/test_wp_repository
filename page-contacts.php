<?php
/**
 * Template Name: Contacts Page
 *
 * @package WordPress
 * @subpackage Test_theme
 * @since Test_theme 1.0
 */
get_header();
?>

<div class="contacts-wrapper">
	<div class="container" id="contacts-container">
	
		<div class="contacts-row1">
			<h1>Contacts</h1>
			<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
		</div>




	<div class="contacts-row2">

	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3021.0901602920726!2d-73.97390748424881!3d40.78203197932434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2588fe721e565%3A0xc21d4857b7c77001!2zQ2VudHJhbCBQYXJrIFdlc3QgJiA3OXRoIFN0IFRyYW5zdmVyc2UsIE5ldyBZb3JrLCBOWSAxMDAyNCwg0KHQv9C-0LvRg9GH0LXQvdGWINCo0YLQsNGC0Lgg0JDQvNC10YDQuNC60Lg!5e0!3m2!1suk!2sua!4v1448871830068" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="contacts-info">
			<h2>Contact info</h2>
			<h5>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam</h5>
			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque la udantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia</p>
			<address>
				<strong>The Company Name Inc.<br>9870 St Vincent Place,<br>Glasgow, DC 45 Fr 45.</strong>
				<br>Telephone: +1 800 603 6035<br>
				FAX: +1 800 889 9898<br>
				E-mail: 
				<a href="">mail@demolink.org</a><br>
			</address>
		</div>
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" id="contact-form">
			<h2>Contact form</h2>

<? echo do_shortcode('[contact-form-7 id="212" title="Main form"]' ); ?>

		</div>
	<div class="clearfix"></div>	
	</div>

</div>
</div>

<?php get_footer(); ?>