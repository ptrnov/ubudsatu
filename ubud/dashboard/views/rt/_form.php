<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Rt */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rt-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_rw')->textInput() ?>

    <?= $form->field($model, 'no_rt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ket_rt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_ketua_rt')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
