
<ul class="post-cards grid grid--3-cols">
  <?php
    global $wpdb;
    $args = array(
      'post_type' => 'sport',
      'post_status' => 'publish',
      'posts_per_page' => '4',
      'order' => 'ASC'
    );

    $cus_loop = new WP_Query( $args );
      
    if ( $cus_loop->have_posts() ) :
      while ( $cus_loop->have_posts() ) : $cus_loop->the_post();
              
    $id=get_the_ID();
    $featured_image = wp_get_attachment_image_src( 
      get_post_thumbnail_id(), array(
       220, 150
      ));
                  
    $pro_image = $featured_image[0];
    $title=get_the_title();
    $time_value = get_field( 'time_period', $id );
    $dec=get_the_excerpt();
    $do_not_duplicate[] = $id;
  ?>

    <li class="first-cards_item">
      <div class="card">
        <div class="card_image">
          <img src="<?php echo $pro_image; ?>" />
        </div>
        <div class="card_content">
          <h3 class="heading-tertiary card_title"><?php echo $title; ?></h3>
          <p class="body-text card_text">
            <?php 
              if(has_excerpt()) {
                echo $dec=get_the_excerpt();
              } else {
                echo wp_trim_words(get_the_content(), 18);
              } wp_reset_postdata();
            ?>
              <a href="<?php echo get_the_permalink(); ?>" class="lm lm-link">Read More</a>
          </p>
        </div>
      </div>
    </li>
  <?php 
    endwhile;
    endif;
    wp_reset_postdata();
  ?>
</ul>

<ul class="post-cards grid grid--3-cols">
  <?php
    global $wpdb;
    $args = array(
      'post_type' => 'sport',
      'post_status' => 'publish',
      'posts_per_page' => '4',
      'order' => 'DESC'
    );

    $cus_loop = new WP_Query( $args );
      
    if ( $cus_loop->have_posts() ) :
      while ( $cus_loop->have_posts() ) : $cus_loop->the_post();
              
    $id=get_the_ID();
    $featured_image = wp_get_attachment_image_src( 
      get_post_thumbnail_id(), array( 
        630, 370
      ));
                  
    $pro_image = $featured_image[0];
    $title=get_the_title();
    $time_value = get_field( 'time_period', $id );
    $dec=get_the_excerpt();
    $do_not_duplicate[] = $id;
  ?>
    <li class="last-cards_item">
      <div class="card">
        <div class="card_image">
          <img src="<?php echo $pro_image; ?>" />
        </div>
        <div class="card_content">
          <h3 class="heading-tertiary card_title"><?php echo $title; ?></h3>
          <p class="body-text card_text">
            <?php 
              if(has_excerpt()) {
                echo $dec=get_the_excerpt();
              } else {
                echo wp_trim_words(get_the_content(), 18);
              } wp_reset_postdata();
            ?>
              <a href="<?php echo get_the_permalink(); ?>" class="lm lm-link">Read More</a>
          </p>
        </div>
      </div>
    </li>
  <?php 
    endwhile;
    endif;
    wp_reset_postdata();
  ?>

</ul>