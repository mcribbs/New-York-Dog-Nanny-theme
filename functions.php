<?php 
/**
 * @package WordPress
 */

/**
 * Bacnkground
 */
add_custom_background();

/**
 * Menu functions
 */
add_theme_support( 'menus' );
 
// Add class to first and last items of menu
function add_first_and_last($output) {
  $output = preg_replace('/class="menu-item/', 'class="first-menu-item menu-item', $output, 1);
  $output = substr_replace($output, 'class="last-menu-item menu-item', strripos($output, 'class="menu-item'), strlen('class="menu-item'));
  return $output;
}
add_filter('wp_nav_menu', 'add_first_and_last');

/**
 * Sidebar
 */
if ( function_exists('register_sidebar') )
    register_sidebar(array('name'=>'Right sidebar'));
	register_sidebar(array('name'=>'Header callout'));
	register_sidebar(array('name'=>'Footer'));

/**
 * Edit social media services for footer
 */
function mod_social($default) {
	$default['yelp'] = 'Yelp';
    return $default;
}
add_filter('social-icons-services','mod_social');

?>