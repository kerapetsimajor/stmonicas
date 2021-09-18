<?php get_header(); ?>
<div class="page-banner">
        <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/img/ocean.jpg'); ?>);"></div>
        <div class="page-banner__content container container--narrow">
          <h1 class="heading-primary page-banner__title">Welcome To Our News Page</h1>
          <div class="body-text page-banner__intro">
            <p class="body-text">Stay informed and entertained..</p>
          </div>
        </div>
      </div>
  <?php
    while(have_posts()) {
      the_post(); ?>
        <article class="page-section container container--narrow">
        <div class="news-section">
          <div class="post-item">
            <h2 class="heading-secondary blog-heading"><a class="blog-post--title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          </div>
          <div class="metabox metabox-blog--item">
            <p>Posted by <a class="lm lm-link" href="#">Damian</a> on 9.23.20 in <a class="lm lm-link" href="<?php the_permalink(); ?>"><?php echo get_the_category_list(', '); ?></a></p>
          </div>
          <div class="blog-content">
            <p class="body-text blog-content__text"><?php the_excerpt(); ?></p>
            <p><a class="btn btn--full blog-rm" href="<?php the_permalink(); ?>">Continue reading >></a></p>
          </div>
          <!-- <hr class="section-break"> -->
        </div>
      </article>
      <?php  }
        echo paginate_links(); ?>
  <?php get_footer( ); ?>