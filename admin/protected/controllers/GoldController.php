<?php

class GoldController extends Controller
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
                'actions' => array('addprice','index','deleteall','edit'),
                'users' =>array('@'),
            ),
            array('deny',
                'users' => array('*'),
            ),
        );
    }
    
    public function actionIndex()
    {
        $modelGold = new Gold('search');
        $modelGold->unsetAttributes();
        if (isset($_GET['Gold'])){
            $modelGold->attributes = $_GET['Gold'];
        }
        $this->render('index',array(
            'modelGold'=>$modelGold,
        ));
    }
    
    public function actionEdit($id){
        $modelGold = Gold::model()->findByPk($id);
        if(isset($_POST['Gold'])){
            $this->performAjaxValidation($modelGold);
            $modelGold->attributes=$_POST['Gold'];
            if($modelGold->save()){
                setFlash('success',"Gold Price on {$modelGold->date} is edited");
                $this->redirect(url('gold/index'));
            }
        }
        $this->render('edit_price',array(
            'modelGold'=>$modelGold,
        ));
    }
    
    public function actionAddprice()
    {
        $modelGold = new Gold;
        $modelGold->setScenario('add');
        if(isset($_POST['Gold'])){
            $this->performAjaxValidation($modelGold);
            $modelGold->attributes=$_POST['Gold'];
            if($modelGold->save()){
                setFlash('success','New Gold Price is added');
                $this->redirect(url('gold/index'));
            }
        }
        if(empty($modelGold->date))
            $modelGold->date = date('Y-m-d');
        $this->render('add_price',array(
            'modelGold'=>$modelGold,
        ));
    }
    
    public function actionDeleteall(){
        if(isset($_POST['cid'])){
            $totalDelete = Gold::model()->deleteByPk($_POST['cid']);
            if($totalDelete){
                setFlash('success',"{$totalDelete} Gold Index are deleted");
            }
        }
        $this->redirect(Yii::app()->user->returnUrl);
    }
    
    protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']))
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
