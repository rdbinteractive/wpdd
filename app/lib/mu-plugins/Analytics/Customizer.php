<?php

namespace WPDD\Analytics;

use WP_Customize_Control;

class Customizer
{
    public function addOptions()
    {
        add_action('customize_register', array($this, 'analyticsCustomizerSettings'));
    }

    public function analyticsCustomizerSettings($wpCustomize)
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $wpCustomize->add_section('wpddAnalytics', array(
            'title' => __('Analytics', 'wpdd_theme'),
            'priority' => 30,
        ));

        /** @noinspection PhpUndefinedMethodInspection */
        $wpCustomize->add_setting('wpddGATrackingID');

        /** @noinspection PhpUndefinedMethodInspection */
        $wpCustomize->add_control(
            new WP_Customize_Control(
                $wpCustomize,
                'wpddGATrackingID',
                array(
                    'label' => 'Google Analytics Tracking ID',
                    'section' => 'wpddAnalytics',
                    'settings' => 'wpddGATrackingID',
                    'type' => 'text',
                )
            )
        );
    }
}
