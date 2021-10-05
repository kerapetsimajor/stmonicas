 <?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package stmonicas
 */

get_header();

  while(have_posts()) {
    the_post(); 
		pageBanner();

    $theParent =wp_get_post_parent_id( get_the_ID());

    if($theParent) { ?>
      <div class="container--narrow breadcrum">
        <div class="metabox page-section metabox--position-up metabox--with-home-link">
          <p class="matabox-p">
            <a class="btn btn--full" href="<?php echo get_the_permalink($theParent); ?>"
              ><ion-icon name="home"></ion-icon> <?php echo get_the_title($theParent); ?></a>
            <span class="btn btn--outline interior-nav"><?php the_title(); ?></span>
          </p>
        </div>
      </div>
  	<?php }
  ?>

  <article class="page-section">
    <div class="container">
		<div class="interior-content grid grid--4-cols">
        <div class="body-text interior-pages__text">
          <?php the_content(); ?>
        </div>

				<?php 
    		$testArray = get_pages(array(
      		'child_of' => get_the_ID()
    		));

    		if ($theParent or $testArray) { ?>
				<aside class="aside-links">
          <div class="page-links">
      			<h2 class="page-links__title">
							<a href="<?php echo get_permalink($theParent); ?>">
								<?php echo get_the_title($theParent); ?>
							</a>
						</h2>
      			<ul class="min-list">
        			<?php
          		if ($theParent) {
            		$findChildrenOf = $theParent;
          		} else {
           			$findChildrenOf = get_the_ID();
          		}

          		wp_list_pages(array(
            		'title_li' => NULL,
            		'child_of' => $findChildrenOf,
            		'sort_column' => 'menu_order'
          		));
        			?>

      			</ul>
    			</div>
    			<?php } 
					?>
        </aside>
      </div>
		</div>
  </article>
<?php } 
	get_footer(); 
?>
