<?php
/**
 * Custom WooCommerce Product Loop Template for Commontheme
 *
 * Overrides WooCommerce's default `content-product.php` layout.
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure the product is valid and visible
if ( ! is_a( $product, WC_Product::class ) || ! $product->is_visible() ) {
    return;
}

// Get product details
$product_id = $product->get_id();
$product_title = get_the_title();
$product_permalink = get_permalink();
$product_excerpt = wp_trim_words(get_the_excerpt(), 100, '...');
$product_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $product_id ), 'thumbnail' )[0];

?>
<a href="<?php echo esc_url( $product_permalink ); ?>" data-w-id="d58e2865-e975-e494-7590-64cc7dbe37bc" style="opacity:0" class="w-layout-cell commoncard">
<?php if ( $product_image_url ): ?>
        <img loading="lazy" src="<?php echo esc_url( $product_image_url ); ?>" alt="<?php echo esc_attr( $product_title ); ?>" class="commoncellimage">
    <?php endif; ?>
            <div class="w-layout-hflex commonflexwide">
              <p data-w-id="d58e2865-e975-e494-7590-64cc7dbe37be" style="opacity:0" class="mid"><?php echo esc_html( $product_title ); ?></p>
            </div>
            <div class="smalls commonsans"><span class="mid"><?php global $product; echo $product->get_price_html(); ?></div>
            <p><?php echo esc_html( $product_excerpt ); ?></p>
            <!--<div class="smalls">*Pause or Cancel Anytime. Military &amp; Non-Profit Discounts.</div>-->
</a>         
