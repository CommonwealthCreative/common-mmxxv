<?php
/**
 * The Commonwealth Theme MMXXV functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package The_Commonwealth_Theme_MMXXV
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function the_commonwealth_theme_mmxxv_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on The Commonwealth Theme MMXXV, use a find and replace
		* to change 'the-commonwealth-theme-mmxxv' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'the-commonwealth-theme-mmxxv', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'the-commonwealth-theme-mmxxv' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'the_commonwealth_theme_mmxxv_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'the_commonwealth_theme_mmxxv_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function the_commonwealth_theme_mmxxv_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'the_commonwealth_theme_mmxxv_content_width', 640 );
}
add_action( 'after_setup_theme', 'the_commonwealth_theme_mmxxv_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function the_commonwealth_theme_mmxxv_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'the-commonwealth-theme-mmxxv' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'the-commonwealth-theme-mmxxv' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'the_commonwealth_theme_mmxxv_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function the_commonwealth_theme_mmxxv_scripts() {

    // Enqueue Normalize first (base styles)
    wp_enqueue_style('normalize-styles', get_template_directory_uri() . '/css/normalize.css', array(), '1.0.0', 'all');

    // Enqueue Webflow styles next
    wp_enqueue_style('webflow-styles', get_template_directory_uri() . '/css/webflow.css', array('normalize-styles'), '1.0.0', 'all');

    // Enqueue theme's primary stylesheet last (if needed)
    wp_enqueue_style( 'the-commonwealth-theme-mmxxv-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_style_add_data( 'the-commonwealth-theme-mmxxv-style', 'rtl', 'replace' );

    // Enqueue Common MMXXV LAST to override Webflow styles
    wp_enqueue_style('mmxxv-styles', get_template_directory_uri() . '/css/common-mmxxv.css', array('webflow-styles'), '1.0.0', 'all');

    // Enqueue scripts
    wp_enqueue_script('webflow-js', get_template_directory_uri() . '/js/webflow.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script( 'the-commonwealth-theme-mmxxv-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

    // Enqueue comment-reply script if needed
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    };

    // Conditionally enqueue loader script for specific pages
    if (
        (is_single() && get_page_template_slug(get_the_ID()) === 'single-portfolio-template.php') || 
        is_page('work.php')
    ) {
        wp_enqueue_script('loader-script', get_template_directory_uri() . '/js/loader.js', array(), null, true);
    }
    
    // Load starspeckle.js on all pages 3 seconds after page load
    add_action('wp_footer', function () {
        echo '<script>
                window.addEventListener("load", function () {
                    setTimeout(() => {
                        let script = document.createElement("script");
                        script.src = "' . get_template_directory_uri() . '/js/starspeckle.js";
                        script.async = true;
                        document.body.appendChild(script);
                    }, 3000);
                });
              </script>';
    }, 99);
}
add_action( 'wp_enqueue_scripts', 'the_commonwealth_theme_mmxxv_scripts' );

/**
 * Woocommerce
 */
function commontheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'commontheme_add_woocommerce_support' );

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/*  Portfolio Post under /work */
// Custom permalink for portfolio posts under /work/
function custom_portfolio_permalink($permalink, $post, $leavename) {
    if ($post->post_type == 'post') {
        $categories = get_the_category($post->ID);
        foreach ($categories as $category) {
            if ($category->slug === 'portfolio') {
                return home_url('/work/' . $post->post_name);
            }
        }
    }
    return $permalink;
}
add_filter('post_link', 'custom_portfolio_permalink', 10, 3);

// Register custom rewrite rules for /work/ URLs
function add_portfolio_rewrite_rules() {
    add_rewrite_rule('^work/([^/]+)/?$', 'index.php?name=$matches[1]', 'top');
}
add_action('init', 'add_portfolio_rewrite_rules');

// Flush rewrite rules on activation
function flush_rewrite_rules_on_activation() {
    add_portfolio_rewrite_rules();
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'flush_rewrite_rules_on_activation');

