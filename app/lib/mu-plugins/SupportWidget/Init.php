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
        $theme_name = $theme->get('Name');
        $theme_version = $theme->get('Version');

        $widget_info = '<ul>';
        $widget_info .= '<li><b>Theme:</b> ' . $theme_name . ', v' . $theme_version . '</li>';
        $widget_info .= '<li><b>Author:</b> ' . SW_DEVELOPER_NAME . '</li>';
        $widget_info .= '<li><b>Support:</b> <a type="tel" href="'.SW_DEVELOPER_PHONE.'">'.SW_DEVELOPER_PHONE.'</a></li>';
        $widget_info .= '<li><b>Email:</b> <a href="'.SW_DEVELOPER_EMAIL.'">'.SW_DEVELOPER_EMAIL.'</a></li>';
        $widget_info .= '<li><b>Developer Documentation: </b> <a target="_blank" href="https://docs.wpdrydock.com/rdbi-theme-bootstrap/introduction-to-the-theme-bootstrap">Documentation</a>';
        $widget_info .= '</ul>';

        echo $widget_info;
    }

    public function addDashboardWidget()
    {
        wp_add_dashboard_widget('wp_dashboard_widget', 'Support', array($this, 'dashboardWidget'));
    }
}
