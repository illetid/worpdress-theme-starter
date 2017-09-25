<?php

namespace noa\core;

use Walker_Nav_Menu;

class walkernav extends Walker_Nav_Menu
{
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"dropdown menu vertical\" data-toggle>\n";
    }
}
