<?php
/**
 * Template Name: Menu Page
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<section id="coffee_etc">
  <?php if( get_field('coffee_etc')): ?>
    <?php the_field('coffee_etc'); ?>
  <?php endif; ?>
</section>
<section id="cold_drinks">
  <?php if( get_field('cold_drinks')): ?>
    <?php the_field('cold_drinks'); ?>
  <?php endif; ?>
</section>
<section id="juices">
  <?php if( get_field('juices')): ?>
    <?php the_field('juices'); ?>
  <?php endif; ?>
</section>
<section id="desserts">
  <?php if( get_field('desserts')): ?>
    <?php the_field('desserts'); ?>
  <?php endif; ?>
</section>
<section id="breakfast">
  <?php if( get_field('breakfast')): ?>
    <?php the_field('breakfast'); ?>
  <?php endif; ?>
</section>
<section id="lunch">
  <?php if( get_field('lunch')): ?>
    <?php the_field('lunch'); ?>
  <?php endif; ?>
</section>
<section id="vegetarian">
  <?php if( get_field('vegetarian')): ?>
    <?php the_field('vegetarian'); ?>
  <?php endif; ?>
</section>

<?php get_footer(); ?>
