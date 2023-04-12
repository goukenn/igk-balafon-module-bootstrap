<?php
// @author: C.A.D. BONDJE DOUE
// @file: Constants.php
// @desc: constant file 

/**
 * 
 */
namespace igk\bootstrap;

class Constants{
    const Version = "v5.2"; 
    const WEB_CONTEXT = __NAMESPACE__;

    const CDN = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css";
    const INTEGRITY = "sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx";

    const JS_CDN = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js";
    const JS_INTEGRITY = "sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa";

    const BreadCrumDivider= "url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E\");";

    // for popover 
    const POPMIN_CDN = 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js';

    const MASONARY_CDN = 'https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js';
    const MASONARY_INTEGRITY = 'sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D';
}