<?php 
/**
 * This is a Flux pagecontroller.
 *
 */
// Include the essential config-file which also creates the $flux variable with its defaults.
include(__DIR__.'/config.php'); 


// Define what to include to make the plugin to work
$flux['stylesheets'][]        = 'css/slideshow.css';
$flux['javascript_include'][] = 'js/slideshow.js';


// Do it and store it all in variables in the Flux container.
$flux['title'] = "Slideshow för att testa JavaScript i Flux";

$flux['header'] = <<<EOD

<img class='sitelogo' src='img/fluxlogo.png' alt='Flux Logo'/>
<span class='sitetitle'>Flux webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;

$flux['main'] = <<<EOD
<div id="slideshow" class='slideshow' data-host="" data-path="img/me/" data-images='["08.jpg", "26.jpg", "27.jpg", "6540.jpg"]'>
<img src='img/me/08.jpg' width='700px' height='200px' alt='Pictures'/>
</div>

<h1>En slideshow med JavaScript</h1>
<p>Detta är en exempelsida som visar hur Flux fungerar tillsammans med JavaScript.</p>
EOD;

$flux['footer'] = <<<EOD
<footer><span class='sitefooter'><a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;

// Finally, leave it all to the rendering phase of Flux.
include(FLUX_THEME_PATH);