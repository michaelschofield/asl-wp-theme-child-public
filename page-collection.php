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

			</div>
		</div>

	</section>

	<nav class="align-center menu--panels clearfix">

		<a class="panel one-third audiobooks" href="#audiobooks" title="Audiobooks">
			<span class="panel__link">Audiobooks</span>
		</a>

		<a class="panel one-third books" href="#books" title="Books and Ebooks">
			<span class="panel__link">Books</span>
		</a>


		<a class="panel one-third research" href="//sherman.library.nova.edu/e-library/index.php?col=p" title="Databases and Resources in the Alvin Sherman E-Library">
			<span class="panel__link">Databases</span>
		</a>


		<a class="panel one-fourth games" href="#games" title="Video Games">
			<span class="panel__link">Games</span>
		</a>

		<a class="panel one-fourth periodicals has-background background-blue" href="#periodicals" title="Magazines and Periodicals">
			<span class="panel__link">Magazines and Papers</span>
		</a>

		<a class="panel one-fourth movies" href="#videos" title="Videos">
			<span class="panel__link">Videos</span>
		</a>

		<a class="panel one-fourth music" href="#music" title="Music">
			<span class="panel__link">Music</span>
		</a>

	</nav>
	
		<section class="hero wrap clearfix" id="audiobooks">

			<div class="twocol first">

			<header class="align-center">
				<img src="http://systems.library.nova.edu/cdn/styles/css/public-global/media/music.png">

				<h3 class="delta">Audiobooks</h3>
			</header>
			</div>

			<div class="tencol last">

				<p>
					We carry all sorts of audiobooks in every genre, which you can take home on
					<abbr title="compact disc">CD</abbr>,download through <a href="#">OneClickdigital</a>
					- a database loaded with best-sellers, or even try <strong>playaways</strong>: little
					all-in-one, ready-to-go players pre-loaded with the book.
				</p>

				<dl class="inline">
					<dt>Checkout Limit</dt>
					<dd>50</dd>

					<dt>Loan Period</dt>
					<dd>30 Days</dd>
				</dl>
			
			</div>

		</section>

		<hr>

		<section class="hero wrap clearfix" id="books">

			<div class="twocol first">

			<header class="align-center">
				<img src="http://systems.library.nova.edu/cdn/styles/css/public-global/media/dictionary(2x).png">

				<h3>Books</h3>
			</header>
			</div>

			<div class="tencol last">

				<p>
					Find something to read in whatever format you like. Books are something we obviously specialize in, 
					and you might find extra value in our cutting-edge academic collection with which we support
					our university. You can browse and download best sellers using our service <a href="http://sherman.library.nova.edu/sites/spotlight/databases/OneClickdigital/">OneClickdigital</a>,
					or if you also happen to have a Broward County Public Library card, try <a href="http://broward.lib.overdrive.com/">OverDrive</a>.
				</p>

				<dl class="inline">
					<dt>Checkout Limit</dt>
					<dd>50</dd>

					<dt>Loan Period</dt>
					<dd>30 Days</dd>

					<dt>Loan Period for Bestsellers</dt>
					<dd>14 Days</dd>
				</dl>
				
			</div>

		</section>
		<hr>

		<section class="hero wrap clearfix" id="games">

			<div class="twocol first">

			<header class="align-center">
				<img src="http://systems.library.nova.edu/cdn/styles/css/public-global/media/games(2x).png">

				<h3>Games</h3>
			</header>
			</div>

			<div class="tencol last">

				<p>
					The days of the rental store are over, but we still collect and carry a ton of video games that
					you can take home for free. We've games for the Gamecube, DS, 3DS, Wii, Wii U, PS2, PS3, PS4, PSP, 
					PS Vita, Xbox, Xbox 360, Xbox 360 Kinect, and Xbox One.
				</p>

				<dl class="inline">
					<dt>Checkout Limit</dt>
					<dd>5</dd>

					<dt>Loan Period</dt>
					<dd>14 Days</dd>
				</dl>
				
			</div>

		</section>
		<hr>
		<section class="hero wrap clearfix" id="periodicals">

			<div class="twocol first">

			<header class="align-center">
				<img src="http://systems.library.nova.edu/cdn/styles/css/public-global/media/periodical.png">

				<h3 class="delta">Periodicals</h3>
			</header>
			</div>

			<div class="tencol last">

				<p>
					We have a number of your favorite magazine titles for children, teens, adults, and 
					about all subjects: cooking, science, current events, pop-culture, arts, crafts,
					and more. Current newspapers both local and foreign are also in this collection.
					Periodicals are for in-house use only and cannot be taken home.
				</p>
				
			</div>

		</section>

		<hr>
		<section class="hero wrap clearfix" id="videos">

			<div class="twocol first">

			<header class="align-center">
				<img src="http://systems.library.nova.edu/cdn/styles/css/public-global/media/movies.png">

				<h3 class="delta">Videos</h3>
			</header>
			</div>

			<div class="tencol last">

				<p>
					We carry thousands of DVD and Blu-Ray titles from genres like action and adventure,
					documentaries, dramas, commedies, TV series, language instruction, and everything
					inbetween.
				</p>

				<dl class="inline">
					<dt>Checkout Limit</dt>
					<dd>10</dd>

					<dt>Loan Period</dt>
					<dd>5 Days</dd>
				</dl>
				
			</div>

		</section>

		<hr>
		<section class="hero wrap clearfix" id="music">

			<div class="twocol first">

			<header class="align-center">
				<img src="http://systems.library.nova.edu/cdn/styles/css/public-global/media/record.png">

				<h3 class="delta">Music</h3>
			</header>
			</div>

			<div class="tencol last">

				<p>
					We have more than 5,000 CDs of music. Wow.
				</p>

				<dl class="inline">
					<dt>Checkout Limit</dt> <dd>50</dd>
					<dt>Loan Period</dt> <dd>30</dd>
				</dl>
				
			</div>

		</section>

<?php get_footer(); ?>