<?php
/**
 * Template part for displaying posts
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
        <?php
          if ( is_singular() ) :
            the_title( '<h1 class="entry-title">', '</h1>' );
          else :
            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
          endif;

          if ( 'post' === get_post_type() ) :
        ?>

        <?php
          endif;
        ?>        <div class="scripts withlove">made with <span class="fa middle textcommon"></span> in the commonwealth of virginia</div>
                <p class=""><a href="/the-codex" class="underline">The Codex</a> is a curated collection of terms, principles and concepts. Acting as a living, informational record, it serves as both a resource and a guide, detailing the processes, strategies, and expertise behind Commonwealth Creative.</p>
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
      <div class="w-layout-hflex sectionstart stretch">
      <?php if ( 'post' === get_post_type() ) : ?>
        <div class="entry-meta scripts">
          <?php
            echo '<span class="fa"></span>';
            the_commonwealth_theme_mmxxv_posted_by();
            echo '<span class="fa middle"></span>';
            the_commonwealth_theme_mmxxv_posted_on();

          ?>
        </div><!-- .entry-meta -->
      <?php endif; ?>

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

    <div data-w-id="48429a23-c1b4-0afe-d7ca-65222c007cdf" style="opacity:0" class="_1300 entry-content common66w post-content">
    <?php the_commonwealth_theme_mmxxv_post_thumbnail(); ?>	
      <?php
        the_content(
          sprintf(
            wp_kses(
              /* translators: %s: Name of current post. Only visible to screen readers */
              __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'the-commonwealth-theme-mmxxv' ),
              array(
                'span' => array(
                  'class' => array(),
                ),
              )
            ),
            wp_kses_post( get_the_title() )
          )
        );

        wp_link_pages(
          array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'the-commonwealth-theme-mmxxv' ),
            'after'  => '</div>',
          )
        );
      ?>
	
    </div><!-- .entry-content -->

    <?php get_template_part('template-parts/cta-codex'); ?>
  </section>
  <?php get_template_part('template-parts/reviews'); ?>
  <?php get_template_part('template-parts/cta-shop'); ?>
</article><!-- #post-<?php the_ID(); ?> -->
