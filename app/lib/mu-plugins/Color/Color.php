<?php
namespace WPDD\Color;

use WPDD\Color\Lib\Settings;

class Color
{
    /**
     * The defaults for each color field.
     * I.e., Title, Description, Default Color.
     *
     * @var array
     */
    protected $colorSettings;

    public function __construct()
    {
        $this->colorSettings = (new Settings())->settings();
        (new Customizer($this->colorSettings));
    }
}
