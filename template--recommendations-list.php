<?php 

$file = 'http://sherman2.library.nova.edu/pls/files/oz.txt';
$books = get_list( $file );
$counter = 0;

?>

<style type="text/css">
	.is-available:after {
		background-color: #313547;
		bottom: 0;
		color: white;
		content: "Available";
		position: absolute;
		text-align: center;
		width: 100%;
	}
</style>
	
	<article role="article">

	<h3 id="oz">Wizard of Oz 75th Anniversary</h3>
	<ul class="no-bullets no-margin">
	<?php foreach( $books as $book ) : $counter++; if ( $counter < 11 ) : ?>
	
		<li class="clearfix" id="book-hook" data-author="author" data-isbn="<?php echo $oclc; ?>" data-summary="<?php echo $summary; ?>" data-title="<?php echo $title . ': ' . $subtitle?>" style="border-bottom: 1px solid #e9e9e9; margin-bottom: 1em; padding: 1em 0;">

		<?php $bibrecord    = substr($book[0], 0, -1);
			  $oclc 		= trim( $book[1], '' );
			  $isbn         = trim($book[8],': ');
			  $title        = str_replace( array(':','/'), '', $book[2]);
			  $subtitle     = str_replace( array(':','/'), '', $book[3]);
			  $author       = $book[4];
			  $summary      = str_replace('"', '', $book[6]);?>

		
			<div class="twocol first media">
				<a class="record-link" href="//novacat.nova.edu/record=<?php echo $bibrecord; ?>~S13" title="<?php echo $title . ': ' . $subtitle ?>">
					<span class="gbs-thumbnail-large"  title="<?php echo ( !$oclc ? 'ISBN:' . $isbn : 'OCLC:' . $oclc ); ?>"></span>
				</a>
			</div>

			<div class="tencol last">
				<header>
					<h3 class="delta no-margin"><?php echo $title . ': ' . $subtitle; ?></h3>
					<span class="epsilon author">by <a href="//novacat.nova.edu/search/X?SEARCH=a:(<?php echo $author; ?>)&searchscope=13" title="Find More from <?php echo $author; ?>"><?php echo $author; ?></a></span>
				</header>
				
					<?php //read_more( $summary, 500 ); ?>
				
				<div class="spacer">
					<a class="button blue" href="//novacat.nova.edu/search~S13?/.<?=$bibrecord; ?>/.<?= $bibrecord;?>/1%2C1%2C1%2CB/request~<?= $bibrecord; ?>" >
						Hold
					</a>

					<?php if ( $summary ) : ?>
					<a class="button green summary" href="#" title="Summary">Summary</a>
					<?php endif; ?>
				</div>	

				<?php if ( $summary ) : ?>
				<p class="hide-text"><?php read_more( $summary, 500 ); ?></p>
				<?php endif; ?>
				
			</div>
		
	
	</li>			
	<?php endif; endforeach; ?>	
	</ul>

	<a class="button base" href="http://novacat.nova.edu/search~S13?/ftlist^bib252%2C1%2C0%2C36/mode=2">View the Full List</a>
		

<script type="text/javascript" src="http://novacat.nova.edu/screens/majax.js">	</script>
<script src="//sherman2.library.nova.edu/pls/assets/js/gbsclasses.js"></script>
<script type="text/javascript">
	$( 'a.summary' ).on( 'click', function( e ) {
		$(this)
			.parent()
			.next( 'p' )
				.hide()
				.removeClass( 'hide-text' )
				.slideDown();

		e.preventDefault();
	});
</script>
</article>

