<?php

/**
 * This is the model class for table "news".
 *
 * The followings are the available columns in table 'news':
 * @property integer $newsid
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
class MNews extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return News the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'news';
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
			array('content_en, content_th, content_in, cover_image, modified_datetime', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('newsid, title_en, title_th, title_in, content_en, content_th, content_in, cover_image, create_datetime, modified_datetime', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'newsid' => 'Newsid',
			'title_en' => 'Title En',
			'title_th' => 'Title Th',
			'title_in' => 'Title In',
			'content_en' => 'Content En',
			'content_th' => 'Content Th',
			'content_in' => 'Content In',
			'cover_image' => 'Cover Image',
			'create_datetime' => 'Create Datetime',
			'modified_datetime' => 'Modified Datetime',
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

		$criteria->compare('newsid',$this->newsid);
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
			'criteria'=>$criteria,
		));
	}
}