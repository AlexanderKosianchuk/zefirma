<?php
	use yii\bootstrap\Nav;
	use yii\bootstrap\NavBar;

    NavBar::begin([
        'options' => [
            'class' => 'navbar navbar-default',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-default'],
        'items' => [
        	[
        		'label' => Yii::t('app', 'Video'),
        		'items' => [
        				['label' => Yii::t('app', 'Wedding clips'), 'url' => ['/site/index']],
        				['label' => Yii::t('app', 'Wedding video'), 'url' => ['/site/wedding-video']],
        				['label' => Yii::t('app', 'Love Story'), 'url' => ['/site/love-story']],
        				['label' => Yii::t('app', 'Different'), 'url' => ['/site/different']],
        		],
        	],
        		
        	[
        		'label' => Yii::t('app', 'Photo'),
        		'items' => [
        				['label' => Yii::t('app', 'Oksana And Maxim'), 'url' => ['/site/photo/0']],
        				['label' => Yii::t('app', 'Olya And Andrey'), 'url' => ['/site/photo/1']],
        				['label' => Yii::t('app', 'Zhenya And Angelika'), 'url' => ['/site/photo/2']],
        				['label' => Yii::t('app', 'Wedding In The Field'), 'url' => ['/site/photo/3']],
        				['label' => Yii::t('app', 'Zhenya And Inna'), 'url' => ['/site/photo/4']],
        		],
        	],
        	['label' => Yii::t('app', 'Contacts'), 'url' => ['/site/contacts']],
        	['label' => Yii::t('app', 'About'), 'url' => ['/site/about']],
        	['label' => Yii::t('app', 'Friends'), 'url' => ['/site/friends']],
        ],
    ]);
    NavBar::end();
   
