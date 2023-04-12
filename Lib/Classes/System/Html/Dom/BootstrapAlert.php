<?php
// @author: C.A.D. BONDJE DOUE
// @file: BootstrapAlert.php
// @date: 20230314 21:03:16
namespace igk\bootstrap\System\Html\Dom;


///<summary></summary>
/**
* 
* @package igk\bootstrap\System\Html\Dom
*/
class BootstrapAlert extends BootstrapComponent{
    var $type = 'slide';
    protected function initialize(){
        parent::initialize();
        $this['class'] = 'alert'; 
    }
}