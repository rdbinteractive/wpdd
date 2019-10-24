<?php
namespace WPDD\Color\Lib;

class Settings
{
    public $settings;

    public function settings()
    {
        $settings = [
            'base' => [
                'name' => 'base',
                'title' => __('Base Color Settings', 'wpdd'),
                'description' => __('Base Color Settings', 'wpdd'),
                'multi' => false,
                'controls' => [
                    'body' => [
                        'name' => 'wpddColorBodyText',
                        'title' => __('Base Text Color', 'wpdd'),
                        'description' => __('Base Text Color', 'wpdd'),
                        'default' => '#fff',
                    ],
                ]
            ],

            'button' => [
                'name' => 'button',
                'title' => __('Buttons', 'wpdd'),
                'description' => __('Button Colors', 'wpdd'),
                'multi' => true,
                'controls' => [
                    'buttonPrimary' => [
                        'default' => [
                            'name' => 'buttonPrimary',
                            'title' => __('Setting Title', 'wpdd'),
                            'description' => __('Setting Description', 'wpdd'),
                            'default' => '#fff',
                        ],

                        'hover' => [
                            'name' => 'buttonHover',
                            'title' => __('Setting Title', 'wpdd'),
                            'description' => __('Setting Description', 'wpdd'),
                            'default' => '#fff',
                        ],

                        'active' => [
                            'name' => 'buttonActive',
                            'title' => __('Setting Title', 'wpdd'),
                            'description' => __('Setting Description', 'wpdd'),
                            'default' => '#fff',
                        ],

                        'focus' => [
                            'name' => 'buttonFocus',
                            'title' => __('Setting Title', 'wpdd'),
                            'description' => __('Setting Description', 'wpdd'),
                            'default' => '#fff',
                        ],
                    ],
                ]
            ],

            //'buttonSecondary' => [
            //    'default' => [
            //        'name' => 'settingName',
            //        'title' => __('Setting Title', 'wpdd'),
            //        'description' => __('Setting Description', 'wpdd'),
            //        'default' => '#fff',
            //    ],

            //    'hover' => [
            //        'name' => 'settingName',
            //        'title' => __('Setting Title', 'wpdd'),
            //        'description' => __('Setting Description', 'wpdd'),
            //        'default' => '#fff',
            //    ],

            //    'active' => [
            //        'name' => 'settingName',
            //        'title' => __('Setting Title', 'wpdd'),
            //        'description' => __('Setting Description', 'wpdd'),
            //        'default' => '#fff',
            //    ],

            //    'focus' => [
            //        'name' => 'settingName',
            //        'title' => __('Setting Title', 'wpdd'),
            //        'description' => __('Setting Description', 'wpdd'),
            //        'default' => '#fff',
            //    ],
            //],

            //'buttonAlternate' => [
            //    'default' => [
            //        'name' => 'settingName',
            //        'title' => __('Setting Title', 'wpdd'),
            //        'description' => __('Setting Description', 'wpdd'),
            //        'default' => '#fff',
            //    ],

            //    'hover' => [
            //        'name' => 'settingName',
            //        'title' => __('Setting Title', 'wpdd'),
            //        'description' => __('Setting Description', 'wpdd'),
            //        'default' => '#fff',
            //    ],

            //    'active' => [
            //        'name' => 'settingName',
            //        'title' => __('Setting Title', 'wpdd'),
            //        'description' => __('Setting Description', 'wpdd'),
            //        'default' => '#fff',
            //    ],

            //    'focus' => [
            //        'name' => 'settingName',
            //        'title' => __('Setting Title', 'wpdd'),
            //        'description' => __('Setting Description', 'wpdd'),
            //        'default' => '#fff',
            //    ],
            //],
        ];

        return $settings;
    }
}
