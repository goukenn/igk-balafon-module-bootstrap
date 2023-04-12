<?php

use igk\bootstrap\System\Html\Dom\BootstrapAccordion;
use igk\bootstrap\System\Html\Dom\BootstrapCard;
use igk\bootstrap\System\Html\Dom\BootstrapComponent;
use igk\bootstrap\System\Html\Dom\BootstrapComponentFactory;
use igk\bootstrap\System\Html\Dom\BootstrapPagination;
use igk\bootstrap\System\Html\Dom\BootstrapPopOver;
use igk\bootstrap\System\Html\Dom\Masonry\Row;
 

use function igk\bootstrap\System\Html\Dom\igk_current_module;

if (!function_exists('igk_html_node_bootstrap_Accordion')) {
    function igk_html_node_bootstrap_Accordion()
    {
        return BootstrapComponentFactory::Create('Accordion');
    }
}

if (!function_exists('igk_html_node_bootstrap_Alert')) {
    /**
     * create a bootstrap alert component
     * @param mixed $class 
     * @return igk\bootstrap\System\Html\Dom\BootstrapComponent 
     */
    function igk_html_node_bootstrap_Alert($class = null)
    {        
        return BootstrapComponentFactory::Create('Alert');
    }
}

if (!function_exists('igk_html_node_bootstrap_Badge')) {
    function igk_html_node_bootstrap_Badge()
    {
        return BootstrapComponentFactory::Create('Badge');
    }
}

if (!function_exists('igk_html_node_bootstrap_Breadcrumb')) {
    function igk_html_node_bootstrap_Breadcrumb()
    {
        return BootstrapComponentFactory::Create('Breadcrumb');
    }
}

if (!function_exists('igk_html_node_bootstrap_Button')) {
    function igk_html_node_bootstrap_Button()
    {
        return BootstrapComponentFactory::Create('Button');
    }
}
if (!function_exists('igk_html_node_bootstrap_Button_Group')) {
    function igk_html_node_bootstrap_Button_Group()
    {
        return BootstrapComponentFactory::Create('ButtonGroup');
    }
}
if (!function_exists('igk_html_node_bootstrap_Card')) {
    function igk_html_node_bootstrap_Card()
    {
        return BootstrapComponentFactory::Create('Card');     
    }
}
if (!function_exists('igk_html_node_bootstrap_Carousel')) {
    function igk_html_node_bootstrap_Carousel()
    {
        return BootstrapComponentFactory::Create('Carousel');
    }
}

if (!function_exists('igk_html_node_bootstrap_CloseButton')) {
    function igk_html_node_bootstrap_CloseButton()
    {
        $n = new BootstrapComponent('button');
        $n['type'] = "button";
        $n['class'] = "btn-close";
        $n['aria-label'] = "Close";
        return $n;
    }
}

if (!function_exists('igk_html_node_bootstrap_Collapse')) {
    function igk_html_node_bootstrap_Collapse()
    {
        return BootstrapComponentFactory::Create('Collapse');
    }
}

if (!function_exists('igk_html_node_bootstrap_Dropdown')) {
    function igk_html_node_bootstrap_Dropdown()
    {
        return BootstrapComponentFactory::Create('Dropdown');
    }
}

if (!function_exists('igk_html_node_bootstrap_ListGroup')) {
    function igk_html_node_bootstrap_ListGroup()
    {
        return BootstrapComponentFactory::Create('ListGroup');
    }
}

if (!function_exists('igk_html_node_bootstrap_modal')) {
    function igk_html_node_bootstrap_modal()
    {
        return new \igk\bootstrap\Components\Modal();
    }
}
if (!function_exists('igk_html_node_bootstrap_navbar')) {
    function igk_html_node_bootstrap_navbar()
    {
        return new \igk\bootstrap\System\Html\Dom\BootstrapNavbar();
    }
}

if (!function_exists('igk_html_node_bootstrap_NavsTab')) {
    function igk_html_node_bootstrap_NavsTab()
    {
        return new \igk\bootstrap\System\Html\Dom\BootstrapNavTab;
    }
}

if (!function_exists('igk_html_node_bootstrap_Offcanvas')) {
    function igk_html_node_bootstrap_Offcanvas()
    {
        return new \igk\bootstrap\System\Html\Dom\BootstrapOffcanvas;
    }
}

if (!function_exists('igk_html_node_bootstrap_Pagination')) {
    function igk_html_node_bootstrap_Pagination()
    {
        $n = new BootstrapPagination();
        return $n;
    }
}

if (!function_exists('igk_html_node_bootstrap_Placeholder')) {
    function igk_html_node_bootstrap_Placeholder()
    {
        return new \igk\bootstrap\System\Html\Dom\BootstrapPlaceHolder;
    }
}

if (!function_exists('igk_html_node_bootstrap_Popover')) {
    function igk_html_node_bootstrap_Popover(string $title, string $content, $tag = 'button')
    {
        $n = new BootstrapPopOver($tag, $title, $content);
        return $n;
    }
}
if (!function_exists('igk_html_node_bootstrap_Progress')) {
    function igk_html_node_bootstrap_Progress()
    {
        return BootstrapComponentFactory::Create('Progress');
    }
}
if (!function_exists('igk_html_node_bootstrap_Scrollspy')) {
    function igk_html_node_bootstrap_Scrollspy()
    {
        return BootstrapComponentFactory::Create('Scrollspy');
    }
}
if (!function_exists('igk_html_node_bootstrap_Spinner')) {
    function igk_html_node_bootstrap_Spinner()
    {
        return BootstrapComponentFactory::Create('Spinner');
    }
}
if (!function_exists('igk_html_node_bootstrap_Toast')) {
    function igk_html_node_bootstrap_Toast()
    {
        return BootstrapComponentFactory::Create('Toast');
    }
}
if (!function_exists('igk_html_node_bootstrap_Tooltip')) {
    function igk_html_node_bootstrap_Tooltip()
    {
        return BootstrapComponentFactory::Create('Tooltip');
    }
}


if (!function_exists('igk_html_node_bootstrap_mansory')) {
    /**
     * helper: create a bootstrap mansory 
     * @return Row 
     */
    function igk_html_node_bootstrap_masonry()
    {
        $n = new Row;
        return $n;
    }
}


//  init functions as class name 
// array_filter(get_defined_functions()['user'], function ($a) {
//     if (preg_match('/^' . IGK_FUNC_NODE_PREFIX . '/', $a)) {
//         if (igk_get_func_location($a)->file == __FILE__) {
//             $a = substr($a, strlen(IGK_FUNC_NODE_PREFIX));
//             $cl = new ModuleMakeClassCommand;
//             $cmd = ModuleMakeClassCommand::CreateOptionsCommandFrom(null);
//             $cl->exec(
//                 $cmd,
//                 \igk\bootstrap::class,
//                 escapeshellcmd(\System\Html\Dom::class . "\\" . StringUtility::CamelClassName($a))
//             );
//         }
//     }
// });
