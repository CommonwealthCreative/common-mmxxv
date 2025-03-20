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
	<section data-w-id="10cbc55e-5ca5-0185-04f3-c5246728be3b" class="section-common invert">
	<canvas class="header" id="interactiveCanvas"></canvas>
 	<header data-w-id="d298873b-d54b-cbb3-7c49-a5ea6850e86a" style="opacity:0" class="_1300 entry-header">
      <div class="commoncenter">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <div class="scripts withlove">made with <span class="fa middle textcommon"></span> in the commonwealth of virginia</div>
        <!--<p class="mid">Automatic custom fields dynamic content is here</p>
        <a href="/shop" target="_blank" class="button w-button">Dynamic Button<span class="fa after"></span></a>-->

      </div>
	  <div class="woocommerce-notices-wrapper">
        <?php woocommerce_output_all_notices(); ?>
    </div>
      <div class="w-layout-hflex sectionstart stretch">
        <div id="breadcrumbs" class="scripts"><?php if ( function_exists('yoast_breadcrumb') ){yoast_breadcrumb( '', '' );} else {echo 'Home // ' . get_the_title();}?></div>
					<?php 
				// Get the post categories.
				$categories = get_the_category();
				if ( ! empty( $categories ) ) {
					// Use the first category.
					$category = $categories[0];
					// If this category has a parent, get the parent's info.
					if ( $category->parent ) {
						$parent_category = get_category( $category->parent );
						$cat_name = $parent_category->name;
						$cat_link = get_category_link( $parent_category->term_id );
					} else {
						// Otherwise, use the current category.
						$cat_name = $category->name;
						$cat_link = get_category_link( $category->term_id );
					}
				?>
            <a id="categories" href="<?php echo esc_url( $cat_link ); ?>" class="pills _478-hide">
         <span class="fa"></span> <?php echo esc_html( $cat_name ); ?>
    </a>
    <?php } ?>
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
</article><!-- #post-<?php the_ID(); ?> -->
