<?php
/**
 * Test_theme template for displaying Archives
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

<?php

		if ( have_posts() ) : ?>

			<h1 class="archive-title">
			<?php
					if ( is_category() ):
						printf( __( 'Category Archives: %s', 'Kabachok' ), single_cat_title( '', false ) );

					elseif ( is_tag() ):
						printf( __( 'Tag Archives: %s', 'Kabachok' ), single_tag_title( '', false ) );

					elseif ( is_tax() ):
						$term     = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
						$taxonomy = get_taxonomy( get_query_var( 'taxonomy' ) );
						printf( __( '%s Archives: %s', 'Kabachok' ), $taxonomy->labels->singular_name, $term->name );

					elseif ( is_day() ) :
						printf( __( 'Daily Archives: %s', 'Kabachok' ), get_the_date() );

					elseif ( is_month() ) :
						printf( __( 'Monthly Archives: %s', 'Kabachok' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'Kabachok' ) ) );

					elseif ( is_year() ) :
						printf( __( 'Yearly Archives: %s', 'Kabachok' ), get_the_date( _x( 'Y', 'yearly archives date format', 'Kabachok' ) ) );

					elseif ( is_author() ) : the_post();
						printf( __( 'All posts by %s', 'Kabachok' ), get_the_author() );

					else :
						_e( 'Archives', 'Kabachok' );

					endif;
				?>
			</h1>


	<section class="page-content primary" role="main"><?php

			if ( is_category() || is_tag() || is_tax() ):
				$term_description = term_description();
				if ( ! empty( $term_description ) ) : ?>

					<div class="archive-description"><?php
						echo $term_description; ?>
					</div><?php

				endif;
			endif;

			if ( is_author() && get_the_author_meta( 'description' ) ) : ?>

				<div class="archive-description">
					<?php the_author_meta( 'description' ); ?>
				</div><?php

			endif;

			while ( have_posts() ) : the_post();

				get_template_part( 'loop', get_post_format() );

			endwhile;

		else :

			get_template_part( 'loop', 'empty' );

		endif; ?>

		

		<div class="pagination">

			<?php get_template_part( 'template-part', 'pagination' ); ?>

		</div>
		
<div class="clearfix"></div>

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