<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\RwSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rw-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_rw') ?>

    <?= $form->field($model, 'no_rw') ?>

    <?= $form->field($model, 'ket_rw') ?>

    <?= $form->field($model, 'id_ketua_rt') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
