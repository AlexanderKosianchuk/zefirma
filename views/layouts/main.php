<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">

	<header class='header jumbotron-header'>
		<center>
			<img class='jumbotron-img' src='/img/header.png'/>
		</center>
	</header>
	
    <?php
    NavBar::begin([
        'brandLabel' => 'Zefirma',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-default',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
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
    ?>

    <div class="container">

        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
