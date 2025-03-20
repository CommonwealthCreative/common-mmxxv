<?php
/**
 * Template Part for displaying a codex post item.
 *
 * Usage: This template part should be included in a WordPress loop.
 */

// Get the post's featured image.
$featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'small');

// Get the first 140 characters of the post content.
$excerpt = wp_trim_words(get_the_content(), 15, '...');

// Retrieve the portfolio details meta (swap out the excerpt)
$portfolio_details = get_post_meta(get_the_ID(), '_portfolio_meta', true);

// Get the post title.
$post_title = get_the_title();

// Get the post permalink.
$post_permalink = get_permalink();


$categories = get_the_category();
$parent_category = null;
$child_categories = array();

if ( ! empty( $categories ) ) {
    // Look for a category with no parent.
    foreach ( $categories as $category ) {
        if ( $category->parent == 0 ) {
            $parent_category = $category;
        } else {
            $child_categories[] = $category;
        }
    }
    // If no explicit parent category, try to use the parent of the first child category.
    if ( ! $parent_category && ! empty( $child_categories ) ) {
        $parent_category = get_category( $child_categories[0]->parent );
    }
}
?>


        <div class="w-layout-cell" post-<?php echo esc_attr(get_the_ID()); ?>>
          <a data-w-id="2b7497b0-043b-4d31-ec4c-92599b972b98" style="opacity:1" a href="<?php echo esc_url($post_permalink); ?>" class="commoncard imagelink w-inline-block">
            <div class="scripts"><span class="fa"></span><?php echo $parent_category ? esc_html($parent_category->name) : ''; ?></div>
            <div class="scripts">
  <?php 
  if ( ! empty( $child_categories ) ) {
      // Get an array of child category names.
      $child_names = wp_list_pluck( $child_categories, 'name' );
      // Prefix each name with "#"
      $child_names = array_map( function($name) {
          return '#' . $name;
      }, $child_names );
      echo esc_html( implode(' ', $child_names) );
  }
  ?>
</div>

            <img loading="lazy" src="<?php echo esc_url($featured_image_url); ?>" alt="<?php echo esc_attr($post_title); ?>" class="cardimage">
            <p class="mid"><?php echo esc_html($post_title); ?></p>
            <div><?php echo esc_html($portfolio_details); ?></div>
          </a>
        </div>

