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
        <p class="mid textwhite">We empower marketing and engineering teams with signature brands, websites and digital products that streamline workflows, transform audiences into loyal customers, and rapidly maximize <a href="#faqs" class="textwhite underline">return on investment</a>.</p>
        <div class="stretch">
        <a href="/work" class="button bgwhite w-button">View Portfolio<span class="fa after"></span></a><a href="/shop" class="button second w-button">Plans &amp; Pricing<span class="fa after"></span></a>
        </div>
      </div>
    </div>
    <div data-w-id="34239f0a-c1ca-2acf-c782-767626233e13" style="opacity:0" class="_1300">
      <div class="w-layout-hflex sectionstart">
        <div class="scripts">Core Services</div>
        <a href="/strategies-methods/" class="pills _478-hide">Strategy</a>
        <a href="/strategies-methods/" class="pills _478-hide"> Branding</a>
        <a href="/strategies-methods/" class="pills _478-hide">Product</a>
      </div>
      <div id="w-node-_34239f0a-c1ca-2acf-c782-767626233e1d-e7795935" class="w-layout-layout commonstack wf-layout-layout">
        <div class="w-layout-cell">
          <a href="/strategies-methods/" class="commoncard link w-inline-block"><img loading="lazy" src="/wp-content/themes/common-mmxxv/images/logo.svg" alt="" class="commoncellimage">
            <div class="mid">Logos &amp; Branding</div>
            <div>Branding that boosts sales and fosters lasting connections.</div>
          </a>
        </div>
        <div class="w-layout-cell">
          <a href="/strategies-methods/" class="commoncard link w-inline-block"><img loading="lazy" src="/wp-content/themes/common-mmxxv/images/design.svg" alt="" class="commoncellimage">
            <div class="mid">Graphic Design</div>
            <div>Inspiring artistry and design to transform your brand image.</div>
          </a>
        </div>
        <div class="w-layout-cell">
          <a href="/strategies-methods/" class="commoncard link w-inline-block"><img loading="lazy" src="/wp-content/themes/common-mmxxv/images/seo.svg" alt="" class="commoncellimage">
            <div class="mid">SEO &amp; SEM</div>
            <div>Data-driven optimization and marketing to grow online.</div>
          </a>
        </div>
        <div class="w-layout-cell">
          <a href="/strategies-methods/" class="commoncard link w-inline-block"><img loading="lazy" src="/wp-content/themes/common-mmxxv/images/css.svg" alt="" class="commoncellimage">
            <div class="mid">Website &amp; Product Design</div>
            <div>UX/UI design for customer-oriented websites and modern applications.</div>
          </a>
        </div>
        <div class="w-layout-cell">
          <a href="/strategies-methods/" class="commoncard link w-inline-block"><img loading="lazy" src="/wp-content/themes/common-mmxxv/images/fullstack.svg" alt="" class="commoncellimage">
            <div class="mid">Full Stack Development</div>
            <div>Agile full-stack development for innovative, high-impact projects.</div>
          </a>
        </div>
        <div class="w-layout-cell">
          <a href="/strategies-methods/" class="commoncard link w-inline-block"><img loading="lazy" src="/wp-content/themes/common-mmxxv/images/ai.svg" alt="" class="commoncellimage">
            <div class="mid">Artificial Intelligence (AI)</div>
            <div>Leveraging the latest AI models to maximize productivity.</div>
          </a>
        </div>
      </div>
    </div>
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
