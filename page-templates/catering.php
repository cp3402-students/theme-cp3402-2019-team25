<?php
/**
 * Template Name: Catering
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<section id="catering">
  <?php if( get_field('catering')): ?>
    <?php the_field('catering'); ?>
  <?php endif; ?>
</section>
<section id="services">
  <?php if( get_field('services')): ?>
    <?php the_field('services'); ?>
  <?php endif; ?>
</section>
<section id="form">
  <?php if( get_field('form')): ?>
    <?php the_field('form'); ?>
  <?php endif; ?>
</section>

<?php get_footer(); ?>
