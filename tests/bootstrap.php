<?php
/**
 * @package WPSEO\Unittests
 */

// disable xdebug backtrace
if ( function_exists( 'xdebug_disable' ) ) {
	xdebug_disable();
}

echo 'Welcome to the Yoast SEO Test Suite' . PHP_EOL;
echo 'Version: 1.0' . PHP_EOL . PHP_EOL;

$plugin_dir = '../../';

if ( getenv( 'WP_PLUGIN_DIR' ) !== false ) {
	$plugin_dir = getenv( 'WP_PLUGIN_DIR' );
}

define( 'WP_PLUGIN_DIR', $plugin_dir );
define( 'YOAST_ENVIRONMENT', 'production' );

$GLOBALS['wp_tests_options'] = array(
	'active_plugins' => array( 'wordpress-seo/wp-seo.php' ),
);

if ( getenv( 'WP_DEVELOP_DIR' ) !== false ) {
	require getenv( 'WP_DEVELOP_DIR' ) . 'tests/phpunit/includes/bootstrap.php';
}
else {
	require '../../../../tests/phpunit/includes/bootstrap.php';
}

// include unit test base class
require_once dirname( __FILE__ ) . '/framework/class-wpseo-unit-test-case.php';
