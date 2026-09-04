<?php
/**
 * Inline SVG icon set. Kept as small, hand-drawn line icons so the theme
 * has zero external image/icon-font dependencies.
 */

if ( ! defined( 'ABSPATH' ) ) exit;

function oneserv_icon( $name ) {
	$icons = array(
		'boiler' => '<svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><rect x="10" y="6" width="28" height="36" rx="4"/><path d="M17 16h14M17 22h14M20 30h8"/><circle cx="24" cy="36" r="2.4" fill="currentColor" stroke="none"/></svg>',
		'shield' => '<svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M24 5l16 6v11c0 10-7 17-16 21C15 39 8 32 8 22V11z"/><path d="M17 24l5 5 10-11"/></svg>',
		'wrench' => '<svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M31 8a9 9 0 00-11.8 11.8L8 31l6 6 11.2-11.2A9 9 0 0037 15l-6.5 6.5-4-4z"/></svg>',
		'spanner' => '<svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M35 13a8 8 0 01-10.6 10.6L12 36l-4-4 12.6-12.4A8 8 0 0131 8z"/></svg>',
		'droplet' => '<svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M24 6s13 15 13 24a13 13 0 01-26 0C11 21 24 6 24 6z"/><path d="M17 30a7 7 0 007 7"/></svg>',
		'building' => '<svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><rect x="8" y="10" width="20" height="32"/><rect x="28" y="20" width="12" height="22"/><path d="M13 16h4M13 23h4M13 30h4M19 16h4M19 23h4M19 30h4M32 26h4M32 33h4"/></svg>',
		'check' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12.5l5 5L20 6"/></svg>',
		'phone' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h4l2 5-2.5 1.5a11 11 0 005 5L15 13l5 2v4a2 2 0 01-2.2 2A17 17 0 013 6.2 2 2 0 015 4z"/></svg>',
		'mail' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M4 7l8 6 8-6"/></svg>',
		'pin' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s7-7.5 7-13a7 7 0 10-14 0c0 5.5 7 13 7 13z"/><circle cx="12" cy="9" r="2.5"/></svg>',
		'clock' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3.5 2"/></svg>',
		'star' => '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.5l3 6.4 6.9.8-5.1 4.8 1.4 6.9-6.2-3.5-6.2 3.5 1.4-6.9-5.1-4.8 6.9-.8z"/></svg>',
		'quote' => '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M4 8c0-2.5 2-4.5 4.5-4.5V6C7.1 6 6 7.1 6 8.5V9h2.5V16H3V9c0-.3 0-.7.1-1zm10 0c0-2.5 2-4.5 4.5-4.5V6c-1.4 0-2.5 1.1-2.5 2.5V9h2.5V16H13V9c0-.3 0-.7.1-1z"/></svg>',
		'arrow' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>',
		'facebook' => '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M15 8.5h2.5V5.2C17 5 15.9 5 14.7 5 12.1 5 10.5 6.6 10.5 9.4v2.4H7.7v3.4h2.8V22h3.5v-6.8h2.8l.5-3.4h-3.3V9.7c0-1 .3-1.7 1.6-1.7z"/></svg>',
		'twitter' => '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M21 6.4c-.7.3-1.4.5-2.2.6.8-.5 1.4-1.2 1.7-2.2-.7.5-1.6.8-2.4 1a3.8 3.8 0 00-6.5 3.5A10.9 10.9 0 014 5.6a3.9 3.9 0 001.2 5.2c-.6 0-1.2-.2-1.7-.5v.1c0 1.9 1.3 3.4 3.1 3.8-.6.1-1.1.2-1.7.1a3.9 3.9 0 003.6 2.7A7.7 7.7 0 013 18.4a10.8 10.8 0 005.9 1.7c7 0 10.9-6 10.9-11.1v-.5c.8-.5 1.4-1.2 1.9-2z"/></svg>',
		'instagram' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.2" cy="6.8" r="1"/></svg>',
	);

	return isset( $icons[ $name ] ) ? $icons[ $name ] : $icons['check'];
}
