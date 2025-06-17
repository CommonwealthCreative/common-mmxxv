<?php
/**
 * Template Name: Workbook
 * ...
 */
get_header();
?>

<main id="primary" class="site-main">
  <?php
  while ( have_posts() ) :
    the_post();
    get_template_part( 'template-parts/content', 'workbook' );

    if ( comments_open() || get_comments_number() ) :
      comments_template();
    endif;

  endwhile;
  ?>
</main><!-- #main -->

<!-- Replace CF7 submit button only on this page -->
<script>
jQuery(function($){
  function replaceCf7Submit() {
    $('.wpcf7-form .sc-register-btn')
      .not('button.sc-replaced')
      .each(function(){
        var $input = $(this);
        var name = $input.attr('name');
        var $button = $('<button>', {
          type: 'submit',
          name: name,
          class: 'button bgdark w-button sc-replaced',
          html: 'Next Question <span class="fa after"></span>'
        });
        $input.replaceWith($button);
      });
  }

  // Run once on page load:
  replaceCf7Submit();

  // Re-run after CF7 validation or AJAX operations:
  document.addEventListener('wpcf7submit', replaceCf7Submit);
  document.addEventListener('wpcf7invalid', replaceCf7Submit);
  document.addEventListener('wpcf7mailsent', replaceCf7Submit);
});
</script>

<?php
/* get_sidebar(); */
get_footer();
