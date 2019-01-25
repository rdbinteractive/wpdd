<?php

namespace WPDD\SiteIdentity;

class Init
{
    public function init()
    {
        if ('true' === ENABLE_CUSTOMIZER_SITE_ID_ADDITIONS) :
            $options = new Customizer();
            $options->addOptions();
        endif;
    }
}
