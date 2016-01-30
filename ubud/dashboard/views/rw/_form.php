<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Rw */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rw-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rw')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ket_rw')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_ketua_rt')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
