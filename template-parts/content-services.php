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
		        <p class="">Our all-access approach removes limits, so we can focus on delivering exceptional results for the world’s most demanding brands.</p>
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

	<?php get_template_part('template-parts/offerings'); ?>
		<section data-w-id="10cbc55e-5ca5-0185-04f3-c5246728be3b" class="section-common invert">
		<?php get_template_part('template-parts/memberships'); ?>
				<?php get_template_part('template-parts/cta-workbook'); ?>
	</section>
	<?php get_template_part('template-parts/reviews'); ?>
	<?php get_template_part('template-parts/cta-shop'); ?>
</article><!-- #post-<?php the_ID(); ?> -->
