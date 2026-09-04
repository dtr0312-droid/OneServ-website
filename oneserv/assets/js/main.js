(function () {
	'use strict';

	// Mobile nav toggle.
	var toggle = document.getElementById( 'nav-toggle' );
	var nav = document.getElementById( 'main-nav' );
	if ( toggle && nav ) {
		toggle.addEventListener( 'click', function () {
			var isOpen = nav.classList.toggle( 'is-open' );
			toggle.setAttribute( 'aria-expanded', isOpen ? 'true' : 'false' );
		} );
	}

	// Mobile submenu toggles (tap parent link to expand children instead of navigating away).
	if ( nav ) {
		var parents = nav.querySelectorAll( '.menu-item-has-children > a' );
		parents.forEach( function ( link ) {
			link.addEventListener( 'click', function ( e ) {
				if ( window.innerWidth > 960 ) return;
				var li = link.parentElement;
				if ( ! li.classList.contains( 'is-open' ) ) {
					e.preventDefault();
					li.classList.add( 'is-open' );
				}
			} );
		} );
	}

	// Sticky header shadow on scroll.
	var header = document.getElementById( 'masthead' );
	if ( header ) {
		window.addEventListener( 'scroll', function () {
			header.style.boxShadow = window.scrollY > 4 ? '0 4px 16px rgba(12,32,54,0.08)' : 'none';
		} );
	}
})();
