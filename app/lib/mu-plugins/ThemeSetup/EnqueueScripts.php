<?php
/**
 * Enqueue scripts.
 *
 * @package WPDD\ThemeSetup
 */

namespace WPDD\ThemeSetup;

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}


/**
 * Class EnqueueScripts
 *
 * @package WPDD\ThemeSetup
 */
class EnqueueScripts
{
    /**
     * Enqueue Scripts.
     */
    public function enqueueScripts()
    {
        // Don't mess with the admin scripts.
        if (!is_admin()) {

            /**
             * Dequeue scripts.
             */
            add_action('wp_enqueue_scripts', array($this, 'dequeuePluginScripts'));

            /**
             * Enqueue Scripts.
             */
            add_action('wp_enqueue_scripts', array($this, 'enqueueThemeScripts'));
        }
    }

    public function dequeuePluginScripts()
    {
        // @see enqueueThemeScripts.
        wp_deregister_script('jquery');
    }

    public function enqueueThemeScripts()
    {
        /**
         * Including jQuery in the theme's bundle can break compatibility with plugins, such as Query Monitor.
         * Ask me how I know.
         *
         * So, we're gonna enqueue jQuery here, but force it to the footer.
         * Note to self: Debug Bar forces jQuery to the head, regardless of what I do here.
         */
        wp_enqueue_script('jquery', '/wp-includes/js/jquery/jquery.js', false, '1.12.4', true);

        // Enqueue app.js
        wp_enqueue_script(
            'wpdd-js',
            get_stylesheet_directory_uri() . '/lib/js/app.min.js',
            'jquery',
            '',
            true
        );
    }
}
