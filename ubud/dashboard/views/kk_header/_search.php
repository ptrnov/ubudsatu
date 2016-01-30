<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Kk_headerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kk-header-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_kk') ?>

    <?= $form->field($model, 'nama_kk') ?>

    <?= $form->field($model, 'alamat_kk') ?>

    <?= $form->field($model, 'status_kk') ?>

    <?= $form->field($model, 'jml_kk') ?>

    <?php // echo $form->field($model, 'ket_kk') ?>

    <?php // echo $form->field($model, 'id_rt') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
