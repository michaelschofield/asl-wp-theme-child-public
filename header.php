<!doctype html>

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> <!--Google Chrome Frame for IE-->
<html <?php language_attributes(); ?>><!--<![endif]-->

	<head>
	<!-- Metas
	======================
	--> <meta charset="utf-8">
		<title><?php wp_title(''); ?></title>


	<!-- Mobile Metas
	======================
	-->	<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<!-- Favicon
	======================
	-->	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/nsu.ico">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<!-- Wordpress Head Functions
	======================
	-->	<?php wp_head(); ?>

	<script>
		// loadCSS
		!function(e){"use strict";e.loadCSS=function(t,n,r){var i,l=e.document,o=l.createElement("link");if(n)i=n;else{var a=(l.body||l.getElementsByTagName("head")[0]).childNodes;i=a[a.length-1]}var s=l.styleSheets;o.rel="stylesheet",o.href=t,o.media="only x",i.parentNode.insertBefore(o,n?i:i.nextSibling);var f=function(e){for(var t=o.href,n=s.length;n--;)if(s[n].href===t)return e();setTimeout(function(){f(e)})};return o.onloadcssdefined=f,f(function(){o.media=r||"all"}),o}}(this);
		loadCSS( 'http://sherman.library.nova.edu/cdn/styles/css/public-global/uncritical.css' );
		loadCSS( 'http://sherman.library.nova.edu/cdn/styles/css/public-global/s--pls.css' );
	</script>

	<noscript>
		<link rel="stylesheet" href="http://sherman.library.nova.edu/cdn/styles/css/public-global/uncritical.css">
	</noscript>

	<style>
		.svg.svg--activity { float: left; width: 24px; margin-right: .5em;}
		.menu__item{overflow:hidden;padding:0; margin: .35% 0; height: 215px;}.menu__item__content{background-color:white;bottom:0;color:#444;height:61px;left:0;padding:1em;position:absolute;width:100%;-webkit-transition:all .2s ease-out;transition:all .2s ease-out}.menu__item__title{color:#313547;font-size:1.2rem;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}@media only screen and (min-width: 64em){.menu__item__title{font-size:1.5rem}}.menu__item:hover .menu__item__content,.menu__item:focus .menu__item__content{height:100%}.link--grade{color:#E1E8ED;font-weight:bold}.link--grade--pre{color:#E2624F}.link--grade--e{color:#50afdf}.link--grade--ms{color:#FFAE3D}.link--grade--hs{color:#21AABD}
		[ng\:cloak],[ng-cloak],.ng-cloak,[data-ng\:cloak],[data-ng-cloak],.data-ng-cloak,.empty, .login-error{display:none !important}
		.empty {display: none};
		.not-empty{};
		.overlayContainer { display: none;}
		.overlayBackground { top:0px; left:0px; padding-left:100px;position:absolute;z-index:1000;height:100%;width:100%;background-color:#808080;opacity:0.3;}
		.overlayContent { position:absolute; border: 1px solid #000; background-color:#fff;font-weight: bold;height: 100px;width: 300px;z-index:1000;text-align:center;}
	</style>

	</head>

	<body <?php body_class(); ?>>

	<?php get_template_part( 'partials/svg-icons' ); ?>
	<?php get_template_part( 'partials/alerts' ); ?>

	<a class="hide-accessible" href="#content">Skip to Content</a>

		<div id="container" ng-app="publicServices">

			<div class="menu menu--banner universal tinsley-gradient">
          <div class="wrap clearfix">

            <a class="link" href="http://www.nova.edu/" title="Nova Southeastern University">
              <picture class="logo logo--nsu">
                <source media="(max-width: 617px)" srcset="//sherman.library.nova.edu/cdn/media/images/logos/nsu-small.png" alt="Alvin Sherman Library, Research, and Information Technology Center">
                <img
                  alt="Alvin Sherman Library, Research, and Information Technology Center"
                  srcset="//sherman.library.nova.edu/cdn/media/images/logos/nsu.png"
                  data-src="//sherman.library.nova.edu/cdn/media/images/logos/nsu.png">
              </picture>
            </a>

              <a href="//sherman.library.nova.edu" title="Home - Alvin Sherman Library">
                <picture class="logo logo--asl">
                  <source media="(min-width: 618px)" srcset="//sherman.library.nova.edu/cdn/media/images/logos/sherman-library.png" alt="Alvin Sherman Library, Research, and Information Technology Center">
                  <img
                    alt="Alvin Sherman Library, Research, and Information Technology Center"
                    srcset="//sherman.library.nova.edu/cdn/media/images/logos/sherman-library.png"
                    data-src="//sherman.library.nova.edu/cdn/media/images/logos/sherman-library.png">
                </picture>
              </a>

          </div>
      </div><!--/.universal-->

		<input type="checkbox" class="checkbox-toggle" id="top-menu" aria-describedby="top-menu-toggle-description">
		<span class="hide-accessible" id="top-menu-toggle-description">Checking this box will open the top menu</span>

		<!-- Header
		======================
		-->	<header class="header <?php echo ( is_page() ? ( is_page( 'kids' ) || get_query_var( 'for' ) === 'kids' ? 'kids' : 'white' ) : 'white' ); ?>" role="banner" style="border-bottom: none;">

				<div id="inner-header" class="wrap clearfix">

					<label class="label label--hamburger" for="top-menu" title="Open the Menu"   onclick="ga( 'send', 'event', 'Context Menu', 'click', 'Hamburger' );">
						<svg class="svg svg--menu" fill="#000000" height="32" viewBox="0 0 24 24" width="32" xmlns="http://www.w3.org/2000/svg">
								<path d="M0 0h24v24H0z" fill="none"/>
								<path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
						</svg>
						<span>Menu</span>
					</label>

					<span class="pill-menu__title"><a class="link link--undecorated" href="//public.library.nova.edu/" alt="Public Homepage - Alvin Sherman Library"> Public Library Services</a> <?php if ( !is_home() ) { echo '&mdash; '; } asl_wp_theme_site_title(); ?></span>

					<ul class="menu--actions--public menu--actions--context">

						<li class="menu--actions--public__menu-item">
							<a class="link link--undecorated" href="//novacat.nova.edu/patroninfo/">My Account</a>
						</li>

						<li class="menu--actions--public__menu-item no-padding">
							<a class="button button--small small-text button--primary" href="//public.library.nova.edu/card">Get a Card</a>
						</li>

					</ul>

				</div><!--/.inner-header-->

			</header><!--/.header-->

			<nav class="top-menu" role="navigation">
				<div id="inner-menu" class="wrap clearfix">

					<div class="search">

						<?php echo sherman_wpsearch(); ?>

					</div>

					<?php wp_nav_menu( array('menu' => 'Top Menu' ) ); ?>
				</div>
			</nav>
