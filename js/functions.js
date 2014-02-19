/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens.
 */
( function() {
	var container, button, menu;

	container = document.getElementById( 'site-navigation' );
	if ( ! container )
		return;

	button = container.getElementsByTagName( 'h1' )[0];
	if ( 'undefined' === typeof button )
		return;

	menu = container.getElementsByTagName( 'ul' )[0];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	if ( -1 === menu.className.indexOf( 'nav-menu' ) )
		menu.className += ' nav-menu';

	button.onclick = function() {
		if ( -1 !== container.className.indexOf( 'toggled' ) )
			container.className = container.className.replace( ' toggled', '' );
		else
			container.className += ' toggled';
	};
} )();

// Removing Inline Styling for Width and Height Attributes on Images.
jQuery(document).ready(function($){
$('.wp-caption').removeAttr('style');
});

// Keep Footer at Bottom of Page
// http://blog.gaijindesign.com
jQuery(document).ready( function ($){
$(window).bind("load", function() {
	stickSiteDoc();
});

$(window).resize(function() {
	stickSiteDoc();
});

function stickSiteDoc() {
	var docHeight = $(window).height();
	var SiteDocHeight = $('#site-doc').height();
	var SiteDocTop = $('#site-doc').position().top + SiteDocHeight;

	if (SiteDocTop < docHeight) {
		$('#site-doc').css('margin-top', 0 + (docHeight - SiteDocTop) + 'px') .css("z-index","12");
	}
}
});