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
                'actions' => array('add','index','deleteall','edit','removecover'),
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
        $modelNews = News::model()->findByPk($id);
        if(isset($_POST['News'])){
            $this->performAjaxValidation($modelNews);
            $modelNews->attributes=$_POST['News'];
            $modelNews->modified_datetime = date('Y-m-d H:i:s');
            $modelNews->cover_file=CUploadedFile::getInstance($modelNews,'cover_file');
			if($modelNews->save()){
				if(isset($modelNews->cover_file)){
					$upload = new CUpload;
					if($upload->uploadCover($modelNews->cover_file,'news')){
						$modelNews->cover_image = $upload->file_dst_name;
						$modelNews->update('cover_image');
						setFlash('success','News is edited');
					}else{
						$modelNews->delete();
                		setFlash('error','Cannot edit News');
					}
				}else{
					setFlash('success','News is edited');
				}
                $this->redirect(url('news/index'));
            }
        }
        $this->render('edit',array(
            'modelNews'=>$modelNews,
        ));
    }
    
    public function actionAdd()
    {
        $modelNews = new News;
        if(isset($_POST['News'])){
            $this->performAjaxValidation($modelNews);
            $modelNews->attributes=$_POST['News'];
            $modelNews->cover_file=CUploadedFile::getInstance($modelNews,'cover_file');
			if($modelNews->save()){
				if(isset($modelNews->cover_file)){
					$upload = new CUpload;
					if($upload->uploadCover($modelNews->cover_file,'news')){
						$modelNews->cover_image = $upload->file_dst_name;
						$modelNews->update('cover_image');
						setFlash('success','News is added');
					}else{
						$modelNews->delete();
                		setFlash('error','Cannot add News');
					}
				}else{
					setFlash('success','News is added');
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
            $modelNews = News::model()->findAllByPk($_POST['cid']);
            $totalDelete = count($modelNews);
            if(!empty($modelNews)){
            	foreach($modelNews as $item){
            		$filename = CUpload::getNewsCoverImagePath().$item->cover_image;
            		if(is_file($filename) && file_exists($filename)){
            			unlink($filename);
            		}
            		$item->delete();
            	}
                setFlash('success',"{$totalDelete} News are deleted");
            }
        }
        $this->redirect(Yii::app()->user->returnUrl);
    }
    
    public function actionRemovecover($id){
    	$modelNews = News::model()->findByPk($id);
    	if(!empty($modelNews)){
    		$filename = CUpload::getNewsCoverImagePath().$modelNews->cover_image;
	    	if(is_file($filename) && file_exists($filename)){
				unlink($filename);
				$modelNews->cover_image = null;
				$modelNews->update('cover_image');
				setFlash('success',"Cover image is deleted");
			}else{
				setFlash('error',"Cannot delete cover image");
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
