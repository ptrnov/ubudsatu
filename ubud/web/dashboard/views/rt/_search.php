<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\RtSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rt-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_rt') ?>

    <?= $form->field($model, 'id_rw') ?>

    <?= $form->field($model, 'no_rt') ?>

    <?= $form->field($model, 'ket_rt') ?>

    <?= $form->field($model, 'id_ketua_rt') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
