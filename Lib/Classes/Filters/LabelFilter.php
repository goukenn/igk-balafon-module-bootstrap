<?php

namespace igk\bootstrap\Filters;

use IGK\System\Html\Dom\IHtmlPrefilterAttribute;

class LabelFilter extends NodeFilterBase{ 
    public function bind($node){     
        $node["class"] = "+form-label";        
        // $node->setPrefilterAttribute(new BootStrapFilterAttribute($node)); 
    }
    public function filter($attribute){
        $attribute['class'] = '+form-label +form-check-label';
        return $attribute; 
    }
} 