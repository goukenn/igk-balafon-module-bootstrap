<?php
// @author: C.A.D. BONDJE DOUE
// @file: BootstrapAccordionBody.php
// @date: 20230313 16:27:01
namespace igk\bootstrap\System\Html\Dom;


///<summary></summary>
/**
* 
* @package igk\bootstrap\System\Html\Dom
*/
class BootstrapAccordionBody extends BootstrapComponent{        
    protected function initialize()
    {
        parent::initialize();
        $this['class'] = 'accordion-body';
    }
}