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
                    <span class="textmedium">Are You Being Held Back by a </span>
                    <span data-w-id="34239f0a-c1ca-2acf-c782-767626233dfb" style="opacity:0">Lack of Talent?</span>
                </h1>
                <p class="mid">
                    We can change that. Tell us about yourself and what you envision next. At Commonwealth Creative, we are the catalyst for your marketing and engineering team needs—delivering measurable ROI with precision and purpose.
                </p>
          </div>
        </div>
        <div class="w-layout-cell">
          <div data-w-id="d58e2865-e975-e494-7590-64cc7dbe37bc" style="opacity:0" class="commoncard bgdark">
          <a data-w-id="d58e2865-e975-e494-7590-64cc7dbe37fb" href="https://buy.stripe.com/5kAbJu9tn2MU5c4bIS" target="_blank" class="iconlink textwhite w-inline-block">
                <div class="actionpulse"></div>
                <div class="fa"></div>
                <div class="icontext mid commonsans">Sign Up Here</div>
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
      </div>
    </div>
    <?php get_template_part('template-parts/technologies'); ?>
</div>

</section>

  </article><!-- #post-<?php the_ID(); ?> -->




