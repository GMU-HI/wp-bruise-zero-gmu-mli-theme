<?php

/**
 * Summary: functions.php file for the gmuj-wordpress-theme-mason-twentytwenty-child theme
 */

// Include custom functions
require(get_stylesheet_directory(). '/php/custom-functions.php');

// Include custom menus
require(get_stylesheet_directory(). '/php/custom-menus.php');

// Include custom widget areas
require(get_stylesheet_directory(). '/php/custom-sidebars.php');

// Include custom fonts
require(get_stylesheet_directory(). '/php/custom-fonts.php');

// Include custom color scheme
require(get_stylesheet_directory(). '/php/custom-color.php');

//Include theme customizer customizations
require(get_stylesheet_directory(). '/php/custom-customizer.php');

// Include customizations related to theme templates
require(get_stylesheet_directory(). '/php/custom-templates.php');

//Include theme support information feature
require(get_stylesheet_directory(). '/php/custom-support-information.php');

//Include login page upgrades feature
require(get_stylesheet_directory(). '/php/custom-login-page-upgrades.php');

//Include styles
require(get_stylesheet_directory(). '/php/custom-styles.php');

//Include scripts
require(get_stylesheet_directory(). '/php/custom-scripts.php');

//Include customizations related to the 'read more' link
require(get_stylesheet_directory(). '/php/custom-read-more.php');

//Include customizations related to the website 'breadcrumbs'
require(get_stylesheet_directory(). '/php/custom-breadcrumbs.php');

//Include customizations related to implementation of custom meta boxes
require(get_stylesheet_directory(). '/php/custom-meta-boxes.php');

//Include customizations related to sitemaps
require(get_stylesheet_directory(). '/php/custom-sitemap.php');

//Include customizations related to the custom post type: people
require(get_stylesheet_directory(). '/php/custom-post-type-people.php');

//Include customizations related to the custom post type: homepage slider
require(get_stylesheet_directory(). '/php/custom-post-type-slideshow.php');

// Include custom stylesheets for classic and block editors.
require(get_stylesheet_directory() . '/php/custom-editor-styles.php');

// Include customizations related to Twitter
require(get_stylesheet_directory() . '/php/custom-twitter.php');

// Set up auto-updates
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
  'https://github.com/GMU-HI/wp-bruise-zero-gmu-mli-theme/',
  __FILE__,
  'wp-bruise-zero-gmu-mli-theme'
);

function crunchify_print_scripts_styles() {

  $result = [];
  $result['scripts'] = [];
  $result['styles'] = [];

  // Print all loaded Scripts
  global $wp_scripts;
  foreach( $wp_scripts->queue as $script ) :
     $result['scripts'][] =  $wp_scripts->registered[$script]->src . ";";
  endforeach;

  // Print all loaded Styles (CSS)
  global $wp_styles;
  foreach( $wp_styles->queue as $style ) :
     $result['styles'][] =  $wp_styles->registered[$style]->src . ";";
  endforeach;

  return $result;
}
