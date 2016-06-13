'use strict';

var kidsLander = angular.module( 'kidsLander', [] );

/*------------------------------------*\
  $Utilities
\*------------------------------------*/

/**
 * A salve against minification
 * See: https://docs.angularjs.org/tutorial/step_05
 */

/*------------------------------------*\
  $Controllers
\*------------------------------------*/

/**
 * Databases Controller
 */
kidsLander.controller( 'Databases', [ '$scope', '$http',
  function( $scope, $http ) {

    $http
      .jsonp( 'http://sherman.library.nova.edu/libapi/api/endpoint.php?job=getMenus&col=n&location=r&callback=JSON_CALLBACK' )
      .success( function( data ) {
        $scope.databases = data.databases;
        $scope.subjects = data.subjects;
      });


  }
]);

/**
 * Events controller
 */
kidsLander.controller( 'Events', [ '$scope', '$http',
  function( $scope, $http ) {

  /**
   * Fetch all "Children's" events using
   * the spotlight api.
   */
    $http
      .jsonp( 'http://sherman.library.nova.edu/sites/spotlight/api/taxonomy/get_taxonomy_posts/?taxonomy=event_type&slug=childrens&post_type=spotlight_events&custom_fields=scheduling_options,event_start,event_start_time&orderby=event_start&count=50&callback=JSON_CALLBACK' )
      .success( function( data ) {

        $scope.programs = data.posts;

      });


  /**
   * Identify an order property.
   */
    $scope.orderProp = 'custom_fields[ "event_start" ]';

  }]);


/*------------------------------------*\
  $Filters
\*------------------------------------*/

/**
 * Parse event start date and time.
 */

kidsLander.filter( 'event', function( $filter ) {

  return function( input, format ) {

    if ( format == 'day' ) {

      // Given a string YYYYMMDD, substringify this
      // pass it through Date(), and appliy angular's
      // native date filter to render something like "September 5".

      var year  = input.substring( 0, 4 ),
        month   = input.substring( 4, 6 ),
        day   = input.substring( 6, 8 );

      var _date = $filter( 'date' )( new Date( year, month - 1, day ), 'MMMM d' );
      return input ? _date : '';
    }

    else {
      return input;
    }

  }

});

/**
 * Catch and correct stray HTML characters (e.g., &#8221; apostrophe)
 */
kidsLander.filter( 'clean', function( $filter ) {

  return function( input ) {

    return input

      // apostrophe
      .replace(/&#8217;/g, "'")

      // emdash
      .replace(/&#8211;/g, "–");


    }

});

/**
 * Customize the event loop to return only events
 * that are either upcoming or past.
 */

kidsLander.filter( 'return', function() {

    return function( events, order ) {
      var result = [];

      if ( order == 'upcoming-events' ) {

          angular.forEach( events, function( event, value) {

            var date  = event.custom_fields.event_start[0],
          multiday = ( event.custom_fields.scheduling_options[0].indexOf( "multiday" ) !== -1 ? true : false );

        if ( multiday ) { date = event.custom_fields.event_end[0] }

        var year  = date.substring( 0, 4 ),
          month   = date.substring( 4, 6 ),
          day   = date.substring( 6, 8 ),
          today   = new Date();
          today.setHours(0);
          today.setMinutes(0);
          today.setSeconds(0);
          today.setMilliseconds(0);

        date = new Date(year, month - 1, day );

        if ( date >= today ) {
          result.push( event );
        }

          });

        }


        return result;

    }

});
