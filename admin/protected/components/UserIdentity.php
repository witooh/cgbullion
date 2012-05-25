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
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$modelUser = User::model()->with(array(
			'master'=>array(
				'select'=>'uid',
			)))->findByAttributes(array('username'=>$this->username),array(
			'select'=>'t.masterid, t.isMaster, t.userid, t.username, t.password',
		));
		if($modelUser != null){
			if($modelUser->password != $modelUser->hashPassword($this->password)){
				$this->errorCode=self::ERROR_PASSWORD_INVALID;
			}else{
				$modelRole = Role::model()->with(
				array('rolelist'=>array(
					'select'=>'access',
				)))->findByPk($modelUser->userid,array(
					'select'=>'rolelistid',
				));
				$this->errorCode=self::ERROR_NONE;
				user()->setState('uid', $modelUser->master->uid);
				user()->setState('isMaster', $modelUser->isMaster);
				user()->setState('masterid', $modelUser->masterid);
				if(!$modelUser->isMaster){
					user()->setState('access', json_decode($modelRole->rolelist->access,true));																							
				}					
				$this->_id = $modelUser->userid;
				$this->_name = $modelUser->username;
			}
		}else{
			$soapURL =  param('serviceUrl');
			$client = new SoapClient($soapURL);
			$dataSoap = $client->authentication(array('username' => $this->username, 'password'=>$this->password));
			$dataReturn = trim($dataSoap->return);
			//echo $dataReturn;
			// condition error
			if($dataReturn == 'User Not Found !!')
				$this->errorCode=self::ERROR_USERNAME_INVALID;
			else if($dataReturn == 'Password Incorrect !!')
				$this->errorCode=self::ERROR_PASSWORD_INVALID;
			else if(preg_match('/ERROR/i', $dataReturn))
				$this->errorCode=self::ERROR_PASSWORD_INVALID;
			else{
				$this->errorCode=self::ERROR_NONE;
				$modelUser = new User;
				$transaction=app()->db->beginTransaction();
				try{
					$modelService = new Service;
					$modelService->uid = $dataReturn;
					$modelService->save();
					$modelUser->username = $this->username;
					$modelUser->password = $modelUser->hashPassword($this->password);
					$modelUser->isMaster = 1;
					$modelUser->email = 'none@none.com';
					$modelUser->masterid = $modelService->masterid;
					$modelUser->registerdate = new CDbExpression('NOW()');
					if($modelUser->save()){
						user()->setState('uid1', $dataReturn);
						user()->setState('isMaster', 1);
						user()->setState('masterid', $modelUser->masterid);
						$this->_id = $modelUser->userid;
						$this->_name = $modelUser->username;
					}
					$transaction->commit();
				}catch(Exception $e){
					$transaction->rollBack();
					throw new CDbException($e);
				}
			}
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