<?php
/**
 * stmonicas functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package stmonicas
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'stmonicas_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function stmonicas_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on stmonicas, use a find and replace
		 * to change 'stmonicas' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'stmonicas', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		add_image_size('pageBanner', 1500, 350, true);
		add_image_size('sportImg', 220, 150, true);
		add_image_size('galleryImg', 140, 140, true);
		add_image_size('teacherLandscape', 400, 260, true);
  	add_image_size('teacherPortrait', 320, 433, true);

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'stmonicas' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'stmonicas_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'stmonicas_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function stmonicas_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'stmonicas_content_width', 640 );
}
add_action( 'after_setup_theme', 'stmonicas_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function stmonicas_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'stmonicas' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'stmonicas' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'stmonicas_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function stmonicas_scripts() {
	wp_enqueue_style( 'stmonicas-style', get_stylesheet_uri(), array(), time() );
	wp_enqueue_style( 'custom-google-fonts', '//fonts.googleapis.com/css2?family=Inter:wght@400;500;700');

	wp_enqueue_style( 'stmonicas-general-style', get_theme_file_uri('/css/general.css'), array(), time() );
	wp_enqueue_style( 'stmonicas-main-style', get_theme_file_uri('/css/style.css'), array('stmonicas-general-style'), time());
	wp_enqueue_style( 'stmonicas-quaries-style', get_theme_file_uri('/css/queries.css'), array('stmonicas-main-style'), _S_VERSION );

	wp_style_add_data( 'stmonicas-style', 'rtl', 'replace' );

	wp_enqueue_script('ionicons-js', '//unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js');
  wp_enqueue_script('ion_icons-js', '//unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js');

  wp_enqueue_script('main-stmonicas-js', get_theme_file_uri('/js/scripts.js'), '1.0', true);
  wp_enqueue_script('extra-stmonicas-js', get_theme_file_uri('/js/mobile-menu.js'),'1.0', false);

	// wp_enqueue_script( 'stmonicas-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'stmonicas_scripts' );

/**
 * Page Banner for Post and Pages.
 */

function pageBanner($args = NULL) {
  
  if (!$args['title']) {
    $args['title'] = get_the_title();
  }

  if (!$args['subtitle']) {
    $args['subtitle'] = get_field('page_banner_subtitle');
  }

  if (!$args['photo']) {
    if (get_field('page_banner_background_image') AND !is_archive() AND !is_home() ) {
      $args['photo'] = get_field('page_banner_background_image')['sizes']['pageBanner'];
    } else {
      $args['photo'] = get_theme_file_uri('/img/ocean.jpg');
    }
  }

  ?>
  <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo $args['photo']; ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php echo $args['title'] ?></h1>
      <div class="body-text page-banner__intro">
        <p><?php echo $args['subtitle']; ?></p>
      </div>
    </div>  
  </div>
<?php }

/**
 * Adjust Quary for Event.
 */

function stmonicas_adjust_queries($query) {
  if (!is_admin() AND is_post_type_archive('campus') AND $query->is_main_query()) {
    $query->set('posts_per_page', -1);
  }

  // if (!is_admin() AND is_post_type_archive('program') AND $query->is_main_query()) {
  //   $query->set('orderby', 'title');
  //   $query->set('order', 'ASC');
  //   $query->set('posts_per_page', -1);
  // }

if (!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()) {
  $today = date('Ymd');
  $query->set('meta_key', 'event_date');
  $query->set('orderby', 'meta_value_num');
  $query->set('order', 'ASC');
  $query->set('meta_query', array(
    array(
      'key' => 'event_date',
      'compare' => '>=',
      'value' => $today,
      'type' => 'numeric'
     )
  ));
  }
}

add_action('pre_get_posts', 'stmonicas_adjust_queries');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


