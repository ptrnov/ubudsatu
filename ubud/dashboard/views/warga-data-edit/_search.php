<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Warga_dataSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="warga-data-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'RT') ?>

    <?= $form->field($model, 'KK_NM') ?>

    <?= $form->field($model, 'RUMAH_BLOCK') ?>

    <?= $form->field($model, 'RUMAH_NO') ?>

    <?php // echo $form->field($model, 'RUMAH_STT') ?>

    <?php // echo $form->field($model, 'JUMLAH_ANGOTA') ?>

    <?php // echo $form->field($model, 'TLP_RUMAH') ?>

    <?php // echo $form->field($model, 'TLP_KANTOR') ?>

    <?php // echo $form->field($model, 'TLP_HP') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
