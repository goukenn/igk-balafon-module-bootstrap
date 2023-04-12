<?php

namespace igk\bootstrap\Filters;
 

class InputFilter extends NodeFilterBase{ 
    public function bind($node){     
        $node["class"] = "+form-control";        
        $node->setPrefilterAttribute(new BootStrapFilterAttribute($node)); 
    }
    public function filter($attribute){
        return BootStrapFilterAttribute::FilterAttribute($attribute);
    }
}