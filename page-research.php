<?php get_header(); ?>

<ng-controller data-ng-controller="AdController as adc" data-audience="research" data-ng-cloak>
  <ng-repeat data-ng-repeat="ad in adc.ads | limitTo: 1">
  <section class="clearfix has-background-image" style="background: url( {{ad.media }}) center right; background-size: 50%;">
  	<div class="col-md--sixcol has-background background-base">
  		<div class="col-md--tencol col--centered clearfix hero">
  			<header>
  				<span class="gamma">{{ ad.title }}</span>
  			</header>
  			<p class="epsilon">
  				{{ ad.excerpt }}
  			</p>
        <a ng-href="{{ ad.link }}" class="button button--primary--alt">Try it Out</a>
  		</div>
  	</div>
  </section>
  </ng-repeat>
</ng-controller>

<nav id="panels"class="menu--panels clearfix" role="navigation">

	<a class="panel one-third genealogy" href="http://sherman.library.nova.edu/e-library/index.php?action=subject&col=n&cat=gee" title="Genealogy Resources">
		<span class="panel__link">Genealogy</span>
	</a>



	<a class="panel one-third bus" href="http://sherman.library.nova.edu/e-library/index.php?action=subject&cat=kid&col=p" title="Business Databases and Resources in the Alvin Sherman E-Library">
		<span class="panel__link">Homework Helpers</span>
	</a>



	<a class="panel one-third piechart" href="http://sherman.library.nova.edu/e-library/index.php?action=subject&col=p&cat=zbu" title="Business Databases and Resources in the Alvin Sherman E-Library">
		<span class="panel__link">Business</span>
	</a>



	<a class="panel one-fourth heart" href="http://sherman.library.nova.edu/e-library/index.php?action=subject&cat=med&col=p" title="Health and Medicine Databases and Resources in the Alvin Sherman E-Library">
		<span class="panel__link">Health</span>
	</a>



	<a class="panel one-fourth compose" href="http://sherman.library.nova.edu/e-library/index.php?action=subject&col=p&cat=ztr" title="Teacher Databases and Resources in the Alvin Sherman E-Library">
		<span class="panel__link">Teacher Resources</span>
	</a>


	<a class="panel one-fourth guides" href="http://nova.campusguides.com/" title="Topical Guides and Tutorials made by NSU Librarians">
		<span class="panel__link">Library Guides</span>
	</a>



	<a class="panel one-fourth research" href="//sherman.library.nova.edu/e-library/index.php?col=p" title="Databases and Resources in the Alvin Sherman E-Library">
		<span class="panel__link">All Databases</span>
	</a>


</nav>


<?php get_template_part( 'partials/ask-a-librarian' ); ?>

<?php // get_template_part( 'template--hero-librarylearn' ); ?>



<?php get_footer(); ?>
