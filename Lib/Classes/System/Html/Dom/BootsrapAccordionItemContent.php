<?php
// @author: C.A.D. BONDJE DOUE
// @file: BootsrapAccordionItemContent.php
// @date: 20230313 16:23:52
namespace igk\bootstrap\System\Html\Dom;


///<summary></summary>
/**
* 
* @package igk\bootstrap\System\Html\Dom
*/
class BootsrapAccordionItemContent extends BootstrapComponent{    
    var $body;
    protected function initialize()
    {
        parent::initialize();
        $this['class'] = 'accordion-collapse collapse';
        $this->body = null;
        $b = new BootstrapAccordionBody();
        parent::_Add($b);
        $this->body = $b;
    } 
    protected function _Add($n, $force = false):bool
    {
        if (!$this->body){
            return parent::_Add($n, $force);
        }
       return $this->body->_Add($n, $force);
    }  
}