<?php

class SiteController extends Controller
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
                'actions' => array('index','form','interface','typo'),
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
    
    public function actionGraph(){
        $this->render('graph');
    }
    
    public function actionForm(){
        $this->render('form');
    }
    
    public function actionInterface(){
        $this->render('interface');
    }
    
    public function actionTypo(){
        $this->render('typo');
    }
    
    public function actionTable(){
        $this->render('table');
    }
    
    public function actionCalendar(){
        $this->render('calendar');
    }
    
    public function actionGallery(){
        $this->render('gallery');
    }
    
    public function actionWidget(){
        $this->render('widget');
    }
    
    public function actionFile(){
        $this->render('file');
    }
    
    public function actionIcon(){
        $this->render('icon');
    }
    
    public function actionContact(){
        $this->render('contact');
    }
    
    public function actionCtable(){
        $data = array();
        $data[] = $this->itemListData(0);
        $data[] = $this->itemListData(1);
        $data[] = $this->itemListData(2);
        $data[] = $this->itemListData(3);
        $data[] = $this->itemListData(4);
        $data[] = $this->itemListData(5);
        $data[] = $this->itemListData(6);
        $data[] = $this->itemListData(7);
    
        $dataProvider=new CArrayDataProvider($data, array(
                'id'=>'id',
                'sort'=>array(
                    'attributes'=>$this->itemListAttributes(),
                ),
                'pagination'=>array(
                    'pageSize'=>5,
                ),
        ));
        $this->render('ctable',array(
                'dataProvider'=>$dataProvider,
        ));
    }

    public function actionError()
    {
        if(user()->isGuest)
            $this->layout = '//layouts/login';
        else
            $this->layout = '//layouts/main';
        if($error=Yii::app()->errorHandler->error)
        {
            if(Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }
    
    public function itemListData($id){
        return array(
                'id'=>$id,
                'request_no'=>'GB20550400117',
                'declaration_no'=>'20921880005',
                'origin_code'=>'20921880005',
                'destination'=>'HEZ207405',
                'mawb'=>'1134004',
                'hawb'=>'1134004',
                'goods_description'=>'test',
                'activity'=>'N',
        );
    }
    
    public function itemListAttributes(){
        return array(
                'id',
                'request_no',
                'declaration_no',
                'origin_code',
                'destination',
                'mawb',
                'hawb',
                'goods_description',
                'activity',
        );
    }
}
