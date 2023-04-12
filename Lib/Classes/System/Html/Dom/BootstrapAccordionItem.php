<?php
// @author: C.A.D. BONDJE DOUE
// @file: BootstrapAccordionItem.php
// @date: 20230313 16:20:32
namespace igk\bootstrap\System\Html\Dom;

use igk\bootstrap\System\Html\Dom\BootsrapAccordionItemContent;
use IGK\System\Html\HtmlAttributeValueListener;
use IGK\System\Html\HtmlUtils;
use IGKValueListener;

///<summary></summary>
/**
* 
* @package igk\bootstrap\System\Html\Dom
*/
class BootstrapAccordionItem extends BootstrapComponent{
    var $header;
    private $m_body_content;
    private $m_title;
    public function getBody() {
        return $this->m_body_content;
    }
    public function __construct(string $title)
    {
        parent::__construct(null);
        $this->m_title = $title;
    }
    public function getTitle(){
        return $this->m_title;
    }
    protected function initialize()
    {
        parent::initialize();
        $this['class'] = 'accordion-item';
        $this->header = new BootstrapAccordionItemHeader(); 
        $this->m_body_content = new BootsrapAccordionItemContent();


        // build header 
        HtmlUtils::Init(
            $this->header, [
                "button"=>["_"=>[
                    "class"=>"accordion-button collapsed",
                    "type"=>"button",
                    "data-bs-toggle"=>"collapse",
                    "igk:ref-attribute"=>new HtmlAttributeValueListener(function(){
                        if ($id = $this["id"]){                            
                            return null;
                        } 
                        return ["data-bs-target"=>"^.accordion-item"];
                    }),
                    "data-bs-target"=>new HtmlAttributeValueListener(function(){
                        if ($id = $this["id"]){                            
                            return "#".$id." div.accordion-collapse";
                        } 
                        return;
                    }),
                    "aria-expanded"=>"false",
                    "aria-controls"=>""
                ], function($a){
                    $a->Content =  new IGKValueListener($this, 'title');
                }]
            ]
        );

        $this->add($this->header);
        $this->add($this->m_body_content);
    }
}