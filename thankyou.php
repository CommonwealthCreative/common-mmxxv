
<?php
/**
 * Template Name: Thank You
 * ...
 */
get_header();
?>	
<style>
	.nav {display:none;}
	</style>


<main id="primary" class="site-main">
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
        <p class="mid">At Commonwealth Creative, we help professionals like you sharpen their message, align their visuals, and build brands with purpose—not guesswork.</p><h3>Here are two ways we can support your next step:</h3></p>
<p class="mid"><b>Schedule a 1-on-1 Introduction:</b> Let’s unpack your workbook responses and talk through how to move from insight to execution. <a class="underline textwhite" href="https://cal.com/hello.mattsmall/introduction-with-matt-small-commonwealth-creative">Schedule An Intro.</a></p>

<p class="mid"><b>Start Your Membership:</b> Get ongoing strategy, design and technology support every month—built for mission-driven businesses ready to grow with clarity. One membership. Every service. No limitations. <a class="underline textwhite" href="http://localhost:8000/memberships/">View Memberships.</a></p>

<h2 class="textcommon">Your brand deserves more than guesswork. Let’s build something meaningful, together. Here's a promo code for 15% off any purchase:</h2>
<p class="match1 underline">COMMON15</p>
	  </header><!-- .entry-header -->
	  <div data-w-id="af27d7af-148b-9945-4fb0-63761d263b9a" style="opacity:0" class="_1300">
  <div class="contactcard">
    
 </div>
</div>
<?php get_template_part('template-parts/cta-codex'); ?>

	</section>
<?php get_template_part('template-parts/cta-shop'); ?>
  </article><!-- #post-<?php the_ID(); ?> -->


	</main><!-- #main -->	

<?php
/*get_sidebar();*/
get_footer();
