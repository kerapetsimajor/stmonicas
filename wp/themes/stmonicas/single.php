<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package stmonicas
 */

get_header();
pageBanner();
?>

<section class="container container--narrow page-section">
	<div class="grid grid--4-cols">
		<div class="single-content">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</div>

		<aside class="single-aside">
			<?php get_sidebar(); ?>
		</aside>
		</div>
	</section>

<?php
get_footer();
?>