<?php
/**
 * Template Name: Blog Page
 *
 * @package WordPress
 * @subpackage Test_theme
 * @since Test_theme 1.0
 */
get_header();
?>

 <?php if (is_page('Blog')) { echo 'You are on a blog page'; } ?>

<?php if (is_page('Blog')) { ?>
  <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
<?php } ?>

 

<?php get_footer(); ?>