<?php
/**
 * Template Name: Common Quiz
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Commonwealth_Theme_MMXXV
 */

get_header();
?>
<style>
	.site-footer {display:none;}
	.section-common {min-height: 100vh;}
	</style>
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
 	
	<div data-w-id="af27d7af-148b-9945-4fb0-63761d263b9a" style="opacity:0" class="_1300 commoncenter">
      <h1>The Common Quiz.</h1>
      <p class="mid">Created by Commonwealth Creative, driven by rejecting bloated tech and lifeless design to craft brands that stand out, drive results, and stay future-ready.</p>
      <div data-w-id="" style="" class=" ">
            <a href="tel:8044241348" class="scripts textwhite"><span class="fa textcommon"></span> 804-424-1348</a>
            <a href="mailto:hi@thecommonwealthcreative.com" class="scripts textwhite"><span class="fa textcommon"></span> hi@thecommonwealthcreative.com</a><a href="https://www.instagram.com/hi_commonwealth/" target="_blank" class="scripts textwhite"><span class="fa textcommon">@</span> hi_commonwealth</a>
</div>
      <div class="commoncard contactcard">
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
          <div id="" class="w-layout-hflex">
              <div class="commoncard link w-inline-block">
                <img loading="lazy" src="/wp-content/themes/common-mmxxv/images/commonwealth-creative-google-analytics.png" alt="" class="">
              </div>

              <div class="commoncard link w-inline-block">
                <img loading="lazy" src="/wp-content/themes/common-mmxxv/images/commonwealth-creative-microsoft.png" alt="" class="">
              </div>

            <div class="commoncard link w-inline-block">
              <img loading="lazy" src="/wp-content/themes/common-mmxxv/images/commonwealth-creative-stafford-business.png" alt="" class="">
            </div>

            <div class="commoncard link w-inline-block">
              <img loading="lazy" src="/wp-content/themes/common-mmxxv/images/commonwealth-creative-adobe.png" alt="" class="">
            </div>


            <div class="commoncard link w-inline-block">
              <img loading="lazy" src="/wp-content/themes/common-mmxxv/images/commonwealth-creative-iaap.png" alt="" class="">
            </div>

          </div>
    </div>

</section>
	
<?php
get_footer();
