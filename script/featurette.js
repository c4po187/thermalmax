/**
 * Featurette.js
 *
 * @author Richard Underwood 2015
 * @email c4po187@gmail.com
 *
 * @package thermalmax
 *
 * @summary
 * Featurette is a simple script that displays a set of 
 * features (in this case a selection of strings), one at
 * a time by iterating through the set using subtle, fading
 * animations.
 */
 
$(document).ready(function() {	
	// Array of strings, representing our features
	var f = [
		"Professionally fitted,\nproperly priced",
		"No gimmicks\nNo pressure selling",
		"Make your home 60% more\nthermally efficient by upgrading\nor installing triple glazing",
		"Surprise yourself with\nhow little it costs -\nBook an appointment today!"];
	
	var init = false;
	var f_i = 0;	// Current index

	// Set to the first feature intially
	$('#feature').text(f[f_i]);
	
	// Iterate through all strings in the array, fading in and out as we traverse...
	(function nextFeature() {
		$('#feature').delay(4000).fadeOut(500, function() {
			$(this).text(f[++f_i % f.length]).fadeIn(500, function() {
				nextFeature();
			});
		});
	}());
});
 
// END OF FILE