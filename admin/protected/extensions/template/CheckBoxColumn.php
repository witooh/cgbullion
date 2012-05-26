<?php
/**
 * CCheckBoxColumn class file.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @link http://www.yiiframework.com/
 * @copyright Copyright &copy; 2008-2011 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

Yii::import('zii.widgets.grid.CGridColumn');

/**
 * CCheckBoxColumn represents a grid view column of checkboxes.
 *
 * CCheckBoxColumn supports no selection (read-only), single selection and multiple selection.
 * The mode is determined according to {@link selectableRows}. When in multiple selection mode, the header cell will display
 * an additional checkbox, clicking on which will check or uncheck all of the checkboxes in the data cells.
 *
 * Additionally selecting a checkbox can select a grid view row (depending on {@link CGridView::selectableRows} value) if
 * {@link selectableRows} is null (default).
 *
 * By default, the checkboxes rendered in data cells will have the values that are the same as
 * the key values of the data model. One may change this by setting either {@link name} or
 * {@link value}.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @version $Id: CCheckBoxColumn.php 3437 2011-11-07 15:03:58Z mdomba $
 * @package zii.widgets.grid
 * @since 1.1
 */
class CheckBoxColumn extends CCheckBoxColumn
{
	/**
	 * Initializes the column.
	 * This method registers necessary client script for the checkbox column.
	 */
	public function init()
	{
		if(isset($this->checkBoxHtmlOptions['name']))
			$name=$this->checkBoxHtmlOptions['name'];
		else
		{
			$name=$this->id;
			if(substr($name,-2)!=='[]')
				$name.='[]';
			$this->checkBoxHtmlOptions['name']=$name;
		}
		$name=strtr($name,array('['=>"\\[",']'=>"\\]"));

		if($this->selectableRows===null)
		{
			if(isset($this->checkBoxHtmlOptions['class']))
				$this->checkBoxHtmlOptions['class'].=' select-on-check';
			else
				$this->checkBoxHtmlOptions['class']='select-on-check';
			return;
		}

		$cball=$cbcode='';
		if($this->selectableRows==0)
		{
			//.. read only
			$cbcode="return false;";
		}
		elseif($this->selectableRows==1)
		{
			//.. only one can be checked, uncheck all other
			$cbcode="$(\"input:not(#\"+this.id+\")[name='$name']\").prop('checked',false);";
		}
		else
		{
			//.. process check/uncheck all
			$cball=<<<CBALL
$('#{$this->id}_all').live('click',function() {
	var checked=this.checked;
	$("input[name='$name']").each(function() {this.checked=checked;});
    $.uniform.update();
});

CBALL;
			$cbcode="$('#{$this->id}_all').prop('checked', $(\"input[name='$name']\").length==$(\"input[name='$name']:checked\").length);";
		}

		$js=$cball;
		$js.=<<<EOD
$("input[name='$name']").live('click', function() {
	$cbcode
});
EOD;
		Yii::app()->getClientScript()->registerScript(__CLASS__.'#'.$this->id,$js);
	}
}
