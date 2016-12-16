<?php get_header(); ?>

	<section class="clearfix has-background-image" style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>) bottom right;">

		<div class="col-md--sixcol has-background background-base">

			<div class="col-md--eightcol col--centered hero">

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

				<a class="button button--primary--alt" href="">Get a Library Card</a>
			</div>
		</div>

	</section>

	<div id="content">

		<div id="inner-content" class="wrap clearfix">

		    <div id="main" class="col-md--eightcol col--centered hero clearfix" role="main">

		    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

				    <header class="article-header">
						<h1 class="page-title hide-accessible" itemprop="headline">
							About the Alvin Sherman Library, Research, and Information Technology Center
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

			</div> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->


		<?php endif; ?>

<?php get_footer(); ?>
