<?php

namespace WPDD\OpenGraph;

class Display
{
    public function meta()
    {
        $title = get_theme_mod('wpddOGTitle');
        $description = get_theme_mod('wpddOGDescription');
        $type = get_theme_mod('wpddOGType');
        $url = get_theme_mod('wpddOGURL');
        $image = get_theme_mod('wpddOGImage');

        return $this->assembleOGMeta($title, $type, $url, $image, $description);
    }

    /**
     * @param $title
     * @param $type
     * @param $url
     * @param $image
     * @param $description
     * @return string
     */
    public function assembleOGMeta($title, $type, $url, $image, $description)
    {
        if (
            ENABLE_CUSTOMIZER_OPEN_GRAPH === 'true' &&
            $title &&
            $type &&
            $url &&
            $image &&
            $description
        ) :
            $string = '<meta property="og:title" content="' . $title . '" />';
            $string .= '<meta property="og:type" content="' . $type . '" />';
            $string .= '<meta property="og:url" content="' . $url . '" />';
            $string .= '<meta property="og:image" content="' . $image . '" />';
            $string .= '<meta property="og:description" content="' . $description . '" />';
            return $string;
        else :
            return '';
        endif;
    }
}

