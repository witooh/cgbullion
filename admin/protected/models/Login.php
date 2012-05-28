<?php

class Login extends CFormModel
{
    public $username;
    public $password;
    public $rememberMe;
    public $email;

    private $_identity;

    public function rules()
    {
        return array(
            // username and password are required
            array('username, password', 'required' ,'on'=>'login'),
            // rememberMe needs to be a boolean
            array('rememberMe', 'boolean','on'=>'login'),
            // password needs to be authenticated
            array('password', 'authenticate','on'=>'login'),
            array('email','required','on'=>'forgetpassword'),
            array('email','email','on'=>'forgetpassword'),
            // protect sql injection
            //array('username, password', 'checkInjection'),
        );
    }
    
    public function attributeLabels()
    {
        return array(
            'rememberMe'=>'Remember',
        );
    }

    public function authenticate($attribute,$params)
    {
        if(!$this->hasErrors())
        {
            $this->_identity=new UserIdentity($this->username,hashPassword($this->password));
            if(!$this->_identity->authenticate())
                $this->addError('password','Incorrect username or password.');
        }
    }

    /**
     * Logs in the user using the given username and password in the model.
     * @return boolean whether login is successful
     */
    public function login()
    {
        if($this->_identity===null)
        {
            $this->_identity=new UserIdentity($this->username,$this->password);
            $this->_identity->authenticate();
        }
        if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
        {
            $duration=$this->rememberMe ? 3600*24*30 : 0; // 30 days
            Yii::app()->user->login($this->_identity);
            
            return true;
        }
        else
            return false;
    }
}
