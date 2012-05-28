<?php

class ReportController extends Controller
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
        $modelReport = new Report;
        $modelReport->unsetAttributes();
        if (isset($_GET['Report'])){
            $modelReport->attributes = $_GET['Report'];
        }
        $this->render('index',array(
            'modelReport'=>$modelReport,
        ));
    }
    
    public function actionEdit($id){
        $modelReport = Report::model()->findByPk($id);
        if(isset($_POST['Report'])){
            $this->performAjaxValidation($modelReport);
            $modelReport->attributes=$_POST['Report'];
            $modelReport->modified_datetime = date('Y-m-d H:i:s');
            $modelReport->cover_file=CUploadedFile::getInstance($modelReport,'cover_file');
			if($modelReport->save()){
				if(isset($modelReport->cover_file)){
					$upload = new CUpload;
					if($upload->uploadCover($modelReport->cover_file,'report')){
						$modelReport->cover_image = $upload->file_dst_name;
						$modelReport->update('cover_image');
						setFlash('success','Report is edited');
					}else{
						$modelReport->delete();
                		setFlash('error','Cannot edit Report');
					}
				}else{
					setFlash('success','Report is edited');
				}
                $this->redirect(url('report/index'));
            }
        }
        $this->render('edit',array(
            'modelReport'=>$modelReport,
        ));
    }
    
    public function actionAdd()
    {
        $modelReport = new Report;
        if(isset($_POST['Report'])){
            $this->performAjaxValidation($modelReport);
            $modelReport->attributes=$_POST['Report'];
            $modelReport->cover_file=CUploadedFile::getInstance($modelReport,'cover_file');
			if($modelReport->save()){
				if(isset($modelReport->cover_file)){
					$upload = new CUpload;
					if($upload->uploadCover($modelReport->cover_file,'report')){
						$modelReport->cover_image = $upload->file_dst_name;
						$modelReport->update('cover_image');
						setFlash('success','Report is added');
					}else{
						$modelReport->delete();
                		setFlash('error','Cannot add Report');
					}
				}else{
					setFlash('success','Report is added');
				}
                $this->redirect(url('report/index'));
            }
        }
        if(empty($modelReport->create_datetime))
            $modelReport->create_datetime = date('Y-m-d H:i:s');
        $this->render('add',array(
            'modelReport'=>$modelReport,
        ));
    }
    
    public function actionDeleteall(){
        if(isset($_POST['cid'])){
            $modelReport = Report::model()->findAllByPk($_POST['cid']);
            $totalDelete = count($modelReport);
            if(!empty($modelReport)){
            	foreach($modelReport as $item){
            		$filename = CUpload::getReportCoverImagePath().$item->cover_image;
            		if(is_file($filename) && file_exists($filename)){
            			unlink($filename);
            		}
            		$item->delete();
            	}
                setFlash('success',"{$totalDelete} Report are deleted");
            }
        }
        $this->redirect(Yii::app()->user->returnUrl);
    }
    
    public function actionRemovecover($id){
    	$modelReport = Report::model()->findByPk($id);
    	if(!empty($modelReport)){
    		$filename = CUpload::getReportCoverImagePath().$modelReport->cover_image;
	    	if(is_file($filename) && file_exists($filename)){
				unlink($filename);
				$modelReport->cover_image = null;
				$modelReport->update('cover_image');
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
