<?php
// @author: C.A.D. BONDJE DOUE
// @file: BootstrapDropdownMenu.php
// @date: 20230314 21:03:16
namespace igk\bootstrap\System\Html\Dom;

use IGKException;
use IGK\System\Exceptions\EnvironmentArrayException;

///<summary></summary>
/**
* 
* @package igk\bootstrap\System\Html\Dom
*/
class BootstrapDropdownMenu extends BootstrapComponent{
    public $tagname = "ul";
    public $subitemtag = 'li';
    protected function initialize()
    {
        parent::initialize();
        $this['class'] = 'igk-btn dropdown-menu';
    }
    /**
     * add submenut item
     * @return mixed 
     * @throws IGKException 
     * @throws EnvironmentArrayException 
     */
    public function item(){
        $item = new BootstrapComponent($this->subitemtag);
        $item['class'] = 'dropdown-item';
        return $this->add($item);
    }
}