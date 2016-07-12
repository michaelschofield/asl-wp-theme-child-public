<?php get_header(); ?>

<section class="clearfix has-background background-base">

	<div class="col-md--twelvecol col-lg--sixcol clearfix" style="padding: .5em 1em;">

		<div class="col-md--tencol col--centered hero">

			<?php if ( get_post_meta( get_the_ID(), 'mission_statement', true ) ) : ?>
				<?php if ( get_post_meta( get_the_ID(), 'mission_title', true ) ) : ?>
				<header>
					<span class="gamma"><?php echo get_post_meta( get_the_ID(), 'mission_title', true); ?></span>
				</header>
				<?php endif; ?>
				<p class="epsilon">
					<?php echo get_post_meta( get_the_ID(), 'mission_statement', true); ?>
				</p>
			<?php endif; ?>
		</div>

	</div>

	<div class="col-md--twelvecol col-lg--sixcol clearfix" style="padding: 0;">

		<div class="col-md--sixcol col-lg--twelvecol has-background" style="background-color: rgba(255,255,255, 0.05); padding: .5em 1em;">

			<div class="hero--small">

				<h3 class="delta no-margin">Broward County Library Cardholders</h3>
				<p class="small-text no-margin">Use your <b>Broward County Library Card</b> to get <b>immediate</b> access using our e-card.</p>
				<a class="button peach" href="//lib.nova.edu/ecard" title="Get an E-Card">Get an E-Card</a><br>



			</div>
		</div>

		<div class="col-md--sixcol col-lg--twelvecol has-background" style="background-color: #4B5971; padding: .5em 1em;">

			<div class="hero--small">
				<h3 class="delta no-margin">Other Ways to Apply</h3>
				<p class="small-text no-margin">
					If you don’t have a Broward County Library card, you can apply online for our Alvin Sherman Library Card and pick up your card in person. 					
				</p>

				<a class="button base" href="//novacat.nova.edu/screens/selfregpick.html" title="Online Registration">Apply &amp; Pickup</a>
				&nbsp; or <a href="http://public.library.nova.edu/wp-content/uploads/2014/05/Library-Card-Application-7-20-11-English-Spanish-2.pdf" class="button button--link small-text" style="color: white !important; text-decoration: underline;">Print Application</a>
			</div>

		</div>

	</div>

</section>

	<div id="content">

		<div id="inner-content" class="wrap clearfix">

		    <main id="main" class="eightcol center-grid clearfix" role="main">

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

			    </article> <!-- end article -->
			    <?php endwhile; ?>

			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->


		<?php endif; ?>

<?php get_footer(); ?>
