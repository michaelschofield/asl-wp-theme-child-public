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

				<input class="form__input form__input--transparent form__input--full-width input--large search__search-field--transparent epsilon no-margin" id="SEARCH" name="SEARCH" placeholder="Find the Perfect Story" type="search" required style="border-bottom: 1px solid white;">
				<input class="button button--small button--transparent form__submit--inside small-text" type="submit" value="<?php echo esc_attr__('Submit') ?>"/>							
			    <label class="align-right form__label clearfix zeta" for="SEARCH"><span class="hide-accessible">Search the Library Catalog</span> <span class="small-text">( <a href="#what-am-i-searching">What am I searching?</a> )</span></label>
			    

			</li>
		</ul>
	</div>

</form>	

<div id="content">

<section class="clearfix hero--small _col--adjust wrap">
	
	<div class="col-md--sixcol col-lg--fourcol media">

		<a class="panel event" href="http://sherman.library.nova.edu/sites/spotlight/event-type/childrens/" style="width: 100%; margin-bottom: 1em;">
			<span class="panel__link">Children's Programs</span>
		</a>

		<article role="article">
			<a class="shadow" href="http://public.library.nova.edu/brad-meltzer/">
				<img src="http://public.library.nova.edu/wp-content/uploads/2015/06/lobe-the-brain.jpg" alt="A child poking a 3D model of the brain">
			</a>				

			<section class="card--alt">
				<h2 class="align-center gamma">Science Kids</h2>
				<p class="zeta">
					Hands-on science demonstrations, experiments, which help unleash
					children's inner mad scientists! Mwuahaha.
				</p>

				<div class="align-center">
				<a class="button button--default button--small" href="http://sherman.library.nova.edu/sites/spotlight/series/science-kids/">It's Alive!</a>
				</div>

			</section>
		</article>
	</div>

	<div class="col-md--sixcol col-lg--eightcol col--last">
		<?php echo do_shortcode( '[event tax="event_type" slug="childrens" num="4"]');?>
		<div class="align-right spacer small-text">
			<a href="http://sherman.library.nova.edu/sites/spotlight/event-type/childrens/">Find more <strong>family-friendly</strong> things to do!</a>
		</div>
	</div>


</section>

<section class="clearfix hero--small wrap">
	<div class="col-md--sixcol col-lg--fourcol media">

		<a class="panel one-third compose" href="//sherman.library.nova.edu/sites/spotlight/lists?for=kids" style="width: 100%; margin-bottom: 1em;">
			<span class="panel__link">Favorite Books for Kids</span>
		</a>

		<article role="article">
			<a class="shadow" href="http://sherman.library.nova.edu/sites/spotlight/list/ordinary-people-change-world/">
				<img src="http://public.library.nova.edu/wp-content/uploads/2015/06/ordinary-people.jpg" alt="The books of ordinary people change the world series">
			</a>				

			<section class="card--alt">
				<h2 class="align-center gamma">Ordinary People Change the World</h2>
				<p class="zeta">
					Brad Meltzer‘s Ordinary People Change the World series is a super way to bring American history to life. These books are illustrated by multiple Eisner Award nominee (and Harvey Award winner) Christopher Eliopoulos.
				</p>

				<div class="align-center">
				<a class="button button--default button--small" href="http://sherman.library.nova.edu/sites/spotlight/list/ordinary-people-change-world/">Check 'em out!</a>
				</div>

			</section>
		</article>
	</div>

	<div class="col-md--eightcol col--last">
		<section class="card--alt clearfix" role="article">

			<h3>We ♥ lists</h3>
			<p>
				If librarians could do only one thing, we would make lists of our favorite things. <a href="//sherman.library.nova.edu/sites/spotlight/lists?for=kids">Here are a few</a>
				that might make it easier for you to find something to read. Everything is hand-picked, curated by
				the sort of people who know their stuff.
			</p>

			<article class="clearfix" role="article">
				<a class="col-md--threecol media shadow" href="http://sherman.library.nova.edu/sites/spotlight/list/may-fourth/">
					<img src="//www.syndetics.com/index.php?isbn=9780545505178/lc.gif&amp;client=novaseu" srcset="//www.syndetics.com/index.php?isbn=9780545505178/lc.gif&amp;client=novaseu 1024w,
                 			 //www.syndetics.com/index.php?isbn=9780545505178/mc.gif&amp;client=novaseu 720w,
                 			 //www.syndetics.com/index.php?isbn=9780545505178/sc.gif&amp;client=novaseu 320w" alt="">
				</a>

				<div class="col-md--ninecol col--last">
					<header>
						<h4><a href="http://sherman.library.nova.edu/sites/spotlight/list/may-fourth/">May the fourth be with you!</a></h4>
					</header>
					<p>
						You don’t need to visit a galaxy far, far away to celebrate Star Wars Day on May 4th! 
						Take your TIE fighter to the NSU Alvin Sherman Library and share your love of Star Wars
						with the next generation by checking out some of our favorite books, DVDs, video games 
						and graphic novels for children and teens inspired by Star Wars. 
					</p>
				</div>
			</article>

			<article class="clearfix" role="article">
				<a class="col-md--threecol media shadow" href="http://sherman.library.nova.edu/sites/spotlight/list/superhero-books-for-young-readers-dc-vs-marvel/">
					<img src="//www.syndetics.com/index.php?isbn=9780062123985/lc.gif&amp;client=novaseu" srcset="//www.syndetics.com/index.php?isbn=9780062123985/lc.gif&amp;client=novaseu 1024w,
                        	  //www.syndetics.com/index.php?isbn=9780062123985/mc.gif&amp;client=novaseu 720w,
                              //www.syndetics.com/index.php?isbn=9780062123985/sc.gif&amp;client=novaseu 320w" alt="">
				</a>

				<div class="col-md--ninecol col--last">
					<header>
						<h4><a href="http://sherman.library.nova.edu/sites/spotlight/list/superhero-books-for-young-readers-dc-vs-marvel/">Super-hero books for Young Readers: DC vs. Marvel</a></h4>
					</header>
					<p>
						Are you Team Marvel or Team DC? It’s a superhero showdown in the bookshelves at the Alvin Sherman Library! Take home a Spider-Man story, a Batman book, or a collection of stories of your favorite super friends.
					</p>
				</div>
			</article>

		</section>
	</div>
</section>

</div>

<?php get_footer(); ?>