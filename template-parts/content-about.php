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
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <div class="scripts withlove">made with <span class="fa middle textcommon"></span> in the commonwealth of virginia</div>
      </div>
      <div class="w-layout-hflex sectionstart">
        <div class="scripts">The Studio</div><a href="#" data-cal-link="hello.mattsmall/introduction-with-matt-small-commonwealth-creative" data-cal-namespace="" data-cal-config='{"layout":"month_view"}' class="pills">Introduction</a><a href="/contact" class="pills">Contact Us</a>

      </div>

	  </header><!-- .entry-header -->
    <div data-w-id="48429a23-c1b4-0afe-d7ca-65222c007cdf" style="opacity:0" class="_1300 entry-content">
	<?php the_commonwealth_theme_mmxxv_post_thumbnail(); ?>

					<?php
					the_content();

					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'the-commonwealth-theme-mmxxv' ),
							'after'  => '</div>',
						)
					);
					?>

				<?php if ( get_edit_post_link() ) : ?>
				<footer class="entry-footer">
					<?php
					edit_post_link(
						sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Edit <span class="screen-reader-text">%s</span>', 'the-commonwealth-theme-mmxxv' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							wp_kses_post( get_the_title() )
						),
						'<span class="edit-link">',
						'</span>'
					);
					?>
				</footer><!-- .entry-footer -->
			<?php endif; ?>
    </div>
				</section>
				<section data-w-id="10cbc55e-5ca5-0185-04f3-c5246728be3b" class="section-common invert">
	<?php get_template_part('template-parts/standards'); ?>
		<div data-w-id="42b22a58-cb58-635f-dbee-1114398e377c" style="opacity:0" class="_1300 sectionstart">
		<div class="scripts">Leadership</div>
		<div id="w-node-_46fd53e0-bba8-c334-b33f-564ac21c7f00-e7795935" class="w-layout-layout commonstack wf-layout-layout">
			<div class="w-layout-cell">
			<img class="" style="border-radius:999px; border: 1px solid #818181; padding:13px;" src="<?php echo get_template_directory_uri(); ?>/images/commonwealth-creative-matthew-thomas-small.jpg">
			</div>
			<div class="w-layout-cell">
			<h2 class="jumbo">Founder</h2>
			<p class="mid">Matthew Thomas Small</p>
			<p>Creating meaningful connections and enhancing user experience is at the heart of my work. I focus on revolutionizing how companies leverage design and technology to foster collaborative, thoughtful relationships with both clients and their customers. My proficiency in technology and my creative sensibilities consistently result in the development of innovative, enduring digital solutions and applications. With over 15 years of experience in brand strategy, design, and technology, I deliver solutions built on a proven foundation, focused on exceeding KPIs, maximizing ROI, and driving measurable success.</p>
			<div class="commonflexwide"> 
				<a href="#" data-cal-link="hello.mattsmall/introduction-with-matt-small-commonwealth-creative" data-cal-namespace="" data-cal-config='{"layout":"month_view"}' class="pills textdark">
				<span class="fa"></span>Schedule
				</a>
				<a href="mailto:hi@thecommonwealthcreative.com" target="_blank" class="pills textdark">
				<span class="fa"></span>Email
				</a>
				<a href="https://www.linkedin.com/in/matt-t-small/" target="_blank" class="pills textdark">
				<span class="fa brands"></span>Linkedin
				</a>
			</div>
			</div>
		</div>
		</div>
		<div data-w-id="af27d7af-148b-9945-4fb0-63761d263b9a" style="opacity:0" class="_1300 sectionstart">
      		<div class="scripts">So Not Common Talent</div>
      
			<p class="match1">At our studio, we pride ourselves on maintaining a flexible roster of top talent, adjusting team members to ensure the best fit for our clients. This agile approach allows us to continuously refine our expertise, adapt to requests, and deliver solutions that exceed expectations. If you believe your skills and vision make you a perfect match for our team, <a class="underline textdark" href="/contact">we’d love to hear from you</a>.</p>		
		</div>
	</section>
	<?php get_template_part('template-parts/reviews'); ?>
	<?php get_template_part('template-parts/cta-shop'); ?>
</article><!-- #post-<?php the_ID(); ?> -->
