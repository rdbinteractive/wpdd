<?php

namespace WPDD\Color;

class Init
{
    public function init()
    {
        if ('true' === ENABLE_CUSTOMIZER_COLOR) :
            (new Color());
        endif;
    }
}
