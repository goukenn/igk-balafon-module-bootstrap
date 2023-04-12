<?php

// @author: C.A.D. BONDJE DOUE
// @filename: GlobalFilterAttribute.php
// @date: 20221115 13:35:54
// @desc: global bootstrap filter
namespace igk\bootstrap\Filters;

class GlobalFilterAttribute extends NodeAttributeFilterBase
{
    public function filter($attribute)
    {
        $attr = $attribute['class'];
        if ($attr) {
            $g = $attr->getValue();
            if ($c = preg_match_all("/igk-(?P<name>(success|danger|info|warning|light|white|primary|secondary))/", $g, $tab)) {
                for ($i = 0; $i < $c; $i++) {
                    $n = $tab['name'][$i];
                    switch ($n) {
                        case 'success':
                        case 'danger':
                        case 'info':
                        case 'warning':
                        case 'primary':
                        case 'secondary':
                            $g.= ' bg-'.$n.' text-white';
                            break;
                        case 'light':
                            $g.= 'bg-light text-dark';
                            break;
                        case 'white':
                            $g.= 'bg-white text-dark';
                            break;
                        default:
                            break;
                    }
                }
                $attribute['class'] = $g;
            }
        }
        return $attribute;
    }
}
