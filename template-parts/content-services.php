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
        <div class="scripts withlove">made with <span class="fa middle textcommon"></span> in the commonwealth of virginia</div>
      </div>
      <div class="w-layout-hflex sectionstart">
        <div class="scripts">The Studio</div><a href="#" data-cal-link="hello.mattsmall/introduction-with-matt-small-commonwealth-creative" data-cal-namespace="" data-cal-config='{"layout":"month_view"}' class="pills">Introduction</a><a href="/contact" class="pills">Contact Us</a>

      </div>

	  </header><!-- .entry-header -->
    <div data-w-id="48429a23-c1b4-0afe-d7ca-65222c007cdf" style="opacity:0" class="_1300 entry-content">
	<?php the_commonwealth_theme_mmxxv_post_thumbnail(); ?>

					<?php
					the_content();

					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'the-commonwealth-theme-mmxxv' ),
							'after'  => '</div>',
						)
					);
					?>

				<?php if ( get_edit_post_link() ) : ?>
				<footer class="entry-footer">
					<?php
					edit_post_link(
						sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Edit <span class="screen-reader-text">%s</span>', 'the-commonwealth-theme-mmxxv' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							wp_kses_post( get_the_title() )
						),
						'<span class="edit-link">',
						'</span>'
					);
					?>
				</footer><!-- .entry-footer -->
			<?php endif; ?>
    </div>
				</section>
				<section data-w-id="10cbc55e-5ca5-0185-04f3-c5246728be3b" class="section-common invert">
	<?php get_template_part('template-parts/offerings'); ?>
	<div data-w-id="f054164c-46ae-9b22-9ce2-ed99c490d194" style="opacity:0" class="_1300 sectionstart">
      <div class="scripts">memberships</div>
      <a href="#" data-cal-link="hello.mattsmall/introduction-with-matt-small-commonwealth-creative" data-cal-namespace="" data-cal-config='{"layout":"month_view"}' class="scripts _478-hide"><span class="fa"></span> the catalyst for your marketing &amp; engineering</a>
      <div class="mid common66w" style="margin-bottom:10px;">Your membership grants unlimited access to every service we offer. Fixed cost. No contracts. Cancel or pause anytime. <span>Driven by the principles of design, your membership begins with a strategic kick-off meeting; we&#x27;ll evaluate brand + technology positioning, and define your KPIs. Get immediate access to your dashboard, submit unlimited requests and receive deliverables every 48-72 hours. </span>
        <a href="#" data-cal-link="hello.mattsmall/introduction-with-matt-small-commonwealth-creative" data-cal-namespace="" data-cal-config='{"layout":"month_view"}' class="underline"><span>Have Questions?</span></a>
      </div>
      <div id="w-node-_2599bb22-7a1b-6a83-8ec2-59e174badc26-e7795935" class="w-layout-layout commonstack wf-layout-layout">
        <div class="w-layout-cell">
          <div data-w-id="2599bb22-7a1b-6a83-8ec2-59e174badc28" style="opacity:0" class="commoncard bgwhite">
            <div class="w-layout-hflex commonflexwide">
              <h2 data-w-id="2599bb22-7a1b-6a83-8ec2-59e174badc2a" style="opacity:0">Old Dominion</h2>
              <ul role="list" class="commonlist"></ul>
              <div class="pills"><span class="fa"></span> Limited Availability</div>
            </div>
            <div class="smalls commonsans"><span class="mid">$1,395</span> / month*</div>
            <p class="mid">Perfect for organizations with an established brand who need design and content updates. Submit requests for any service (full-stack development excluded).</p>
            <div class="smalls">*Pause or Cancel Anytime. Military &amp; Non-Profit Discounts.</div>
            <a href="https://buy.stripe.com/14k4h2axrevC7kcbIR" target="_blank" class="button bgdark w-button">Start Today <span class="fa after"></span></a>
            <div id="w-node-_2599bb22-7a1b-6a83-8ec2-59e174badc3b-e7795935" class="w-layout-layout commonstack wf-layout-layout">
              <div class="w-layout-cell">
                <div class="scripts">
                  <div class="fa textcommon"></div>
                  <div class="icontext">Unlimited Requests &amp; Revisions</div>
                </div>
                <div class="scripts">
                  <div class="fa textcommon"></div>
                  <div class="icontext">Immediate Dashboard Access</div>
                </div>
                <div class="scripts">
                  <div class="fa textcommon"></div>
                  <div class="icontext">Direction by Design Workshop</div>
                </div>
                <div class="scripts">
                  <div class="fa textcommon"></div>
                  <div class="icontext">Average 48 hour delivery time</div>
                </div>
              </div>
              <div class="w-layout-cell">
                <div class="scripts">
                  <div class="fa textcommon"></div>
                  <div class="icontext">Online Content Management</div>
                </div>
                <div class="scripts">
                  <div class="fa textcommon"></div>
                  <div class="icontext">Dedicated Creative Expert</div>
                </div>
                <div class="scripts">
                  <div class="fa textcommon"></div>
                  <div class="icontext">1:1 Communication via Slack</div>
                </div>
                <div class="w-layout-hflex scripts">
                  <div class="fa textcommon"></div>
                  <a href="/499-web-development-sprints-members-only" class="icontext underline">$499 Development Sprints</a>
                </div>
              </div>
            </div>
            <div class="cardbottom">
              <a data-w-id="2599bb22-7a1b-6a83-8ec2-59e174badc67" href="#" data-cal-link="hello.mattsmall/introduction-with-matt-small-commonwealth-creative" data-cal-namespace="" data-cal-config='{"layout":"month_view"}' class="iconlink w-inline-block">
                <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0deg) rotateY(0deg) rotateZ(-90deg) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0deg) rotateY(0deg) rotateZ(-90deg) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0deg) rotateY(0deg) rotateZ(-90deg) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0deg) rotateY(0deg) rotateZ(-90deg) skew(0, 0);transform-style:preserve-3d" class="fa rocket"></div>
                <div class="icontext mid commonsans">Schedule An Introduction</div>
              </a>
            </div>
          </div>
        </div>
        <div class="w-layout-cell">
          <div data-w-id="d58e2865-e975-e494-7590-64cc7dbe37bc" style="opacity:0" class="commoncard bgdark">
            <div class="w-layout-hflex commonflexwide">
              <h2 data-w-id="d58e2865-e975-e494-7590-64cc7dbe37be" style="opacity:0">Founding Fathers</h2>
              <ul role="list" class="commonlist"></ul>
              <div class="pills bgcommon"><span class="fa"></span>Seats Available</div>
            </div>
            <div class="smalls commonsans"><span class="mid">$2,195</span> / month*</div>
            <p class="mid">Ideal for those seeking a blend of design and development to build an impactful brand. Full-stack design and development, unlimited access to everything. </p>
            <div class="smalls">*Pause or Cancel Anytime. Military &amp; Non-Profit Discounts.</div>
            <a href="https://buy.stripe.com/5kAbJu9tn2MU5c4bIS" target="_blank" class="button bgwhite w-button">Start Today<span class="fa after"></span></a>
            <div id="w-node-d58e2865-e975-e494-7590-64cc7dbe37cf-e7795935" class="w-layout-layout commonstack wf-layout-layout">
              <div class="w-layout-cell">
                <div class="scripts">
                  <div class="fa textcommon"></div>
                  <div class="icontext">Unlimited Requests &amp; Revisions</div>
                </div>
                <div class="scripts">
                  <div class="fa textcommon"></div>
                  <div class="icontext">Immediate Dashboard Access</div>
                </div>
                <div class="scripts">
                  <div class="fa textcommon"></div>
                  <div class="icontext">Direction by Design Workshop</div>
                </div>
                <div class="scripts">
                  <div class="fa textcommon"></div>
                  <div class="icontext">Average 48 hour delivery time</div>
                </div>
              </div>
              <div class="w-layout-cell">
                <div class="scripts">
                  <div class="fa textcommon"></div>
                  <div class="icontext">Full Stack Web Development</div>
                </div>
                <div class="scripts">
                  <div class="fa textcommon"></div>
                  <div class="icontext">Hosting &amp; Security Audits</div>
                </div>
                <div class="scripts">
                  <div class="fa textcommon"></div>
                  <div class="icontext">Dedicated Creative Expert</div>
                </div>
                <div class="scripts">
                  <div class="fa textcommon"></div>
                  <div class="icontext">1:1 Communication via Slack</div>
                </div>
              </div>
            </div>
            <div class="cardbottom">
              <a data-w-id="d58e2865-e975-e494-7590-64cc7dbe37fb" href="https://buy.stripe.com/5kAbJu9tn2MU5c4bIS" target="_blank" class="iconlink textwhite w-inline-block">
                <div class="actionpulse"></div>
                <div class="fa"></div>
                <div class="icontext mid commonsans">Sign Up Here</div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
	</section>
	<?php get_template_part('template-parts/reviews'); ?>
	<?php get_template_part('template-parts/cta-shop'); ?>
</article><!-- #post-<?php the_ID(); ?> -->
