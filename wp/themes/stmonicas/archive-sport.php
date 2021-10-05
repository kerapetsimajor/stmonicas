<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package stmonicas
 */

get_header();
  pageBanner(array(
		'title' => 'All Events',
		'subtitle' => 'See what is going on in our world.'
	));
?>

  <section class="event-section">
    <div class="container sports-bulletins grid grid--2-cols">
      <?php get_template_part( 'template-parts/content', 'sport' ); ?>
    </div>
  </section>

<?php
get_footer();
