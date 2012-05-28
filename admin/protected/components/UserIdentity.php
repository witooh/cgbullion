<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;
	private $_name;

	public function authenticate()
	{
		$modelSetting = Setting::model()->findByPk(1,array('select'=>'password'));
		if($this->username != 'admin')
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if($this->password != $modelSetting->password)
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else{
            $this->errorCode=self::ERROR_NONE;
            $this->_id = 'admin';
            $this->_name = 'Admin';
        }
        return !$this->errorCode;
	}
	
	public function getId(){
		return $this->_id;
	}
	
	public function getName(){
		return $this->_name;
	}
}