<?php
// @author: C.A.D. BONDJE DOUE
// @file: BootstrapPopOver.php
// @date: 20230314 10:19:32
namespace igk\bootstrap\System\Html\Dom;

use igk\bootstrap\Constants;
use igk\bootstrap\Css\CssConstants;
use IGK\System\Html\Css\CssUtils;
use IGK\System\Html\HtmlAttributeValueListener;
use IGKEvents;
use IGKValueListener;


///<summary></summary>
/**
* 
* @package igk\bootstrap\System\Html\Dom
*/
class BootstrapPopOver extends BootstrapComponent{
    var $title;
    var $pop_content;
    private static $sm_initialize;
    const PLACEMENT_LEFT = 'left';
    const PLACEMENT_TOP = 'top';
    const PLACEMENT_RIGHT = 'right';
    const PLACEMENT_BOTTOM = 'bottom';

    /**
     * set the placement
     * @param null|string $placement 
     * @return static
     */
    public function setPlacement(?string $placement=null){
        $this['data-bs-placement'] = $placement;
        return $this;
    }

    /**
     * set custom class
     * @param null|string $class 
     * @return $this 
     */
    public function setCustomClass(?string $class=null){
        $this['data-bs-custom-class'] = $class;
        return $this;
    }
    public function setDismissOnNextClick(bool $v){
        $r = 'focus';
        if (!$v){
            $r = null;
        }
        return $this->setAttribute('data-bs-trigger', $r);
    }

    /**
     * set container 
     * @param null|string $target 
     * @return $this 
     */
    public function setContainer(?string $target){
        return $this->setAttribute('igk-bootstrap-popover-container', $target);
    }

    public function __construct(string $tag, ?string $title=null, $pop_content=null)
    {
        $this->title = $title;
        $this->pop_content = $pop_content;
        parent::__construct($tag);
        if (is_null(self::$sm_initialize)){
            igk_reg_hook(IGKEvents::HOOK_HTML_BEFORE_RENDER_DOC, [self::class, 'InitDocRendering']);
            self::$sm_initialize = true;
        }
    }
    public static function InitDocRendering($e){
        if ($doc = igk_getv($e->args,"doc")){
            $g = igk_current_module();  
            $doc->addScript($g->getScriptsDir()."/components/popover.js")->activate('defer');
        }
    }
    protected function initialize()
    {
        parent::initialize();
        $this['class'] = CssUtils::InitClass($this->tagname, 'igk-bootstrap-'.CssConstants::COMPONENT_POPOVER);
        $this["data-bs-toggle"] = "popover";
        $this["data-bs-trigger"]= "focus";
        $this["data-bs-title"]= new IGKValueListener($this, "title"); 
        $this["data-bs-content"]= new IGKValueListener($this, "pop_content"); 
    } 
}