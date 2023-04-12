<?php

namespace igk\bootstrap;

class Masonry{
    public static function init($doc){
        $doc->getBody()->getAppendContent()->script("https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js")
        ->activate("defer async")
        ->setAttribute("crossorigin", "anonymous")
        ->setAttribute("id", "bootstrap-masonary");
    }
}