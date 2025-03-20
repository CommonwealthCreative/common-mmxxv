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
 	
	<div data-w-id="af27d7af-148b-9945-4fb0-63761d263b9a" style="opacity:0" class="_1300">
  <div id="w-node-_2599bb22-7a1b-6a83-8ec2-59e174badc26-e7795935" class="w-layout-layout commonstack wf-layout-layout">
        <div class="w-layout-cell">
          <div data-w-id="2599bb22-7a1b-6a83-8ec2-59e174badc28" style="opacity:0" class="">
          <div class="contactlogo" >
                    <a href="/" aria-current="page" class="brand w-nav-brand w--current" style="margin-bottom:40px;"></a>
                </div>
                
                <h1 data-w-id="34239f0a-c1ca-2acf-c782-767626233dfb" style="opacity:0">
                    Want to work together?</h1>
                <p class="">
                    We cannot wait to hear from you! Fill out this form or send us an email at <a href="mailto:hi@thecommonwealthcreative.com" class="textwhite underline">hi@thecommonwealthcreative.com</a> to set up an introductory call.
                </p>
                <div style="margin-bottom:40px; margin-top:40px;"><hr></div>
                <h1 data-w-id="34239f0a-c1ca-2acf-c782-767626233dfb" style="opacity:0">
                Ready to learn more?</h1>
                <p>You can <a href="#" data-cal-link="hello.mattsmall/introduction-with-matt-small-commonwealth-creative" data-cal-namespace="" data-cal-config='{"layout":"month_view"}' target="_blank" class="textwhite underline">schedule an introduction</a> with our founder or use the links below.</p>
                <a href="/about-commonwealth-creative" class="pills bgdark textwhite"> About Our Studio</a>
      <a href="/shop" class="pills bgdark textwhite">Shop Our Collection</a>
      <a href="/the-codex" class="pills bgdark textwhite">Read From The Codex</a><a href="/strategies-methods" class="pills bgdark textwhite">Services We Offer</a>
          </div>
        </div>
        <div class="w-layout-cell">
          <div data-w-id="d58e2865-e975-e494-7590-64cc7dbe37bc" style="opacity:0" class="commoncard bgdark contactcard">
          <div data-w-id="d58e2865-e975-e494-7590-64cc7dbe37fb" class="iconlink textwhite w-inline-block">
                <div class="actionpulse"></div>
                <div class="fa"></div>
                <div class="icontext mid commonsans">Let's connect.</div>
</div>
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
      </div>
    </div>
</div>

</section>

  </article><!-- #post-<?php the_ID(); ?> -->




