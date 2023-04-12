<?php
// @author: C.A.D. BONDJE DOUE
// @file: Row.php
// @date: 20230314 14:35:24
namespace igk\bootstrap\System\Html\Dom\Masonry;

use igk\bootstrap\Constants; 
use IGKEvents;
use IGKHtmlDoc;

///<summary></summary>
/**
* 
* @package igk\bootstrap\System\Html\Dom\Masonry
*/
class Row extends MasonryComponent{     
    
    protected function initialize()
    {
        parent::initialize();
        $this['class'] = 'igk-bootstrap-masonry grid';
    }
    public function grid_item(){
        $n = new GridItem();
        $this->add($n);
        return $n;
    }
}