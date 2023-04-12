<?php
// @author: C.A.D. BONDJE DOUE
// @file: BootstrapBadge.php
// @date: 20230314 21:03:16
namespace igk\bootstrap\System\Html\Dom;


///<summary></summary>
/**
* 
* @package igk\bootstrap\System\Html\Dom
*/
class BootstrapBadge  extends BootstrapComponent{
 
    protected function initialize(){
        parent::initialize();
        $this['class'] = 'badge';
        $this['class']->setVueType(new IGKValueListener($this, 'type'));
    }{

}