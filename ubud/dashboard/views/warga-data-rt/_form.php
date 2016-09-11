<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use kartik\widgets\DepDrop;
use kartik\widgets\TouchSpin;
/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Warga_data */
/* @var $form yii\widgets\ActiveForm */

use ubud\dashboard\models\Warga_status;
use ubud\dashboard\models\Rt;
use ubud\dashboard\models\Warga_block;
$sttNm = ArrayHelper::map(Warga_status::find()->all(), 'ID', 'RUMAH_STATUS');
$dataRt = ArrayHelper::map(Rt::find()->all(), 'id_rt', 'ket_rt');
$dataBlock1 = ArrayHelper::map(Warga_block::find()->all(), 'RUMAH_BLOCK', 'RUMAH_BLOCK');

	/* $aryBlok= [
		  ['RUMAH_BLOCK' => 1, 'DESCRIP' => 'G1'],		  
		  ['RUMAH_BLOCK' => 2, 'DESCRIP' => 'G2'],
		  ['RUMAH_BLOCK' => 3, 'DESCRIP' => 'G3'],
		  ['RUMAH_BLOCK' => 4, 'DESCRIP' => 'G4'],
		  ['RUMAH_BLOCK' => 5, 'DESCRIP' => 'G5'],
		  ['RUMAH_BLOCK' => 6, 'DESCRIP' => 'G6'],
		  ['RUMAH_BLOCK' => 7, 'DESCRIP' => 'G7'],
		  ['RUMAH_BLOCK' => 8, 'DESCRIP' => 'G8'],
		  ['RUMAH_BLOCK' => 9, 'DESCRIP' => 'G27'],
		  ['RUMAH_BLOCK' => 10, 'DESCRIP' => 'G28'],
		  ['RUMAH_BLOCK' => 11, 'DESCRIP' => 'G29'],
		  ['RUMAH_BLOCK' => 12, 'DESCRIP' => 'G30'],
		  ['RUMAH_BLOCK' => 13, 'DESCRIP' => 'G31'],
		  ['RUMAH_BLOCK' => 14, 'DESCRIP' => 'G32'],
	];	
	$valBlok = ArrayHelper::map($aryBlok, 'DESCRIP', 'DESCRIP'); */


?>

<div class="warga-data-form">

    <?php $form = ActiveForm::begin([
                'id'=>'createwarga',
                'enableClientValidation' => true,
		//'type' => ActiveForm::TYPE_HORIZONTAL,
		'method' => 'post',
		'action' => ['/dashboard/warga-data-rt/simpan'],
		]); 
	?>

   
	 <?= $form->field($model, 'rw_disply')->textInput(['value'=>'RT'.Yii::$app->user->identity->warga,'readonly'=>true])->label('Rukun Tetangga'); ?>
	 <?= $form->field($model, 'RT')->hiddenInput(['value'=>Yii::$app->user->identity->warga,'readonly'=>true])->label(false) ?>
     <?= $form->field($model, 'KK_NM')->textInput(['maxlength' => true]) ?>
	<div>
		<div style="float:right; width:25%">
		  <?= $form->field($model, 'noAlfa')->textInput(['maxlength' => true]) ?>
		</div>
		<div style="float:right; width:25%">
			<?= $form->field($model, 'noInt')->widget(TouchSpin::classname(), [
					'name' => 't4',
					'options' => ['placeholder' => 'No Rumah ...'],			
					'pluginOptions' => [
						'buttonup_class' => 'btn btn-primary', 
						'buttondown_class' => 'btn btn-info', 
						'buttonup_txt' => '<i class="glyphicon glyphicon-plus-sign"></i>', 
						'buttondown_txt' => '<i class="glyphicon glyphicon-minus-sign"></i>'
					]
				])
			?>			
		</div>
		<div style=" width:50%">
			<?= $form->field($model, 'RUMAH_BLOCK')->dropDownList($dataBlock1,['id'=>'data-warga-block-id']); ?>
		</div>
	</div>
	<?= $form->field($model, 'RUMAH_STT')->dropDownList($sttNm,['id'=>'data-warga-rumastatus']); ?>

      <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
