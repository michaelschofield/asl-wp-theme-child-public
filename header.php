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
		loadCSS( '//sherman.library.nova.edu/cdn/styles/css/public-global/uncritical.css' );
		loadCSS( '//sherman.library.nova.edu/cdn/styles/css/public-global/s--pls.css' );

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

    form[id="novacat_search"] {
      height: 0;
      visibility: hidden;
      -moz-transition: all .2s ease-out;
      -webkit-transition: all .2s ease-out;
      transition: all .2s ease-out;
    }
    input[id="search-hero"]:checked ~ form[id="novacat_search"] {
      height: auto;
      visibility: visible;
    }
	</style>

    <base href="/">

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

            <li class="menu--actions--public__menu-item icon">
              <a href="//sherman.library.nova.edu/sites/hours" target="_self"   onclick="ga( 'send', 'event', 'Context Menu', 'click', 'Hours Icon' );">
                <svg class="svg" style="position: relative; width: 22px; height: 24px; fill:#444; "viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/>
                    <path d="M0 0h24v24H0z" fill="none"/>
                    <path d="M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
                </svg>
                <span class="icon__label">Hours</span>
              </a>
            </li>

            <li class="menu--actions--public__menu-item icon">
              <button class="button button--link link--drop-down" href="top" data-ng-click="librariesMenu.toggle()">

                <svg class="svg svg--activity" xmlns="http://www.w3.org/2000/svg" viewBox="10 15 75 75" style="width: 22px; height: 24px; fill: #444;">
    						  <path d="M70.907 48.925c3.273-.662 6.546-1.866 9.82-2.528.064-.014.124-.05.168-.104.045-.054.07-.12.07-.182v-.667c0-.13-.107-.218-.24-.19-3.272.662-6.545 1.865-9.82 2.527-.132.027-.24.154-.24.287v.666c.002.064.025.12.07.156.046.035.108.048.172.035zM80.895 47.77c-.044-.037-.104-.05-.168-.037-3.273.663-6.546 1.866-9.82 2.528-.133.028-.24.155-.24.288v.666c0 .063.024.12.07.156.045.035.105.05.168.036 3.274-.662 6.548-1.867 9.822-2.53.066-.013.126-.05.168-.103.044-.05.07-.116.07-.182v-.667c0-.063-.025-.118-.07-.154zM70.907 53.887c3.273-.663 6.546-1.866 9.82-2.53.065-.013.125-.05.168-.103.043-.05.07-.115.07-.182v-.667c0-.063-.025-.12-.07-.155-.044-.036-.104-.05-.168-.036-3.273.663-6.546 1.867-9.82 2.53-.127.025-.24.16-.24.286v.666c0 .13.107.217.24.19z"></path>
    						  <path d="M83.424 39.514c-5.058.438-10.116 2.877-15.174 3.326-5.058-.45-10.116-2.888-15.174-3.326-.404-.035-.783.103-1.07.38-.284.28-.442.66-.442 1.064v21.736c0 .404.158.782.443 1.075.286.29.666.468 1.07.503 4.85.42 9.7 2.678 14.552 3.258.18.067.376.093.58.074.013 0 .027-.003.04-.004.015 0 .03.003.043.004.203.02.4-.007.58-.073 4.85-.58 9.702-2.836 14.553-3.257.404-.035.783-.212 1.07-.504.284-.294.442-.672.442-1.076V40.958c0-.403-.158-.785-.443-1.063-.288-.28-.667-.416-1.07-.38zM66.697 64.38c-4.037-.65-8.073-2.307-12.11-2.943l.002-18.712c4.035.636 8.07 2.293 12.107 2.942V64.38zm3.106 0V45.667c4.037-.65 8.072-2.307 12.108-2.942l.002 18.712c-4.036.636-8.072 2.292-12.11 2.943z"></path>
    						  <path d="M55.773 46.396c3.273.662 6.546 1.866 9.82 2.528.064.013.125 0 .17-.036.045-.035.07-.092.07-.156v-.666c0-.133-.106-.26-.24-.287-3.273-.663-6.546-1.866-9.82-2.528-.13-.027-.24.06-.24.19v.668c0 .062.026.128.07.182.046.055.106.09.17.104zM55.773 48.877c3.273.662 6.548 1.867 9.822 2.53.063.012.123-.002.168-.037.045-.037.07-.093.07-.156v-.666c0-.133-.107-.26-.24-.287-3.273-.66-6.546-1.864-9.82-2.527-.064-.014-.124 0-.168.036-.045.035-.07.09-.07.153v.668c0 .066.027.132.07.183.042.052.103.09.168.104zM65.593 53.887c.133.026.24-.06.24-.19v-.667c0-.127-.113-.26-.24-.287-3.273-.662-6.546-1.866-9.82-2.53-.064-.012-.124 0-.168.037-.045.036-.07.092-.07.155v.667c0 .066.027.13.07.182.043.054.103.09.168.104 3.274.663 6.547 1.866 9.82 2.53zM70.907 56.25c3.273-.662 6.546-1.866 9.82-2.53.064-.012.124-.05.168-.103.045-.054.07-.12.07-.183v-.667c0-.13-.107-.22-.24-.19-3.272.66-6.545 1.865-9.82 2.527-.132.026-.24.155-.24.287v.667c.002.064.025.12.07.156.046.036.108.05.172.037zM80.895 55.093c-.044-.036-.104-.048-.168-.035-3.273.662-6.546 1.866-9.82 2.527-.133.028-.24.155-.24.287v.667c0 .06.024.12.07.155.045.035.105.048.168.035 3.274-.662 6.548-1.866 9.822-2.527.066-.015.126-.054.168-.104.044-.054.07-.117.07-.184v-.667c0-.064-.025-.122-.07-.157zM80.727 57.54c-3.273.66-6.546 1.864-9.82 2.527-.127.025-.24.16-.24.286v.667c0 .13.107.22.24.19 3.273-.662 6.546-1.866 9.82-2.53.065-.01.125-.05.168-.103.043-.05.07-.116.07-.182v-.666c0-.065-.025-.12-.07-.157-.044-.034-.104-.047-.168-.034zM55.535 53.435c0 .063.025.13.07.183.044.053.104.09.168.104 3.273.663 6.546 1.867 9.82 2.53.064.012.125-.002.17-.037.045-.036.07-.092.07-.156v-.667c0-.132-.106-.26-.24-.287-3.273-.662-6.546-1.866-9.82-2.528-.13-.027-.24.06-.24.19.002.222.002.445.002.667zM55.773 56.203c3.273.66 6.548 1.865 9.822 2.527.063.013.123 0 .168-.035.045-.036.07-.094.07-.156v-.668c0-.132-.107-.26-.24-.287-3.273-.66-6.546-1.865-9.82-2.527-.064-.013-.124 0-.168.035-.045.035-.07.093-.07.156v.666c0 .066.027.13.07.183.042.05.103.088.168.103zM65.593 60.067c-3.273-.663-6.546-1.866-9.82-2.528-.064-.014-.124 0-.168.034-.045.036-.07.092-.07.156v.666c0 .065.027.13.07.182.043.053.103.092.168.104 3.273.663 6.546 1.867 9.82 2.53.133.027.24-.06.24-.19v-.668c0-.127-.113-.26-.24-.287z"></path>
    						  <path d="M76.422 68.066c-2.296.653-4.67 1.33-7.09 1.64-.296.078-.602.118-.912.118-.056 0-.113-.002-.17-.004-.056.002-.112.004-.168.004-.31 0-.616-.04-.912-.12-2.42-.31-4.794-.984-7.09-1.638-2.504-.713-4.87-1.386-7.195-1.588-.933-.08-1.806-.494-2.462-1.164-.564-.58-.908-1.31-1.02-2.092H47.1V44.44h2.25v-3.482c0-.994.405-1.958 1.112-2.648.67-.654 1.556-1.016 2.49-1.016.106 0 .21.005.316.014 2.748.238 5.43 1.003 8.025 1.742 2.42.69 4.708 1.342 6.958 1.566 2.174-.217 4.388-.835 6.717-1.498l-9.746-6.603-13.196-8.94c-.61-.413-1.316-.622-2.022-.622s-1.412.21-2.023.623l-13.196 8.94-13.197 8.938c-1.312.89-1.89 2.53-1.426 4.043.466 1.516 1.865 2.547 3.448 2.547h3.27V59.65c-1.68.235-2.99 1.628-3.096 3.347h-.174c-1.99 0-3.605 1.613-3.605 3.605v6.836c0 1.992 1.615 3.607 3.605 3.607h52.788c1.99 0 3.605-1.615 3.605-3.607v-6.336c-1.168.28-2.356.617-3.578.964zm-34.73-4.843H35.89V44.44h5.8v18.783z"></path>
    						</svg>
                <span class="icon__label">Libraries</span>
              </button>

              <div class="menu__sub-menu" data-ng-class="{ 'menu__sub-menu--open' : librariesMenuToggle }" style="border-left: none;">

                <h4 class="hide-accessible">
                  Nova Southeastern University Libraries
                </h4>

                <nav class="menu__sub-menu__content no-padding" role="navigation">

                  <a style="display: block; padding: .5em 1em; border-left: 3px solid #313547;" href="//sherman.library.nova.edu">Alvin Sherman Library</a>
                  <ul class="list list--alternate">
                  <li style="border-left: 3px solid #ffae3d; background-color:#f5f5f5;" >&ndash; <a style="padding: .5em 1em;" href="http://public.library.nova.edu">Public</a></li>
                  </ul>
                  <a style="display: block; padding: .5em 1em; border-left: 3px solid #006699;" href="http://nova.edu/hpdlibrary">Health Professions Division Library</a>
                  <a style="display: block; padding: .5em 1em; border-left: 3px solid #42b6f0;" href="//nova.campusguides.com/oclibrary">Oceanographic Library</a>
                  <a style="display: block; padding: .5em 1em; border-left: 3px solid #3366CC;" href="//nova.campusguides.com/law/library">Panza Maurer Law Library</a>

                </nav>

              </div>
            </li>

            <li class="menu--actions--public__menu-item icon">
              <label for="search-hero" class="button button--link link--drop-down">
                <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg" style="width: 22px; height: 24px; fill: #444;">
                    <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                    <path d="M0 0h24v24H0z" fill="none"/>
                </svg>

                <span class="icon__label">Search</span>
              </label>
            </li>

            <?php if(!isset($_SESSION[AUTH]['user'])) : ?>
            <li data-ng-if="!ac.info" class="menu--actions--public__menu-item icon">
              <a href="//sherman.library.nova.edu/auth/" target="_self">
                <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg" style="width: 22px; height: 24px; fill: #444;">
                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                    <path d="M0 0h24v24H0z" fill="none"/>
                </svg>
                <span class="icon__label">Account</span>
              </a>
            </li>
            <?php endif; ?>

           <li data-ng-if="ac.info" class="menu--actions--public__menu-item menu icon" ng-cloak style="background-color: white;">

               <button class="button button--link link--drop-down" href="top" data-ng-click="userMenu.toggle()">

                 <svg class="svg svg--user" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="width: 22px; height: 24px; fill: #21aabd;">
                      <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/>
                      <path d="M0 0h24v24H0z" fill="none"/>
                  </svg>

                 <span class="icon__label">Account</span>
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
                           <p class="small-text no-margin" ng-if="ac.activity.checkouts">You have <a ng-href="checkouts">{{ac.activity.checkouts}} {{ac.activity.checkoutNumber}}</a> checked out.</p>
                           <p class="small-text no-margin" ng-if="ac.activity.holds">You have <a ng-href="holds">{{ac.activity.holds}} {{ac.activity.holdNumber}}</a> on hold.</p>
                   </section>

                   <section class="menu__sub-menu__content" ng-if="!ac.activity">
                       Welcome back, {{ac.info.display_name}}!
                   </section>

                   <footer class="clearfix menu__sub-menu__footer" ng-cloak>

                       <div class="col-sm--sixcol">
                           <a ng-href="https://sherman.library.nova.edu/account"  class="button button--flat button--small button--primary small-text" style="color: white;" onclick="ga( 'send', 'event', 'Context Menu', 'click', 'My Account' );">My Account</a>
                       </div>

                       <div class="col-sm--sixcol align-right">
                           <a href="https://sherman.library.nova.edu/auth/logout.php" class="button button--flat button--small button--default small-text" onclick="ga( 'send', 'event', 'Context Menu', 'click', 'Log Out' );">Log Out</a>
                       </div>
                   </footer>
               </div>

           </li>

           <li data-ng-if="ac.info" class="menu--actions--public__menu-item menu menu--expanded hide-accessible--sm" ng-cloak style="min-width: 4em; border-left: 1px solid #ddd;">
             <span class="menu--expanded__text">
               {{ ac.info.display_name }}
               <span class="menu--expanded__menu" style="position: absolute; left: 10px; bottom: 5px; font-family: Arial, 'sans-serif'; font-size: 10px;">
                 <a class="link link--undecorated" href="//sherman.library.nova.edu/auth/logout.php" style="color: #21aabd;" target="_self">
                   <svg class="svg" style="width: 12px; height: 12px; top: 3px; position: relative;"><use xlink:href="#icon-sign-out"></use></svg>
                   Log out
                 </a>
               </span>
             </span>
           </li>
					</ul>

				</div><!--/.inner-header-->

			</header><!--/.header-->

      <!-- Search -->
      <input type="checkbox" class="checkbox-toggle" id="search-hero" aria-describedby="search-toggle-description" <?php echo ( is_front_page() ? 'checked' : '' );?>>
      <span class="hide-accessible" id="search-toggle-description">Checking this box will open the search options</span>

      <form ng-attr-action="{{ searchtype === 'libweb' ? ( 'http://sharksearch.nova.edu/search' | trusted ): ( 'https://novacat.nova.edu/search/X' | trusted ) }}" role="form" name="novacat_search" id="novacat_search" method="get" class="form has-cards no-margin clearfix search-hero" role="form">

        <div class="clearfix hero">
          <div class="col--centered clearfix col-sm--tencol col-md--eightcol">

            <ul class="clearfix">

              <div class="col-sm--twelvecol col-md--fourcol">
                <li class="form__field no-margin">
                  <label class="hide-accessible" for="searchtype">Search type</label>
                  <div class="epsilon form__select form__input--full-width no-margin">
                    <select
                      name="searchtype"
                      id="searchtype"
                      ng-model="searchtype"
                      ng-init="searchtype = 'X'">
                      <option value="libweb" selected>Library Website</option>
                      <optgroup label="Catalog">
                        <option value="X">Keyword</option>
                        <option value="a">Author</option>
                        <option value="t">Title</option>
                        <option value="d">Subject</option>
                        <option value="c">Number</option>
                      </optgroup>
                    </select>
                  </div>
                </li>
              </div>

              <div class="col-sm--twelvecol col-md--eightcol">
                <li class="form__field no-margin">
                  <span ng-if="searchtype !== 'libweb'">
                    <label for="searcharg" class="hide-accessible">Search the library catalog</label>
                    <input class="card form__input form__input--full-width input--large epsilon no-margin" id="searcharg" name="searcharg" placeholder="Search the Library Catalog" type="search" required data-ng-model="searcharg" data-ng-change="searchtext=searcharg">
                    <button class="button button--small epsilon form__submit form__submit--inside no-margin button--disabled" data-ng-class="{ 'button--primary--alt' : searcharg, 'button--disabled' : !searcharg}" type="submit" value="Search">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" height="24" viewBox="0 0 24 24" width="24">
                          <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                          <path d="M0 0h24v24H0z" fill="none"/>
                      </svg>
                      <span class="button__text">Search</span>
                    </button>
                  </span>

                  <span ng-if="searchtype === 'libweb'">
                    <label for="searcharg" class="hide-accessible">Search the library website</label>

                    <input type="hidden" name="client" value="aslritc">
                    <input type="hidden" name="proxystylesheet" value="main">
                    <input type="hidden" name="output" value="xml_no_dtd">
                    <input type="hidden" name="access" value="p">
                    <input type="hidden" name="ie" value="UTF-8">
                    <input type="hidden" name="oe" value="UTF-8">
                    <input type="hidden" name="site" value="aslritc" id="sopswap">

                    <input class="card form__input form__input--full-width input--large epsilon no-margin" id="searcharg" name="q" placeholder="Search the Library Website" type="search" required data-ng-model="q">

                    <button class="button button--small epsilon form__submit form__submit--inside no-margin button--disabled" data-ng-class="{ 'button--primary--alt' : q, 'button--disabled' : !q}" type="submit" value="Search">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" height="24" viewBox="0 0 24 24" width="24">
                          <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                          <path d="M0 0h24v24H0z" fill="none"/>
                      </svg>
                      <span class="button__text">Search</span>
                    </button>

                  </span>
                </li>
              </div>

              <p class="small-text no-margin" ng-show="searchtype !== 'X' && searchtype !== 'libweb'" style="float: left;"><svg class="svg svg--info" viewBox="0 0 32 32"><path class="path1" d="M18.286 24.571v-2.857q0-0.25-0.161-0.411t-0.411-0.161h-1.714v-9.143q0-0.25-0.161-0.411t-0.411-0.161h-5.714q-0.25 0-0.411 0.161t-0.161 0.411v2.857q0 0.25 0.161 0.411t0.411 0.161h1.714v5.714h-1.714q-0.25 0-0.411 0.161t-0.161 0.411v2.857q0 0.25 0.161 0.411t0.411 0.161h8q0.25 0 0.411-0.161t0.161-0.411zM16 8.571v-2.857q0-0.25-0.161-0.411t-0.411-0.161h-3.429q-0.25 0-0.411 0.161t-0.161 0.411v2.857q0 0.25 0.161 0.411t0.411 0.161h3.429q0.25 0 0.411-0.161t0.161-0.411zM27.429 16q0 3.732-1.839 6.884t-4.991 4.991-6.884 1.839-6.884-1.839-4.991-4.991-1.839-6.884 1.839-6.884 4.991-4.991 6.884-1.839 6.884 1.839 4.991 4.991 1.839 6.884z"></path></svg> You can only choose formats with a <mark>keyword</mark> search.</p>

              <div class="align-right" ng-if="searchtype !== 'libweb'">
                <a class="link link--undecorated small-text" href="https://novacat.nova.edu/search/X#refined" class="small-text" ng-show="!searcharg">Advanced Search</a>
              </div>

            </ul>
          </div>
        </div><!--/.wrap-->

        <input type="hidden" id="sortdropdown" name="sortdropdown" value="r" ng-disabled="searchtype === 'X' || searchtype === 'c'"/>
      </form><!--/#novacat_search-->

			<nav class="top-menu" role="navigation">
				<div id="inner-menu" class="wrap clearfix">

					<div class="search">

						<?php echo sherman_wpsearch(); ?>

					</div>

					<?php wp_nav_menu( array('menu' => 'Top Menu' ) ); ?>
				</div>
			</nav>
