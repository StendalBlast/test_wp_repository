<?php
/**
 * Template Name: Page-archive Page
 *
 * @package WordPress
 * @subpackage Test_theme
 * @since Test_theme 1.0
 */

get_header();
?>

<div class="testimonials-wrapper">
<div class="container" id="testimonials-container">
<h1>Archive</h1>
<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" id="testimonials-col8">
<p id="archive-p">Nullam non lectus nec quam laoreet suscipit vel eget ligula. Aliquam condimentum venenatis luctus. Ut quis nibh nec tortor tempor faucibus sit amet ac metus. Nullam lacus nisi, lobortis et adipiscing eget, rutrum a eros. Duis a pharetra tortor. Nunc sollicitudin, turpis eget ultrices porttitor, mi est fermentum arcu, quis tristique quam leo a purus. Etiam bibendum lectus ac felis sollicitudin lobortis commodo ac ipsum. Fusce vitae augue dolor, ac accumsan diam.</p>
<?php
			$how_many_last_posts = intval(get_post_meta($post->ID, 'archived-posts-no', true));

			/* Here, we're making sure that the number fetched is reasonable. In case it's higher than 200 or lower than 2, we're just resetting it to the default value of 15. */
			if($how_many_last_posts > 200 || $how_many_last_posts < 2) $how_many_last_posts = 20;

			$my_query = new WP_Query('post_type=post&nopaging=1');
			if($my_query->have_posts()) {
			 
			echo '<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="archives-latest-section">';
 			echo '<h3 class="widget-title">Last '.$how_many_last_posts.' Posts:</h3>&nbsp;
			<ul id="bylast">';
			  
			  $counter = 1;
			  while($my_query->have_posts() && $counter <= $how_many_last_posts) {
			    $my_query->the_post(); 
			    ?>
			    <li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
			    <?php
			    $counter++;
			  }
			  echo '</ul></div>';
			  wp_reset_postdata();
			}
			?>

<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="archive-month">
				<h3 class="widget-title">Archives by Month:</h3>
                <ul id="bymonth">
                <?php wp_get_archives(); ?>
                </ul>
    </div>      
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="archive-subject">
                <h3 class="widget-title">Archives by Subject:</h3>
                <ul id="bycategories">
				<?php wp_list_categories('title_li=&exclude=42,43,44'); ?>
				</ul>
        </div>      
 			
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