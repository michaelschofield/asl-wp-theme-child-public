/* ==================
 * Responsive Script */
// IE8 ployfill for GetComputed Style (for Responsive Script below)
if (!window.getComputedStyle) {
    window.getComputedStyle = function(el, pseudo) {
        this.el = el;
        this.getPropertyValue = function(prop) {
            var re = /(\-([a-z]){1})/g;
            if (prop == 'float') prop = 'styleFloat';
            if (re.test(prop)) {
                prop = prop.replace(re, function () {
                    return arguments[2].toUpperCase();
                });
            }
            return el.currentStyle[prop] ? el.currentStyle[prop] : null;
        }
        return this;
    }
}

// as the page loads, call these scripts
jQuery(document).ready(function($) {

    var responsive_viewport = $(window).width();

    /*$('.book').each(function() {

        var book = $(this),
            isbn = book.data('isbn');

        $.getJSON('https://www.googleapis.com/books/v1/volumes?q=isbn:' + isbn + '&key=AIzaSyDJryVZGwUhNscwwHO2Xq-JT-PdPGLrQ84&country=US', function( data ) {
            $.each( data.items, function( i, item ) {
            var cover    = item.volumeInfo.imageLinks.thumbnail;
            book.find('.cover > img').attr('src', cover);
          });
        });

      });*/

    // Fetch from "The Spotlight"
    get_spotlight = function( $size ) {

        $('[data-spotlight]').each(function() {

            var el                  =   $(this),
                audience            =   el.data( 'audience' ),
                postNo              =   el.data('post'),
                type                =   el.data('spotlight'),
                baseAPI             =   '//sherman2.library.nova.edu/sites/spotlight/api/taxonomy/get_taxonomy_posts/?taxonomy=library-audience&callback=?',

                // placeholders
                api, category, markup;

            // Who is the audience?
            baseAPI = baseAPI + '&slug=' + ( audience ? audience : 'public' );

            if ( type == 'database' ) {
                api = baseAPI + '&post_type=spotlight_databases';
            } 

            else if ( type == 'event' || type == 'feature' ) {
                api = baseAPI + '&post_type=spotlight_events';
            }

            $.getJSON( api )

                .success( function( response ) {

                    var count = 0;

                    $.each( response.posts, function( i, post ) {

                        var end = ( post.custom_fields['event_end'] ) ? post.custom_fields['event_end'][0] : post.custom_fields['event_start'][0];
                            end = end.replace(/(\d{4})(\d{2})(\d{2})/, '$1-$2-$3'),
                            end = Date.parse( end ),
                            now = new Date();
                            

                        if ( type == 'feature' ) {

                            var $size = ( responsive_viewport >= 720 ) ? ( (responsive_viewport >= 1024) ? 'media-large' : 'media-medium' ) : 'media-small';                                

                           if ( post.custom_fields['is_feature'][0] == 'yes' && post.custom_fields['date_text'] && end > now ) {

                                var excerpt = post.excerpt.replace(/(<([^>]+)>)/ig,""),
                                    excerpt = excerpt.substring( 0, 275 ),
                                    date    = post.custom_fields['date_text'],
                                    link    = ( !post.custom_fields['overlay_link'][0] ) ? post.url : post.custom_fields['overlay_link'],
                                    button  = ( !post.custom_fields['overlay_button_text'][0] ) ? 'Read More' : post.custom_fields['overlay_button_text'][0];                                    

                                markup = 
                                    '<div class="feature-event" style="background-image: url(' + post.thumbnail_images[ $size ]['url'] + ');">' +
                                        '<article class="card" itemscope itemtype="http://schema.org/Event">' +
                                            '<header>' +
                                                '<a href="' + post.url + '" itemprop="url">' +
                                                    '<h3 class="beta title no-margin" itemprop="name">' + post.custom_fields['overlay_title'][0] + '</h3>' +
                                                '</a>' +
                                                '<time class="delta">' +
                                                    '<span itemprop="startDate">' +
                                                        date + 
                                                    '</span>' +
                                                '</time>' +
                                            '</header>' +

                                            '<div class="has-excerpt">' +
                                                '<p class="excerpt" itemprop="description">' + excerpt + '</p>' +
                                            '</div>' +

                                            '<a class="button coral" href="' + link + '">' + button + '</a>' +
                                        '</article>' +
                                    '</div>';
                
                            }
                        }

                        if ( type == 'event' ) {

                           if ( post.custom_fields['is_feature'][0] == 'no' && post.custom_fields['date_text'] && end > now ) {

                                var excerpt = post.excerpt.replace(/(<([^>]+)>)/ig,""),
                                    excerpt = excerpt.substring( 0, 275 ),
                                    date    = post.custom_fields['date_text'];  

                                count++;                                  

                                markup = 
                                '<section class="assorted-features background-base has-background hero clearfix">' + 
                                    '<div class="feature-event wrap clearfix">' +
                                        
                                        '<article class="card" itemscope itemtype="http://schema.org/Event">' +                           
                                        
                                        '<div class="fourcol first">' +
                                            '<a href="' + post.url + '"><img src="' + post.thumbnail_images['media-small']['url'] + '" alt="' + post.title_plain + '"></a>' +                                        

                                        '</div>' +

                                        '<div class="eightcol last">' +

                                            '<header>' +
                                                '<a href="' + post.url + '" itemprop="url">' +
                                                    '<h3 class="emphasis no-margin" itemprop="name">' + post.custom_fields['overlay_title'][0] + '</h3>' +
                                                '</a>' +
                                                '<time class="delta">' +
                                                    '<span itemprop="startDate">' +
                                                        date + 
                                                    '</span>' +
                                                '</time>' +
                                            '</header>' +

                                           '<p class="epsilon excerpt">' + excerpt + '</p>' +
                                        '</div>' +

                                        '</article>' +
                                    '</div>' + 
                                '</section>';
                
                            }

                        }

                        else if ( type === 'database' ) {

                            count++;

                            if ( count == postNo ) {
                                //console.log( post.thumbnail_images['media-medium']['url'] );
                                markup = '<img src=' + post.thumbnail_images['media-medium']['url'] + '>';
                            }
                        }

                    });

                    el.html( markup );

                });
        });
    }

    if ( responsive_viewport >= 700 ) { 
     
        get_spotlight();

    }


    

}); /* end of as page load scripts */


