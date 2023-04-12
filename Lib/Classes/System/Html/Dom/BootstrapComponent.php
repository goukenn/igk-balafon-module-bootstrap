<?php
// @author: C.A.D. BONDJE DOUE
// @file: BootstrapComponent.php
// @date: 20230313 16:09:34
namespace igk\bootstrap\System\Html\Dom;

use igk\bootstrap\System\Html\LoadingContext;
use IGK\System\Html\Dom\HtmlNode;
use IGK\System\Html\HtmlLoadingContext;
use IGK\System\Html\IHtmlContextContainer;
use IGK\System\Html\Traits\HostableItemTrait;

///<summary></summary>
/**
* 
* @package igk\bootstrap\System\Html\Dom
*/
class BootstrapComponent extends HtmlNode implements IHtmlContextContainer{
    use HostableItemTrait;
    var $tagname = "div";

    public function getContext(): ?HtmlLoadingContext { 
        return LoadingContext::getInstance();

    }    

    public function button(){
        $btn =new BootstrapButton;
        $this->add($btn);
        return $btn;
    }
    public function dropdown_menu(){
        return $this->add(new BootstrapDropdownMenu());
    }   

    public static function CreateWebNode($n, $attributes = null, $indexOrArgs = null)
    {
        foreach([''] as $k){
            $ks = str_replace('-', '_', $k.$n);
            if (strpos($ks,'bootstrap_')===0){
                if (function_exists($fc = IGK_FUNC_NODE_PREFIX."".$ks)){
                    if ($ks = call_user_func_array($fc, $indexOrArgs ?? [])){
                        return $ks;
                    }
                } 
                if ($a = BootstrapComponentFactory::Create($n, $attributes, $indexOrArgs)){
                    return $a;
                }
            }
            if (function_exists($fc = IGK_FUNC_NODE_PREFIX."bootstrap_".$ks)){
                if ($ks = call_user_func_array($fc, $indexOrArgs ?? [])){
                    return $ks;
                }
            } else {
                if ($a = BootstrapComponentFactory::Create($ks, $attributes, $indexOrArgs)){
                    return $a;
                }
            }
        }
        return parent::CreateWebNode($n, $attributes, $indexOrArgs);
    }
}