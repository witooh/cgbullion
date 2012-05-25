<?php
class Colorlife
{
    public static function text($label,$value){
        echo CHtml::openTag('div',array('class'=>'elem'));
            echo CHtml::label($label,false);
            echo CHtml::openTag('div',array('class'=>'indent'));
                echo $value;
            echo CHtml::closeTag('div');
        echo CHtml::closeTag('div');
    }
}

