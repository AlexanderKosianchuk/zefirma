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
<p>darinamazur@gmail.com </p>
<p><?= Yii::t('app', 'phone') ?> 380935294241 - <?= Yii::t('app', 'Andrew'); ?></p>
<p><?= Yii::t('app', 'phone') ?> 380934571818 - <?= Yii::t('app', 'Dasha'); ?></p>
<p><?= Yii::t('app', 'Call from') ?>  10:00 <?= Yii::t('app', 'to') ?> 20:00</p>
</div>

<div class='row center'>
	<h1><?= Html::encode(Yii::t('app', 'Dear Friends')); ?>!</h1>
</div>

<div class='row justifyed'>	
	<p><?= Yii::t('app', 'When you order a wedding videotape, 
			you do not pay for one day of work, 
			and for a range of services, 
			which includes the very filming, 
			film editing (parsing frames with two or more cameras, 
			the further installation, not worked with sound, 
			personal selection of music, color correction), 
			mounting clip of the key moments of the film, 
			the final revision for the Internet. 
			This is a complex process that takes 15 to 25 days'); ?>.
	</p>
	
	<p><?= Yii::t('app', 'We are shooting in Ukraine, Poland, Spain and other countries.
		Flight, travel and accommodation, we pay ourselves,
		you only pay for our work'); ?>.
	</p>
</div>
    
</div>

</div>