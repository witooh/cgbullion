<?php
class Setting extends MSetting
{
	public $oldPassword;
	public $confirmNewPassword;
	public $newPassword;
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('password', 'required'),
			array('oldPassword, newPassword', 'required', 'on'=>'changepwd'),
			array('password, oldPassword, confirmNewPassword', 'length', 'max'=>32),
			array('email_contactus, email_trading, email_joinus', 'safe'),
			array('confirmNewPassword', 'compare', 'compareAttribute' => 'newPassword', 'on'=>array('changepwd'), 'message'=>'Confirm New Password does not match'),
			array('oldPassword', 'comparePwd', 'on'=>'changepwd'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('settingid, password, email_contactus, email_trading, email_joinus', 'safe', 'on'=>'search'),
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

		$criteria->compare('password',$this->password,true);
		$criteria->compare('email_contactus',$this->email_contactus,true);
		$criteria->compare('email_trading',$this->email_trading,true);
		$criteria->compare('email_joinus',$this->email_joinus,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function comparePwd(){
		$password = Setting::model()->findByPk(1,array('select'=>'password'))->password;
		if($password != $this->oldPassword)
			$this->addError('oldPassword',"Old Passowrd is incorrect"); 
	}
}