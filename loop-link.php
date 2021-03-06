<?php
/**
 * Test_theme template for displaying the Loop for the Link-Post-Format
 *
 * @package WordPress
 * @subpackage Test_theme
 * @since Test_theme 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <h1 class="post-title">
    	<?php the_content(); ?>
    </h1>

    <?php get_template_part( 'template-part', 'byline' ); ?>

</article>