function portfolio_template_add_meta_box() {
    add_meta_box(
        'portfolio_template_meta_box', // Unique ID for the meta box
        'Portfolio Extra Content',     // Title of the meta box
        'portfolio_template_meta_box_callback', // Callback function that displays the meta box content
        'post',                        // Screen (post type) where the meta box should appear
        'normal',                      // Context (normal, side, etc.)
        'default'                      // Priority (default, high, etc.)
    );
}
add_action( 'add_meta_boxes', 'portfolio_template_add_meta_box' );


// Render the meta box with a WYSIWYG editor
function portfolio_template_meta_box_callback( $post ) {
    // Check if the post uses the "Portfolio Posts" template
    $template = get_page_template_slug( $post->ID );
    if ( $template !== 'single-portfolio-template.php' ) {
        echo '<p>This metabox is only available for posts using the "Portfolio Posts" template.</p>';
        return;
    }

    // Retrieve the saved meta value
    $portfolio_extra_content = get_post_meta( $post->ID, '_portfolio_extra_content', true );

    ?>
    <p>
        <label for="portfolio_extra_content"><strong>Hero Content:</strong></label>
    </p>
    <?php
    // Display the WYSIWYG editor for HTML content
    wp_editor( $portfolio_extra_content, 'portfolio_extra_content', array(
        'textarea_name' => 'portfolio_extra_content',
        'media_buttons' => true,
        'textarea_rows' => 10,
        'teeny'         => false,
    ) );
}

function save_portfolio_template_meta_box( $post_id ) {
    // Check if the save is valid
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    if ( isset( $_POST['portfolio_extra_content'] ) ) {
        // Allow safe HTML output by using wp_kses_post
        update_post_meta( $post_id, '_portfolio_extra_content', wp_kses_post( $_POST['portfolio_extra_content'] ) );
    }
}
add_action( 'save_post', 'save_portfolio_template_meta_box' );


/* Second Meta Box */

// Register the Secondary Content WYSIWYG Metabox
function add_secondary_content_meta_box() {
    add_meta_box(
        'secondary_content_meta_box',       // Unique ID
        'Secondary Content',                // Title of the meta box
        'secondary_content_meta_box_callback', // Callback function
        'post',                             // Post type
        'normal',                           // Context
        'high'                              // Priority
    );
}
add_action( 'add_meta_boxes', 'add_secondary_content_meta_box' );

// Render the WYSIWYG editor in the metabox
function secondary_content_meta_box_callback( $post ) {
    $secondary_content = get_post_meta( $post->ID, '_secondary_content', true );

    // Render the WYSIWYG editor
    wp_editor(
        $secondary_content,
        'secondary_content', // Editor ID
        array(
            'textarea_name' => 'secondary_content',
            'media_buttons' => true,
            'textarea_rows' => 10,
            'teeny'         => false,
            'quicktags'     => true,
        )
    );
}

// Save the Secondary Content
function save_secondary_content_meta_box( $post_id ) {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    if ( isset( $_POST['secondary_content'] ) ) {
        // Save the content with safe HTML tags
        update_post_meta( $post_id, '_secondary_content', wp_kses_post( $_POST['secondary_content'] ) );
    }
}
add_action( 'save_post', 'save_secondary_content_meta_box' );

function add_portfolio_category_meta_box() {
    add_meta_box(
        'portfolio_category_meta_box', // Unique ID
        'Portfolio Details', // Title
        'portfolio_category_meta_box_callback', // Callback function
        'post', // Post type
        'normal', // Context
        'high' // Priority
    );
}
add_action('add_meta_boxes', 'add_portfolio_category_meta_box');

