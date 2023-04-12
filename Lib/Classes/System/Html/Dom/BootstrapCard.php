<?php
// @author: C.A.D. BONDJE DOUE
// @file: BootstrapCard.php
// @date: 20230314 12:42:13
namespace igk\bootstrap\System\Html\Dom;
 
use igk\bootstrap\System\Html\Dom\BootstrapComponent;

///<summary></summary>
/**
* 
* @package igk\bootstrap\System\Html\Dom
*/
class BootstrapCard extends BootstrapComponent{
  
    var $title;
    var $body;
    private $m_host;
    protected function initialize()
    {
        parent::initialize();
        $this['class'] = 'card';
        $this->m_host = igk_create_notagnode();
        $this->body = new BootstrapComponent("div");
        $this->title = new BootstrapCardTitle();
        $this->body['class'] = 'card-body';

        $this->body->add($this->title);

        parent::_Add($this->m_host);
        parent::_Add($this->body);
    }
    protected function _Add($n, $force = false): bool
    {
        return $this->m_host->_Add($n, $force);
    }
    
}