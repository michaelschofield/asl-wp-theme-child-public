<?php
/* 
Template Name: Collection
*/
?>

<?php get_header(); ?>
	
	<?php get_template_part( 'template--recommendation-feature' ); ?>
	<?php get_template_part( 'template-search' ); ?>

	<section class="hero clearfix">

		<p class="delta wrap">

			<?php if ( get_post_meta( get_the_ID(), 'collection_blurb', true) ) :?>
				<?php echo get_post_meta( get_the_ID(), 'collection_blurb', true); ?>
			<?php else : ?>

				This collection type doesn't have a <strong>blurb</strong> yet, but it will. It is a
				brief opportunity to either clear-up something confusing that might anger some users (e.g., 
				<em>you can get some books for 50 days, but not popular best sellers</em> ) or, better yet,
				as a change to sell another resource: <em>not only do we offer audiobooks on CD, but
				you can download them with OneClickdigital</em>.

			<?php endif; ?>
		</p>

	</section>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div id="content">
			
			
				<div id="inner-content" class="wrap clearfix">
			
				    <div id="main" class="eightcol last clearfix" role="main">
					    					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						    <header class="article-header">
								<!--<h1 class="page-title tera" itemprop="headline">
									<em><?php the_title(); ?></em>
								</h1>-->
						    </header> <!-- end article header -->
					
						    <section class="post-content clearfix" itemprop="articleBody">
						    	
							    <?php the_content(); ?>
							</section> <!-- end article section -->
						
						    <footer class="article-footer wrap clearfix">
			
							    <?php the_tags('<p class="tags"><span class="tags-title">Tags:</span> ', ', ', '</p>'); ?>
								
						    </footer> <!-- end article footer -->
						    
						    <?php //comments_template(); ?>
					
					    </article> <!-- end article -->	
	
    				</div> <!-- end #main -->

					<div class="sidebar fourcol first">
						<?php get_sidebar(); ?>					
					</div>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

	<?php endwhile; endif; ?>
<?php get_footer(); ?>