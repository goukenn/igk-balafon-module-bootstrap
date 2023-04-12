<?php
// @author: C.A.D. BONDJE DOUE
// @file: NodeExtensions.php
// @date: 20230315 08:24:27
namespace igk\bootstrap\System\Html;

use IGK\System\Html\Dom\HtmlNode;

///<summary></summary>
/**
* 
* @package igk\bootstrap\System\Html
*/
abstract class NodeExtensions{
    /**
     * extends bstoggle node 
     * @param igk\bootstrap\System\Html\HtmlNode $node 
     * @param string $name 
     * @return void 
     */
    public static function bsToggle(HtmlNode $node, string $name){
        $node['data-bs-toggle'] = $name; 
        return $node;
    }
    public static function bsTarget(HtmlNode $node, string $name){
 
        $node['data-bs-target'] = $name; 
        return $node;
    }
  
    /**
     * dismiss type element 
     * @param HtmlNode $node 
     * @param string $name can be offcanvas|modal|...
     * @return HtmlNode<mixed, string> 
     */
    public static function bsDismiss(HtmlNode $node, string $name){
        $node['data-bs-dismiss'] = $name; 
        return $node;
    }

    public static function bsBackdrop(HtmlNode $node, ?bool $value){
        $node['data-bs-backdrop'] = $value; 
        return $node;
    }
    public static function bsKeyboard(HtmlNode $node, ?bool $value){
        $node['data-bs-keyboard'] = $value; 
        return $node;
    }
    public static function bsScroll(HtmlNode $node, ?bool $value){
        $node['data-bs-scroll'] = $value; 
        return $node;
    }
    /**
     * set custom class definition
     * @param HtmlNode $node 
     * @param null|string $value 
     * @return HtmlNode<mixed, null|string> 
     */
    public static function bsCustomClass(HtmlNode $node, ?string $value){
        $node['data-bs-custom-class'] = $value; 
        return $node;
    }

}