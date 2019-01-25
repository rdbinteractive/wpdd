<?php

namespace WPDD\ThemeSetup;

/**
 * Class RegisterNavigation
 *
 * @package WPDD\ThemeSetup
 */
class RegisterNavigation
{

    public function init()
    {
        add_action('after_setup_theme', array($this, 'registerPrimaryNav'));
    }

    public function wpddPrimaryNav()
    {
        wp_nav_menu(array(
            'container'      => false,
            'menu'           => __('Primary Navigation', 'wpdd_theme'),
            'menu_class'     => '',
            'theme_location' => 'primary-nav',
            'depth'          => 0,
        ));
    }

    public function registerPrimaryNav()
    {
        register_nav_menu('primary-nav', __('Primary Navigation', 'wpdd_theme'));
    }
}
