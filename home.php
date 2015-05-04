<?php get_header(); ?>

<style type="text/css">

body {
	background-color: #f5f5f5;
}

.no-padding {
	padding: 0;
}

.form__submit--inside {
	position: absolute;
	right: 0;
	top: -.5em;
}

.hero--small {
	padding-bottom: 1em;
	padding-top: 1em;
}

@media only screen and (min-width: 64em ) {
._col--adjust .col-md--fourcol:not(.col--last) {
	margin-right: .75em;
}
}

@media only screen and (min-width:77.5em) {
._col--adjust .col-lg--fourcol:not(.col--last) {
	margin-right: 1.2333em;
}
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

	<section class="clearfix hero--small _col--adjust wrap">
		
		<article class="col-md--fourcol col-lg--fourcol media">
			<a class="shadow" href="http://public.library.nova.edu/brad-meltzer/">
				<img src="http://public.library.nova.edu/wp-content/uploads/2015/04/the-presidents-shadow.jpg" alt="Brad Meltzer">
			</a>				

			<section class="card--alt">
				<h2 class="align-center gamma">Brad Meltzer</h2>
				<p class="zeta">
					<strong>This Father's Day</strong>, spend the afternoon with <a href="#">Brad Meltzer</a> for 
					the <strong>launch</strong> and signing of his latest novel!
				</p>

				<div class="align-center">
				<a class="button button--default button--small" href="http://public.library.nova.edu/brad-meltzer/">More Info</a>
				</div>
			</section>

		</article>

		<article class="col-md--fourcol col-lg--fourcol media">

			<a class="shadow" href="//sherman.library.nova.edu/sites/spotlight/event/circle-friends-annual-meeting-featuring-american-bombshells/">
				<img src="http://public.library.nova.edu/wp-content/uploads/2015/05/american-bombshells.jpg" alt="Selections from the de la Cruz Exhibit">
			</a>

			<section class="card--alt">
				<h2 class="align-center gamma">American Bombshells</h2>
				<p class="zeta">
					<strong><a href="//www.americanbombshells.com">The American Bombshells</a></strong> perform USO-style at the 
					the <a href="//sherman.library.nova.edu/sites/friends">Circle of Friends</a> 2015 Annual Meeting.
				</p>

				<div class="align-center">
				<a class="button button--default button--small" href="//sherman.library.nova.edu/sites/spotlight/event/circle-friends-annual-meeting-featuring-american-bombshells/">Dinner and a Show</a>
				</div>
			</section>

		</article>

		<article class="col-md--fourcol col-lg--fourcol media">

			<a class="shadow" href="http://sherman.library.nova.edu/sites/spotlight/event/summer-reading-rewards-early-registration/">
				<img src="http://public.library.nova.edu/wp-content/uploads/2015/04/summer-reading.jpg" alt="Summer Programs">
			</a>

			<section class="card--alt">
				<h2 class="align-center gamma">Early Signup</h2>
				<p class="zeta">
					<strong>Summer is right around the corner</strong>! Get a head start
					and signup early for our <strong>reading reward program</strong> starting
					May 11!
				</p>

				<div class="align-center">
				<a class="button button--default button--small" href="//public.library.nova.edu/summer/">Save the Date</a>
				</div>
			</section>

		</article>

	</section>
		
	
	<nav id="panels" class="clearfix menu--panels" role="navigation">

		<a class="panel one-third compose" href="//sherman.library.nova.edu/sites/spotlight/lists/">
			<span class="panel__link">What to Read</span>
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

<div class="hero clearfix wrap">

	<div class="col-md--eightcol">

		<section class="card--alt">

		<div class="hero clearfix">

			<div class="sixcol first media">
				<img src="http://sherman.library.nova.edu/sites/spotlight/files/2015/01/all_devices_541.png" alt="Example of what Flipster looks like in the browser, on  phones, and on tablets." width="541" height="272" class="alignnone size-full wp-image-4275" />
			</div>

			<div class="sixcol last">
				<h2 class="gamma">Drop your subscriptions</h2>
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

	<div class="col-md--fourcol col--last">

		<article class="card--alt clearfix" role="article">

				<header>
					<a href="http://www.nova.edu/library/enews/enews-2015-05-01.html"><b>Monthly Newsletter</b></a>
					<h3 class="hide-accessible">E-News</h3>
				</header>

				<section>
					<p class="zeta no-margin"><b>May 2015 &mdash;</b> 
						Slide into summer by signing up for our Summer Reading Rewards program for adults, children, and teens. You can easily sign up <a href="//public.library.nova.edu/summer">online</a>
						any time between May 11 and June 4.
						<a href="http://www.nova.edu/library/enews/enews-2015-05-01.html">See what's happening</a>.
					</p>
				</section>

		</article>

		<article class="media">
			<br>
			<a class="shadow" href="//sherman.library.nova.edu/sites/spotlight/event/edible-prose-host-author-janet-lynn-roseman-phd/">
				<img src="http://public.library.nova.edu/wp-content/uploads/2015/05/janet-lynn-joan-of-arc.jpg" alt="Janet Lynn Roseman">
			</a>				

			<section class="card--alt">
				<h2 class="align-center gamma">Janet Lynn Roseman</h2>
				<p class="zeta">
					<abbr title="Nova Southeastern University">NSU</abbr> Professor Janet Lynn Roseman, PhD, presents her new book <strong>If Joan of 
					Arc had Cancer: Finding Courage, Faith, and Healing from History's Most Inspirational Warrior</strong>.
				</p>
				<div class="align-center">
					<a class="button button--default button--small" href="//sherman.library.nova.edu/sites/spotlight/event/edible-prose-host-author-janet-lynn-roseman-phd/">Details</a>
				</div>
			</section>

		</article>

	</div>

</div>


<?php get_template_part( 'partials/info-panels' ); ?> 

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
