<?php
/**
 * Plugin Name: WP DryDock Bootstrap
 * Plugin URI: https://docs.wpdrydock.com/rdbi-theme-bootstrap/introduction-to-the-theme-bootstrap
 * Description: Options, post types and custom meta. Do not disable.
 * Author: Robert Bardall, RDB Interactive, LLC
 * Version: 1.0
 * Author URI: https://rdbinteractive.com
 */

namespace WPDD;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Initialize Site Functionality and Theme Setup.
 */
$init = new DryDock();
$init->bootstrap();

class DryDock
{
    public function bootstrap()
    {
        /**
         * Theme Setup.
         */
        (new ThemeSetup\ThemeSetup())->doSetup();

        /**
         * Enqueue Styles.
         */
        (new ThemeSetup\EnqueueStyles())->enqueueStyles();

        /**
         * Enqueue Scripts.
         */
        (new ThemeSetup\EnqueueScripts())->enqueueScripts();

        /**
         * Register Sidebars
         */
        (new ThemeSetup\RegisterSidebars())->registerSidebars();

        /**
         * Register Navigation
         */
        (new ThemeSetup\RegisterNavigation())->init();

        /**
         * Register custom image sizes.
         * Each custom image size should be an array that includes the arguments for add_image_size.
         *
         * @see https://developer.wordpress.org/reference/functions/add_image_size/
         * @see https://docs.wpdrydock.com/rdbi-theme-bootstrap/rdbi-themesetup-imagesizes
         */
        $custom_image_sizes = array(
            // array(
            //     'name' => 'WPDD_1680', // string
            //     'width' => 1680,       // int
            //     'height' => 1050,      // int
            //     'crop' => true,        // bool|array
            // ),
        );

        (new ThemeSetup\RegisterImageSizes($custom_image_sizes))->addImageSizes();

        /**
         *  Add additional Site Identity information to the customizer.
         */
        (new SiteIdentity\Init())->init();

        /**
         *  Add Google Analytics Code Field to the customizer.
         */
        (new Analytics\Init())->init();

        /**
         *  Add Open Graph Section to the customizer.
         */
        (new OpenGraph\Init())->init();

        /**
         * Initialize ACF.
         */
        (new Lib\ACFInit())->init();

        /**
         * Add Support Widget to Dashboard.
         */
        (new SupportWidget\Init())->init();

        /**
         * Enable Query Monitor & Debug Bar.
         */
        if ('true' === ENABLE_QUERY_MONITOR) :
            require_once(__DIR__.'/Lib/query-monitor/query-monitor.php');
        endif;

        if ('true' === ENABLE_DEBUG_BAR) :
            require_once(__DIR__.'/Lib/debug-bar/debug-bar.php');
        endif;
    }
}
