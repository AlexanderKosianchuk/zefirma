<?php

/* @var $this yii\web\View */

use yii\grid\GridView;
use yii\helpers\Html;

$this->title = 'Admin panel';
?>
<div class="container">
	<div class="site-about">
	
		<div class='row center'>
		    <h1><?= $this->title; ?></h1>
		</div>
		
		<div class='row center'>
		<h3><?= 'TO CHANGE OR ADD VIDEO YOU NEED TO COPY ONLY SRC!'; ?></h3>
<XMP>
<iframe width="1280" height="720" 
src="</XMP><span style='background-color:lightcoral;'>https://www.youtube.com/embed/GGq4oU3f6j8</span><XMP>" 
frameborder="0" allowfullscreen></iframe>
</XMP>
		</div>
		
		<div class='row center'>
		    <h3><?= 'Wedding Clips'; ?></h3>
		</div>
    	  		
		<div class='row'>
		<?php
			$gridColumns = [
				['class' => 'yii\grid\SerialColumn'],
				[
					'label' => 'Url',
            		'format' => 'raw',
					'value' => function ($data) {
						return $data->url;
					},
					'contentOptions' => [
						'class' => 'url-val'
					]
				],
				[
		            'class' => 'yii\grid\ActionColumn',
		            'template' => '{delete}',
		            'buttons' => [
		                'delete' => function ($url,$model) {
		                    return '<button class="delete" ' .
								'data-category="'.$model->category.'" '. 
								'data-id="'.$model->id.'" '.
								'"><span class="glyphicon glyphicon-trash"></span></button>';
						}
		            ]
		        ]
			];
			
			echo GridView::widget([
			    'dataProvider'=> $dataProviderClip,
			    'columns' => $gridColumns,
				'tableOptions' => [
					'class' => 'table table-striped table-bordered',
					'data-category' => 'clip'		
				]
			]); 
		?>
		
		<button type="button" class="btn btn-primary btn-md btn-add-video" data-toggle="modal" 
			data-target="#myModal" data-category='clip'>
			Add video to Wedding Clips page
		</button>
		
		</div>
		<br><br>
		<div class='row center'>
		    <h3><?= 'Wedding Moovies'; ?></h3>
		</div>
		
		<div class='row'>
		<?php
			echo GridView::widget([
			    'dataProvider'=> $dataProviderVideo,
			    'columns' => $gridColumns,
				'tableOptions' => [
					'class' => 'table table-striped table-bordered',
					'data-category' => 'video'		
				]
			]); 
		?>
		<button type="button" class="btn btn-primary btn-md btn-add-video" data-toggle="modal" 
			data-target="#myModal" data-category='video'>
			Add video to Wedding Moovies page
		</button>
		
		</div>
		<br><br>
		<div class='row center'>
		    <h3><?= 'Family Movies'; ?></h3>
		</div>

		<div class='row'>
		<?php
			echo GridView::widget([
			    'dataProvider'=> $dataProviderLovestory,
			    'columns' => $gridColumns,
				'tableOptions' => [
					'class' => 'table table-striped table-bordered',
					'data-category' => 'lovestory'		
				]
			]); 
		?>
		
		<button type="button" class="btn btn-primary btn-md btn-add-video" data-toggle="modal" 
			data-target="#myModal" data-category='lovestory'>
			Add video to Lovestory page
		</button>
		
		</div>
		<br><br>
		<div class='row center'>
		    <h3><?= 'Different'; ?></h3>
		</div>
		
		<div class='row'>
		<?php
			echo GridView::widget([
			    'dataProvider'=> $dataProviderDifferent,
			    'columns' => $gridColumns,
				'tableOptions' => [
					'class' => 'table table-striped table-bordered',
					'data-category' => 'different'		
				]
			]); 
		?>
		
		<button type="button" class="btn btn-primary btn-md btn-add-video" data-toggle="modal" 
			data-target="#myModal" data-category='different'>
			Add video to Different page
		</button>
		
		</div>
		
		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Add url</h4>
		      </div>
		      <div class="modal-body">
		        <div class='form-group'>
		        	<input type='text' id='url' class='form-control'/>
		        </div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        <button type="button" id='save' class="btn btn-primary" data-dismiss="modal">Save changes</button>
		      </div>
		    </div>
		  </div>
		</div>
		
	</div>
</div>

<?php 
$this->registerJsFile(Yii::$app->request->baseUrl.'/js/admin.js',
		['depends' => [\app\assets\BowerAsset::className()]]); 
?>

