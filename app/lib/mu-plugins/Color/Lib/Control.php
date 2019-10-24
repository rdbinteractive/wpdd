<?php
namespace WPDD\Color\Lib;

use WP_Customize_Color_Control;

class Control
{
    public function addControl($wp_customize, $section, $control)
    {
        ?>
        <pre><?php print_r($control) ?></pre>
        <?php
        $wp_customize->add_setting(
            $control['name'],
            array(
                'default' => $control['default'],
                'sanitize_callback' => 'sanitize_hex_color',
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                $control['name'],
                array(
                    'description' => $control['description'],
                    'label' => $control['title'],
                    'section' => $section,
                    'settings' => $control['name'],
                )
            )
        );
    }
}
