<?php
/**
 * Template Name: Contact Us Page
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php while ( have_posts() ) : the_post(); ?>

  <?php get_template_part( 'loop-templates/content', 'page' ); ?>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
