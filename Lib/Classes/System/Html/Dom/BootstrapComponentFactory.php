<?php
// @author: C.A.D. BONDJE DOUE
// @file: BootstrapComponentFactory.php
// @date: 20230314 19:37:44
namespace igk\bootstrap\System\Html\Dom;

use IGK\Helper\StringUtility;

///<summary></summary>
/**
* 
* @package igk\bootstrap\System\Html\Dom
*/
class BootstrapComponentFactory{

    /**
     * create a bootstrap component
     * @param string $name 
     * @param mixed $args 
     * @return null|BootstrapComponent 
     */
    public static function Create(string $name, $attributes = null , ?array $args = null):?BootstrapComponent{
        $fc = "Bootstrap".StringUtility::CamelClassName($name);
        $cl =  "\\".__NAMESPACE__."\\".$fc;
        if ($exist = file_exists($file = __DIR__."/".$fc.".php")){
            require_once $file;
            if (!class_exists($cl, false)){
                igk_die("missing class in ".$file);
            }    
            $args = $args ?? [];
            $o = new $cl(...$args);
            if ($attributes){
                $o->setAttributes($attributes);
            }
            return $o;
        } else if (function_exists($fc = 'igk_html_node_bootstrap_'.$name )){
            return call_user_func_array([null, $fc], $args);
        }
        return null;
    }


}