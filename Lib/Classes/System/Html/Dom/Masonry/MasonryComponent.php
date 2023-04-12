<?php
// @author: C.A.D. BONDJE DOUE
// @file: Row.php
// @date: 20230314 14:35:24
namespace igk\bootstrap\System\Html\Dom\Masonry;

use igk\bootstrap\Constants;
use igk\bootstrap\System\Html\Dom\BootstrapComponent;
use IGKEvents;
use IGKHtmlDoc;

use function igk\bootstrap\System\Html\Dom\igk_current_module;

///<summary></summary>
/**
* 
* @package igk\bootstrap\System\Html\Dom\Masonry
*/
class MasonryComponent extends BootstrapComponent{
    private static $sm_initialize;
    public function __construct(?string $tagname = null)
    {
        parent::__construct($tagname);
        if (is_null(self::$sm_initialize)){
            self::_InitEnvironment();
            self::$sm_initialize = true;
        }
    }
    private static function _InitEnvironment(){
        igk_reg_hook(IGKEvents::HOOK_HTML_BEFORE_RENDER_DOC, function($e){
            static::_Init($e);
        });
        igk_reg_hook(IGKEvents::HOOK_AJX_END_RESPONSE, function($e){
            static::_InitAJX($e);
        });
    }
    private static function _Init($e){
        if (($doc = igk_getv($e->args, 'doc')) && ($doc instanceof IGKHtmlDoc)){
            $doc->addScript(Constants::MASONARY_CDN)
                ->setAttribute('integrity', Constants::MASONARY_INTEGRITY)
                ->activate("defer");
            $doc->addScript(\igk_current_module()->getScriptsDir()."/masonry/index.js");
        }
    }
    private static function _InitAJX(){
        $sc = igk_create_node('script');
        $sc['src'] = Constants::MASONARY_CDN;
        $sc->setAttribute('integrity', Constants::MASONARY_INTEGRITY)
                ->activate("defer");
        $sc->renderAJX();
    }

  
    public function grid_item(){
        $n = new GridItem();
        $this->add($n);
        return $n;
    }
}