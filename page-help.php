<?php get_header(); ?>

	<section class="clearfix has-background-image" style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>) center center;">
		
		<div class="sixcol first has-background background-base">

			<div class="eightcol center-grid hero">

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

				<a class="button button--primary--alt" href="#ask">Ask a Librarian</a>

			</div>
		</div>

	</section>

<?php // get_template_part( 'template-search' ); ?>
<?php get_template_part( 'partials/ask-a-librarian' ); ?>
<?php get_template_part( 'template--hero-librarylearn' ); ?>

		<div id="content">
		
			<div id="inner-content" class="hero wrap clearfix">	

				    <div id="main" class="eightcol center-grid hero clearfix" role="main">

				    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						    <header class="align-center article-header hero">
								<h1 class="hide-accessible page-title" itemprop="headline">
									<?php the_title(); ?>
								</h1>
								<h2>Frequently Asked Questions</h2>
						    </header> <!-- end article header -->
					
						    <section class="post-content clearfix" itemprop="articleBody">
							    <?php the_content(); ?>
							</section> <!-- end article section -->
					
					    </article> <!-- end article -->
					    <?php endwhile; ?>	
				    	<?php endif; ?>	
					
    				</div> <!-- end #main -->

    				<?php // get_sidebar(); ?>

			</div> <!-- end #inner-content -->

		</div> <!-- end #content -->	

				
<?php get_footer(); ?>