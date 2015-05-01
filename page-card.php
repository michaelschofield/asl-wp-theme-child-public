<?php get_header(); ?>

<section class="clearfix has-background-image" style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>) center right; background-size: 50%;">
	
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