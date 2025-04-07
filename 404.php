<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package The_Commonwealth_Theme_MMXXV
 */

get_header();
?>
<style>
	.nav, .site-footer {display:none;}
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
	<img class="_404image" loading="lazy" src="/wp-content/themes/common-mmxxv/images/404.svg" alt="" class="">
      <h1>It looks like you are lost.</h1>
      <p class="mid">The page you are looking for does not exist.</p>
      <a href="/" class="button bgwhite w-button">Take Me Back Home</a>
    </div>
	
</div>

</section>
	
<?php
get_footer();
