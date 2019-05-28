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
	<div class="showcase-container">
	  <?php if( get_field('showcase')): ?>
	    <?php the_field('showcase'); ?>
	  <?php endif; ?>
	</div>
</section>
<section id="content">
	<div class="content-container">
	  <?php if( get_field('content')): ?>
	    <?php the_field('content'); ?>
	  <?php endif; ?>
	</div>
</section>
<section id="poster">
	<div class="poster-container">
	  <?php if( get_field('poster')): ?>
	    <?php the_field('poster'); ?>
	  <?php endif; ?>
	</div>
</section>
<section id="info">
	<div class="info-container">
	  <?php if( get_field('info')): ?>
	    <?php the_field('info'); ?>
	  <?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>
