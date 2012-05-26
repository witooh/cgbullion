<?php

class CurrencyController extends Controller
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
                'actions' => array('index'),
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
    
    public function actionExchange()
    {
        setFlash('success','SUCCESS: Success message! hoooraaay!!!!');
        $this->render('exchange',array());
    }
    
    public function actionInverse()
    {
        setFlash('success','SUCCESS: Success message! hoooraaay!!!!');
        $this->render('inverse',array());
    }
}
