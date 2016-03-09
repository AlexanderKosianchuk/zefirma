<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use evgeniyrru\yii2slick\Slick;
use yii\web\JsExpression;

$this->title = Yii::t('app', 'Friends') . ' - ' .  Yii::t('app', 'Video operator for a wedding Kiev') . " ZEFIRMA " .
	Yii::t('app', 'Wedding videography and wedding video');

?>
<div class="container">
	<div class="site-contact">
	
	<div class='row center'>
	    <h1><?= Html::encode(Yii::t('app', 'Our friends')) ?></h1>
	</div>
	
	<br>
	    
	<div class='row center'>	
		<a href="http://sashamisha.com.ua" target="_blank" class='friend'>Фотографы Саша и Миша</a><br><br>
		<a href="http://dna-assistance.com" target="_blank">DNA Assistance - Аренда музыкального оборудования</a><br><br>
		<a href="http://martvisual.com" target="_blank">Фотограв Максим Артемчук</a><br><br>
		<a href="http://vk.com/halayj" target="_blank">Алексей Халайджи</a><br><br>
		<a href="http://www.kostiuk.com.ua" target="_blank">Денис Костюк</a><br><br>
		<a href="http://sergeysavchenko.com.ua" target="_blank">Сергей Савченко</a><br><br>
	</div>
	    
	</div>

</div>
