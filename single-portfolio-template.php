<?php
/**
 * Template Name: Portfolio Posts
 * Template Post Type: post
 *
 * Description: use this for portfolio posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _s
 */

get_header();
?>
<div id="loader-wrapper">
    <div id="loader">
        <div class="spinner"></div>
    </div>
</div>
<section class="section-common portfolio bg-image" style="background-image: url('<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ); ?>');">
    <div class="text-holder">
      <div id="work" data-w-id="985ce911-db2b-d552-bbc9-a35288d802cb" class="w-layout-hflex commoncarouseltext overlay">
        <div class="carouselcontainer">
          <div class="carouseltext">
            <div>COMMONWEALTH</div>
          </div>
          <div class="carouseltext">
            <div>CREATIVE</div>
          </div>
        </div>
        <div class="carouselcontainer">
          <div class="carouseltext">
            <div>COMMONWEALTH</div>
          </div>
          <div class="carouseltext">
            <div>CREATIVE</div>
          </div>
        </div>
      </div>
      <div class="workcontent commoncenter">
        <?php 
        $portfolio_meta = get_post_meta( get_the_ID(), '_portfolio_meta', true );
        if ( $portfolio_meta ) {
            echo '<h2 class="match1">' . esc_html( $portfolio_meta ) . '</h2>';
        }?>        
        <?php the_title( '<h1 class="scripts"><span>', '</span></h1>' ); ?>
      </div>
      <div class="w-layout-hflex _1300 sectionstart fixed _478-hide">
      <div id="breadcrumbs" class="scripts"><?php if ( function_exists('yoast_breadcrumb') ){yoast_breadcrumb( '', '' );} else {echo 'Home // ' . get_the_title();}?></div>
        <div>
        <?php 
        $categories = get_the_category();
        if ( ! empty( $categories ) ) {
            // Filter to get only child categories (those that have a parent).
            $child_categories = array_filter( $categories, function( $cat ) {
                return $cat->parent != 0;
            } );
            
            if ( ! empty( $child_categories ) ) {
                // Loop through each child category and output a link pointing to "/work".
                foreach ( $child_categories as $child_cat ) {
                    echo '<a class="scripts textwhite" href="/work"><span class="fa textcommon"></span>' . esc_html( $child_cat->name ) . '</a> ';
                }
            }
        }
        ?>
        </div>
      </div>
    </div>
  </section>
  <section class="section-common bgdark sectionstart">
  <canvas class="header" id="interactiveCanvas"></canvas>
    <div data-w-id="39932e09-8614-bbd3-03af-72ba2ea03bc1" style="opacity:0" class="_1300">
      <div data-delay="0" data-hover="false" data-w-id="581bf0a4-d0ad-7c43-3cbb-8963585d8cf2" style="height:80PX" class="faq-p w-dropdown">
        <div class="faq scripts w-dropdown-toggle">
          <div class="text-block">Project Details</div>
          <div data-is-ix2-target="1" class="faq-icon" data-w-id="581bf0a4-d0ad-7c43-3cbb-8963585d8cf6" data-animation-type="lottie" data-src="/wp-content/themes/common-mmxxv/documents/Animation---1741027139431.json" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="0" data-duration="1.5" data-ix2-initial-state="0"></div>
        </div>
        <nav class="faq-body w-dropdown-list">

          <div class="faq-body-cont portfolio-content common66w">
            <?php
					the_content();

					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'the-commonwealth-theme-mmxxv' ),
							'after'  => '</div>',
						)
					);
					?>
          </div>
        </nav>
      </div>
      <div class="portfolio-blurb">
      <?php 
          $portfolio_image = get_post_meta(get_the_ID(), '_portfolio_image', true);
          if (!empty($portfolio_image)) : 
        ?>
          <div class="portfolio-meta-image-wrapper">
            <img loading="lazy" class="portfolio-logo" src="<?php echo esc_url($portfolio_image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>"/>
          </div>
        <?php endif; ?>  
        <?php 
          $portfolio_extra_content = get_post_meta(get_the_ID(), '_portfolio_extra_content', true);
          if (!empty($portfolio_extra_content)) : 
        ?>
                <?php endif; ?>
        <div class="scripts withlove">made with <span class="fa middle textcommon"></span> in the commonwealth of virginia</div>
        <p class="mid">
    <?php echo wp_kses_post( wpautop( $portfolio_extra_content ) ); ?>
</p>

      </div>
    </div>
  </section>
  <section class="section-common portfolio-secondary">
    <div class="_1300 sectionstart stretch">
      <a href="/work" class="scripts"><span class="fa"></span> All Projects</a>
      <?php
