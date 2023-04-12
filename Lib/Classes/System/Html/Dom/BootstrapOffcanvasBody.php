<?php
// @author: C.A.D. BONDJE DOUE
// @file: BootstrapOffcanvasBody.php
// @date: 20230315 09:58:54
namespace igk\bootstrap\System\Html\Dom;


///<summary></summary>
/**
* 
* @package igk\bootstrap\System\Html\Dom
*/
class BootstrapOffcanvasBody extends BootstrapComponent{ 
    protected function initialize()
    {
        parent::initialize();
        self::InitWebClassWith($this, 'offcanvas-body');
    }  
}