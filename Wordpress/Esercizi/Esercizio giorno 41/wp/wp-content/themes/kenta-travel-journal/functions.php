<?php
/**
 * Theme functions
 *
 * @package Kenta Travel Journal
 */

// don't call the file directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'KENTA_TRAVEL_JOURNAL_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'KENTA_TRAVEL_JOURNAL_VERSION', '1.0.1' );
}

if ( ! defined( 'KENTA_TRAVEL_JOURNAL_PATH' ) ) {
	define( 'KENTA_TRAVEL_JOURNAL_PATH', trailingslashit( get_stylesheet_directory() ) );
}

if ( ! defined( 'KENTA_TRAVEL_JOURNAL_URL' ) ) {
	define( 'KENTA_TRAVEL_JOURNAL_URL', trailingslashit( get_stylesheet_directory_uri() ) );
}

if ( ! defined( 'KENTA_TRAVEL_JOURNAL_ASSETS_URL' ) ) {
	define( 'KENTA_TRAVEL_JOURNAL_ASSETS_URL', KENTA_TRAVEL_JOURNAL_URL . 'assets/' );
}

// Helper functions
require_once KENTA_TRAVEL_JOURNAL_PATH . 'helpers.php';
// Customizer settings hook
require_once KENTA_TRAVEL_JOURNAL_PATH . 'setup.php';
// Theme patterns
require_once KENTA_TRAVEL_JOURNAL_PATH . 'patterns.php';
// Customizer settings hook
require_once KENTA_TRAVEL_JOURNAL_PATH . 'customizer.php';
