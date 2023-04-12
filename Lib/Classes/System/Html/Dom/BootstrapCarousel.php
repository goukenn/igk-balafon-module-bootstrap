<?php
// @author: C.A.D. BONDJE DOUE
// @file: BootstrapCarousel.php
// @date: 20230314 21:03:16
namespace igk\bootstrap\System\Html\Dom;

use IGKValueListener;

///<summary></summary>
/**
* 
* @package igk\bootstrap\System\Html\Dom
*/
class BootstrapCarousel extends BootstrapComponent{
    var $type = 'slide';
    protected function initialize(){
        parent::initialize();
        $this['class'] = 'carousel';
        $this['class']->setVueType(new IGKValueListener($this, 'type'));
    }
    /**
     * 
     */
    public function setType($type){

    }
}