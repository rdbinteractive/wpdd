<?php

namespace WPDD\Lib;

class ACFInit
{
    public function init()
    {
        if ('true' === INIT_ACF) :
            require_once('acf/acf.php');

            if (REMOVE_ACF_MENU === 'true') :
                add_filter('acf/settings/show_admin', '__return_false');
            endif;
        endif;
    }
}
