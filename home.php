<?php get_header(); ?>

<style type="text/css">

.rack iframe {
  border: none;
  min-height: 300px;
  width: 100%;
}

.separator::before {
  left: 25%;
  right: 25%;
}

[ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak {
  display: none !important;
}

</style>

<ng-controller data-ng-controller="AdController as adc" data-ng-cloak data-audience="public">

  <section class="clearfix has-cards hero--small">

    <div class="clearfix wrap" data-ng-cloak>

        <div class="col-md--sixcol col-lg--fourcol">

          <h2 class="align-center delta no-margin hero--small separator separator--top">Feature</h2>

          <ng-repeat data-ng-repeat="ad in adc.ads | limitTo : 1" data-ng-cloak>
            <a class="link link--undecorated" ng-href="{{ ad.link }}?utm_source=pls&utm_medium=card&utm_campaign=ad-manager&utm_content={{ad.title}}">
              <article class="card">
                <div class="card__media">
                  <img ng-src="{{ad.media}}">
                </div>
                <header class="card__header">
                  <h2 class="card__title delta">{{ ad.title }}</h2>
                </header>
                <section class="card__content">
                  <p class="zeta">{{ ad.excerpt }}</p>
                </section>
              </article>
            </a>
          </ng-repeat>

          <ng-if data-ng-if="!adc.ads" data-ng-cloak>
            <a class="link link--undecorated" ng-href="http://sherman.library.nova.edu/auth/index.php?aid=1360">
              <article class="card">
                <div class="card__media">
                  <img ng-src="http://sherman.library.nova.edu/cdn/media/images/features/organic-life.jpg">
                </div>
                <header class="card__header">
                  <h2 class="card__title delta">Yum! <small>(Organic Life on Flipster)</small></h2>
                </header>
                <section class="card__content">
                  <p class="zeta">Flip through or download all the latest magazines through this cool service we provide.</p>
                </section>
              </article>
            </a>
          </ng-if>
        </div>

      <ng-controller class="col-md--sixcol col-lg--fourcol" data-ng-controller="ListController as lc" data-ng-cloak>
        <a class="link link--undecorated" href="http://sherman.library.nova.edu/sites/spotlight/lists">
          <h2 class="align-center delta no-margin hero--small separator separator--top">Book and Movie Lists</h2>
        </a>
        <ng-repeat data-ng-repeat="list in lc.lists | limitTo : 1">
          <a class="link link--undecorated" ng-href="{{ list.url }}?utm_source=pls&utm_medium=card&utm_campaign=listicle&utm_content={{list.title}}">
            <article class="card">
              <div class="card__media" data-ng-if="list.media">
                <img ng-src="{{list.media[0]}}">
              </div>
              <header class="card__header">
                <h2 class="card__title delta" data-ng-class="{ 'no-margin' : !list.media }">{{ list.title }}</h2>
              </header>
              <section class="card__content">
                <p class="zeta">{{ list.excerpt }}</p>
              </section>
            </article>
          </a>
        </ng-repeat>

        <ng-if data-ng-if="!lc.lists" data-ng-show="!lc.lists" data-ng-cloak>
          <a class="link link--undecorated" ng-href="http://sherman.library.nova.edu/sites/spotlight/list/social-activism-past-present-future/">
            <article class="card">
              <div class="card__media">
                <img ng-src="http://sherman.library.nova.edu/sites/spotlight/files/2016/11/9781423119548_p0_v3_s1200x630-e1481909015751.jpg">
              </div>
              <header class="card__header">
                <h2 class="card__title delta">Social Activism, Past and Present ... The Future is You</h2>
              </header>
              <section class="card__content">
                <p class="zeta">
                  Periods of social unrest can be difficult to understand and especially to live through.
                  This book list highlights some some of the people and events that have brought about change in the world.</p>
              </section>
            </article>
          </a>
        </ng-if>

        <a class="link" href="http://sherman.library.nova.edu/sites/spotlight/lists">More lists</a>

      </ng-controller>

      <ng-controller class="col-md--twelvecol col-lg--fourcol" data-ng-controller="EventController as ec" data-audience="public">

        <a class="link link--undecorated" href="http://sherman.library.nova.edu/sites/spotlight/events">
          <h2 class="align-center delta no-margin hero--small separator separator--top">Programs and Events</h2>
        </a>

        <ng-repeat data-ng-repeat="event in ec.events">
          <article role="article">
            <a ng-href="{{ event.url }}?utm_source=pls&utm_medium=card&utm_campaign=event-list&utm_content={{event.title}}" class="link link--undecorated">
              <div class="card">
                <span class="card__color-code" data-ng-class="{ 'card__color-code--kids' : event.audience === 'kids', 'card__color-code--teens' : event.audience === 'teens' }"></span>
                <header class="card__header">
                  <h3 class="card__title zeta no-margin">{{ event.title }}</h3>
                   <div class="small-text">
                    <time class="time">
                      <b>{{ event.start }} {{ event.end ? ' - ' + event.end : '' }}</b>
                      <span class="time__hours" style="color:#999;" data-ng-if="event.until">{{ event.from }} {{ event.until ? ' - ' + event.until : '' }}</span>
                    </time>
                  </div>
                </header>
              </div>
            </a>
          </article>
        </ng-repeat>

        <a class="link" href="http://sherman.library.nova.edu/sites/spotlight/events">More events</a>

      </ng-controller>

      </div><!--/.wrap-->
  </section>

  <nav id="panels" class="clearfix menu--panels" role="navigation">

  		<a class="panel one-third compose" href="//sherman.library.nova.edu/sites/spotlight/lists/">
  			<span class="panel__link">Book and Movie Lists</span>
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

  <div class="has-cards">
  	<div class="clearfix hero wrap">

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
  					<a class="button button--default button--small" href="http://sherman.library.nova.edu/auth/index.php?aid=1360">
              <span data-ng-if="!ac.info">Log in</span>
              <span data-ng-if="ac.info">Browse</span>
            </a>

  				</div>

  			</div>

        <div class="rack" id="flipster"></div>

        <script src="//sherman.library.nova.edu/cdn/scripts/modules/flipster/flipster.js"></script>
        <script>flipster.init( '#flipster' )</script>

  			</section>

  		</div>

  		<div class="col-md--sixcol col-lg--fourcol">

  			<form class="card form" action="http://systems.library.nova.edu/form/view.php?id=26" method="post" role="form" style="border-left: 3px solid #e2624f; box-shadow: none;">

  					<h2 class="delta no-margin" style="color: #e2624f;">Newsletter</h2>

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

        <ng-repeat data-ng-repeat="ad in adc.ads | limitTo : 3" data-ng-if="$index > 0">

            <a class="link link--undecorated" ng-href="{{ ad.link }}?utm_source=pls&utm_medium=card&utm_campaign=ad-manager&utm_content=below-fold">
              <article class="card">
                <div class="card__media">
                  <img ng-src="{{ad.media}}">
                </div>
                <header class="card__header">
                  <h2 class="card__title delta">{{ ad.title }}</h2>
                </header>
                <section class="card__content">
                  <p class="zeta">{{ ad.excerpt }}</p>
                </section>
              </article>
            </a>

        </ng-repeat>

  		</div>

  	</div>
  </div><!--/.has-cards-->

</ng-controller>
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
