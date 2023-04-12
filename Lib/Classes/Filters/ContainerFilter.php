<?php

namespace igk\bootstrap\Filters;

/**
 * bootstrap container filter
 * @package igk\bootstrap\Filters
 */
class ContainerFilter extends NodeFilterBase{

    public function prefilter($name, $args) { } 
    public function bind($node){
        $node["class"] = "container";
    }
}