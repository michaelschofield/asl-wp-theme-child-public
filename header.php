<!doctype html>  

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> <!--Google Chrome Frame for IE-->

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><html dir="ltr" lang="en-US" class="no-js ie"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
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

	</head>
	
	<body <?php body_class(); ?>>

	<?php get_template_part( 'partials/svg-icons' ); ?>
	<?php get_template_part( 'partials/alerts' ); ?>

	<a class="hide-accessible" href="#content">Skip to Content</a>
	
		<div id="container">

		<div class="menu universal <?php echo ( is_page() ? ( is_page( 'kids' ) || get_query_var( 'for' ) === 'kids' ? 'kids' : 'tinsley-gradient' ) : 'tinsley-gradient' ); ?> ">
			<div class="wrap clearfix">

				<a class="nsu" href="//nova.edu/library/main/" title="<?php bloginfo('title'); ?>">
					<img src="http://sherman.library.nova.edu/cdn/styles/css/brand/logo.png" alt="Alvin Sherman Library, Research, and Information Technology Center">				
				</a>
				
			</div>				
		</div><!--/.universal-->

		<input type="checkbox" id="top-menu" class="checkbox-toggle" />

		<!-- Header
		======================
		-->	<header class="header <?php echo ( is_page() ? ( is_page( 'kids' ) || get_query_var( 'for' ) === 'kids' ? 'kids' : 'white' ) : 'white' ); ?>" role="banner" style="border-bottom: none;">
			
				<div id="inner-header" class="wrap clearfix">

					<div class="pill-menu">

						<ul>
							<li class="has-subnav primary">
								<label class="label" for="top-menu" title="Open the Menu">
									<svg class="svg svg--menu" viewBox="0 0 32 32"><use xlink:href="#icon-menu"></use></svg>
									<span class="hide-accessible">Menu</span>
								</label>
							</li>
							<li class="pill-menu__title">
								<a href="<?php echo bloginfo('url'); ?>">Public Library Services</a> <?php echo ( !is_home() ? '&mdash; ' . get_the_title() : '' ); ?> 
							</li>
						</ul>

					</div>

					<ul class="menu--actions--public">

						<li class="menu--actions--public__menu-item">
							<a href="//novacat.nova.edu/patroninfo/">My Account</a>
						</li>

						<li class="menu--actions--public__menu-item menu--actions__divider" aria-hidden="true">&nbsp;</li>

						<li class="menu--actions--public__menu-item">
							<a href="/hours/">Hours</a>
						</li>						

						<li class="menu--actions--public__menu-item menu--actions__divider" aria-hidden="true">&nbsp;</li>

						<li class="menu--actions--public__menu-item">
							<label class="label" for="top-menu" alt="Search the Library Website" title="Search the Library Website"><svg class="svg svg--search" viewBox="0 0 32 32"><use xlink:href="#icon-search"></use></svg> </label>
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
			

