<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\IuranSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="iuran-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_iuran_kk') ?>

    <?= $form->field($model, 'id_kk') ?>

    <?= $form->field($model, 'tgl_iuran_kk') ?>

    <?= $form->field($model, 'nilai_iuran_kk') ?>

    <?= $form->field($model, 'ket_iuran_kk') ?>

    <?php // echo $form->field($model, 'status_iuran_kk') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
