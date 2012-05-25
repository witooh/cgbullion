<?php

class LoginController extends Controller
{
	public $layout='//layouts/login';

	public function actionIndex()
	{
		$modelLogin = new Login();    
        
        if(isset($_POST['Login']))
        {
            $modelLogin->attributes=$_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if($modelLogin->validate() && $modelLogin->login()){
                Log::info('Login');
                $this->redirect(url('site/index'));
            }
        }
        $this->render('index',array(
            'modelLogin'=>$modelLogin,
        ));
	}
}
