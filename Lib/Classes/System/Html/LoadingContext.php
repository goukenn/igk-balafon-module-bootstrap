<?php
// @author: C.A.D. BONDJE DOUE
// @file: LoadingContext.php
// @date: 20230315 08:30:38
namespace igk\bootstrap\System\Html;

use igk\bootstrap\Constants;
use IGK\System\Html\HtmlLoadingContext;

///<summary></summary>
/**
* 
* @package igk\bootstrap\System\Html
*/
class LoadingContext extends HtmlLoadingContext{
    private static $sm_instance;
    /**
     * get instance
     * @return static 
     */
    public static function getInstance(){ 
        return self::$sm_instance ?? self::$sm_instance = new static;
    }
    private function __construct()
    {
        $this->name = Constants::WEB_CONTEXT;
        $this->node = null;
        $this->load_content = false;
        $this->load_expression = false;
        $this->ignore_tags = ['script', 'style'];
    }
}   