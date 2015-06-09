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

<div id="content">

	<div class="hero--small wrap clearfix">
		<div class="col-md--sixcol col-lg--fourcol media">

			<a class="panel kids" href="http://sherman.library.nova.edu/sites/spotlight/event-type/childrens/" style="width: 100%; margin-bottom: 1em;">
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
			<div class="card--alt">
			<?php echo do_shortcode( '[event tax="event_type" slug="childrens" num="4"]');?>
			</div>
			<div class="align-right spacer small-text">
				<a href="http://sherman.library.nova.edu/sites/spotlight/event-type/childrens/">Find more <strong>family-friendly</strong> things to do!</a>
			</div>
		</div>
	</div>

	<div class="hero--small wrap clearfix">
		<div class="col-md--sixcol col-lg--fourcol media">

			<a class="panel teens" href="http://sherman.library.nova.edu/sites/spotlight/event-type/teen-program/" style="width: 100%; margin-bottom: 1em;">
				<span class="panel__link">Teen Programs</span>
			</a>

			<!--<article role="article">
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
			</article>-->
		</div>

		<div class="col-md--sixcol col-lg--eightcol col--last">
			<div class="card--alt">
			<?php echo do_shortcode( '[event tax="event_type" slug="teen-program" num="4"]');?>
			</div>
			<div class="align-right spacer small-text">
				<a href="http://sherman.library.nova.edu/sites/spotlight/event-type/teen-program/">See <strong>what else</strong> we've got in store</a>
			</div>
		</div>
	</div>

</div>


<?php get_footer(); ?>