/*! A fix for the iOS orientationchange zoom bug.
 Script by @scottjehl, rebound by @wilto.
 MIT License.
*/
(function(w){
	// This fix addresses an iOS bug, so return early if the UA claims it's something else.
	if( !( /iPhone|iPad|iPod/.test( navigator.platform ) && navigator.userAgent.indexOf( "AppleWebKit" ) > -1 ) ){ return; }
    var doc = w.document;
    if( !doc.querySelector ){ return; }
    var meta = doc.querySelector( "meta[name=viewport]" ),
        initialContent = meta && meta.getAttribute( "content" ),
        disabledZoom = initialContent + ",maximum-scale=1",
        enabledZoom = initialContent + ",maximum-scale=10",
        enabled = true,
		x, y, z, aig;
    if( !meta ){ return; }
    function restoreZoom(){
        meta.setAttribute( "content", enabledZoom );
        enabled = true; }
    function disableZoom(){
        meta.setAttribute( "content", disabledZoom );
        enabled = false; }
    function checkTilt( e ){
		aig = e.accelerationIncludingGravity;
		x = Math.abs( aig.x );
		y = Math.abs( aig.y );
		z = Math.abs( aig.z );
		// If portrait orientation and in one of the danger zones
        if( !w.orientation && ( x > 7 || ( ( z > 6 && y < 8 || z < 8 && y > 6 ) && x > 5 ) ) ){
			if( enabled ){ disableZoom(); } }
		else if( !enabled ){ restoreZoom(); } }
	w.addEventListener( "orientationchange", restoreZoom, false );
	w.addEventListener( "devicemotion", checkTilt, false );
})( this );

