<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Warga_anggota */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="warga-anggota-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NO_WARGA')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
