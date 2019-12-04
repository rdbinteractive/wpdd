<?php

namespace WPDD\SupportWidget;

class Init
{
    public function init()
    {
        if ('true' === ENABLE_SUPPORT_WIDGET) :
            add_action('wp_dashboard_setup', array($this, 'addDashboardWidget'));
        endif;
    }

    public function dashboardWidget()
    {
        $theme = wp_get_theme();
        $themeName = $theme->get('Name');
        $themeVersion = $theme->get('Version');

        $widget = '<ul>';
        $widget .= '<li><b>Theme:</b> ' . $themeName . ', v' . $themeVersion . '</li>';
        $widget .= '<li><b>Author:</b> ' . SW_DEVELOPER_NAME . '</li>';
        $widget .= '<li>';
        $widget .= '<b>Support:</b> <a type="tel" href="' . SW_DEVELOPER_PHONE . '">' . SW_DEVELOPER_PHONE . '</a>';
        $widget .= '</li>';
        $widget .= '<li><b>Email:</b> <a href="' . SW_DEVELOPER_EMAIL . '">' . SW_DEVELOPER_EMAIL . '</a></li>';
        $widget .= '<li>';
        $widget .= '<b>Developer Documentation: </b>';
        $widget .= '<a target="_blank" href="https://docs.wpdrydock.com/rdbi-theme-bootstrap/introduction-to-the-theme-bootstrap">Documentation</a>'; // @codingStandardsIgnoreLine.
        $widget .= '</a>';
        $widget .= '</ul>';

        echo $widget;
    }

    public function addDashboardWidget()
    {
        wp_add_dashboard_widget('wp_dashboard_widget', 'Support', array($this, 'dashboardWidget'));
    }
}
