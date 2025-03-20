<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>
<?php
defined( 'ABSPATH' ) || exit;

global $product;

// Get product details
$product_id           = get_the_ID();
$product_title        = get_the_title();
$product_price        = $product->get_price_html();
$product_content      = apply_filters('the_content', get_the_content());
$product_image        = get_the_post_thumbnail($product_id, 'full');
$product_url          = get_permalink();
$product_author       = get_the_author();
$product_author_id    = get_the_author_meta('ID');
$product_author_url   = get_author_posts_url($product_author_id);
$product_author_avatar = get_avatar($product_author_id, 32);

// Get product categories
$product_categories = wp_get_post_terms($product_id, 'product_cat', array('fields' => 'names'));
$show_questions_section = in_array('Design', $product_categories) || in_array('Code', $product_categories) || in_array('Membership', $product_categories) || in_array('Sprints', $product_categories);
?>
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
        <div class="scripts withlove">
          made with <span class="fa middle textcommon"></span> in the commonwealth of virginia
        </div>
      </div>
      <div class="woocommerce-notices-wrapper">
        <?php woocommerce_output_all_notices(); ?>
    </div>
	  </header><!-- .entry-header -->
    <div class="_1300 sectionstart stretch">
      <a href="/shop" class="scripts"><span class="fa"></span> The Collection</a>
      <?php
// Attempt to get the next product.
$next_product = get_adjacent_post( false, '', false );
if ( $next_product ) {
    $next_product_link = get_permalink( $next_product->ID );
} else {
    // If no next product exists, get the first product.
    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => 1,
        'orderby'        => 'date',
        'order'          => 'ASC',
    );
    $first_products = get_posts( $args );
    if ( ! empty( $first_products ) ) {
        $next_product_link = get_permalink( $first_products[0]->ID );
    }
}

if ( ! empty( $next_product_link ) ) {
    echo '<a id="next" class="scripts" href="' . esc_url( $next_product_link ) . '">Next Product <span class="fa after"></span></a>';
}
?>




    </div>
	  <div class="_1300 product-content common66w">

       <div>
       <div class="featured-product-image">
        <?php echo $product_image; ?>
        </div>
       <p class="mid single-price"><span class="fa textcommon"></span><?php echo $product_price; ?></p>
         <?php echo apply_filters('the_content', $product->get_description()); ?>
       </div>
       <div class="product-options">
       <p class="mid single-price"><span class="fa textcommon"></span><?php echo $product_price; ?></p>
         <?php woocommerce_template_single_add_to_cart(); ?>
       </div>
	   <div>
         <!-- Additional content can go here if needed -->
       </div>

      </div> <!-- End of product-content -->
      
      <div class="_1300 sectionstart">
       <?php get_template_part('template-parts/standards'); ?>
      </div>
    </section>
    <section class="section-common portfolio bg-image" style="background-image: url('<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ); ?>');">
    <div class="text-holder">
      <div id="work" data-w-id="985ce911-db2b-d552-bbc9-a35288d802cb" class="w-layout-hflex commoncarouseltext overlay">
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
      <div class="workcontent commoncenter">   
        <?php the_title( '<h3 class="match1"><span>', '</span></h3>' ); ?>
        <p class="mid single-price"><?php echo $product_price; ?></p>
      </div>
        </div>
    </div>
    <a data-w-id="12ef9e26-78f1-fccd-9073-e5a081f87d8a" href="<?php echo esc_url( wc_get_cart_url() ); ?>?add-to-cart=<?php echo esc_attr( $product_id ); ?>" class="sectionlink w-inline-block">
      <div class="_1300">
        <div class="scripts">Buy Now: <?php echo $product_title;?></div>
        <div class="w-layout-hflex flex-block">
          <h2 data-w-id="12ef9e26-78f1-fccd-9073-e5a081f87d8f" style="opacity:0">Add To Checkout.</h2><img loading="lazy" src="/wp-content/themes/common-mmxxv/images/commonarrow.svg" alt="" class="movearrow">
        </div>
      </div>
    </a>
    </section>
    <?php get_template_part('template-parts/shift'); ?>
    <?php get_template_part('template-parts/reviews'); ?>
<?php
get_footer( 'shop' );
