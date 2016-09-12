<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\MessageForm;
use yii\data\Pagination;
use app\models\Images;

class MainController extends Controller
{
    public $layout="site";


    public function behaviors()
{
    return [
        [
            'class' => 'yii\filters\PageCache',
            'only' => ['index','catpage'],
            'duration' => 120,
            'variations' => [
                \Yii::$app->language,
            ],
        ],
    ];
}


  public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }


    public function actionIndex(){

        return $this->render('index');
    }

    public function actionCatpage(){

        return $this->render('catpage');
    }

    public function actionContacts(){

    	$model = new MessageForm; 

    	if ($model->load(Yii::$app->request->post()) && $model->validate()) {
    		if($model->messageSave()){
    			Yii::$app->session->setFlash('success','Success');
                   
    			return $this->refresh();
    		}
    	}
    	return $this->render('contacts',['model'=>$model]);
    }


    public function actionPhotos(){

    	$query=Images::find();


    	$pagination=new Pagination([
        	'defaultPageSize' => 6,
            'totalCount' => $query->count(),
            'forcePageParam' => false,
       ]);

    	 $images = $query->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();


      return $this->render('photos',[
      	'images'=>$images,
      	'pagination'=>$pagination,
      	]);
    }
    
}