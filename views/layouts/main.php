<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;

use yii\widgets\Breadcrumbs;
use app\assets\BowerAsset;
use app\components\LanguageSwitcher;

BowerAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="
    	<?= Yii::t('app', 'Videographer at the wedding Kiev'); ?>
    	<?= Yii::t('app', 'wedding videography Kiev'); ?> 
			<?= Yii::t('app', 'from'); ?>
    		Zefirma: 
    		38 (093) 5294241 
    		<?= Yii::t('app', 'wedding videography'); ?>, 
    	<?= Yii::t('app', 'wedding video in Kiev'); ?>" />
	<meta name="keywords" content="
		<?= Yii::t('app', 'Wedding video'); ?>
		<?= Yii::t('app', 'Wedding clips'); ?>
		<?= Yii::t('app', 'videographer for the wedding'); ?>
		<?= Yii::t('app', 'video'); ?>
		<?= Yii::t('app', 'videography'); ?>
		<?= Yii::t('app', 'videographer at the wedding Kiev'); ?>
		<?= Yii::t('app', 'wedding videography Kiev'); ?>
		<?= Yii::t('app', 'the operator to the wedding'); ?>
	"/>
   
	<script type="text/javascript" src="//userapi.com/js/api/openapi.js?47"></script>
	<script type="text/javascript">VK.init({apiId: 2798627, onlyWidgets: true});</script>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">

	<header class='header jumbotron-header'>
		<center>
			<a href="/"><img class='jumbotron-img' src='/img/header.png'/></a>
		</center>
	</header>
	
	<?= LanguageSwitcher::Widget() ?>
	 
    <?php require_once 'menu.php'; ?>

    <div class="container">

        <?= $content ?>
        
    </div>
    
</div>

<?php require_once 'footer.php'; ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
