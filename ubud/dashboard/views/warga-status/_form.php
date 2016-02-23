<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Warga_status */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="warga-status-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'RUMAH_STATUS')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
