 <?php 
/**
 * This is a Flux pagecontroller.
 *
 */
// Include the essential config-file which also creates the $flux variable with its defaults.
include(__DIR__.'/config.php'); 



// Do it and store it all in variables in the Flux container.
$anax['title'] = "404";
$anax['header'] = "";
$anax['main'] = "This is a Flux 404. Document is not here.";
$anax['footer'] = "";

// Send the 404 header 
header("HTTP/1.0 404 Not Found");


// Finally, leave it all to the rendering phase of Flux.
include(FLUX_THEME_PATH);
