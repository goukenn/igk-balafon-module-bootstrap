<?php
// @author: C.A.D. BONDJE DOUE
// @file: BootstrapAccordionItemHeader.php
// @date: 20230313 16:23:59
namespace igk\bootstrap\System\Html\Dom;


///<summary></summary>
/**
* 
* @package igk\bootstrap\System\Html\Dom
*/
class BootstrapAccordionItemHeader extends BootstrapComponent{    
    protected function initialize()
    {
        parent::initialize();
        $this['class'] = 'accordion-header';
    }
}