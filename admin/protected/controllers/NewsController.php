<?php

class NewsController extends Controller
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
                'actions' => array('add','index','deleteall','edit'),
                'users' =>array('@'),
            ),
            array('deny',
                'users' => array('*'),
            ),
        );
    }
    
    public function actionIndex()
    {
        $modelNews = new News;
        $modelNews->unsetAttributes();
        if (isset($_GET['News'])){
            $modelNews->attributes = $_GET['News'];
        }
        $this->render('index',array(
            'modelNews'=>$modelNews,
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
    
    public function actionAdd()
    {
        $modelNews = new News;
        $modelNews->setScenario('add');
        if(isset($_POST['News'])){
            //$this->performAjaxValidation($modelNews);
            $modelNews->attributes=$_POST['News'];
            $modelNews->cover_image=CUploadedFile::getInstance($modelNews,'cover_image');
			if($modelNews->validate()){
				$modelNews->cover_image = baseurl('article/cover/'.md5(date('Y-m-d H:i:s:u')).'.'.$modelNews->cover_image->extensionName);
				$modelNews->save(false);
				$file=CUploadedFile::getInstanceByName('News[cover_image]');
                $isSave = $file->saveAs(basepath().'/../article/cover/'.md5(date('Y-m-d H:i:s:u')).'.'.$file->extensionName);                
                if($isSave){
                	setFlash('success','News is added');
                }else{
                	$modelNews->delete();
                	setFlash('error','Cannot add News');
                }
                $this->redirect(url('news/index'));
            }
        }
        if(empty($modelNews->create_datetime))
            $modelNews->create_datetime = date('Y-m-d H:i:s');
        $this->render('add',array(
            'modelNews'=>$modelNews,
        ));
    }
    
    public function actionDeleteall(){
        if(isset($_POST['cid'])){
            $totalDelete = News::model()->deleteByPk($_POST['cid']);
            if($totalDelete){
                setFlash('success',"{$totalDelete} News are deleted");
                $this->redirect(Yii::app()->user->returnUrl);
            }
        }
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
