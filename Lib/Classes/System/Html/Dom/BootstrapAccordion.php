<?php
// @author: C.A.D. BONDJE DOUE
// @file: BootstrapAccordion.php
// @date: 20230313 16:18:01
namespace igk\bootstrap\System\Html\Dom;


///<summary></summary>
/**
* 
* @package igk\bootstrap\System\Html\Dom
*/
class BootstrapAccordion extends BootstrapComponent{
    protected function initialize()
    {
        parent::initialize();
        $this['class'] = 'accordion';
    }
    public function addItem(string $title){
        return $this->add(new BootstrapAccordionItem($title));
    }
}