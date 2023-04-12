<?php

namespace igk\bootstrap\Filters;

use IGK\System\Html\HtmlNodeFilterBase;

abstract class NodeFilterBase extends HtmlNodeFilterBase{ 
    /**
     * color filters
     */
    const ColorFilter = ["default", "primary","secondaray", "success", "info", "warning", "danger","light","dark"];
   
    protected static function FilterDir()
    {
        return dirname(__FILE__);
    }
    protected static function GetEntryNamespace(){
        return \igk\bootstrap::class;
    }
}