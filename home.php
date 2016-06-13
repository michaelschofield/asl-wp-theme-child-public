<?php get_header(); ?>

<style type="text/css">

.no-padding {
	padding: 0;
}

.form__submit--inside {
	position: absolute;
	right: 0;
	top: -.5em;
}

.modal header, .modal footer {
	padding: 0;
}
.modal .modal-inner {
	background: #f5f5f5;
	border-radius: 2px;
	padding: 1em;
}

.modal .modal-close:before {
	background: rbga(0, 0, 0, .5);
}

.modal .modal-close:after {
	background: #f5f5f5;
}

.card--excerpt {
	height: 439px;
}

[class^="col-"] {
	margin-bottom: 1em;
}
.menu__item{overflow:hidden;padding:0; margin: .35% 0; height: 215px;}.menu__item__content{background-color:white;bottom:0;color:#444;height:61px;left:0;padding:1em;position:absolute;width:100%;-webkit-transition:all .2s ease-out;transition:all .2s ease-out}.menu__item__title{color:#313547;font-size:1.2rem;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}@media only screen and (min-width: 64em){.menu__item__title{font-size:1.5rem}}.menu__item:hover .menu__item__content,.menu__item:focus .menu__item__content{height:100%}.link--grade{color:#E1E8ED;font-weight:bold}.link--grade--pre{color:#E2624F}.link--grade--e{color:#50afdf}.link--grade--ms{color:#FFAE3D}.link--grade--hs{color:#21AABD}

</style>

	<form action="http://novacat.nova.edu/search/X/" role="form" name="novacat_search" id="novacat_search" method="get" class="background-base has-background form no-margin" role="form">
		<div class="center-grid clearfix col-md--eightcol" style="padding: 2em 0 1em;">
			<ul>
				<li class="form__field no-margin">

					<input class="form__input form__input--transparent form__input--full-width input--large search__search-field--transparent epsilon no-margin" id="SEARCH" name="SEARCH" placeholder="Search the Library Catalog" type="search" required style="border-bottom: 1px solid white;">
					<input class="button button--small button--transparent form__submit--inside small-text" type="submit" value="<?php echo esc_attr__('Submit') ?>"/>
				    <label class="align-right form__label clearfix zeta" for="SEARCH"><span class="hide-accessible">Search the Library Catalog</span> <span class="small-text">( <a href="#what-am-i-searching">What am I searching?</a> )</span></label>


				</li>
			</ul>
		</div>

	</form>

	<section class="clearfix has-cards hero--small" ng-app="publicServices">

		<div class="wrap" ng-controller="AdController as adc">

			<div class="col-md--twelvecol col-lg--eightcol" style="align-items: center; display: flex; justify-content: center; height: 439px;" ng-if=!adc.ads>
				<blockquote>
					<p>“She sounds like someone who spends a lot of time in libraries, which are the best sorts of people.”</p>
					<cite>Catherynne M. Valente</cite>
				</blockquote>
			</div>

			<div data-ng-repeat="ad in adc.ads | limitTo : 2">

				<div class="col-md--sixcol col-lg--fourcol">

					<article class="card card--excerpt">
						<div class="card__media">
							<a ng-href="{{ ad.link }}">
								<img ng-src="{{ad.media}}">
							</a>
						</div>

						<header class="card__header">
							<a ng-href="{{ ad.link }}" class="link link--undecorated _link-blue">
								<h2 class="menu__item__title">{{ ad.title }}</h2>
							</a>
						</header>

						<section class="content no-margin">
							{{ ad.excerpt }}
						</section>

					</article>

				</div>

			</div>

			<a class="col-sm--twelvecol col-md--sixcol col-lg--fourcol card media menu__item" alt="Magazines through Flipster" data-ng-cloak title="Flipster" href="http://sherman.library.nova.edu/auth/index.php?aid=1250&url=http://web.b.ebscohost.com/eon/results?sid=ee9edc8b-94d4-4ef1-ad56-c70e10e92f29@sessionmgr114&vid=1&hid=109&bquery=Organic Life&bdata=JmRiPWVvbiZjbGkwPUVIMSZjbHYwPVkmdHlwZT0wJnNpdGU9ZW9uLWxpdmU=" onClick="_gaq.push(['_trackEvent', 'Features - Front Page', 'Click', 'Yum (Organic Life)']);">
					<img src="//sherman.library.nova.edu/cdn/media/images/features/organic-life.jpg">
				<span class="menu__item__content">
					<h3 class="menu__item__title">
						Yum! <small>(Organic Life on Flipster)</small>
					</h3>
					<span class="zeta">
						<b>Sign in</b> with just your library card and
						read them for free.
					</span>
				</span>
			</a>

		<a class="col-sm--twelvecol col-md--sixcol col-lg--fourcol card media menu__item" alt="OneClickdigital" data-ng-cloak title="OneClickdigital" href="http://sherman.library.nova.edu/sites/spotlight/databases/oneclickdigital/" onClick="_gaq.push(['_trackEvent', 'Features - Front Page', 'Click', 'Audio and E-Books (OneClick) - The Martian']);">
    		<img src="http://public.library.nova.edu/wp-content/uploads/2015/11/see-me-cover.jpg" alt="">
			<span class="menu__item__content">
				<h3 class="menu__item__title">Audio and E-books <small>(OneClick)</small></h3>
				<span class="zeta">
					<b>Download bestsellers</b> like the Nicholas Spark's <b>See Me</b> using any device with your library card.
				</span>
			</span>
	    </a>

	    </div><!--/.wrap-->
	</section>


	<nav id="panels" class="clearfix menu--panels" role="navigation">

		<a class="panel one-third compose" href="//sherman.library.nova.edu/sites/spotlight/lists/">
			<span class="panel__link">What to Read</span>
			<!--<span class="panel__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>-->
		</a>

		<a class="panel one-third event" href="//sherman.library.nova.edu/sites/spotlight/events/">
			<span class="panel__link">Programs and Events</span>
		</a>

		<a class="panel one-third research" href="<?php echo get_permalink( 161 );?>">
			<span class="panel__link">Research</span>
		</a>
		<a class="panel one-fourth kids" href="<?php echo get_permalink( 72 ); ?>" title="<?php echo get_the_title( 72 ); ?>">
			<span class="panel__link">Kids</span>
		</a>

		<a class="panel one-fourth teens" href="<?php echo get_permalink( 137 ); ?>" title="<?php echo get_the_title( 137 ); ?>">
			<span class="panel__link">Teens</span>
		</a>

		<a class="catalog one-fourth panel" href="<?php echo get_permalink( 118 ); ?>" title="<?php echo get_the_title( 118 ); ?>">
			<span class="panel__link">Collection</span>
		</a>

		<a class="panel one-fourth help" href="<?php echo get_permalink( 142 ); ?>" title="<?php echo get_the_title( 142 ); ?>">
			<span class="panel__link">Help</span>
		</a>

</nav>

<?php get_template_part( 'partials/info-panels' ); ?>

<div class="has-cards hero">
	<div class="clearfix wrap">

		<div class="col-md--sixcol col-lg--eightcol">

			<section class="card--alt">

			<div class="hero clearfix">

				<div class="col-lg--sixcol media">
					<img src="http://sherman.library.nova.edu/sites/spotlight/files/2015/01/all_devices_541.png" alt="Example of what Flipster looks like in the browser, on  phones, and on tablets." width="541" height="272" class="alignnone size-full wp-image-4275" />
				</div>

				<div class="col-lg--sixcol">
					<h2 class="gamma">Magazines!</h2>
					<p class="zeta no-margin">
						You can now get all of your magazines for free on your phone, your tablet, or in the browser.
					</p>
					<a class="button button--default button--small" href="http://0-auth.novasoutheastern.org.novacat.nova.edu/go/redirect.php?aid=1360&url=http://search.ebscohost.com/login.aspx?authtype=ip,uid&custid=nsfl&profile=eon">Log In</a>

				</div>

			</div>

			<nav class="media--gallery clearfix" role="navigation">
				<a href="http://search.ebscohost.com.ezproxylocal.library.nova.edu/login.aspx?direct=true&db=eon&bquery=rolling+stone&cli0=EH1&clv0=Y&type=0&site=eon-live">
					<img class="col-sm--sixcol col-md--threecol" src="http://sherman.library.nova.edu/images/magazines/rolling-stone.jpg">
				</a>

				<a href="http://search.ebscohost.com.ezproxylocal.library.nova.edu/login.aspx?direct=true&db=eon&bquery=%26quot%3bTime%26quot%3b&cli0=EH1&clv0=Y&type=0&site=eon-live">
					<img class="col-sm--sixcol col-md--threecol" src="http://sherman.library.nova.edu/images/magazines/time.jpg">
				</a>

				<a href="http://search.ebscohost.com.ezproxylocal.library.nova.edu/login.aspx?direct=true&db=eon&bquery=Entertainment+Weekly&cli0=EH1&clv0=Y&type=0&site=eon-live">
					<img class="col-sm--sixcol col-md--threecol" src="http://sherman.library.nova.edu/images/magazines/entertainment-weekly.jpg">
				</a>

				<a href="http://search.ebscohost.com.ezproxylocal.library.nova.edu/login.aspx?direct=true&db=eon&bquery=Consumer+Reports&cli0=EH1&clv0=Y&type=0&site=eon-live">
					<img class="col-sm--sixcol col-md--threecol" src="http://sherman.library.nova.edu/images/magazines/consumer-reports.jpg">
				</a>
			</nav>

			<p class="clearfix zeta no-margin">
				See <a href="http://0-auth.novasoutheastern.org.novacat.nova.edu/go/redirect.php?aid=1360&url=http://search.ebscohost.com/login.aspx?authtype=ip,uid&custid=nsfl&profile=eon">more magazines</a>.
			</p>

			</section>

		</div>

		<div class="col-md--sixcol col-lg--fourcol">

			<form class="card form no-margin" action="http://systems.library.nova.edu/form/view.php?id=26" method="post" role="form" style="border-left: 3px solid #e2624f; box-shadow: none;">

					<h2 class="delta" style="color: #e2624f;">Newsletter</h2>

					<p>
						Our newsletter is the <strong>best</strong> way to hear about
						upcoming events, awesome new services, and special opportunities.
					</p>

					<ul class="no-margin">
						<li class="align-right form__field">
							<label class="form__label hide-accessible" for="element_2">
								Email Address
							</label>
							<input style="border-bottom: 1px solid #313547; border-radius: 0;" id="element_2" class="form__input input--transparent form__input--full-width" type="email" name="element_2" placeholder="your@email.com"/>
							<a href="http://sherman.library.nova.edu/sites/newsletter/" class="link link--undecorated small-text">Read this month's issue.</a>
						</li>

						<li class="form__field no-margin">
							<input class="button button--flat coral zeta " id="saveForm" type="submit" value="Sign up" name="submit" />
						</li>

						<input type="hidden" value="26" name="form_id" />
						<input type="hidden" value="2" name="submit" />

					</ul>

			</form>

		</div>

	</div>
</div><!--/.has-cards-->


<section class="modal semantic-content " id="what-am-i-searching" tabindex="-1" role="dialog" aria-labelledby="modal-label" aria-hidden="true">

	    <div class="modal-inner">

	        <header id="modal-label">
	            <h3>What am I searching?</h3>
	        </header>

	        <div class="modal-content epsilon clearfix">
	        	<p class="no-margin">
	        		Using <strong>NovaCat</strong>, our catalog, you are searching
	        		the <strong>whole library collection</strong> &mdash; books, media, periodicals,
	        		and electronic resources. For real time electronic journal search, you might
	        		try <a href="http://atoz.ebsco.com/Search/nseu?lang=en&lang.menu=en&lang.subject=en">Journal Finder</a> | <a href="#!">Close this tip</a>
	        	</p>
	        </div>
	    </div>

	    <a href="#!" class="modal-close" title="Close this modal" data-close="Close" data-dismiss="modal">×</a>

</section>


<?php get_footer(); ?>
