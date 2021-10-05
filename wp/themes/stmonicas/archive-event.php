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

    <!-- <section class="event-column"> -->
		<section class="container container--narrow page-section">
			<div class="event-column">

			<?php if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) :
					the_post();
					/*
					* Include the Post-Type-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Type name) and that will be used instead.
					*/
					get_template_part( 'template-parts/content', get_post_type( ) );

				endwhile;

				the_posts_navigation();

				endif;
				?>

				<hr class="section-break">

				<p class="body-text">Looking for a recap of past events? <a class="lm lm-link" href="<?php echo site_url('/past-events') ?>">Check out our past events archive</a>.</p>

			</div>
	</section>
	<!-- </section> -->

<?php
// get_sidebar();
get_footer();