<?php

namespace igk\bootstrap\Filters;

use IGK\System\Html\Dom\IHtmlPrefilterAttribute;

class NavFilter extends NodeFilterBase implements IHtmlPrefilterAttribute{ 
    public function bind($node){
        $node["class"] = "nav bg-primary";
        $node->setPrefilterAttribute($this);
    }
    public function filter($attrib){
        if (!$attrib["class"]->primary){
            $attrib["class"] = "-bg-primary";
        }
        return $attrib;
    }

}