<?php

namespace igk\bootstrap\Filters;

use IGK\System\Html\HtmlNodeFilterBase;

class igkGlobalLangSelectorFilter extends HtmlNodeFilterBase{

    public function prefilter($name, $args){
    
        return igk_html_node_bootstrap_langselector();
    }
    public function bind($node) { 

        igk_wln_e("bind node ..... ");
    }

}