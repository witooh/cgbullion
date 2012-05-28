<?php

/**
 * This is the model class for table "report".
 *
 * The followings are the available columns in table 'report':
 * @property integer $reportid
 * @property string $title_en
 * @property string $title_th
 * @property string $title_in
 * @property string $content_en
 * @property string $content_th
 * @property string $content_in
 * @property string $cover_image
 * @property string $create_datetime
 * @property string $modified_datetime
 */
class Report extends MReport
{
	public $cover_file;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Report the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title_en, title_th, title_in, create_datetime', 'required'),
			array('title_en, title_th, title_in', 'length', 'max'=>200),
			array('content_en, content_th, content_in, cover_image, modified_datetime, cover_file', 'safe'),
			
			array('cover_file', 'file', 'types'=>'jpg, gif, png', 'allowEmpty'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('reportid, title_en, title_th, title_in, content_en, content_th, content_in, cover_image, create_datetime, modified_datetime', 'safe', 'on'=>'search'),
		);
	}
	
	public function attributeLabels()
	{
		return array(
			'reportid' => 'Report Id',
			'title_en' => 'English Title',
			'title_th' => 'Thai Title',
			'title_in' => 'Indonesian Title',
			'content_en' => 'English Content',
			'content_th' => 'Thai Content',
			'content_in' => 'Indonesian Content',
			'cover_image' => 'Cover Image',
			'create_datetime' => 'Created Date',
			'modified_datetime' => 'Modified Date',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;
		$sort = new CSort;
        $sort->defaultOrder='reportid DESC';

		$criteria->compare('reportid',$this->reportid);
		$criteria->compare('title_en',$this->title_en,true);
		$criteria->compare('title_th',$this->title_th,true);
		$criteria->compare('title_in',$this->title_in,true);
		$criteria->compare('content_en',$this->content_en,true);
		$criteria->compare('content_th',$this->content_th,true);
		$criteria->compare('content_in',$this->content_in,true);
		$criteria->compare('cover_image',$this->cover_image,true);
		$criteria->compare('create_datetime',$this->create_datetime,true);
		$criteria->compare('modified_datetime',$this->modified_datetime,true);

		return new CActiveDataProvider($this, array(
			'sort'=>$sort,
			'criteria'=>$criteria,
		));
	}
}