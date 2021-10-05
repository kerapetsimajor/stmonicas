<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package stmonicas
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php stmonicas_post_thumbnail(); ?>
	
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="heading-primary">', '</h1>' );
		else :
			the_title( '<h2 class="heading-secondary"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="metabox metabox-blog--item">
        <p>Posted by 
          <a class="lm lm-link" href="#"><?php the_author(); ?></a> on <?php the_time( 'd.m.Y' ); ?> in 
          <a class="lm lm-link" href="<?php the_permalink(); ?>">
            <?php echo get_the_category_list(', '); ?>
          </a>
        </p>
      </div>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'stmonicas' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'stmonicas' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php stmonicas_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
