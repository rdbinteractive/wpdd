<?php

namespace WPDD\OpenGraph;

class Customizer
{
    public function addOptions()
    {
        add_action('customize_register', array($this, 'analyticsCustomizerSettings'));
    }

    public function analyticsCustomizerSettings($wp_customize)
    {
        $wp_customize->add_section('wpddOpenGraph', array(
            'title' => __('Open Graph', 'wpdd_theme'),
            'priority' => 30,
        ));

        $wp_customize->add_setting('wpddOGTitle');
        $wp_customize->add_setting('wpddOGDescription');
        $wp_customize->add_setting('wpddOGType');
        $wp_customize->add_setting('wpddOGURL');
        $wp_customize->add_setting('wpddOGImage');

        $wp_customize->add_control(
            new \WP_Customize_Control(
                $wp_customize,
                'wpddOGTitle',
                array(
                    'label' => 'Open Graph Title',
                    'section' => 'wpddOpenGraph',
                    'settings' => 'wpddOGTitle',
                    'type' => 'text',
                )
            )
        );

        $wp_customize->add_control(
            new \WP_Customize_Control(
                $wp_customize,
                'wpddOGType',
                array(
                    'label' => 'Open Graph Type',
                    'section' => 'wpddOpenGraph',
                    'settings' => 'wpddOGType',
                    'type' => 'text',
                )
            )
        );

        $wp_customize->add_control(
            new \WP_Customize_Control(
                $wp_customize,
                'wpddOGURL',
                array(
                    'label' => 'Open Graph URL',
                    'section' => 'wpddOpenGraph',
                    'settings' => 'wpddOGURL',
                    'type' => 'text',
                )
            )
        );

        $wp_customize->add_control(
            new \WP_Customize_Control(
                $wp_customize,
                'wpddOGDescription',
                array(
                    'label' => 'Open Graph Description',
                    'section' => 'wpddOpenGraph',
                    'settings' => 'wpddOGDescription',
                    'type' => 'textarea',
                )
            )
        );

        $wp_customize->add_control(
            new \WP_Customize_Image_Control(
                $wp_customize,
                'wpddOGImage',
                array(
                    'label'      => 'Open Graph Image',
                    'section'    => 'wpddOpenGraph',
                    'settings'   => 'wpddOGImage',
                )
            )
        );
    }
}


