<?php get_header(); ?>

<h1 class="hide-accessible"><?php the_title(); ?></h1>

<article class="ad ad--hero ad--transparent card clearfix no-margin" style="background-color: #110a12;">

  <div class="clearfix wrap">
    <div class="col-md--sixcol align-center ad__media">
      <a href="http://sherman.library.nova.edu/sites/spotlight/series/teen-movie-club/?utm_source=publib&utm_medium=banner&utm_campaign=teen-movie-club">
        <img src="//sherman.library.nova.edu/cdn/media/images/ads/across-the-universe.jpg" alt="Across the Universe" />
      </a>
    </div>

    <div class="col-md--sixcol">

      <div class="col-md--tencol col--centered ad__copy">

        <header class="card__header">
          <a class="link link--undecorated _link--blue" href="http://sherman.library.nova.edu/sites/spotlight/series/teen-movie-club/?utm_source=publib&utm_medium=banner&utm_campaign=teen-movie-club">
            <h2 class="menu__item__title" style="color: white;">Teen Movie Club</h2>
          </a>
        </header>

        <section class="no-margin">
          <p class="epsilon" style="color: white;">
            Do you like movies? Join the club! We'll discuss a new genre each month, and then vote on a movie to watch.
          </p>
        </section>

        </div>
    </div>

    </div>
  </article>

<nav id="panels" class="menu--panels clearfix" role="navigation">

	<a class="panel one-fourth help" href="http://public.library.nova.edu/teens/volunteer">
		<span class="panel__link">Volunteer</span>
	</a>

	<a class="panel one-fourth books" href="//sherman.library.nova.edu/sites/spotlight/lists?for=teens">
		<span class="panel__link">Book Picks for Teens</span>
	</a>

	<a class="panel one-fourth research" href="http://sherman.library.nova.edu/e-library/index.php?action=subject&cat=kid&col=p">
		<span class="panel__link">Homework Helpers</span>
	</a>

	<a class="panel one-fourth bus" href="http://sherman.library.nova.edu/e-library/index.php?action=subject&col=p&cat=ztr">
		<span class="panel__link">Resources for Teachers</span>
	</a>

</nav>


<div id="content" class="has-cards">
	<div class="wrap clearfix">

    <section id="programs-and-events" class="col-md--eightcol hero" data-ng-controller="EventController as ec" data-audience="teens">

      <article data-ng-repeat="event in ec.events" class="card clearfix">
        <span class="card__color-code card__color-code--teens"></span>
        <header class="card__header" style="margin-bottom: .5em;">
          <a ng-href="{{ event.url }}" class="link link--undecorated _link-blue">
            <h3 class="menu__item__title" style="margin-bottom: .25em;">{{ event.title }}</h3>
          </a>
          <p class="no-margin small-text" >
            <time class="time">
              <span itemprop="startDate"><b>{{ event.start }}</b></span>
              <span class="time__hours" style="color: #999;">{{ event.from }} - {{ event.until }}</span>
            </time>

            <span ng-bind-html="event.series"></span>
          </p>
        </header>

        <section class="content">
          <p class="no-margin">{{ event.excerpt }}</p>
        </section>

      </article>

    </section>


	</div><!--/#inner-content-->
</div><!--/#content-->



<?php get_footer(); ?>