function portfolio_category_meta_box_callback($post) {
    // Check if the post is in the "portfolio" category
    $categories = wp_get_post_categories($post->ID, ['fields' => 'slugs']);
    if (!in_array('portfolio', $categories)) {
        echo '<p>This meta box is only available for posts in the "portfolio" category.</p>';
        return;
    }

    // Retrieve saved meta value
    $portfolio_meta = get_post_meta($post->ID, '_portfolio_meta', true);

    // Display meta box form
    ?>
    <p>
        <label for="portfolio_meta"><strong>Portfolio Details (Category Overview):</strong></label>
        <textarea id="portfolio_meta" name="portfolio_meta" rows="5" style="width: 100%;"><?php echo esc_textarea($portfolio_meta); ?></textarea>
    </p>
    <?php
}

function save_portfolio_category_meta_box($post_id) {
    // Check if the save is valid
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (isset($_POST['portfolio_meta'])) {
        update_post_meta($post_id, '_portfolio_meta', sanitize_textarea_field($_POST['portfolio_meta']));
    }
}
add_action('save_post', 'save_portfolio_category_meta_box');

// Register the Image Meta Box
function add_portfolio_image_meta_box() {
    add_meta_box(
        'portfolio_image_meta_box', // Unique ID
        'Portfolio Featured Image', // Title
        'portfolio_image_meta_box_callback', // Callback function
        'post', // Post type
        'normal', // Context
        'high' // Priority
    );
}
add_action('add_meta_boxes', 'add_portfolio_image_meta_box');

// Render the Image Meta Box with Media Library Picker
function portfolio_image_meta_box_callback($post) {
    $categories = wp_get_post_categories($post->ID, ['fields' => 'slugs']);
    if (!in_array('portfolio', $categories)) {
        echo '<p>This meta box is only available for posts in the "portfolio" category.</p>';
        return;
    }

    // Retrieve the saved image URL
    $portfolio_image = get_post_meta($post->ID, '_portfolio_image', true);

    // Render the input field and media picker
    ?>
    <p>
        <label for="portfolio_image"><strong>Portfolio Image:</strong></label>
    </p>
    <div style="display: flex; align-items: center; gap: 10px;">
        <input type="text" id="portfolio_image" name="portfolio_image" value="<?php echo esc_url($portfolio_image); ?>" style="width: 80%;" />
        <button type="button" id="portfolio_image_button" class="button">Select Image</button>
    </div>
    <p>
        <em>Select an image from the media library or paste the image URL here.</em>
    </p>
    <script>
        (function($) {
            $(document).ready(function() {
                let mediaUploader;
                $('#portfolio_image_button').click(function(e) {
                    e.preventDefault();
                    if (mediaUploader) {
                        mediaUploader.open();
                        return;
                    }
                    mediaUploader = wp.media({
                        title: 'Select Portfolio Image',
                        button: { text: 'Use this image' },
                        multiple: false
                    });
                    mediaUploader.on('select', function() {
                        const attachment = mediaUploader.state().get('selection').first().toJSON();
                        $('#portfolio_image').val(attachment.url);
                    });
                    mediaUploader.open();
                });
            });
        })(jQuery);
    </script>
    <?php
}

// Save the Image Meta Box Content
function save_portfolio_image_meta_box($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (isset($_POST['portfolio_image'])) {
        update_post_meta($post_id, '_portfolio_image', esc_url_raw($_POST['portfolio_image']));
    }
}
add_action('save_post', 'save_portfolio_image_meta_box');


// Portfolio Filter 

function filter_portfolio_callback() {
    // Get the filter value (child category slug) from the AJAX request.
    $filter = isset( $_POST['filter'] ) ? sanitize_text_field( $_POST['filter'] ) : '';

    // Base query args: Always include posts in the "portfolio" category.
    $args = array(
      'category_name'  => 'portfolio',
      'posts_per_page' => -1,
      'meta_key'       => '_post_ranking',
      'orderby'        => 'meta_value_num',
      'order'          => 'ASC',
    );

    // If a valid filter is provided, add a tax_query.
    if ( in_array( $filter, array( 'strategy', 'branding', 'product' ) ) ) {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'category',
                'field'    => 'slug',
                'terms'    => $filter,
            ),
        );
    }

    $portfolio_query = new WP_Query( $args );

    if ( $portfolio_query->have_posts() ) {
        while ( $portfolio_query->have_posts() ) {
            $portfolio_query->the_post();
            get_template_part( 'template-parts/content', 'portfolios' );
        }
        wp_reset_postdata();
    } else {
        ?>
        <div class="_1300 flexmiddle">
            <p><?php echo esc_html( 'No projects found for this filter.' ); ?></p>
        </div>
        <?php
    }
    wp_die();
}
add_action( 'wp_ajax_filter_portfolio', 'filter_portfolio_callback' );
add_action( 'wp_ajax_nopriv_filter_portfolio', 'filter_portfolio_callback' );


