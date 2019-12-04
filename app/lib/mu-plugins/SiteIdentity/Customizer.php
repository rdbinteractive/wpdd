<?php

namespace WPDD\SiteIdentity;

use WP_Customize_Control;

class Customizer
{
    public function addOptions()
    {
        add_action('customize_register', array($this, 'siteIdentityCustomizerSettings'));
    }

    /**
     * @noinspection PhpUndefinedMethodInspection
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     *
     * @param $wpCustomize
     */
    public function siteIdentityCustomizerSettings($wpCustomize)
    {
        // add a setting for the site logo
        $wpCustomize->add_setting('wpdd_company_name');
        $wpCustomize->add_setting('wpdd_street_address_1');
        $wpCustomize->add_setting('wpdd_street_address_2');
        $wpCustomize->add_setting('wpdd_city');
        $wpCustomize->add_setting('wpdd_state');
        $wpCustomize->add_setting('wpdd_zip');
        $wpCustomize->add_setting('wpdd_country');
        $wpCustomize->add_setting('wpdd_phone');
        $wpCustomize->add_setting('wpdd_fax');

        $wpCustomize->add_control(
            new WP_Customize_Control(
                $wpCustomize,
                'wpdd_company_name',
                array(
                    'label' => 'Company Name',
                    'section' => 'title_tagline',
                    'settings' => 'wpdd_company_name',
                    'type' => 'text',
                )
            )
        );

        $wpCustomize->add_control(
            new WP_Customize_Control(
                $wpCustomize,
                'wpdd_street_address_1',
                array(
                    'label' => 'Street Address',
                    'section' => 'title_tagline',
                    'settings' => 'wpdd_street_address_1',
                    'type' => 'text',
                )
            )
        );

        $wpCustomize->add_control(
            new WP_Customize_Control(
                $wpCustomize,
                'wpdd_street_address_2',
                array(
                    'label' => 'Address 2',
                    'section' => 'title_tagline',
                    'settings' => 'wpdd_street_address_2',
                    'type' => 'text',
                )
            )
        );

        $wpCustomize->add_control(
            new WP_Customize_Control(
                $wpCustomize,
                'wpdd_city',
                array(
                    'label' => 'City',
                    'section' => 'title_tagline',
                    'settings' => 'wpdd_city',
                    'type' => 'text',
                )
            )
        );

        $wpCustomize->add_control(
            new WP_Customize_Control(
                $wpCustomize,
                'wpdd_state',
                array(
                    'label' => 'State',
                    'section' => 'title_tagline',
                    'settings' => 'wpdd_state',
                    'type' => 'text',
                )
            )
        );

        $wpCustomize->add_control(
            new WP_Customize_Control(
                $wpCustomize,
                'wpdd_zip',
                array(
                    'label' => 'Zip Code',
                    'section' => 'title_tagline',
                    'settings' => 'wpdd_zip',
                    'type' => 'text',
                )
            )
        );

        $wpCustomize->add_control(
            new WP_Customize_Control(
                $wpCustomize,
                'wpdd_country',
                array(
                    'label' => 'Country',
                    'section' => 'title_tagline',
                    'settings' => 'wpdd_country',
                    'type' => 'text',
                )
            )
        );

        $wpCustomize->add_control(
            new WP_Customize_Control(
                $wpCustomize,
                'wpdd_phone',
                array(
                    'label' => 'Phone',
                    'section' => 'title_tagline',
                    'settings' => 'wpdd_phone',
                    'type' => 'text',
                )
            )
        );

        $wpCustomize->add_control(
            new WP_Customize_Control(
                $wpCustomize,
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
