<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Commonwealth_Theme_MMXXV
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="section-common bgdark">
	<div id="work" data-w-id="34239f0a-c1ca-2acf-c782-767626233dec" class="w-layout-hflex commoncarouseltext">
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
	<canvas class="header" id="interactiveCanvas"></canvas>
 	<header data-w-id="d298873b-d54b-cbb3-7c49-a5ea6850e86a" style="opacity:0" class="_1300 entry-header">
      <div class="commoncenter">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <div class="scripts withlove">made with <span class="fa middle textcommon"></span> in the commonwealth of virginia</div>
        <p class="">The Commonwealth Creative is the catalyst for your marketing or engineering team. Your timeline, our expertise—enterprise design and technology built for healthcare, higher education, and government.</p>

	  </header><!-- .entry-header -->
	  <div data-w-id="af27d7af-148b-9945-4fb0-63761d263b9a" style="opacity:0" class="_1300 sectionstart">
  <div class="scripts">Projects</div>
  <!-- Filter buttons now use data-filter and prevent default link behavior -->
  <a href="#" class="pills _478-hide filter-btn" data-filter="strategy">Strategy</a>
  <a href="#" class="pills _478-hide filter-btn" data-filter="branding">Branding</a>
  <a href="#" class="pills _478-hide filter-btn" data-filter="product">Product</a>
  
  <!-- Portfolio loop container (preserving your data-w-id on the outer container) -->
  <div id="w-node-_2b7497b0-043b-4d31-ec4c-92599b972b96-e7795935" class="w-layout-layout commonstack portfolioloop wf-layout-layout">
    <?php
    // Initial Query: All posts in the "portfolio" category, ordered by _post_ranking.
    $portfolio_query = new WP_Query( array(
      'category_name'  => 'portfolio',
      'posts_per_page' => -1,
      'meta_key'       => '_post_ranking',
      'orderby'        => 'meta_value_num',
      'order'          => 'ASC',
    ) );

    if ( $portfolio_query->have_posts() ) : 
      while ( $portfolio_query->have_posts() ) : 
          $portfolio_query->the_post(); 
          get_template_part( 'template-parts/content', 'portfolios' );
      endwhile; 
      wp_reset_postdata(); // Reset the query
    else : 
      ?>
      <div class="_1300 flexmiddle">
          <p>
              <?php echo esc_html( 'This page is currently under development. Please check back for updates. You may request portfolio examples by emailing ' ); ?>
              <a href="mailto:hi@thecommonwealthcreative.com">hi@thecommonwealthcreative.com</a>.
          </p>
      </div>
    <?php 
    endif; 
    ?>
  </div><!-- end portfolio loop container -->
</div>

<script type="text/javascript">
jQuery(document).ready(function($) {
  $('.filter-btn').on('click', function(e) {
    e.preventDefault();
    var filter = $(this).data('filter');
    var $container = $('#w-node-_2b7497b0-043b-4d31-ec4c-92599b972b96-e7795935');
    
    // Capture the container’s outer height and set it as a fixed height
    var fixedHeight = $container.outerHeight();
    $container.css({
      'height': fixedHeight + 'px',
      'overflow': 'hidden'
    });
    
    $.ajax({
      url: '<?php echo admin_url('admin-ajax.php'); ?>',
      type: 'POST',
      data: {
        action: 'filter_portfolio',
        filter: filter
      },
      beforeSend: function() {
        $container.fadeTo(200, 0.5);
      },
      success: function(response) {
        $container.html(response).fadeTo(200, 1, function() {
          // After updating the content, reinitialize the canvas drawing.
          if (typeof resizeCanvas === "function") {
            resizeCanvas();
          }
        });
      },
      error: function() {
        console.log('AJAX error occurred.');
      }
    });
  });
});
</script>
<?php get_template_part('template-parts/cta-codex'); ?>
<?php get_template_part('template-parts/cta-shop'); ?>
	</section>

  </article><!-- #post-<?php the_ID(); ?> -->




