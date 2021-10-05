<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stmonicas
 */

?>

<footer>
  <div class="main-footer__bg footer-top">
    <div class="container main-footer grid grid--4-cols">
            
      <div class="footer-info">

        <h4 class="subheading footer-subheading">About Us</h4>
        <a href="index.html"><img src="<?php echo get_theme_file_uri('img/school logo.jpg') ?>" width="75px" alt="" class="footer-logo"></a>
              
        <div class="footer-location">
          <ion-icon class="footer-icons" name="location-outline"></ion-icon>
          <div class="footer-about">
            <p class="body-text footer-text">44 Station st <br>Matatiele, 4730</p>
          </div>
        </div>

        <div class="footer-location">
          <ion-icon class="footer-icons" name="call-outline"></ion-icon>
          <div class="footer-about">
            <p class="body-text footer-text"><a class="top-contact-list" href="tel:27397374053"> +27 39 737 4053</a></p>
          </div>
        </div>

        <div class="footer-location">
          <ion-icon class="footer-icons" name="mail-outline"></ion-icon>
          <div class="footer-about">
            <p class="body-text footer-text"><a class="top-contact-list" href="mailto:info@stmonicas.za net">info@stmonicas.za.net</a></p>
          </div>
        </div>
      </div>
            
      <div class="our-school-list">
        <h4 class="subheading footer-subheading">Our School</h4>
        <ul class="footer-nav-list">
          <li><a class="footer-nav-link" href="#">Academics</a></li>
          <li><a class="footer-nav-link" href="#">Admission</a></li>
          <li><a class="footer-nav-link" href="#">School Fees</a></li>
          <li><a class="footer-nav-link" href="#">Grades</a></li>
        </ul>
      </div>
            
      <div class="quick-list">
        <h4 class="subheading footer-subheading">Quick Links</h4>
        <ul class="footer-nav-list">
          <li><a class="footer-nav-link" href="#">Application Forms</a></li>
          <li><a class="footer-nav-link" href="vacancies.html">Vacancies</a></li>
          <li><a class="footer-nav-link" href="#">Calender</a></li>
          <li><a class="footer-nav-link" href="#">YearBook</a></li>
        </ul>
      </div>
            
      <div class="events-list">
        <h4 class="subheading footer-subheading">Events</h4>
        <ul class="footer-nav-list">
          <li><a class="footer-nav-link" href="#">Information Tech</a></li>
          <li><a class="footer-nav-link" href="#">Open Day</a></li>
          <li><a class="footer-nav-link" href="#">Academics</a></li>
          <li><a class="footer-nav-link" href="#">Sports</a></li>
          <li><a class="footer-nav-link" href="#">Athletics</a></li>
        </ul>
      </div>
          
    </div>
  </div>
        
  <div class="bottom-footer__bg footer-bottom">
    <div class="container bottom-footer">
      <p class="body-text">2021 &copy; Copyrights All Rights Reserved.</p>
      <p class="body-text">Created by <a href="#">WordPress Media</a></p>
    </div>
  </div>
      
</footer>

<?php wp_footer(); ?>

</body>
</html>
