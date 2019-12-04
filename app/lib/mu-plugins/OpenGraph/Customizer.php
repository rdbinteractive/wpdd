<?php

namespace WPDD\OpenGraph;

use WP_Customize_Control;
use WP_Customize_Image_Control;

class Customizer
{
    public function addOptions()
    {
        add_action('customize_register', array($this, 'analyticsCustomizerSettings'));
    }

    /** @noinspection PhpUndefinedMethodInspection */
    public function analyticsCustomizerSettings($wpCustomize)
    {
        $wpCustomize->add_section('wpddOpenGraph', array(
            'title' => __('Open Graph', 'wpdd_theme'),
            'priority' => 30,
        ));

        $wpCustomize->add_setting('wpddOGTitle');
        $wpCustomize->add_setting('wpddOGDescription');
        $wpCustomize->add_setting('wpddOGType');
        $wpCustomize->add_setting('wpddOGURL');
        $wpCustomize->add_setting('wpddOGImage');

        $wpCustomize->add_control(
            new WP_Customize_Control(
                $wpCustomize,
                'wpddOGTitle',
                array(
                    'label' => 'Open Graph Title',
                    'section' => 'wpddOpenGraph',
                    'settings' => 'wpddOGTitle',
                    'type' => 'text',
                )
            )
        );

        $wpCustomize->add_control(
            new WP_Customize_Control(
                $wpCustomize,
                'wpddOGType',
                array(
                    'label' => 'Open Graph Type',
                    'section' => 'wpddOpenGraph',
                    'settings' => 'wpddOGType',
                    'type' => 'text',
                )
            )
        );

        $wpCustomize->add_control(
            new WP_Customize_Control(
                $wpCustomize,
                'wpddOGURL',
                array(
                    'label' => 'Open Graph URL',
                    'section' => 'wpddOpenGraph',
                    'settings' => 'wpddOGURL',
                    'type' => 'text',
                )
            )
        );

        $wpCustomize->add_control(
            new WP_Customize_Control(
                $wpCustomize,
                'wpddOGDescription',
                array(
                    'label' => 'Open Graph Description',
                    'section' => 'wpddOpenGraph',
                    'settings' => 'wpddOGDescription',
                    'type' => 'textarea',
                )
            )
        );

        $wpCustomize->add_control(
            new WP_Customize_Image_Control(
                $wpCustomize,
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
