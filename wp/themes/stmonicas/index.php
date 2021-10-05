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
 * @package stmonicas
 */

	get_header(); 
  pageBanner(array(
		'title' => 'News & Blog',
		'subtitle' => 'Stay upto date with our news and blog....'
	));

?>
        
    <article class="page-section container container--narrow">

    <?php
      while(have_posts()) {
      the_post(); ?>
      
      <div class="news-section">
        <div class="post-item">
          <h2 class="heading-secondary blog-heading">
            <a class="blog-post--title" href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </h2>
        </div>
        
        <div class="metabox metabox-blog--item">
          <p>Posted by 
            <a class="lm lm-link" href="#"><?php the_author(); ?></a> on <?php the_time( 'd.m.Y' ); ?> in 
            <a class="lm lm-link" href="<?php the_permalink(); ?>">
              <?php echo get_the_category_list(', '); ?>
            </a>
          </p>
        </div>

        <div class="blog-content">
          <p class="body-text blog-content__text">
            <?php 
              if(has_excerpt()) {
                echo get_the_excerpt();
              } else {
                echo wp_trim_words(get_the_content(), 45);
              } wp_reset_postdata();
            ?>
          </p>
          <p>
            <a class="btn btn--full blog-rm" href="<?php the_permalink(); ?>">
              Continue reading >>
            </a>
          </p>
        </div>
        
      </div>
      <hr class="section-break">
      <?php  }
      echo paginate_links(); ?>
  </article>
  
<?php 
  get_footer( ); ?>
