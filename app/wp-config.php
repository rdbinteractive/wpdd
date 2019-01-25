<?php

/**
 * PSR-4/WordPress Config Bridge.
 * Requires the autoloader.
 * Requires Dotenv.
 * Loads wp-config-env.php from ../config/environment
 */

// Autoloader.
require_once __DIR__ . '/../vendor/autoload.php';

// Dotenv.
$dotenv = new Dotenv\Dotenv(__DIR__ . '/..');
$dotenv->load();

/**
 * The wp-config file.
 */
require_once dirname(__DIR__) . '/wp-config-env.php';

/**
 * Absolute path to the WordPress directory.
 */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/**
 * Sets up WordPress vars and included files.
 */
require_once ABSPATH . 'wp-settings.php';
