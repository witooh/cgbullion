<?php

class Pagemenu extends CWidget
{
    public $items;

    /**
     * Initializes the menu widget.
     * This method mainly normalizes the {@link items} property.
     * If this method is overridden, make sure the parent implementation is invoked.
     */
    public function init()
    {
    }

    /**
     * Calls {@link renderMenu} to render the menu.
     */
    public function run()
    {
        echo CHtml::openTag('div',array('class'=>'middleNav'))."\n";
        echo CHtml::openTag('ul')."\n";
        foreach($this->items as $item){
            $this->renderMenu($item);
        }
        echo CHtml::closeTag('ul')."\n";
        echo CHtml::closeTag('div');
    }
    
    public function renderMenu($item){
        $option = array();
        if(!empty($item['icon']))
            $option['class'] = $item['icon'];
        echo CHtml::openTag('li',$option)."\n";
        echo CHtml::link(CHtml::tag('span',array(),$item['label']),$item['url']);
        echo CHtml::closeTag('li');
    }

}