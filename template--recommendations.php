<?php 
	
	if ( is_page( 'audiobooks' ) ) {
		$material_type = 'Audiobooks';
	}

	else {
		$material_type = 'Recommended';
	}

	$file = 'http://sherman2.library.nova.edu/pls/files/mpopb.txt';
	$books = get_list( $file );
	$counter = 0;

?>

<section id="recommendations" class="clearfix">

	<header>
		<h2 class="giga emphasis">What's new?</h2>
	</header>
	
	<div class="clearfix" style="margin: 1em 0;">

		<?php foreach( $books as $book ) :  $counter++; if ( $counter < 7 ) :?>
		<div class="align-left book media twocol <?php echo ( $counter == 1 ? 'first' : ( $counter == 6 ? 'last' : '' ) ); ?>" >
			
			<?php $bibrecord    = substr($book[0], 0, -1);
				  $isbn         = trim($book[7],': ');
				  $title        = str_replace( array(':','/'), '', $book[1]);
				  $subtitle     = str_replace( array(':','/'), '', $book[2]);
				  $summary      = str_replace('"', '', $book[5]);?>

			<a class="record-link" href="//novacat.nova.edu/record=<?php echo $bibrecord; ?>~S13" title="<?php echo $title . ': ' . $subtitle ?>">
				<span id="book-hook" class="gbs-thumbnail-large" data-author="author" data-isbn="<?php echo $isbn; ?>" data-summary="<?php echo $summary; ?>" data-title="<?php echo $title . ': ' . $subtitle?>" title="ISBN:<?php echo $isbn; ?>"></span>
			</a>

			<!--<a href="<?=NOVACAT;?>record=b2516713~S13" target="_blank"><?= $title; ?> <?= $subtitle; ?></a><br />
			<?php if(strlen($summary) > 1 ) : ?>
				<?= read_more($summary); ?><br />
			<?php endif; ?>

			<span class="majax-showholdings" title=".<?= $bibrecord; ?>"></span>		
			<a href="<?=NOVACAT;?>search~S13?/.<?=$bibrecord; ?>/.<?= $bibrecord;?>/1%2C1%2C1%2CB/request~<?= $bibrecord; ?>" target="_blank" ><img src="//sherman2.library.nova.edu/pls/assets/img/request.gif"></a><br /><br />-->
		</div>
		<?php endif; ?>			
		<?php endforeach; ?>
	</div>

	<article class="book-information">
		<header>
			<h3 class="no-margin post-title">The Abominable : A Novel</h3>
			<span class="delta author">by Dan Simmons</span>
		</header>
		<p class="epsilon summary">
			A thrilling tale of high-altitude death and survival set on the snowy summits of Mount Everest, from the bestselling author of The Terror It's 1924 and the race to summit the world's highest mountain has been brought to a terrified pause by the shocking disappearance of George Mallory and Sandy Irvine high on the shoulder of Mt. Everest. By the following year, three climbers -- a British poet and veteran of the Great War, a young French Chamonix guide, and an idealistic young American -- find a way to take their shot at the top. They arrange funding from the grieving Lady Bromley, whose son also disappeared on Mt. Everest in 1924. Young Bromley must be dead, but his mother refuses to believe it and pays the trio to bring him home.
		</p>
	</article>
			
</section>

<script type="text/javascript" src="http://novacat.nova.edu/screens/majax.js">	</script>
<script src="//sherman2.library.nova.edu/pls/assets/js/gbsclasses.js"></script>

<script type="text/javascript">
	$('.book').on('click', function( e ) {

		var hook 	= $(this).find('#book-hook'),
			link 	= $(this).children('.record-link').attr('href'),

			// book information
			author 	= hook.data('author'),
			summary = hook.data('summary'),
			shortenedSummary = summary.substring( 0, 750 ),
			title 	= hook.data('title');

			// the article
			article = $( 'article.book-information' );

		if ( summary ) {

			article.find('.post-title').text( title );
			article.find( '.author' ).text( 'by ' + author );
			article.children( '.summary' ).text( shortenedSummary.substring(0, Math.min( shortenedSummary.length, shortenedSummary.lastIndexOf(". ") ) ) + "." );
			e.preventDefault();
		}
	});
</script>