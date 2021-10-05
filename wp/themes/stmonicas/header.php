<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stmonicas
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="top-nav">
      <div class="top-contact">
        <ul class="top-contact-items">
          <ul class="top-contact-lists">
            <li class="top-contact-list">
              <ion-icon name="call-outline"></ion-icon>
              <a href="tel:+27397374053">+27 39 737 4053</a>
            </li>
            <li class="top-contact-list">
              <ion-icon name="call-outline"></ion-icon>
              <a href="tel:+27397374053"> +27 39 737 4053</a>
            </li>
          </ul>
          <ul class="top-contact-lists">
            <li class="top-contact-list">
              <ion-icon name="mail-outline"></ion-icon>
              <a href="mailto:info@stmonicas.za.net"> info@stmonicas.za.net</a>
            </li>
            <li class="top-contact-list">
              <ion-icon name="call-outline"></ion-icon>
              <a href="tel:+27397374053"> +27 39 737 4053</a>
            </li>
            </li>
          </ul>
        </ul>
      </div>
      <div class="top-nav-item">
        <ul class="top-nav-items">
          <li><a href="vacancies.html" class="top-nav-list">Vacancies</a></li>
          <li><a href="applications.html" class="top-nav-list">Applications</a></li>
          <li><a href="#" class="top-nav-list">Calender</a></li>
          <li><a href="#" class="top-nav-list">YearBook</a></li>
          <li><a href="<?php echo site_url( 'policies' ); ?>" class="top-nav-list">Policies</a></li>
        </ul>
      </div>
      <ul class="top-social-items">
        <li>
          <a href="https://www.facebook.com/St-Monicas-Diocesan-School-859441067437421/" class="top-social-links"
            ><ion-icon class="list-icon header-icon" name="logo-facebook"></ion-icon
          ></a>
        </li>
        <li>
          <a href="#" class="top-social-links"
            ><ion-icon class="list-icon header-icon" name="logo-instagram"></ion-icon
          ></a>
        </li>
      </ul>
    </div>
    <header class="header">
      <a href="<?php echo site_url( '/' ); ?>">
        <img class="logo" alt="School logo" src="<?php echo get_theme_file_uri('/img/school logo.jpg'); ?>" />
			</a>

      <nav class="main-nav">
        <ul class="main-nav-list">
          <li><a class="main-nav-link" href="<?php echo site_url( '/' ); ?>">Home</a></li>
          <li><a class="main-nav-link" href="<?php echo site_url( 'about-us' ); ?>">About Us</a></li>
          <li>
            <a class="main-nav-link" href="<?php echo get_post_type_archive_link('event') ?>">Events</a>
          </li>
          <li><a class="main-nav-link" href="<?php echo get_post_type_archive_link('sport') ?>">Sports</a></li>
          <li><a class="main-nav-link" href="<?php echo site_url( 'news' ); ?>">News</a></li>
          <li><a class="main-nav-link" href="<?php echo site_url( 'contact' ); ?>">Contact Us</a></li>
          <li>
            <a class="main-nav-link nav-cta" href="applications.html">Apply</a>
          </li>
        </ul>
      </nav>

      <ul id="offCanvasNav" class="off-canvas">
        
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="<?php echo site_url( '/' ); ?>"><img src="<?php echo get_theme_file_uri('/img/school logo.jpg'); ?>" height="4.375rem" alt="" class="logo"></a>

        <hr class="section-break">

        <a href="<?php echo site_url( '/' ); ?>">Home</a>
        <a href="<?php echo site_url( 'about-us' ); ?>">About Us</a>
        <a href="<?php echo get_post_type_archive_link('event') ?>">Events</a>
        <a href="<?php echo get_post_type_archive_link('sport') ?>">Sports</a>
        <a href="<?php echo site_url( 'news' ); ?>">News</a>
        <a href="<?php echo site_url( 'contact' ); ?>">Contact Us</a>

        <hr class="section-break">

        <a href="vacancies.html">Vacancies</a>
        <a href="applications.html">Applications</a>
        <a href="#">Calender</a>
        <a href="#">YearBook</a>
        <a href="<?php echo site_url( 'policies' ); ?>">Policies</a>

        <hr class="section-break">

        <li>
          <a class="main-nav-link nav-cta nav-offcanvas" href="#">Apply</a>
        </li>

        <ul class="offcanvas-social">
          <li>
            <a href="https://www.facebook.com/St-Monicas-Diocesan-School-859441067437421/" class="offcanvas-social-links"
              ><ion-icon class="list-icon header-icon" name="logo-facebook"></ion-icon
            ></a>
          </li>
          <li>
            <a href="#" class="offcanvas-social-links"
              ><ion-icon class="list-icon header-icon" name="logo-instagram"></ion-icon
            ></a>
          </li>
        </ul>
      </ul>

      <button id="main" class="btn-mobile-nav" onclick="openNav()" >
        <ion-icon class="icon-mobile-nav" name="menu-outline"></ion-icon>
      </button>
    </header>
