<?php
/**
 * Template Name: About Us Page
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<section id="about_us">
  <?php if( get_field('about_us')): ?>
    <?php the_field('about_us'); ?>
  <?php endif; ?>
</section>
<section id="our_history">
  <?php if( get_field('our_history')): ?>
    <?php the_field('our_history'); ?>
  <?php endif; ?>
</section>
<section id="staff">
  <?php if( get_field('staff')): ?>
    <?php the_field('staff'); ?>
  <?php endif; ?>
</section>

<?php get_footer(); ?>
