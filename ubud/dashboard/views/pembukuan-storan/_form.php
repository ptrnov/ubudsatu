<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Pembukuan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pembukuan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TGL')->textInput() ?>

    <?= $form->field($model, 'TYPE')->textInput() ?>

    <?= $form->field($model, 'CHILD')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SRC')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SRC_DSC_REF')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SRC_DSC')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SRC_DSC_QTY')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SRC_DSC_PRICE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SRC_DSC_DETAIL')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'KETERANGAN')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'STATUS')->textInput() ?>

    <?= $form->field($model, 'CREATED_BY')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UPDATED_BY')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CREATED_AT')->textInput() ?>

    <?= $form->field($model, 'UPDATED_TIME')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
