<?php
/**
 * Class RegisterSidebars
 *
 * @package WPDD\ThemeSetup
 */

namespace WPDD\ThemeSetup;

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Class RegisterSidebars
 *
 * @package WPDD\ThemeSetup
 */
class RegisterSidebars
{

    /**
     * Register all sidebars.
     */
    public function registerSidebars()
    {
        add_action('widgets_init', array($this, 'registerPrimarySidebar'));
    }

    /**
     * Create a primary, default sidebar.
     */
    public function registerPrimarySidebar()
    {
        register_sidebar(array(
            'id'            => 'primary-sidebar',
            'name'          => __('Primary Sidebar', 'wpdd_theme'),
            'description'   => __('Primary Sidebar', 'wpdd_theme'),
            'before_widget' => '<div class="widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget__title">',
            'after_title'   => '</h4>',
        ));
    }
}
