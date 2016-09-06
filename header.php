<!doctype html>

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> <!--Google Chrome Frame for IE-->
<html <?php language_attributes(); ?> ng-app="publicServices"><!--<![endif]-->

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

	<body <?php body_class(); ?> ng-controller="ApplicationController as ac">

	<?php get_template_part( 'partials/svg-icons' ); ?>
	<?php get_template_part( 'partials/alerts' ); ?>

	<a class="hide-accessible" href="#content">Skip to Content</a>

		<div id="container">

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

            <?php if(!isset($_SESSION[AUTH]['user'])) : ?>
              <li data-ng-if="!ac.info" class="menu--actions--public__menu-item no-padding" ng-cloak>
                <a class="button button--small small-text button--primary" href="https://sherman.library.nova.edu/auth/index.php?sites_url=http://public.library.nova.edu">Log In</a>
               </li>

              <li data-ng-if="!ac.info" class="menu--actions--public__menu-item" ng-cloak>
                <a class="button button--small small-text button--link" href="//public.library.nova.edu/card">Get a Card</a>
              </li>
             <?php endif; ?>

            <li data-ng-if="ac.info" class="menu--actions--public__menu-item menu" ng-cloak>

                <button class="button button--link link--drop-down" href="top" for="user-menu" data-ng-click="userMenu.toggle()">

                     <svg class="svg svg--user" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                         <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/>
                         <path d="M0 0h24v24H0z" fill="none"/>
                     </svg>

                    <span class="hide-accessible">Account</span>

                </button>

                <div class="menu__sub-menu" data-ng-class="{ 'menu__sub-menu--open' : userMenuToggle }">

                    <section ng-if="ac.activity.fees" class="alert alert--warning no-margin">
                        <p class="align-center small-text no-margin">
                            You have <a target="_self" href="/fees/">{{ac.activity.fees}} {{ac.activity.feeNumber}} ({{ac.activity.balance}})</a>
                        </p>
                    </section>

                    <section class="menu__sub-menu__content" ng-if="ac.activity">
                      <h4 class="zeta" style="margin-bottom: .25em;">
                        {{ac.info.display_name}} <br>
                        <span class="small-text" ng-if="ac.info.email">{{ac.info.email}} <br></span>
                      </h4>
                            <p class="small-text no-margin" ng-if="ac.activity.checkouts">You have <a ng-href="//sherman.library.nova.edu/account/checkouts">{{ac.activity.checkouts}} {{ac.activity.checkoutNumber}}</a> checked out.</p>
                            <p class="small-text no-margin" ng-if="ac.activity.holds">You have <a ng-href="//sherman.library.nova.edu/account/holds">{{ac.activity.holds}} {{ac.activity.holdNumber}}</a> on hold.</p>
                    </section>

                    <section class="menu__sub-menu__content" ng-if="!ac.activity">
                        Welcome back, {{ac.info.display_name}}!
                    </section>

                    <footer class="clearfix menu__sub-menu__footer" ng-cloak>

                        <div class="col-sm--sixcol">
                            <a ng-href="//sherman.library.nova.edu/account"  class="button button--flat button--small button--primary small-text" style="color: white;" onclick="ga( 'send', 'event', 'Context Menu', 'click', 'My Account' );">My Account</a>
                        </div>

                        <div class="col-sm--sixcol align-right">
                            <a href="https://sherman.library.nova.edu/auth/logout.php" class="button button--flat button--small button--default small-text" onclick="ga( 'send', 'event', 'Context Menu', 'click', 'Log Out' );">Log Out</a>
                        </div>
                    </footer>
                </div>

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
