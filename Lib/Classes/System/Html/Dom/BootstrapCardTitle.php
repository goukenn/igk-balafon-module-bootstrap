<?php
// @author: C.A.D. BONDJE DOUE
// @file: BootstrapCardTitle.php
// @date: 20230314 14:45:49
namespace igk\bootstrap\System\Html\Dom;
 

///<summary></summary>
/**
* 
* @package igk\bootstrap\System\Html\Dom
*/
class BootstrapCardTitle extends BootstrapComponent{
    public function getIsVisible()
    {
        return $this->getHasChilds() || empty($this->getContent());
    }
    protected function initialize()
    {
        parent::initialize();
        $this['class'] = 'card-title';
    }
}