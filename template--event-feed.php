<?php 
/* ==================
 * Event Feed, Agenda View
 * ================== */
// Build the API
$spotlight_taxonomy_api_url 	= 'http://sherman.library.nova.edu/sites/spotlight/api/taxonomy/get_taxonomy_posts/';
$spotlight_taxonomy 			= 'library-audience';

if      ( is_page( 'kids' ) || get_query_var( 'for' ) == 'kids' )   { $library_audience = 'kids'; }
elseif  ( is_page( 'teens' ) || get_query_var( 'for' ) == 'teens')  { $library_audience = 'teens'; }
else                                                                { $library_audience = 'public'; }

$json = json_decode( wp_remote_retrieve_body( wp_remote_get( $spotlight_taxonomy_api_url . '?taxonomy=' . $spotlight_taxonomy .'&slug=' . $library_audience . '&post_type=spotlight_events', array( 'sslverify' => false) ) ), true); 

function rearrange( $a, $b ) { return strcmp( $a['custom_fields']['event_start'][0], $b['custom_fields']['event_start'][0]); }
usort( $json['posts'], 'rearrange');

foreach ( $json['posts'] as $response) : 

	// 1.) If there is no end-date, is the start-date passed?
	if ( !$response['custom_fields']['event_end'][0] 
			&& strtotime( $response['custom_fields']['event_start'][0]) < strtotime('-1 day') ) : 
	
	// 2.) If there is an end-date, has it passed?
	elseif ( $response['custom_fields']['event_end'][0]
			&& strtotime( $response['custom_fields']['event_end'][0] ) < strtotime('-1 day') ) : 

	// 3.) Otherwise
	else :
		// Date and Time
		$feature_allday					= false;
		$feature_multiday				= false;				
		$feature_date_start				=	strtotime($response['custom_fields']['event_start'][0]);
		$feature_date_options			=	$response['custom_fields']['scheduling_options'][0];

		if ( strpos( $feature_date_options, 'multiday' ) !== false ) {
			$feature_multiday			= true;
			$feature_date_end			=	strtotime($response['custom_fields']['event_end'][0]);
		}

		if ( strpos( $feature_date_options, 'allday' ) !== false ) {
			$feature_allday				= true;
		}

		// Content
		$feature_description			=	$response['excerpt'];
		$feature_link					=	$response['custom_fields']['overlay_link'][0];
		$feature_tagline				=	$response['custom_fields']['overlay_tagline'][0];
		$feature_title					=	$response['custom_fields']['overlay_title'][0];
		$event_type						=	$response['taxonomy_event_type'][0];						
		$location						=	$response['taxonomy_location'][0];
	?>

<li class="post clearfix" role="article">

	<a href="<?php echo ( !$feature_link ? $response['url'] : $feature_link ); ?>" itemprop="url">
		<?php echo ( !$feature_title ? $response['title'] : $feature_title ); ?>
	</a> <br>				
	
	<time class="small-text updated" datetime="<?php echo $feature_date_start . ( $feature_multiday === true ? '-' . $feature_date_end : ''); ?>"> 
		<span itemprop="startDate" content="<?php echo $feature_date_start ?>"><?php echo date('F j', $feature_date_start ); ?></span> <?php echo ( $feature_multiday === false ? '' : 'through <span itemprop="endDate" content="' . $feature_date_end . '">' . date('F j', $feature_date_end ) . '</span>' ); ?>								
	</time> /

	<?php echo ( $event_type ? '<a class="small-text" href="//sherman.library.nova.edu/sites/spotlight/event_type/' . $event_type['slug'] . ' title="See more events of this kind">' . $event_type['title']  . '</a>' : ''); ?>


			

</li>
<?php endif; ?>
<?php endforeach; ?>