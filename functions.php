<?php
// Theme support options
require_once(get_template_directory().'/assets/functions/theme-support.php'); 

// WP Head and other cleanup functions
require_once(get_template_directory().'/assets/functions/cleanup.php'); 

// Register scripts and stylesheets
require_once(get_template_directory().'/assets/functions/enqueue-scripts.php'); 

// Register custom menus and menu walkers
require_once(get_template_directory().'/assets/functions/menu.php'); 
require_once(get_template_directory().'/assets/functions/menu-walkers.php'); 

// Register sidebars/widget areas
require_once(get_template_directory().'/assets/functions/sidebar.php'); 

// Makes WordPress comments suck less
require_once(get_template_directory().'/assets/functions/comments.php'); 

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/assets/functions/page-navi.php'); 

// Adds support for multiple languages
require_once(get_template_directory().'/assets/translation/translation.php'); 

// Adds site styles to the WordPress editor
//require_once(get_template_directory().'/assets/functions/editor-styles.php'); 

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/assets/functions/related-posts.php'); 

// Use this as a template for custom post types
// require_once(get_template_directory().'/assets/functions/custom-post-type.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/assets/functions/login.php'); 

// Customize the WordPress admin
// require_once(get_template_directory().'/assets/functions/admin.php'); 

function load_fonts() {
            wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,700)');
            wp_enqueue_style( 'googleFonts');
            wp_register_style('googleserifFonts', 'https://fonts.googleapis.com/css?family=Neuton)');
            wp_enqueue_style( 'googleserifFonts');
        }
    
    add_action('wp_print_styles', 'load_fonts');

?>



<?php

// Register image sizes

add_image_size( 'related-posts', 340, 250, TRUE ); // Hard crop center
add_image_size( 'large', 500, 368, TRUE ); // Hard crop center
add_image_size( 'category-thumb', 300, 225, array( 'left', 'top' ) ); // Hard crop center
add_image_size( 'default');

?>

<?php

// Remove Category:, Tag:, Author: from the_archive_title

add_filter( 'get_the_archive_title', function ($title) {

    if ( is_category() ) {

            $title = single_cat_title( '', false );

        } elseif ( is_tag() ) {

            $title = single_tag_title( '', false );

        } elseif ( is_author() ) {

            $title = '<span class="vcard">' . get_the_author() . '</span>' ;

        }

    return $title;

});

?>

<?php
/**
 * Add custom taxonomies
 *
 * Additional custom taxonomies can be defined here
 * http://codex.wordpress.org/Function_Reference/register_taxonomy
 */
function add_custom_taxonomies() {
  // Add new "Locations" taxonomy to Posts
  register_taxonomy('age', 'post', array(
    // Hierarchical taxonomy (like categories)
    'hierarchical' => true,
    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'Ages', 'taxonomy general name' ),
      'singular_name' => _x( 'Age', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Ages' ),
      'all_items' => __( 'All Ages' ),
      'parent_item' => __( 'Parent Age' ),
      'parent_item_colon' => __( 'Parent Age:' ),
      'edit_item' => __( 'Edit Age' ),
      'update_item' => __( 'Update Age' ),
      'add_new_item' => __( 'Add New Age' ),
      'new_item_name' => __( 'New Age Name' ),
      'menu_name' => __( 'Ages' ),
    ),
    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'ages', // This controls the base slug that will display before each term
      'with_front' => false, // Don't display the category base before "/ages/"

      'hierarchical' => true // This will allow URL's like "/ages/2-5yrs/"
    ),
  ));
register_taxonomy('grade', 'post', array(
    // Hierarchical taxonomy (like categories)
    'hierarchical' => true,
    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'Grades', 'taxonomy general name' ),
      'singular_name' => _x( 'Grade', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Grades' ),
      'all_items' => __( 'All Grades' ),
      'parent_item' => __( 'Parent Grade' ),
      'parent_item_colon' => __( 'Parent Grade:' ),
      'edit_item' => __( 'Edit Grade' ),
      'update_item' => __( 'Update Grade' ),
      'add_new_item' => __( 'Add New Grade' ),
      'new_item_name' => __( 'New Grade Name' ),
      'menu_name' => __( 'Grades' ),
    ),
    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'grades', // This controls the base slug that will display before each term
      'with_front' => false, // Don't display the category base before "/grades/"

      'hierarchical' => true // This will allow URL's like "/grades/junior/"
    ),
  ));
register_taxonomy('level', 'post', array(
    // Hierarchical taxonomy (like categories)
    'hierarchical' => true,
    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'Levels', 'taxonomy general name' ),
      'singular_name' => _x( 'Level', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Levels' ),
      'all_items' => __( 'All Levels' ),
      'parent_item' => __( 'Parent Level' ),
      'parent_item_colon' => __( 'Parent Level:' ),
      'edit_item' => __( 'Edit Level' ),
      'update_item' => __( 'Update Level' ),
      'add_new_item' => __( 'Add New Level' ),
      'new_item_name' => __( 'New Level Name' ),
      'menu_name' => __( 'Levels' ),
    ),
    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'levels', // This controls the base slug that will display before each term
      'with_front' => false, // Don't display the category base before "/ages/"

      'hierarchical' => true // This will allow URL's like "/ages/2-5yrs/"
    ),
  ));
}
add_action( 'init', 'add_custom_taxonomies', 0 );

?>


