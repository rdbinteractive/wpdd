<?php

namespace WPDD\ThemeSetup;

class RegisterImageSizes
{
    public array $sizesToAdd;

    public function __construct($imageSizes)
    {
        if (! count($imageSizes) > 0) :
            $this->sizesToAdd = [];
        else :
            $this->sizesToAdd = $imageSizes;
        endif;
    }

    public function addImageSizes()
    {
        if ($this->sizesToAdd !== []) :
            foreach ($this->sizesToAdd as $size) :
                add_image_size($size['name'], $size['width'], $size['height'], $size['crop']);
            endforeach;

            add_filter('image_size_names_choose', array($this, 'wpddImageSizeChoices'));
        endif;
    }

    public function wpddImageSizeChoices($sizes)
    {
        $wpddSizes = [];

        foreach ($this->sizesToAdd as $key => $size) :
            $wpddSizes[] = [$size['name'] => __($size['name'])];
        endforeach;

        // Thanks Larry :)
        foreach ($wpddSizes as $pair) {
            $key = key($pair);
            $sizes[$key] = $pair[$key];
        }

        return $sizes;
    }
}
