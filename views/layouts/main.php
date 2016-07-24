<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;

use app\assets\AppAsset;
use yii\widgets\Pjax;
use app\components\LanguageSwitcher;

AppAsset::register($this);
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
   
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<script type="text/javascript">
    function loadCSS(filename){ 
       var file = document.createElement("link");
       file.setAttribute("rel", "stylesheet");
       file.setAttribute("type", "text/css");
       file.setAttribute("href", filename);

       if (typeof file !== "undefined")
          document.getElementsByTagName("head")[0].appendChild(file);

       window.onload = function(){
    	   var mm = document.getElementsByClassName("main-menu")[0];
           mm.style.display = 'block';

    	   var lm = document.getElementsByClassName("language-menu")[0];
           lm.style.display = 'block';   
       }
    }
   //just call a function to load a new CSS:
   loadCSS("//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css");
</script>

<?php $this->beginBody() ?>

<div class="wrap">

	<header class='header jumbotron-header'>
		<center>
			<a href="/"><img class='jumbotron-img' src='/img/header.png'/></a>
		</center>
	</header>
		
	<div class='menu-row'>
		<?= LanguageSwitcher::Widget() ?>
		 
	    <?php require_once 'menu.php'; ?>
    </div>

	<section>
    	<?= $content ?>
    </section>
    
    <?php require_once 'social.php'; ?>
    
</div>

<?php require_once 'footer.php'; ?>

<?php $this->endBody() ?>
	
</body>
</html>
<?php $this->endPage() ?>
