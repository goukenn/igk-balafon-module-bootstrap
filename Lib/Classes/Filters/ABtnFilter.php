<?php

namespace igk\bootstrap\Filters;


class ABtnFilter extends ButtonFilter{ 
    public function bind($node){
        $s =  ["+btn"];
        if (in_array($type = igk_getv($node, 'type'), self::ColorFilter))
            $s[] = "+btn-".$type; 
        $node["class"] = implode(" ", $s); 
    }
}