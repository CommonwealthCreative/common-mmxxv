<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Commonwealth_Theme_MMXXV
 */

get_header();
?>
<body>
  <section class="section-common hero">
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
    <div data-w-id="34239f0a-c1ca-2acf-c782-767626233dfb" style="opacity:0" class="_1300">
      <div class="commoncenter">
        <h1 class="textwhite">A signature design &amp; technology studio created just for you.</h1>
        <div class="scripts withlove">made with <span class="fa middle textcommon"></span> in the commonwealth of virginia</div>
        <p class="mid textwhite">One membership. Every service. No limitations. Get immediate access to your dashboard, submit unlimited requests, and receive deliverables every 48-72 hours. <a href="#faqs" class="textwhite underline">Have questions?</a></p>
        <div class="stretch">
        <a href="/memberships" class="button bgwhite w-button">Membership Starts Here<span class="fa after"></span></a>
        </div>
      </div>
    </div>
    <?php get_template_part('template-parts/services'); ?>
    <?php get_template_part('template-parts/technologies'); ?>
  </section>
  <section class="featuredwork">
  <div class="commonworkrow mba">
      <a href="/work/mary-baldwin-mba" class="text-holder w-inline-block">
        <div class="workcontent commoncenter">
          <h2 class="match1">Kickstarting a revolutionary Business Administration (MBA) Program.</h2>
          <div class="scripts">Mary Baldwin University</div>
        </div>
      </a>
    </div>

    <div class="commonworkrow thriveworks">
      <a href="/work/thriveworks" class="text-holder w-inline-block">
        <div class="workcontent commoncenter">
          <h2 class="match1">Dominating search engine results for "Online Counseling".</h2>
          <div class="scripts">Thriveworks</div>
        </div>
      </a>
    </div>

    <div class="commonworkrow dbhds">
      <a href="/work/virginia-dbhds" class="text-holder w-inline-block">
        <div class="workcontent commoncenter">
          <h2 class="match1">Energizing the state agency&#x27;s technology platform.</h2>
          <div class="scripts">VA Department of Behavioral Health &amp; Developmental Services</div>
        </div>
      </a>
    </div>

    <div class="commonworkrow novafr">
      <a href="/work/nova-food-rescue/" class="text-holder w-inline-block">
        <div class="workcontent commoncenter">
          <h2 class="match1">Reshaping food systems to nourish people and protect the planet.</h2>
          <div class="scripts">Northern Virginia Food Rescue</div>
        </div>
      </a>
    </div>

    <div class="commonworkrow george">
      <a href="/work/the-george-wythe-edition-wordpress-theme" class="text-holder w-inline-block">
        <div class="workcontent commoncenter">
          <h2 class="match1">Engineered to US Web Design Standards for accessible, mobile-friendly websites.</h2>
          <div class="scripts">The George Wythe Edition WordPress Theme</div>
        </div>
      </a>
    </div>
    
    <?php get_template_part('template-parts/cta-portfolio'); ?>
  </section>
  <?php get_template_part('template-parts/shift'); ?>
<?php
/* get_sidebar(); */
get_footer();
