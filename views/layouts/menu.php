<?php
	use yii\bootstrap\Nav;
	use yii\bootstrap\NavBar;

    NavBar::begin([
        'options' => [
            'class' => 'navbar navbar-default main-menu',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-default'],
        'items' => [
        	[
        		'label' => Yii::t('app', 'video'),
        		'items' => [
        				['label' => Yii::t('app', 'wedding clips'), 'url' => ['/site/index']],
        				['label' => Yii::t('app', 'wedding movies'), 'url' => ['/site/wedding-movies']],
        				['label' => Yii::t('app', 'family movies'), 'url' => ['/site/family-movies']],
        				['label' => Yii::t('app', 'different'), 'url' => ['/site/different']],
        		],
        	],
        		
        	[
        		'label' => Yii::t('app', 'photo'),
        		'items' => [
        				['label' => Yii::t('app', 'Oksana And Maxim'), 'url' => ['/site/photo/1']],
        				['label' => Yii::t('app', 'Olya And Andrey'), 'url' => ['/site/photo/2']],
        				['label' => Yii::t('app', 'Zhenya And Angelika'), 'url' => ['/site/photo/3']],
        				['label' => Yii::t('app', 'Wedding In The Field'), 'url' => ['/site/photo/4']],
        				['label' => Yii::t('app', 'Zhenya And Inna'), 'url' => ['/site/photo/5']],
        		],
        	],
        	['label' => Yii::t('app', 'contacts'), 'url' => ['/site/contacts']],
        	['label' => Yii::t('app', 'about'), 'url' => ['/site/about']],
        	['label' => Yii::t('app', 'friends'), 'url' => ['/site/friends']],
        ],
    ]);
    NavBar::end();
   
