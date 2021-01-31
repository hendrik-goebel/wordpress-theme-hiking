<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
include TEMPLATEPATH . '/inc/includes.php';
get_header();
?>


<div class="<?php echo $container_class; ?>">
  <div class="row mt-5">
    <div class="col-lg-7 ">
		<?php

		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content', get_post_type() );
			}
		}

		?>
    </div>

    <div class="col-lg-5 ">
		<?php get_template_part( 'partials/map' ); ?>
		<?php get_template_part( 'partials/widgets' ); ?>
    </div>
    <div class="row">
      <div class="col-md-7">
		  <?php get_template_part( 'partials/comments' ); ?>
      </div>
    </div>
  </div>

	<?php
	get_footer();
	?>
  </body>
  </html>