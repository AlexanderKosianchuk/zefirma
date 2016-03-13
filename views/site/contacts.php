<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = Yii::t('app', 'Contacts') . ' - ' .  Yii::t('app', 'Video operator for a wedding Kiev') . " ZEFIRMA " .
	Yii::t('app', 'Wedding videography and wedding video');

?>
<div class="container">
<div class="site-contact">

<div class='row center'>	
	<p><img src='/img/contact.png'></p>
</div>

<div class='row center'>
    <h1><?= Html::encode(Yii::t('app', 'Contacts')) ?></h1>
</div>

<div class='row center'>	
<p>darinamazur@gmail.com 
<br><?= Yii::t('app', 'phone') ?> 380935294241 - <?= Yii::t('app', 'Andrew'); ?>
<br><?= Yii::t('app', 'phone') ?> 380934571818 - <?= Yii::t('app', 'Dasha'); ?>
<br><?= Yii::t('app', 'Call from') ?>  10:00 <?= Yii::t('app', 'to') ?> 20:00</p>
</div>

<div class='row center'>
	<h4><?= Html::encode(Yii::t('app', 'Dear Friends')); ?>!</h4>
</div>

<div class='row justifyed'>	
	<p><?= Yii::t('app', 'When you order wedding video filming, 
		you pay not for only one day of work, 
		also for a complex of services which includes filming, 
		film editing (analysis of shots from two or more cameras, 
		installation, work with a sound, individual selection of music, 
		color correction), installation of the clip from the key moments of the movie, 
		final completion for the Internet. 
		It is difficult process which takes from 15 to 25 days'); ?>.
	</p>
	
	<p><?= Yii::t('app', 'We work in Ukraine, Poland, Spain and other countries. 
		We pay ourselves flight, moving and accommodation, you pay only for our work'); ?>.
	</p>
</div>
    
</div>

</div>