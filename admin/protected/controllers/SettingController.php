<?php

class SettingController extends Controller
{
	public $layout='//layouts/main';
    public function filters()
    {
        return array(
            'accessControl',
        );
    }
    
    public function accessRules()
    {
        return array(
            array('allow',
                'actions'=>array('error'),
                'users' => array('*'),
            ),
            array('allow',
                'actions' => array('changepwd'),
                'users' =>array('@'),
            ),
            array('deny',
                'users' => array('*'),
            ),
        );
    }

	public function actionIndex()
	{
        setFlash('success','SUCCESS: Success message! hoooraaay!!!!');
		$this->render('index',array());
	}
	
	public function actionChangepwd(){
		$modelSetting = Setting::model()->findByPk(1);
		$modelSetting->setScenario('changepwd');
		if(isset($_POST['Setting'])){
			$modelSetting->attributes = $_POST['Setting'];
			$modelSetting->newPassword = hashPassword($modelSetting->newPassword);
			$modelSetting->oldPassword = hashPassword($modelSetting->oldPassword);
			$modelSetting->confirmNewPassword = hashPassword($modelSetting->confirmNewPassword);
			if($modelSetting->validate()){
				$modelSetting->password = $modelSetting->newPassword;
				$modelSetting->save(false);
				setFlash('success','Your Password is changed');
			}
		}
		$modelSetting->oldPassword = '';
		$modelSetting->newPassword = '';
		$modelSetting->confirmNewPassword = '';
		$this->render('changepwd',array(
			'modelSetting'=>$modelSetting,
		));
	}
}
