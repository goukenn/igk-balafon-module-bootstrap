<?php

// @author: C.A.D. BONDJE DOUE
// @filename: BootStrapFilterAttribute.php
// @date: 20221108 08:21:27
// @desc: filter attribute

namespace igk\bootstrap\Filters;

use IGK\System\Html\Dom\IHtmlPrefilterAttribute;

/**
 * 
 * @package igk\bootstrap\Filters
 */
class BootStrapFilterAttribute implements IHtmlPrefilterAttribute{
    public function __construct($node){
        $this->node = $node;
    }
    public function filter($attribute){
        return self::FilterAttribute($attribute);
    }
    public static function FilterAttribute($attribute){
        if (isset($attribute['type'])){
            $t = $attribute['type'];
            switch($t){
                case 'hidden':  
                    $attribute["class"] = "-form-control";                     
                    break;
                case 'checkbox':
                case 'radio':
                    $attribute["class"] = "+form-check-input";                  
                break;
                case 'button':
                    $attribute["class"] = "+form-check-input btn-primary";
                    break;
                case 'label':
                    $attribute['class'] = '+form-check-label';
                    break;
                case 'submit':
                case 'button':
                case 'reset':
                    $attribute['class'] = '+btn +btn-primary -form-control';
                    break;
                case 'file':
                    $tcl = $attribute['class'];
                    if (isset($tcl->{'igk-ajx-pickfile'})){
                        $tcl .= ' +btn';
                    }
                    $attribute["class"] = "+form-control ".$t .' '.$tcl; 
                    break; 
                default:
                    $attribute["class"] = "+form-control ".$t; 
                break;
            }
        }
        return $attribute; 
    }
}