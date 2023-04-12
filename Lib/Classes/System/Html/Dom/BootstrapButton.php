<?php
// @author: C.A.D. BONDJE DOUE
// @file: BootstrapButton.php
// @date: 20230314 21:03:16
namespace igk\bootstrap\System\Html\Dom;


///<summary></summary>
/**
* 
* @package igk\bootstrap\System\Html\Dom
*/
class BootstrapButton extends BootstrapComponent{
    protected function initialize()
    {
        parent::initialize();
        $this['class'] = 'igk-btn btn';
    }
}