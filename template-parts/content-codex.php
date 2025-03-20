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
        <p class=""><a href="/the-codex" class="underline textwhite">The Codex</a> is a curated collection of terms, principles and concepts. Acting as a living, informational record, it serves as both a resource and a guide, detailing the processes, strategies, and expertise behind Commonwealth Creative.</p>
        <div class="search-container">
          <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
              <input 
                  type="search" 
                  class="search-input" 
                  name="s" 
                  placeholder="Search the Codex..." 
                  aria-label="Search"
              >
              <button type="submit" class="button bgwhite w-button"><span class="fa middle"></span></button>
          </form>
        </div>
      </div>

	  </header><!-- .entry-header -->
	  <div data-w-id="698beae1-7624-3887-86ac-e49d3a30dc5b" style="opacity:0" class="_1300 sectionstart">
      <div class="scripts">All Entires</div>
      <a href="#" data-cal-link="hello.mattsmall/introduction-with-matt-small-commonwealth-creative" data-cal-namespace="" data-cal-config='{"layout":"month_view"}' class="pills">Ask A Question</a>
      <div id="w-node-_5f2da74e-e9e6-1146-94a1-a3e9269e2bb1-e7795935" class="w-layout-layout commonstack wf-layout-layout">
      <?php
    // Initial Query: All posts in the "portfolio" category, ordered by _post_ranking.
    $portfolio_query = new WP_Query( array(
      'category_name'  => 'codex',
      'posts_per_page' => -1,
      'meta_key'       => '_post_ranking',
      'orderby'        => 'meta_value_num',
      'order'          => 'ASC',
    ) );

    if ( $portfolio_query->have_posts() ) : 
      while ( $portfolio_query->have_posts() ) : 
          $portfolio_query->the_post(); 
          get_template_part( 'template-parts/content', 'cards' );
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
      </div> <!-- commonstack grid -->
    </div><!-- sectionstart -->
    <?php get_template_part('template-parts/cta-codex'); ?>
    <?php get_template_part('template-parts/cta-shop'); ?>
	</section>

  </article><!-- #post-<?php the_ID(); ?> -->




