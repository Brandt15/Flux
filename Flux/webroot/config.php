<?php
/**
 * Config-file for Flux. Change settings here to affect installation.
 *
 */
 
/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly
 
 
/**
 * Define Flux paths.
 *
 */
define('FLUX_INSTALL_PATH', __DIR__ . '/..');
define('FLUX_THEME_PATH', FLUX_INSTALL_PATH . '/theme/render.php');
 
 
/**
 * Include bootstrapping functions.
 *
 */
include(FLUX_INSTALL_PATH . '/src/bootstrap.php');
 
 
/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();
 
 
/**
 * Create the Flux variable.
 *
 */
$flux = array();
 
 
/**
 * Site wide settings.
 *
 */
$flux['lang']         = 'sv';
$flux['title_append'] = ' | Flux en webbtemplate';


 /**
 * Theme related settings.
 *
 */
//$flux['stylesheet'] = 'css/style.css';
$flux['stylesheets'] = array('css/style.css');
$flux['favicon']    = 'icon.ico';
 

/**
 * Settings for JavaScript.
 *
 */
$flux['modernizr'] = 'js/modernizr.js';
$flux['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
//$flux['jquery'] = null; // To disable jQuery
$flux['javascript_include'] = array();
//$flux['javascript_include'] = array('js/main.js'); // To add extra javascript


/**
 * Google analytics.
 *
 */
$flux['google_analytics'] = 'UA-22093351-1'; // Set to null to disable google analytics

