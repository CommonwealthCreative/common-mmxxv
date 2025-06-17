<?php
/**
 * Template Name: Shop
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

get_header();
?>
<section data-w-id="_10cbc55e-5ca5-0185-04f3-c5246728be3b" class="section-common bgdark">
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
		<h1 class="entry-title">Memberships &amp; Curated Products</h1>
        <div class="scripts withlove">made with <span class="fa middle textcommon"></span> in the commonwealth of virginia</div>
        <p class="">Our collection showcases services and essential items chosen for their quality, impact, and alignment with our values.</p>
      </div>

      </header><!-- .entry-header -->
      		<?php get_template_part('template-parts/memberships'); ?>
      
    </div>
</section>
<section data-w-id="698beae1-7624-3887-86ac-e49d3a30dc5b" style="opacity:0" class="_1300 section-common">
      <div class="scripts">The Collection</div>
      <a href="#" data-cal-link="hello.mattsmall/introduction-with-matt-small-commonwealth-creative" data-cal-namespace="" data-cal-config='{"layout":"month_view"}' class="pills bgdark">Have Questions?</a>
      <div class="woocommerce-notices-wrapper">
        <?php woocommerce_output_all_notices(); ?>
    </div>
<div id="w-node-_5f2da74e-e9e6-1146-94a1-a3e9269e2bb1-e7795935" class="w-layout-layout commonstack wf-layout-layout productloop">

<?php
if ( wc_get_loop_prop('total') ) {
    while ( have_posts() ) {
        the_post();

        /**
         * Hook: woocommerce_shop_loop.
         */
        do_action('woocommerce_shop_loop');

        wc_get_template_part('content', 'product');
    }
}
?>

</div>
</section>
<?php
/*get_sidebar();*/
get_footer();
