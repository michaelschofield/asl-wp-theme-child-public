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

<nav id="panels"class="menu--panels clearfix" role="navigation">
	
	<a class="panel one-third genealogy" href="http://sherman.library.nova.edu/e-library/index.php?action=subject&col=n&cat=gee" title="Genealogy Resources">
		<span class="panel__link">Genealogy</span>
	</a>



	<a class="panel one-third bus" href="http://sherman.library.nova.edu/e-library/index.php?action=subject&cat=kid&col=p" title="Business Databases and Resources in the Alvin Sherman E-Library">
		<span class="panel__link">Homework Helpers</span>
	</a>



	<a class="panel one-third piechart" href="http://sherman.library.nova.edu/e-library/index.php?action=subject&col=p&cat=zbu" title="Business Databases and Resources in the Alvin Sherman E-Library">
		<span class="panel__link">Business</span>
	</a>



	<a class="panel one-fourth heart" href="http://sherman.library.nova.edu/e-library/index.php?action=subject&cat=med&col=p" title="Health and Medicine Databases and Resources in the Alvin Sherman E-Library">
		<span class="panel__link">Health</span>
	</a>



	<a class="panel one-fourth compose" href="http://sherman.library.nova.edu/e-library/index.php?action=subject&col=p&cat=ztr" title="Teacher Databases and Resources in the Alvin Sherman E-Library">
		<span class="panel__link">Teacher Resources</span>
	</a>


	<a class="panel one-fourth guides" href="http://nova.campusguides.com/" title="Topical Guides and Tutorials made by NSU Librarians">
		<span class="panel__link">Library Guides</span>
	</a>



	<a class="panel one-fourth research" href="//sherman.library.nova.edu/e-library/index.php?col=p" title="Databases and Resources in the Alvin Sherman E-Library">
		<span class="panel__link">All Databases</span>
	</a>

	
</nav>


<?php get_template_part( 'partials/ask-a-librarian' ); ?>

<?php // get_template_part( 'template--hero-librarylearn' ); ?>



<?php get_footer(); ?>