/*Portfolio Navigation */

/* Custom Portfolio Post Navigation (looped) */

function get_portfolio_navigation() {
    // Get all posts in the "portfolio" category
    $all_posts = get_posts(array(
        'posts_per_page' => -1, // Get all posts in the category
        'category_name' => 'portfolio', // Slug of the "portfolio" category
        'orderby' => 'date',    // Order by date
        'order' => 'ASC',       // Oldest to newest
    ));

    // If there are no posts, return early
    if ( empty( $all_posts ) ) {
        return;
    }

    // Find the current post index
    $current_post_id = get_the_ID();
    $current_index = array_search($current_post_id, wp_list_pluck($all_posts, 'ID'));

    // Get the next and previous posts
    $next_index = ($current_index + 1) % count($all_posts); // Circular increment
    $prev_index = ($current_index - 1 + count($all_posts)) % count($all_posts); // Circular decrement

    $next_post = $all_posts[$next_index];
    $prev_post = $all_posts[$prev_index];

    // Output navigation HTML
    ob_start();
    ?>
        <a class="nextproject" href="<?php echo get_permalink($next_post->ID); ?>">
        <p class="scripts">Next Project</p>
              <div class="fontawesolid"></div>
        </a>

    <?php
    return ob_get_clean();
}

/* Redirection for The Codex posts */

function redirect_category_codex() {
    if ( is_category( 'codex' ) ) {
        wp_redirect( site_url( '/the-codex/' ), 301 );
        exit;
    }
}
add_action( 'template_redirect', 'redirect_category_codex' );


/**
 * Add a Ranking meta box to posts.
 */
function add_ranking_meta_box() {
    add_meta_box(
        'ranking_meta_box',          // Unique ID
        'Post Ranking',              // Box title
        'ranking_meta_box_callback', // Content callback
        'post',                      // Post type
        'side',                      // Context
        'high'                       // Priority
    );
}
add_action( 'add_meta_boxes', 'add_ranking_meta_box' );

/**
 * Display the meta box content.
 */
function ranking_meta_box_callback( $post ) {
    // Retrieve current ranking value
    $ranking = get_post_meta( $post->ID, '_post_ranking', true );

    // Fallback to a default value if empty
    if ( empty( $ranking ) ) {
        $ranking = 99; // Default ranking
    }

    // Display the input field
    ?>
    <label for="post_ranking">Ranking (1-99):</label>
    <input type="number" id="post_ranking" name="post_ranking" value="<?php echo esc_attr( $ranking ); ?>" min="1" max="99" style="width: 100%;" />
    <?php
}

/**
 * Save the ranking value.
 */
function save_ranking_meta_box( $post_id ) {
    // Verify the nonce field for security
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    // Check user permissions
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    // Save the ranking if it exists
    if ( isset( $_POST['post_ranking'] ) ) {
        $ranking = intval( $_POST['post_ranking'] );

        // Ensure the ranking is between 1 and 99
        if ( $ranking < 1 || $ranking > 99 ) {
            $ranking = 99; // Default to 99 if out of range
        }

        update_post_meta( $post_id, '_post_ranking', $ranking );
    }
}
add_action( 'save_post', 'save_ranking_meta_box' );


/**
 * Add the Ranking field to the Quick Edit section.
 */
