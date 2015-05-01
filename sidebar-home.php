<div class="sidebar fourcol first clearfix" role="complementary">

	<?php if ( is_active_sidebar( 'home' ) ) : ?>

		<?php dynamic_sidebar(); ?>

	<?php else : ?>

		<!-- This content shows up if there are no widgets defined in the backend. -->
		
	<?php endif; ?>

</div>