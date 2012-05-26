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
                'actions' => array('addprice','index'),
                'users' =>array('@'),
            ),
            array('deny',
                'users' => array('*'),
            ),
        );
    }
    
    public function actionAddprice()
    {
        $modelGold = new Gold;
        if(isset($_POST['Gold'])){
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
    
    public function actionIndex()
    {
        $modelGold = new Gold('search');
        $modelGold->unsetAttributes();
        if (isset($_GET['Gold'])){
            $modelGold->attributes = $_GET['Gold'];
        }
        if(isset($_POST['cid'])){
            print_r($_POST['cid']);
        }
        $this->render('index',array(
            'modelGold'=>$modelGold,
        ));
    }
}
