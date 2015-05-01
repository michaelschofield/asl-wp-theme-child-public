<?php 
	
	$form_action = 'http://novacat.nova.edu/search/X/';
	$input_name		=	'SEARCH';

	if ( is_page( 'audiobooks' ) ) {
		$catalog_label = 'Find an Audiobook';
		$material_type = 'i';
	}

	elseif ( is_page( 'games' ) ) {
		$catalog_label = "Find a Video Game";
		$material_type = '3';
	}

	elseif ( is_page( 'help' ) ) {
		$catalog_label = "Search the Library Website";
		$form_action = home_url();
		$input_name = 's';
	}

	elseif ( is_page( 'events' ) ) {
		$catalog_label = 'Search for an Event';
		$form_action 	= '//sherman.library.nova.edu/sites/spotlight/';
		$input_name 	= 's';
	}

	else {
		$catalog_label = 'Search the Catalog';		
		$material_type = '';
	}



?>

<!-- Hero Search
======================
-->	<section class="search hero">

		<div class="wrap clearfix">

			<form class="align-left" method="get" role="search" name="novacat_search" id="novacat_search" action="<?php echo $form_action; ?>">
				<ul>
					<li class="append field">
						<div class="fourcol first">
							<label class="label"><?php echo $catalog_label; ?></label>
						</div>

						<div class="eightcol last align-right">
					    	<input class="xwide input" type="search" value="" name="<?php echo $input_name; ?>" id="<?php echo $input_name; ?>" placeholder="<?php echo esc_attr__(' Ender\'s Game, Call of Duty, or anything else!','bonestheme') ?>" x-webkit-speech speech />
					    	<input class="search-button" type="submit" value="<?php echo esc_attr__('Search') ?>" />					    
					    </div>
				    </li>
		    	</ul>

		    	<?php if ( is_page( 'events' ) ) : ?>
		    	<input type="hidden" name="post_type" value="spotlight_events">
		    	<?php endif; ?>
		    </form>

		</div><!--/.wrap-->

	</section><!--/.catalog-->