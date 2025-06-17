<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Commonwealth_Theme_MMXXV
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> data-wf-page="67c2760655e5509ae7795935" data-wf-site="67c2760655e5509ae779592c">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Instrument Sans:regular,500,700,italic,500italic,700italic","Instrument Serif:regular,italic"]  }});</script>
  <script>
window['_fs_host'] = 'fullstory.com';
window['_fs_script'] = 'edge.fullstory.com/s/fs.js';
window['_fs_org'] = 'o-23BYGK-na1';
window['_fs_namespace'] = 'FS';
!function(m,n,e,t,l,o,g,y){var s,f,a=function(h){
return!(h in m)||(m.console&&m.console.log&&m.console.log('FullStory namespace conflict. Please set window["_fs_namespace"].'),!1)}(e)
;function p(b){var h,d=[];function j(){h&&(d.forEach((function(b){var d;try{d=b[h[0]]&&b[h[0]](h[1])}catch(h){return void(b[3]&&b[3](h))}
d&&d.then?d.then(b[2],b[3]):b[2]&&b[2](d)})),d.length=0)}function r(b){return function(d){h||(h=[b,d],j())}}return b(r(0),r(1)),{
then:function(b,h){return p((function(r,i){d.push([b,h,r,i]),j()}))}}}a&&(g=m[e]=function(){var b=function(b,d,j,r){function i(i,c){
h(b,d,j,i,c,r)}r=r||2;var c,u=/Async$/;return u.test(b)?(b=b.replace(u,""),"function"==typeof Promise?new Promise(i):p(i)):h(b,d,j,c,c,r)}
;function h(h,d,j,r,i,c){return b._api?b._api(h,d,j,r,i,c):(b.q&&b.q.push([h,d,j,r,i,c]),null)}return b.q=[],b}(),y=function(b){function h(h){
"function"==typeof h[4]&&h[4](new Error(b))}var d=g.q;if(d){for(var j=0;j<d.length;j++)h(d[j]);d.length=0,d.push=h}},function(){
(o=n.createElement(t)).async=!0,o.crossOrigin="anonymous",o.src="https://"+l,o.onerror=function(){y("Error loading "+l)}
;var b=n.getElementsByTagName(t)[0];b&&b.parentNode?b.parentNode.insertBefore(o,b):n.head.appendChild(o)}(),function(){function b(){}
function h(b,h,d){g(b,h,d,1)}function d(b,d,j){h("setProperties",{type:b,properties:d},j)}function j(b,h){d("user",b,h)}function r(b,h,d){j({
uid:b},d),h&&j(h,d)}g.identify=r,g.setUserVars=j,g.identifyAccount=b,g.clearUserCookie=b,g.setVars=d,g.event=function(b,d,j){h("trackEvent",{
name:b,properties:d},j)},g.anonymize=function(){r(!1)},g.shutdown=function(){h("shutdown")},g.restart=function(){h("restart")},
g.log=function(b,d){h("log",{level:b,msg:d})},g.consent=function(b){h("setIdentity",{consent:!arguments.length||b})}}(),s="fetch",
f="XMLHttpRequest",g._w={},g._w[f]=m[f],g._w[s]=m[s],m[s]&&(m[s]=function(){return g._w[s].apply(this,arguments)}),g._v="2.0.0")
}(window,document,window._fs_namespace,"script",window._fs_script);
</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-LB8XS1ZM8J"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-LB8XS1ZM8J');
</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'the-commonwealth-theme-mmxxv' ); ?></a>

	<header id="masthead" class="site-header">
	<div class="nav">
    <div data-w-id="7fb4cf61-2382-682f-7cb2-284068e39ef8" style="-webkit-transform:translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="mainmenu">
      <a href="/" aria-current="page" class="brand w-nav-brand w--current"></a>
      <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="scripts marquee">We'll work with you at zero cost.  <a href="/workbook">Start for free.</a>
      </div>
      <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="w-layout-hflex menulinks">
        <a data-w-id="fc42e7c7-5726-5abd-9dbe-667675c4b3a3" href="/about-commonwealth-creative" class="iconlink txtwhite w-inline-block">
          <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0deg) rotateY(0deg) rotateZ(-90deg) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0deg) rotateY(0deg) rotateZ(-90deg) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0deg) rotateY(0deg) rotateZ(-90deg) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0deg) rotateY(0deg) rotateZ(-90deg) skew(0, 0);transform-style:preserve-3d" class="fa rocket"></div>
          <div class="icontext mid commonsans">Studio</div>
        </a>
        <a data-w-id="e3ff1cd7-d770-6730-e4b6-ec3b79fd886b" href="/work" class="iconlink txtwhite w-inline-block">
          <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0deg) rotateY(0deg) rotateZ(-90deg) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0deg) rotateY(0deg) rotateZ(-90deg) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0deg) rotateY(0deg) rotateZ(-90deg) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0deg) rotateY(0deg) rotateZ(-90deg) skew(0, 0);transform-style:preserve-3d" class="fa rocket"></div>
          <div class="icontext mid commonsans">Portfolio</div>
        </a>
        <a data-w-id="5ecb0cc9-52a0-ec6f-09cb-06fab1a45636" href="/memberships" class="iconlink txtwhite w-inline-block">
          <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0deg) rotateY(0deg) rotateZ(-90deg) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0deg) rotateY(0deg) rotateZ(-90deg) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0deg) rotateY(0deg) rotateZ(-90deg) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0deg) rotateY(0deg) rotateZ(-90deg) skew(0, 0);transform-style:preserve-3d" class="fa rocket"></div>
          <div class="icontext mid commonsans">Memberships</div>
        </a>
      </div>
      <a data-w-id="e3df6391-7e3e-099a-9c70-372060beb19a" href="#menu" class="iconmenu w-inline-block">
        <div data-is-ix2-target="1" class="menulottie" data-w-id="146d8f02-e8cc-3d7f-9e98-c9206564cdba" data-animation-type="lottie" data-src="/wp-content/themes/common-mmxxv/documents/commonmenu.json" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="0.6666666666666666" data-duration="0.6666666666666666" data-ix2-initial-state="0"></div>
      </a>
    </div>
    <div id="menu" style="width:100%;height:0px" class="menu">
      <div id="w-node-f8135ced-e24f-e465-e4b3-d6f5690be90a-e7795935" class="w-layout-layout menuwrapper wf-layout-layout">
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
        <div id="w-node-_3567789c-4a33-e1e3-9060-2ad9adb03735-e7795935" class="w-layout-cell">
          <div class="commonflexwide">
            <div class="scripts withlove last">made with <span class="fa middle"></span> in the commonwealth of virginia</div>
          </div>
        </div>
        <div class="w-layout-cell">
          <div class="commonflexwide">
            <a href="https://www.instagram.com/hi_commonwealth/" target="_blank" class="scripts textdark"><span class="fa">@</span> hi_commonwealth</a>
            <a href="tel:8044241348" class="scripts textdark"><span class="fa"></span> 804-424-1348</a>
            <a href="mailto:hi@thecommonwealthcreative.com" class="scripts textdark"><span class="fa"></span> hi@thecommonwealthcreative.com</a>
          </div>
        </div>
      </div>
    </div>
  </div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
