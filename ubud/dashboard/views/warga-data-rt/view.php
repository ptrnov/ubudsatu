<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Warga_data */
use ubud\dashboard\models\Warga_status;

//$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Warga Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="warga-data-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php // Html::a('Edit', ['edit', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?php 
			/* echo  Html::a('Delete', ['delete', 'id' => $model->ID], [
				'class' => 'btn btn-danger',
				'data' => [
					'confirm' => 'Are you sure you want to delete this item?',
					'method' => 'post',
				],
			]) */
		?>
    </p>

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
