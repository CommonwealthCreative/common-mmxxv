<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Commonwealth_Theme_MMXXV
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
        <a href="#workbook" class="pills center bgcommon"><span class="fa"></span>Zero Cost — Always Free</a>
        <h1 class="textwhite">Design without clarity is just<br> <em class="textcommon">expensive guesswork.</em></h1>
        <div class="scripts withlove">made with <span class="fa middle textcommon"></span> in the commonwealth of virginia</div>
        <p class="mid textwhite">Before you update a logo, deploy a website, or launch your next marking campaign — you must define exactly<b> where your brand stands, who it serves, and what makes it matter.</b></p>
        <a href="#workbook" class="button w-button bgwhite">Start Your Workbook<span class="fa after"></span></a>
        <div class="w-layout-hflex flexblockmemberperks">
          <div class="scripts"><span class="fa textcommon"></span>Clarify Your Offer</div>
          <div class="scripts"><span class="fa textcommon"></span>Optimize Your Message</div>
          <div class="scripts"><span class="fa textcommon"></span>Convert Your Audience</div>
        </div>
      </div>
    </div>
    <div data-w-id="34239f0a-c1ca-2acf-c782-767626233e13" style="opacity:0" class="_1300 sectionstart">
      <div class="scripts">Stop Guessing</div>
      <a href="#workbook" class="scripts"><span class="fa"></span>Get Clarity</a>
      <p class="match1 textwhite">Your brand isn’t broken. <b>It’s just unclear.</b></p>
      <div id="w-node-_34239f0a-c1ca-2acf-c782-767626233e1d-e7795935" class="w-layout-layout commonstack services wf-layout-layout">
        <?php for ($i = 0; $i < 6; $i++): ?>
        <div class="w-layout-cell">
          <div class="commoncard link w-inline-block">
            <img loading="lazy" src="/wp-content/themes/common-mmxxv/images/common-alert.svg" alt="" class="commoncellimage">
            <div class="mid textwhite"><?php echo [
              "Costly Redesign Cycles",
              "Poor Brand Identity",
              "Ineffective Marketing",
              "Lack of Positioning",
              "Creative Uncertainty",
              "No Real Connection"
            ][$i]; ?></div>
            <div><?php echo [
              "Wasting money on redesigns that don’t solve real problems?",
              "Embarrassed by a brand that doesn’t reflect your value?",
              "Frustrated by marketing that looks nice but falls flat?",
              "Craving clarity and confidence about your positioning?",
              "Tired of second-guessing every creative decision without a clear direction?",
              "Wondering why your brand looks good but still isn’t connecting?"
            ][$i]; ?></div>
          </div>
        </div>
        <?php endfor; ?>
      </div>
    </div>
  </section>
  <section data-w-id="10cbc55e-5ca5-0185-04f3-c5246728be3b" class="section-common invert">
    <?php get_template_part('template-parts/cta-workbook'); ?>
    <div class="_1300 sectionstart">
        <div class="scripts">Need some help?</div>
        <a href="#cal" class="scripts"><span class="fa"></span> Let's Chat!</a>
        <p class="match1">Your brand deserves <b>more than guesswork.</b></p>
        <div id="w-node-_34239f0a-c1ca-2acf-c782-767626233e1d-e7795935" class="w-layout-layout commonstack services wf-layout-layout">
          <?php for ($i = 0; $i < 6; $i++): ?>
          <div class="w-layout-cell">
            <div class="commoncard link w-inline-block">
              <img loading="lazy" src="/wp-content/themes/common-mmxxv/images/logo.svg" alt="" class="commoncellimage">
              <div class="mid textdark"><?php echo [
                "Clarify Your Positioning",
                "Define Your Unique Value",
                "Create Consistent Messaging",
                "Boost Alignment and Efficiency",
                "Build a Future-Proof Brand Asset",
                "Focus Your Creative"
              ][$i]; ?></div>
              <div class="textdark"><?php echo [
                "You’ll end up with a sharp definition of what your brand stands for and why it matters—so every decision aligns with a clear purpose.",
                "You’ll identify what genuinely makes your brand different—not just visually, but strategically.",
                "You’ll end up with a sharp definition of what your brand stands for and why it matters—so every decision aligns with a clear purpose.",
                "Shareable strategy documentation means everyone—from marketers to designers—works toward the same goal, reducing confusion and wasted effort.",
                "The completed blueprint becomes a reusable guide for future campaigns, hires, and creative efforts—helping you scale without losing your core identity.",
                "Designers and copywriters will have what they need to create faster, stronger, and more strategic work—without constant revisions.."
              ][$i]; ?></div>
            </div>
          </div>
          <?php endfor; ?>
        </div>
      </div>
    <div data-w-id="42b22a58-cb58-635f-dbee-1114398e377c" class="sectionstart" style="margin-bottom:40px;">
      <div class="scripts">No bullsh*t</div>
      <p class="big"><b>This isn’t a sales pitch. It’s a standard.</b> There are no gimmicks, hacks, or generic advice here—just critical questions every brand must get clear on. If you already have clarity around your positioning, this workbook will validate you’re on the right track. If you don’t, that’s exactly why it exists—and we’re here to <a class="underline textdark" href="#" data-cal-link="hello.mattsmall/introduction-with-matt-small-commonwealth-creative" data-cal-namespace="" data-cal-config='{"layout":"month_view"}'><b>guide you through it</b></a> if needed.</p>
    </div>
    </div>
  </section>
      <?php get_template_part('template-parts/workbook-form'); ?>
            <?php get_template_part('template-parts/shift'); ?>
</article><!-- #post-<?php the_ID(); ?> -->