function add_ranking_to_quick_edit( $column_name, $post_type ) {
    if ( 'post' === $post_type && 'ranking' === $column_name ) {
        ?>
        <fieldset class="inline-edit-col-right">
            <div class="inline-edit-col">
                <label>
                    <span class="title">Ranking</span>
                    <span class="input-text-wrap">
                        <input type="number" name="post_ranking" class="post-ranking" value="" min="1" max="99">
                    </span>
                </label>
            </div>
        </fieldset>
        <?php
    }
}
add_action( 'quick_edit_custom_box', 'add_ranking_to_quick_edit', 10, 2 );

/**
 * Add a custom column for the Ranking field in the admin post list.
 */
function add_ranking_column( $columns ) {
    $columns['ranking'] = 'Ranking';
    return $columns;
}
add_filter( 'manage_posts_columns', 'add_ranking_column' );

/**
 * Populate the Ranking column with data.
 */
function populate_ranking_column( $column_name, $post_id ) {
    if ( 'ranking' === $column_name ) {
        $ranking = get_post_meta( $post_id, '_post_ranking', true );
        echo esc_html( $ranking ? $ranking : '99' ); // Default to 99 if no ranking
    }
}
add_action( 'manage_posts_custom_column', 'populate_ranking_column', 10, 2 );

/**
 * Save the Ranking value from Quick Edit.
 */
function save_quick_edit_ranking( $post_id ) {
    if ( isset( $_POST['post_ranking'] ) ) {
        $ranking = intval( $_POST['post_ranking'] );

        // Ensure the ranking is within range
        if ( $ranking < 1 || $ranking > 99 ) {
            $ranking = 99; // Default to 99
        }

        update_post_meta( $post_id, '_post_ranking', $ranking );
    }
}
add_action( 'save_post', 'save_quick_edit_ranking' );

function sc_register_subscriber_form() {
    if ( isset($_POST['sc_register_submit']) && wp_verify_nonce( $_POST['sc_register_nonce'], 'sc_register_form' ) ) {
        $name  = sanitize_text_field( $_POST['sc_name'] );
        $email = sanitize_email( $_POST['sc_email'] );

        if ( ! email_exists( $email ) ) {
            $username = sanitize_user( current( explode( '@', $email ) ) );
            $password = wp_generate_password();
            $user_id  = wp_create_user( $username, $password, $email );

            if ( ! is_wp_error( $user_id ) ) {
                wp_update_user([ 'ID' => $user_id, 'display_name' => $name ]);
                $u = new WP_User( $user_id );
                $u->set_role( 'subscriber' );

                $creds = [ 'user_login' => $username, 'user_password' => $password, 'remember' => true ];
                $user  = wp_signon( $creds, false );

                if ( ! is_wp_error( $user ) ) {
                    wp_redirect( site_url( '/my-account' ) );
                    exit;
                } else {
                    $error = $user->get_error_message();
                }
            } else {
                $error = $user_id->get_error_message();
            }
        } else {
            $error = sprintf(
                'This email is already registered. <a class="underline" href="%s">Go to your account page</a>.',
                esc_url( site_url( '/my-account' ) )
            );
        }
    }

    ob_start();

    if ( ! empty( $error ) ) {
        echo '<p class="error">' . wp_kses_post( $error ) . '</p>';
    }
    ?>
    <form method="post">
        <p>
            <label class="textwhite">
                Email the workbook to:<br>
                <input type="email" name="sc_email" placeholder="Your Email*" required>
            </label>
        </p>
        <p>
            <label class="textwhite">
                Put my name in the subject line:<br>
                <input type="text" name="sc_name" placeholder="You Name*" required>
            </label>
        </p>

        <?php wp_nonce_field( 'sc_register_form', 'sc_register_nonce' ); ?>

        <p>
            <button type="submit"
                    name="sc_register_submit"
                    class="button bgwhite w-button">
                Download Now
                <span class="fa after"></span>
            </button>
        </p>
    </form>
    <?php

    return ob_get_clean();
}
add_shortcode( 'subscriber_form', 'sc_register_subscriber_form' );

