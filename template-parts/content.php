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
      <div class="w-layout-hflex sectionstart">
        <?php
$cats = get_the_category();
if ( ! empty( $cats ) ) {
    $displayed = [];
    foreach ( $cats as $cat ) {
        // If it's a child, first output its parent (once)
        if ( $cat->parent && ! in_array( $cat->parent, $displayed ) ) {
            $parent = get_category( $cat->parent );
            echo '<a id="categories" href="' . esc_url( get_category_link( $parent->term_id ) ) . '" class="pills bgdark">';
            echo '<span class="fa"></span> ' . esc_html( $parent->name );
            echo '</a> ';
            $displayed[] = $parent->term_id;
        }
        // Now output the category itself (once)
        if ( ! in_array( $cat->term_id, $displayed ) ) {
            echo '<a id="categories" href="' . esc_url( get_category_link( $cat->term_id ) ) . '" class="pills bgdark">';
            echo '<span class="fa"></span> ' . esc_html( $cat->name );
            echo '</a> ';
            $displayed[] = $cat->term_id;
        }
    }
}
?>
      <?php if ( 'post' === get_post_type() ) : ?>
        <div class="entry-meta scripts">
          <?php
            echo '<span class="fa middle"></span>';
            the_commonwealth_theme_mmxxv_posted_on();

          ?>
        </div><!-- .entry-meta -->
      <?php endif; ?>

     

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
</article><!-- #post-<?php the_ID(); ?> -->
