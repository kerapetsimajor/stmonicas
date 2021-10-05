<?php
  
  get_header();
  pageBanner();

  while(have_posts()) {
    the_post();
     ?>

    <div class="container--narrow breadcrum">
      <div class="metabox page-section metabox--position-up metabox--with-home-link">
        <p class="matabox-p">
          <a class="btn btn--full" href="<?php echo get_post_type_archive_link('event'); ?>">
            <ion-icon name="home"></ion-icon> Back to Events</a>
            <span class="btn btn--outline interior-nav"><?php the_title(); ?></span>
        </p>
      </div>
    </div>

    <article class="page-section">
      <div class="container"><?php the_content(); ?></div>
      </div>
    </article>

  <?php }

  get_footer();

?>