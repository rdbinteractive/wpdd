<?php

namespace WPDD\Analytics;

class Display
{
    public function googleAnalyticsTracking()
    {
        $gaTrackingID = get_theme_mod('wpddGATrackingID');
        return $this->googleAnalyticsScript($gaTrackingID);
    }

    /**
     * Output the Google Analytics tracking string if the proper conditions are met.
     *
     * @param $analyticsId
     * @return string
     */
    public function googleAnalyticsScript($analyticsId)
    {
        if (
            ENABLE_CUSTOMIZER_ANALYTICS === 'true' &&
            $analyticsId &&
            ENVIRONMENT === 'production'
        ) :
            $trackingScript = '<script>';
            $trackingScript .= "
            (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
            ga('create', '" . $analyticsId . "', 'auto');
            ga('send', 'pageview');";
            $trackingScript .= '</script>';
            return $trackingScript;
        else :
            return '';
        endif;
    }
}
