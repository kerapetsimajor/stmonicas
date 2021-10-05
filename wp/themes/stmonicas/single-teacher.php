<?php
  
  get_header();

  while(have_posts()) {
    the_post();
    pageBanner();
    ?>
    <article class="page-section">
        <div class="container">
          <div class="teacher-content">
            <div class="body-text teacher-page_img">
            <?php the_post_thumbnail('teacherPortrait'); ?>
            </div>
            <div class="teacher_single-content">
              <?php echo get_the_content( ); ?>
            </div>
          </div>
        </div>
    </article>
  <?php }

get_footer();

?>