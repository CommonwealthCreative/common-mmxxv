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
        <div class="contactlogo">
<a href="/" aria-current="page" class="brand w-nav-brand" style="margin-bottom:40px;"></a>
</div>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <div class="scripts withlove">made with <span class="fa middle textcommon"></span> in the commonwealth of virginia</div>
        <p class="">One membership. Every service. No limitations. Get immediate access to your dashboard, submit unlimited requests, and receive deliverables every 48-72 hours. </p>

	  </header><!-- .entry-header -->
	  <div data-w-id="af27d7af-148b-9945-4fb0-63761d263b9a" style="opacity:0" class="_1300 sectionstart">
  <div class="scripts">Information</div>
            <a href="tel:8044241348" class="scripts textwhite"><span class="fa textcommon"></span> 804-424-1348</a>
            <a href="mailto:hi@thecommonwealthcreative.com" class="scripts textwhite"><span class="fa textcommon"></span> hi@thecommonwealthcreative.com</a><a href="https://www.instagram.com/hi_commonwealth/" target="_blank" class="scripts textwhite"><span class="fa textcommon">@</span> hi_commonwealth</a>
  <div class="contactcard">
    <a data-w-id="d58e2865-e975-e494-7590-64cc7dbe37fb" href="https://buy.stripe.com/5kAbJu9tn2MU5c4bIS" target="_blank" class="iconlink textwhite w-inline-block">
                <div class="actionpulse" style="width: 39px; height: 39px; opacity: 0.14555; will-change: opacity;"></div>
                <div class="fa"></div>
                <div class="icontext mid commonsans">Tell us about yourself.</div>
              </a>
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
</div>
</script>
<?php get_template_part('template-parts/cta-codex'); ?>

	</section>
<?php get_template_part('template-parts/cta-shop'); ?>
  </article><!-- #post-<?php the_ID(); ?> -->




