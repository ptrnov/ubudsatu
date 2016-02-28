<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use kartik\widgets\DepDrop;
use kartik\widgets\TouchSpin;

use ubud\dashboard\models\Pembukuan_type;
use ubud\dashboard\models\Pembukuan_child;
use ubud\dashboard\models\Pembukuan_golongan;
use ubud\dashboard\models\Rt;

	$filterTypeNm = ArrayHelper::map(Pembukuan_type::find()->all(), 'TYPE_ID', 'TYPE_NM');
	$filterChildNm = ArrayHelper::map(Pembukuan_child::find()->where(['SRC'=>'rw11'])->all(), 'CHILD_ID', 'CHILD_NM');
	$dataRt = ArrayHelper::map(Rt::find()->all(), 'id_rt', 'ket_rt');

	$arySource= [
		  ['user_warga' => 'rw11', 'DESCRIP' => 'RW11'],		  
		  ['user_warga' => 1, 'DESCRIP' => 'RT01'],
		  ['user_warga' => 2, 'DESCRIP' => 'RT02'],
		  ['user_warga' => 3, 'DESCRIP' => 'RT03'],
		  ['user_warga' => 4, 'DESCRIP' => 'RT04'],
	];	
	$valSource = ArrayHelper::map($arySource, 'user_warga', 'DESCRIP');
	
	$tglSkarang=date('Y-m-d h:i:s');
	if (!Yii::$app->user->isGuest){
		$idWarga=Yii::$app->user->identity->warga!=''?Yii::$app->user->identity->warga:'rw11';
	}
?>

<div class="pembukuan-form">

   <?php $form = ActiveForm::begin([
                'id'=>'create-lap',
                'enableClientValidation' => true,
		//'type' => ActiveForm::TYPE_HORIZONTAL,
		'method' => 'post',
		'action' => ['/dashboard/pembukuan-harian/simpan'],
		]); 
	?>

    <?= $form->field($model, 'TGL')->textInput(['value'=>$tglSkarang,'readonly'=>true])->label('Tanggal'); ?>

   <?= $form->field($model, 'TYPE')->dropDownList($filterTypeNm, ['id'=>'pembukuan-type'])->label('Type Pembukuan'); ?>
	<?php 
		echo $form->field($model, 'CHILD')->widget(DepDrop::classname(), [
			'type'=>DepDrop::TYPE_SELECT2,
			'data' => $filterChildNm,
			'options' => ['id'=>'pembukuan-child'],
			'pluginOptions' => [
				'depends'=>['pembukuan-type'],
				'url'=>Url::to(['/dashboard/pembukuan-harian/ktg-type']),
				'initialize'=>true,
			], 		
		])->label('Kategori Pembukuan');;
	?>
    <?php // $form->field($model, 'CHILD')->textInput(['maxlength' => true])->label('Kategori Pembukuan'); ?>

    <?php //$form->field($model, 'SRC')->hiddenInput(['value'=>$idWarga,'maxlength' => true])->label(false); ?>

    <?php //$form->field($model, 'SRC_DSC_REF')->hiddenInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SRC_DSC')->dropDownList($valSource,['maxlength' => true]) ?>

    <?= $form->field($model, 'SRC_DSC_QTY')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SRC_DSC_PRICE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SRC_DSC_DETAIL')->textarea(['rows' => 6]) ?>


    <?php
		/* 
		$form->field($model, 'KETERANGAN')->textarea(['rows' => 6])
		$form->field($model, 'STATUS')->textInput();

		$form->field($model, 'CREATED_BY')->textInput(['maxlength' => true])  

		$form->field($model, 'UPDATED_BY')->textInput(['maxlength' => true]) 

        $form->field($model, 'CREATED_AT')->textInput() 

       $form->field($model, 'UPDATED_TIME')->textInput()  */
	?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
