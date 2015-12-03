<?php
/**
 * Test_theme template for displaying Single-Posts
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

			if ( have_posts() ) : the_post();

				get_template_part( 'loop', get_post_format() ); ?>

				<aside class="post-aside">

					<div class="post-links">
						<?php previous_post_link( '%link', __( '&laquo; Previous post', 'Kabachok' ) ) ?>
						<?php next_post_link( '%link', __( 'Next post &raquo;', 'Kabachok' ) ); ?>
					</div>


<?php

require_once 'page-portfolio-extra.php';

// use getSubcatsIds($parentCatSlug) function
// for catching posts with categories that are subcategories
// of a category with slug $parentCatSlug

if (in_category(getSubcatsIds('services'))) {
    include (get_template_directory(). '/page-portfolio-extra.php');
}
elseif(in_category('services 1')) {
    include(get_template_directory(). '/page-portfolio-extra.php');
}
elseif(in_category('services 2')) {
    include(get_template_directory(). '/page-portfolio-extra.php');
}
elseif(in_category('services 3')){
    include(get_template_directory(). '/page-portfolio-extra.php');
}
elseif(false){
}
else { include (get_template_directory(). '/single.php');
}
?>


<div class="post_meta">
<div class="post_meta_line">
	<div class="post_date"><i class="fa fa-calendar"></i><?php the_time('F jS, Y'); ?></div>
	<div class="post_author"><i class="fa fa-user"></i><?php the_author_posts_link(); ?></div> 
	<div class="post_permalink"><i class="fa fa-link"></i><a href="<?php echo get_permalink($post->ID); ?>">Permalink</a></div>
</div>
<div class="post_meta_line">
	<div class="post_category"><i class="fa fa-bookmark"></i><?php the_category(', '); ?></div>
	<div class="post_tag"><i class="fa fa-tag"></i><?php echo get_the_tag_list('<p>',', ','</p>'); ?></div>
</div>
<div class="post_meta_line">	
	<div class="post_comment"><i class="fa fa-comments"></i>
	<a href="<?php comments_link(); ?>"><?php comments_number('Be the first to comment!', '1 comment.', '% comments'); ?></a>
	</div>
	<div class="post_views"><i class="fa fa-eye"></i><?php echo getCrunchifyPostViews(get_the_ID()); ?></div>
	<div class="post_like"><i class="fa fa-thumbs-up"></i></div>
	<div class="post_dislike"><i class="fa fa-thumbs-down"></i></div>
</div>	
</div>

				<div class="relatedposts">
				<h3>Related posts</h3>
				<?php
				    $orig_post = $post;
				    global $post;
				    $tags = wp_get_post_tags($post->ID);
				     
				    if ($tags) {
				    $tag_ids = array();
				    foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
				    $args=array(
				    'tag__in' => $tag_ids,
				    'post__not_in' => array($post->ID),
				    'posts_per_page'=>4, // Number of related posts to display.
				    'caller_get_posts'=>1
				    );
				     
				    $my_query = new wp_query( $args );
				 
				    while( $my_query->have_posts() ) {
				    $my_query->the_post();
				    ?>
				     
				    <div class="relatedthumb">
				        <a rel="external" href="<? the_permalink()?>"><?php the_post_thumbnail(array(150,150)); ?><br />
				        <?php the_title(); ?>
				        </a>
				    </div>
				     
				    <? }
				    }
				    $post = $orig_post;
				    wp_reset_query();
				    ?>
		<div class="clearfix"></div>
		    
				</div>

<div class="clearfix"></div>

					<?php
						if ( comments_open() || get_comments_number() > 0 ) :
							comments_template( '', true );
						endif;
					?>

				</aside><?php

			else :

				get_template_part( 'loop', 'empty' );

			endif;
		?>
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



<!--<?php

require_once 'page-portfolio-extra.php';

// use getSubcatsIds($parentCatSlug) function
// for catching posts with categories that are subcategories
// of a category with slug $parentCatSlug

if (in_category(getSubcatsIds('services'))) {
    include (TEMPLATEPATH. '/page-portfolio-extra.php');
}
elseif(in_category('services 1')) {
    include(TEMPLATEPATH. '/page-portfolio-extra.php');
}
elseif(in_category('services 2')) {
    include(TEMPLATEPATH. '/page-portfolio-extra.php');
}
elseif(in_category('services 3')){
    include(TEMPLATEPATH. '/page-portfolio-extra.php');
}
elseif(false){
}
else { include (TEMPLATEPATH . '/single.php');
}
?>-->


<!--<?php
if ( in_category( array ('Services 1', 'Services 2', 'Services 3' ) ) ) {
	include 'page-portfolio-extra.php';
} else {
	include 'single.php';
}
?>-->


<!--<?php

$post = $wp_query->post;

if ( in_category('services 1') ) {

include(TEMPLATEPATH . '/page-portfolio-extra.php'); } 

elseif ( in_category('services 2') ) {

include(TEMPLATEPATH . '/page-portfolio-extra.php'); } 

elseif ( in_category('services 3') ) {

include(TEMPLATEPATH . '/page-portfolio-extra.php'); } 

else {

include(TEMPLATEPATH . '/page-portfolio-extra.php');

}

?>-->


<!--<?php
				if ( function_exists( 'dynamic_sidebar' ) ) :
					dynamic_sidebar( 'primary' );
				endif; ?>-->
