<?php

class LoginController extends Controller
{
	public $layout='//layouts/login';

	public function actionIndex()
	{
        $modelLogin = new Login();  
        $modelLogin->setScenario('login');
        if(isset($_POST['Login']))
        {
            $modelLogin->attributes=$_POST['Login'];
            if($modelLogin->validate() && $modelLogin->login()){
                $this->redirect(url('site/index'));
            }
        }
		$this->render('index',array(
            'modelLogin'=>$modelLogin,
        ));
	}
    
    public function actionLogout(){
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }
    
    public function actionForgetpassword(){
        $modelLogin = new Login();
        $modelLogin->setScenario('forgetpassword');
        if(isset($_POST['Login']))
        {
            $modelLogin->attributes=$_POST['Login'];
            if($modelLogin->validate()){
            }
        }
        $this->render('forgetpassword',array(
            'modelLogin'=>$modelLogin,
        ));
    }
}
