<?php
// @author: C.A.D. BONDJE DOUE
// @filename: BootstrapOffcanvasHeaderTitle.php
// @date: 20230315 09:38:11
// @desc: 

namespace igk\bootstrap\System\Html\Dom;
 
///<summary></summary>
/**
* represent the offcanvas header title
* @package igk\bootstrap\System\Html\Dom
*/
class BootstrapOffcanvasHeaderTitle extends BootstrapComponent{    
    protected function initialize()
    {
        parent::initialize(); 
        self::InitWebClassWith($this, 'offcanvas-header-title');
    }   
}