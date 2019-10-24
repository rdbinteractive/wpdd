<?php
/**
 * Enqueue stylesheets.
 *
 * @package WPDD\ThemeSetup
 */

namespace WPDD\ThemeSetup;

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Class EnqueueStyles
 *
 * @package WPDD\ThemeSetup
 */
class EnqueueStyles
{
    /**
     * Enqueue Styles
     */
    public function enqueueStyles()
    {
        if (!is_admin()) {

            /**
             * Enqueue Styles.
             */
            add_action('wp_enqueue_scripts', array($this, 'dequeuePluginStyles'));

            /**
             * Enqueue Styles.
             */
            //add_action('wp_enqueue_scripts', array( $this, 'enqueueThemeStyles'));
        }
    }

    public function dequeuePluginStyles()
    {
        // Gutenberg
        wp_dequeue_style('wp-block-library');

        // WooCommerce
        // add_filter('woocommerce_enqueue_styles', '__return_empty_array');
    }

    public function enqueueThemeStyles()
    {
        wp_enqueue_style(
            'base',
            get_stylesheet_directory_uri() .
            '/lib/style/style.min.css',
            array(),
            '',
            'all'
        );
    }
}
