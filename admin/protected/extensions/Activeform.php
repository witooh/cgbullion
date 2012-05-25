<?php
class Activeform extends CActiveForm
{
    public function textField2($label,$model,$attribute,$htmlOptions=array())
    {
        if(!isset($htmlOptions['class']))
            $htmlOptions['class'] = 'medium';
        echo CHtml::openTag('div',array('class'=>'elem'));
            echo CHtml::label($label,false);
            echo CHtml::openTag('div',array('class'=>'indent'));
                echo CHtml::activeTextField($model,$attribute,$htmlOptions);
                echo $this->error($model,$attribute);
            echo CHtml::closeTag('div');
        echo CHtml::closeTag('div');
    }
    
    public function dropDownList2($label,$model,$attribute,$data,$htmlOptions=array())
    {
        if(!isset($htmlOptions['class']))
            $htmlOptions['class'] = 'chzn-select medium-select select';
        echo CHtml::openTag('div',array('class'=>'elem'));
            echo CHtml::label($label,false);
            echo CHtml::openTag('div',array('class'=>'indent'));
                echo CHtml::activeDropDownList($model,$attribute,$data,$htmlOptions);
                echo $this->error($model,$attribute);
            echo CHtml::closeTag('div');
        echo CHtml::closeTag('div');
    }
    
    public function passwordField2($label,$model,$attribute,$htmlOptions=array())
    {
        if(!isset($htmlOptions['class']))
            $htmlOptions['class'] = 'medium';
        echo CHtml::openTag('div',array('class'=>'elem'));
            echo CHtml::label($label,false);
            echo CHtml::openTag('div',array('class'=>'indent'));
                echo CHtml::activePasswordField($model,$attribute,$htmlOptions);
                echo $this->error($model,$attribute);
            echo CHtml::closeTag('div');
        echo CHtml::closeTag('div');
    }
    
    public function text($label,$value){
        echo CHtml::openTag('div',array('class'=>'elem'));
            echo CHtml::label($label,false);
            echo CHtml::openTag('div',array('class'=>'indent'));
                echo $value;
            echo CHtml::closeTag('div');
        echo CHtml::closeTag('div');
    }
}

