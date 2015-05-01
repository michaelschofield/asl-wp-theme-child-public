<?php get_header(); ?>

<?php $audience = ( !get_query_var( 'for' ) ? 'public' : ( get_query_var( 'for' ) == 'kids' ? 'kids' : ( get_query_var( 'for' ) == 'teens' ? 'teens' : 'public' ) ) );  ?>

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
	<div id="inner-content" class="clearfix">

		<div class="js-masonry ninecol first clearfix" data-masonry-options='{ "columnWidth": ".brick", "gutter": 0  }'>

			<div data-spotlight="bricks" data-audience="teens"></div>

		</div><!--/.js-masonry-->

		<article class="threecol last clearfix spotlight--feed">

			<header class="hide-accessible">
				<h3 class="brick__title">Upcoming Events</h3>
			</header>

			<section>
				<ul class="no-bullets no-margin">
					<?php get_template_part( 'template--event-feed' ); ?>					
				</ul>
			</section>
		</article>

	</div><!--/#inner-content-->
</div><!--/#content-->


<?php get_footer(); ?>