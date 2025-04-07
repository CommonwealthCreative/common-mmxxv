<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Commonwealth_Theme_MMXXV
 */

?>

	<footer id="colophon" class="site-footer">
	<section data-w-id="_9a1e6c50-45c9-aecd-a267-11ba7f010f84" class="section-common sectionstart">
    <div data-w-id="5c482834-e75e-e40c-87b5-677860f7a5cd" style="opacity:0" class="_1300">
      <div class="scripts">Next Steps</div>
      <div class="scripts"><span class="fa textcommon"></span> <span id="current-time"></span></div>
      <p class="jumbo commonserif">The catalyst for your marketing and engineering team.</p>
      <a href="/contact/" class="button bgwhite w-button">Start Here<span class="fa after"></span></a>
      
    </div>
    <div id="w-node-_57727a23-b52b-463c-a26c-dfb459c580d1-e7795935" class="w-layout-layout menuwrapper wf-layout-layout">
      <div class="w-layout-cell">
        <a href="/about-commonwealth-creative" class="wrapperlink w-inline-block">
          <div>Studio.</div>
          <div class="scripts">Learn about our process &amp; why we create.</div>
        </a>
      </div>
      <div class="w-layout-cell">
        <a href="/strategies-methods/" class="wrapperlink w-inline-block">
          <div>Services.</div>
          <div class="scripts">the catalyst for your marketing or engineering team.</div>
        </a>
      </div>
      <div class="w-layout-cell">
        <a href="/work" class="wrapperlink w-inline-block">
          <div>Portfolio.</div>
          <div class="scripts">Transforming design &amp; technology with disciplined creativity. </div>
        </a>
      </div>
      <div class="w-layout-cell">
        <a href="/the-codex" class="wrapperlink w-inline-block">
          <div>Codex.</div>
          <div class="scripts">A curated guide to our expertise.</div>
        </a>
      </div>
      <div class="w-layout-cell">
        <a href="/shop" class="wrapperlink w-inline-block">
          <div>Collection.</div>
          <div class="scripts">services &amp; essentials for immediate purchase.</div>
        </a>
      </div>
      <div class="w-layout-cell">
        <a href="/contact/" class="wrapperlink w-inline-block">
          <div>Contact.</div>
          <div class="scripts">Expect our response within 48 to 72 hours.</div>
        </a>
      </div>
      <div id="w-node-_1ca24a99-f003-ef19-6963-1c352e73f4a1-e7795935" class="w-layout-cell">
        <div class="commonflexwide">
          <div class="commonflexwide">
            <div class="scripts withlove last">made with <span class="fa middle textcommon"></span> in the commonwealth of virginia</div>
          </div>
        </div>
      </div>
      <div class="w-layout-cell">
        <div class="commonflexwide">
          <a href="https://www.instagram.com/hi_commonwealth/" target="_blank" class="scripts textdark"><span class="fa textcommon">@</span> hi_commonwealth</a>
          <a href="tel:8044241348" class="scripts textdark"><span class="fa textcommon"></span> 804-424-1348</a>
          <a href="mailto:hi@thecommonwealthcreative.com" class="scripts textdark"><span class="fa textcommon"></span> hi@thecommonwealthcreative.com</a>
        </div>
      </div>
    </div>
  </section>
	</footer><!-- #colophon -->
</div><!-- #page -->
 
<script type="text/javascript">
  (function (C, A, L) { let p = function (a, ar) { a.q.push(ar); }; let d = C.document; C.Cal = C.Cal || function () { let cal = C.Cal; let ar = arguments; if (!cal.loaded) { cal.ns = {}; cal.q = cal.q || []; d.head.appendChild(d.createElement("script")).src = A; cal.loaded = true; } if (ar[0] === L) { const api = function () { p(api, arguments); }; const namespace = ar[1]; api.q = api.q || []; if(typeof namespace === "string"){cal.ns[namespace] = cal.ns[namespace] || api;p(cal.ns[namespace], ar);p(cal, ["initNamespace", namespace]);} else p(cal, ar); return;} p(cal, ar); }; })(window, "https://app.cal.com/embed/embed.js", "init");
Cal("init", "15min", {origin:"https://cal.com"});
  // Important: Please add the following attributes to the element that should trigger the calendar to open upon clicking.
  // `data-cal-link="hello.mattsmall/15min"`
  // data-cal-namespace="15min"
  // `data-cal-config='{"layout":"month_view"}'`
  Cal.ns["15min"]("ui", {"styles":{"branding":{"brandColor":"#000000"}},"hideEventTypeDetails":false,"layout":"month_view"});
  </script>
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=67c2760655e5509ae779592c" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
function updateTime() {
  const options = {
    timeZone: 'America/New_York',
    month: 'long',
    day: 'numeric',
    year: 'numeric',
    hour: '2-digit',
    minute: '2-digit',
    second: '2-digit',
    hour12: false
  };

  const nowEST = new Date().toLocaleString('en-US', options);
  // toLocaleString returns something like "March 20, 2025, 14:05:09"
  const [date, time] = nowEST.split(', ');

  document.getElementById('current-time').innerText = `${date} ${time} ET`;
}

setInterval(updateTime, 1000);
updateTime();
</script>


<?php wp_footer(); ?>

</body>
</html>
