<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Iuran */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="iuran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_kk')->textInput() ?>

    <?= $form->field($model, 'tgl_iuran_kk')->textInput() ?>

    <?= $form->field($model, 'nilai_iuran_kk')->textInput() ?>

    <?= $form->field($model, 'ket_iuran_kk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_iuran_kk')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
