<?php
/**
 * Template Name: Home Page
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<section id="showcase">
  <?php if( get_field('showcase')): ?>
    <?php the_field('showcase'); ?>
  <?php endif; ?>
</section>
<section id="content">
  <?php if( get_field('content')): ?>
    <?php the_field('content'); ?>
  <?php endif; ?>
</section>
<section id="poster">
  <?php if( get_field('poster')): ?>
    <?php the_field('poster'); ?>
  <?php endif; ?>
</section>
<section id="info">
  <?php if( get_field('info')): ?>
    <?php the_field('info'); ?>
  <?php endif; ?>
</section>

<?php get_footer(); ?>
