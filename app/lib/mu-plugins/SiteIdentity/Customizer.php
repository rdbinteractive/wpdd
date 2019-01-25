<?php

namespace WPDD\SiteIdentity;

class Customizer
{
    public function addOptions()
    {
        add_action('customize_register', array($this, 'siteIdentityCustomizerSettings'));
    }

    public function siteIdentityCustomizerSettings($wp_customize)
    {
        // add a setting for the site logo
        $wp_customize->add_setting('wpdd_company_name');
        $wp_customize->add_setting('wpdd_street_address_1');
        $wp_customize->add_setting('wpdd_street_address_2');
        $wp_customize->add_setting('wpdd_city');
        $wp_customize->add_setting('wpdd_state');
        $wp_customize->add_setting('wpdd_zip');
        $wp_customize->add_setting('wpdd_country');
        $wp_customize->add_setting('wpdd_phone');
        $wp_customize->add_setting('wpdd_fax');

        $wp_customize->add_control(
            new \WP_Customize_Control(
                $wp_customize,
                'wpdd_company_name',
                array(
                    'label' => 'Company Name',
                    'section' => 'title_tagline',
                    'settings' => 'wpdd_company_name',
                    'type' => 'text',
                )
            )
        );

        $wp_customize->add_control(
            new \WP_Customize_Control(
                $wp_customize,
                'wpdd_street_address_1',
                array(
                    'label' => 'Street Address',
                    'section' => 'title_tagline',
                    'settings' => 'wpdd_street_address_1',
                    'type' => 'text',
                )
            )
        );

        $wp_customize->add_control(
            new \WP_Customize_Control(
                $wp_customize,
                'wpdd_street_address_2',
                array(
                    'label' => 'Address 2',
                    'section' => 'title_tagline',
                    'settings' => 'wpdd_street_address_2',
                    'type' => 'text',
                )
            )
        );

        $wp_customize->add_control(
            new \WP_Customize_Control(
                $wp_customize,
                'wpdd_city',
                array(
                    'label' => 'City',
                    'section' => 'title_tagline',
                    'settings' => 'wpdd_city',
                    'type' => 'text',
                )
            )
        );

        $wp_customize->add_control(
            new \WP_Customize_Control(
                $wp_customize,
                'wpdd_state',
                array(
                    'label' => 'State',
                    'section' => 'title_tagline',
                    'settings' => 'wpdd_state',
                    'type' => 'text',
                )
            )
        );

        $wp_customize->add_control(
            new \WP_Customize_Control(
                $wp_customize,
                'wpdd_zip',
                array(
                    'label' => 'Zip Code',
                    'section' => 'title_tagline',
                    'settings' => 'wpdd_zip',
                    'type' => 'text',
                )
            )
        );

        $wp_customize->add_control(
            new \WP_Customize_Control(
                $wp_customize,
                'wpdd_country',
                array(
                    'label' => 'Country',
                    'section' => 'title_tagline',
                    'settings' => 'wpdd_country',
                    'type' => 'text',
                )
            )
        );

        $wp_customize->add_control(
            new \WP_Customize_Control(
                $wp_customize,
                'wpdd_phone',
                array(
                    'label' => 'Phone',
                    'section' => 'title_tagline',
                    'settings' => 'wpdd_phone',
                    'type' => 'text',
                )
            )
        );

        $wp_customize->add_control(
            new \WP_Customize_Control(
                $wp_customize,
                'wpdd_fax',
                array(
                    'label' => 'Fax',
                    'section' => 'title_tagline',
                    'settings' => 'wpdd_fax',
                    'type' => 'text',
                )
            )
        );
    }
}
