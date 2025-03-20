<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Commonwealth_Theme_MMXXV
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section data-w-id="10cbc55e-5ca5-0185-04f3-c5246728be3b" class="section-common invert">
		<canvas class="header" id="interactiveCanvas"></canvas>
			<?php if ( have_posts() ) : ?>

				<header data-w-id="d298873b-d54b-cbb3-7c49-a5ea6850e86a" style="opacity:0" class="_1300 entry-header">
					<div class="commoncenter">
						<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="archive-description">', '</div>' );
						?>
						<div class="scripts withlove">made with <span class="fa middle textcommon"></span> in the commonwealth of virginia</div>
						<div class="search-container">
							<form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
								<input 
									type="search" 
									class="search-input" 
									name="s" 
									placeholder="Search the Codex..." 
									aria-label="Search"
								>
								<button type="submit" class="button w-button"><span class="fa middle"></span></button>
							</form>
						</div>
					</div>
				</header><!-- .page-header -->

				<div data-w-id="698beae1-7624-3887-86ac-e49d3a30dc5b" style="opacity:0" class="_1300 sectionstart">
					<div class="scripts">Results</div>
					<div id="w-node-_5f2da74e-e9e6-1146-94a1-a3e9269e2bb1-e7795935" class="w-layout-layout commonstack wf-layout-layout">
						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/*
							 * Include the Post-Type-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'cards' );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
						?>
					</div>
				</div>

		</section>
	</main><!-- #main -->
	<section class="section-common bgdark">
	<?php get_template_part('template-parts/cta-codex'); ?>
	<?php get_template_part('template-parts/cta-shop'); ?>
				</section>

<?php
/*get_sidebar();*/
get_footer();
?>
