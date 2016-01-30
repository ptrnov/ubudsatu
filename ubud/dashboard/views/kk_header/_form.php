<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Kk_header */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kk-header-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_kk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_kk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_kk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jml_kk')->textInput() ?>

    <?= $form->field($model, 'ket_kk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_rt')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
