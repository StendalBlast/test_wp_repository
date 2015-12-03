<?php
/**
 * Test_theme Index template
 *
 * @package WordPress
 * @subpackage Test_theme
 * @since Test_theme 1.0
 */

get_header(); ?>


<div class="posts-wrapper">
<div class="container" id="posts-container">

<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>

<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" id="testimonials-col8">

	<section class="page-content primary" role="main">

		<?php
			if ( have_posts() ):

				while ( have_posts() ) : the_post();
 
					get_template_part( 'loop', get_post_format() );

					wp_link_pages(
						array(
							'before'           => '<div class="linked-page-nav"><p>' . sprintf( __( '<em>%s</em> is separated in multiple parts:', 'Kabachok' ), get_the_title() ) . '<br />',
							'after'            => '</p></div>',
							'next_or_number'   => 'number',
							'separator'        => ' ',
							'pagelink'         => __( '&raquo; Part %', 'Kabachok' ),
						)
					);

				endwhile;

			else :

				get_template_part( 'loop', 'empty' );

			endif;
		?>

		<div class="pagination">

			<?php get_template_part( 'template-part', 'pagination' ); ?>

		</div>

		

	</section>

	</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 sidebar">
		    		<?php
				if ( function_exists( 'dynamic_sidebar' ) ) :
					dynamic_sidebar( 'primary' );
				endif; ?>
		</div>
</div>
</div>


<?php get_footer(); ?>