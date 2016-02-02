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

<div id="content" ng-app="kidsLander">

	<section class="clearfix has-cards hero--small">

		<div class="wrap">

			<div class="col-lg--fourcol">

				<a href="http://sherman.library.nova.edu/sites/spotlight/series/storytimes/" class="col-sm--twelvecol col-md--sixcol col-lg--twelvecol card media menu__item" title="Storytime" onClick="_gaq.push(['_trackEvent', 'Kids Home', 'Click', 'Storyime]);">
		    		<img src="http://public.library.nova.edu/wp-content/uploads/2015/11/sharkey.jpg">
					<span class="menu__item__content">
						<h3 class="menu__item__title ">Storytimes <small>(See All)</small></h3>
						<span class="zeta">
							Enjoy books, songs, and activities that enhance early
							literacy skills and explore the world online with kid-friendly
							websites.
						</span>
					</span>
			    </a>


					<a href="http://sherman.library.nova.edu/sites/spotlight/series/ferro/" class="col-sm--twelvecol col-md--sixcol col-lg--twelvecol card media menu__item" title="Live at the Sherman Library" onClick="_gaq.push(['_trackEvent', 'Kids Home', 'Click', 'Live at the Sherman Library']);">
			    		<img src="http://public.library.nova.edu/wp-content/uploads/2015/11/live-at-the-sherman-library.jpg">
						<span class="menu__item__content">
							<h3 class="menu__item__title ">Live at the Sherman Library</h3>
							<span class="zeta">
								Children are invited to explore the excitement of literature
								through puppetry, theater, music, storytelling, and illustration.
							</span>
						</span>
				    </a>

			</div>

			<div class="col-lg--fourcol">

				<a href="//sherman.library.nova.edu/sites/spotlight/series/stem/" class="col-sm--twelvecol col-md--sixcol col-lg--twelvecol card media menu__item" onclick="_gaq.push(['_trackEvent', 'Kids Home', 'Click', 'STEM'])">
					<img src="http://sherman.library.nova.edu/sites/spotlight/files/2016/01/STEM-Spotlight.jpg" alt="Library STEM logo" />
					<span class="menu__item__content">
						<h3 class="menu__item__title">STEM</h3>
						<span class="zeta">Science, technology, engineering, and math at the Alvin Sherman Library</span>
					</span>
				</a>

				<a href="http://sherman.library.nova.edu/auth/index.php?aid=1202&url=http://alvinshermanfl.oneclickdigital.com/#search?search-source=advanced&page-size=60&sort-by=title&sort-order=asc&audience=childrens" class="col-sm--twelvecol col-md--sixcol col-lg--twelvecol card media menu__item" alt="OneClickdigital" title="OneClickdigital" onClick="_gaq.push(['_trackEvent', 'Features - Front Page', 'Click', 'Audio and E-Books (OneClick) - The Martian']);">
		    		<img src="http://public.library.nova.edu/wp-content/uploads/2016/02/part-time-indian.jpg" alt="">
					<span class="menu__item__content">
						<h3 class="menu__item__title">Audio and E-books <small>(OneClick)</small></h3>
						<span class="zeta">
							<b>Download bestsellers</b> like the Sherman Alexie's <b>The Absolutely True Diary of a Part-Time Indian</b> using any device with your library card.
						</span>
					</span>
		    </a>

			</div>

			<div class="col-lg--fourcol">


			<a href="http://sherman.library.nova.edu/sites/spotlight/lists/?for=kids" class="col-sm--twelvecol col-md--sixcol col-lg--twelvecol card media menu__item" title="Book Lists for Kids" onClick="_gaq.push(['_trackEvent', 'Kids Home', 'Click', 'Book Lists for Kids']);">
	    		<img src="http://public.library.nova.edu/wp-content/uploads/2016/02/princess-black.jpg">
				<span class="menu__item__content">
					<h3 class="menu__item__title ">Book Lists for Kids</h3>
					<span class="zeta">
						Let us help you find wonderful children's books -
						curated by us: awesome children's librarians.
					</span>
				</span>
		    </a>

				<a href="http://public.library.nova.edu/teachers/" class="col-sm--twelvecol col-md--sixcol col-lg--twelvecol card media menu__item" title="Homework Help" onClick="_gaq.push(['_trackEvent', 'Kids Home', 'Click', 'Teacher Resources']);">
		    		<img src="http://public.library.nova.edu/teachers/wp-content/uploads/sites/2/2015/09/tr-socialstudies.jpg" alt="">
					<span class="menu__item__content">
						<h3 class="menu__item__title">Homework Help <small>(K-12 Resources)</small></h3>
						<span class="zeta">
							A wealth of resources for every grade level, classroom lesson plans for elementary, middle and high school teachers, and even free online practice tests.
						</span>
					</span>
			    </a>

			</div>
		</div>

	</section>

	<div class="clearfix hero wrap" ng-controller="Events">

		<div class="col-md--sixcol">

			<div class="clearfix">
				<div class="col-md--twocol media">
					<img class="hide-accessible--sm" src="http://sherman.library.nova.edu/cdn/styles/css/public-global/media/event%282x%29.png" alt="" />
				</div>

				<div class="col-md--tencol">
					<h3>What's happening next <small><a class="link link--undecorated" href="http://public.library.nova.edu/events">(Events)</a></small></h3>
					<p>
						Here are a few <a href="http://sherman.library.nova.edu/sites/spotlight/event-type/childrens">children's programs</a> just around the corner.
					</p>
				</div>
			</div>

			<ul class="list list--alternate list--nowrap" ng-cloak>

				<li ng-repeat="program in programs | orderBy:orderProp | return: 'upcoming-events' | limitTo: 5">
					<a href="{{ program.url }}" class="link link--undecorated">
						{{ program.title | clean }}
					</a> <br>
					{{ program.custom_fields.event_start[0] | event: 'day' }}
					{{ program.custom_fields.event_start_time[0] | event: 'time' }}
				</li>

				<a href="http://public.library.nova.edu/events/">See All Events</a>
			</ul>
		</div>

		<div class="col-md--sixcol align-center">
			<section id="status" class="align-center clearfix">

			<!-- Library Hours
			======================
			-->	<a onClick="_gaq.push(['_trackEvent', 'Info Panels', 'Click', 'Hours']);" class="epsilon panel panel--status status-hours one-half" href="<?php echo get_permalink( 15 ); ?>">
					<span class="label">Library Hours</span>
				</a>

			<!-- Directions
			======================
			-->	<a onClick="_gaq.push(['_trackEvent', 'Info Panels', 'Click', 'Directions']);" class="epsilon panel panel--status status-directions  one-half" href="<?php echo get_permalink( 26 ); ?>">
					<span class="label">
						Directions
					</span>
				</a>

			<!-- Contact Us
			======================
			--> <a onClick="_gaq.push(['_trackEvent', 'Info Panels', 'Click', 'Contact']);" class="epsilon panel panel--status status-contact one-half" href="<?php echo get_permalink( 42 ); ?>">
					<span class="label">
						Contact Us
					</span>
				</a>

			<!-- Calendar
			======================
			--> <a onClick="_gaq.push(['_trackEvent', 'Info Panels', 'Click', 'Support']);" class="epsilon panel panel--status status-calendar one-half" href="<?php echo get_permalink( 149 ); ?>">
					<span class="label">
						Support
					</span>
				</a>

			</section>

		</div>

	</div>



</div>

<?php get_footer(); ?>
