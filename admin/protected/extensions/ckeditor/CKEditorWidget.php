<?php
/*
 * ------------------------------------------------------------------------
 * Version: 0.1
 *
 * Created on 02/11/2009
 * Last Modified on 18/12/2009
 * Created by Sopana Prajongsangsri
 *
 * Copyright: www.nahug.com
 * ------------------------------------------------------------------------
 *
 * GNU LESSER GENERAL PUBLIC LICENSE
 *
 * Please read 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU lesser General Public License
 * along with this program.  If not, see including LICENSE.txt OR <http://www.gnu.org/licenses/>.
 *
 * ------------------------------------------------------------------------
 * Installation:
 * You have to install this extension into any of Yii extension folder.
 * - /protected/extensions/
 * - /protected/modules/MODULE_NAME/extensions/
 * ------------------------------------------------------------------------
 * ------------------------------------------------------------------------
 * Usage:
 * <?php $this->widget(
 *	'application.extensions.NHCKEditor.CKEditorWidget', 
 *	array(
 *		//	[Required] CModel object
 *		'model' => $model,
 *		'attribute' => 'ATTRIBUTE_NAME',
 *		
 *		//	[Optional] CSS file to be included
 *		'cssFile' => Yii::app()->request->baseURL.'/css/YOUR_FILE.css',
 *		
 *		//	[Optional] Options based on CKEditor API documentation
 *		'editorOptions' => array(
 *			//  Now supports PHP array and javascript code (must begin with js:)
 *			
 *			//'width' => 800,
 *			//'height' => 480,
 *			//'language' => 'th',
 *			
 *			
 *			//'toolbar' => 'Full',              //	format #1:	String
 *			
 *			//'toolbar' => array(		        //	format #2:	PHP array
 *			//	array('Source', '-', 'Save')
 *			//),
 *			
 *			//'toolbar' => "js:[		        //	format #3:	javascript code
 *			//	['Source', '-', 'Save']
 *			//]",
 *			
 *			//'uiColor' => '',
 *			
 *			//	... your own options
 *		),
 *		
 *		//	[Optional] htmlOptions based on Yii implementation
 *		'htmlOptions' => array(
 *			//
 *		),
 *	)
 * ); ?>
 * ------------------------------------------------------------------------
 */

class CKEditorWidget extends CInputWidget
{
	//	General Purpose
	private $_editorOptions;
	public $assetsPath;
	public $cssFile;
	
	//	HTML Part
	public $element = array();
	
	//	Javascript Part
	public $editorOptions = array();
	
	//	Initialize widget
	public function init()
	{
		//	publish  assets folder
		$this->assetsPath = Yii::app()->getAssetManager()->publish(dirname(__FILE__).DIRECTORY_SEPARATOR.'assets');
		
		//	resolve HTML element name and id
		list($this->element['name'], $this->element['id']) = $this->resolveNameID();
		
		//	include CKEditor file
		Yii::app()->clientScript->registerScriptFile($this->assetsPath.'/ckeditor.js');
		
		//	include CSS file if defined
		if($this->cssFile !== null)
		{
			Yii::app()->clientScript->registerCssFile($this->cssFile);
		}
		
		$this->jsOptions();
		
		$ckeditorScript = "CKEDITOR.replace('%s', %s);\r\n";
		$ckeditorScript = sprintf($ckeditorScript, $this->element['name'], $this->_editorOptions);
		Yii::app()->clientScript->registerScript('Yii.'.__CLASS__.'#'.$this->element['id'], $ckeditorScript, CClientScript::POS_READY);
	}
	
	private function jsOptions()
	{
		$cutoff = false;
		$jsObject = "\r\n{\r\n";
		
		foreach($this->editorOptions as $name => $value)
		{
			if(is_string($value) && preg_match("/^js\:(.*)/i", $value))
			{
				$jsObject .= "\t".$name.": ".preg_replace("/^js\:(.*)/i", "$1", $value).",\r\n";
			}
			else
			{
				$jsObject .= "\t".$name.": ".CJavaScript::jsonEncode($value).",\r\n";
			}
			
			$cutoff = true;
		}
		
		if($cutoff)
		{
			$jsObject = substr($jsObject, 0, -3)."\r\n";
		}
		
		$jsObject .= "}";
		
		$this->_editorOptions = $jsObject;
	}

	public function run()
	{
		$this->render('widget');
	}
}
?>