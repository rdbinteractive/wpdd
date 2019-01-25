<?php

namespace WPDD\ThemeSetup;

class RegisterImageSizes
{

    public $sizes_to_add;

    public function __construct($image_sizes)
    {
        if (! count($image_sizes) > 0) :
            $this->sizes_to_add = false;
        else :
            $this->sizes_to_add = $image_sizes;
        endif;
    }

    public function addImageSizes()
    {
        if ($this->sizes_to_add) :
            foreach ($this->sizes_to_add as $size) :
                add_image_size($size['name'], $size['width'], $size['height'], $size['crop']);
            endforeach;

            add_filter('image_size_names_choose', array($this, 'wpddImageSizeChoices'));
        endif;
    }

    public function wpddImageSizeChoices($sizes)
    {
        $wpdd_sizes = [];

        foreach ($this->sizes_to_add as $key => $size) :
            $wpdd_sizes[] = [$size['name'] => __($size['name'])];
        endforeach;

        // Thanks Larry :)
        foreach ($wpdd_sizes as $pair) {
            $key = key($pair);
            $sizes[$key] = $pair[$key];
        }

        return $sizes;
    }
}