// Get the categories for the current post.
$categories = get_the_category();
if ( ! empty( $categories ) ) {
    // We'll use the first category (adjust if needed).
    $cat_id = $categories[0]->term_id;

    // Query for all posts in this category, ordered by date (ASC).
    $args = array(
        'cat'              => $cat_id,
        'posts_per_page'   => -1,
        'orderby'          => 'date',
        'order'            => 'ASC',
        'fields'           => 'ids', // Only fetch post IDs.
    );
    $posts_in_cat = get_posts( $args );

    if ( ! empty( $posts_in_cat ) ) {
        $current_post_id = get_the_ID();
        $current_index   = array_search( $current_post_id, $posts_in_cat );

        if ( false !== $current_index ) {
            $next_index = $current_index + 1;

            // If we're at the last post, loop back to the first.
            if ( ! isset( $posts_in_cat[ $next_index ] ) ) {
                $next_post_id = $posts_in_cat[0];
            } else {
                $next_post_id = $posts_in_cat[ $next_index ];
            }

            $next_post_link = get_permalink( $next_post_id );
            echo '<a id="next" class="scripts" href="' . esc_url( $next_post_link ) . '">Next Project <span class="fa after"></span></a>';
        }
    }
}
?>

    </div>
    <?php
          // Output the Secondary Content
          $secondary_content = get_post_meta( get_the_ID(), '_secondary_content', true );

          if ( ! empty( $secondary_content ) ) {
              echo '<div class="secondary-content">';
              echo apply_filters( 'the_content', $secondary_content ); // Renders the WYSIWYG content with WordPress filters
              echo '</div>';
          }
          ?>
    <div data-w-id="af27d7af-148b-9945-4fb0-63761d263b9a" style="opacity:0" class="_1300">
      <div class="_1300 sectionstart stretch">
    <a href="/work" class="scripts"><span class="fa"></span> All Projects</a>
      <?php
// Get the categories for the current post.
$categories = get_the_category();
if ( ! empty( $categories ) ) {
    // We'll use the first category (adjust if needed).
    $cat_id = $categories[0]->term_id;

    // Query for all posts in this category, ordered by date (ASC).
    $args = array(
        'cat'              => $cat_id,
        'posts_per_page'   => -1,
        'orderby'          => 'date',
        'order'            => 'ASC',
        'fields'           => 'ids', // Only fetch post IDs.
    );
    $posts_in_cat = get_posts( $args );

    if ( ! empty( $posts_in_cat ) ) {
        $current_post_id = get_the_ID();
        $current_index   = array_search( $current_post_id, $posts_in_cat );

        if ( false !== $current_index ) {
            $next_index = $current_index + 1;

            // If we're at the last post, loop back to the first.
            if ( ! isset( $posts_in_cat[ $next_index ] ) ) {
                $next_post_id = $posts_in_cat[0];
            } else {
                $next_post_id = $posts_in_cat[ $next_index ];
            }

            $next_post_link = get_permalink( $next_post_id );
            echo '<a id="next" class="scripts" href="' . esc_url( $next_post_link ) . '">Next Project <span class="fa after"></span></a>';
        }
    }
}
?></div>
      <div id="w-node-_2b7497b0-043b-4d31-ec4c-92599b972b96-e7795935" class="w-layout-layout commonstack portfolioloop wf-layout-layout">
      <?php
// Get the current post ID
$current_post_id = get_the_ID();

// Custom Query for 3 Random Posts in Portfolio Category
$portfolio_query = new WP_Query( array(
  'category_name'  => 'portfolio',      // Slug of the category to include
  'posts_per_page' => 4,                // Number of posts to show
  'orderby'        => 'rand',           // Random order
  'post__not_in'   => array( $current_post_id ), // Exclude the current post
) );

if ( $portfolio_query->have_posts() ) : 
  while ( $portfolio_query->have_posts() ) : 
      $portfolio_query->the_post(); 
      ?>
      <?php get_template_part( 'template-parts/content', 'portfolios' ); ?>
      <?php 
  endwhile; 
  wp_reset_postdata(); // Reset the query
else : 
  ?>
  <div class="_1300">
      <p>
          <?php echo esc_html( 'This page is currently under development. Please check back for updates. You may request portfolio examples by emailing ' ); ?>
          <a href="mailto:hi@thecommonwealthcreative.com">hi@thecommonwealthcreative.com</a>.
      </p>
  </div>
<?php 
endif; 
?>  
      </div>
    </div>
    
    <?php get_template_part('template-parts/cta-shop'); ?>
</section>
<!--END -->
        <script>
document.addEventListener('DOMContentLoaded', function() {
  // Adjust the selector as needed to target the clickable element
  var faqDropdown = document.querySelector('.faq-p.w-dropdown');

  if (faqDropdown) {
    faqDropdown.addEventListener('click', function() {
      var canvas = document.getElementById('interactiveCanvas');
      if (canvas) {
        // Toggle the display style of the canvas
        if (canvas.style.display === 'none' || window.getComputedStyle(canvas).display === 'none') {
          canvas.style.display = 'block';
        } else {
          canvas.style.display = 'none';
        }
      }
    });
  }
});
</script>
<?php


/* get_sidebar(); */
get_footer();