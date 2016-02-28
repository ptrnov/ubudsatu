<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Warga_data */

//$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Warga Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="warga-data-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php
		//if($model->PHOTO == null){ $gmbr = "df.jpg"; } else { $gmbr = $model->PHOTO; } 
		echo DetailView::widget([
			'model' => $model,
			'attributes' => [			
				[
					'attribute'=>'PHOTO',
					'value'=>Yii::$app->urlManager->baseUrl.'/upload/photo_warga/'.$model->PHOTO,
					'format' => ['image',['width'=>'150','height'=>'150']],
				],	
				[
					'label' => 'Parent',
					'value' => 'RT0'.$model->RT,
				],
				'KK_NM',
				'RUMAH_BLOCK',
				'RUMAH_NO',
				[
					'label' => 'Parent',
					'attribute' => 'Sttnm',
				],
				'JUMLAH_ANGOTA',
				'TLP_RUMAH',
				'TLP_KANTOR',
				'TLP_HP',
			],
		]) 
	?>

</div>
