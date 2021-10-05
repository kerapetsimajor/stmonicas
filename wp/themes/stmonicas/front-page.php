<?php get_header( ); ?>
  <div class="carousel">
    <ul class="slides">
      <input type="radio" name="radio-buttons" id="img-1" checked />
      <li class="slide-container">
        <div style="background-image: url(<?php echo get_theme_file_uri('img/hero-bg/1.jpg'); ?>"); class="slide-image img__1">
          <div class="hero_content">
            <h2 class="heading-secondary hero-heading">Welcome!</h2>
            <h1 class="heading-primary hero-title">St Monica's Diocesan School</h1>
            <h4 class="subheading hero-p">We think your child will like it here.</h4>
            <div class="hero-cta__btn">
              <a href="#" class="btn btn--full">Educate your child</a>
            </div>
          </div>
        </div>
        <div class="carousel-controls">
          <label for="img-3" class="prev-slide">
            <span><ion-icon class="list-icon hero_icons" name="chevron-back-circle"></ion-icon></span>
          </label>
          <label for="img-2" class="next-slide">
            <span><ion-icon class="list-icon hero_icons" name="chevron-forward-circle"></ion-icon></span>
          </label>
        </div>
      </li>

      <input type="radio" name="radio-buttons" id="img-2"/>
      <li class="slide-container">
        <div style="background-image: url(<?php echo get_theme_file_uri('/img/hero-bg/2.jpg'); ?>);" class="slide-image img__2">
          <div class="hero_content">
            <h2 class="heading-secondary hero-heading">Welcome 2!</h2>
            <h1 class="heading-primary hero-title">St Monica's Diocesan School</h1>
            <p class="body-text hero-p">We think your child will like it here.</p>
            <div class="hero-cta__btn">
              <a href="#" class="btn btn--full">Educate your child</a>
            </div>
          </div>
        </div>
        <div class="carousel-controls">
          <label for="img-1" class="prev-slide">
            <span><span><ion-icon class="list-icon hero_icons" name="chevron-back-circle"></ion-icon></span>
          </label>
          <label for="img-3" class="next-slide">
            <span><ion-icon class="list-icon hero_icons" name="chevron-forward-circle"></ion-icon></span>
          </label>
        </div>
      </li>

      <input type="radio" name="radio-buttons" id="img-3"/>
      <li class="slide-container">
        <div style="background-image: url(<?php echo get_theme_file_uri('/img/hero-bg/3.jpg'); ?>);" class="slide-image img__3">
          <div class="hero_content">
            <h2 class="heading-secondary hero-heading">Welcome 3!</h2>
            <h1 class="heading-primary hero-title">St Monica's Diocesan School</h1>
            <p class="body-text hero-p">We think your child will like it here.</p>
            <div class="hero-cta__btn">
              <a href="#" class="btn btn--full">Educate your child</a>
            </div>
          </div>
        </div>
        <div class="carousel-controls">
          <label for="img-2" class="prev-slide">
            <span><ion-icon class="list-icon hero_icons" name="chevron-back-circle"></ion-icon></span>
          </label>
          <label for="img-1" class="next-slide">
            <span><span><ion-icon class="list-icon hero_icons" name="chevron-forward-circle"></ion-icon></span>
          </label>
        </div>
      </li>
      <div class="carousel-dots">
        <label for="img-1" class="carousel-dot" id="img-dot-1"></label>
        <label for="img-2" class="carousel-dot" id="img-dot-2"></label>
        <label for="img-3" class="carousel-dot" id="img-dot-3"></label>
      </div>
    </ul>
  </div>

  <section class="school-life">
    <div class="container">
      <div class="school-life__column grid grid--4-cols">
        <div class="featured-items">
          <ion-icon class="list-icon feature-icon" name="bus-outline">
          </ion-icon>
          <div class="featured-content">
            <p class="featured--heading">School Life</p>
            <p class="featured--text">
                Getting to know us!
            </p>
          </div>
        </div>
  
        <div class="featured-items">
          <ion-icon class="list-icon feature-icon" name="school-outline"></ion-icon>
          <div class="featured-content">
            <p class="featured--heading">Graduation</p>
            <p class="featured--text">
              Excellence!
            </p>
          </div>
        </div>
  
        <div class="featured-items">
          <ion-icon class="list-icon feature-icon" name="bicycle-outline"></ion-icon>
          <div class="featured-content">
            <p class="featured--heading">Athletics</p>
            <p class="featured--text">
                  Sports Club
            </p>
          </div>
        </div>
  
        <div class="featured-items">
          <ion-icon class="list-icon feature-icon" name="fitness-outline"></ion-icon>
          <div class="featured-content">
            <p class="featured--heading">Social Life</p>
            <p class="featured--text">
              Stay up to date
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <article class="events-section">
        
    <div class="grid grid--2-cols events-children">
      <div class="events-news events-first">
        <div class="full-width-list events-content">
          <h2 class="heading-secondary">Upcoming Events</h2>


          <?php
            $today = date('Ymd'); 
            $homepageEvents = new WP_Query( array(
              'posts_per_page' => 2,
              'post_type' => 'event',
              'meta_key' => 'event_date',
              'orderby' => 'meta_value_num',
              'order' => 'ASC',
              'meta_query' => array(
                array(
                  'key' => 'event_date',
                  'compare' => '>=',
                  'value' => $today,
                  'type' => 'numeric'
                )
              )
            ));       
            while($homepageEvents->have_posts()) {
              $homepageEvents->the_post(); ?>
                <div class="event-summary">
                  <a href="<?php the_permalink(); ?>" class="event-summary__date">
                    <span class="event-summary__month">
                      <?php
                        $eventDate = new DateTime( get_field('event_date'));
                        echo $eventDate->format('M');
                      ?>
                    </span>
                    <span class="event-summary__day"><?php echo $eventDate->format('d'); ?></span>
                  </a>
                  <div class="event-summary__content">
                    <h5 class="event-summary__post-title">
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h5>
                    <p class="event-summary__post-text">
                      <?php 
                        if(has_excerpt()) {
                          echo get_the_excerpt();
                        } else {
                          echo wp_trim_words(get_the_content(), 18);
                        } wp_reset_postdata();
                    ?>
                      <a href="<?php the_permalink(); ?>" class="lm gray">Learn More</a>
                    </p>
                  </div>
                </div>
            <?php }
          ?>
          <p class="t-center no-margin">
            <a class="btn btn--full" href="<?php echo get_post_type_archive_link('event') ?>">View All Events</a>
          </p>
        </div>
      </div>
  
      <div class="events-news events-last">
        <div class="full-width-list events-content">
          <h2 class="heading-secondary">From Our News</h2>
  
          <?php 
            $homepagePosts = new WP_Query( array(
              'post_per_page' => 2,
            ));

            while ($homepagePosts->have_posts()) {
              $homepagePosts->the_post(); ?>

              <div class="event-summary">
                <a href="<?php the_permalink( ); ?>" class="event-summary__date">
                  <span class="event-summary__month"><?php the_time( 'M' ); ?></span>
                  <span class="event-summary__day"><?php the_time( 'd' ); ?></span>
                </a>
                <div class="event-summary__content">
                  <h5 class="event-summary__post-title">
                    <a href="<?php the_permalink( ); ?>"><?php the_title( ); ?></a>
                  </h5>
                  <p class="event-summary__post-text"> 
                    <?php 
                      if(has_excerpt( )) {
                          echo get_the_excerpt();
                        } else {
                          echo wp_trim_words( get_the_content( ), 18);
                      } wp_reset_postdata();
                    ?>
                    <a href="<?php the_permalink( ); ?>" class="lm gray">Learn More</a>
                  </p>
                </div>
              </div>
            <?php }
          ?>
          <p class="t-center no-margin">
            <a class="btn btn--full" href="<?php echo site_url( 'news' ); ?>">Read All News</a>
          </p>
        </div>
      </div>
    </div>
  </article>

  <section class="principal-section">
    <div class="container">
      <h2 class="heading-secondary principal-title">
        Message from the HeadMaster
      </h2>

      <div class="principal-column">
          <img
            src="<?php echo get_theme_file_uri('img/stmoncas-princial.jpg'); ?>"
            class="principal-photo"
            alt="St Monicas Principal Photo"
          />

        <div class="principal-content">
          <h3 class="heading-tertiary principal-subheading">
            St. Monica's Preparation for the Matrics 2021
          </h3>
          <p class="body-text">
          It is a matter of great pleasure and honour to welcome the new principal of St. Monica’s Diocesan School, Mrs Princess Myburg. Mrs Myburg is no stranger  to the institution. She was appointed as an EMS, Accounting, Economics and Business Studies teacher in 2008.<br><br> She became the HOD of the Senior phase  in 2010 and was appointed Deputy Principal of the Primary School in 2013. In 2014 she took up the position of Deputy Principal of the College. Mrs Myburg  was also principal of Mariazell High School from 2018 to 2020. <br><br>On behalf of the entire administration, faculty, and students we welcome you to our institution.We hope that with your energy, enthusiasm and focus on education and learning our school will achieve greater excellence.Thank you so much for joining us and we wish you the best of luck.<a href="about-us.html" class="lm gray">Read More</a>
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="gallery-section">
    <div class="container">
      <div class="gallery-wrapper">
        <ul class="gallery-items">
              
          <li class="item">
            <h4 class="gallery-heading">Academics</h4>
            <img src="<?php echo get_theme_file_uri('img/sports/1.jpg'); ?>" width="175px" />
          </li>
      
          <li class="item">
            <h4 class="gallery-heading">Sports</h4>
            <img src="<?php echo get_theme_file_uri('img/sports/2.jpg'); ?>" width="175px" />
          </li>
      
          <li class="item">
            <h4 class="gallery-heading">Development</h4>
            <img src="<?php echo get_theme_file_uri('img/sports/3.jpg'); ?>" width="175px" />
          </li>
      
          <li class="item">
            <h4 class="gallery-heading">Events</h4>
            <img src="<?php echo get_theme_file_uri('img/sports/4.jpg'); ?>" width="175px" />
          </li>
      
          <li class="item">
            <h4 class="gallery-heading">Others</h4>
            <img src="<?php echo get_theme_file_uri('img/sports/5.jpg'); ?>" width="175px" />
          </li>
      
          <li class="item">
            <h4 class="gallery-heading">Teachers</h4>
            <img src="<?php echo get_theme_file_uri('img/sports/6.jpg'); ?>" width="175px" />
          </li>
        </ul>

      </div>
    </div>
  </section>

  <article class="sports-section">
    <div class="container">
      <h2 class="heading-secondary">Sports And Athletics</h2>
      <div class="sports-updates">
        <?php get_template_part( 'template-parts/content', 'sport' ); ?>
      </div>
    </div>
  </article>

  <section class="school-results__section">
    <div class="containers">
      <h2 class="heading-secondary school-results__heading">
            2020 Results
      </h2>
      <div class="school-results grid grid--4-cols">
        <div class="grade-results gr--r">
          <h4 class="grade-heading heading--tiny">Grade R</h4>
          <p class="grade-text"><strong>97%</strong></p>
        </div>
        <div class="grade-results gr--1">
          <h4 class="grade-heading heading--tiny">Grade 01</h4>
            <p class="grade-text"><strong>94%</strong></p>
        </div>
        <div class="grade-results gr--2">
          <h4 class="grade-heading heading--tiny">Grade 02</h4>
          <p class="grade-text"><strong>96%</strong></p>
        </div>
        <div class="grade-results gr--3">
          <h4 class="grade-heading heading--tiny">Grade 03</h4>
            <p class="grade-text"><strong>97%</strong></p>
        </div>
        <div class="grade-results gr--4">
          <h4 class="grade-heading heading--tiny">Grade 04</h4>
          <p class="grade-text"><strong>98%</strong></p>
        </div>
        <div class="grade-results gr--5">
          <h4 class="grade-heading heading--tiny">Grade 05</h4>
          <p class="grade-text"><strong>98%</strong></p>
        </div>
        <div class="grade-results gr--6">
          <h4 class="grade-heading heading--tiny">Grade 06</h4>
          <p class="grade-text"><strong>97%</strong></p>
        </div>
        <div class="grade-results gr--7">
          <h4 class="grade-heading heading--tiny">Grade 07</h4>
          <p class="grade-text"><strong>92%</strong></p>
        </div>
        <div class="grade-results gr--8">
          <h4 class="grade-heading heading--tiny">Grade 08</h4>
          <p class="grade-text"><strong>86%</strong></p>
        </div>
        <div class="grade-results gr--9">
          <h4 class="grade-heading heading--tiny">Grade 09</h4>
          <p class="grade-text"><strong>95%</strong></p>
        </div>
        <div class="grade-results gr--10">
          <h4 class="grade-heading heading--tiny">Grade 10</h4>
          <p class="grade-text"><strong>89%</strong></p>
        </div>
        <div class="grade-results gr--11">
          <h4 class="grade-heading heading--tiny">Grade 11</h4>
          <p class="grade-text"><strong>94%</strong></p>
        </div>
        <div class="grade-results gr--12">
          <h4 class="grade-12__heading heading--tiny">Grade 12</h4>
          <p class="grade-12__text"><strong>99%</strong></p>
        </div>
      </div>
    </div>
  </section>
<?php get_footer( ); ?>