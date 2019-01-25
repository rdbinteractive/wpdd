<?php
/**
 * Generate icons here: https://realfavicongenerator.net/
 * Unzip them and dump them into ./app/lib/themes/lib/img/icon/ or whichever directory you set below.
 *
 * @todo: Favicon display is getting a little long in the tooth. Might be time to revisit.
 */

namespace WPDD\Favicon;

class Display
{
    /**
     * @param $title string Title for Microsoft Tiles
     * @param $color string Hex, background color for Microsoft Tiles
     * @return string
     */
    public function favicons($title, $color)
    {
        /**
         * Directory
         *
         * /!\ IF YOU CHANGE THIS /!\
         * Also change: ./app/site.webmanifest to accurately represent your icon location. /!\
         */
        $dir = get_template_directory_uri().'/lib/img/icon/';

        /**
         * Manifest
         */
        $string = '<link rel="manifest" href="/site.webmanifest">';

        /**
         * Apple Touch Icon
         */
        $string .= '<link rel="apple-touch-icon" href="'.$dir.'apple-touch-icon.png">';
        $string .= '<link rel="mask-icon" href="'.$dir.'safari-pinned-tab.svg" color="#008787">';

        /**
         * Generic
         */
        $string .= '<link rel="shortcut icon" href="'.$dir.'favicon.ico">';
        $string .= '<link rel="icon" type="image/png" sizes="32x32" href="'.$dir.'favicon-32x32.png">';
        $string .= '<link rel="icon" type="image/png" sizes="16x16" href="'.$dir.'favicon-16x16.png">';

        /**
         * Microsoft Tiles
         */
        $string .= '<meta name="application-name" content="'.$title.'" />';
        $string .= '<meta name="msapplication-TileColor" content="'.$color.'" />';
        $string .= '<meta name="msapplication-square70x70logo" content="'.$dir.'mstile-70x70.png">';
        $string .= '<meta name="msapplication-TileImage" content="'.$dir.'mstile-144x144.png">';
        $string .= '<meta name="msapplication-square150x150logo" content="'.$dir.'mstile-150x150.png">';
        $string .= '<meta name="msapplication-wide310x150logo" content="'.$dir.'mstile-310x150.png">';
        $string .= '<meta name="msapplication-square310x310logo" content="'.$dir.'mstile-310x310.png">';

        return $string;
    }
}
