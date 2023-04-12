<?php

namespace igk\bootstrap\Filters;


class ButtonFilter extends NodeFilterBase{ 
    public function bind($node){
        $s =  ["btn btn-default"];
        if (igk_getv($node, 'type') == "primary")
            $s[] = "btn-primary";
        $node["class"] = implode(" ", $s);
    }
}