<?php
/**
 * Template Part for displaying a codex post item.
 *
 * Usage: This template part should be included in a WordPress loop.
 */

// Get the post's featured image.
$featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');

// Get the first 140 characters of the post content.
$excerpt = wp_trim_words(get_the_content(), 15, '...');

// Get the post title.
$post_title = get_the_title();

// Get the post permalink.
$post_permalink = get_permalink();
?>

        <div class="w-layout-cell" post-<?php echo esc_attr(get_the_ID()); ?>>
          <a href="<?php echo esc_url($post_permalink); ?>" class="commoncard link w-inline-block">
            <?php if ($featured_image_url): ?>
            <img loading="lazy" src="<?php echo esc_url($featured_image_url); ?>" alt="<?php echo esc_attr($post_title); ?>" class="commoncellimage">
             <?php endif; ?>
            <div class="mid"><?php echo esc_html($post_title); ?></div>
            <div><?php echo esc_html($excerpt); ?></div>
          </a>
        </div>

