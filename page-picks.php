<?php get_header(); ?>

	<?php get_template_part( 'template--recommendation-feature' ); ?>
	<?php get_template_part( 'template-search' ); ?>

		<div id="inner-content" class="wrap clearfix">

		    <div id="main" class="eightcol last clearfix" role="main">
		    	<?php get_template_part( 'template--recommendations-list' ); ?>

		    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
				
				    <header class="article-header">
						<h1 class="hide-text page-title" itemprop="headline"><?php the_title(); ?></h1>
				    </header> <!-- end article header -->
			
				    <section class="post-content clearfix" itemprop="articleBody">
					    <?php the_content(); ?>
					</section> <!-- end article section -->
							
			    </article> <!-- end article -->
			    <?php endwhile; ?>	
				<?php endif; ?>
			
			</div> <!-- end #main -->

			<div class="fourcol first sidebar">
				<?php get_sidebar(); ?>
			</div>
			
		</div>		

<?php get_footer(); ?>