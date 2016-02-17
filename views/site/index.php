<?php

/* @var $this yii\web\View */

$this->title = Yii::t('app', 'Video operator for a wedding Kiev') . " ZEFIRMA " .
	Yii::t('app', 'Wedding videography and wedding video');

?>
<div class="site-index">

    <div class="body-content">
		 <div class="row center">
			 <h4><?= Yii::t('app', 'Wedding clips'); ?></h4>
		 </div>
		 
		 <?php 
			 $ii = 0;
			 foreach ($iframeUrls as $item): 
			 if(($ii % 2) == 0):
		 ?>
        	<div class="row">
	     <?php endif; ?>
	     
            <div class="col-md-6 col-cell-padding">
            	<div class="embed-responsive embed-responsive-16by9">
                	<iframe class="embed-responsive-item" src="<?= $item['url']; ?>" frameborder="0" allowfullscreen></iframe>
            	</div>
            </div>
		<?php if(($ii % 2) == 1): ?>
        	</div>
        <?php endif; ?>
        <?php
        	$ii++;
        	endforeach; 
        ?>

    </div>
</div>
