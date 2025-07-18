<?php
/**
 * Template part for displaying Codex CTA
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

?>
		<div data-w-id="42b22a58-cb58-635f-dbee-1114398e377c" style="opacity:0" class="_1300 sectionstart">
		<div class="scripts">Learn More</div>      <a href="#" data-cal-link="hello.mattsmall/introduction-with-matt-small-commonwealth-creative" data-cal-namespace="" data-cal-config='{"layout":"month_view"}' class="scripts"><span class="fa"></span> Schedule an Introduction</a>
		<div id="w-node-_46fd53e0-bba8-c334-b33f-564ac21c7f00-e7795935" class="w-layout-layout commonstack wf-layout-layout">
			<div class="w-layout-cell">
			<h2 class="jumbo">The Codex</h2>
			</div>
			<div class="w-layout-cell">
        <p class="mid">Let us take the lead</p>
      <p><b>The Codex is a curated collection of terms detailing the processes, strategies, and expertise behind our work. </b>With our experienced guidance, you won't have to navigate these complexities on your own. We invite you to explore these entries to uncover deeper insights.</p>
			<div class="commonflexwide"> 
      <?php
// Define the query arguments for the "codex" parent category only
$args = array(
    'posts_per_page' => 13,
    'orderby'        => 'rand',
    'tax_query'      => array(
        array(
            'taxonomy'         => 'category',
            'field'            => 'slug',
            'terms'            => 'codex',
            'include_children' => false,
        ),
    ),
);

// Start the custom query
$query = new WP_Query( $args );

if ( $query->have_posts() ) :
    echo '<ul role="list" class="commonlist">';
    while ( $query->have_posts() ) : $query->the_post(); ?>
        <li>
            <a class="pills" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
    <?php endwhile;
    echo '</ul>';
    wp_reset_postdata();
else :
    echo '<p>No posts found in the "codex" category.</p>';
endif;
?>

			</div>
			</div>
		</div>
		</div>
