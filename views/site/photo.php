<?php

use yii\helpers\Html;
use evgeniyrru\yii2slick\Slick;
use yii\web\JsExpression;
/* @var $this yii\web\View */

$this->registerJsFile(Yii::$app->request->baseUrl.'/js/photo.js',
		['depends' => [\yii\web\JqueryAsset::className()]]); 

$this->title =  Yii::t('app', 'Photo') . " - " . Yii::t('app', 'Video operator for a wedding Kiev') . " ZEFIRMA " .
	Yii::t('app', 'Wedding videography and wedding video');

?>
<div class="site-index">
	<?php 
		$items = [];
		foreach ($photos as $photo) {
			$items[] =  Html::img($photo['url']);
		}
	?>

    <div class="body-content">
		 <div class="row center">
			 <h4><?= Yii::t('app', 'Wedding clips'); ?></h4>
		 </div>
		 
		 <div>
		 <?=Slick::widget([
        // HTML tag for container. Div is default.
        'itemContainer' => 'div',
        // HTML attributes for widget container
        'containerOptions' => ['class' => 'container'],
        // Items for carousel. Empty array not allowed, exception will be throw, if empty 
        'items' => $items,
        // HTML attribute for every carousel item
        'itemOptions' => ['class' => 'cat-image'],
        // settings for js plugin
        // @see http://kenwheeler.github.io/slick/#settings
        'clientOptions' => [
        	'lazyLoad' => 'ondemand',
        	'infinite' => true,
        	'speed' => 300,
        	'variableWidth' => true,
        	'centerMode' => true,
            'dots'     => true,
            // note, that for params passing function you should use JsExpression object
            'onAfterChange' => new JsExpression('function() {console.log("The cat has shown")}'),
        ],

    	]); ?>
    	</div>
		 
    </div>
</div>
