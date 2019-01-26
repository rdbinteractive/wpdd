<?php

namespace WPDD\OpenGraph;

class Init
{
    public function init()
    {
        if ('true' === ENABLE_CUSTOMIZER_OPEN_GRAPH) :
            $options = new Customizer();
            $options->addOptions();
        endif;
    }
}
