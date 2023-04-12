<?php

namespace igk\bootstrap\Filters;


class FormFilter extends NodeFilterBase{ 
    public function bind($node){
        $node["class"] = "";
    }
}