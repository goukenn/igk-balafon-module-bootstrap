<?php
/**
 * 
 */
namespace igk\bootstrap\Filters;


class DivFilter extends NodeFilterBase{ 
    public function bind($node){         
        $node->setPrefilterAttribute(new GlobalFilterAttribute()); 
    }
}