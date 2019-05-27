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
</section>
<section id="content">
  <?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'loop-templates/content', 'page' ); ?>

    <?php
    // If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) :
      comments_template();
    endif;
    ?>

  <?php endwhile; // end of the loop. ?>
</section>
<section id="poster">
</section>
<section id="info">
</section>

<?php get_footer(); ?>
