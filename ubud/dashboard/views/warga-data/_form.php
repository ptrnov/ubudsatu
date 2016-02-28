<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Warga_data */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="warga-data-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'RT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KK_NM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RUMAH_BLOCK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RUMAH_NO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RUMAH_STT')->textInput() ?>

    <?= $form->field($model, 'JUMLAH_ANGOTA')->textInput() ?>

    <?= $form->field($model, 'TLP_RUMAH')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TLP_KANTOR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TLP_HP')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
