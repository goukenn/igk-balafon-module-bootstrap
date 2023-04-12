<?php
// @author: C.A.D. BONDJE DOUE
// @file: BootstrapPagination.php
// @date: 20230313 18:34:42
namespace igk\bootstrap\System\Html\Dom;

use igk\bootstrap\Css\CssConstants;

///<summary></summary>
/**
* 
* @package igk\bootstrap\System\Html\Dom
*/
class BootstrapPagination extends BootstrapComponent{
    var $tagname ="ul";
    var $subitem = 'li';
    protected function initialize()
    {
        parent::initialize();
        $this['class'] = CssConstants::COMPONENT_PAGINATION;
    }
    /**
     * add item to pagination 
     * @return void 
     */
    public function item($tagname =null){
        $n = new BootstrapComponent($tagname ?? $this->subitem ?? 'li');
        $n["class"] = CssConstants::ITEM_CHILD_PAGE_ITEM;
        $this->add($n);
        return $n;
    }
}