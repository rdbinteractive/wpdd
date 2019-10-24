<?php
namespace WPDD\Color;

use WPDD\Color\Lib\MultiSection;
use WPDD\Color\Lib\Section;

class Customizer
{
    public $colorSettings;

    public function __construct($colorSettings)
    {
        $this->colorSettings = $colorSettings;
        add_action('customize_register', array($this, 'options'));
    }

    public function options($wp_customize)
    {
        $wp_customize->add_panel('wpddColor', array(
            'priority' => 0,
            'capability' => 'edit_theme_options',
            'title' => __('Color', 'wpdd'),
            'description' => __('Edit theme colors', 'wpdd'),
        ));

        foreach ($this->colorSettings as $section) :
            if (!$section['multi']) :
                new Section(
                    $wp_customize,
                    [
                        'name' => $section['name'],
                        'panel' => 'wpddColor',
                        'title' => $section['title'],
                        'description' => $section['description'],
                        'capability' => 'edit_theme_options',
                        'priority' => 0,
                        'controls' => $section['controls'],
                    ]
                );
            else :
                new MultiSection(
                    $wp_customize,
                    [
                        'name' => $section['name'],
                        'panel' => 'wpddColor',
                        'title' => $section['title'],
                        'description' => $section['description'],
                        'capability' => 'edit_theme_options',
                        'priority' => 0,
                        'controls' => $section['controls'],
                    ]
                );
            endif;
        endforeach;
    }
}
