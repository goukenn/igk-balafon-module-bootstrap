<?php
// @author: C.A.D. BONDJE DOUE
// @filename: BootstrapOffcanvasHeader.php
// @date: 20230315 09:38:11
// @desc: 

namespace igk\bootstrap\System\Html\Dom;
 
///<summary></summary>
/**
* represent the offcanvas header 
* @package igk\bootstrap\System\Html\Dom
*/
class BootstrapOffcanvasHeader extends BootstrapComponent{ 
    protected function initialize()
    {
        parent::initialize();
        self::InitWebClassWith($this, 'offcanvas-header');
    }  
}