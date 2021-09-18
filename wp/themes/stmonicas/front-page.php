<?php get_header(); ?>

    <div class="carousel">
      <ul class="slides">
        <input type="radio" name="radio-buttons" id="img-1" checked />
        <li class="slide-container">
          <div class="slide-image img__1">
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
          <div class="slide-image img__2">
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
          <div class="slide-image img__3">
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
  
              <div class="event-summary">
                <a href="event.html" class="event-summary__date">
                  <span class="event-summary__month">May</span>
                  <span class="event-summary__day">12</span>
                </a>
                <div class="event-summary__content">
                  <h5 class="event-summary__post-title">
                    <a href="event.html">KZN Rugby Trials</a>
                  </h5>
                  <p class="event-summary__post-text">On the 12th of May 2021, St. Monica’s U/16 Candidate travelled to Ashton International College in Ballito. Eyona Mangumta represented St
                    <a href="event.html" class="lm gray">Learn More</a>
                  </p>
                </div>
              </div>
  
              <div class="event-summary">
                <a href="event.html" class="event-summary__date">
                  <span class="event-summary__month">Sep</span>
                  <span class="event-summary__day">04</span>
                </a>
                <div class="event-summary__content">
                  <h5 class="event-summary__post-title">
                    <a href="event.html">Grade 12 Tourism Industrial Task</a>
                  </h5>
                  <p class="event-summary__post-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus mollitia voluptas, recusandae quos sunt animi vel culpa adipisci! Ab, cum.
                    <a href="event.html" class="lm gray">Learn More</a>
                  </p>
                </div>
              </div>
              <p class="t-center no-margin">
                <a class="btn btn--full" href="events.html">View All Events</a>
              </p>
            </div>
          </div>
  
          <div class="events-news events-last">
            <div class="full-width-list events-content">
              <h2 class="heading-secondary">From Our News</h2>
  
              <div class="event-summary">
                <a href="news.html" class="event-summary__date">
                  <span class="event-summary__month">Sep</span>
                  <span class="event-summary__day">01</span>
                </a>
                <div class="event-summary__content">
                  <h5 class="event-summary__post-title">
                    <a href="news.html">Spring Day and Secretaries Day</a>
                  </h5>
                  <p class="event-summary__post-text">On Wednesday 01 September, the school celebrated spring day and learners as well as staff were happy to be rid of their winter clothing.
                    <a href="news.html" class="lm gray">Learn More</a>
                  </p>
                </div>
              </div>
  
              <div class="event-summary">
                <a href="news.html" class="event-summary__date">
                  <span class="event-summary__month">Jun</span>
                  <span class="event-summary__day">04</span>
                </a>
                <div class="event-summary__content">
                  <h5 class="event-summary__post-title">
                    <a href="news.html">Bushman's Nek Tourism Excursion</a>
                  </h5>
                  <p class="event-summary__post-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus mollitia voluptas, recusandae quos sunt animi vel culpa adipisci! Ab, cum.
                    <a href="news.html" class="lm gray">Learn More</a>
                  </p>
                </div>
              </div>
              <p class="t-center no-margin">
                <a class="btn btn--full" href="news.html">Read All News</a>
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
                src="img/stmoncas-princial.jpg"
                class="principal-photo"
                alt="iPhone app
              preferences selection screen"
              />

            <div class="principal-content">
              <h3 class="heading-tertiary principal-subheading">
                St. Monica's Preparation for the Matrics 2021
              </h3>
              <p class="body-text">
                Over the last 11 months our learners have had to overcome many challenges, some that have never faced before. Learners have lost family members and have experienced changes to their normal way of life, all whilst still being expected to perform at school. That is why it is critical that we support our learners as much as we can. <a href="about-us.html" class="lm gray">Read More</a>
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
                <img src="img/sports/1.jpg" width="175px" />
              </li>
      
              <li class="item">
                <h4 class="gallery-heading">Sports</h4>
                <img src="img/sports/2.jpg" width="175px" />
              </li>
      
              <li class="item">
                <h4 class="gallery-heading">Development</h4>
                <img src="img/sports/3.jpg" width="175px" />
              </li>
      
              <li class="item">
                <h4 class="gallery-heading">Events</h4>
                <img src="img/sports/4.jpg" width="175px" />
              </li>
      
              <li class="item">
                <h4 class="gallery-heading">Others</h4>
                <img src="img/sports/5.jpg" width="175px" />
              </li>
      
              <li class="item">
                <h4 class="gallery-heading">Teachers</h4>
                <img src="img/sports/6.jpg" width="175px" />
              </li>
            </ul>
      
            <!-- <div class="paddles">
              <button class="left-paddle paddle hidden"><ion-icon name="chevron-back-outline"></ion-icon></button>
              <button class="right-paddle paddle"><ion-icon name="chevron-forward-outline"></ion-icon></button>
            </div> -->
          </div>
        </div>
      </section>

      <article class="sports-section">
        <div class="container">
          <h2 class="heading-secondary">Sports And Athletics</h2>
          <div class="sports-updates">
            <ul class="post-cards grid grid--3-cols">

              <li class="cards_item el--1">
                <div class="featured-card">
                  <div class="featured-card_image">
                    <img src="img/sports-update/featured.jpg" />
                  </div>
                  <div class="featured_content">
                    <h2 class="heading-secondary card_featured-title">Card Grid Layout</h2>
                    <p class="body-text card_text">
                      Demo of pixel perfect pure CSS simple responsive card grid
                      layout. Lorem ipsum dolor sit amet, consectetur adipisicing
                      elit. Deleniti perspiciatis laudantium maxime, odit ad
                      suscipit itaque nulla quos tenetur consequuntur? <a href="#" class="lm lm-link">Read More</a>
                    </p>
                  </div>
                </div>
              </li>

              <li class="cards_item el--2">
                <div class="card">
                  <div class="card_image">
                    <img src="img/sports-update/3.jpg" />
                  </div>
                  <div class="card_content">
                    <h3 class="heading-tertiary card_title">Card Grid Layout</h3>
                    <p class="body-text card_text">
                      Demo of pixel perfect pure CSS simple responsive card grid
                      layout <a href="#" class="lm lm-link">Read More</a>
                    </p>
                  </div>
                </div>
              </li>

              <li class="cards_item el--3">
                <div class="card">
                  <div class="card_image">
                    <img src="img/sports-update/4.jpg" />
                  </div>
                  <div class="card_content">
                    <h3 class="heading-tertiary card_title">Card Grid Layout</h3>
                    <p class="body-text card_text">
                      Demo of pixel perfect pure CSS simple responsive card grid
                      layout <a href="#" class="lm lm-link">Read More</a>
                    </p>
                  </div>
                </div>
              </li>
    
              <li class="cards_item el--4">
                <div class="card">
                  <div class="card_image">
                    <img src="img/sports-update/1.jpg" />
                  </div>
                  <div class="card_content">
                    <h3 class="heading-tertiary card_title">Card Grid Layout</h3>
                    <p class="body-text card_text">
                      Demo of pixel perfect pure CSS simple responsive card grid
                      layout <a href="#" class="lm lm-link">Read More</a>
                    </p>
                  </div>
                </div>
              </li>
            </ul>
    
            <ul class="post-cards grid grid--2-cols">
              <li class="cards_item el--2">
                <div class="card">
                  <div class="card_image">
                    <img src="img/sports-update/1.jpg" />
                  </div>
                  <div class="card_content">
                    <h3 class="heading-tertiary card_title">Card Grid Layout</h3>
                    <p class="body-text card_text">
                      Demo of pixel perfect pure CSS simple responsive card grid
                      layout <a href="#" class="lm lm-link">Read More</a>
                    </p>
                  </div>
                </div>
              </li>
    
              <li class="cards_item el--3">
                <div class="card">
                  <div class="card_image">
                    <img src="img/sports-update/3.jpg" />
                  </div>
                  <div class="card_content">
                    <h3 class="heading-tertiary card_title">Card Grid Layout</h3>
                    <p class="body-text card_text">
                      Demo of pixel perfect pure CSS simple responsive card grid
                      layout <a href="#" class="lm lm-link">Read More</a>
                    </p>
                  </div>
                </div>
              </li>
    
              <li class="cards_item el--4">
                <div class="card">
                  <div class="card_image">
                    <img src="img/sports-update/4.jpg" />
                  </div>
                  <div class="card_content">
                    <h3 class="heading-tertiary card_title">Card Grid Layout</h3>
                    <p class="body-text card_text">
                      Demo of pixel perfect pure CSS simple responsive card grid
                      layout <a href="#" class="lm lm-link">Read More</a>
                    </p>
                  </div>
                </div>
              </li>
    
              <li class="cards_item el--1">
                <div class="featured-card">
                  <div class="featured-card_image">
                    <img src="img/sports-update/featured.jpg" />
                  </div>
                  <div class="featured_content">
                    <h2 class="heading-secondary card_featured-title">Card Grid Layout</h2>
                    <p class="body-text card_text">
                      Demo of pixel perfect pure CSS simple responsive card grid
                      layout. Lorem ipsum dolor sit amet, consectetur adipisicing
                      elit. Deleniti perspiciatis laudantium maxime, odit ad
                      suscipit itaque nulla quos tenetur consequuntur? <a href="#" class="lm lm-link">Read More</a>
                    </p>
                  </div>
                </div>
              </li>

            </ul>
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

<?php get_footer(); ?>