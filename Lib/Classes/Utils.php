<?php

namespace igk\bootstrap;

abstract class Utils{
    public static function CreateNavbarTogglerButton($target="#"){
        $n = igk_create_node("button");
        $n["class"] = "navbar-toggler";
        $n->setAttributes([
            "data-bs-toggle"=>"collapse",
            "data-bs-target"=>$target, 
            "aria-controls"=>"navbarNavAltMarkup", 
            "aria-expanded"=>"false",
            "aria-label"=>"Toggle navigation"
        ]);
        $n->span()->setClass("navbar-toggler-icon");
        return $n;
    }
}