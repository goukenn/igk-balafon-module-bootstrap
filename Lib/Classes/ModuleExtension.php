<?php
namespace igk\bootstrap;

use igk\bootstrap\Filters\NodeFilterBase;
use IGK\Helper\IO;
use IGK\Helper\StringUtility;
use IGK\System\Html\HtmlUtils;
use IGKEvents;

/**
 * 
 * @package igk\bootstrap
 */
class ModuleExtension{
    /**
     * 
     * @param \IGK\System\Html\Dom\HtmlDoc $doc 
     * @return void 
     */
    public static function initDoc($doc){
 
        igk_reg_hook(\IGKEvents::FILTER_CREATED_NODE, [self::class, "filterNodeHookCallback"]);
        igk_reg_hook(\IGKEvents::FILTER_PRE_CREATE_ELEMENT, [self::class, "prefilterNodeHookCallback"]);
        igk_reg_hook(\IGKEvents::HOOK_DOM_PROPERTY_CHANGED, [self::class, "propertyChanged"]);
        igk_reg_hook(\IGKEvents::HOOK_HTML_PRE_FILTER_ATTRIBUTE, [self::class, "filterAttributeCallack"]);
   
        $g = $doc->getHead()->csslink(Constants::CDN)
        ->setAttributes([
            "integrity"=>Constants::INTEGRITY,
            "crossorigin"=>"anonymous"
        ])->activate("defer");
        $js_cdn = igk_configs()->get("bootstrap.js_cdn", Constants::JS_CDN);
        $js_integriy = igk_configs()->get("bootstrap.js_integrity", Constants::JS_INTEGRITY);
        igk_reg_hook(IGKEvents::HOOK_HTML_BEFORE_RENDER_DOC, [self::class, 'BeforeRenderDocument']);
        $doc->getBody()
        ->getAppendContent()->script($js_cdn)
        ->setAttributes([ 
            "integrity"=>$js_integriy,
            "crossorigin"=>"anonymous"
        ])
        ->setAttribute("id", "bootstrap-bundle")->activate("defer");
 
    }   
    public static function BeforeRenderDocument($e){
         
    }
    public static function filterAttributeCallack($e){
        $attrib = $e->args[0];
        if ($filter = self::CreateFilter($attrib["%__tag__%"])){     
            $attrib = $filter->filter($attrib);
        };
        return $attrib;
    }
    public static function propertyChanged($e){
        $node = $e->args["node"];
        $prop = $e->args["name"];
        if ($prop=="type"){
            $cl = ""; 
            $type = $node->$prop;
            if (in_array($type, NodeFilterBase::ColorFilter))
            {
                $cl = preg_replace_callback("/(^| )(btn\-)/", function($m){                    
                        return ((strlen($m[1])>0) ? " " :"")."-".trim($m[0]);
                }, (string)$node["class"]); 
                $node["class"] = $cl; 
                self::filterNode($node, HtmlUtils::GetCreatedTagName($node)); 
            }
             
        }
    }
    public static function filterNode($node, $tag){
        if (is_object($filter = self::CreateFilter($tag))){         
            $filter->bind($node);
        } 
    }
    public static function filterNodeHookCallback($e){
        $node = $e->args["node"];
        $tag = $e->args["tagname"];  
        self::filterNode($node, $tag);
    }
    public static function prefilterNodeHookCallback($e){
        $tag = $e->args["name"]; 
        if ($filter = self::CreateFilter($tag)){          
            if ($r =  $filter->prefilter($tag, $e)){
                $e->output = $r;
                $e->handle = 1;                
            }
        }
    }

    public static function CreateFilter($tag){
        static $filters;
        if ($filters === null)
            $filters = [];
        

        $cn = "\\Filters\\".ucfirst($tag);
        $filter = __NAMESPACE__.$cn."Filter";
        if ($c = igk_getv($filters,  $filter)){
            if ($c=="-Nofilter-")
                return null;
            return $c;
        }
        if (file_exists($file = StringUtility::Dir(__DIR__.$cn."Filter.php"))){
            require_once($file);
        } 

        if (class_exists($filter , false)){
            $o = new $filter();
            $filters[$filter] = $o;
            return $o;
        }
        $filters[$filter] = "-Nofilter-";
        return null;
    }
}