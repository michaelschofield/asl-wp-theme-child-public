<?php


    require_once('library/custom-fields.php');

/*
4. library/translation/translation.php
    - adding support for other languages
*/ // require_once('library/translation/translation.php'); // this comes turned off by default
/*


/* ==================
 * Thumbnails
 * ================== */
set_post_thumbnail_size(125, 70, true);   // Default Thumbnail
add_image_size( 'media-small', 350, 193, true );
add_image_size( 'media-medium', 570, 321, true );
add_image_size( 'media-large', 720, 405, true );
add_image_size( 'media-jumbo', 1140, 641, true );
add_filter( 'img_caption_shortcode', 'cleaner_caption', 10, 3 );

/* ==================
 * Theme Support
 * ================== */    
add_theme_support('post-thumbnails');   
add_theme_support( 'custom-background',
    array( 
    'default-image' => '',  // background image default
    'default-color' => '', // background color default (dont add the #)
    'wp-head-callback' => '_custom_background_cb',
    'admin-head-callback' => '',
    'admin-preview-callback' => ''
    )
);      
add_theme_support('automatic-feed-links'); 
add_theme_support( 'post-formats',  
    array( 
        'aside',             // title less blurb
        'gallery',           // gallery of images
        'link',              // quick link to other site
        'image',             // an image
        'quote',             // a quick quote
        'status',            // a Facebook like status update
        'video',             // video 
        'audio',             // audio
        'chat'               // chat transcript 
    )
);  
add_theme_support( 'menus' );  

/* ==================
 * Built-In Menus */
register_nav_menus(                      
    array( 
        'mobile-menu' => __( 'Mobile Menu', 'bonestheme' ),
        'secondary-menu' => __( 'Secondary Menu', 'bonestheme' )
    )
);

/* ==================
 * $MENU Functions
 * ================== */
/* ==================
 * Note: there is most certainly a better way to generate
 * this menu dynamically using wp_nav_menu(), but based 
 * on the deadline at the time of this excuse I figured I'd
 * hard code it. Sorry!!! - Michael Schofield
 */ require_once('library/menu.php');


/* ==================
 * Helper Functions
 * ================== */
/* ==================
 * is_tree() function that tests if a page has a certain parent */
function is_tree($pid) {
  global $post;

  $ancestors = get_post_ancestors($post->$pid);
  $root = count($ancestors) - 1;
  $parent = $ancestors[$root];

  if(is_page() && (is_page($pid) || $post->post_parent == $pid || in_array($pid, $ancestors)))
  {
    return true;
  }
  else
  {
    return false;
  }
};

/* ==================
 * $DESCENDANT CATEGORY */
/**
 * Tests if any of a post's assigned categories are descendants of target categories
 *
 * @param int|array $cats The target categories. Integer ID or array of integer IDs
 * @param int|object $_post The post. Omit to test the current post in the Loop or main query
 * @return bool True if at least 1 of the post's categories is a descendant of any of the target categories
 * @see get_term_by() You can get a category by name or slug, then pass ID to this function
 * @uses get_term_children() Passes $cats
 * @uses in_category() Passes $_post (can be empty)
 * @version 2.7
 * @link http://codex.wordpress.org/Function_Reference/in_category#Testing_if_a_post_is_in_a_descendant_category
 */
if ( ! function_exists( 'post_is_in_descendant_category' ) ) {
    function post_is_in_descendant_category( $cats, $_post = null ) {
        foreach ( (array) $cats as $cat ) {
            // get_term_children() accepts integer ID only
            $descendants = get_term_children( (int) $cat, 'category' );
            if ( $descendants && in_category( $descendants, $_post ) )
                return true;
        }
        return false;
    }
}

/* ==================
 * $URL PARAMETERS
 */ // http://codex.wordpress.org/Function_Reference/get_query_var
function add_query_vars_filter( $vars ) {
    $vars[] = 'for';
    return $vars;
} add_filter( 'query_vars', 'add_query_vars_filter' );

/* ==================
 * $POST-TYPES in RESULTS
 */ // Let's not discriminate ...
function namespace_add_custom_types( $query ) {
  if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
    $query->set( 'post_type', array(
     'post', 'spotlight_databases', 'nav_menu_item'
        ));
      return $query;
    }
}
add_filter( 'pre_get_posts', 'namespace_add_custom_types' );

function sherman_button_link( $atts, $text = null ) {
    extract( shortcode_atts( array(
        'link' => '#'
        ), $atts ) );

    return "<p><a class='button base' href='$link'>$text</a></p>";
}
add_shortcode( 'button', 'sherman_button_link');

/* ==================
 * Book Lists
 * ================== */

// Each line will be accessed by it's position in the array
// $readfile[0] would be the first line because the array begins at 0
// rather than 1


// Create a loop that will read all elements of the array and print out
// each field of the tab-delimited text file
function get_list( $file ) {
$readfile = file($file);
$books = array();
    for ($k=1; $k<=count($readfile)-1; $k++) {
        $fields = explode("\t",$readfile[$k]);
       // echo count($fields) . '<br />';
        array_push( $books, $fields);
      }

    return $books;
}

function is_ten( $counter ) {
    if ( $counter % 10 == 0) {
        return true;
    }
}


function read_more( $string, $stringLength = 750 ) {
// strip tags to avoid breaking any html
$string = strip_tags($string);

if (strlen($string) > $stringLength ) {

    // truncate string
    $stringCut = substr($string, 0, $stringLength );

    // make sure it ends in a word so assassinate doesn't become ass...
    $string = substr($stringCut, 0, strrpos($stringCut, '. ')).'. <a href="#">Read More</a>';
}
echo $string;
}
