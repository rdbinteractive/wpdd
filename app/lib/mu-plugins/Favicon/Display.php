<?php

namespace WPDD\Favicon;

class Display
{
    /**
     * /!\ WHEN YOU CHANGE YOUR ICONS /!\
     * Be sure to change the output string to match up with the icons you generate.
     * Also change: ./app/site.webmanifest.
     *
     * @param $title string Title for Microsoft Tiles
     * @param $color string Hex, background color for Microsoft Tiles
     * @return string
     */
    public function favicons($title, $color)
    {
        // Icon file directory
        $dir = get_template_directory_uri().'/lib/img/icon/';

        // Webmanifest
        $faviconString = '<link rel="manifest" href="/site.webmanifest">';

        // Apple Touch
        $faviconString .= '<link rel="apple-touch-icon" href="'.$dir.'apple-touch-icon.png">';
        $faviconString .= '<link rel="mask-icon" href="'.$dir.'safari-pinned-tab.svg" color="#008787">';

        // Generic
        $faviconString .= '<link rel="shortcut icon" href="'.$dir.'favicon.ico">';
        $faviconString .= '<link rel="icon" type="image/png" sizes="32x32" href="'.$dir.'favicon-32x32.png">';
        $faviconString .= '<link rel="icon" type="image/png" sizes="16x16" href="'.$dir.'favicon-16x16.png">';

        // Microsoft Titles
        $faviconString .= '<meta name="application-name" content="'.$title.'" />';
        $faviconString .= '<meta name="msapplication-TileColor" content="'.$color.'" />';
        $faviconString .= '<meta name="msapplication-square70x70logo" content="'.$dir.'mstile-70x70.png">';
        $faviconString .= '<meta name="msapplication-TileImage" content="'.$dir.'mstile-144x144.png">';
        $faviconString .= '<meta name="msapplication-square150x150logo" content="'.$dir.'mstile-150x150.png">';
        $faviconString .= '<meta name="msapplication-wide310x150logo" content="'.$dir.'mstile-310x150.png">';
        $faviconString .= '<meta name="msapplication-square310x310logo" content="'.$dir.'mstile-310x310.png">';

        return $faviconString;
    }
}
