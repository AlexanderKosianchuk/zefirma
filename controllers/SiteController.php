<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\WeddingVideo;
use app\models\Photo;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'admin'],
                'rules' => [
                    [
                        'actions' => ['logout', 'admin'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['get'],
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

    public function actionIndex()
    {
    	$video = WeddingVideo::findAll(['category' => 'clip']);
        return $this->render('index', [ 'video' => $video ]);
    }
    
    public function actionWeddingMovies()
    {
    	$video = WeddingVideo::findAll(['category' => 'video']);
        return $this->render('video', 
        		[ 
        				'title' => Yii::t('app', 'Wedding Movies'),
        				'video' => $video 
        		]);
    }
    
    public function actionFamilyMovies()
    {
    	$video = WeddingVideo::findAll(['category' => 'lovestory']);
        return $this->render('video', 
        		[ 
        				'title' => Yii::t('app', 'Family Movies'),
        				'video' => $video 
        		]);
    }
    
    public function actionDifferent()
    {
    	$video = WeddingVideo::findAll(['category' => 'different']);
        return $this->render('video', 
        		[ 
        				'title' => Yii::t('app', 'Different'),
        				'video' => $video 
        		]);
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->render('admin');
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
             return $this->render('admin');
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
    
    public function actionAdmin()
    {
    	return $this->render('admin');
    }

    public function actionContacts()
    {
        return $this->render('contacts');
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
    
    public function actionFriends()
    {
    	return $this->render('friends');
    }
    
    public function actionPhoto()
    {
    	$id = Yii::$app->request->get('id');

    	$photos = Photo::findAll(['section' => $id]);
    	
    	return $this->render('photo', [
            'photos' => $photos,
        ]);
    }
}
