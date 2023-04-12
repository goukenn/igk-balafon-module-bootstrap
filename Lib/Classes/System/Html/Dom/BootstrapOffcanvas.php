<?php
// @author: C.A.D. BONDJE DOUE
// @file: BootstrapOffcanvas.php
// @date: 20230314 19:34:26
namespace igk\bootstrap\System\Html\Dom;

use IGK\System\Html\Dom\HtmlCssClassValueAttribute;
use IGK\System\Html\Dom\HtmlItemBase;
use IGKValueListener;

///<summary></summary>
/**
* 
* @package igk\bootstrap\System\Html\Dom
*/
class BootstrapOffcanvas extends BootstrapComponent{
    var $type = 'end';
    const TYPES = 'start|end|top|bottom';
    protected function initialize()
    {
        parent::initialize();
        $this['tabindex'] = -1;
        self::InitWebClassWith($this, 'offcanvas show')    
        ->setListener([$this, 'getClassType']);
    }
    public function getClassType(){
        return in_array($this->type, explode('|', self::TYPES)) ? sprintf('offcanvas-%s',$this->type) : null;
    }
    /**
     * 
     * @param HtmlItemBase $node 
     * @param null|string $class 
     * @return null|HtmlCssClassValueAttribute 
     */
    protected static function InitWebClassWith(HtmlItemBase $node, ?string $class): ?HtmlCssClassValueAttribute {
        $node['class'] = $class; 
        return $node['class'];
    }
}