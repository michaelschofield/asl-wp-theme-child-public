<?php get_header(); ?>


	<section class="has-background background-base clearfix">

    <div class="clearfix wrap">

		<div class="col-md--sixcol first">

			<div class="col-md--eightcol col-md--centered hero">

			<?php if ( get_post_meta( get_the_ID(), 'mission_statement', true ) ) : ?>
				<?php if ( get_post_meta( get_the_ID(), 'mission_title', true ) ) : ?>
				<header>
					<span class="gamma"><?php echo get_post_meta( get_the_ID(), 'mission_title', true); ?></span>
				</header>
				<?php endif; ?>

				<div class="vcard col-md--centered clearfix">
					<p class="address">
						<span class="fn">Alvin Sherman Library, Research, and Information Technology Center </span><br>
						<span class="street-address">3100 Ray Ferrero, Jr. Blvd</span> <br>
						<span class="region">Fort Lauderdale – Davie, FL 33314</span>
					</p>
				</div>
			<?php endif; ?>
			<a class="button button--primary--alt" href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=3100+Ray+Ferrero,+Jr.+Blvd.+Alvin+Sherman+Library&amp;aq=&amp;sll=26.076115,-80.276369&amp;sspn=0.251943,0.268822&amp;ie=UTF8&amp;hq=3100+Ray+Ferrero,+Jr.+Blvd.+Alvin+Sherman+Library&amp;hnear=&amp;t=m&amp;cid=4794388343535914270&amp;ll=26.201654,-80.223541&amp;spn=0.215631,0.892639&amp;z=11&amp;iwloc=A">View Larger Map</a>

			</div>

		</div>

		<div class="col-md--sixcol">
	<!-- Map
	======================
	--> <iframe style="padding: 1em;" width="100%" height="400" frameborder="0" scrolling="no" src="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=3100+Ray+Ferrero,+Jr.+Blvd.+Alvin+Sherman+Library&amp;aq=&amp;sll=26.076115,-80.276369&amp;sspn=0.251943,0.268822&amp;ie=UTF8&amp;hq=3100+Ray+Ferrero,+Jr.+Blvd.+Alvin+Sherman+Library&amp;hnear=&amp;t=m&amp;cid=4794388343535914270&amp;ll=26.201654,-80.223541&amp;spn=0.215631,0.892639&amp;z=11&amp;iwloc=A&amp;output=embed"></iframe>

		</div>

    </div>
	</section>


		<div id="content">

			<div id="inner-content" class="wrap clearfix">

				    <div id="main" class="col-md--eightcol col-md--centered clearfix" role="main">

				    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

						    <header class="article-header">
								<h1 class="page-title hide-accessible" itemprop="headline">
									<?php the_title(); ?>
								</h1>
						    </header> <!-- end article header -->

						    <section class="post-content clearfix" itemprop="articleBody">
							    <?php the_content(); ?>
							</section> <!-- end article section -->

						    <footer class="article-footer wrap clearfix">

							    <?php the_tags('<p class="tags"><span class="tags-title">Tags:</span> ', ', ', '</p>'); ?>

						    </footer> <!-- end article footer -->

						    <?php //comments_template(); ?>

					    </article> <!-- end article -->
					    <?php endwhile; ?>

    				</div> <!-- end #main -->

			</div> <!-- end #inner-content -->

		</div> <!-- end #content -->


	<?php endif; ?>

<?php get_footer(); ?>
