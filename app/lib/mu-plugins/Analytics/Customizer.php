<?php

namespace WPDD\Analytics;

class Customizer
{
    public function addOptions()
    {
        add_action('customize_register', array($this, 'analyticsCustomizerSettings'));
    }

    public function analyticsCustomizerSettings($wp_customize)
    {
        $wp_customize->add_section('wpddAnalytics', array(
            'title' => __('Analytics', 'wpdd_theme'),
            'priority' => 30,
        ));

        $wp_customize->add_setting('wpddGATrackingID');

        $wp_customize->add_control(
            new \WP_Customize_Control(
                $wp_customize,
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
