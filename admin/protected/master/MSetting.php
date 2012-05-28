<?php

/**
 * This is the model class for table "setting".
 *
 * The followings are the available columns in table 'setting':
 * @property integer $settingid
 * @property string $password
 * @property string $email_contactus
 * @property string $email_trading
 * @property string $email_joinus
 */
class MSetting extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MSetting the static model class
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
		return 'setting';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('password', 'required'),
			array('password', 'length', 'max'=>32),
			array('email_contactus, email_trading, email_joinus', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('settingid, password, email_contactus, email_trading, email_joinus', 'safe', 'on'=>'search'),
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
			'settingid' => 'Settingid',
			'password' => 'Password',
			'email_contactus' => 'Email Contactus',
			'email_trading' => 'Email Trading',
			'email_joinus' => 'Email Joinus',
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

		$criteria->compare('settingid',$this->settingid);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email_contactus',$this->email_contactus,true);
		$criteria->compare('email_trading',$this->email_trading,true);
		$criteria->compare('email_joinus',$this->email_joinus,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}