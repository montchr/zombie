/**
 * Lunchies 2013 Scripts
 *
 * Enqueued in lunchies-2013-functions.php
 */

// as the page loads, call these scripts
jQuery(document).ready(function($) {

	/*
	Responsive jQuery is a tricky thing.
	There's a bunch of different ways to handle
	it so, be sure to research and find the one
	that works for you best.
	*/

	/* getting viewport width */
	var responsive_viewport = document.documentElement.clientWidth;

	/* if is below 481px */
	if (responsive_viewport < 481) {

	}

	/* if is larger than 481px */
	if (responsive_viewport > 481) {

	}

	/* if is above 768px */
	if (responsive_viewport > 768) {

	}

	/* off the bat large screen actions */
	if (responsive_viewport > 1030) {

	}




	/* 300x250 sidebar ad display-related js (see style.less for info) - should load appropriate 300x250 ad js above this size */
	if (responsive_viewport > 1140) {

	}


	// add all your scripts here

}); /* end of as page load scripts */

jQuery(window).load(function() {

}); /* end onload scripts */



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
