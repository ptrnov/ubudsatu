<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Kk_detail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kk-detail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_kk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_rt')->textInput() ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
