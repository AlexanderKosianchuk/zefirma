<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\WeddingVideo;
use app\models\Photo;
use app\models\Admin;
use yii\data\ActiveDataProvider;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
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
    	if (Admin::checkAdminLogedIn()) {
    		return $this->actionAdmin();
    	}
    	
    	$model = new LoginForm();
    	if ($model->load(Yii::$app->request->post()) && $model->login()) {
    		return $this->actionAdmin();
    	}
    	
    	return $this->render('login', [
    		'model' => $model,
    	]);
    	
    	//на хостинге не работают куки
        /*if (!\Yii::$app->user->isGuest) {
        	return $this->actionAdmin();
            //return $this->redirect('/site/admin');
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
        	 return $this->actionAdmin();
             //return $this->redirect('/site/admin');
        }
        return $this->render('login', [
            'model' => $model,
        ]);*/
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        Admin::logout();
        return $this->goHome();
    }
    
    public function actionAdmin()
    {
    	if (Admin::checkAdminLogedIn()) {
	    	$dataProviderClip = new ActiveDataProvider([
	    			'query' => WeddingVideo::find()->where(['category' => 'clip']),
	    			'pagination' => [
	    					'pageSize' => 50,
	    			],
	    	]);
	    	
	    	$dataProviderVideo = new ActiveDataProvider([
	    			'query' => WeddingVideo::find()->where(['category' => 'video']),
	    			'pagination' => [
	    					'pageSize' => 50,
	    			],
	    	]);
	    	
	    	$dataProviderLovestory = new ActiveDataProvider([
	    			'query' => WeddingVideo::find()->where(['category' => 'lovestory']),
	    			'pagination' => [
	    					'pageSize' => 50,
	    			],
	    	]);
	    	
	    	$dataProviderDifferent = new ActiveDataProvider([
	    			'query' => WeddingVideo::find()->where(['category' => 'different']),
	    			'pagination' => [
	    					'pageSize' => 50,
	    			],
	    	]);
	    	    	
	    	return $this->render('admin', [
	    			'dataProviderClip' => $dataProviderClip,
	    			'dataProviderVideo' => $dataProviderVideo,
	    			'dataProviderLovestory' => $dataProviderLovestory,
	    			'dataProviderDifferent' => $dataProviderDifferent    		
	    	]);
    	} else {
    		//return $this->redirect('/site/login');
    		return $this->actionLogin();
    	}
    }

    public function actionAddVideo()
    {
    	if (Admin::checkAdminLogedIn()) {
	    	if (Yii::$app->request->isAjax) {
		    	$category = Yii::$app->request->post('category');
		    	$url = Yii::$app->request->post('value');
		    	
		    	if((strlen($category) > 0) && (strlen($url) > 0)) {
		    		$WV = new WeddingVideo();
		    		$WV->attributes = [
	    				'category' => $category,
	    				'url' => $url
		    		];
		    		$WV->save();
		    	}
		    	
		    	return json_encode([
		    		'status' => 'ok'	
		    	]);
	    	} else {
	    		return $this->render('site/error');
	    	}
    	} else {
    		//return $this->redirect('/site/login');
    		return $this->actionLogin();
    	}
    }
    
    public function actionUpdateVideo()
    {
    	if (Admin::checkAdminLogedIn()) {
	    	if (Yii::$app->request->isAjax) {
		    	$category = Yii::$app->request->post('category');
		    	$id = Yii::$app->request->post('id');
		    	$url = Yii::$app->request->post('value');
		    	
		    	if(
	    			(strlen($category) > 0) && 
	    			(strlen($url) > 0) && 
	    			(strlen($id) > 0)
		    	  ) {
		    		$wv = WeddingVideo::find()->where([
						'id' => $id,
						'category' => $category
		    		])->one();
		    		
		    		$wv->url = $url;
		    		$wv->save();
		    	}
		    	
		    	return json_encode([
		    		'status' => 'ok'	
		    	]);
	    	} else {
	    		return $this->render('site/error');
	    	}
    	} else {
    		//return $this->redirect('/site/login');
    		return $this->actionLogin();
    	}
    }
    
    public function actionDeleteVideo()
    {
    	if (Admin::checkAdminLogedIn()) {
        	if (Yii::$app->request->isAjax) {
		    	$category = Yii::$app->request->post('category');
		    	$id = Yii::$app->request->post('id');
		    	
		    	if((strlen($category) > 0) && (strlen($id) > 0)) {
		    		WeddingVideo::deleteAll(
	    				[
	    					'id' => $id,
	    					'category' => $category
	    				]
	    			);
		    	}
		    	
		    	return json_encode([
		    		'status' => 'ok'	
		    	]);
	    	} else {
	    		return $this->render('site/error');
	    	}
    	} else {
    		//return $this->redirect('/site/login');
    		return $this->actionLogin();
    	}
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
