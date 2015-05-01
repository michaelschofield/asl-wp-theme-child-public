<?php 

$file = 'http://sherman2.library.nova.edu/pls/files/mpopb.txt';
$books = get_list( $file );
$counter = 0;

?>
<section class="hero has-background <?php echo ( !is_page( array('kids','teens')) ? 'background-base' : ( is_page('kids') ? 'background-orange has-border' : 'background-base has-border' ) ); ?>" id="recommendations">

	<div class="book wrap clearfix">

		<article>

			<div class="twocol first">
				<?php if ( !is_page( array('kids','teens' ) ) ) : ?>
				<a class="record-link" href="http://novacat.nova.edu:80/record=b1353323~S13">
					<span id="book-hook" class="gbs-thumbnail-large" title="ISBN:0553283685"></span>
				</a>
				<?php else: ?>
				<a class="record-link" href="http://novacat.nova.edu:80/record=b2063069~S13">
					<span id="book-hook" class="gbs-thumbnail-large" title="ISBN:9780061671739"></span>
				</a>
				<?php endif; ?>
			</div>

			<div class="tencol last">
				<?php if ( !is_page( array('kids', 'teens') ) ) : ?>
			<header>
				<h3 class="no-margin post-title">
					Hyperion
					<?php if ( is_page( 'audiobooks' ) ) : ?> the Audiobook					
					<?php elseif ( is_page('games') ) : ?> the Video Game!
					<?php elseif ( is_page('periodicals')) : ?> Weekly
					<?php elseif ( is_page('movies')) : ?> the Season Premier
					<?php elseif (is_page('music')) : ?> the Soundtrack
					<?php endif; ?>

				</h3>
				<span class="delta author">by <a href="http://novacat.nova.edu/search/X?SEARCH=a:(Dan%20Simmons)&searchscope=13&SORT=D" style="color: white;">Dan Simmons</a></span>
			</header>
				<p class="epsilon summary">
					On the world called Hyperion, beyond the law of the Hegemony of Man, there waits the creature called the Shrike. There are those who worship it. There are those who fear it. And there are those who have vowed to destroy it. In the Valley of the Time Tombs, where huge, brooding structures move backward through time, the Shrike waits for them all. 
				</p>

			<?php else : ?>
			<header>
				<h3 class="no-margin post-title">
					Odd and the Frost Giants
				</h3>
				<span class="delta author">by Neil Gaiman</span>
			</header>
			<p class="epsilon summary">
				An unlucky twelve-year-old Norwegian boy named Odd leads the Norse gods Loki, Thor, and Odin in an attempt to outwit evil Frost Giants who have taken over Asgard.
			</p>
			<?php endif; ?>
			</div>
		</article>
	</div>
		
</section>

<script type="text/javascript" src="http://novacat.nova.edu/screens/majax.js">	</script>
<script src="//sherman2.library.nova.edu/pls/assets/js/gbsclasses.js"></script>