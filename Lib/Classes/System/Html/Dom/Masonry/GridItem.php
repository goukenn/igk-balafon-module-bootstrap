<?php
// @author: C.A.D. BONDJE DOUE
// @file: Row.php
// @date: 20230314 14:35:24
namespace igk\bootstrap\System\Html\Dom\Masonry;

use igk\bootstrap\Constants;
use igk\bootstrap\System\Html\Dom\BootstrapComponent;
use IGKEvents;
use IGKHtmlDoc;

///<summary></summary>
/**
* 
* @package igk\bootstrap\System\Html\Dom\Masonry
*/
class GridItem extends MasonryComponent{
    private static $sm_initialize;
    
    protected function initialize()
    {
        parent::initialize();
        $this['class'] = 'igk-bootstrap-masonry-grid-item grid-item';
    } 
}