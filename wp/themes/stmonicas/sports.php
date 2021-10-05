<ul class="post-cards grid grid--3-cols">
          <?php
            global $wpdb;

            $args = array(
              'post_type' => 'sport',
              'post_status' => 'publish',
              'posts_per_page' => '4',
              );

            $cus_loop = new WP_Query( $args );
              if ( $cus_loop->have_posts() ) :
                  while ( $cus_loop->have_posts() ) : $cus_loop->the_post();

            $id=get_the_ID();
            $featured_image = wp_get_attachment_image_src( 
              get_post_thumbnail_id(), array( 
              630, 370
            ));
            $pro_image = $featured_image['thumbnail'];
            $title=get_the_title();
            $time_value = get_field( 'time_period', $id );
            $dec=get_the_excerpt();
            $do_not_duplicate[] = $id;
          ?>
          <li class="cards_item el--1">
            <div class="featured-card">
              <div class="featured-card_image">
                <img src="<?php echo $pro_image; ?>" />
              </div>
              <div class="featured_content">
                <h2 class="heading-secondary card_featured-title"><?php echo $title; ?></h2>
                <p class="body-text card_text">
                  <?php 
                    if(has_excerpt()) {
                      echo $dec=get_the_excerpt();
                    } else {
                      echo wp_trim_words(get_the_content(), 25);
                    } wp_reset_postdata();
                  ?>
                    <a href="<?php echo get_the_permalink(); ?>" class="lm lm-link">Read More</a>
                </p>
              </div>
            </div>
          </li>

          <li class="cards_item el--2">
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
                      echo wp_trim_words(get_the_content(), 25);
                    } wp_reset_postdata();
                  ?>
                    <a href="<?php echo get_the_permalink(); ?>" class="lm lm-link">Read More</a>
                </p>
              </div>
            </div>
          </li>

          <li class="cards_item el--3">
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
                      echo wp_trim_words(get_the_content(), 25);
                    } wp_reset_postdata();
                    ?>
                      <a href="<?php echo get_the_permalink(); ?>" class="lm lm-link">Read More</a>
                </p>
              </div>
            </div>
          </li>

          <li class="cards_item el--4">
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
                      echo wp_trim_words(get_the_content(), 25);
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

          <li class="cards_item el--2">
            <?php 
              global $wpdb;
                $args = array(
                  'post_type' => 'sport',
                  'post_status' => 'publish',
                  'posts_per_page' => '1',
                );

                $cus_loop = new WP_Query( $args );
                  if ( $cus_loop->have_posts() ) :
                  while ( $cus_loop->have_posts() ) : $cus_loop->the_post();

                $id=get_the_ID();
                $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id(),array( 
                  630, 370 
                ));
                $pro_image = $featured_image[0];
                $title=get_the_title();
                $time_value = get_field( 'time_period', $id );
                $dec=get_the_excerpt();
                $do_not_duplicate[] = $id;
            ?>
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
                      echo wp_trim_words(get_the_content(), 25);
                    } wp_reset_postdata();
                  ?>
                    <a href="<?php echo get_the_permalink(); ?>" class="lm lm-link">Read More</a>
                </p>
              </div>
            </div>
            <?php 
              endwhile;
              endif;
              wp_reset_postdata();
            ?>
          </li>

          <li class="cards_item el--3">
            <?php 
              global $wpdb;
                $args = array(
                  'post_type' => 'sport',
                  'post_status' => 'publish',
                  'posts_per_page' => '1',
                );

                $cus_loop = new WP_Query( $args );
                  if ( $cus_loop->have_posts() ) :
                  while ( $cus_loop->have_posts() ) : $cus_loop->the_post();

                $id=get_the_ID();
                $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id(),array( 
                  630, 370 
                ));
                $pro_image = $featured_image[0];
                $title=get_the_title();
                $time_value = get_field( 'time_period', $id );
                $dec=get_the_excerpt();
                $do_not_duplicate[] = $id;
            ?>
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
                      echo wp_trim_words(get_the_content(), 25);
                    } wp_reset_postdata();
                    ?>
                      <a href="<?php echo get_the_permalink(); ?>" class="lm lm-link">Read More</a>
                </p>
              </div>
            </div>
            <?php 
              endwhile;
              endif;
              wp_reset_postdata();
            ?>
          </li>

          <li class="cards_item el--4">
            <?php 
              global $wpdb;
                $args = array(
                  'post_type' => 'sport',
                  'post_status' => 'publish',
                  'posts_per_page' => '1',
                );

                $cus_loop = new WP_Query( $args );
                  if ( $cus_loop->have_posts() ) :
                  while ( $cus_loop->have_posts() ) : $cus_loop->the_post();

                $id=get_the_ID();
                $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id(),array( 
                  630, 370 
                ));
                $pro_image = $featured_image[0];
                $title=get_the_title();
                $time_value = get_field( 'time_period', $id );
                $dec=get_the_excerpt();
                $do_not_duplicate[] = $id;
            ?>
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
                      echo wp_trim_words(get_the_content(), 25);
                    } wp_reset_postdata();
                  ?>
                    <a href="<?php echo get_the_permalink(); ?>" class="lm lm-link">Read More</a>
                </p>
              </div>
            </div>
            <?php 
              endwhile;
              endif;
              wp_reset_postdata();
            ?>
          </li>

          <li class="cards_item el--1">
            <?php
              global $wpdb;
                $args = array(
                  'post_type' => 'sport',
                  'post_status' => 'publish',
                  'posts_per_page' => '1',
                );

                $cus_loop = new WP_Query( $args );
                  if ( $cus_loop->have_posts() ) :
                  while ( $cus_loop->have_posts() ) : $cus_loop->the_post();

                $id=get_the_ID();
                $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id(),array( 
                  630, 370 
                ));
                $pro_image = $featured_image[0];
                $title=get_the_title();
                $time_value = get_field( 'time_period', $id );
                $dec=get_the_excerpt();
                $do_not_duplicate[] = $id;
              ?>
            <div class="featured-card">
              <div class="featured-card_image">
                <img src="<?php echo $pro_image; ?>" />
              </div>
              <div class="featured_content">
                <h2 class="heading-secondary card_featured-title"><?php echo $title; ?></h2>
                <p class="body-text card_text">
                  <?php 
                    if(has_excerpt()) {
                      echo $dec=get_the_excerpt();
                    } else {
                      echo wp_trim_words(get_the_content(), 25);
                    } wp_reset_postdata();
                  ?>
                    <a href="<?php echo get_the_permalink(); ?>" class="lm lm-link">Read More</a>
                </p>
              </div>
            </div>
            <?php 
              endwhile;
              endif;
              wp_reset_postdata();
            ?>
          </li>
        </ul>