<?php
// @author: C.A.D. BONDJE DOUE
// @file: %modules%/igk/bootstrap/global.php
// @date: 20220110 14:49:11

// + module entry file 

use IGK\Resources\R;

require_once __DIR__.'/Lib/Classes/components.php';


function igk_html_node_floatingform(){
    $n = igk_create_node("div");
    $n["class"] = "form-floating";
    return $n;
}
function igk_html_node_bootstrap_langselector(){
$gt = R::GetCurrentLang(); 
$tab = array_filter(explode("|", R::GetSupportLangRegex()));
$uri = \IGK\Helper\UriHelper::GetCmdAction(igk_sys_ctrl(), "changeLang_ajx");
$o = igk_html_node_dropdown_button(igk_lang_display($gt), [], $tab, function($n, $i)use($gt){
    $item = $n->li()->a("#")->setClass("dropdown-item");
    $item->on("click", "ns_igk.component(this).invoke('$i');");
    if ($i == $gt){
        $item->setClass("active");
    }
    $item->Content = igk_lang_display($i);

}); 
$o->balafonComponentJS()->Content = "igk.appendProperties(this, { invoke(v){ ns_igk.ajx.get('{$uri}/'+v, null, ns_igk.ajx.fn.replace_or_append_to_body); } })";
return $o;
}

function igk_html_node_dropdown_button($text=null, ?array $button_attribs=null, ?array $items=null, $itemCallable=null){
    $n = igk_create_node("div");

    if ($button_attribs === null)
    {
        $button_attribs = [];
    }
    $button_attribs = array_merge($button_attribs, [ "data-bs-toggle"=>"dropdown" ]);
    $n["class"] = "dropdown";
    $n->button()
    ->setClass("btn btn-primary dropdown-toggle")
    ->setAttributes($button_attribs)->Content = $text ?? "Dropdown Button";
    if ($items){
        if ($itemCallable == null){
            $itemCallable = function($n, $v){
                $n->li()->a("#")->setClass("dropdown-item")->Content = (string)$v;
            };
        }
        $n->ul()
        ->setAttributes([
            "aria-labelledby"=>igk_getv($button_attribs, "id")
        ])
        ->setClass("dropdown-menu")->loop($items)->host($itemCallable);
    }

    return $n;
}


