
    <div data-w-id="42b22a58-cb58-635f-dbee-1114398e377c" style="opacity:0" class="_1300">
    <?php
    /**
     * Hook: woocommerce_before_shop_loop.
     *
     * @hooked woocommerce_output_all_notices - 10
     * @hooked woocommerce_result_count - 20
     * @hooked woocommerce_catalog_ordering - 30
     */
    remove_action('woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10);
    do_action('woocommerce_before_shop_loop');
    add_action('woocommerce_after_main_content', 'woocommerce_output_all_notices', 10);
    ?>
    <div class="woocommerce-notices-wrapper">
        <?php woocommerce_output_all_notices(); ?>
    </div>

    </div>
