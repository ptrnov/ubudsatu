<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\ArrayHelper;	
/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Pembukuan */

//$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Pembukuans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

use ubud\dashboard\models\Pembukuan_type;
use ubud\dashboard\models\Pembukuan_child;
use ubud\dashboard\models\Pembukuan_golongan;
use ubud\dashboard\models\Rt;

	//$filterTypeNm = ArrayHelper::map(Pembukuan_type::find()->all(), 'TYPE_ID', 'TYPE_NM');
	//$filterChildNm = ArrayHelper::map(Pembukuan_child::find()->where(['SRC'=>'rw11'])->all(), 'CHILD_ID', 'CHILD_NM');
	//$dataRt = ArrayHelper::map(Rt::find()->all(), 'id_rt', 'ket_rt');

	$arySource= [
		  ['user_warga' => 'rw11', 'DESCRIP' => 'RW11'],		  
		  ['user_warga' => 1, 'DESCRIP' => 'RT01'],
		  ['user_warga' => 2, 'DESCRIP' => 'RT02'],
		  ['user_warga' => 3, 'DESCRIP' => 'RT03'],
		  ['user_warga' => 4, 'DESCRIP' => 'RT04'],
	];	
	$valSource = ArrayHelper::map($arySource, 'user_warga', 'DESCRIP');


?>
<div class="pembukuan-view">


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'ID',
			'SRC_DSC_REF',
            'TGL',
			[
				'label' => 'Type Pembukuan',
				'value' => $model->Typenm,
			],
			[
				'label' => 'Type Pembukuan',
				'value' => $model->Childnm,
			],			
            //'TYPE',
            //'CHILD',
            'SRC',            
            'SRC_DSC',
            'SRC_DSC_QTY',
            'SRC_DSC_PRICE',
            'SRC_DSC_DETAIL',
            //'KETERANGAN:ntext',
            'STATUS',
            //'CREATED_BY',
            //'UPDATED_BY',
           // 'CREATED_AT',
            //'UPDATED_TIME',
        ],
    ]) ?>

</div>
