<?php

/* @var $this yii\web\View */

$this->title = $title . " ZEFIRMA " .
	Yii::t('app', 'Wedding videography and wedding video');

?>
<div class="container">
	<div class="site-index">
	
	    <div class="body-content">
			 <div class="row center">
				 <h4><?= $title ?></h4>
			 </div>		 
			 
			 <?php 
				 $ii = 0;
				 foreach ($video as $item): 
				 if(($ii % 2) == 0):
			 ?>
	        	<div class="row">
		     <?php endif; ?>
		     
	            <div class="col-md-6 col-cell-padding">
	            	<div class="embed-responsive embed-responsive-16by9 blackbg">
	                	<iframe class="embed-responsive-item" data-src="<?= $item['url']; ?>" frameborder="0" allowfullscreen></iframe>
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
</div>
