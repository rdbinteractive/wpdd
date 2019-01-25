<?php

namespace WPDD\Analytics;

class Init
{
    public function init()
    {
        if ('true' === ENABLE_CUSTOMIZER_ANALYTICS) :
            $options = new Customizer();
            $options->addOptions();
        endif;
    }
}
